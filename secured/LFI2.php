<?php
$file = isset($_GET['file']) ? $_GET['file'] : '';
$file = preg_replace('/\.\.\//', '', $file); // Input validation to remove directory traversal sequences

$allowed_files = array('file1.php', 'file2.php');
if (!in_array($file, $allowed_files)) {
    // Whitelisting: Only allow access to specific files
    header('HTTP/1.0 403 Forbidden');
    echo "Access Forbidden";
    exit;
}

$file_path = '/var/www/html/' . basename($file); // Absolute path to prevent directory traversal
$file_ext = pathinfo($file_path, PATHINFO_EXTENSION);
if ($file_ext !== 'php') {
    // Limit File Extensions: Only allow PHP files
    header('HTTP/1.0 403 Forbidden');
    echo "Access Forbidden";
    exit;
}

if (!file_exists($file_path)) {
    // Check if file exists
    header('HTTP/1.0 404 Not Found');
    echo "File Not Found";
    exit;
}

// Server-Side Validation: Check for directory traversal attempt
if (strpos($file, '../') !== false) {
    header('HTTP/1.0 403 Forbidden');
    echo "Access Forbidden";
    exit;
}

// Disable URL Include: Prevent remote file inclusion
ini_set('allow_url_include', 'Off');

// Set Open Basedir: Limit directories PHP can access
ini_set('open_basedir', '/var/www/html:/tmp');

// Use PHP Functions: Utilize built-in functions for file operations
if (!@include($file_path)) {
    // Error Handling: Handle include failure
    header('HTTP/1.0 500 Internal Server Error');
    echo "Internal Server Error";
    exit;
}

// Encode Output: Prevent execution of injected PHP code
echo htmlentities(file_get_contents($file_path), ENT_QUOTES);
?>
