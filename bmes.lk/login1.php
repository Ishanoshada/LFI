<?php
// Include config file
require_once 'db.php';
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
$stype="hospital";
$stype1="adminh";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = 'Please enter username.';
    } else{
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
        $sql = "SELECT name, code, type, password FROM hospitals WHERE name = ?";
        
        if($stmt = mysqli_prepare($con, $sql)){
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
                    mysqli_stmt_bind_result($stmt, $username,$code,$type, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                      
                     if($password== $hashed_password){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                             $_SESSION['logged']=true;
                            $_SESSION['username'] = $username;
                            
                              $_SESSION['code'] = $code;  
                               $_SESSION['type'] = $type;  
                                    

                         if($username == "admin"){
                          $_SESSION['stype'] = $stype1; 
                             header("location: admin.php"); 
                              } 
                              else{
                            $_SESSION['stype'] = $stype; 
                             header("location: departments.php"); 
                              }     

                           
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


 <link rel="stylesheet" href="login/style.css">
 <script type="text/javascript" src="department/typeahead.js"></script>


 <style >
     
     .bg-overlay {
    background: linear-gradient(rgba(0,0,0,.1), rgba(0,0,0,.1)), url("https://img4.goodfon.com/wallpaper/nbig/a/8b/vector-blue-squares-abstract-background-geometric.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;

    color: #fff;

    padding-top: 50px;
}




 </style>
    </head>
    <body>

        <div class="container bg-overlay" >
          
            <header >
                <h1 color="black">WELCOME</h1>
                <h>Hospital Login</h>
        
            </header>
            <section>       
                <div id="container_demo" >
                   

<div id="wrapper">

    <div id="login" class="animate form">
        
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1>Log in</h1> 
            

             <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label for="username" class="uname" > Your username </label>
                <input type="text" id="username" name="username" class="form-control"  required value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>  


            




            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                 <label for="password" class="youpasswd"> Your password </label>
                <input type="password" name="password"  required class="form-control">
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
<script type="text/javascript" language="javascript" >
 
    

 $(document).ready(function(){
  
    $('#username').typeahead({

            source: function (query, result) {
                $.ajax({
                    url: 'department/username.php',
                    data: 'query=' + query ,            
                    dataType: "json",
                    type: "POST",
                    
 
                    success: function (data) {
            result($.map(data, function (item) {
              return item;
                        }));
                    }
                });
            }
        });

     
        });

    

</script>