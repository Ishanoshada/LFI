<?php
$file = $_GET['file']; // Get the file parameter from the URL

// Check if the file exists and is readable
if (file_exists($file) && is_readable($file)) {
    // Display the content of the file
    echo file_get_contents($file);
} else {
    // If the file doesn't exist or is not readable, display an error message
    echo "File not found or inaccessible.";
}
?>
