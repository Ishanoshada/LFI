<?php





/******************************************/

/*  מביא מהמאגר את שמות הקטגוריות בלבד    */

/******************************************/

function get_all_data()

{

	global $con;
	$returned_array = array(); //THIS WILL HOLD THE TWO DIM ARRAY FROM THE DB
	$query = "SELECT DISTINCT cat FROM catalog";
	mysqli_query($con, "SET NAMES 'utf8'");
	$result = mysqli_query($con, $query);
	if(!$result)return false;
	if(mysqli_num_rows($result)==0)	return false;
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		 $returned_array[] = $row;
	}
	return $returned_array;
}






/******************************************/

/*  מביא מהמאגר פריטים של קטגוריה מסוימת  */

/******************************************/

function get_cat_data($cat)

{



	global $con;

	

	$returned_array = array(); //THIS WILL HOLD THE TWO DIM ARRAY FROM THE DB

	

	$query = "SELECT * FROM catalog WHERE cat='".$cat."'";



	mysqli_query($con,"SET NAMES 'utf8'");

	

	$result = mysqli_query($con,$query);

	

	if(!$result)

	return false;

	

	if(mysqli_num_rows($result)==0)

	return false;

	

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))

	{

		 $returned_array[] = $row;

	}



	return $returned_array;



}





/***************************************/

/*  מביא מהמאגר את מצב הרשימה האחרונה  */

/***************************************/

function get_last_list_status(){
	global $con;
	$query = "SELECT * FROM listnum ORDER BY  list_id DESC LIMIT 1";
	mysqli_query($con, "SET NAMES 'utf8'");
	$result = mysqli_query($con,$query);
	if(!$result)return false;
	if(mysqli_num_rows($result)==0)	return false;
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	return $row ;
}





/*******************************/

/*  בודק אם המוצר קיים בהזמנה  */

/*******************************/

function checkIfOrdered($shopListNumToCheck,$catNum)

{

	global $con;



	$returned_array = array(); //THIS WILL HOLD THE TWO DIM ARRAY FROM THE DB

	

	$query = "SELECT * FROM shoplist WHERE shopListNum='".$shopListNumToCheck."' AND catId='".$catNum."'";



	mysqli_query($con, "SET NAMES 'utf8'");

	

	$result = mysqli_query($con, $query);

	

	if(!$result)

	return false;

	

	if(mysqli_num_rows($result)!=1)

	return false;

	

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))

	{

		 $returned_array[] = $row;

	}



	return true;



}





/**************************************/

/*  מביא מהמאגר את פרטי המוצר שהוזמן  */

/**************************************/



function get_orderedItem_details($shopListNumToCheck,$catNum)

{

	global $con;



	$query = "SELECT * FROM shoplist WHERE shopListNum='".$shopListNumToCheck."' AND catId='".$catNum."'";

		

	mysqli_query($con, "SET NAMES 'utf8'");

	

	$result = mysqli_query($con, $query);

	

	if(!$result)

	return false;

	

	if(mysqli_num_rows($result)==0)

	return false;

	

	

	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	return $row ;

}





/******************************************/

/*   מביא מהמאגר מספרי רשימות ותאריכים    */

/******************************************/

function get_all_listnums()

{

	global $con;



	$returned_array = array(); //THIS WILL HOLD THE TWO DIM ARRAY FROM THE DB

	$query = "SELECT * FROM listnum WHERE status=0 ORDER BY list_end DESC";



	mysqli_query($con, "SET NAMES 'utf8'");

	

	$result = mysqli_query($con, $query);

	

	if(!$result)

	return false;

	

	if(mysqli_num_rows($result)==0)

	return false;

	

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))

	{

		 $returned_array[] = $row;

	}



	return $returned_array;

}



/**************************************/

/*      בודק אם קטגוריה ריקה ממוצרים  */

/**************************************/

function isEmptyCategory($shopListNum,$categoryToCheck)

{

	$catDetails=get_cat_data($categoryToCheck);



	foreach($catDetails as $ckey=>$cval)

	{

	if(checkIfOrdered($shopListNum,$cval["id"]))

		{

		  $orderDetails=get_orderedItem_details($shopListNum,$cval["id"]);

			  if ($orderDetails["amount"]!=0 && $orderDetails["amount"]!="")return false;

		}

	}

	return true;

}









?>