<?php 
require 'db.php';
if (isset($_POST['nic_check'])) {
    $nic = $_POST['nic'];
    $sql = "SELECT * FROM userdata WHERE nic='$nic'";
    $results = mysqli_query($con, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken"; 
    }else{
      echo 'not_taken';
    }
    exit();
  }


  if (isset($_POST['username_check'])) {
    $username = $_POST['username'];
    $sql = "SELECT * FROM users WHERE username='$username'";
    $results = mysqli_query($con, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken"; 
    }else{
      echo 'not_taken';
    }
    exit();
  }
  
  
 

if (isset($_POST['name_check'])) {
    $name = $_POST['name'];
    $sql = "SELECT * FROM users WHERE name='$name'";
    $results = mysqli_query($con, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken"; 
    }else{
      echo 'not_taken';
    }
    exit();
  }

  
if (isset($_POST['namecode_check'])) {
    $namecode = $_POST['namecode'];
    $sql = "SELECT * FROM users WHERE namecode='$namecode'";
    $results = mysqli_query($con, $sql);
    if (mysqli_num_rows($results) > 0) {
      echo "taken"; 
    }else{
      echo 'not_taken';
    }
    exit();
  }


?>