<?php

include('login/process.php');
 
include('login/submit.php'); 



?>

<!DOCTYPE html>
<html lang="en" class="no-js"> 

 <link rel="stylesheet" href="login/style.css">


    <head>
    	 <title>Login </title>
    	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <meta charset="UTF-8" />
       
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">



 <style >
     
     .bg-overlay {
    background: linear-gradient(rgba(0,0,0,.1), rgba(0,0,0,.1)), url("https://img4.goodfon.com/wallpaper/nbig/a/8b/vector-blue-squares-abstract-background-geometric.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;

    color: #fff;
    height: 720px;
    padding-top: 50px;
}
 </style>

    </head>
    <body class=" bg-overlay">


        <div class="container">
          
            <header>
                <h1>WELCOME</h1>
				
            </header>
            <section>				
                
                    

<div id="wrapper">
    




     




   
       <form id="register" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         <h1 style="color:blue;"> Sign up </h1> 


         <div class="form-group <?php echo (!empty($nic_err)) ? 'has-error' : ''; ?>">
               <label for="nicsignup" class="unic" >Your nic</label>
                <input type="text" name="nic" id="nic" class="form-control" maxlength="10"

               placeholder="000000000v"
               pattern="[0-9]{9}[v]{1}"
               required
                value="<?php echo $nic; ?>">
                 <span  class="help-block"><?php echo $nic_err; ?></span>
            </div> 




        
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
               <label for="usernamesignup" class="uname" >Your username</label>
                <input type="text" name="username" id="username" class="form-control"  required value="<?php echo $username; ?>">
                 <span class="help-block"><?php echo $username_err; ?></span>
            </div> 


             


             <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">             
                <label for="namesignup" class="youname"  > Your name</label>
                 <input type="text" name="name"  id="name" class="form-control"  required value="<?php echo $name; ?>" > 
                 <span class="help-block"><?php echo $name_err; ?></span>
            </div> 


       

            


            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label for="passwordsignup" class="youpasswd" >Your password </label>
                <input type="password" name="password" class="form-control"  required value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>


            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
               <label for="passwordsignup_confirm" class="youpasswd" >Please confirm your password </label>
                <input type="password" name="confirm_password" class="form-control"  required value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>


                    <p class="signin button"> 
                        <input type="submit" value="submit" />
                        
                        </p>
                       
                              <p class="change_link">
                                Already a Member ?
                                <a href="login.php">Login</a>
                            </p>
        </form>
    </div>
	





                
            </section>
        </div>
    </body>
</html>
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="script.js"></script>
<script src="jquery-1.8.3.min.js"></script>