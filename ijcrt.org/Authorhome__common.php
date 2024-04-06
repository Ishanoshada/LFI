<?php 

$host="localhost";
$dbname="ijp";
$username="ijpeditor";
$password="pass56456";
  $dbLink = new mysqli('localhost', $username, $password, $dbname);
  $conn=mysqli_connect('localhost',$username,$password);
  mysqli_select_db($conn,'ijp');
    
	$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 

    try 
    { 
 
        $db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options); 
    } 
    catch(PDOException $ex) 
    { 
         die("Failed to connect to the database: " . $ex->getMessage()); 
    } 
  //  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
//    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
    
    header('Content-Type: text/html; charset=utf-8'); 
    
	
	session_start(); 
?>