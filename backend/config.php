<?php
// backend/config.php
// Database configuration for cPanel/Localhost hosting
define('DB_HOST', 'localhost');
define('DB_USER', 'bridgapp_user');
define('DB_PASS', 'bridgapp_user');
define('DB_NAME', 'dqzdepcp_bridgapp');

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
