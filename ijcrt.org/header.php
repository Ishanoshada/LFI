<style>
.btn-sq-lg:hover{
	box-shadow: .5em .5em .5em grey;
}

.login-button{

	background: linear-gradient(to right, #5bc0de 50%, #5de0de 50%);

	background-size: 200% 100%;

	background-position:left bottom;

	transition:all 2s ease;

}
.login-button:hover{

	box-shadow: .5em .5em .5em #FF5733;

}
.btn-sq-lg:hover{

	box-shadow: .5em .5em .5em #FF5733;

}

.sitetitle {
    font-family: calibri;

    font-size: 32px;
    text-align: center;
    text-transform: uppercase;
    text-shadow: 2px 2px #ececec;
    line-height: 1em;
    
}

.issnstyle {
    font-size: 18px;
    line-height: 1em;
    padding: 0px 0px 10px 0px;
    color: rgba(10,98,94,1.00);
    font-weight: bold;
    text-align: center;
}	

</style>
<script type="text/javascript" language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<style>

.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}

.feed {
   position: fixed;
   right: 0;
   bottom: 180;
   height: 50px;
   width: 100px;
     z-index: 99;
	 font-size: 15px;
	 

   background-color: #ff6600;
   color: #FFF;
}

.feed:hover {
    width: 190px;
} {
   position: fixed;
   right: 0;
   bottom: 17%;
   height: 50px;
   width: 100px;
     z-index: 99;
	 font-size: 15px;
	 

   background-color: #ff6600;
   color: #FFF;
}

.feedback:hover {
    width: 190px;
}

.feedback {
   position: fixed;
   right: 0;
   bottom: 20%;
   height: 50px;
   width: 100px;
     z-index: 99;
	 font-size: 15px;
	 

   background-color: #ff6600;
   color: #FFF;
}

.feedback:hover {
    width: 190px;
}


.titlu {
	font-family: Arial Narrow, Helvetica Nueue, Helvetica, sans-serif;
	
		padding: 0;
	text-indent: 0;
	margin: 0;
	margin-bottom: 10px;
	font-size: 12px !important;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	text-transform: uppercase;
	color: #30708b;
}
.titlu1 {
	font-family: Arial Narrow, Helvetica Nueue, Helvetica, sans-serif;
	line-height: 140%;
	height: 140%;
	padding: 0;
	text-indent: 0;
	margin: 0;
	margin-bottom: 10px;
	font-size: 12px !important;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	text-transform: uppercase;
	color: #30708b;
}	

h3.titlu { border-bottom: 0 !important; }
.itemul {
    /* To correctly align image, regardless of content height: */
    vertical-align: top;
    display: inline-block;
    /* To horizontally center images and caption */
    text-align: center;
    /* The width of the container also implies margin around the images. */
    
    border-left: 1px solid #E9E9E9;
    
}


.itemul2 {
    /* To correctly align image, regardless of content height: */
    vertical-align: top;
    display: inline-block;
    /* To horizontally center images and caption */
    text-align: center;
    /* The width of the container also implies margin around the images. */
    width: 28%;
      border-left: 1px solid #E9E9E9;
      
}

.itemul3 {
    /* To correctly align image, regardless of content height: */
    vertical-align: top;
    display: inline-block;
    /* To horizontally center images and caption */
    text-align: center;
    /* The width of the container also implies margin around the images. */
  
    border-left: 1px solid #E9E9E9;
    
}

</style>

<?php

$rextra=mysqli_query($dbLink,"SELECT * FROM `common` WHERE `srno`=1");

$re=mysqli_fetch_assoc($rextra);

$cvol=$re['vol'];

$cissue=$re['issue'];

$cmonth=$re['pubmonth'];

$curyear=date('Y');



if(isset($_POST['loginsubmit']))

{

$r_id=trim(substr(htmlspecialchars($_POST['r_id'],ENT_QUOTES ),-6));

$a1_email=trim(htmlspecialchars($_POST['a1_email']));

$sql="SELECT * FROM `paper` WHERE `r_id`='$r_id' and `a1_email`='$a1_email'";

$result=mysql_query($sql) or die(mysql_error("Invalid Value"));

$resrow=mysql_fetch_assoc($result);	

$a1_name=$row['a1_name'];

//////  Code to set session ////

$count = mysql_num_rows($result);

if($count == 1)

{

	$_SESSION['r_id'] = $r_id;

	$_SESSION['a1_name'] = $a1_name;

	header("Location:authorhome");

}

else

{

	echo '<script type="text/javascript">alert("Invalid Login Credentials."); </script>';

}

}

?>

<header>

	<title>Journal IJCRT UGC-CARE, UGCCARE( ISSN: 2320-2882 ) | UGC Approved Journal | UGC Journal | UGC CARE Journal | UGC-CARE list, New UGC-CARE Reference List, UGC CARE Journals, International Peer Reviewed Journal and Refereed Journal, 
	ugc approved journal, UGC CARE, UGC CARE list, UGC CARE list of Journal, UGCCARE, care journal list, UGC-CARE list, New UGC-CARE Reference List, New ugc care journal list, Research Journal, Research Journal Publication, Research Paper, Low cost research journal, Free of cost paper publication in Research Journal, High impact factor journal, Journal, Research paper journal, UGC CARE journal, UGC CARE Journals, ugc care list of journal, ugc approved list, ugc approved list of journal,
	Follow ugc approved journal, UGC CARE Journal, ugc approved list of journal, ugc care journal, UGC CARE list, UGC-CARE, care journal, UGC-CARE list, 
	Journal publication, ISSN approved, Research journal, research paper, research paper publication, research journal publication, high impact factor, 
	free publication, index journal, publish paper, publish Research paper, low cost publication, ugc approved journal, UGC CARE, ugc approved list of journal, 
	ugc care journal, UGC CARE list, UGCCARE, care journal, UGC-CARE list, New UGC-CARE Reference List, UGC CARE Journals, ugc care list of journal, ugc care list 2020, 
	ugc care approved journal, ugc care list 2020, new ugc approved journal in 2020, ugc care list 2021, ugc approved journal in 2021, Scopus, web of Science.
	</title>

</header>            

<body>

	<div id="wrapper">

		<?php require "niks/includes/menu.php"?>
<i class="fa fa-bullhorn"> </i> <a href="http://ijcrt.org/How to start new journal & journal supporting software.php" target="_blank" class="btn btn-outline-success" type="button" role="button">How start New Journal & software</a> 
<a href="http://ijcrt.org/bookpub.php" target="_blank" class="btn btn-outline-success" type="button" role="button">Book & Thesis Publications</a> 
<button class="btn btn-outline-success" type="button">IJCRT is Peer Review </button>
<button class="btn btn-outline-success" type="button">Refereed </button>
<button class="btn btn-outline-success" type="button">Open access </button>
<button class="btn btn-outline-success" type="button">Monthly, Multidisciplinary, Multilanguage </button>
<button class="btn btn-outline-success" type="button">Online, Print Journal</button>
        <div id="page-wrapper" style="padding-bottom:0px">

			<div class="row">

			<div class="page-wrapper">

				<div class="container">

					<div class="row">

					

					<div class="col-md-2">

					<a href="http://www.ijcrt.org">

						<img src="https://www.ijcrt.org/Content/Images/new_ijcrt/smalled-1.png" alt="IJCRT Research Journal" width="200" height="180" />

					</a>

					</div>

					<div class="col-md-8 text-center">

					<h3 class="sitetitle"> INTERNATIONAL JOURNAL OF CREATIVE RESEARCH THOUGHTS - IJCRT (IJCRT.ORG) </h3>

					<h4 style="color:#FF5733;">  <span class="glyphicon glyphicon-fire  " style="font-size:22px;"></span> International Peer Reviewed & Refereed Journals, Open Access Journal  <span class="glyphicon glyphicon-fire  " style="font-size:22px;"></span></h4>
                      
					

					<p class= "issnstyle"><span class="glyphicon glyphicon-book  " style="font-size:22px;"></span>  ISSN Approved Journal No: 2320-2882 | <span class="glyphicon glyphicon-fire  " style="font-size:20px;"></span> Impact factor: 7.97 | ESTD Year: 2013</p>
					<h4 style="color:#FF5733;">  <span class="glyphicon glyphicon-fire  " style="font-size:22px;"></span><a href="https://ijcrt.org/submitonline.php" > Call For Paper - Volume <?php echo $cvol." | Issue ".$cissue." | Month- ".$cmonth;?> </b></a><span class="glyphicon glyphicon-fire  " style="font-size:22px;"></span></h4>
					<a href="" data-toggle="modal" data-target="#myModal11">	<p class= "issnstyle"><span class="glyphicon glyphicon-bookmark  " style="font-size:20px;"></span> Scholarly open access journals, Peer-reviewed, and Refereed Journals, Impact factor 7.97 (Calculate by google scholar and Semantic Scholar | AI-Powered Research Tool) , Multidisciplinary, Monthly, Indexing in all major database & Metadata, Citation Generator, Digital Object Identifier(DOI)
	</a> </p>

					</div>

					<div class="col-md-2">

						<style>

						a>.well-primary:hover{

							background-color: rgba(51, 122, 183, 0.67);

						}

						a>.well-info:hover{

							background-color: rgba(91, 192, 222, 0.64);

						}

						

						</style>

						<a href="http://ijcrt.org/submitonline.php" target="_blank" style="text-decoration:none">

						<div class="panel panel-primary btn-sq-lg">

							<div class="panel-heading">

								<div class="row">

									<div class="col-xs-3">


										<i class="fa fa-bar-chart-o fa-2x"></i>

									</div>

									<div class="col-xs-9 text-right">

										<div> Submit Your Paper </div>

										</div>

								</div>

							</div>

						</div

						

						</a>

						<a href="http://www.ijcrt.org/Authorhome/alogin.php" target="new" style="text-decoration:none">

						<div class="panel panel-primary btn-sq-lg">

							<div class="panel-heading">

								<div class="row">

									<div class="col-xs-3">

										<i class="fa fa-sign-in fa-2x"></i>

									</div>

									<div class="col-xs-9 text-right">

										<div>Login to Author Home</div>

									</div>

								</div>

							</div>

						</div>

						</a>
						
							<a href="http://ijcrt.org/Communication%20Guidelines.pdf" target="new" style="text-decoration:none">

						<div class="panel panel-primary btn-sq-lg">

							<div class="panel-heading">

								<div class="row">

									<div class="col-xs-3">

										<i class="fa fa-whatsapp fa-2x"></i>

									</div>

									<div class="col-xs-9 text-right">

										<div>Communication Guidelines</div>

									</div>

								</div>

							</div>

						</div>

						</a>

					</div>
					

					</div>

				</div>

			

			</div>

			<div class="row">

			<div class="col-md-12 col-lg-12">

			<?php include('navbar.php'); ?>

			</div>

			</div>

<a href="Communication Guidelines.pdf" target="_blank"> <h3> <div class="feedback">Contact Us </br> Click Here </div></h3> </a>
<a href="https://wa.me/917990172303/?text=Hi IJCRT" target="_blank"> <h3> <div class="feed">WhatsApp Contact </br> Click Here </div></h3> </a>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://wa.me/917990172303" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>