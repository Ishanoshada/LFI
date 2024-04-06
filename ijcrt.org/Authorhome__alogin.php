<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("common.php"); 
include("alogincode.php"); // Includes Login Script
if(isset($_SESSION['ijcrt_r_id']))
{
	header('Location:ahome.php');
	
}
?>


<html>
	<head>
		<title>Author Login</title>
        <link rel="stylesheet" type="text/css" href="css/atitlecss.css" >
        <link rel="stylesheet" type="text/css" href="css/alogin.css" >
		<link rel="shortcut icon" type="image/x-icon" href="http://www.ijcrt.org/smalled-1.ico">
    
    </head>
    
    <body background="img/bg.png">
	<?php include("aheader.php"); ?>
    
	<div class="row">
	<div class="col-md-12">
	<div class="panel panel-default" align="center">	
        <div class="panel-heading">
		 <i class="fa fa-cubes"></i> Login to Author's Home
        </br>
		<a href="https://ijcrt.org/track.php"> <button type="button" class="btn btn-warning">Check Paper status without login</button></a>

		</br>
				<?php echo $error; ?>
                </br>
		</div>
    	<div class="panel-body">
		<form action = "<?php $_PHP_SELF ?>" role="form" action="" method="POST" data-parsley-validate id="form">
		<div class="row">
			<div class="col-md-6 col-md-offset-2" class="border-right: solid rgba(17,136,160,1.00); ">
				<div class="form-group">
					<label> <i class="fa fa-key"></i> Registration ID </label>
					<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">IJCRT_</span>
					<input class="form-control" name="r_id" type="text"  id="r_id" required="required" placeholder="Registration ID Enter 6 Digit No Only XXXXXX"/>
				</div></div>
				<div class="form-group">
					<label> <i class="fa fa-envelope-o"></i> Email ID</label>
					<input class="form-control" name="a1_email" type="text" id="a1_email" placeholder="1st Author's Email ID" required="required" />
				</div>	
            
                <input type="submit" name="submit" value=" Click Here to Login" class="col-md-4 col-md-offset-4 btn btn-primary"/>
            </form>
			
			</br>
			
            </div>
            <div class="col-md-4" width="262px" style="background-color:rgba(255,255,255,1.00); border-left:solid ; text-align:center; padding: 6em"> 
            	<a href="https://ijcrt.org/track.php"> <button type="button" class="btn btn-warning">Check Paper status without login</button></a>
				</br></br></br>
			<a href="http://www.ijcrt.org"><button type="button" class="btn btn-info"> Click Here to Go Main Website </button>
			</a>
			</br></br></br>
			 <a href="http://ijcrt.org/submitonline.php"><button type="button" class="btn btn-info"> Submit Your Paper </button>
			</a>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        
        
        
		<div class="row">
        <?php include("afooter.php"); ?>
        </div>
        
    </body>
</html>