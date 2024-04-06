<?php

// Include config file


require_once 'db.php';
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = 'Please enter username.';
    }
    else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT a , d FROM userreg WHERE a = ?";
        
        if($stmt = mysqli_prepare($connect, $sql)){
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
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if($password == $hashed_password){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                             $_SESSION['logged']=true;
                            $_SESSION['username']=$username; 
                            
                            if($username=='procurement'){
                             echo'<script type="text/javascript">',

							  'window.location.href="tenders.php";',

							'</script>';
                            }
                      	else{ echo'<script type="text/javascript">',

							  'window.location.href="index.php";',

							'</script>';}
                        } else{
                            $_SESSION['logged']=false;
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
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
    mysqli_close($connect);
    

}


?>

<style>

.bg-overlay {
    background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url("https://wallpaperplay.com/walls/full/0/e/1/13976.jpg#.XeSjmZnP6Vs.link");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;

    color: #000;
    height: 100%;
    padding-top: 50px;
}
</style>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
  <header class="business-header bg-overlay ">

    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2>  Admin : Login</h2>
               
                <h5>( Login yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1" id='login'>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Details To Login </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                       <br />
                                    


                                        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                          <label for="username" class="uname" > Your username </label>
                                          <input type="text" name="username"class="form-control"  required value="<?php echo $username; ?>">
                                          <span class="help-block"><?php echo $username_err; ?></span>


                                      </div> 

                                      <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                               <label for="password" class="youpasswd"> Your password </label>
                                              <input type="password" name="password"  required class="form-control">
                                              <span class="help-block"><?php echo $password_err; ?></span>
                                          </div>
                                                                              
                                           
                                          <input type="submit" value="Login"  class="btn btn-primary "></a>
                                     
                                   
                                    
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>

</header>
     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
