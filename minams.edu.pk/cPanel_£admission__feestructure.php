<?php
include("../../include/session.php");

?>
<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Fee Structure
</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
<link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/layouts/layout/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
  </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo visible-xs" >
                    <!-- <a href="index.html"> -->
                   
                                           <img src="../../img/core-img/Logo-Recovered.png"  height="40px" style="margin-top:8px;" alt="logo" class="logo-default" />
                                     <div class="menu-toggler sidebar-toggler"> </div> 
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                       
                       
                       
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href=" " class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="https://admissions.riphah.edu.pk/riphah_demo/public/assets/layouts/layout/img/avatar.png" />
                                
                                <span class="username username-hide-on-mobile">...</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                
                                                                                                                                                                  <li>
                                    <a href="logout.php">
                                        <i class="fa fa-sign-out"></i> Log Out </a>
                                </li>
                                                                                                                                                                                                                                                             </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->

                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler"> </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        <!-- <li class="sidebar-search-wrapper"> -->
                            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                           <!--  <form class="sidebar-search  sidebar-search-bordered" action="page_general_search_3.html" method="POST">
                                <a href="javascript:;" class="remove">
                                    <i class="icon-close"></i>
                                </a> -->
                                <!-- <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                                 </div>-->
                            <!-- </form> -->
                            <!-- END RESPONSIVE QUICK SEARCH FORM -->
                        <!-- </li> -->

                        <li class="nav-item hidden-xs" style="padding-bottom: 20px;padding-left: 70px;">
                                                 <img src="../../img/core-img/Logo-Recovered.png"  height="100px" style="margin-top:8px;" alt="logo" class="logo-default" />
                                                </li>
                                               
                                               
                                              
                            <li class="nav-item  ">
                            <a href="home.php" class="nav-link nav-toggle">
                                <i class="fa fa-home"></i>
                                <span class="title">Home</span>
                                
                            </a>    
                        </li>
                        <li class="nav-item  ">
                            <a href="feestructure.php" class="nav-link nav-toggle">
                                <i class="icon-key"></i>
                                <span class="title">Fee Structure</span>
                               <span class="badge badge-danger" id="st_feechallan"></span>
                            </a>    
                        </li>
                        <li class="nav-item  ">
                            <a href="newapply.php" class="nav-link nav-toggle">
                                <i class="icon-key"></i>
                                <span class="title">Apply Now </span>
                               <span class="badge badge-danger" id="st_feechallan"></span>
                            </a>    
                        </li>
                                     
                                               
                                                                   
                                              
                                              
                                               
                                              
                    </ul>
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content" style="background-color:none;">
                <div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Fee Stucture</span>
        </li>
    </ul>
</div>
                    
<h3 class="page-title" style="font-size:24px;">Fee Structure </h3>
<div>
    <p>
        <ol>
        	       </ol>
    </p>
</div>
                    
                    <div class="row">
        <div class="col-md-12">
            
                                                  
            
        </div>
    </div>
    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                        <div class="portlet light bordered">
                                <div class="portlet-title">
                                   <div class="caption font-blue-madison">
                                        <i class="icon-settings font-blue-madison"></i>
                                        <span class="caption-subject bold uppercase"> Fee Structure</span>
                                    </div>
                                    <div class="actions">
                                         <a href="newapply.php" class="btn  green-meadow btn-md">
                                                    <i class="fa fa-plus"></i> Apply Now </a>
                                  
                                          </div>
                                </div>
                                <input type="hidden" name="countupdatedfeeforms" id="countupdatedfeeforms" value="0">
                                <div class="portlet-body">
                                    <div class="table-responsive"> 
                                    <table class="table table-striped table-bordered table-checkable order-column" id="sample_2">
                                        <thead>
                                            <tr>
                                                 
                                                <th colspan="3">Fee Structure for BSN (4 years) Degree Program </th>
                                                 
                                               
                                            </tr>
                                            <tr>
                                                 
                                                <th ># </th>
                                                 <th >Description </th>
                                                 <th >Fee </th> 
                                               
                                            </tr>
                                        </thead>
                                        <tbody> 
                                            <?php
                                              
                                                ?>
                                            <tr>
                                            
                                                <td>1</td>
                                                <td>    Prospectus (Once)</td>
                                                
                                                <td> 1500 </td>
                                            </tr>
                                            
                                            
                                <tr>
                                            
                                                <td>2</td>
                                                <td>   Application (Once)</td>
                                                
                                                <td> 1000 </td>
                                            </tr>
                                        
                                     
                                <tr>
                                            
                                                <td>3</td>
                                                <td>   Admission fee (Once)</td>
                                                
                                                <td> 20,000 </td>
                                            </tr>
                                        
                                     
                                <tr>
                                            
                                                <td>4</td>
                                                <td>   Tuition fee (per semester)</td>
                                                
                                                <td> 87,000 </td>
                                            </tr>
                                        
                       
                                         
                                <tr>
                                            
                                                <td>5</td>
                                                <td>  Security (Refundable Once)</td>
                                                
                                                <td> 10,000 </td>
                                            </tr>
                                        
                       
                             <tr>
                                            
                                                <td>6</td>
                                                <td> Co-curricular activities ( per semester)</td>
                                                
                                                <td> 2000 </td>
                                            </tr>
                                        <tr>
                                            
                                                <td></td>
                                                <td>  First Semester Fee</td>
                                                
                                                <td> 121,500 </td>
                                            </tr>      
                            <tr>
                                                 
                                                <th colspan="3">Subsequent Semesters </th>
                                                 
                                               
                                            </tr>
                                            <tr> 
                                                <td> 1</td> <td>	Tuition fee (2nd Semester)</td><td>	89,000</td>
                                            </tr>
                                            <tr> <td>2</td>	 <td>Tuition fee (3rd Semester) </td>	<td>89,000 </td> </tr>
                                            
<tr> <td>  3</td>	<td>Tuition fee (4th Semester)</td>	<td>89,000</td></tr>
<tr><td>  4</td>	<td>Tuition fee (5th Semester)</td>	<td>89,000</td></tr>
<tr><td>  5</td>	<td>Tuition fee (6th Semester)</td>	<td>89,000</td></tr>
<tr><td>  6</td>	<td>Tuition fee (7th Semester)</td>	<td>89,000</td></tr>
<tr> <td> 7</td>	<td>Tuition fee (8th Semester)</td>	<td>89,000</td></tr>
<tr> <td> 8	</td> <td>Clinical Practicum Hospital Fee @semester VIII</td>	<td>	8,000</td></tr>
  <tr> <td>  	</td> <td>7 semesters </td>	<td>	631,000</td></tr>
     <tr> <td>  	</td> <td>Total Fee </td>	<td>	752,000</td></tr>
                                            
                                         <tr> <td>   1</td><td>	Degree/convocation fee (Once)</td>	<td>	As Per Actual*</td></tr>
<tr> <td>2</td>	<td>	Examination fee ( per semester)</td>	<td>	As Per Actual*</td></tr>
<tr> <td>3</td>	<td>	Council registration fee	</td>	<td>As Per Actual*</td></tr>
<tr> <td>4</td>	<td>	University registration fee	</td>	<td>As Per Actual*</td></tr>

                                             
                 <th colspan="3">Fee Structure for Post-RN (2years) Degree Program </th>
                                                                     
                              
                                      <tr> <td>      1	</td>	<td>Prospectus (Once)</td>	<td>	1,500</td></tr>
<tr> <td>2	</td>	<td>Admission fee (Once)</td>	<td>	1,000</td></tr>
<tr> <td>3</td>	<td>	Tuition fee per  semester</td>	<td>	60,000</td></tr>
<tr> <td>4</td>	<td>	1st Semester Fee</td>	<td>	62,500</td></tr>
<tr> <td>5</td>	<td>	2nd Semester Fee</td>	<td>	60,000</td></tr>
<tr> <td>6	</td>	<td>3rd Semester Fee</td>	<td>	60,000</td></tr>
<tr> <td>7</td>	<td>	4th Semester Fee</td>	<td>	60,000</td></tr>
	<tr><td></td> <td>Total  fee for Post RN BSCN (2 Years ) Degree Program Other Than Below</td>	<td>	242,500</td></tr>
<tr> <td>1</td>	<td>	Degree/convocation fee (Once)</td>	<td>	As Per Actual*</td></tr>
<tr> <td>2</td>	<td>	Examination fee ( per semester)	</td>	<td>As Per Actual*</td></tr>
<tr> <td>3</td>	<td>	Council registration fee	</td>	<td>As Per Actual*</td></tr>
<tr> <td>4</td>	<td>	University registration fee	</td>	<td>As Per Actual*</td></tr>
                                            
  <th colspan="3">Fee Structure for LHV 02 Years Diploma Program </th>
                             <tr> <td>    1</td>	<td>	Prospectus (Once)</td>	<td>	1,000</td></tr>
<tr> <td>2</td>	<td>	Admission fee (Once)</td>	<td>	8,000</td></tr>
<tr> <td>3</td>	<td>	Tuition fee per month@3500</td>	<td>	42,000 </td></tr>
<tr> <td>4</td>	<td>	Security (Refundable) </td>	<td>	2,500</td></tr>
	<tr> <td></td> <td>Total 1st Year</td>	<td>	53,500</td></tr>
<tr> <td>5</td>	<td>	Tuition fee per month@3500 </td>	<td>	42,000</td></tr>
                                    <tr> <td> </td> <td>Total 2nd Year </td>	<td> 42,000</td></tr>
	<tr> <td></td>	<td>Total Fee on LHV 2 Years Diploma Program Other than Below</td>	<td>	95,500</td></tr>
<tr> <td>6</td>	<td>	NEB & PNC Registration fee</td>	<td>	As Per Actual*</td></tr>
<tr> <td>7	</td> <td> 	 Midwifery/Public Health Examination fee </td>	<td>	As Per Actual*</td></tr>
           
              
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>

                                                        <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <div id="form_modal2" class="modal fade bs-modal-sm in" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">Delete</h4>
                                        </div>
                                        <div class="modal-body">
                                             Are you Sure you want to delete this Application?
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                            <a href="" id="delete_now" class="btn red" >Delete Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                   </div>
              </div>      
                    </div>
                </div> 
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2020 &copy; MINAMS.
          </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
       <script src="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->

       
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        
             <!--Start of Google Analytics Script-->
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-29106908-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-29106908-4');
</script>
	<!--End of Google Analytics Script-->
	
	<!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="https://admissions.riphah.edu.pk/riphah_demo/public/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
       <script src="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<script src="https://admissions.riphah.edu.pk/riphah_demo/public/assets/js/tables.js" type="text/javascript"></script>
<script type="text/javascript">
var value=$('#countupdatedfeeforms').val();
$('#st_feechallan').text(value);
    $("a#change_status").click(function(){
        var status_id = $(this).attr('value');
        $( "#delete_now" ).attr( "href",status_id);
});
</script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>
    <style>.fb_dialog.fb_dialog_advanced {
    left: 1pt ;
  margin-right: 50px;
  float:left !important;
}
iframe.fb_customer_chat_bounce_in_v2 {
    left: 1pt ;
   margin-right: 50px;
}
iframe.fb_customer_chat_bounce_out_v2 {
    left: 1pt ;
   margin-right: 50px;
}</style>
    <!-- Begin console log script -->
    <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v3.3'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="1529398804017866"
  theme_color="#a695c7">
</div>



</html>