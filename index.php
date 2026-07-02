<?php
/**
 * Perpustakaan SMA Kharisma Nurul Amal
 * QR Inventory Management System
 */

session_start();

// Set error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define base path
define('BASE_PATH', __DIR__ . '/');

// Load configuration
require_once BASE_PATH . 'config/constants.php';
require_once BASE_PATH . 'config/Database.php';

// Initialize database connection
$db = \Config\Database::getInstance();

// Simple router
$request_uri = $_SERVER['REQUEST_URI'];
$base_url = dirname($_SERVER['PHP_SELF']);
$path = str_replace($base_url, '', $request_uri);
$path = parse_url($path, PHP_URL_PATH);
$path = trim($path, '/');

// Default page
if (empty($path) || $path === basename(__FILE__)) {
    if (isset($_SESSION['user_id'])) {
        $path = 'dashboard';
    } else {
        $path = 'auth/login';
    }
}

// Route mapping
switch (true) {
    // Auth routes
    case preg_match('/^auth\/(login|register|logout)/', $path):
        require_once BASE_PATH . 'src/views/auth.php';
        break;
    
    // Dashboard
    case $path === 'dashboard':
        require_once BASE_PATH . 'src/views/dashboard.php';
        break;
    
    // Inventory
    case preg_match('/^inventory/', $path):
        require_once BASE_PATH . 'src/views/inventory.php';
        break;
    
    // QR Code
    case preg_match('/^qr/', $path):
        require_once BASE_PATH . 'src/views/qr.php';
        break;
    
    // Reports
    case preg_match('/^reports/', $path):
        require_once BASE_PATH . 'src/views/reports.php';
        break;
    
    // Users (Admin only)
    case preg_match('/^users/', $path):
        require_once BASE_PATH . 'src/views/users.php';
        break;
    
    // API endpoints
    case preg_match('/^api\//', $path):
        require_once BASE_PATH . 'src/api/router.php';
        break;
    
    default:
        http_response_code(404);
        echo '404 - Page Not Found';
        break;
}
