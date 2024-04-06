<?php
// Selecting Database

//ini_set('display_errors',1);
//$path = $_SERVER['DOCUMENT_ROOT'];
//$path .= "/ijedr/common.php";
//include($path);

//session_start();
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) 
{
	if (empty($_POST['a1_email']) || empty($_POST['r_id'])) 
	{
		$error = "Email ID or Registration ID is invalid";
	}
	else
	{
		// Define $username and $password
		$a1_email=$_POST['a1_email'];
		$r_id=$_POST['r_id'];
		// To protect MySQL injection for Security purpose
		//$username = stripslashes($username);
		//$password = stripslashes($password);
		//$username = mysql_real_escape_string($username);
		//$password = mysql_real_escape_string($password);
		
		$r_id=trim(substr(htmlspecialchars($_POST['r_id'],ENT_QUOTES ),-6));
		$a1_email=trim(htmlspecialchars($_POST['a1_email']));
		$sqllogin="SELECT * FROM `paper` WHERE `r_id`='$r_id' and `a1_email`='$a1_email' ";
		
		
		$result=mysqli_query($conn, $sqllogin) or die(mysql_error());;
		$row=mysqli_fetch_assoc($result);
		$rows = mysqli_num_rows($result);
		if ($rows == 1) 
		{	
			//session_start();
			$_SESSION['ijcrt_r_id'] = $row['r_id'];
			$_SESSION['ijcrt_a1_name'] = $row['a1_name'];
			//echo "Session variables are set.";
			//echo $_SESSION['ijcrt_r_id'];
			//echo $_SESSION['ijcrt_a1_name'];
			
			//$host  = $_SERVER['HTTP_HOST'];
			//$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			//$extra = 'ahome.php';
			//header("Location: http://$host$uri/$extra");
			
			header('Location:ahome.php');
		} 
		else 
		{
			$error = "After Acceptance you able to login So wait for Acceptance or Email ID or Registration ID is invalid Or Wait for Acceptance After Acceptance you are able to login </br>
			Or Email to editor@ijcrt.org  ";
			echo $error;
		}
//mysql_close($connection); // Closing Connection
	}
}
?>