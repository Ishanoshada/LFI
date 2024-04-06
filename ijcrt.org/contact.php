<?php include("headstyle.php"); ?>
<?php include("header.php"); ?>
<div class="row">
<div class="col-md-8 col-md-push-2">
<div class="panel panel-body">
<div class="col-md-12 col-lg-12">
<div class="panel panel-primary">
	<div class="panel-heading">
		<h4>Contact Us</h4>
	</div>

	  
	
	<div class="panel-body" style="text-align:justify">
	 <div class="alert alert-success">
	 <h4>Communication officer related query in Publication  </h4>
	 <p>Prof. H D Patel </p>
	 <p>210 ganesh glorry, Ahmedabad Gujarat </p>
	 	 </div>
	  
	<div class="alert alert-warning">
		<h5><b> IJCRT Publisher Address: </b></h5>
		<p>Editor In cheif: Prof Kiran S Patel </p>
		<p>210 ganesh glorry, Ahmedabad Gujarat </p>
		<p>Email: editor@ijcrt.org </p>
	</div>
	<div class="alert alert-info"> If author have any query related to website / paper / copyright / publication procedure/ Copyright Infringement Claims then please contact with below mentioned mail id or contact numbers.
		<p>
     	Authors can communicate any time to IJCRT through mail - <a href="mailto:editor@ijcrt.org">editor@ijcrt.org</a>
        If author have paper registration ID then kindly mention it in the subject field of the mail.
       </br> 
        
  		    <p><i class="fa fa-whatsapp "></i>    
			<a href="https://wa.me/917990172303"><abbr title="Send WhatsApp only do not call">WhatsApp Only </abbr>: +91 79 90 17 23 03 </p>  </a>   
			<p><i class="fa fa-envelope-o"></i>                     <abbr title="Email">E</abbr>: <a href="mailto:editor@ijcrt.org">editor@ijcrt.org</a>                </p>    
            <p><i class="fa fa-clock-o"></i>                     <abbr title="Hours">H</abbr>: Monday - Saturday: 11:00 AM to 06:00 PM IST </p> 
		</div>
		<div class="alert alert-danger">Note-  support will be available on following mentioned time only:
		<p><b>Monday to Friday (11:00 AM to 07:00 PM IST)</b></p>
		</div>
	</div>
</div>    
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


<?php
if(isset($_POST['contactform']))
{
$to="editor@ijcrt.org";	
$to1 =$_POST['contactUsEmail'];
$name =$_POST['contactUsFirstName'];
$mobile=$_POST['contactNumber'];
$subject ="Message or Query From Contact Us Page of IJCRT";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$from = "Editor IJCRT <editor@ijcrt.org>";
$headers.= "From:" . $from;

$message="
<html>
<body>
<br/>
<table width=100% align=center cellpadding=5 cellspacing=5 bordercolor=#000000>
<tbody>
<tr>
<td colspan=3 style='border-collapse:separate;border: solid #ccc 1px;border-radius: 16px;' align=justify>

<h3> Your Responce received at IJCRT Contact Us page.</h3>
Contents of your Query are as follows: 
<br/>
Name : {$name}<br/>
Email : {$to1}<br/>
Mobile : {$mobile}<br/>
Subject : {$subject}<br/>
Message : {$_POST['contactUsDetail']}
<br/>
<br/>
<table border=0 cellspacing=0 cellpadding=0 width=100%>
  <tr>
    <td width=80><img width=80px height=80px src='http://ijcrt.org/Content/Images/new_ijcrt/smalled-1.png'></td>
    <td width='%'><strong>Web Admin<br/>
      I J C R T</strong><br/>
	  <a href='http://www.ijcrt.org'>www.ijcrt.org</a> | editor@ijcrt.org | +91 9898157864 <br/>
    </td>
  </tr>
  <tr>
    <td colspan='2' bgcolor=''><font
  color='#009900' face='verdana,arial,helvetica' size=2> <strong>Note: Please
consider the environment before printing this email</strong></font></td>
  </tr>
</table>

</td>
</tr>
</tbody>
</table>

</body>
</html>

";

mail($to,$subject,$message,$headers);
mail($to1,$subject,$message,$headers);
mail($from,$subject,$message,$headers);
mail("Editor IJCRT<editor@ijcrt.org>",$subject,$message,$headers);
mail("ijcrteditor@gmail.com",$subject,$message,$headers);

echo '<h1 class="page_title" >Your query submitted successfully.</h1>';
echo "<meta http-equiv=Refresh content=1;url=contact.php>";

 }
 
  ?>
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