<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		 <link rel="icon" href="images/logo.png" type="image/png">
			<meta name="description" content="Ride.lk an authorized Jetski rental and water spot company. Situated in Bolgoda , the company has certified instructors  you can go on a Jetski guided tour." />
        <meta name="keywords" content="Tours, Travels, Rides Tours & Travels, Ride.lk, Ride, Bolgoda, Jetski, A True Experience, Banana Ride , Kayaking , Jetski Ride, Wakeboarding" />
			<link rel="canonical" href="https://www.rides.lk/contact">
			
		<title>Contact Us | Rides.lk Srilanka Tours & Travels</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,600,700" rel="stylesheet" type="text/css">
			<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->
<script type="text/javascript">
function sends(form)
{
    var x=0;
	if($('#names').val()==""){$('#names').css("background-color","#ee8888");}else {$('#names').css("background-color","transparent"); x++; }
	if($('#company').val()==""){$('#company').css("background-color","#ee8888");}else {$('#company').css("background-color","transparent");x++; }
	if($('#email').val()==""){$('#email').css("background-color","#ee8888");}else {$('#email').css("background-color","transparent");x++; }
	if($('#message').val()==""){$('#message').css("background-color","#ee8888");}else {$('#message').css("background-color","transparent");x++; }
if(x==4){
    
    var name = $('#names').val();
    var email = $('#email').val();
    var subject = "Contact Us";
    var company = $('#company').val();
    var message = $('#message').val();
    
    var to = "mathan.vcube@gmail.com";
		var cc = "mathan.somas@vcube-sl.lk";
		var bcc = "yohanindunil@gmail.com,info@onlinesolutionsl.com";
		var Conten ='<img src="https://www.boat.rides.lk/images/logo.png" width="100"><br><b>Name :</b>'+name+'<br><b>E-mail :</b> '+email+'<br><b>Company : </b> '+company+'<br><b>Message :</b>'+message+'<div style="text-align:center; padding:5px;">Copyright 2021 Rides.lk  All right reserved. | Design by <a href="https://www.onlinesolutionsl.com">onlinesolutionsl.com</a></div>';
		
			  $.post('mail.php', {sendMail: to,subject:subject,cc:cc,bcc:bcc,Conten:Conten}, function (data) {
            $('#result').html(data);
            $('#names').val("");
            $('#email').val("");
            $('#company').val("");
            $('#message').val("");
   				 });
    
    return false;
    
    
    
}else {	return false;}

}
</script>
	</head>

	<body>
		
		<div id="site-content">
			
			<header class="site-header wow fadeInDown">
				 <?php
					include_once('menu.php');
					?>
			
            <br>
			</header> <!-- .site-header -->

			<main class="content">
				<div class="fullwidth-block">
					<div class="container">
                      <h2 class="section-title">Contact Us</h2>
						<div class="row">
							<div class="col-md-4 wow fadeInUp">
								<h4>Rides (pvt) Ltd.</h4>
								<ul class="list-fa">
									<li><i class="fa fa-map-marker"></i> Ihala Indibedda Road, Moratuwa. Sri Lanka.</li>
									<li><i class="fa fa-phone"></i><a href="tel:+94711157755"> +94 71 115 7755</a></li>
									<li><i class="fa fa-envelope"></i><a href="mailto:info@rides.lk">info@rides.lk</a></li>
								</ul>

		                            <div id="result" style="font-size:50px;"></div>
								<form onSubmit="return sends(this);" method="post" class="contact-form">
									<input type="text" id="names" name="names" placeholder="Your Name...">
									<input type="text" id="company" name="company" placeholder="Company Name...">
									<input type="text" id="email" name="email" placeholder="Email">
									<textarea name="message" id="message" placeholder="Message..."></textarea>
									<input type="submit" id="btn_send" name="btn_send" class="button" value="Send Message">
								</form>
							</div>
							<div class="col-md-7 col-md-push-1 wow fadeInDown">
								<div class="map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2801.528775615285!2d79.90189657152602!3d6.774724473354868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNDYnMjYuOCJOIDc5wrA1NCcwOS4xIkU!5e0!3m2!1sen!2slk!4v1620271188625!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
								</div>
							</div>
							
						</div>

					</div>

				</div>

				
			</main> <!-- .content -->
<?php
                
                include_once('footer.php');
                ?>

		</div> <!-- #site-content -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/min/plugins-min.js"></script>
		<script src="js/min/app-min.js"></script>
		
	</body>

</html>