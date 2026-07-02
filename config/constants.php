<?php
/**
 * Application Constants
 */

// Database
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASS', getenv('DB_PASS') ?: '');
define('DB_NAME', getenv('DB_NAME') ?: 'perpustakaan_smakna');
define('DB_PORT', getenv('DB_PORT') ?: 3306);

// Application
define('APP_NAME', getenv('APP_NAME') ?: 'Perpustakaan SMA Kharisma Nurul Amal');
define('APP_URL', getenv('APP_URL') ?: 'http://localhost');
define('APP_VERSION', '1.0.0');

// Session
define('SESSION_TIMEOUT', getenv('SESSION_TIMEOUT') ?: 3600);
define('SESSION_COOKIE_NAME', getenv('SESSION_COOKIE_NAME') ?: 'PERPUSTAKAAN_SESS');

// File Upload
define('MAX_UPLOAD_SIZE', getenv('MAX_UPLOAD_SIZE') ?: 10485760);
define('UPLOAD_PATH', __DIR__ . '/../uploads/');

// QR Code
define('QR_CODE_SIZE', getenv('QR_CODE_SIZE') ?: 200);
define('QR_CODE_LEVEL', getenv('QR_CODE_LEVEL') ?: 'M');
define('QR_CODE_FORMAT', getenv('QR_CODE_FORMAT') ?: 'png');

// User Roles
define('ROLE_ADMIN', 'admin');
define('ROLE_OPERATOR', 'operator');
define('ROLE_VIEWER', 'viewer');

// Status
define('STATUS_ACTIVE', 'active');
define('STATUS_INACTIVE', 'inactive');
define('STATUS_ARCHIVED', 'archived');

// Item Types
define('ITEM_TYPE_BUKU', 'buku');
define('ITEM_TYPE_BARANG', 'barang');

// Pagination
define('ITEMS_PER_PAGE', 20);
