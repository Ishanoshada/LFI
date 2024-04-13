<?php
include 'db_connection.php';
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="he">

<head>
    <title>Shafriri Catalog</title>
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
</head>

<body>
<div class="wrapper">
<div class="vfiller_20"></div>
<a href="add_item.php" class="catAddItem">+ הוסף פריט</a>
<?php
$catName = array();
$details=get_all_data();
	
foreach($details as $dkey=>$dval)
	{
		echo'<h2>'.$dval["cat"].'</h2>';
		$catDetails=get_cat_data($dval["cat"]);
		foreach($catDetails as $skey=>$sval){
			 $name[$skey]  = $sval['name'];

			}
		array_multisort($name, SORT_ASC, $catDetails);
		$name=null;
		foreach($catDetails as $ckey=>$cval)
			{
				echo'<p>'.($ckey+1).'. '.stripslashes($cval["name"]).'</p>';	
			}
	}
?>
</div>

</body>
</html>
