<?php

include 'db_connection.php';

include 'functions.php';



global $con;



$stat = get_last_list_status();

// echo"<pre>";
// print_r($stat);
// echo"</pre>";
// date_default_timezone_set('Asia/Jerusalem');
// $date = date("Y-m-d H:i:s");
// echo $date;
// die();


if ($stat["status"]==1)$shopListNum=$stat["list_id"];

else

	{
		date_default_timezone_set('Asia/Jerusalem');
		$date = date("Y-m-d H:i:s");
		$query="INSERT INTO listnum (status,list_start) VALUES (1,'".$date."')";
		mysqli_query($con,"SET NAMES 'utf8'");
		$result = mysqli_query($con, $query);
		//if(!$result){echo mysqli_error($con);die();}
		if(!$result)die("Did not open a new list");
		$shopListNum = mysqli_insert_id($con);
	}
 echo '<script>shopListNum = '.$shopListNum.';</script>';
?>


<!DOCTYPE html>
<html lang="He">

<head>
	<title>Shopping List</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="styleIndex.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
$(document).ready(function(){



$(".product").click(function(){

	$(this).next(".amount_box").slideToggle("fast");

});



$("input[name='comment_button']").click(function(){

	$(this).next().next().slideToggle("fast");

});



  $("input[name='submit']").click(function() {

		var id=$(this).attr("rel");

		var catId,name,amount,comment;





		catId=$("input[name='cat"+id+"']").val();

		name=$("input[name='name"+id+"']").val();

		amount=$("input[name='amount"+id+"']").val();

		comment=$("input[name='comment"+id+"']").val();

		packing=$("input[name='packing"+id+"']").val();

	  

		var dataString = 'catId='+ catId + '&name='+ name+ '&amount='+ amount+ '&comment='+ comment+ '&shopListNum='+ shopListNum;



	  $.ajax({

      type: "POST",

      url: "add_to_list.php",

      data: dataString,

	  

      //success: null

	 

	 

      success: function() {

		if (amount==0 || amount=="")

			{

				$(".product[prodrel='"+catId+"']").css({"font-weight":"normal","color":"#000000"});

				$(".product[prodrel='"+catId+"']").html(name);

				$(".product[prodrel='"+catId+"']").next(".amount_box").slideUp("fast");

			}

		else

			{

				$(".product[prodrel='"+catId+"']").css({"font-weight":"bold","color":"red"});

				$(".product[prodrel='"+catId+"']").html(name+" - "+amount+" "+packing);

				$(".product[prodrel='"+catId+"']").next(".amount_box").slideUp("fast");

			}

      }

	  

     });

	     return false;



	});



});
    </script>
    


<style>



body{background:#bae444; }

*{	box-sizing:border-box;

	-moz-box-sizing:border-box;

	margin:0;

	padding:0;

 }





.wrapper {

width: 100%;

background:#ffffff;

margin:0 auto;

}

.vfiller_20{clear:both;display:block;height:1px;}



a{

display:block;

margin:10px auto 0;

width:90%;

height:30px;

border:1px solid #ffffff;

border-radius: 8px;

direction:rtl;

font-family:arial;

font-size:16px;

color: #ffffff;

outline:none;

cursor: pointer;

background: #4b5c16;

line-height: 30px;

text-decoration:none;

text-align:center;

}



img{

width:90%;

height:auto;

margin-left:5%;

border-radius:8px;

}



h2{

width:90%;

font-family:arial;

font-size: 22px;

color: #ffffff;

direction:rtl;

background:#000099;

margin:30px auto 0;

border-radius:8px;

line-height:40px;

padding-right:10px;

}



.product{

font-family:arial;

font-size: 16px;

color: #000000;

direction:rtl;

line-height:25px;

padding-right:5%;

}



.boldme{

font-weight:bold;

color:red;

}



.amount_box{

width:95%;

display:none;

}



input.in_text{

width:30%;

height:30px;

line-height:30px;

border:1px solid #000000;

border-radius: 4px;

direction:rtl;

padding-right:10px;

font-family:arial;

font-size:16px;

color: #000000;

outline:none;

float:right;

}



input.comment{

width:95%;

height:30px;

line-height:30px;

border:1px solid #000000;

border-radius: 4px;

direction:rtl;

padding-right:10px;

font-family:arial;

font-size:16px;

color: #000000;

outline:none;

float:right;

margin-top:5px;

display:none;

}



.unit{

width:auto;

padding-top:13px;

float:right;

margin-right:5px;

color:#000000;

font-family:arial;

font-size:16px;

color: #000000;

direction:rtl;

}



.send_amount{

width:auto;

padding:0 5px;

height:30px;

border:1px solid #ffffff;

border-radius: 4px;

outline:none;

cursor: pointer;

background: #4b5c16;

float:right;

margin-right:5px;

color:#ffffff;

font-size:20px;

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

<div class="vfiller_20"></div>

<!-- <a href="add_item.php">+ הוסף פריט</a> -->





<?php

$catName = array();

$details=get_all_data();



foreach($details as $dkey=>$dval)

{

  echo'<h2>'.$dval["cat"].'</h2>';



  $catDetails=get_cat_data($dval["cat"]);



/* sorting by Alphabetic */

foreach($catDetails as $skey=>$sval){$name[$skey]  = $sval['name'];}

array_multisort($name, SORT_ASC, $catDetails);

$name=null;





foreach($catDetails as $ckey=>$cval)

{

if(checkIfOrdered($shopListNum,$cval["id"]))

	{

	 $orderDetails=get_orderedItem_details($shopListNum,$cval["id"]);



	  if ($orderDetails["amount"]==0 || $orderDetails["amount"]=="")

		{

		 echo'<div class="product" prodrel="'.$cval["id"].'">'.stripslashes($cval["name"]).'</div>';

		 $itemAmount="";

		 $itemComment="";

		}

	  else

		{

		 echo'<div class="product boldme" prodrel="'.$cval["id"].'">'.stripslashes($cval["name"]).' - '.$orderDetails["amount"].' '.$cval["packing"].'</div>';

		 $itemAmount=$orderDetails["amount"];

		 $itemComment=$orderDetails["comment"];

		}



	}

else

	{

		echo'<div class="product" prodrel="'.$cval["id"].'">'.stripslashes($cval["name"]).'</div>';

		$itemAmount="";

		$itemComment="";

	}

echo'<div class="amount_box">';

echo'<form  method="post" action="/">';

echo'<input type="text" name="amount'.$cval["id"].'" value="'.$itemAmount.'" class="in_text"/>';

echo'<div class="unit">'.$cval["packing"].'</div>';

echo'<input type="submit" name="submit" value="&#x2713;" rel="'.$cval["id"].'" class="send_amount"/>';

echo'<input type="button" name="comment_button" value="הערה" class="send_amount"/>';

echo'<div style="clear:both;"></div>';

echo'<input type="text" name="comment'.$cval["id"].'" value="'.$itemComment.'" class="comment"/>';

echo'<div style="clear:both;"></div>';

echo'<input type="hidden" name="cat'.$cval["id"].'" value="'.$cval["id"].'"/>';

echo'<input type="hidden" name="name'.$cval["id"].'" value="'.$cval["name"].'"/>';

echo'<input type="hidden" name="packing'.$cval["id"].'" value="'.$cval["packing"].'"/>';

echo'</form>';

echo'</div>';

}



	

}







?>

</div>



</body>

</html>

