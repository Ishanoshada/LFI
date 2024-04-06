<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>about</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="menu.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="style.css" />
<style type="text/css">
<!--

div.wrap1 .wrap2 {
	/* only with left panel */ background-image: url(img/bg1.gif);
	/* right and left panel - background-image: url(img/bg2.gif); */
	/* only with right panel - background-image: url(img/bg3.gif); */
}

-->
</style>


</head>
<?php 
    include("db.php");	
	$query1 = "SELECT * FROM upload";
	$result = mysql_query($query1);
?>
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
          <li><span class="hlavny_"><a href="index.html">Home</a></span></li>
          <li><img src="img/divider2.png" alt="" /></li>
          <li><span class="hlavny_"><a href="derec.html">About Us</a></span></li>
          <li><img src="img/divider2.png" alt="" /></li>
          <li><span class="hlavny_"><a href="central.html">VS Offices</a></span></li>
          <li><img src="img/divider2.png" alt="" /></li>
          <li><span class="hlavny_"><a href="news.html" >News & Events</a></span></li>
          <li><img src="img/divider2.png" alt="" /></li>
          <li><span class="hlavny_"><a href="downld.php">Download</a></span></li>
	  <li><img src="img/divider2.png" alt="" /></li>
          <li><span class="hlavny_"><a href="surname.php">Contact Us</a></span></li>
        </ul>
      </div>
      <div class="info"></div>
      <div class="info"></div>
      <div class="leftpanel">
        <div class="header"></div>
        <ul id="categories">
          <li style="border-top:0;" class="selected"><a href="index.html">Home</a></li>
          <li><a href="derec.html">About Us</a></li>
          <li><a href="central.html">VS Office</a></li>
          <li><a href="news.html">News & Events</a></li>
          <li><a href="downld.php">Downloads</a></li>
          <li><a href="faq.html">FAQ</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="table.html">Projects</a></li>
          <li><a href="surname.php">Contact Us</a></li>
          <li><a href="display.php">Animals For Sale</a></li>
          <li><a href="login5/login_form.php">Login</a></li>
          <li><a href="loginc/complain.php">Public complains</a></li>
          <li><a href="ngoprojects.php">NGO-Projects</a></li>
        </ul>
        <br/>
        <div class="header">Office</div>
        <div class="text"> <br />
          <br />
          
        </div>
      </div>
      <div class="mainpanel" style="width:656px;">
        <div class="text_">
 

<?php
while($row1=mysql_fetch_array($result))
{
	$name=$row1['name'];
	$type=$row1['type'];
        $fileName=$row1['fileName'];
	?>
<table bgcolor=#e4d0c7 width=400 align="center">
<tr bgcolor=#ffffff><td>
<img alt="down-icon" src="down-drop-icon.png" align="left" width="20" height="20" />
<a href="download.php?filename=<?php echo $name ;?>" >
&nbsp;&nbsp;&nbsp;<?php echo $fileName ;?></a></td></tr></table>

<?php }?>        

<?php
while($row1=mysql_fetch_array($result))
{
	$name=$row1['name'];
	$type=$row1['type'];
        $fileName=$row1['fileName'];
	?>

<img alt="down-icon" src="down-drop-icon.png" align="left" width="20" height="20" />
<a href="download.php?filename=<?php echo $name ;?>" >
<?php echo $name ;?></a>

<?php }?>
          <div class="text">
             </div>
         
        </div>
        <div class="text_">
                  


<div class="text"></div>
          
        </div>
        <div class="text_">
          
          <div class="text"></div>
         
      </div>
    </div>
    

<div class="info1">
      <div style="display:inline; float:left;"><font color=#000000>&copy; 2019 Department of Animal Production and Health(Central)</font></div>
    
  </div>
</div>
</body>
</html>
