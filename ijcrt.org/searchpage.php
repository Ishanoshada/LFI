<?php
$pagetitle="Archive | Past Issues";
?>
<?php include("headstyle.php"); ?>
<?php include("header.php"); ?>
<div class="row">

<div class="col-xs-12 col-md-8 col-md-push-2">
<!-- MainContent -->
<div class="panel panel-default">
		<div class="panel-body">
<!-- Main Page- Center IJEDRXplore  search option--><div class="row" >
	<div class="col-md-12">	<div class="panel panel-primary">
 	<!-- /.panel-heading -->	
	<div class="panel-heading">	<i class="fa fa-cogs fa-1x"> </i> &nbsp; 	
	IJCRT Search Xplore - Search by  Paper Name , Author Name, and Title	</div>
	<div class="panel-body">
	<form  action="" method="get">
	<div class="input-group custom-search-form">	
	<input type="text" class="form-control" id="searchid" name="searchvalue" placeholder="Search by  Paper id, Published paper id, Paper Name , Author Name, and Paper Title">	<span class="input-group-btn">		<button class="btn btn-default" type="submit" style="height: 35px;">	Click here to search			<i class="fa fa-search"></i>		</button>	</span>	</div>	<div class="">    <div id="result" style="width: initial;"></div>	</div>	</div></div></div>	</div><!-- End Main Page- Center IJEDRXplore  search option-->
	
	</div>
	</form>
	</div>

<?php 
if(isset($_GET['searchvalue']))
{
	$q=$_GET["searchvalue"];
if(isset($_GET['page']) && $_GET['page']>0){
$page=(int)$_GET['page'];}
else{
$page=1;}
$setLimit=10;
$pageLimit = ($page * $setLimit) - $setLimit;

$sql ="SELECT `count`,`r_page`,`r_vol`,`r_issue`,`r_pubmonth`,`p_id`,`r_id`,`a1_name`,`a2_name`,`a3_name`,`a4_name`,`a5_name`,`abstract`,`keywords`,`r_title` from paper where `p_id` LIKE '%IJ%' AND (`r_title` like '%$q%' or `p_id` like '%$q%' or `r_id` like '%$q%' or `a1_name` like '%$q%' or `a2_name` like '%$q%' or `a3_name` like '%$q%' or `abstract` like '%$q%' ) order by `p_id` LIMIT $pageLimit, $setLimit";
$result=mysql_query($sql); 
$query1="SELECT COUNT(*) from paper where `p_id` LIKE '%IJ%' AND (`r_title` like '%$q%' or `p_id` like '%$q%' or `r_id` like '%$q%' or `a1_name` like '%$q%' or `a2_name` like '%$q%' or `a3_name` like '%$q%' or `abstract` like '%$q%' ) order by `p_id`";
$sql_res1=mysql_query($query1);
$for_total=mysql_fetch_array($sql_res1);
$total1 = $for_total[0];
// Check if it was successfull
	?>
	   <div class=pagemainheading>
                <h1>  Your Search Result : </h1> </br>
				 					
					<div class="panel panel-primary">
 	<!-- /.panel-heading -->	
	<div class="panel-heading">
	Downlaod After Publication </br> 1) Table of content index  <button id='myBtn' class="btn btn-warning" onclick='exportIndex("<?php echo $vol;?>" , "<?php echo $issue; ?>")'>(1)CLick Here to download Table of content / index (Wait for some time for index generation)</button></br>
			2) Front Page &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="http://ijcrt.org/ijcrt%20front%20page%20final.pdf" target="_blank" class="btn btn-warning" role="button">2) Front Page</a></br>
			3) Back Page&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="http://ijcrt.org/ijcrt%20backpagefinal.pdf" target="_blank" class="btn btn-warning" role="button">3) Back Page</a></br>
			4)Editor Board Member <a href="http://ijcrt.org/editor board member.pdf" target="_blank" class="btn btn-warning" role="button">4)Editor Board Member</a></br>
                   
            </div>
			<table style="width:100%">
  <tbody><tr>
    <th><a href="ijcrt front page final.pdf" target="new"><img class="img-responsive" src="l1.PNG" alt="Chania" width="120" height="80"> </th>
    <th><a href="ijcrt backpagefinal.pdf" target="new"><img class="img-responsive" src="f1.PNG" alt="Chania" width="120" height="80"> </th>
  </tr>
  <tr>
    <td><a href="ijcrt front page final.pdf" target="new">IJCRT Journal front page</a></td>
    <td><a href="ijcrt backpagefinal.pdf" target="new">IJCRT Journal Back Page</a></td>
  </tr>
</tbody></table>
		  </div>
  
			 			 
			   </div>
	<?php
if($result) {
    // Make sure there are some files in there
	$row1=mysql_fetch_array($result);
	$total = $row1[0];
    if($total == 0) {
        echo '<p> <b>We are still processing/Uploading Papers, Kindly Visit Archives for Past Issues.</b></p>';
    }
    else {
     
$d=0;
$i=0;

while($row=mysql_fetch_array($result)){

?>			   
	<?php $d=$d+1; 
		echo "
		<style>
		 .panel-heading:hover {
background-color:  #000000;
font-color:  #ffffff;
opacity: 1;
}
 .panel:hover {
background-color: #66d9ff;
opacity: 1;

} </style>
				<div class='row'>
                <div class='col-lg-12'>
				
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
						<h4><p><b> <span class='glyphicon glyphicon-file'></span> &nbsp; Paper Title:</b> ".$row['r_title']."</p>
							<p><b><i class='fa fa-users' aria-hidden='true'></i>&nbsp; Author Name(s):</b> ";
								echo $row['a1_name'];
								if (!empty($row['a2_name']))
								{
								echo ", ".$row['a2_name'];
								if (!empty($row['a3_name']))
								{
								echo ", ".$row['a3_name'];
								if (!empty($row['a4_name']))
								{
								echo ", ".$row['a4_name'];
								if (!empty($row['a5_name']))
								{
								echo ", ".$row['a5_name'];
								}
								}
								}
								}
								echo "</p>
						
						
						<p><b>  <span class='glyphicon glyphicon-bullhorn'></span> &nbsp; Published Paper ID: </b> - {$row['p_id']} </p>
								<p> <span class='glyphicon glyphicon-bullhorn'></span> &nbsp; <b>Register Paper ID </b> - {$row['r_id']}</p> 
								<p><b><span class='glyphicon glyphicon-bookmark'></span>&nbsp;  Publisher Journal Name:</b> IJPUBLICATION, IJCRT </p>
						
						<p><b><span class='glyphicon glyphicon-barcode'></span> &nbsp; DOI Member ID:</b> 10.6084/m9.doi.one.{$row['p_id']} and DOI : {$row['doi']}</br>
					<p><b><span class='glyphicon glyphicon-barcode'></span> &nbsp; Author Country : {$row['r_category']} , {$row['ad_pin']} , {$row['ad_city']} ,  {$row['ad_pin']} , | Research Area: {$row['r_area']}</br></br>
						<a style='color:#ffffff;' href='http://ijcrt.org/viewfull.php?&p_id={$row['p_id']}' '> <span class='glyphicon glyphicon-bullhorn'></span> Published Paper URL: http://ijcrt.org/viewfull.php?&p_id={$row['p_id']} </a></br>
 <a style='color:#ffffff;' href='http://www.ijcrt.org/papers/{$row['p_id']}.pdf' '> <span class='glyphicon glyphicon-bullhorn'></span> Published Paper PDF: download.php?file={$row['p_id']} </a></br>
			<a style='color:#ffffff;' href='http://www.ijcrt.org/papers/{$row['p_id']}.pdf' '> <span class='glyphicon glyphicon-bullhorn'></span> Published Paper PDF: http://www.ijcrt.org/papers/{$row['p_id']}.pdf </a>	
						
						
						
						
						<a href='viewfull.php?&p_id={$row['p_id']}'>
						<button class='btn btn-primary pull-right'> <span class='glyphicon glyphicon-fullscreen'></span> &nbsp; Click here to More.. / Full Text</button>
						</a>
						
						</b>
						
						</p></h4>
						</div>
                        <!-- /.panel-heading -->
                        <div class='panel-body'>
						<ul class='nav nav-tabs'>
							<li class='active'><a href='#pb{$i}' data-toggle='tab'>  <span class='glyphicon glyphicon-folder-open'></span>  &nbsp; Publication Details </a>
							</li>
							<li><a href='#ab{$i}' data-toggle='tab'> <span class='glyphicon glyphicon-tag'></span> &nbsp; Abstract</a>
							</li>
							<li><a href='#kw{$i}' data-toggle='tab'><i class='fa fa-key' aria-hidden='true'></i>&nbsp; Keywords</a>
							</li>
						</ul>
						<div class='tab-content'>
							<div class='tab-pane fade in active' id='pb{$i}'>
								<h4> <span class='glyphicon glyphicon-bookmark'></span>&nbsp; Your Paper Publication Details: </h4>
								<div class='row'>
								<div class='col-md-6'>
								
								<p><b><span class='glyphicon glyphicon-file'></span> &nbsp; Title:</b> ".strtoupper($row['r_title'])."</p>
							
								<p><b><span class='glyphicon glyphicon-bookmark'></span>&nbsp;DOI (Digital Object Identifier) :</b> {$row['doi']} </p>
								<p><b> <span class='glyphicon glyphicon-bullhorn'></span> &nbsp;Pubished in Volume:</b> {$row['r_vol']} &nbsp;| Issue: {$row['r_issue']} &nbsp;| Year:</b> {$row['r_pubmonth']} </p></b>
								<p><b><span class='glyphicon glyphicon-bookmark'></span>&nbsp;Publisher Name  :</b> IJCRT | www.ijcrt.org | ISSN : 2320-2882 </p>
								<p><b> <span class='glyphicon glyphicon-bullhorn'></span> &nbsp;Subject Area:</b> {$row['r_area']}</p>
								<p><b> <span class='glyphicon glyphicon-bullhorn'></span> &nbsp;Author type:</b> {$row['r_category']}</p>
								</div>
								<div class='col-md-6'>
								<p><b> <span class='glyphicon glyphicon-bullhorn'></span> &nbsp;Pubished in Volume:</b> {$row['r_vol']} </p>
								<p><b> <span class='glyphicon glyphicon-bullhorn'></span> &nbsp;Issue:</b> {$row['r_issue']}</p>
								<p><b> <span class='glyphicon glyphicon-bullhorn'></span> &nbsp;Pages:</b> {$row['r_page']}</p>
								<p><b> <span class='glyphicon glyphicon-bullhorn'></span> &nbsp;Year:</b> {$row['r_pubmonth']}</p>
								
								<p><b> <span class='glyphicon glyphicon-bullhorn'></span> &nbsp;Downloads:</b> {$row['count']}</p></b>
								<p><b><span class='glyphicon glyphicon-bookmark'></span>&nbsp; E-ISSN Number:</b> 2320-2882 </p>
								</div>
								</div>
							</div>
							<div class='tab-pane fade' id='ab{$i}'>
								<h4><span class='glyphicon glyphicon-tag'></span> &nbsp;Abstract</h4>
								<p>".$row['abstract']."<p> </br>
								<p><b>Licence: creative commons attribution 4.0</b>
								</br>
								<h4><span class='glyphicon glyphicon-bullhorn'></span> &nbsp; License</h4>		
							<p> <a href='https://creativecommons.org/licenses/by/4.0/' target='_blank'>  Creative Commons Attribution 4.0 </a> and <a href='http://opendefinition.org/' target='_blank'>  The Open Definition </a></p>		
							<div class='col-md-4'>		
							<a href='https://creativecommons.org/licenses/by/4.0/'> <img src='https://mirrors.creativecommons.org/presskit/logos/cc.logo.large.png' class='img-responsive'>	</a></div>
							<div class='col-md-4'>	
							<a href='http://opendefinition.org/'> <img src='http://doiref.org/publisher/oc_80x23_black.png' class='img-responsive'>	</a></div>
								</p>
							</div>
							<div class='tab-pane fade' id='kw{$i}'>
								<h4> <i class='fa fa-key' aria-hidden='true'></i>&nbsp;Keywords</h4>
								<p>".$row['keywords']."
								</br>
								<h4><span class='glyphicon glyphicon-bullhorn'></span> &nbsp; License</h4>		
							<p> <a href='https://creativecommons.org/licenses/by/4.0/' target='_blank'>  Creative Commons Attribution 4.0 </a> and <a href='http://opendefinition.org/' target='_blank'>  The Open Definition </a></p>		
							<div class='col-md-4'>		
							<a href='https://creativecommons.org/licenses/by/4.0/'> <img src='https://mirrors.creativecommons.org/presskit/logos/cc.logo.large.png' class='img-responsive'>	</a></div>
							<div class='col-md-4'>	
							<a href='http://opendefinition.org/'> <img src='http://doiref.org/publisher/oc_80x23_black.png' class='img-responsive'>	</a></div>	
								</p>
							</div>
						</div>
						</div>
                        <!-- /.panel-body -->
						<div class='panel-footer'>
							<button type='button' class='cite btn btn-primary' data-toggle='modal' data-target='#myModal{$row['p_id']}'> <span class='glyphicon glyphicon-fullscreen'></span> &nbsp;CITE</button>
							<a href='viewfull.php?&p_id={$row['p_id']}'>
							<button class='btn btn-primary'><span class='glyphicon glyphicon-fullscreen'></span> &nbsp;Click here to More.. / FULL TEXT</button>
							</a>
                        </div>
						</div>
                    <!-- /.panel -->
					</div>
				</div>
			";
			$i++;
	?>
	<div id="myModal<?php echo $row['p_id']?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    
	  <div class="modal-dialog modal-md">
		<!-- Start: Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">CITE PAPER</h4>
		</div>
		<div id="validation-error"></div>
			<div class="cl"></div>
			<div class="modal-body" id="target">
			<?php
			
			echo $row['a1_name'];
			if (!empty($row['a2_name']))
			{
				echo ", ".$row['a2_name'];
			if (!empty($row['a3_name']))
			{
				echo ", ".$row['a3_name'];
			if (!empty($row['a4_name']))
			{
				echo ", ".$row['a4_name'];
			if (!empty($row['a5_name']))
			{
				echo ", ".$row['a5_name'];
			}
			}
			}
			}	 
			echo ". <b>&quot;".htmlspecialchars($row['r_title'])."&quot;</b>, International Journal of Creative Research Thoughts (IJCRT), ISSN:2320-2882, Vol.".$row['r_vol'].", Issue ".$row['r_issue'].", pp.".$row['r_page'].", ".$row['r_pubmonth'].", URL :"; 
			echo "<a href=viewfull.php?&p_id={$row['p_id']}> http://www.ijcrt.org/{$row['p_id']}</a></div>";
			?>
			
			
		  <div class="modal-footer">
		  <button type="button" class="btn btn-default" data-clipboard-target="#target">Copy Text</button>
		  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
		</div>
	  </div>
	  
	  

<?php 		
}
	include("pagination_for_searchpage.php");
	echo "<div class='row'>".displayPaginationBelow($total1,$q,$setLimit,$page)."</div>";
}
// Free the result
$result->free();

}
}
else
{
	echo "";
}

?>
<script type="text/javascript">
    function exportIndex(vol, issue) {
        var data = {
            "action": "export_index",
            "vol": vol,
            "issue": issue
        };
        $.ajax({
            url: 'index_controller.php',
            type: 'GET',
            data: data,
            // dataType: 'application/json',
            success: function(response) {
                // var jsonData = JSON.stringify(response);
                window.open(response.filepath, "_blank"); 

                if(response.success == 1){
                    swal("Success", response.message, "success");
                }else{
                    swal("Oops!", response.message, "error");
                }
            },
            error: function(e) {
                swal("Oops!", e.message, "error");
            }
        });
    }
</script>
<script src="niks/js/clipboard.js"></script>

	<script>
	var clipboard = new Clipboard('.btn', {
    container: document.getElementById('#modal')
	});
</script>

</br></br>
	
		 
</div>


</div>
<div class="row">
<?php include("footer.php"); ?>
</div>
