<?php
include 'functions.php';
include 'db_connection.php';

if(!isset($_GET['cassette'])) $cassette_id=38; else $cassette_id=$_GET['cassette'];
//$cassette_id=35;
if($cassette_id<10)$cassette_id="0".$cassette_id;
$data=get_cassette_details($cassette_id);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Shafriri Album</title>

<!-- Mobile viewport -->
<meta name="viewport" content="width=device-width; initial-scale=1.0">

<style type="text/css">
/*  *{margin:0;padding:0}*/
  body{
       background:url("images/body_bg01.png");
      }

img{ max-width:100%; height:auto;margin-top:3%}

.gallery_title{
max-width:100%;
height:auto;
font-family:arial;
font-size:45px;
direction:rtl;
color:#8f3030;
text-align:center;
font-style:italic;
font-weight:bold;
}

.cassette_subject{
margin-top:5px;
max-width:100%;
height:auto;
font-family:arial;
font-size:18px;
direction:rtl;
color:#8f3030;
text-align:center;
}

a{
margin-top:5px;
max-width:100%;
height:auto;
background-color:#8f3030;
font-family:arial;
font-size:30px;
direction:rtl;
color:#ffffff;
text-align:center;
font-style:italic;
border-radius:20px;
display:block;
text-decoration:none;
padding:10px 0;
}


</style>


  <script type="text/javascript" src="jquery-1.8.3.min.js"></script>
  <script type="text/javascript">


   $(document).ready(function(){


   }); //END READY

   
  </script>



    
</head>

<body>

 <!-- <h2><?php echo "מקבץ ".$data['id'].": ".$data['subject']?></h2> -->
<div class="gallery_title">השפרירים<br><span style="font-size:18px;font-weight:normal;">תאילנד 2014</span></div>
<hr>
<div class="cassette_subject"><?php echo "מקבץ ".$data['id']."<br>".$data['subject']?></div>
<a href="mobile_table.php">חזרה לטבלה</a>
<?php
$file_root = 'gallery/cassette_'.$cassette_id;
if (file_exists($file_root.'/big'))
{
  $PictureNumber = filecount($file_root.'/big');
  $last=101+$PictureNumber;
  for($i=101; $i<$last; $i++)
   {
	echo'<img src="'.$file_root.'/big/'.$i.'.jpg"/>';
   }
}
?>
<a href="mobile_table.php">חזרה לטבלה</a>
</body>
</html>