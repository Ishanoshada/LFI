<?php
include 'db_connection.php';
include 'functions.php';

$stat = get_last_list_status();
if ($stat["status"]==1)$shopListNum=$stat["list_id"];
else
{
	header("Location: index.html");die();
}

 echo '<script type="text/javascript">shopListNum = '.$shopListNum.';</script>'
?>

<!DOCTYPE html>
<html lang="he">

<head>
    <title>Shafriri Shopping List</title>
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
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="script.js"></script>
</head>

<body>


<div class="wrapper">
<div class="vfiller_20"></div>


<?php
$catOrder = array();

$catOrder[0]="פירות";
$catOrder[1]="ירקות";
$catOrder[2]="משקאות";
$catOrder[3]="מוצרי חלב";
$catOrder[4]="קפואים";
$catOrder[5]="בשר";
$catOrder[6]="סלטים";
$catOrder[7]="מעדניה";
$catOrder[8]="שימורים";
$catOrder[9]="מכולת";
$catOrder[10]="לגוף";
$catOrder[11]="חומרי ניקוי";
$catOrder[12]="תבלינים ודגנים";

foreach($catOrder as $dkey=>$dval)
{
  $catDetails=get_cat_data($dval);
  $isEmpty = isEmptyCategory($shopListNum,$dval);
  if (!$isEmpty)echo'<h3>'.$dval.'</h3>';

	foreach($catDetails as $ckey=>$cval)
	{
	if(checkIfOrdered($shopListNum,$cval["id"]))
		{
		  $orderDetails=get_orderedItem_details($shopListNum,$cval["id"]);
			  if ($orderDetails["amount"]==0 || $orderDetails["amount"]==""){null;}
			  else if ($orderDetails["inCart"]==1)
				{	
				 echo'<div class="goShopProduct decor" rel="'.$orderDetails["id"].'" prodrel="'.$cval["id"].'">'.stripslashes($cval["name"]).' - '.$orderDetails["amount"].' '.$cval["packing"].'<span class="comment_box">'.$orderDetails["comment"].'</span></div><div style="clear:both;"></div>';
				}
			  else
				{	
				 echo'<div class="goShopProduct" rel="'.$orderDetails["id"].'" prodrel="'.$cval["id"].'">'.stripslashes($cval["name"]).' - '.$orderDetails["amount"].' '.$cval["packing"].'<span class="comment_box">'.$orderDetails["comment"].'</span></div><div style="clear:both;"></div>';
				}
		}
	}

	
}


?>
<div class="vfiller_20"></div>
<a href="javascript:void(0)" class="catAddItem" id="closeList">סגור רשימה</a>
<div class="vfiller_20"></div>

</div>


</body>
</html>
