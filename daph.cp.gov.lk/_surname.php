<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title><?php print("("); print date("l"); print(", "); print date("d/m/y"); print(")");?></title>
<script type="text/javascript">

function hiLiteRows(){
var x = document.getElementsByTagName('tr');
for (var i=0;i<x.length;i++)
{
x[i].onmouseover = function () {this.origColor=this.style.backgroundColor;
this.style.backgroundColor='#FFFFFF';
}
x[i].onmouseout = function () {this.style.backgroundColor=this.origColor;}
}
}

window.onload=hiLiteRows;

</script>
	
	<style type="text/css">
	
	
	#formContent{
		padding:5px;
                                
	}
	
	
	
	
	#ajax_listOfOptions{
		position:absolute;	/* Never change this one */
		width:175px;	/* Width of box */
		height:250px;	/* Height of box */
		overflow:auto;	/* Scrolling features */
		border:1px solid #317082;	/* Dark green border */
		background-color:#FFF;	/* White background color */
		text-align:left;
		font-size:0.9em;
		z-index:100;
	}
	#ajax_listOfOptions div{	/* General rule for both .optionDiv and .optionDivSelected */
		margin:1px;		
		padding:1px;
		cursor:pointer;
		font-size:0.9em;
	}
	#ajax_listOfOptions .optionDiv{	/* Div for each item in list */
		
	}
	#ajax_listOfOptions .optionDivSelected{ /* Selected item in the list */
		background-color:#317082;
		color:#FFF;
	}
	#ajax_listOfOptions_iframe{
		background-color:#F00;
		position:absolute;
		z-index:5;
	}
	
	form{
		display:inline;
	}
	
	</style>
	<script type="text/javascript" src="js/ajax.js"></script>
	<script type="text/javascript" src="js/ajax-dynamic-list.js">
		
	</script>
<title>contact</title>

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
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
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
          <li><span class="hlavny_"><a href="index.html">Home</a></span></li>
          <li><img src="img/divider2.png" alt="" /></li>
          <li><span class="hlavny_"><a href="derec.html">About Us</a></span></li>
          <li><img src="img/divider2.png" alt="" /></li>
          <li><span class="hlavny_"><a href="central.html">VS Office</a></span></li>
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
        <br />
        <div class="header">Office</div>
        <div class="text"> <br />
          <br />
          
        </div>
      </div>
      <div class="mainpanel" style="width:656px;">
<div id="formContent" align="center">
		<form action="surname.php" method="post" enctype="multipart/form-data" onsubmit="return show_loading();">

		<fieldset style="width: 100px; height: 100px;">
			<legend>Select from Name</legend>

			<table border="0" width=10>
				<tr>
					<td><label for="country">Officers Name: </label></td>
					<td><input type="text" id="country" name="term" value="" onkeyup="ajax_showOptions(this,'getCountriesByLetters',event)">
					<input type="submit" id="submit" name="submit" value="Search"><span id="pub_loading"><img src="loader.gif" width="100" height="100" alt="Loading" /></span></td>
				</tr>	
				
				
					
				
			
		</fieldset>	
		</table>
		</form>
	</div>
<style type="text/css">
<!--
#pub_loading {display:none;}
-->
</style>
<script type="text/javascript">
function show_loading(){
var loadingAnim = document.getElementById('pub_loading');
loadingAnim.innerHTML = '<img src="loader.gif" width="100" height="100" alt="Loading" />';
loadingAnim.style.display = 'inline';
}
</script>
</div>
<?php
$term=$_POST['term'];
$host="localhost"; 
$username="daphcpgov_vs"; 
$password="A7@zHMNV3}vR"; 
$db_name="daphcpgov_vs"; 
$tbl_name="contacts2"; 
$color1 = "#ecc29a"; 
$color2 = "#edddcd"; 
$row_count = 0; 

mysql_connect($host,$username,$password)or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");


$sql="SELECT * FROM $tbl_name WHERE Surname like '%$term%'LIMIT 1";
$result=mysql_query($sql);
$num_rows = mysql_num_rows($result);
?>

<table align="center" bgcolor="#ffffff">



<?php
while($rows=mysql_fetch_array($result)){
$row_color = ($row_count % 2)? $color1 : $color2;
$row_count++; 
?>

<tr bgcolor="<?php echo $row_color;?>">

<td>Name</td><td><strong><?php echo $rows['Title']; ?><?php echo $rows['Initials']; ?><?php echo $rows['Surname']; ?></strong></td></tr>

<tr bgcolor="<?php echo $row_color;?>"><td>Designation</td><td><strong><?php echo $rows['Designation']; ?></strong></td></tr>
<tr bgcolor="<?php echo $row_color;?>"><td>Address</td><td><strong><?php echo $rows['Address']; ?></strong></td></tr>
<tr bgcolor="<?php echo $row_color;?>">
<td>Office Telephone Number</td><td><strong><?php echo $rows['Office']; ?></strong></td></tr>
<tr bgcolor="<?php echo $row_color;?>">
<td>Mobile1</td><td><strong><?php echo $rows['Mobile1']; ?></strong></td></tr>

<tr bgcolor="<?php echo $row_color;?>"><td>Mobile2</td><td><strong><?php echo $rows['Mobile2']; ?></strong></td></tr>

<tr bgcolor="<?php echo $row_color;?>"><td>Fax</td><td><strong><?php echo $rows['Fax']; ?></strong></td></tr>
<tr bgcolor="<?php echo $row_color;?>"><td>Residence</td><td><strong><?php echo $rows['Residence']; ?></strong></td></tr>
<tr bgcolor="<?php echo $row_color;?>"><td>E-Mail</td><td><strong><?php echo $rows['E-Mail']; ?></strong></td></tr>

<?php

// close while loop
}

// close connection;
mysql_close();

?>
</table>
        <div class="text_">
         
          <div class="text">
             </div>
         
        </div>
        <div class="text_">
</div>         
</div>
    <div class="info1">
      <div style="display:inline; float:left;"><font color=#000000>&copy; 2016 Planing and Evaluation Devision,Department of Animal Production and Health(Central)</font></div>
      
  </div>
</div>

</body>
</html>
