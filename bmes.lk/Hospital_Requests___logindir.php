<?php
// Include config file
require_once 'db.php';
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["usernamedir"]))){
        $username_err = 'Please enter username.';
    } else{
        $username = trim($_POST["usernamedir"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['passworddir']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['passworddir']);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT a, d, c, hospital FROM userreg WHERE a = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password, $level, $hospital);
                         if(mysqli_stmt_fetch($stmt)){
                        if($username=="admin" && $password==$hashed_password){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                             $_SESSION['logged']=true;
                            $_SESSION['usernamedir'] = $username;
							$_SESSION['level']="admin";
                            header("location: display.php");
                        } else{
                            if(password_verify($password, $hashed_password)){
								if($level == "DIRECTOR"){
                            		/* Password is correct and he is a director, so start a new session and
                            		save the username to the session */
                            		session_start();
									$_SESSION['logged']=true;
									$_SESSION['usernamedir'] = $username;
									$_SESSION['hospital'] = $hospital;
									$_SESSION['level']=$level;
                            		header("location: display.php");
								}else{ 
									/* Password is correct but he is not a director, so start a new session and
                            		save the username to the session */
									$_SESSION['logged']=false; ?>
									<script> alert(<?php echo "You are not a Director"; ?>) </script>
								<?php }
                        } else{
                            $_SESSION['logged']=false;
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                        }
                        }
                    }
                } else{
                    $_SESSION['logged']=false;
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($con);
}
?>

<!DOCTYPE html>
 <html lang="en" class="no-js"> 
<!--<![endif]-->



    <head>
       <title>Login </title>
      <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <meta charset="UTF-8" />
       
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


 <link rel="stylesheet" href="/login/style.css">

 <style >
     
     .bg-overlay {
    background: linear-gradient(rgba(0,0,0,.1), rgba(0,0,0,.1)), url("https://img4.goodfon.com/wallpaper/nbig/a/8b/vector-blue-squares-abstract-background-geometric.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;

    color: #fff;
    height: 720;
    padding-top: 50px;
}
 </style>
    </head>
    <body>

        <div class="container bg-overlay" >
          
            <header >
                <h1 color="black">WELCOME</h1>
                <h>Please login to continue</h>
        
            </header>
            <section>       
                <div id="container_demo" >
                   

<div id="wrapper">

    <div id="login" class="animate form">
        
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1>Log in</h1> 
            

             <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label for="username" class="uname" > Your username </label>
                <input type="text" name="usernamedir"class="form-control"  required value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>  


            




            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                 <label for="password" class="youpasswd"> Your password </label>
                <input type="password" name="passworddir"  required class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>



            <p class="keeplogin"> 
        <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
        <label for="loginkeeping">Keep me logged in</label>
      </p>

            
             <p class="signin button"> 
        <input type="submit" value="Login" /> 
         
   
    </p>
            
     
        </form>
    </div>




  </div>   
  





                </div>  
            </section>
        </div>
    </body>
</html>