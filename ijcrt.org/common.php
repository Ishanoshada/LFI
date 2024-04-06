<?php 
error_reporting(0);error_reporting(E_ALL & ~E_NOTICE);
$host="localhost";
$dbname="ijp";
$username="ijpeditor";
$password="pass56456";
  $dbLink = new mysqli('localhost', $username, $password, 'ijp');
  @mysql_connect('localhost',$username,$password);
  mysql_select_db('ijp');
    
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