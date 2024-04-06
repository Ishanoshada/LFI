<!DOCTYPE html>
<html>
<head>
<?php include("./includes/css-links.php"); ?>

<meta charset="utf-8">
<title>GSM Technology</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>
<div class="page-wrapper">
 	
    <?php include("./includes/header.php"); ?>
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/Career_Banner_1920x1238.png);">
        <div class="auto-container">
            <h1>Career</h1>
        </div>
        
        <!--page-info-->
        <div class="page-info">
        	<div class="auto-container">
            	<div class="row clearfix">
            
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Career</li>
                        </ul>
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="social-nav clearfix">
                            <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            <li><a href="#"><span class="fa fa-flickr"></span></a></li>
                        </ul>
                    </div>
                
                </div>
            </div>
        </div>
        
    </section>
    
    <!--industry-->
    <section class="industry-section" style="margin-top:-50px";>
    	<div class="auto-container">
			<?php
				if(isset($_GET['msg']))
					echo "<h1>".$_GET['msg']."</h1>";
			?>
        	<div class="row clearfix">
            	<div class="column left-column col-md-6 col-sm-12 col-xs-12">
				
				 	<div class="sec-title-one">
                        	<h2>Opportunities</h2>
                    	</div>
                	<!--video-box-->
                	<div class="video-box">
                    	<figure class="image">
                        	<img src="images/Career_Opportunities.png" alt="Career" />
                        </figure>
                        <!--<a href="https://www.youtube.com/watch?v=0e1uTwSRGgI" class="lightbox-image overlay-box">
                        	<span class="flaticon-arrows-2"></span>
                        </a>-->
                    </div>
                </div>
                <div class="column col-md-6 col-sm-12 col-xs-12">
                	<!--content-column-->
                	<div class="content-column" style="margin-top:10px";>
                    	<!--<div class="sec-title-one">
                        	<h2>GSM Technology</h2>
                    	</div>-->
                        <div class="text"><p>We offer great career opportunities for talented professionals. We believe in empowerment and our work culture reflects the same. Come join us, if you are ready to challenge yourself & work together to achieve a better future.</p>

							<!--<p>To explore career opportunities at GSM Technology, please send in your resume at</p>-->
							<p>To explore career opportunities at GSM Technology. Kindly send your resume</p>
							</div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	 <!--contact-section-->
    <section class="contact-form-section">
    	<div class="auto-container">
        	<div class="sec-title-eight padd-bott-10">
                <h2>Apply Now</h2>
            </div>
            	
            <!-- Contact Form -->
            <div class="default-form contact-form">
                
                  <!-- <form method="post" action="sendemail.php" id="contact-form">-->
			   		<form method="post" action="career_process.php" id="career-form" enctype="multipart/form-data">
					<div class="row clearfix">
                        <div class="form-group col-md-6 col-sm-12 col-xs-12">
                            <input type="text" name="username" value="" placeholder="Enter Name *" required>
                        </div>
    
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="email" name="email" value="" placeholder="Enter Email *" required>
                        </div>
    
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="contact" value="" placeholder="Enter Contact number *" required>
                        </div>
    
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="upload_file" id="upload_file" required>
                        </div>
    
                        <div class="form-group col-md-12 col-sm-12 col-xs-12"><button type="submit" class="theme-btn btn-style-three">Send</button></div>
					</div>
                </form>
                
            </div>
            <!--End Contact Form -->
                
        </div>
    </section>
    
   
     <?php include("./includes/footer.php"); ?>	
	 
</body>
</html>
