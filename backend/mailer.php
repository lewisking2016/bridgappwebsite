<?php
// backend/mailer.php
require_once __DIR__ . '/config.php';

class SimpleSMTPMailer {
    private string $host;
    private int $port;
    private string $username;
    private string $password;
    private string $encryption;
    private string $fromAddress;
    private string $fromName;

    public function __construct() {
        $this->host = defined('MAIL_HOST') ? MAIL_HOST : 'smtp.zoho.com';
        $this->port = defined('MAIL_PORT') ? (int)MAIL_PORT : 587;
        $this->username = defined('MAIL_USERNAME') ? MAIL_USERNAME : 'admin@bridgapp.co.ke';
        $this->password = defined('MAIL_PASSWORD') ? MAIL_PASSWORD : 'lewisking2005';
        $this->encryption = defined('MAIL_ENCRYPTION') ? MAIL_ENCRYPTION : 'tls';
        $this->fromAddress = defined('MAIL_FROM_ADDRESS') ? MAIL_FROM_ADDRESS : 'admin@bridgapp.co.ke';
        $this->fromName = defined('MAIL_FROM_NAME') ? MAIL_FROM_NAME : 'BridgApp Africa';
    }

    /**
     * Send email via direct socket connection to Zoho SMTP
     */
    public function send(string $toAddress, string $subject, string $htmlBody, string $textBody = ''): bool {
        $socket = @fsockopen($this->host, $this->port, $errno, $errstr, 15);
        if (!$socket) {
            $this->logError("Connection failed to {$this->host}:{$this->port}: $errstr ($errno)");
            return false;
        }

        stream_set_timeout($socket, 15);

        if (!$this->expectResponse($socket, '220')) return false;

        $this->sendCommand($socket, "EHLO " . gethostname());
        if (!$this->expectResponse($socket, '250')) return false;

        if ($this->encryption === 'tls') {
            $this->sendCommand($socket, "STARTTLS");
            if (!$this->expectResponse($socket, '220')) return false;

            $cryptoMethod = STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT;
            if (defined('STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT')) {
                $cryptoMethod |= STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT;
            }

            if (!@stream_socket_enable_crypto($socket, true, $cryptoMethod)) {
                $this->logError("TLS encryption handshake failed.");
                fclose($socket);
                return false;
            }

            $this->sendCommand($socket, "EHLO " . gethostname());
            if (!$this->expectResponse($socket, '250')) return false;
        }

        // Authenticate
        $this->sendCommand($socket, "AUTH LOGIN");
        if (!$this->expectResponse($socket, '334')) return false;

        $this->sendCommand($socket, base64_encode($this->username));
        if (!$this->expectResponse($socket, '334')) return false;

        $this->sendCommand($socket, base64_encode($this->password));
        if (!$this->expectResponse($socket, '235')) return false;

        // Envelope
        $this->sendCommand($socket, "MAIL FROM: <" . $this->fromAddress . ">");
        if (!$this->expectResponse($socket, '250')) return false;

        $this->sendCommand($socket, "RCPT TO: <" . $toAddress . ">");
        if (!$this->expectResponse($socket, '250')) return false;

        // Data
        $this->sendCommand($socket, "DATA");
        if (!$this->expectResponse($socket, '354')) return false;

        // Headers & Body
        $headers = [];
        $headers[] = "From: =?UTF-8?B?" . base64_encode($this->fromName) . "?= <" . $this->fromAddress . ">";
        $headers[] = "To: <" . $toAddress . ">";
        $headers[] = "Subject: =?UTF-8?B?" . base64_encode($subject) . "?=";
        $headers[] = "MIME-Version: 1.0";
        $headers[] = "Date: " . date(DATE_RFC2822);
        $headers[] = "Message-ID: <" . time() . "." . uniqid() . "@bridgapp.co.ke>";
        
        $boundary = "b1_" . md5(uniqid());
        $headers[] = "Content-Type: multipart/alternative; boundary=\"" . $boundary . "\"";

        $messagePayload = implode("\r\n", $headers) . "\r\n\r\n";
        
        // Plain text part
        if (empty($textBody)) {
            $textBody = strip_tags($htmlBody);
        }
        $messagePayload .= "--" . $boundary . "\r\n";
        $messagePayload .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $messagePayload .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
        $messagePayload .= $textBody . "\r\n\r\n";

        // HTML part
        $messagePayload .= "--" . $boundary . "\r\n";
        $messagePayload .= "Content-Type: text/html; charset=UTF-8\r\n";
        $messagePayload .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
        $messagePayload .= $htmlBody . "\r\n\r\n";
        $messagePayload .= "--" . $boundary . "--\r\n.";

        $this->sendCommand($socket, $messagePayload);
        if (!$this->expectResponse($socket, '250')) return false;

        $this->sendCommand($socket, "QUIT");
        fclose($socket);
        return true;
    }

    private function sendCommand($socket, string $command): void {
        fputs($socket, $command . "\r\n");
    }

    private function expectResponse($socket, string $expectedCode): bool {
        $response = '';
        while ($str = fgets($socket, 512)) {
            $response .= $str;
            if (substr($str, 3, 1) === ' ') break;
        }
        if (substr($response, 0, 3) !== $expectedCode) {
            $this->logError("SMTP Expected $expectedCode but got: $response");
            return false;
        }
        return true;
    }

    private function logError(string $message): void {
        $logDir = __DIR__ . '/logs';
        if (!is_dir($logDir)) {
            @mkdir($logDir, 0755, true);
        }
        @file_put_contents($logDir . '/smtp_errors.log', "[" . date('Y-m-d H:i:s') . "] " . $message . "\n", FILE_APPEND | LOCK_EX);
    }
}

/**
 * Automated helper function to dispatch notification & user auto-responder emails
 */
function sendInquiryEmails(string $name, string $email, string $serviceType, string $message, string $refCode = '', string $clientIp = ''): bool {
    $mailer = new SimpleSMTPMailer();

    if (empty($refCode)) {
        $refCode = 'REF-' . date('Ymd') . '-' . strtoupper(substr(md5(uniqid((string)mt_rand(), true)), 0, 6));
    }
    if (empty($clientIp)) {
        $clientIp = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
    }

    $submissionTime = date('F j, Y \a\t g:i A (T)');

    $serviceLabels = [
        'erp' => 'ERP System',
        'pos' => 'Duka POS',
        'elearning' => 'eLearning Platform',
        'rental' => 'Rental Management',
        'warehouse' => 'Warehouse Management',
        'school' => 'School Management',
        'partner' => 'Partnership Inquiry',
        'custom' => 'Custom Software',
        'other' => 'General Inquiry'
    ];
    $serviceLabel = $serviceLabels[$serviceType] ?? ucfirst($serviceType);

    // 1. Admin Notification Email (Sent to admin@bridgapp.co.ke)
    $adminSubject = "[Ref: {$refCode}] New Inquiry from {$name} ({$serviceLabel})";
    $adminBody = "
    <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; background: #0f172a; color: #f8fafc; padding: 24px; border-radius: 12px; border: 1px solid #334155;'>
        <div style='display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #334155; padding-bottom: 16px; margin-bottom: 16px;'>
            <h2 style='color: #38bdf8; margin: 0;'>🚀 New Website Inquiry</h2>
            <span style='background: #1e293b; color: #38bdf8; padding: 4px 10px; border-radius: 6px; font-size: 12px; font-weight: bold;'>{$refCode}</span>
        </div>
        <p style='color: #94a3b8; font-size: 14px;'>You have received a new consultation request on BridgApp Africa.</p>
        <table style='width: 100%; border-collapse: collapse; margin-top: 16px; font-size: 15px;'>
            <tr><td style='padding: 8px 0; color: #94a3b8; width: 130px;'><strong>Ref Code:</strong></td><td style='color: #38bdf8; font-weight: bold;'>{$refCode}</td></tr>
            <tr><td style='padding: 8px 0; color: #94a3b8;'><strong>Date & Time:</strong></td><td style='color: #f8fafc;'>{$submissionTime}</td></tr>
            <tr><td style='padding: 8px 0; color: #94a3b8;'><strong>Name:</strong></td><td style='color: #f8fafc;'>{$name}</td></tr>
            <tr><td style='padding: 8px 0; color: #94a3b8;'><strong>Email:</strong></td><td style='color: #f8fafc;'><a href='mailto:{$email}' style='color: #38bdf8;'>{$email}</a></td></tr>
            <tr><td style='padding: 8px 0; color: #94a3b8;'><strong>Service:</strong></td><td style='color: #f8fafc;'>{$serviceLabel}</td></tr>
            <tr><td style='padding: 8px 0; color: #94a3b8;'><strong>Client IP:</strong></td><td style='color: #f8fafc;'>{$clientIp}</td></tr>
            <tr><td style='padding: 8px 0; color: #94a3b8; vertical-align: top;'><strong>Message:</strong></td><td style='color: #f8fafc; line-height: 1.5; background: #1e293b; padding: 12px; border-radius: 8px; border: 1px solid #334155;'>" . nl2br(htmlspecialchars($message)) . "</td></tr>
        </table>
    </div>
    ";

    $adminSent = $mailer->send(ADMIN_NOTIFICATION_EMAIL, $adminSubject, $adminBody);

    // 2. Customer Confirmation Auto-responder Email (Sent to submitter)
    $userSubject = "[Ref: {$refCode}] Thank you for contacting BridgApp Africa";
    $userBody = "
    <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; background: #ffffff; color: #1e293b; padding: 24px; border: 1px solid #e2e8f0; border-radius: 12px;'>
        <div style='border-bottom: 2px solid #0284c7; padding-bottom: 12px; margin-bottom: 16px;'>
            <h2 style='color: #0284c7; margin: 0;'>Hello {$name},</h2>
            <p style='color: #64748b; font-size: 13px; margin-top: 4px;'>Inquiry Reference Code: <strong style='color: #0284c7;'>{$refCode}</strong></p>
        </div>
        <p>Thank you for reaching out to <strong>BridgApp Africa</strong>! We have received your inquiry regarding <strong>{$serviceLabel}</strong>.</p>
        <p>Our engineering and solutions team is currently reviewing your details and will get back to you within 24 hours.</p>
        
        <div style='background: #f8fafc; padding: 16px; border-radius: 8px; border-left: 4px solid #0284c7; margin: 20px 0;'>
            <h4 style='margin: 0 0 10px 0; color: #0f172a;'>Summary of Your Submitted Request:</h4>
            <p style='margin: 4px 0; font-size: 14px; color: #475569;'><strong>Reference Code:</strong> {$refCode}</p>
            <p style='margin: 4px 0; font-size: 14px; color: #475569;'><strong>Date:</strong> {$submissionTime}</p>
            <p style='margin: 4px 0; font-size: 14px; color: #475569;'><strong>Service Requested:</strong> {$serviceLabel}</p>
            <p style='margin: 8px 0 4px 0; font-size: 14px; color: #475569;'><strong>Message:</strong></p>
            <div style='background: #ffffff; padding: 10px; border-radius: 6px; border: 1px solid #e2e8f0; font-size: 14px; color: #334155;'>" . nl2br(htmlspecialchars($message)) . "</div>
        </div>
        
        <p>Please keep your reference code <strong>{$refCode}</strong> for any future correspondence regarding this inquiry.</p>
        <p>If you need immediate assistance, feel free to reply directly to this email or call us at <strong>+254 727 585 599</strong>.</p>
        <br />
        <p style='margin-bottom: 0;'>Best regards,</p>
        <p style='margin-top: 4px;'><strong>BridgApp Africa Team</strong><br /><span style='font-size: 13px; color: #64748b;'>Hazina Towers, Utalii Lane, 16th Floor, Nairobi</span></p>
    </div>
    ";

    @$mailer->send($email, $userSubject, $userBody);

    return $adminSent;
}
