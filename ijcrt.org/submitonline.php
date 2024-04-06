<?php include("headstyle.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IJCRT ISSN approved, low cost journal,
	Research journal, research paper, 
	research paper publication, research journal publication,
	ugc approved journal, UGC CARE, ugc approved list of journal, ugc care journal, UGC CARE list, UGCCARE, care journal, UGC-CARE list, New UGC-CARE Reference List, UGC CARE Journals, ugc care list of journal, ugc care list 2020, ugc care approved journal, ugc care list 2020, new ugc approved journal in 2020, ugc care list 2021, ugc approved journal in 2021, Scopus, web of Science 

Journal IJCRT( ISSN: 2320-2882 ) International Peer Reviewed Journal and Refereed Journal, Follow ugc approved journal, UGC CARE Journal, ugc approved list of journal, ugc care journal, UGC CARE list, UGC-CARE, care journal, UGC-CARE list, Journal publication, ISSN approved, Research journal, research paper, research paper publication, research journal publication, high impact factor, free publication, index journal, publish paper, publish Research paper, low cost publication, ugc approved journal, UGC CARE, ugc approved list of journal, ugc care journal, UGC CARE list, UGCCARE, care journal, UGC-CARE list, New UGC-CARE Reference List, UGC CARE Journals, ugc care list of journal, ugc care list 2020, ugc care approved journal, ugc care list 2020, new ugc approved journal in 2020, ugc care list 2021, ugc approved journal in 2021, Scopus, web of Science.
</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
function validateform()
	{
		var num1=document.getElementById("captchaval1").innerHTML;
		var num2=document.getElementById("captchaval2").innerHTML;
		var sum1=Number(num1) +  Number (num2);
		var sum=document.getElementById("captcha").value;
		if(sum1!=sum){
		alert("Incorrect Captcha!");
		return false;
		} 
		else return true;
	}
</script>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<!-- Global site tag (gtag.js) - Google Ads: AW-352619340 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-352619340"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-352619340');
</script>

</head>

<body>

    <!-- Navigation -->
    <?php include("header.php"); ?>
<div class="row">
<div class="col-md-8 col-md-push-2">
<div class="panel panel-body">
<div class="col-md-12 col-lg-12">

    <!-- Page Content -->
    <div class="container">

        
        
        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
        
            <!-- Content Column -->

            <div class="col-md-9 sidebar-style">
                <!-- Page Heading/Breadcrumbs -->
                <div class="row">
                    <div class="col-lg-11">
                        <ol class="breadcrumb">
                            <li><a href="http://ijcrt.org/">Home</a>
                            </li>
                            <li class="active">Submit paper online </br> Scholarly open access journals, Peer-reviewed, and Refereed Journals, Impact factor 7.97 (Calculate by google scholar and Semantic Scholar | AI-Powered Research Tool) , Multidisciplinary, Monthly, Indexing in all major database & Metadata, Citation Generator, Digital Object Identifier(DOI)</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
             

<?php 
$allowedExts = array("doc","docx","pdf","DOC","DOCX","PDF","jpg","png","jpeg","JPG","PNG","JPEG");
	$info				= pathinfo($_FILES['fileupload']['name']);
	$temp = explode(".", $_FILES["fileupload"]["name"]);
	$ext				= $info['extension'];
	$extension = end($temp);
	
	if (!in_array($extension, $allowedExts) && isset($_POST['submit']) )
{
	echo '
	<div class="row">
                                <div class="col-lg-8">
	<div class="panel panel-primary">
	
  <div class="panel-heading">!!Important Please Submit Microsoft word file Only !! </div>
  <div class="panel-body">
	<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal"> <i class="fa fa-cogs fa-1x"> </i> !! Important Please Upload Microsoft Word or Pdf file Only. !!! </button><!-- Modal -->
	</div></div>	</div></div>';
}
elseif(isset($_POST['submit']))
{	
	/*
	|------------------------------------------------------------------------
	| Retrive all the form values
	|------------------------------------------------------------------------
	*/
	//Paper Details
	$a_ip				= $_SERVER['REMOTE_ADDR'];  
	
	$a_title11 = iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $_POST['p_title']);
	$a_title = htmlspecialchars($a_title11,ENT_QUOTES ); 
    
	$a_abstract1		= iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $_POST['p_abstract']);
    $a_abstract			= htmlspecialchars($a_abstract1,ENT_QUOTES ); 
	$a_keywords1		= iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $_POST['p_keywords']);
    $a_keywords			= htmlspecialchars($a_keywords1,ENT_QUOTES );
    $a_area				= htmlspecialchars($_POST['r_area'],ENT_QUOTES ); 
	
    //Author Details
	$a_category			= htmlspecialchars($_POST['p_author_category'],ENT_QUOTES );
	$p_total_author		= htmlspecialchars($_POST['p_total_author'],ENT_QUOTES );
	
    //1st Author Details
    $a_a1name			= htmlspecialchars($_POST['p_author1name'],ENT_QUOTES ); 
    $a_a1name			= ucfirst($a_a1name); 
    $a_a1desg			= htmlspecialchars($_POST['p_author1designation'],ENT_QUOTES ); 
    $a_a1inst			= htmlspecialchars($_POST['p_author1university'],ENT_QUOTES );
    $a_a1email			= htmlspecialchars($_POST['p_author1email'],ENT_QUOTES ); 
    $a_a1mob			= htmlspecialchars($_POST['p_author1contact'],ENT_QUOTES ); 
	//2nd Author Details
	$a_a2name			= htmlspecialchars($_POST['p_author2name'],ENT_QUOTES ); 
	$a_a2name			= ucfirst($a_a2name); 
    $a_a2desg			= htmlspecialchars($_POST['p_author2designation'],ENT_QUOTES ); 
    $a_a2inst			= htmlspecialchars($_POST['p_author2university'],ENT_QUOTES );
    $a_a2email			= htmlspecialchars($_POST['p_author2email'],ENT_QUOTES ); 
    $a_a2mob			= htmlspecialchars($_POST['p_author2contact'],ENT_QUOTES ); 
	//3rd Author Details
	$a_a3name			= htmlspecialchars($_POST['p_author3name'],ENT_QUOTES ); 
	$a_a3name			= ucfirst($a_a3name); 
    $a_a3desg			= htmlspecialchars($_POST['p_author3designation'],ENT_QUOTES ); 
    $a_a3inst			= htmlspecialchars($_POST['p_author3university'],ENT_QUOTES );
    $a_a3email			= htmlspecialchars($_POST['p_author3email'],ENT_QUOTES ); 
    $a_a3mob			= htmlspecialchars($_POST['p_author3contact'],ENT_QUOTES ); 
	//4th Author Details
	$a_a4name			= htmlspecialchars($_POST['p_author4name'],ENT_QUOTES ); 
	$a_a4name			= ucfirst($a_a4name); 
    $a_a4desg			= htmlspecialchars($_POST['p_author4designation'],ENT_QUOTES ); 
    $a_a4inst			= htmlspecialchars($_POST['p_author4university'],ENT_QUOTES );
    $a_a4email			= htmlspecialchars($_POST['p_author4email'],ENT_QUOTES ); 
    $a_a4mob			= htmlspecialchars($_POST['p_author4contact'],ENT_QUOTES ); 
	//5th Author Details
	$a_a5name			= htmlspecialchars($_POST['p_author5name'],ENT_QUOTES ); 
	$a_a5name			= ucfirst($a_a5name); 
    $a_a5desg			= htmlspecialchars($_POST['p_author5designation'],ENT_QUOTES ); 
    $a_a5inst			= htmlspecialchars($_POST['p_author5university'],ENT_QUOTES );
    $a_a5email			= htmlspecialchars($_POST['p_author5email'],ENT_QUOTES ); 
    $a_a5mob			= htmlspecialchars($_POST['p_author5contact'],ENT_QUOTES ); 
	
    //Address Details 
    $a_adline1			= htmlspecialchars($_POST['p_addline1'],ENT_QUOTES ); 
    $a_adline2			= htmlspecialchars($_POST['p_addline2'],ENT_QUOTES ); 
    $a_city				= htmlspecialchars($_POST['p_city'],ENT_QUOTES );
    $a_state			= htmlspecialchars($_POST['p_state'],ENT_QUOTES ); 
    $a_country			= htmlspecialchars($_POST['p_country'],ENT_QUOTES ); 
    $a_pin				= htmlspecialchars($_POST['p_pincode'],ENT_QUOTES );
	$journal_type	    =  "IJCRT";
	
	//referral Code
	$refid				= htmlspecialchars($_POST['p_referral'],ENT_QUOTES );
	$NOTE				= htmlspecialchars($_POST['NOTE'],ENT_QUOTES );
	 $a_mobilecountry				= htmlspecialchars($_POST['r_mccode'],ENT_QUOTES ); 
	
	//Paper submission date
	$a_regdate			= date("Y-m-d");
	
	/*
	|------------------------------------------------------------------------
	| Create Database Connection and perform queries
	|------------------------------------------------------------------------
	*/

	// Data insertion into database
	$query = "INSERT INTO `paper`
			(`r_area`,`r_title`,`keywords`,
			`r_authors`,`abstract`,
			`a1_name`,`a1_desg`,`a1_inst`,`a1_email`,`a1_mobile`,
			`a2_name`,`a2_desg`,`a2_inst`,`a2_email`,`a2_mobile`,
			`a3_name`,`a3_desg`,`a3_inst`,`a3_email`,`a3_mobile`,
			`a4_name`,`a4_desg`,`a4_inst`,`a4_email`,`a4_mobile`,
			`a5_name`,`a5_desg`,`a5_inst`,`a5_email`,`a5_mobile`,
			`regdate`,`journal_type`,
			`ad_line1`,`ad_line2`,`ad_city`,`ad_state`,
			`ad_country`,`ad_pin`,`r_category`,`refid`,`r_mccode`,`NOTE`,`ip`)
    VALUES ('$a_area', '$a_title', '$a_keywords',
			'$p_total_author','$a_abstract', 
			'$a_a1name', '$a_a1desg', '$a_a1inst', '$a_a1email', '$a_a1mob', 
			'$a_a2name', '$a_a2desg', '$a_a2inst', '$a_a2email', '$a_a2mob', 
			'$a_a3name', '$a_a3desg', '$a_a3inst', '$a_a3email', '$a_a3mob', 
			'$a_a4name', '$a_a4desg', '$a_a4inst', '$a_a4email', '$a_a4mob', 
			'$a_a5name', '$a_a5desg', '$a_a5inst', '$a_a5email', '$a_a5mob', 
			now(), '$journal_type',
			'$a_adline1', '$a_adline2', '$a_city', 
			'$a_state','$a_country','$a_pin','$a_category',
			'$refid','$a_mobilecountry','$NOTE','$a_ip')";

	//mysqli_query($conn, $query);
    
	if($db->query($query)) ;
	else{
		echo var_dump($db->errorInfo());
	}
	
	
	//Retrive paper registration id
	//$newid				= mysql_insert_id();
    $newid				= $db->lastInsertId();
	
	//Get the uploaded file details
	$info				= pathinfo($_FILES['fileupload']['name']);
	$ext				= $info['extension'];
	$uploadedFileName	= "IJCRT_".$newid.".".$ext;
	
	//Insert file details in paper table
	$fileDetails		= "UPDATE `paper` SET `regfilename`='$uploadedFileName' WHERE `r_id`='$newid'";
    mysqli_query($dbLink, $fileDetails);
	
	//Save file in directory
	$target				= 'papersubmitedbyauthor/'.$uploadedFileName;
	move_uploaded_file( $_FILES['fileupload']['tmp_name'], $target);

	/*
	|------------------------------------------------------------------------
	| show the acknowledgement to paper
	|------------------------------------------------------------------------
	*/
    ?> <div class="col-md-10">
	<div class="panel panel-success">

		<div class="panel-heading">
		<h3> Submitted! Please Save This page For Acknowlegment for Submission of paper Save it! Your paper is Successfully submitted <?php echo $a_regdate ?>.
		</br>
		<a href="https://ijcrt.org/track.php" target="_blank">Track your paper : https://ijcrt.org/track.php </a>
		</h3>
		</div>
		
		<div class="panel-heading">
					<strong>Submitted!</strong> Acknowlegment for Submission of paper. Your paper is Successfully submitted <?php echo $a_regdate ?>. </br>
					wait for Acceptance within 1 to 2 day it will come.
		</div>
		
	<div class="panel-body">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10 text-justify"><p> Congratulations...!! </br>Thank you for submitting paper in IJCRT INTERNATIONAL JOURNAL OF CREATIVE RESEARCH THOUGHTS (IJCRT) . You will be intimated for final selection & acceptance of your paper very soon.</br></br>Your paper will undergo the <b>NORMAL REVIEW PROCESS</b> of the Journal. The process normally takes 1 to 3 Days to complete depending on the number of rounds the reviews need to take place. Your Conformation Details of paper Submission are sent to your registered mail ID : <?php echo $a_a1email; ?></br></br>
Your paper has been successfuly submitted to IJCRT. Your Details of paper are set to your instered mail ID. Kindly Check. In case you don't find the mail in INBOX kindly check SPAM folder.<br/> </br> </p>
				<p>You will be intimated for final selection & acceptance of your paper very soon.</p>
	
			</div>
			
		</div>				
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<h4>Basic details about submitted paper</h4>
				<table class="table table-hover">
					<thead>
					  <tr>
						<th>Pariculars</th>
						<th>Contains</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td>Paper Registration ID</td>
						<td><?php echo "IJCRT_".$newid; ?></td>
					  </tr>
					   <tr>
						<td>Track Your Paper </td>
						<td><a href="https://ijcrt.org/track.php" target="_blank">Track your paper : https://ijcrt.org/track.php </a></td>
					  </tr>
					  <tr>
						<td>Paper Title</td>
						<td><?php echo $a_title; ?></td>
					  </tr>
					  <tr>
						<td>Corresponding Author's Name</td>
						<td><?php echo $a_a1name; ?></td>
					  </tr>
					  <tr>
						<td>Corresponding Author's Mail ID</td>
						<td><?php echo $a_a1email; ?></td>
					  </tr>
					</tbody>
				</table>
			</div>			 </br> </br> 
			<div class="col-sm-2"></div> 
		</div>

		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8" align="center">
	<a href="http://www.ijcrt.org/Authorhome/alogin.php">			<button type="button" class="btn btn-primary">Click Here to Track your Paper Status</button> </a> 
			</div>
			<div class="col-sm-2"></div>
		</div>		</br>		</br>		<div class="row">			<div class="col-sm-2"></div>		
		<div class="col-sm-10 text-justify">		
		<p>  If you have any query regarding publication please contact us at <b><a href="mailto:editor@ijcrt.org">editor@ijcrt.org</a></b>. please mention your paper registration id in the subject of mail.   
		 <p>
     	Authors can communicate any time to IJCRT through mail - <a href="mailto:editor@ijcrt.org">editor@ijcrt.org</a>
        If author have paper registration ID then kindly mention it in the subject field of the mail.
       </br> 
        
  		    <p><i class="fa fa-whatsapp "></i>    
			<a href="https://wa.me/917990172303"><abbr title="Send WhatsApp only do not call">WhatsApp Only </abbr>: +91 79 90 17 23 03 </p>  </a>   
			<p><i class="fa fa-envelope-o"></i>                     <abbr title="Email">E</abbr>: <a href="mailto:editor@ijcrt.org">editor@ijcrt.org</a>                </p>    
            <p><i class="fa fa-clock-o"></i>                     <abbr title="Hours">H</abbr>: Monday - Saturday: 11:00 AM to 06:00 PM IST </p>    
			<h2>Communication Guidelines/Process: </h2>         
  <table class="table table-hover">
    <thead>
      <tr>
        <th colspan="2"><i class="fa fa-bullhorn"></i> Every Day we received very large number of call so it’s decrease our work efficiency so we deiced to provide support on WhatsApp and Email only. </br>
      <br/>  <i class="fa fa-bullhorn"></i> NOTE: We give Priority to email only so first send your any query to email only. we will solve your query within 2 to 4 day.</th>
        
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> <i class="fa fa-bullhorn"></i> <b> Option 1: First Priority  </b> </br>
Send your query through Email only. </br>Our team will respond you within 2 to 4 days.
</td>
        <td>Email id: <a href="mailto:editor@ijcrt.org"> editor@ijcrt.org </a></br>
Note: Send all query to this email address <a href="mailto:editor@ijcrt.org"> editor@ijcrt.org</a>
</td>
        
      </tr>
      <tr>
        <td><i class="fa fa-bullhorn"></i> <b>Option 2: WhatsApp</b> </br>
Save Our Contact No in your mobile phone with name “IJCRT Journal"</td>
        <td>   <i class="fa fa-whatsapp "></i>  <a href="https://wa.me/917990172303"> WhatsApp Contact: +91 79 90 17 23 03</a></br>
<a href="https://wa.me/917990172303"> https://wa.me/917990172303</a></br>
Note: Do not call on this number Only send your query to WhatsApp only
</td>
       
      </tr>
      <tr>
        <td><i class="fa fa-bullhorn"></i>Option 3: <b>"Call Request"</b></br>
if using above 1&2 Option your query doesn’t resolve then follow below procedure to contact Editor Send me “Call Request “ to WhatsApp and Email With your mobile no and query.
Our editor sir will contact you soon.
</td>
        <td>Send me “Call Request” to WhatsApp and email with your mobile no and query. so our editor sir will contact you. 
</br></br>
Email id: <a href="mailto:editor@ijcrt.org">editor@ijcrt.org</a></br>
<a href="https://wa.me/917990172303"> WhatsApp Contact : +91 79 90 17 23 03 </a></br>
</td>
        
      </tr>
       <thead>
      <tr>
        <th colspan="2">NOTE: You can use any of above three options and we will solve your all problem within 2 to 3 day. Thank you for your kind support.</th>
        
        
      </tr>
    </thead>
    </tbody>
  </table>
			
			</br></br>		You can track your paper details from <a href="http://www.ijcrt.org/Authorhome/alogin.php" target="new"><b>AUHOR HOME</b></a> account. please login through your paper registration id (<?php echo "<b>IJCRT_".$newid."</b>"; ?>) and corresponding author's mail id (<?php echo "<b>".$a1_email."</b>"; ?>). 					</div>			<div class="col-sm-2"></div>		</div>					<div class="row">			<div class="col-sm-2"></div>			<div class="col-sm-8" align="center">	<a href="http://www.ijcrt.org/Authorhome/alogin.php">			<button type="button" class="btn btn-primary">Click Here to Track your Paper Status</button> </a>			</div>			<div class="col-sm-2"></div>		</div>		</br></br>					<div class="row">			<div class="col-sm-2"></div>			<div class="col-sm-10" align="center"><h4> Steps for Publication </h4> <a href="http://www.ijcrt.org/Authorhome/alogin.php">	 <img class="img-responsive" src="http://ijcrt.org/paper%20publication%20process.png"> </a>							</div>			<div class="col-sm-2"></div>		</div>
		
		
			
					</div>
	</div></div>
	
	
	<?php
		
	/*
	|------------------------------------------------------------------------
	| send mail to author
	|------------------------------------------------------------------------
	*/
	$to1 = $a_a1email;
    $to2 = "editor@ijcrt.org";
    $subject = "IJCRT".$newid." - Acknowledgement from IJCRT regarding research paper submitting";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	
	$headers = 'From: editor@ijcrt.org' . "\r\n" .
    'Reply-To: editor@ijcrt.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	
    $message= "
	<html>
                        <body>
		<p>
		Thank you for submitting paper in IJCRT. You will be intimated for final selection & acceptance of your paper very soon.
		<br/><br/>
		Your paper will undergo the normal review process of the Journal. The process normally takes 1 to 2 Days to complete depending on the number of rounds the reviews need to take place.
		</p>
		<strong>Kindly Note following details for future reference:</strong> <br/>
		Registration ID : IJCRT_".$newid."<br/>
		Paper Title: ".$a_title."<br/>
		Corresponding Author Name :".$a_a1name."<br/>
		Corresponding Author Email : ".$a_a1email." - This email ID will be used for any further communication for publication process status.<br/> 
		Publication charge/fees :1500 INR for Indian author & 55$ for foreign International author
		Track Paper Link : <a href='https://ijcrt.org/track.php' target='_blank'>Track your paper : https://ijcrt.org/track.php </a>
		<br/><br/> 
<font color='RED'><strong> IJCRT Journal is Scholarly open access journals, Peer-reviewed, and Refereed Journals, Impact factor 7.97 (Calculate by google scholar and Semantic Scholar | AI-Powered Research Tool) , Multidisciplinary, Monthly, Indexing in all major database & Metadata, Citation Generator, Digital Object Identifier(DOI). </strong>	
		<br/>			
		<div>	
		<table width='100%' border='1' align='left' style='border: 1px solid #1fada5; border-collapse: collapse; border-spacing: 0;'>	
		<tr>		
		<td colspan='2' width='100%' style='color:#ffffff; background-color: #17827c; border: none; text-align:left; padding: 10px 10px 10px 10px;'>	
		Following are the details regarding the Your submitted  paper.			</td>		
		</tr>		
		<tr>		
		<td width='20%' style='color:#000000; background-color: #f2f2f2; border: none; text-align:left; border-right-style:solid; border-right-color:#1fada5; border-bottom: thin solid #1fada5; padding: 10px 10px 10px 10px;'>Registration ID:
		</td>	
		<td width='80%' style='color:#000000; background-color: #f2f2f2; border: none; text-align:left; border-bottom: thin solid #1fada5; padding: 10px 10px 10px 10px;'><b> ".$newid." </b>
		</td>	
		</tr>
<tr>		
		<td width='20%' style='color:#000000; background-color: #f2f2f2; border: none; text-align:left; border-right-style:solid; border-right-color:#1fada5; border-bottom: thin solid #1fada5; padding: 10px 10px 10px 10px;'>Track Your Paper:
		</td>	
		<td width='80%' style='color:#000000; background-color: #f2f2f2; border: none; text-align:left; border-bottom: thin solid #1fada5; padding: 10px 10px 10px 10px;'><b> <a href='https://ijcrt.org/track.php' target='_blank'>Track your paper : https://ijcrt.org/track.php </a> </b>
		</td>	
		</tr>	
		
		<tr>		<td width='20%' style='color:#000000; background-color: #f2f2f2; border: none; text-align:left; border-right-style:solid; border-right-color:#1fada5; border-bottom: thin solid #1fada5; padding: 10px 10px 10px 10px;'>Paper Title:</td>			<td width='80%' style='color:#000000; background-color: #f2f2f2; border: none; text-align:left; border-bottom: thin solid #1fada5; padding: 10px 10px 10px 10px;'><b>".$a_title." </b></td>		</tr>				<tr>		<td width='20%' style='color:#000000; background-color: #f2f2f2; border: none; text-align:left; border-right-style:solid; border-right-color:#1fada5; padding: 10px 10px 10px 10px;'>Author email:</td>			<td width='80%' style='color:#000000; background-color: #f2f2f2; border: none; text-align:left; padding: 10px 10px 10px 10px;'><b>".$a_a1email."</b></td>		
		</tr>
  <tr>
                                            <td width='20%' style='color:#000000; background-color: #f2f2f2; border: none; text-align:left; border-right-style:solid; border-right-color:#1fada5; padding: 10px 10px 10px 10px;'>First/Corresponding Author email:</td>
                                            <td width='80%' style='color:#000000; background-color: #f2f2f2; border: none; text-align:left; padding: 10px 10px 10px 10px;'>
                                                <b>".$a1_email."</b> - This email ID will be used for any further communication regarding publication process status</br>
												Publication fees: 1500 INR for Indian author & 55$ for foreign International author </br>
												if any query email to editor@ijcrt.org. 
                                            </td>
                                        </tr>		
		</table>
		</div><div  style='color:#000000; width:100%; line-height:20px;'>	<b><u>Complete Publication process</u>:</b>	Track Paper <a href='https://ijcrt.org/track.php' target='_blank'>Track your paper : https://ijcrt.org/track.php </a> Using This Link <a href='http://www.ijcrt.org/Authorhome/alogin.php'>AUTHOR HOME</a> using your registration ID (".$newid.") and email ID (".$a_a1email.").
		</div><br/>          					                    <font color='RED'><strong>you can check status of your paper by using paper track system, your Registration ID and Corresponding Author  mail ID. kindly go through link: <a href='http://www.ijcrt.org/Authorhome/alogin.php' target='_blank'>http://www.ijcrt.org/Authorhome/alogin.php</a></strong></font>                    <br/><br/>                    For More Information: www.ijcrt.org                    <br/>For any query write us on: editor@ijcrt.org                    <br/><br/>                    Regards,<br/>                    Editor in Chief,<br/>                    IJCRT<br/>                    <p>				
		
		</body></html>
		";  
	 $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= 'From: Editor IJCRT <editor@ijcrt.org>' . "\r\n";
	$headers .= 'Reply-To: Editor IJCRT <editor@ijcrt.org>' . "\r\n";
	mail($to1, $subject,$message, $headers );
	mail($to2, $subject, $message, $headers );
	mail("editor@ijcrt.org",$subject,$message,$headers);

}
?>
<?php //echo $message;?>

		<!-- Submit Paper form -->		 <div class="col-md-10">		  <div class="panel-group" id="accordion">		 		 <!-- Trigger the modal with a button --><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal"> <i class="fa fa-cogs fa-1x"> </i> Click Here to Read Important Instructions for Author before submitting paper .....! </button><!-- Modal --><div id="myModal" class="modal fade" role="dialog">  <div class="modal-dialog">    <!-- Modal content-->    <div class="modal-content">      <div class="modal-header">        <button type="button" class="close" data-dismiss="modal">&times;</button>        <h4 class="modal-title"> <i class="fa fa-cogs fa-1x"> </i> Important Instructions for Author.....! </h4>      </div>      <div class="modal-body">        <div class="alert alert-info text-justify">
		
		<h4><i class="fa fa-cogs fa-1x"> </i> Important Guidelines .</h4>
			<i class="fa fa-bullhorn"></i> Open Access Processing Charges or Publication fees with free DOI : &#8377;1500 INR for Indian author & 55$ for foreign International author. </br></br>
				<i class="fa fa-bullhorn"></i> Refereed Journal, Peer Journal and Indexed Journal </br>
				<i class="fa fa-bullhorn"></i> Publication Issue Frequency : Monthly (12 issue Per Year Annually)</br>
				<i class="fa fa-bullhorn"></i> Journal Discipline and Subject : Multidisciplinary. </br>
				<i class="fa fa-bullhorn"></i> Publisher and Managed By : IJPUBLICATION (ijpublication.org). </br>
				<i class="fa fa-bullhorn"></i> Publication Supported Languages:  Allow All Multiple Languages. </br>
		<i class="fa fa-bullhorn"></i> Provide DOI and Hard copy of Certificate. </br>
				<i class="fa fa-bullhorn"></i> High impact factor and 50+ index database and Fast paper publication. </br>
				<i class="fa fa-bullhorn"></i> Nominal Fee for Professional Research Services, Low cost research journal. </br>
				<i class="fa fa-bullhorn"></i> Publication Guidelines : COPE Guidelines </br>
				<br/><i class="fa fa-bullhorn"></i> Low Publication Charge  <i class="fa fa-inr" aria-hidden="true"></i>1500 INR per single paper Publication with Maximum 5 Author for indian author & 55$ for foreign International author. </br>
						 </br>		
						  <i class="fa fa-bullhorn"></i> <b>Paper Submission Till</b> : 29 <?php echo $cmonth;?></br>
						 <i class="fa fa-bullhorn"></i> Review Results (Acceptance/Rejection) Notification : Within 02-03 Days</br>
						 <i class="fa fa-bullhorn"></i> Paper Publication Time : Paper Publish: Within 02-03 Days after submitting all the required documents.</b></br>
						 <i class="fa fa-bullhorn"></i> Submit your Paper  <a href="http://ijcrt.org/submitonline.php" class="btn btn-primary">Submit your paper </a> </br>
						 </br>	
						 </br>	

		<strong>Important Instructions!</strong> </br>
		<p>  <i class="fa fa-arrow-right" aria-hidden="true"></i> Please Upload Microsoft Word file only.  </br>
		<i class="fa fa-arrow-right" aria-hidden="true"></i> Kindly Fill all the details properly as Certificate will be generated on the basis of information provided as under.  </br>
		<i class="fa fa-arrow-right" aria-hidden="true"></i> Details of the paper( TItle of paper, Abstract, keywords, Author name, Designation, institute name) must be same as mentioned in your submitting paper.</br><i class="fa fa-arrow-right" aria-hidden="true"></i> Please don't write title of the paper, Author(s) names in CAPITAL LETTERS only. only 1st letter of the each word should be in capital letters only.</br> <i class="fa fa-arrow-right" aria-hidden="true"></i> NOTE: Please careful about the mobile number of 1st author, Because we will send all the notification message to 1st author only.Don't add country code OR + before the number write only 10 or More digit mobile No.</br> </p></div>      </div>      <div class="modal-footer">        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>      </div>    </div>  </div></div>		 </br></br>                   						
               
					<form name="registration" id="registration" method="post" action= "" onsubmit="return validateform()" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype='multipart/form-data' data-parsley-validate>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"  href="#collapse1"> <i class="fa fa-book" aria-hidden="true"></i> Paper / Menuscript / Article  Submission Form Details</a>
                        </h4>
                        </div>

                        <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                        <label for="p_title" class="col-lg-2"> <i class="fa fa-book" aria-hidden="true"></i> Paper Title</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="p_title" name="p_title" onChange="validatetitletext();" required="required">
                                            <span class="help-block">Write the title of your article/paper in camel case. (first letter of each word should be in Upper case)</span>
                                        </div>
                                        </div>
									</div>
								</div>
								<div class="row">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                        <label for="p_abstract" class="col-lg-2"> <i class="fa fa-book" aria-hidden="true"></i> Abstract</label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" type="text" rows="3" id="p_abstract" name="p_abstract" required="required"></textarea>
                                        </div>
                                        </div>
									</div>
								</div>
								<div class="row">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                        <label for="p_keywords" class="col-lg-2"><i class="fa fa-book" aria-hidden="true"></i> Keywords</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="p_keywords" name="p_keywords" required="required">
                                        </div>
                                        </div>
									</div>
								</div>
								
									<div class="row">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                        <label for="p_mobilecountry" class="col-lg-2"><i class="fa fa-mobile" aria-hidden="true"></i> Mobile Country Code</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="p_mobilecountry" name="r_mccode" required="required">
                                                <option selected="" value="">(Select country code for mobile number)</option>
												<option value="93">Afghanistan</option>
    <option value="358">Aland Islands</option>
    <option value="355">Albania</option>
    <option value="213">Algeria</option>
    <option value="1684">American Samoa</option>
    <option value="376">Andorra</option>
    <option value="244">Angola</option>
    <option value="1264">Anguilla</option>
    <option value="672">Antarctica</option>
    <option value="1268">Antigua and Barbuda</option>
    <option value="54">Argentina</option>
    <option value="374">Armenia</option>
    <option value="297">Aruba</option>
    <option value="61">Australia</option>
    <option value="43">Austria</option>
    <option value="994">Azerbaijan</option>
    <option value="1242">Bahamas</option>
    <option value="973">Bahrain</option>
    <option value="880">Bangladesh</option>
    <option value="1246">Barbados</option>
    <option value="375">Belarus</option>
    <option value="32">Belgium</option>
    <option value="501">Belize</option>
    <option value="229">Benin</option>
    <option value="1441">Bermuda</option>
    <option value="975">Bhutan</option>
    <option value="591">Bolivia</option>
    <option value="599">Bonaire, Sint Eustatius and Saba</option>
    <option value="387">Bosnia and Herzegovina</option>
    <option value="267">Botswana</option>
    <option value="55">Bouvet Island</option>
    <option value="55">Brazil</option>
    <option value="246">British Indian Ocean Territory</option>
    <option value="673">Brunei Darussalam</option>
    <option value="359">Bulgaria</option>
    <option value="226">Burkina Faso</option>
    <option value="257">Burundi</option>
    <option value="855">Cambodia</option>
    <option value="237">Cameroon</option>
    <option value="1">Canada</option>
    <option value="238">Cape Verde</option>
    <option value="1345">Cayman Islands</option>
    <option value="236">Central African Republic</option>
    <option value="235">Chad</option>
    <option value="56">Chile</option>
    <option value="86">China</option>
    <option value="61">Christmas Island</option>
    <option value="672">Cocos (Keeling) Islands</option>
    <option value="57">Colombia</option>
    <option value="269">Comoros</option>
    <option value="242">Congo</option>
    <option value="242">Congo, Democratic Republic of the Congo</option>
    <option value="682">Cook Islands</option>
    <option value="506">Costa Rica</option>
    <option value="225">Cote D'Ivoire</option>
    <option value="385">Croatia</option>
    <option value="53">Cuba</option>
    <option value="599">Curacao</option>
    <option value="357">Cyprus</option>
    <option value="420">Czech Republic</option>
    <option value="45">Denmark</option>
    <option value="253">Djibouti</option>
    <option value="1767">Dominica</option>
    <option value="1809">Dominican Republic</option>
    <option value="593">Ecuador</option>
    <option value="20">Egypt</option>
    <option value="503">El Salvador</option>
    <option value="240">Equatorial Guinea</option>
    <option value="291">Eritrea</option>
    <option value="372">Estonia</option>
    <option value="251">Ethiopia</option>
    <option value="500">Falkland Islands (Malvinas)</option>
    <option value="298">Faroe Islands</option>
    <option value="679">Fiji</option>
    <option value="358">Finland</option>
    <option value="33">France</option>
    <option value="594">French Guiana</option>
    <option value="689">French Polynesia</option>
    <option value="262">French Southern Territories</option>
    <option value="241">Gabon</option>
    <option value="220">Gambia</option>
    <option value="995">Georgia</option>
    <option value="49">Germany</option>
    <option value="233">Ghana</option>
    <option value="350">Gibraltar</option>
    <option value="30">Greece</option>
    <option value="299">Greenland</option>
    <option value="1473">Grenada</option>
    <option value="590">Guadeloupe</option>
    <option value="1671">Guam</option>
    <option value="502">Guatemala</option>
    <option value="44">Guernsey</option>
    <option value="224">Guinea</option>
    <option value="245">Guinea-Bissau</option>
    <option value="592">Guyana</option>
    <option value="509">Haiti</option>
    <option value="0">Heard Island and Mcdonald Islands</option>
    <option value="39">Holy See (Vatican City State)</option>
    <option value="504">Honduras</option>
    <option value="852">Hong Kong</option>
    <option value="36">Hungary</option>
    <option value="354">Iceland</option>
    <option value="91">India</option>
    <option value="62">Indonesia</option>
    <option value="98">Iran, Islamic Republic of</option>
    <option value="964">Iraq</option>
    <option value="353">Ireland</option>
    <option value="44">Isle of Man</option>
    <option value="972">Israel</option>
    <option value="39">Italy</option>
    <option value="1876">Jamaica</option>
    <option value="81">Japan</option>
    <option value="44">Jersey</option>
    <option value="962">Jordan</option>
    <option value="7">Kazakhstan</option>
    <option value="254">Kenya</option>
    <option value="686">Kiribati</option>
    <option value="850">Korea, Democratic People's Republic of</option>
    <option value="82">Korea, Republic of</option>
    <option value="381">Kosovo</option>
    <option value="965">Kuwait</option>
    <option value="996">Kyrgyzstan</option>
    <option value="856">Lao People's Democratic Republic</option>
    <option value="371">Latvia</option>
    <option value="961">Lebanon</option>
    <option value="266">Lesotho</option>
    <option value="231">Liberia</option>
    <option value="218">Libyan Arab Jamahiriya</option>
    <option value="423">Liechtenstein</option>
    <option value="370">Lithuania</option>
    <option value="352">Luxembourg</option>
    <option value="853">Macao</option>
    <option value="389">Macedonia, the Former Yugoslav Republic of</option>
    <option value="261">Madagascar</option>
    <option value="265">Malawi</option>
    <option value="60">Malaysia</option>
    <option value="960">Maldives</option>
    <option value="223">Mali</option>
    <option value="356">Malta</option>
    <option value="692">Marshall Islands</option>
    <option value="596">Martinique</option>
    <option value="222">Mauritania</option>
    <option value="230">Mauritius</option>
    <option value="269">Mayotte</option>
    <option value="52">Mexico</option>
    <option value="691">Micronesia, Federated States of</option>
    <option value="373">Moldova, Republic of</option>
    <option value="377">Monaco</option>
    <option value="976">Mongolia</option>
    <option value="382">Montenegro</option>
    <option value="1664">Montserrat</option>
    <option value="212">Morocco</option>
    <option value="258">Mozambique</option>
    <option value="95">Myanmar</option>
    <option value="264">Namibia</option>
    <option value="674">Nauru</option>
    <option value="977">Nepal</option>
    <option value="31">Netherlands</option>
    <option value="599">Netherlands Antilles</option>
    <option value="687">New Caledonia</option>
    <option value="64">New Zealand</option>
    <option value="505">Nicaragua</option>
    <option value="227">Niger</option>
    <option value="234">Nigeria</option>
    <option value="683">Niue</option>
    <option value="672">Norfolk Island</option>
    <option value="1670">Northern Mariana Islands</option>
    <option value="47">Norway</option>
    <option value="968">Oman</option>
    <option value="92">Pakistan</option>
    <option value="680">Palau</option>
    <option value="970">Palestinian Territory, Occupied</option>
    <option value="507">Panama</option>
    <option value="675">Papua New Guinea</option>
    <option value="595">Paraguay</option>
    <option value="51">Peru</option>
    <option value="63">Philippines</option>
    <option value="64">Pitcairn</option>
    <option value="48">Poland</option>
    <option value="351">Portugal</option>
    <option value="1787">Puerto Rico</option>
    <option value="974">Qatar</option>
    <option value="262">Reunion</option>
    <option value="40">Romania</option>
    <option value="70">Russian Federation</option>
    <option value="250">Rwanda</option>
    <option value="590">Saint Barthelemy</option>
    <option value="290">Saint Helena</option>
    <option value="1869">Saint Kitts and Nevis</option>
    <option value="1758">Saint Lucia</option>
    <option value="590">Saint Martin</option>
    <option value="508">Saint Pierre and Miquelon</option>
    <option value="1784">Saint Vincent and the Grenadines</option>
    <option value="684">Samoa</option>
    <option value="378">San Marino</option>
    <option value="239">Sao Tome and Principe</option>
    <option value="966">Saudi Arabia</option>
    <option value="221">Senegal</option>
    <option value="381">Serbia</option>
    <option value="381">Serbia and Montenegro</option>
    <option value="248">Seychelles</option>
    <option value="232">Sierra Leone</option>
    <option value="65">Singapore</option>
    <option value="1">Sint Maarten</option>
    <option value="421">Slovakia</option>
    <option value="386">Slovenia</option>
    <option value="677">Solomon Islands</option>
    <option value="252">Somalia</option>
    <option value="27">South Africa</option>
    <option value="500">South Georgia and the South Sandwich Islands</option>
    <option value="211">South Sudan</option>
    <option value="34">Spain</option>
    <option value="94">Sri Lanka</option>
    <option value="249">Sudan</option>
    <option value="597">Suriname</option>
    <option value="47">Svalbard and Jan Mayen</option>
    <option value="268">Swaziland</option>
    <option value="46">Sweden</option>
    <option value="41">Switzerland</option>
    <option value="963">Syrian Arab Republic</option>
    <option value="886">Taiwan, Province of China</option>
    <option value="992">Tajikistan</option>
    <option value="255">Tanzania, United Republic of</option>
    <option value="66">Thailand</option>
    <option value="670">Timor-Leste</option>
    <option value="228">Togo</option>
    <option value="690">Tokelau</option>
    <option value="676">Tonga</option>
    <option value="1868">Trinidad and Tobago</option>
    <option value="216">Tunisia</option>
    <option value="90">Turkey</option>
    <option value="7370">Turkmenistan</option>
    <option value="1649">Turks and Caicos Islands</option>
    <option value="688">Tuvalu</option>
    <option value="256">Uganda</option>
    <option value="380">Ukraine</option>
    <option value="971">United Arab Emirates</option>
    <option value="44">United Kingdom</option>
    <option value="1">United States</option>
    <option value="1">United States Minor Outlying Islands</option>
    <option value="598">Uruguay</option>
    <option value="998">Uzbekistan</option>
    <option value="678">Vanuatu</option>
    <option value="58">Venezuela</option>
    <option value="84">Viet Nam</option>
    <option value="1284">Virgin Islands, British</option>
    <option value="1340">Virgin Islands, U.s.</option>
    <option value="681">Wallis and Futuna</option>
    <option value="212">Western Sahara</option>
    <option value="967">Yemen</option>
    <option value="260">Zambia</option>
    <option value="263">Zimbabwe</option>
                                            </select>
                                        </div>
                                        </div>
									</div>
								</div>
								
								<div class="row">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                        <label for="p_researcharea" class="col-lg-2"><i class="fa fa-book" aria-hidden="true"></i> Research Area</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="p_researcharea" name="r_area" required="required">
                                                <option selected="" value="">(Please select your research area)</option>
												<option value='Other area not in list'> Other Research Area Not in this List Select this </option>
                                                <option value='Science and Technology'>Engineering, Science & Technology ( All Branch )</option>
                                                <option value='Pharmacy All'>Pharmacy ( All Branch )</option>
                                                <option value='Management All'>Management ( All Branch )</option>
                                                <option value='Mathematics All'>Mathematics</option>
                                                <option value='Physics All'>Physics</option>
                                                <option value='Chemistry All'>Chemistry</option>
                                                <option value='Science All'>Science ( All Branch )</option>	
												<option value='Arts All'>Arts ( All Branch )</option>		
												<option value='Arts1 All'>Arts and Social Science ( All Branch )</option>													
												<option value='Commerce All'>Commerce ( All Branch )</option>							
												<option value='Life Sciences All'>Life Sciences ( All Branch )</option>						
												<option value='Languages'>Languages( All Branch )</option>							
												<option value='Health Science All'>Health Science( All Branch )</option>					
												<option value='Social Science All'>Social Science( All Branch )</option>				
												<option value='Medical Science All'>Humanities( All Branch )</option>						
                                                <option value='Humanities All'>Medical Science ( All Branch )</option>
												 <option value='Commerce and Management, MBA All Branch '>Commerce and Management, MBA (All Branch)</option>
                                                <option value="Biological Science">Biological Science ( All Branch )</option>
                                                <option value="Applied Mathematics">Applied Mathematics</option>
                                                <option value='Applied Instrumentation '>Applied Instrumentation </option>											
												<option value='Others area'> Other Research Area Not in this List Select this </option>
                                            </select>
                                        </div>
                                        </div>
									</div>
								</div>
								<div class="row">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                        <label for="p_abstract" class="col-lg-2"> <i class="fa fa-book" aria-hidden="true"></i> Upload Paper</label>
                                        <input type="file" name="fileupload" required="required">	<br>

                  File type:<strong> .doc</strong> or <strong>.docx</strong> only.				  
                                        </div>
								</div>
								</div>
                                </div>	
                            </div>		  
                        </div>
                    <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse"  href="#collapse2"> <i class="fa fa-user" aria-hidden="true"></i> Authors Details</a>
                                </h4>
                            </div>

                            <div id="collapse2" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                    <label for="p_author_category" class="col-lg-3"> <i class="fa fa-user" aria-hidden="true"></i> Author Category</label>
                                                    <div class="col-md-9">
                                                            <select class="form-control" id="p_author_category" name="p_author_category" required="required">
                                                                <option selected="" value="">(Please select a Author category)</option>
                                                                <option value="Indian Author">Indian Author ( Publication Charge 1500 INR ) </option>
                                                                <option value="Foreign Author">Foreign Author ( Publication Charge  50 USD ) </option>
                                                            </select>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                  </br>  <label for="p_total_author" class="col-lg-3"> <i class="fa fa-user" aria-hidden="true"></i> Total Authors</label> </br>
                                                    <div class="col-md-9">
                                                            <select class="form-control" id="p_total_author" name="p_total_author" onChange="changetextbox();" required="required">
                                                                <option selected="" value="">(Please select a number of authors)</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-lg-4" id="A1block">
                                            <h3><span class="label label-default"><i class="fa fa-user" aria-hidden="true"></i> Author 1</span></h3>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                <input type="text" class="form-control" name="p_author1name" id="p_author1name" placeholder="1st Author -Name" required="required">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></span>
                                                <input type="text" class="form-control" name="p_author1designation" id="p_author1designation" placeholder="1st Author -Designation" required="required">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-education"></span></span>
                                                <input type="text" class="form-control" name="p_author1university" id="p_author1university" placeholder="1st Author -University/College Name" required="required">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                                                <input type="text" maxlength="10" class="form-control" name="p_author1contact" id="p_author1contact" placeholder="1st Author -Contact Number" required="required">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                                <input type="text" class="form-control" name="p_author1email" id="p_author1email" placeholder="1st Author -Email" required="required" data-parsley-type='email'>
                                            </div>
                                        </div>
                                        <div class="col-lg-4" id="A2block">
                                            <h3><span class="label label-default"><i class="fa fa-user" aria-hidden="true"></i> Author 2</span></h3>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                <input type="text" class="form-control" name="p_author2name" id="p_author2name" placeholder="2nd Author -Name">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></span>
                                                <input type="text" class="form-control" name="p_author2designation" id="p_author2designation" placeholder="2nd Author -Designation">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-education"></span></span>
                                                <input type="text" class="form-control" name="p_author2university" id="p_author2university" placeholder="2nd Author -University/College Name">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                                                <input type="text" class="form-control" name="p_author2contact" id="p_author2contact" placeholder="2nd Author -Contact Number">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                                <input type="text" class="form-control" name="p_author2email" id="p_author2email" placeholder="2nd Author -Email" data-parsley-type='email'>
                                            </div>
                                        </div>
                                        <div class="col-lg-4" id="A3block">
                                            <h3><span class="label label-default"><i class="fa fa-user" aria-hidden="true"></i> Author 3</span></h3>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                <input type="text" class="form-control" name="p_author3name" id="p_author3name" placeholder="3rd Author -Name">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></span>
                                                <input type="text" class="form-control" name="p_author3designation" id="p_author3designation" placeholder="3rd Author -Designation">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-education"></span></span>
                                                <input type="text" class="form-control" name="p_author3university" id="p_author3university" placeholder="3rd Author -University/College Name">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                                                <input type="text" class="form-control" name="p_author3contact" id="p_author3contact" placeholder="3rd Author -Contact Number">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                                <input type="text" class="form-control" name="p_author3email" id="p_author3email" placeholder="3rd Author -Email" data-parsley-type='email'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4" id="A4block">
                                            <h3><span class="label label-default"><i class="fa fa-user" aria-hidden="true"></i> Author 4</span></h3>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                <input type="text" class="form-control" name="p_author4name" id="p_author4name" placeholder="4th Author -Name">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></span>
                                                <input type="text" class="form-control" name="p_author4designation" id="p_author4designation" placeholder="4th Author -Designation">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-education"></span></span>
                                                <input type="text" class="form-control" name="p_author4university" id="p_author4university" placeholder="4th Author -University/College Name">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                                                <input type="text" class="form-control" name="p_author4contact" id="p_author4contact" placeholder="4th Author -Contact Number">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                                <input type="text" class="form-control" name="p_author4email" id="p_author4email" placeholder="4th Author -Email" data-parsley-type='email'>
                                            </div>
                                        </div>
                                        <div class="col-lg-4" id="A5block">
                                            <h3><span class="label label-default"><i class="fa fa-user" aria-hidden="true"></i> Author 5</span></h3>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                                <input type="text" class="form-control" name="p_author5name" id="p_author5name" placeholder="5th Author -Name">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></span>
                                                <input type="text" class="form-control" name="p_author5designation" id="p_author5designation" placeholder="5th Author -Designation">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-education"></span></span>
                                                <input type="text" class="form-control" name="p_author5university" id="p_author5university" placeholder="5th Author -University/College Name">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                                                <input type="text" class="form-control" name="p_author5contact" id="p_author5contact" placeholder="5th Author -Contact Number">
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                                <input type="text" class="form-control" name="p_author5email" id="p_author5email" placeholder="5th Author -Email" data-parsley-type='email'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"  href="#collapse3">Address Details</a>
                        </h4>
                        </div>

                        <div id="collapse3" class="panel-collapse collapse in">
                        <div class="panel-body">

                            <div class="row">
                                <div class="form-group">
                                    <label for="p_addline1" class="col-lg-2"> Address Line 1</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="p_addline1" name="p_addline1" required="required">
                                    </div>
                                    <label for="p_addline2" class="col-lg-2">Address Line 2</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="p_addline2" name="p_addline2" required="required">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label for="p_city" class="col-lg-2">City</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="p_city" name="p_city" required="required">
                                    </div>
                                    <label for="p_state" class="col-lg-2">State</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="p_state" name="p_state" required="required">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label for="p_country" class="col-lg-2">Country</label>
                                    <div class="col-lg-4">
									<select class="form-control" id="p_country" name="p_country" required="required">
									 <option selected="" value="">(Select Country Name)</option>
                                         <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
										 </select>
                                    </div>

                                    <label for="p_pincode" class="col-lg-2">Pincode</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="p_pincode" name="p_pincode" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"  href="#collapse4">Terms & conditions / Referral Code</a>
                        </h4>
                        </div>

                        <div id="collapse4" class="panel-collapse collapse in">
                        <div class="panel-body">

                            <div class="row">
                                <div class="form-group">
                                    <label for="p_referral" class="col-md-4">Referral Code (if you have otherwise left blank)</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="p_referral" name="p_referral">
                                    </div>
                                </div>
                            </div>
							
							<div class="row">
                                <div class="form-group">
                                    <label for="NOTE" class="col-md-4">Special Message for Editor: (if you have otherwise left blank)</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="NOTE" name="NOTE">
                                    </div>
                                </div>
                            </div>

                            <?php
                                $num1 = "&#" . rand(49,57) . ";";
                                $num2 = "&#" . rand(49,57) . ";";
								
                            ?>
                            <div class="row">
                                <div class="form-group">
                                    <label for="captcha" class="col-md-4">Solve the Math:
                                    <?php echo "<span id='captchaval1'>$num1</span> + <span id='captchaval2'>$num2</span> = "; ?></label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="captcha" name="captcha" required="required">
										
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="alert">
                                    By submitting this form you have agreed our terms and conditions.
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    
                    </br>
                    <div class="row" align="center">
                        <!--<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                        -->
                        <input class="btn btn-default" type="submit" name="submit" value="Submit">
                    </div>
                    </form>
                    </div>

                </div>
                <!--/.Submit paper form -->

            </div>
        </div>
        <!-- /.row -->

        <hr>
    
        <!-- Footer -->


    </div>
    <!-- /.container -->
	
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
    

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
<script type="text/javascript">
		
	$(document).ready(function () {
		$('#registration').parsley();
	});
	
</script>
</body>

</html>
