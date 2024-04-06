<?php include("headstyle.php"); ?>
<?php include("header.php"); ?>
<div class="row">
<div class="col-md-8 col-md-push-2">
<div class="panel">
<div class="col-md-12 col-lg-12">

<div class="panel panel-default" style="border-bottom:1px solid rgba(212,213,220,1.00)">
	<div class="panel-heading">
    	Archive (All Published Issues)
     </div>
     <div class="panel-body" style="text-align:justify; line-height:20px">
<!-- Main Content -->
<?php 
$sqlretrive = "SELECT * FROM `publishedissue` ORDER BY `vol` DESC";
$resultretrive = mysqli_query($dbLink, $sqlretrive);
if (mysqli_num_rows($resultretrive) > 0)
{
    // output data of each row
    ?>
	<div class="journaldetails" style="text-align:justify">
	<?php
	while($rowretrive = mysqli_fetch_assoc($resultretrive)) 
	{
		echo  "<span class='glyphicon glyphicon-file'></span> <a href=archive.php?vol=" . $rowretrive["vol"]. "&issue=" . $rowretrive["issue"]. "&pubmonth=" . $rowretrive["pubmonth"]. ">Volume- <b>" . $rowretrive["vol"]. "</b>, Issue- <b>" . $rowretrive["issue"]. "</b>, Publication Month- <b>" . $rowretrive["pubmonth"]. "</b></a></br>";
   echo "<hr>";
   }
	?>
	</div>
	<span class='glyphicon glyphicon-file'></span><a href="https://ijcrt.org/thesispub.php?Paper=IJCRT21X"> Published Thesis </a>
	<?php
}
else
{
    echo "0 results";
}


?>     	
</div>
</div>
</div>
</div>
</div>
<div class="col-md-2 col-xs-12 col-md-pull-8">
<?php include("left.php"); ?>
</div>
<div class="col-xs-12 col-md-2">
<?php include("right.php"); ?>
</div>
</div>
<div class="row">
<div class="col-md-12 col-lg-12">
<?php include("footer.php"); ?>
</div>
</div>
</div>