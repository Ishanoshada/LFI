
### 1. Input Validation:
Validate user input to ensure it only includes expected values.

```php
$file = isset($_GET['file']) ? $_GET['file'] : '';
$file = preg_replace('/\.\.\//', '', $file); // Remove directory traversal sequences
```

### 2. Whitelisting:
Only allow access to specific files or directories.

```php
$allowed_files = array('file1.php', 'file2.php');
if (!in_array($file, $allowed_files)) {
    // Handle unauthorized access
}
```

### 3. Absolute Paths:
Use absolute paths instead of relative paths to prevent directory traversal.

```php
$file_path = '/var/www/html/' . $file;
if (!file_exists($file_path)) {
    // Handle non-existent file
}
```

### 4. Disable URL Include:
Disable remote file inclusion in PHP configuration.

```php
// In php.ini
allow_url_include = Off
```

### 5. Limit File Extensions:
Restrict file extensions to prevent inclusion of non-PHP files.

```php
$file_ext = pathinfo($file, PATHINFO_EXTENSION);
if ($file_ext !== 'php') {
    // Handle invalid file extension
}
```

### 6. Encode Output:
Encode output to prevent execution of injected PHP code.

```php
echo htmlentities(file_get_contents($file), ENT_QUOTES);
```

### 7. Set Open Basedir:
Limit the directories PHP can access with open_basedir directive.

```php
// In php.ini
open_basedir = "/var/www/html:/tmp"
```

### 8. Use PHP Functions:
Utilize PHP built-in functions for file operations.

```php
$file_path = '/var/www/html/' . basename($file);
if (!file_exists($file_path)) {
    // Handle non-existent file
}
```

### 9. Server-Side Validation:
Perform server-side validation in addition to client-side validation.

```php
if (strpos($file, '../') !== false) {
    // Handle directory traversal attempt
}
```

### 10. Error Handling:
Implement proper error handling to obscure system details.

```php
if (!@include($file)) {
    // Handle include failure
}
```

Remember to combine multiple methods for robust protection against LFI vulnerabilities. Additionally, stay updated with security best practices and regularly audit your code for potential vulnerabilities.
