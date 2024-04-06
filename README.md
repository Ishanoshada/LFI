# 🛡️ LFI Vulnerability Repository

Welcome to the LFI Vulnerability  repository! This comprehensive guide will provide you with everything you need to understand, explore, and mitigate Local File Inclusion (LFI) vulnerabilities in web applications. Whether you're a cybersecurity enthusiast, a web developer, or simply curious about web security, this repository is your ultimate resource.

## 🚀 Dive into the World of LFI Vulnerabilities

Local File Inclusion (LFI) is a critical security vulnerability that occurs when a web application improperly includes files on a server through the web browser. This oversight can lead to severe consequences, including unauthorized access to sensitive files, execution of malicious code, and compromise of the entire web application.

## 🎯 What's Inside?

1. **Example Vulnerable Code**: Get hands-on experience with real-world vulnerable PHP code, showcasing how LFI vulnerabilities can be exploited.

2. **Mitigation Strategies**: Learn best practices for mitigating LFI vulnerabilities, including input validation, whitelisting, and secure coding practices.

3. **Advanced LFI Methods**: Explore advanced techniques used by attackers to exploit LFI vulnerabilities, such as directory traversal and PHP wrapper manipulation.

4. **Example Usage**: Test your skills by using example URLs to exploit LFI vulnerabilities in simulated web applications.

5. **Vulnerable Websites**: Explore real websites with LFI vulnerabilities, along with example URLs for testing and learning purposes.

## 🛠️ Example Vulnerable Code

```php
<?php
$file = $_GET['file'];
header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-Type: application/octet-stream");
header("Content-Transfer-Encoding: binary");
header("Content-disposition: attachment; filename=$file");
readfile($file);
?>
```

```php
<?php
$file = $_GET['file'];
$allowed_files = array("down.php", "config.php", "index.php"); // Define an array of allowed files
$file_path = "./files/{$file}"; // Assuming files are stored in a directory called "files"

// Check if the requested file is in the allowed list and exists
if (in_array($file, $allowed_files) && file_exists($file_path)) {
    // Check if the requested file is within the "files" directory to prevent directory traversal attacks
    if (strpos(realpath($file_path), realpath('./files')) === 0) {
        // Set appropriate headers for file download
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Type: application/octet-stream");
        header("Content-Transfer-Encoding: binary");
        header("Content-disposition: attachment; filename={$file}");
        
        // Output the file content
        readfile($file_path);
        exit; // Terminate the script after file download
    } else {
        echo "Access Denied."; // Output an error message if file path is outside the allowed directory
    }
} else {
    echo "Invalid file requested."; // Output an error message if the requested file is not allowed or doesn't exist
}
?>

```

In the updated code, we have introduced an array `$allowed_files` containing the names of files that are allowed to be accessed. Before serving the requested file, we check if it exists in the `$allowed_files` array. If it does, the file is served; otherwise, an error message is displayed. This approach helps mitigate the risk of LFI vulnerabilities by restricting access to only whitelisted files.


## 🛡️ Mitigation Strategies

Implement robust mitigation strategies to safeguard your web applications against LFI vulnerabilities:

- Validate and sanitize user input rigorously.
- Whitelist allowed file paths to restrict access.
- Utilize file system permissions and access controls.
- Implement Content Security Policies (CSP) to mitigate risks.

## 🔍 Advanced LFI Methods

Discover advanced techniques employed by attackers to exploit LFI vulnerabilities:

1. **Directory Traversal**: Navigate through file systems to access sensitive files.
2. **Null Byte Injection**: Bypass file extension checks using null byte injections.
3. **PHP Wrapper Manipulation**: Exploit PHP wrappers to include remote files or execute arbitrary code.

## 🚀 Example Usage

Explore LFI vulnerabilities in action:

```
http://example.com/download.php?file=down.php
```

## 🌐 Vulnerable Websites

Discover real-world websites with LFI vulnerabilities for testing and learning:

```
    /bmes.lk/...
    /daph.cp.gov.lk/...
    /idcards.ru/...
    /ijcrt.org/...

```

Explore the source code of these vulnerable websites to understand how LFI vulnerabilities can be present in real-world web applications. Remember to use them for educational and research purposes only.

🔍 **Google Dorks**: [intitle:"Index of /" + "download.php"](https://github.com/Ishanoshada/GDorks/tree/main/LFI)

Use Google Dork to discover more websites with potential LFI vulnerabilities. However, exercise caution and adhere to ethical guidelines when exploring and testing vulnerable websites.

## 🤝 Contributing

Contributions are welcome! If you have additional examples, mitigation strategies, or improvements, feel free to submit a pull request and join the community effort to enhance web security awareness.

## 📝 License

This repository is licensed under the  GPL-3.0 license. See the [LICENSE](LICENSE) file for details.

---

Thank you for exploring the LFI Vulnerability Examples repository. Let's work together to strengthen web security and protect against cyber threats. Happy coding and stay secure! 🛡️🌐
