<?php
// backend/config.php
// Database configuration for cPanel/Localhost hosting
define('DB_HOST', 'localhost');
define('DB_USER', 'bridgapp_user');
define('DB_PASS', 'bridgapp_user');
define('DB_NAME', 'dqzdepcp_bridgapp');

// SMTP Mail Configuration (Zoho Mail)
define('MAIL_MAILER', 'smtp');
define('MAIL_HOST', 'smtp.zoho.com');
define('MAIL_PORT', 587);
define('MAIL_USERNAME', 'admin@bridgapp.co.ke');
define('MAIL_PASSWORD', 'lewisking2005');
define('MAIL_ENCRYPTION', 'tls');
define('MAIL_FROM_ADDRESS', 'admin@bridgapp.co.ke');
define('MAIL_FROM_NAME', 'BridgApp Africa');
define('ADMIN_NOTIFICATION_EMAIL', 'admin@bridgapp.co.ke');

// Google reCAPTCHA v2 Configuration
define('RECAPTCHA_SITE_KEY', '6Ld-YOUR_SITE_KEY');
define('RECAPTCHA_SECRET_KEY', '6Ld-YOUR_SECRET_KEY');

/**
 * Get Database Connection
 * Fallback to null if connection fails to keep the website functional.
 */
function getDBConnection() {
    static $conn = null;
    if ($conn !== null) {
        return $conn;
    }
    
    try {
        // Disable error reporting during connection to avoid leaking credentials
        mysqli_report(MYSQLI_REPORT_OFF);
        $conn = @new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        if ($conn->connect_error) {
            // Log connection error silently or handle it
            $conn = null;
        } else {
            $conn->set_charset("utf8mb4");
        }
    } catch (Exception $e) {
        $conn = null;
    }
    
    return $conn;
}
?>
