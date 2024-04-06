<?php
// Define allowed directories
$allowed_directories = array(
    '/path/to/secure/directory1/',
    '/path/to/secure/directory2/'
);

// Get the filename from the user input
$filename = $_GET['file'];

// Check if the requested file is within the allowed directories
$allowed = false;
foreach ($allowed_directories as $directory) {
    if (strpos(realpath($filename), $directory) === 0) {
        $allowed = true;
        break;
    }
}

// If the requested file is not within allowed directories, deny access
if (!$allowed) {
    header('HTTP/1.0 403 Forbidden');
    echo "Access Forbidden";
    exit;
}

// Load and display the requested file
readfile($filename);
?>
