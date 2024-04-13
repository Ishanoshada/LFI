			  <div class="container" style="position:fixed; width:100%;  ">
              <div class="header-content">
              <div class="branding" style="border:#0C6 solid 0px; ">
							<img src="images/logo.png" alt="rides.lk" width="70" class="logo">
							<h1 class="site-title" style="width:100px;"><a href="index.php">Rides.lk</a></h1>
							<small class="site-description">A True Experience</small>
						</div>
                          <?php
						
						$menu =  basename($_SERVER['PHP_SELF']); 
						$active="menu-active";
						
						?>
						
						<nav class="main-navigation dropdown" style="border:#0C6 solid 0px;">
							<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
                            <li class="menu-item <?php if($menu=='index.php'){echo $active;} ?>"><a href="index.php">Home</a> </li>
								<li class="menu-item <?php if($menu=='about-us.php'){echo $active;} ?>"><a href="about-us.php">About us </a> </li>
								<li class="menu-item <?php if($menu=='gallery.php'){echo $active;} ?>"><a href="gallery.php">Gallery</a></li>
								<li class="menu-item <?php if($menu=='safety.php'){echo $active;} ?>"><a href="safety.php">Customer Protection</a></li>
                                <li class="menu-item <?php if($menu=='contact.php'){echo $active;} ?>"><a href="contact.php">Contact</a> </li>
                                <li class="menu-item"><a style="color:#F00" href="download.php?d=rides_rental_agreement.pdf" >Rental Agreement</a> </li>
                                
                                <!--li class="menu-item dropdown_sub"><a href="contact.php">Contact</a>
                                     <div class="dropdown-content">
                                     <a href="1" class="sub_menu" >Hello World! asdasd as</a>
                                     <a href="2" class="sub_menu">Hello World!</a>
                                     <a href="3" class="sub_menu">Hello World!</a>
                                     </div>
                                     
                                </li-->
							</ul>
                            

						</nav>	
                        </div>
                        	</div>
                          