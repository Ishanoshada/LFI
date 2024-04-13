<?php
session_start();

if(isset($_GET['lang']))
{
  $_SESSION['lang'] = $_GET['lang'];
}
if(isset($_SESSION['lang']))
{
  include_once('assets/lang/'.$_SESSION['lang'].'.php');
}
else
{
  $_SESSION['lang'] ='us';
  include_once('assets/lang/us.php');
}

?><!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Rides Taxi - Service</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v2.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">



<!--

TemplateMo 568 DigiMedia

https://templatemo.com/tm-568-digimedia

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Pre-header Starts -->
  <!--div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-7">
          <ul class="info">
            <li><a href="#"><i class="fa fa-envelope"></i>digimedia@company.com</a></li>
            <li><a href="#"><i class="fa fa-phone"></i>010-020-0340</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-4 col-5">
          <ul class="social-media">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div-->
  <!-- Pre-header End -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky" style="z-index: 999;" >
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="assets/images/logo-v2.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
            <li class="scroll-to-section">&nbsp;</li>
              <li class="scroll-to-sectionx" ><a href="index.php#top"><?php echo HOME; ?></a></li>
              <li class="scroll-to-sectionx"><a href="index.php#about"><?php echo ABOUT; ?></a></li>
              <li class="scroll-to-sectionx"><a href="index.php#services"><?php echo SERVICE; ?></a></li>
              <li class="scroll-to-sectionx"><a href="index.php#portfolio"><?php echo PROJECT; ?></a></li>

              <li class="scroll-to-sectionx"><a href="index.php#contact"><?php echo CONTACT; ?></a></li> 
              <li class="scroll-to-sectionx "><a >
              <select class='border-first-button' onchange='window.location="booking.php?lang="+this.value ' class="scroll-to-section">
                <option value="us" <?php if($_SESSION['lang']=='us'){echo 'selected';} ?>>English</option>
                <option value="lk" <?php if($_SESSION['lang']=='lk'){echo 'selected';} ?>>Sinhala</option>
              </select>

             </a></li> 
             
              <li class="scroll-to-section"><a  href="#contact"></a></li> 
             

            
            </ul>    
            
            
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
          
              </div>


  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
          
            <h4><em><?php echo BOOKING_TITLE; ?></em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="thumb">
                      <div class="thumb active">
                        <span class="icon"><img src="assets/images/taxi.png" alt=""></span>
                        Expo
                      </div>
                    </div>
                    <!--div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/taxi.png" alt=""></span>
                        Car
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/taxi.png" alt=""></span>
                        Cab
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/van.png" alt=""></span>
                        Van
                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/bus.png" alt=""></span>
                        Bus
                      </div>
                    </div-->
                  </div>
                </div> 
                <div class="col-lg-12">
                  <ul class="nacc">


                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                          <div class="left-text">
                           <h4>Expo Taxi</h4>
                           </div>
                          <div class="col-lg-6">
                          <form id="contact2" action="" method="post">
                          Mobile number
                          <input type="name" name="name" id="name"  required>
                          Pickup location
                          <input type="name" name="name" id="name" required>
                          Drop location
                          <input type="name" name="name" id="name"  required>

              <div class="row">
              <div class="col-lg-6">
                          Pickup Date 
                          <input type="date" name="name" id="name"  required>
                          </div>
                          <div class="col-lg-6">
                          Pickup Time 
                          <input type="time" name="name" id="name"  required>
                          </div>
                          </div>


                          <div class="row">
              <div class="col-lg-6">
                          First Name 
                          <input type="text" name="name" id="name"  required>
                          </div>
                          <div class="col-lg-6">
                          Last Name
                          <input type="text" name="name" id="name"  required>
                          </div>
                          </div>

                          Email Address
                          <input type="email" name="name" id="name"  required>


                          <button type="button" onclick="alert('test');" id="form-submit" class="main-button ">Send Message Now</button>
                          </form>
                        </div>
                          <div class="col-lg-6">
                            
                          <div class="right-image">
                                <img src="assets/images/services-image-03.jpg" alt="">
                              </div>
                            </div>
                          
                          </div>
                        </div>
                      </div>
                    </li>



                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                          <div class="left-text">
                           <h4>Car Taxi</h4>
                           </div>
                          <div class="col-lg-6">
                          <form id="contact2" action="" method="post">
                          Mobile number
                          <input type="name" name="name" id="name"  required>
                          Pickup location
                          <input type="name" name="name" id="name" required>
                          Drop location
                          <input type="name" name="name" id="name"  required>

              <div class="row">
              <div class="col-lg-6">
                          Pickup Date 
                          <input type="date" name="name" id="name"  required>
                          </div>
                          <div class="col-lg-6">
                          Pickup Time 
                          <input type="time" name="name" id="name"  required>
                          </div>
                          </div>


                          <div class="row">
              <div class="col-lg-6">
                          First Name 
                          <input type="text" name="name" id="name"  required>
                          </div>
                          <div class="col-lg-6">
                          Last Name
                          <input type="text" name="name" id="name"  required>
                          </div>
                          </div>

                          Email Address
                          <input type="email" name="name" id="name"  required>


                          <button type="button" onclick="alert('test');" id="form-submit" class="main-button ">Send Message Now</button>
                          </form>
                        </div>
                          <div class="col-lg-6">
                            
                          <div class="right-image">
                                <img src="assets/images/services-image-03.jpg" alt="">
                              </div>
                            </div>
                          
                          </div>
                        </div>
                      </div>
                    </li>



                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                          <div class="left-text">
                           <h4>Cab Taxi</h4>
                           </div>
                          <div class="col-lg-6">
                          <form id="contact2" action="" method="post">
                          Mobile number
                          <input type="name" name="name" id="name"  required>
                          Pickup location
                          <input type="name" name="name" id="name" required>
                          Drop location
                          <input type="name" name="name" id="name"  required>

              <div class="row">
              <div class="col-lg-6">
                          Pickup Date 
                          <input type="date" name="name" id="name"  required>
                          </div>
                          <div class="col-lg-6">
                          Pickup Time 
                          <input type="time" name="name" id="name"  required>
                          </div>
                          </div>


                          <div class="row">
              <div class="col-lg-6">
                          First Name 
                          <input type="text" name="name" id="name"  required>
                          </div>
                          <div class="col-lg-6">
                          Last Name
                          <input type="text" name="name" id="name"  required>
                          </div>
                          </div>

                          Email Address
                          <input type="email" name="name" id="name"  required>


                          <button type="button" onclick="alert('test');" id="form-submit" class="main-button ">Send Message Now</button>
                          </form>
                        </div>
                          <div class="col-lg-6">
                            
                          <div class="right-image">
                                <img src="assets/images/services-image-03.jpg" alt="">
                              </div>
                            </div>
                          
                          </div>
                        </div>
                      </div>
                    </li>




                    
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Online Shopping &amp; Tracking ID</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/services-image-04.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Enjoy &amp; Travel</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                  dover lipsum lorem and the others.</p>
                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                  <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="assets/images/services-image.jpg" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6><?php echo CONTACT; ?></h6>
            <h4><?php echo CONTACT_TITLE; ?></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="assets/images/contact-dec-v2.png" alt="">
                </div>
              </div>
              <div class="col-lg-5">
                <div id="map">
                  <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/phone-icon.png" alt="">
                          <a href="#">+94 71 115 7755</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/email-icon.png" alt="">
                          <a href="#">info@rides.lk</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/location-icon.png" alt="">
                          <a href="#"><?php echo ADDRESS; ?></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                      </fieldset>
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                      </fieldset>
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
 


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright <?php echo date('Y') ?> Rides.lk,  All Rights Reserved. 

      
			
					
				
		
			
          <br></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

  
</body>
</html>