<?php
include("../../include/session.php");

if(isset($_POST['firstname'])){ 
  $name=  $_POST['firstname'];
  $fname=  $_POST['fatherName'];
 $mobile=  $_POST['mobile'];
 $email=  $_POST['email'];
 $pass=  md5($_POST['password']);
   $location=  $_POST['Location'];
$q="INSERT INTO `users` (`useremail`, `password`, `userid`, `userlevel`, `fullname`, `timestamp`, `country`, `picture`, `designation`, `level`, `id`, `fathername`, `location`, `contactno`) VALUES ('$email', '$pass', '', '0', '$name', '0', '', '', 'new', '', '', '$fname', '$location', '$mobile');";
    $r=mysql_query($q);
       if($r==1){header("Location: newapply.php");}
}
    
     if(isset($_FILES['cnic1'])){
    
      
      $errors= array();
      $file_name = $_FILES['cnic1']['name'];
      $file_size =$_FILES['cnic1']['size'];
      $file_tmp =$_FILES['cnic1']['tmp_name'];
      $file_type=$_FILES['cnic1']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['cnic1']['name'])));
      $t=time();
      
    $file_nm= "cnic1".$t.".".$file_ext;   
      
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 10097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
           $useremail=$session->userinfo['useremail'];
 
          
          $q="UPDATE `student_documents` SET `cnic1` = '$file_nm' WHERE `userid` = '$useremail' ";
          mysql_query($q);
          
         move_uploaded_file($file_tmp,"../admin/users/userpic/".$file_nm);
         echo "Success";
      }else{
         print_r($errors);
      }
   }


    
 

?>
 
                                                                      
<!DOCTYPE html>

<!-- 

Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5

Version: 4.5

Author: KeenThemes

Website: http://www.keenthemes.com/

Contact: support@keenthemes.com

Follow: www.twitter.com/keenthemes

Like: www.facebook.com/keenthemes

Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes

License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->

<!--[if !IE]><!-->

<html lang="en">

    <!--<![endif]-->

    <!-- BEGIN HEAD -->



    <head>

        <meta charset="utf-8" />

        <title>    Registration
</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta content="width=device-width, initial-scale=1" name="viewport" />

        <meta content="" name="description" />

        <meta content="" name="author" />

        <!-- BEGIN GLOBAL MANDATORY STYLES -->

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />

        <link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />

        <link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />

        <link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />

        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->

        <link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL STYLES -->

        <link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />

        <link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />

        <!-- END THEME GLOBAL STYLES -->

        <!-- BEGIN PAGE LEVEL STYLES -->

        <link href="https://admissions.riphah.edu.pk/riphah_demo/public/assets/pages/css/login1.min.css" rel="stylesheet" type="text/css" />

        <!-- END PAGE LEVEL STYLES -->

        <!-- BEGIN THEME LAYOUT STYLES -->

        <!-- END THEME LAYOUT STYLES -->

        <link rel="shortcut icon" href="favicon.ico" /> </head>

    <!-- END HEAD -->



    <body class=" login">

        <!-- BEGIN LOGO

        <div class="logo" style="margin-top:1px;">

            <a href="">

                <img src="https://admissions.riphah.edu.pk/riphah_demo/public/assets/pages/img/logo.png" width="150px" style="padding-bottom:20px;" alt="" /> </a>

        </div> -->

        <br/>

        

        <!-- END LOGO -->

        <!-- BEGIN LOGIN -->

        <div class="content">



            

<form class="register-form" action="" enctype="multipart/form-data"  method="post" style="display:block;">
                <h3>Sign Up</h3>
                <p> Enter your account details below: </p>
    
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Name</label>
                    <div class="input-icon">
                    <div class="row">
        <div class="col-md-12">
            
                                  
              
        </div>
    </div>
                <input type="hidden" name="_token" value="j58xgnUMPJjnNbFXD5KdVGiUmQgaJM41H3NIf0xE">
                
                         <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix" type="text" value=""autocomplete="off" placeholder="Name" name="firstname" data-rule-required="true"  /> </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Father's Name</label>
                    <div class="controls">
                        <div class="input-icon">
                            <i class="fa fa-user"></i>
                            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" value="" placeholder="Father's Name" name="fatherName" data-rule-required="true"  /> </div>
                    </div>
                </div>
     <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Location</label>
                    <div class="controls">
                        <div class="input-icon">
                            <i class="fa fa-user"></i>
                            <input class="form-control placeholder-no-fix" type="text" autocomplete="off"  value="" placeholder="Location" name="Location" data-rule-required="true"  /> </div>
                    </div>
                </div>
               <!--  <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Passport No.</label>
                    <div class="controls">
                        <div class="input-icon">
                            <i class="fa fa-book"></i>
                            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Passport No. for International Students" name="passportNo" /> </div>
                    </div>
                </div> -->
               <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Mobile #</label>
                    <div class="controls">
                        <div class="input-icon">
                            <i class="fa fa-mobile"></i>
                            <input class="form-control placeholder-no-fix" type="text" value="" data-rule-required="true" pattern="[92][0-9]{11}" autocomplete="off" placeholder="Mobile# 923xxxxxxxxxx" name="mobile" /> </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <div class="controls">
                        <div class="input-icon">
                            <i class="fa fa-envelope"></i> 
                            <input class="form-control placeholder-no-fix" type="text" value="" data-rule-required="true"  autocomplete="off" placeholder="Email" name="email" /> </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" value="" autocomplete="off" id="register_password" placeholder="Password" data-rule-required="true"     name="password" /> </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                    <div class="controls">
                        <div class="input-icon">
                            <i class="fa fa-lock"></i>
                            <input class="form-control placeholder-no-fix" type="password"  autocomplete="off" placeholder="Re-type Your Password" autocomplete="off" data-rule-required="true"  name="rpassword" /> </div>
                    </div>
     <div class="fileinput fileinput-new" data-provides="fileinput">
                                                             Upload Picture 
                                                                    <div class="input-group input-large">
                                                                        <div class="form-control uneditable-input" data-trigger="fileinput">
                                                                            <i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
                                                                            </span>
                                                                        </div>
                                                                        <span class="input-group-addon btn default btn-file">
                                                                        <span class="fileinput-new">
                                                                        Select file </span>
                                                                        <span class="fileinput-exists">
                                                                        Change </span>
                                                                        <input type="file" name="cnic1"   data-rule-required="true" accept="application/msword, application/pdf, image/*" >
                                                                        </span>
                                                                        <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
                                                                        Remove </a>
                                                                    </div>
                                                                </div>                                   
                
                <div class="form-actions">
                        <button type="submit" id="register-submit-btn" class="btn green pull-right"> Sign Up </button>
                </div>
            </form>
            <!-- END REGISTRATION FORM -->



      </div>

        <!-- END LOGIN -->

        <!-- BEGIN COPYRIGHT -->

        

        <!-- END COPYRIGHT -->

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

        <!-- BEGIN PAGE LEVEL PLUGINS -->

        <script src="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>

        <script src="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>

        <script src="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>

        <script src="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>

        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL SCRIPTS -->

        <script src="https://admissions.riphah.edu.pk/riphah_demo/public/assets/global/scripts/app.min.js" type="text/javascript"></script>

        <!-- END THEME GLOBAL SCRIPTS -->

        <!-- BEGIN PAGE LEVEL SCRIPTS -->

        <script src="https://admissions.riphah.edu.pk/riphah_demo/public/assets/pages/scripts/login-4.min.js" type="text/javascript"></script>

        <!-- END PAGE LEVEL SCRIPTS -->

        <!-- BEGIN THEME LAYOUT SCRIPTS -->

        <!-- END THEME LAYOUT SCRIPTS -->
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



    </body>



</html>