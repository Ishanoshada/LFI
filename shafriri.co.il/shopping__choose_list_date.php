<?php
include 'db_connection.php';
include 'functions.php';
$listDetails=get_all_listnums();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>Shafriri Shopping Admin</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
<style type="text/css">


*{	box-sizing:border-box;
	-moz-box-sizing:border-box;
	margin:0;
	padding:0;
 }


.wrapper {
width: 100%;
background: -webkit-linear-gradient(#bae444, #4b5c16); 
background: -o-linear-gradient(#bae444, #4b5c16);
background: -moz-linear-gradient(#bae444, #4b5c16);
background: linear-gradient(#bae444, #4b5c16);
margin:0 auto;
}

.header{
width:90%;
margin:0 auto;
}

.header h1{
background:#ffffff;
font-family:arial;
font-size:30px;
color:#cc0000;
padding:20px;
border-radius:8px;
text-shadow: 2px 2px 4px #000000;
}


img{
width:90%;
height:auto;
margin-left:5%;
border-radius:8px;
}


.text_box{
width:90%;
background: -webkit-linear-gradient(#efefef, #d0d0d0); 
background: -o-linear-gradient(#efefef, #d0d0d0);
background: -moz-linear-gradient(#efefef, #d0d0d0);
background: linear-gradient(#efefef, #d0d0d0);
border-radius:8px;
padding:10px 20px;
margin-top:10px;
margin:15px auto 0;
}


.text_box p{
font-family:arial;
font-size: 18px;
color: #000000;
direction:rtl;
text-shadow:none;
padding-top:10px;
}

.text_box h2{
font-family:arial;
font-size: 22px;
color: #4b5c16;
direction:rtl;
text-shadow: 2px 2px #ababab;
}


.text_box a{
font-family:arial;
font-size: 20px;
color: #ffffff;
direction:rtl;
display:block;
text-decoration:none;
text-align:center;
margin-top:10px;
background:#990000;
border-radius:8px;
padding:10px 0;
}



@media only screen and (min-width: 481px) {
.wrapper {
width: 500px;
}

}



</style>


</head>
<body>

<div class="wrapper">
<div style="height:15px;"></div>
<div class="header">
	<h1>SHAFRIRI<br>Shopping Center</h1>
</div>

	<div class="text_box">
		<h2 style="text-align:center;font-size:26px">תאריך קניות ?</h2>

<?php
foreach($listDetails as $lkey=>$lval)
{
$month=date('m', strtotime($lval["list_end"])); //month
$day=date('d', strtotime($lval["list_end"])); 
$year=date('Y', strtotime($lval["list_end"]) );
echo'<a href="showlist.php?listid='.$lval["list_id"].'" class="shopDate">'.$day.'-'.$month.'-'.$year.'</a>';
}
?>
	</div>

	<div style="height:30px;"></div>

</div>


</body>
</html>
