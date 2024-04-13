<?php
include 'db_connection.php';
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="he">

<head>
    <title>Shafriri New Item</title>
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicon_57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon_114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon_72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon_144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/favicon_60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicon_120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicon_76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicon_152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon_180.png">
	<link rel="icon" sizes="192x192" href="images/favicon_192.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
    
<body>
<div class="wrapper">
<div class="inner">
<div style="height:15px;"></div>
<img src="images/cart.jpg"/>

		<h2 style="text-align:center;font-size:26px">הוספת פריט</h2>

	<form  method="post" action="/">

		<div class="text_box">
			<input type="text" name="category" class="in_text" placeholder="קטגוריה" readonly/>
			<div class="options">
				<a href="javascript:void(0)"  rel="1">ירקות</a>
				<a href="javascript:void(0)"  rel="2">פירות</a>
				<a href="javascript:void(0)"  rel="3">מוצרי חלב</a>
				<a href="javascript:void(0)"  rel="4">קפואים</a>
				<a href="javascript:void(0)"  rel="5">בשר</a>
				<a href="javascript:void(0)"  rel="6">סלטים</a>
				<a href="javascript:void(0)"  rel="7">מעדניה</a>
				<a href="javascript:void(0)"  rel="8">שימורים</a>
				<a href="javascript:void(0)"  rel="9">מכולת</a>
				<a href="javascript:void(0)"  rel="10">לגוף</a>
				<a href="javascript:void(0)"  rel="11">חומרי ניקוי</a>
				<a href="javascript:void(0)"  rel="12">תבלינים ודגנים</a>
				<a href="javascript:void(0)"  rel="13">משקאות</a>
			</div>
		</div>

		<div class="text_box">
			<input type="text" name="name" class="in_text" placeholder="שם המוצר"/>
		</div>

		<div class="text_box">
			<input type="text" name="pack" class="in_text" placeholder="צורת אריזה" readonly/>
			<div class="options">
				<a href="javascript:void(0)"  rel="1">יח</a>
				<a href="javascript:void(0)"  rel="2">גרם</a>
				<a href="javascript:void(0)"  rel="3">קג</a>
				<a href="javascript:void(0)"  rel="4">חב</a>
			</div>
		</div>


		<div class="text_box">
			<input type="submit" name="submit" value="שלח" class="contact_page_send"/>
		</div>

	</form>

	<div style="height:30px;"></div>

</div>
</div>


</body>
</html>
