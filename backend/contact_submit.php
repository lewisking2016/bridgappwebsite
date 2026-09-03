<?php
// backend/contact_submit.php
header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

// --- Rate Limiting (per IP, 5 submissions per 5 minutes) ---
function checkRateLimit(string $ip): bool {
    $logDir = __DIR__ . '/logs';
    if (!is_dir($logDir)) {
        @mkdir($logDir, 0755, true);
    }
    $rateFile = $logDir . '/rate_limits.json';
    $now = time();
    $window = 300; // 5 minutes
    $maxAttempts = 5;

    $data = [];
    if (file_exists($rateFile)) {
        $data = json_decode(@file_get_contents($rateFile), true) ?: [];
    }

    // Clean old entries
    $data = array_filter($data, fn($entry) => ($now - $entry['time']) < $window);

    $ipKey = md5($ip);
    $attempts = isset($data[$ipKey]) ? $data[$ipKey]['count'] : 0;

    if ($attempts >= $maxAttempts) {
        return false;
    }

    if (!isset($data[$ipKey])) {
        $data[$ipKey] = ['count' => 0, 'time' => $now];
    }
    $data[$ipKey]['count']++;
    $data[$ipKey]['time'] = $now;

    @file_put_contents($rateFile, json_encode($data), LOCK_EX);
    return true;
}

// --- CSRF Token Validation ---
function validateCsrfToken(?string $token): bool {
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    if (empty($token) || empty($_SESSION['csrf_token'])) {
        return false;
    }
    return hash_equals($_SESSION['csrf_token'], $token);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method.',
    ]);
    exit;
}

// Rate limit check
$clientIp = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
if (!checkRateLimit($clientIp)) {
    http_response_code(429);
    echo json_encode([
        'status' => 'error',
        'message' => 'Too many requests. Please wait a few minutes before trying again.',
    ]);
    exit;
}

// CSRF validation
$csrfToken = filter_input(INPUT_POST, 'csrf_token', FILTER_UNSAFE_RAW);
if (!validateCsrfToken($csrfToken)) {
    http_response_code(403);
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid security token. Please refresh the page and try again.',
    ]);
    exit;
}

require_once __DIR__ . '/config.php';

$allowedServices = [
    'erp',
    'pos',
    'elearning',
    'rental',
    'warehouse',
    'school',
    'agent',      // legacy alias — kept for backward compatibility
    'partner',
    'custom',
    'other',
];

$name = trim((string) filter_input(INPUT_POST, 'name', FILTER_UNSAFE_RAW));
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$serviceType = strtolower(trim((string) filter_input(INPUT_POST, 'service_type', FILTER_UNSAFE_RAW)));
$message = trim((string) filter_input(INPUT_POST, 'message', FILTER_UNSAFE_RAW));

// Input length limits (defense in depth)
$name = substr($name, 0, 200);
$email = $email !== false ? substr($email, 0, 254) : false;
$serviceType = substr($serviceType, 0, 50);
$message = substr($message, 0, 5000);

if ($name === '') {
    echo json_encode(['status' => 'error', 'message' => 'Please provide your full name.']);
    exit;
}

if ($email === false || $email === null) {
    echo json_encode(['status' => 'error', 'message' => 'Please enter a valid email address.']);
    exit;
}

if ($serviceType === '' || !in_array($serviceType, $allowedServices, true)) {
    echo json_encode(['status' => 'error', 'message' => 'Please select a valid project type.']);
    exit;
}

if ($message === '') {
    echo json_encode(['status' => 'error', 'message' => 'Please enter your message.']);
    exit;
}

$savedToDb = false;
$db = getDBConnection();

if ($db instanceof mysqli) {
    $stmt = $db->prepare('INSERT INTO inquiries (name, email, service_type, message) VALUES (?, ?, ?, ?)');
    if ($stmt instanceof mysqli_stmt) {
        $stmt->bind_param('ssss', $name, $email, $serviceType, $message);
        $savedToDb = $stmt->execute();
        $stmt->close();
    }
}

if (!$savedToDb) {
    $logDir = __DIR__ . '/logs';
    if (!is_dir($logDir)) {
        @mkdir($logDir, 0755, true);
    }

    $logFile = $logDir . '/inquiries_fallback.log';
    $logEntry = sprintf(
        "[%s] Name: %s | Email: %s | Service: %s\nMessage: %s\n----------------------------------------\n",
        date('Y-m-d H:i:s'),
        $name,
        $email,
        $serviceType,
        $message
    );

    @file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
}

echo json_encode([
    'status' => 'success',
    'message' => 'Thank you for your message! Our engineering leads will contact you shortly.',
]);
exit;
