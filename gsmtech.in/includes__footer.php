  <!--Main Footer-->
    <footer class="main-footer">
    	
        <!--Footer Upper-->        
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">
                	
                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                            <div class="col-lg-7 col-sm-6 col-xs-12 column">
                                <div class="footer-widget logo-widget">
                                    <div class="logo"><a href="index.html"><img src="images/GSM-Bottom-Logo.png" class="img-responsive" alt=""></a></div>
                                  <!--  <div class="text">The year is and launches the last of that americas deep space probes and we will our our way make all come true.</div>-->
                                    
                                    <ul class="contact-info">
                                    	<li><span class="icon flaticon-pin"></span> Arunodaya Complex, #29/7, Ist Floor, 80ft Main Road, Mangamanapalya, Bommanahalli, Bangalore-560 068</li>
										<li><span class="icon flaticon-phone-receiver"></span> <strong>Phone :</strong> 080-25722547</li>
                                        <li><span class="icon flaticon-technology"></span> <strong>Mobile :</strong>+91-9743700035,<br/> +91-9945242300</li>
                                        <li><span class="icon flaticon-mail-2"></span>Marketing :</strong> marketing@gsmtech.in<br/>
												<strong>Design :</strong> design@gsmtech.in<br/>
												<strong>Purchase :</strong> purchase@gsmtech.in<br/>
												<strong>QA :</strong> qa@gsmtech.in<br/>
										</li>
                                    </ul>
                                
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="col-lg-5 col-sm-6 col-xs-12 column" style="margin-top:110px;">
                                <div class="sec-title-three">
                                	<h2>Quick Links</h2>
                                </div>
                                <div class="footer-widget links-widget">
                                    <ul>
                                        <li><a href="Common-Mode.php">Common mode</a></li>
                                        <li><a href="Drum-Core.php">Drum Core</a></li>
                                        <li><a href="Rod-Core.php">Rod Core</a></li>
                                        <li><a href="SMPS-Transformers.php">SMPS Transformers</a></li>
                                        <li><a href="Linear-Transformers.php">Linear Transformers</a></li>
                                        <li><a href="Current-Transformers.php">Current Transformers</a></li>
										<li><a href="Torroidal-Chokes.php">Torroidal Chokes</a></li>
                                    </ul>
        
                                </div>
                            </div>
                    	</div>
                    </div>
                    <!--Two 4th column End-->
                    
                    <!--Two 4th column-->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                    		<!--Footer Column-->
                        	<div class="col-lg-6 col-sm-6 col-xs-12 column">
                            	<div class="footer-widget twitter-widget" style="margin-top:120px;">
                                	 	
                                    <div class="widget-content">
									
										<?php


$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
		
		if ($iphone || $android || $palmpre || $ipod || $berry == true)				
			echo '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d62226.93696587014!2d77.5685482!3d12.8959154!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1585f33b46c7%3A0xa929cdbf4f1d8eb5!2sG+S+M+Technology!5e0!3m2!1sen!2sin!4v1532680519817"   height="350" frameborder="0" style="width:100%; border:0" allowfullscreen></iframe>';
		else
			echo '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d62226.93696587014!2d77.5685482!3d12.8959154!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1585f33b46c7%3A0xa929cdbf4f1d8eb5!2sG+S+M+Technology!5e0!3m2!1sen!2sin!4v1532680519817"  width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>';
                                    	
	?>									
                                    </div>
                                </div>
                            </div>
                            
                            
                    
                    	</div>
                    </div><!--Two 4th column End-->
                    
                </div>
                
            </div>
        </div>
        
        <!--Footer Bottom-->
    	<div class="footer-bottom">
            <div class="auto-container">
            	<div class="row clearfix">
                    <!--Copyright-->
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="copyright">Copyrights &copy; 2016 GSM Technology. All Rights Reserved.</div>
                    </div>
                    
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="copyright"><a href="http://www.ultratechnetworks.com" target="_blank" style="color:#BBBBBB; text-align:right;"> Powered by Ultratech Networks Pvt. Ltd</a></div>
                    </div>
                
                </div>
            </div>
        </div>
        
    </footer>
	
	</div>
<!--End pagewrapper-->

		<a href="#" class="sticky_icon" data-toggle="modal" data-target="#myModal2">
            <span class="fa fa-envelope" style="color: #FA8100; font-weight:bold; font-size:40px; margin-top:15px;"></span>
        </a>

<!--Scroll to top-->
<!--<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>-->
<style>
/*.sticky_icon {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 40px;
    right: 40px;
    background-color: #000; 
    color: #FFF;
    border-radius: 70px;
    text-align: center;
    z-index: 1000;
    box-shadow: 2px 2px 3px #999; 
}*/
.sticky_icon {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 20px;
    right: 20px;
    background-color: #001020;
	border:1px solid #FA8100;	
    color: #FFF;
    border-radius: 70px;
    text-align: center;
    z-index: 1000;
    
}
/*------------- Form ---------------*/

.nb-form {
    position: fixed;
    z-index: 9999;
    width: 300px;
    background: #FFF;
    right: 20px;
    bottom: -357px;
    transition: all .8s cubic-bezier(.22, .67, .43, 1.22) .2s;
    border-radius: 10px 10px 0 0;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14),0 1px 5px 0 rgba(0,0,0,0.12),0 3px 1px -2px rgba(0,0,0,0.2);
}
.nb-form:hover {
    bottom: 0px;
}

/*-- User Icon --*/

.nb-form .user-icon {
    position: absolute;
    top: -40px;
    right: 12px;
    display: block;
    width: 58px;
    margin: 20px auto 15px;
    border-radius: 100%;
}

/*-- Title --*/

.nb-form .title {
    background: #03a9f4;
    font-size: 16px !important;
    padding: 15px 18px 25px 18px !important;
    color: #fff !important;
    border-radius: 10px 10px 0 0;
}

/*-- Text --*/

.nb-form p {
    font-size: 13px;
    margin: 0;
    padding: 20px;
    color: #666;
}

.nb-form p.message {
    margin-left: 7px;
}

/*-- Form Elements --*/

.nb-form form {
    padding: 0 15px 15px 15px;
}

.nb-form input,
.nb-form textarea {
    font-family: Tahoma, Geneva, sans-serif;
    font-size: 12px;
    width: 254px;
    max-width: 254px;
    margin-bottom: 10px;
    margin-left: 7px;
    padding: 6px;
    border: none;
    border-radius: 4px;
    color: #999;
    border-bottom: 1px solid #f0f0f0;
}

.nb-form input:focus,
.nb-form textarea:focus {
    outline: none;
    box-shadow: none;
}

.nb-form input[type='submit'] {
    display: block;
    width: 120px;
    margin: 0 auto;
    padding: 0 20px;
    height: 40px;
    line-height: 40px;
    border-radius: 20px;
    cursor: pointer;
    transition: all .4s ease;
    color: #fff !important;
    border: none;
}

.nb-form input[type='submit']:hover {
    box-shadow: 0 3px 3px 0 rgba(0,0,0,0.07),0 1px 7px 0 rgba(0,0,0,0.02),0 3px 1px -1px rgba(0,0,0,0.1);
}

.nb-form textarea {
    min-height: 110px;
}


.nb-form ::-webkit-input-placeholder {
    color: #ccb0b0;
}

.nb-form ::-moz-placeholder{
    color: #ccb0b0;
}

.nb-form :-ms-input-placeholder {
    color: #ccb0b0;
}

.nb-form :-moz-placeholder {
    color: #ccb0b0;
}

.nb-form input[type='submit'] {
    background: #03a9f4;
}

@media screen and (max-width: 676px) {
    .nb-form:hover .user-icon {
        display: none;
    }

    .nb-form .message {
        display: none;
    }

    .nb-form form {
        padding-top: 15px;
    }
    .nb-form{
        right: 50%;
        bottom: -320px;
        left: 50%;
        transform: translateX(-50%);
    }
}

 .antispam{
   	display:none;
	}
</style>


<div id="myModal2" class="modal fade" role="dialog" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                                <h4 class="modal-title">
                                Contact Us
                            </h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                            <form role="form" method="post" id="reused_form2" action="sticky_contact_process.php" id="contact-form">
							<p class="antispam"><input type="text" name="sec_1" /></p>
							<p class="antispam"><input type="text" name="sec_2" value="ULTRATECH" /></p>
                                <p> Send your message </p>
                                <div class="form-group">
                                    <label for="name"> Name*:</label>
                                    <input type="text" class="form-control" id="cpname" name="cpname" required="" maxlength="50">
                                </div>
                                <div class="form-group">
                                    <label for="email"> Email*:</label>
                                    <input type="email" class="form-control" id="cpemail" name="cpemail" required="" maxlength="50">
                                </div>
                                <div class="form-group">
                                    <label for="name"> Phone No*:</label>
                                    <input type="text" class="form-control" id="cpphone" name="cpphone" required="" maxlength="50">
                                </div>
                                <div class="form-group">
                                    <label for="name"> Message*:</label>
                                    <textarea class="form-control" type="textarea" name="cpmessage" id="cpmessage" placeholder="Your Message Here" maxlength="6000" rows="3"></textarea>
                               </div>								
								      
                                <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs" style="border:1px solid #333; background-color: #FA8100;">Send Message →</button>
                            </form>
                            <!--<div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                            <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                        </div>-->
                    </div>
                </div>

  <!--<div class="nb-form">
    <p class="title">Send a message</p>
    
     <form method="post" action="sticky_contact_process.php" id="contact-form">
	 <p class="antispam"><input type="text" name="sec_1" /></p>
	 <p class="antispam"><input type="text" name="sec_2" value="ULTRATECH" /></p>
      <input type="text" name="cpname" placeholder="Name:" required>
      <input type="email" name="cpemail" placeholder="Email:" required>
      <input type="tel" name="cpphone" placeholder="Phone:" required>
      <textarea name="cpmessage" placeholder="Message:" required></textarea>
      <input type="submit" value="Send message">
    </form>
  </div>-->

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/validate.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>