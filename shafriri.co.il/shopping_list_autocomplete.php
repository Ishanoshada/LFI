<?php
include 'db_connection.php';
?>
<!DOCTYPE html> 
<html>
<head>
	<title>רשימת קניות</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 	
	<link rel="stylesheet" href="jq/jquery.mobile-1.4.5.css" />
	<script src="jquery-1.11.2.min.js"></script>
	<script src="jq/jquery.mobile-1.4.5.min.js"></script>
 -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.css" integrity="sha512-/MfjJT6ItPFiEICqai0YOfXdq3BiqZhoeESr6UYERrKzFBOAgrVwHD1NdWR6eyn//EiporXSsOBXeLNjJFd6YQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="jquery-1.11.2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mobile/1.4.5/jquery.mobile.min.js" integrity="sha512-FbnNPigZZCDhMM22ezvan3xN2/E/oBd9GxqtpiBcK1VZuzBAt0V1EmTtteoYuYxWrqwqBA6zb1OTB887QSjAsw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
	

<script>
$(document).ready(function(){

	$("#autocomplete-input").focus(function(){
		$("ul").show();
		$(".amount").hide();
	});

/*
	$("#autocomplete-input").blur(function(){
		$("ul").hide();
		$(".amount").show();
	});
*/

	$("ul li a").click(function(){
		var productid=$(this).attr("rel");
		var productName=$(this).html();

		$("#autocomplete-input").val(productName);
		$("input[name=product_id]").val(productid);
		$("input[name=product_name]").val(productName);
		$("ul").hide();
		$(".amount").slideDown("fast");
	});

	
	$("input[type=submit]").click(function(){

		var productId,productName,amount,comment;


		productId=$("input[name=product_id]").val();
		amount=$("input[name=amount]").val();
		comment=$("input[name=comment]").val();
		productName=$("input[name=product_name]").val();

		//alert(productId+" , "+amount+" , "+comment+" , "+productName);
	  
		var dataString = 'productId='+ productId + '&amount='+ amount+ '&comment='+ comment+ '&productName='+ productName;

	  $.ajax({
      type: "POST",
      url: "add_to_list_autocomplete.php",
      data: dataString,
	  
      //success: null
	 
	 
      success: function() {
		//$("ul").show();
		$("#autocomplete-input").val("").focus();
		$("input[name=amount]").val("");
		$("input[name=comment]").val("");
		//$(".amount").hide();
	  }
	  
     });
	     return false;


	

	});



});
</script>


<style type="text/css">
*{margin:0;padding:0;}

body{background:#2e0800;}

.wrapper{
width: 92%;
margin:0 auto;
}

input.in_text{
text-align:right;
direction:rtl;
}

.amount{
display:none;
}

#autocomplete-input{
text-align:right;
direction:rtl;
}


@media only screen and (min-width: 481px) {.wrapper {width: 400px;}}


/* ui-input-clear ui-btn ui-icon-delete ui-btn-icon-notext ui-corner-all */

</style>


</head>

<body>

<div class="wrapper">


<!-- echo'<div class="unit">'.$cval["packing"].'</div>';
echo'<input type="button" name="comment_button" value="הערה" class="send_amount"/>';
echo'<div style="clear:both;"></div>';
echo'<input type="text" name="comment'.$cval["id"].'" value="'.$itemComment.'" class="comment"/>';
echo'<div style="clear:both;"></div>';
echo'<input type="hidden" name="cat'.$cval["id"].'" value="'.$cval["id"].'"/>';
echo'<input type="hidden" name="name'.$cval["id"].'" value="'.$cval["name"].'"/>';
echo'<input type="hidden" name="packing'.$cval["id"].'" value="'.$cval["packing"].'"/>';
 -->



<form class="ui-filterable" method="post" action="/">
    <input id="autocomplete-input" data-type="search" value="" placeholder="שם פריט" >
	
	<div class="amount">
		<input type="number" name="amount" value="" class="in_text" placeholder="כמות"/>
		<input type="text" name="comment" value="" class="in_text" placeholder="הערה"/>
		<input type="submit" name="submit" value="הכנס" class="send_amount"/>
		<input type="hidden" name="product_id" value=""/>
		<input type="hidden" name="product_name" value=""/>
		<!-- <input type="hidden" name="packing" value=""/> -->
	</div>
</form>
<ul data-role="listview" data-filter="true" data-filter-reveal="true" data-input="#autocomplete-input">


<?php

function get_all_data()
{
	global $con;

	$returned_array = array(); //THIS WILL HOLD THE TWO DIM ARRAY FROM THE DB
	
	$query = "SELECT * FROM catalog";

	mysqli_query($con,"SET NAMES 'utf8'");
	
	$res = mysqli_query($con, $query);
	
	if(!$res)return false;
	
	if(mysqli_num_rows($res)==0)return false;
	
	while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
	{
		 $returned_array[] = $row;
	}

	return $returned_array;

}
 
$items=get_all_data();

$result = array();

foreach ($items as $key=>$value) {

echo '<li><a href="#" class="ui-btn ui-btn-icon-left ui-icon-carat-l" style="text-align:right;" rel="'.$value['id'].'">'.stripslashes($value['name']).'</a></li>';

}
?>

</ul>

</div>
</body>
</html>