<?php
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>DAPH(Central)</title>

<link rel="stylesheet" type="text/css" media="screen, projection" href="../menu.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="../style.css" />
<style type="text/css">
<!--

div.wrap1 .wrap2 {
	/* only with left panel- background-image: url(../img/bg1.gif); */
	/* right and left panel */ background-image: url(../img/bg2.gif);
	/* only with right panel - background-image: url(../img/bg3.gif); */
}

-->
</style>
<script src="../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body>
<div class="wrap1">
  <div class="wrap2">
    <div class="logo">
      <div style="display:inline; float:left;"> 
        <div class="slogan"></div>
      </div>
      <div style="display:inline; float:right">
        
      </div>
    </div>
    <div id="menu">
      <div class="menu">
        <ul>
          <li><span class="hlavny_"><a href="../index.html">Home</a></span></li>
          <li><img src="img/divider2.png" alt="" /></li>
          <li><span class="hlavny_"><a href="../derec.html">About Us</a></span></li>
          <li><img src="img/divider2.png" alt="" /></li>
          <li><span class="hlavny_"><a href="../central.html">Vs office</a></span></li>
          <li><img src="img/divider2.png" alt="" /></li>
          <li><span class="hlavny_"><a href="../news.html" >News & Events</a></span></li>
          <li><img src="img/divider2.png" alt="" /></li>
          <li><span class="hlavny_"><a href="../downld.php">Download</a></span></li>
	  <li><img src="img/divider2.png" alt="" /></li>
          <li><span class="hlavny_"><a href="../surname.php">Contact Us</a></span></li>
        </ul>
      </div>
      <div class="info"></div>
      <div class="leftpanel">
        <div class="header"></div>
        <ul id="categories">
          <li style="border-top:0;" class="selected"><a href="home.html">Home</a></li>
          <li><a href="../derec.html">About Us</a></li>
          <li><a href="../central.html">Sub Office</a></li>
          <li><a href="../news.html">News & Events</a></li>
          <li><a href="../downld.php">Downloads</a></li>
          <li><a href="../faq.html">FAQ</a></li>
          <li><a href="../gallery.html">Gallery</a></li>
          <li><a href="../table.html">Projects</a></li>
          <li><a href="../surname.php">Contact Us</a></li>
          <li><a href="../display.php">Animals For Sale</a></li>
          <li><a href="../login/login_form.php">Login</a></li>
          <li><a href="complain.php">Public complains</a></li>
        </ul>
        <br />
        <div class="header">Office</div>

        <div class="text"> <strong><a href="http://www.cp.gov.lk/en/">Central Provincial Council</a></strong><br /><hr></hr>

<strong><a href="http://www.cs.cp.gov.lk/en/">Chief Secretary's Office</a></strong><br />
          <br />



          <a href="http://gic.gov.lk/gic/"><img src="../img/gic_en.gif"></a>
    
</div>
  
      </div>

      <div class="mainpanel">
        <div class="text_">

          <div class="text">
             </div>
         
        </div>
        <div class="text_">
         
          <div class="text">
 

</div>
          
        </div>
        <div class="text_">
          <?php
    if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
        echo '<ul class="err">';
        foreach($_SESSION['ERRMSG_ARR'] as $msg) {
            echo '<li>',$msg,'</li>';
        }
        echo '</ul>';
        unset($_SESSION['ERRMSG_ARR']);
    }
?>
<center><font color=#f09718 size=5>Register Now</font></center>
<form id="loginForm" name="loginForm" method="post" action="register-check.php">
  <table bgcolor=#f09718 align="center">
   
    <tr bgcolor=#ffffff>
      <th width="124">User Name</th>
      <td width="168"><input name="user_name" type="text" class="textfield" id="user_name" /></td>
    </tr>
    <tr bgcolor=#ffffff>
      <th>Password</th>
      <td><input name="pass_word" type="password" class="textfield" id="pass_word" /></td>
    </tr>
    <tr bgcolor=#ffffff>
      <th>User Type </th>
      <td><select name="user_type">
                                <option value="1">Administrator</option>
                                <option value="2">Farmer</option>
                                <option value="3">Officer</option>
								<option 
                            </select></td>
    </tr>
    <tr bgcolor=#ffffff>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Register" /></td>
    </tr>
  </table>
</form>
          <div class="text"><a href=login_form.php><center><font color=#f09718 size=5>Login</font></center></a>
<a href=../loginsms/index.php><center><font color=#f09718 size=5>Login2</font></center>
</div>
         
        </div>
      </div>
      <div class="rightpanel">
        <div class="header">Important link</div>
        <div class="inquiry"> <span class="divider" style="font-weight:bold;"></span> <span class="divider"><strong><a href="http://www.president.gov.lk/">President of Sri Lanka</a></strong></span> 
<span class="divider"><strong><a href="http://www.pmdnews.lk/">PMD NEWS</a></strong></span> 
<span class="divider"><strong><a href="http://www.presidentsoffice.gov.lk/">PRESIDENTIAL SECRETARIAT</a></strong></span> 

          <br />
        </div>
        <div class="header">Related links</div>
        <div class="text"> <strong><a href="http://www.daph.gov.lk/">Department of Animal</br> Production and Health</a></strong><br />
        <span class="divider"></span>   
<strong><a href="http://www.vri.lk/">Veterinary Research Institute</a></strong><br />
          
          
          
          <span class="divider"></span> 
<strong><a href="http://www.livestock.gov.lk/">Ministry of<br/> Livestock Development</a></strong>
          <br />
   <span class="divider"></span>      
 <strong><a href="http://www.fincom.lk/">Finance Commission</a></strong>     
 <span class="divider"></span> 
<div class="header">Announcements</div>    
</div>
    </div>
    <div class="info1">
      <div style="display:inline; float:left;"><font color=#000000>&copy; 2019 Department of Animal Production and Health(Central)</font></div>
      
  </div>
</div>
</body>
</html>
