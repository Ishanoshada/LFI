<style type="text/css">
.sectionheading{
	min-width:200px;
	font-family:Arial;
	font-size:14px;
	font-weight:bold;
	border-bottom:1px solid #128DC0;
	border-top:1px solid #128DC0;
	text-align:center;
	padding:5px 1px 5px 1px !important;
	background-color:rgba(206,226,243,1.00);
	margin:0px 0px 0px 0px !important;	
}
</style>


<div class="panel panel-primary">
	<div class="panel-heading">
		<span class="glyphicon glyphicon-cog  " style="font-size:20px;"></span> 

		Call For Paper <?php echo $cmonth;?>
	
	</div>
	<div class="panel-body " style="font-size:18px;">
	 <span class="glyphicon glyphicon-share" style="font-size:18px;"></span>   
     <a href="callforpaper.php" style="font-weight:bold; padding-bottom:10px !important">Call For Papers<br/> <?php echo $cmonth;?></a><br/>
        <a href="callforpaper.php" style="font-weight:bold; padding-bottom:10px !important">
            Volume <?php echo $cvol." | Issue ".$cissue; ?><br/>
            Last Date : <br> <?php $last=date("t-M-Y", strtotime(date("Y-m-t")));echo $last;?><br/>
			
        </a>
     <span class="glyphicon glyphicon-share" style="font-size:18px;"></span>     <a href="submitonline.php" target="_blank" style="font-weight:bold;  padding-top:10px !important">Submit Manuscript Online</a> </br>
<a href = ""> <span class="glyphicon glyphicon-share" style=" font-weight:bold; font-size:20px;"></span> Impact Factor: 7.97 </a></br>
</br>
<strong>
<i class="fa fa-bullhorn"></i> Review Results : Within 02-03 Days </br>
<i class="fa fa-bullhorn"></i> Paper Publication : Within 02-03 Days
	
	</div>
</div>


<div class="panel panel-primary">
	<div class="panel-heading">
		<span class="glyphicon glyphicon-cog " style="font-size:20px;"></span> 
		Published Issue Details
			</div>
	<div class="panel-body " >
	<div class="list-group">
			<a href="http://www.ijcrt.org/archive.php?vol=<?php echo $cvol ?>&issue=<?php echo $cissue ?>&pubmonth=<?php echo $cmonth ?>" class="list-group-item">	<span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>	Current Issue</a>
					<a href="archivelist.php" target="_blank" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Past Issue</a>
					<a href="ConferenceProposal.php" target="_blank" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Conference Proceedings</a>
					<a href="http://www.ijcrt.org/Content/Images/new_ijcrt/sample_CERTIFICATE.png" target="_blank" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Sample Certificate</a>
					<a href="http://www.ijcrt.org/Content/Images/new_ijcrt/sampleletter.png" target="_blank" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Sample Publication letter</a>
					  <a href="https://ijcrt.org/hardcopysampleflip.php" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Sample Hardcopy of Journal</a>
					  <a href="Content/Files/IJCRT_PaperFormat.docx" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Sample Paper format</a>
		<a href="Content/Files/IJCRT_CopyrightTransferForm.pdf" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>CopyRight Transfer Form</a>
		<a href="Content/Files/IJCRT_UndertakingByAuthors.pdf" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Undertaking Form</a>
				</div>

		</div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<span class="glyphicon glyphicon-cog " style="font-size:20px;"></span> 
		For Authors
		
	</div>
	<div class="panel-body " >
	<div class="list-group">
		<a href="callforpaper.php" target="_blank" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Call For Paper</a>
		<a href="http://www.ijcrt.org/Authorhome/alogin.php" target="_blank" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Track Submitted Paper</a>
		<a href="submitonline.php" target="_blank" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Submit Manuscript online</a>
		<a href="pubGuide.php" target="_blank" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Publication Guidelines</a>
		<a href="paymentInfo.php" target="_blank" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Publication Charges</a>
	   <a href="http://ijcrt.org/pay_form_2.php" target="_blank" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Pay Charges Online</a>
		<a href="paymentInfo.php" target="_blank" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Hardcopy Related</a>
		<a href="doi.php"  target="_blank" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>DOI</a>
		<a href="ResearchArea.php" target="_blank" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>List of Research Area</a>

				</div>

		</div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<span class="glyphicon glyphicon-cog "style="font-size:20px;"></span> 
		Forms / Downloads
		
	</div>
	<div class="panel-body " >
	<div class="list-group">
	  <a href="Content/Files/IJCRT_PaperFormat.docx" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Sample Paper format</a>
		<a href="Content/Files/IJCRT_CopyrightTransferForm.pdf" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>CopyRight Transfer Form</a>
		<a href="Content/Files/IJCRT_UndertakingByAuthors.pdf" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Undertaking Form</a>
 	</div>
	</div>
</div>


<div class="panel panel-primary">
	<div class="panel-heading">
		<span class="glyphicon glyphicon-cog "style="font-size:20px;"></span> 
		Other IMP Links
		
	</div>
	<div class="panel-body " >
	<div class="list-group">
	  <a href="https://ijcrt.org/How%20to%20start%20new%20journal%20&%20journal%20supporting%20software.php" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>START A NEW JOURNAL & <br>JOURNAL SUPPORTING SOFTWARE</a>
		<a href="https://ijcrt.org/bookpub.php" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Publish BOOK, DISSERTATION AND THESIS</a>
		<a href="bestpaperaward.php" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Best Research Paper Award</a>
		<a href="https://ijcrt.org/ConferenceProposal.php" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Conference/ Special Issue Praposal</a>
 	</div>
	</div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<span class="glyphicon glyphicon-cog "style="font-size:20px;"></span> 
		Indexing Partner
	
	</div>
		<div class="panel-body " >
		 <marquee   behavior="alternate" direction="up" style="height:450px; text-align:center" scrolldelay="10" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();">
		<a href="" target="_blank">
		<img src="Content/Images/indxGooglescholar.png" width="90" height="40" border="0" style="border:1px solid #CBD8FF"/></a>
		<a href="" target="_blank">
		<img src="Content/Images/tomson.png" width="90" height="40" border="0" style="border:1px solid #CBD8FF"/></a>

		<a href="" target="_blank">
		<img src="Content/Images/DRJI.png" width="90" height="40" border="0" style="border:1px solid #CBD8FF"/></a>

		<a href="" target="_blank">
		<img border="0" src="Content/Images/indxAcademia.jpg" width="90" height="40" style="border:1px solid #CBD8FF"  /></a> 
		<img src="Content/Images/mad.jpg" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="Content/Images/indxCabells.jpg" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="Content/Images/indxIssuu.jpg" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="Content/Images/indxIC.jpg" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="Content/Images/index/1.jpg" width="90" height="40" style="border:1px solid  #CBD8FF"/>
		<img src="Content/Images/index/16.jpg" width="90" height="40" style="border:1px solid  #CBD8FF"/> 
		<img src="Content/Images/index/9.png" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="newcss/i4.png" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="newcss/i8.png" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="newcss/i7.png" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="newcss/i3.png" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="newcss/i9.png" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="newcss/i2.gif" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="newcss/i5.png" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="newcss/i6.png" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="newcss/i10.jpg" width="90" height="40" style="border:1px solid #CBD8FF"/>
		
		<img src="Content/Images/index/n3.jpg" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="Content/Images/index/n7.png" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="Content/Images/index/n9.png" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="http://ijcrt.org/niks/includes/sematic scholar.png" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="Content/Images/index/n12.png" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="Content/Images/index/n18.gif" width="90" height="40" style="border:1px solid #CBD8FF"/>
		
		<img src="http://ijcrt.org/niks/includes/maceadmic.jpg" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="http://ijcrt.org/niks/includes/publon.png" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="http://ijcrt.org/niks/includes/ssrn.jpg" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="elsevier-mendeley.jpg" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="elsevier.png" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="orcid.png" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="Zenodo.jpg" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="https://ijcrt.org/UGC_India_Logo.png" width="90" height="40" style="border:1px solid #CBD8FF"/>
		<img src="peer review.jpg" width="90" height="40" style="border:1px solid #CBD8FF"/>
		</marquee>
	</div>
</div>


<div class="panel panel-primary">
	<div class="panel-heading">
		<span class="glyphicon glyphicon-cog "style="font-size:20px;"></span> 
		Research Area
	
	</div>
	<div class="panel-body " >
	<div class="list-group">
		<a href="http://www.ijcrt.org/ResearchArea.php" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Engineering</a>
		<a href="http://www.ijcrt.org/ResearchArea.php" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Science & Technology</a>
		<a href="http://www.ijcrt.org/ResearchArea.php" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Pharmacy</a>
		<a href="http://www.ijcrt.org/ResearchArea.php" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Science All </a>
		<a href="http://www.ijcrt.org/ResearchArea.php" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Commerce</a>
		<a href="http://www.ijcrt.org/ResearchArea.php" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Arts</a>
		<a href="http://www.ijcrt.org/ResearchArea.php" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Medical Science</a>
		<a href="http://www.ijcrt.org/ResearchArea.php" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Life Sciences</a>
		<a href="http://www.ijcrt.org/ResearchArea.php" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Health Science</a>
		<a href="http://www.ijcrt.org/ResearchArea.php" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Social Science and Humanities</a>
		<a href="http://www.ijcrt.org/ResearchArea.php" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Managment and Tourism</a>
		<a href="http://www.ijcrt.org/ResearchArea.php" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>LAW & Education </a>   
</div>
	</div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<span class="glyphicon glyphicon-cog "style="font-size:20px;"></span> 
		LICENSE
		
	</div>
		<div class="panel-body " >
	<p><a href="http://creativecommons.org/licenses/by-nc/3.0/" target="new" rel="license" style="text-decoration:none">
     <i class="fa fa-bullhorn" aria-hidden="true"></i>
  This work is licensed under a Creative Commons Attribution-NonCommercial 4.0 International License
    </p>  
    <center>
      <img alt="Creative Commons License"  style="border-width:0; " src="http://i.creativecommons.org/l/by-nc/3.0/88x31.png"  />
      </center>
      </a>
    <center>
        <img src="Content/Images/openaceess.png"  class="img-responsive" width="160px"/></br>
        <img src="Content/Images/noplag.png" class="img-responsive"/></br>
		<img src="http://ijcrt.org/niks/includes/Webp.net-resizeimage.png" class="img-responsive" alt="" data-pin-nopin="true" style="
 width: 100px;
    height: 45px;
"></br>
<img src="newcss/issn_logo.png" class="img-responsive"  alt="" data-pin-nopin="true" style="
 width: 100px;
    height: 45px;
"></br>
<img src="https://mirrors.creativecommons.org/presskit/logos/cc.logo.large.png"  class="img-responsive"  alt="" data-pin-nopin="true" style="
 width: 100px;
    height: 45px;
"></br>
<img src="https://ijcrt.org/UGC%20LOGO1.jpg" class="img-responsive"  alt="" data-pin-nopin="true" style="
 width: 100px;
    height: 45px;
">
</br>
<img src="http://ijcrt.org/Open-Access-logo.png" class="img-responsive"  alt="" data-pin-nopin="true" style="
 width: 100px;
    height: 45px;
">

<img src="peer review.jpg" class="img-responsive"  alt="" data-pin-nopin="true" style="
 width: 100px;
    height: 45px;
">
    </center>
	</div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<span class="glyphicon glyphicon-cog  " style="font-size:20px;"></span> 
		ISSN and 7.97 Impact Factor Details
		
	</div>
	
	<div class="panel-body " >
	 <button class="btn btn-outline-success" type="button">IJCRT is Peer Review </button>
	 <button class="btn btn-outline-success" type="button">Refereed </button>
	 <button class="btn btn-outline-success" type="button">Open access </button>
	 <button class="btn btn-outline-success" type="button">Monthly, </br>Multidisciplinary, </br>Multilanguage </button>
	 <button class="btn btn-outline-success" type="button">Online, Print Journal</button>
	 <button class="btn btn-outline-success" type="button">ISSN Approved</button>
	 </br>
	 <br/>
		<img class="img-responsive" src="newcss/issn_logo.png" width="85%" height="60" alt="ISSN" /><br/>
		<img class="img-responsive" src="Content/Images/barcode.png" width="85%" height="47" alt="ISSN"/><br/>
	<b> <span class="fa fa-bar-chart-o fa-2x  " style="font-size:23px;"></span> ISSN: 2320-2882 </br>  <span class="glyphicon glyphicon-fire" style="font-size:23px;"></span> Impact Factor: 7.97 and ISSN APPROVED </br> 
	<span class="glyphicon glyphicon-fire" style="font-size:23px;"></span> Journal Starting Year (ESTD) : 2013 </br> 
	<img class="img-responsive" src="http://ijcrt.org/Open-Access-logo.png" width="85%" height="47" alt="ISSN"/><br/>
	</b>
	</div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		<span class="glyphicon glyphicon-cog "style="font-size:20px;"></span> 
		Facts & Figures
	
	</div>
<div class="panel-body " >
	<div class="list-group">
		<a href="" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Impact Factor: 7.97</a>
		<a href="#" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Issues Per Year: 12 </a>
		<a href="#" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Article Submitted: 35967</a>
		<a href="#" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Article Published: 7580</a>
		<a href="#" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>No. of contributors: 27154</a>
		<a href="#" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Total Reviewers: 3580</a>
		<a href="#" class="list-group-item"><span class="glyphicon glyphicon-grain "style="font-size:23px;"></span>Total Countries: 52</a>
</div><br/>
<a href="https://ijcrt.org/JoinAsReviewer.php"><img class="img-responsive" src="http://ijcrt.org/rms_info-min.png" width="85%" height="47" alt="RMS"/></a><br/>
</div>
</div>
</strong>
