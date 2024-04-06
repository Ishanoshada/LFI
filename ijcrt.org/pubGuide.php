<style>
/*--------------------------------------------------------------
# Features
--------------------------------------------------------------*/
.features .icon-box {
  display: flex;
  align-items: center;
  padding: 20px;
  background: #f6f6f6;
  transition: ease-in-out 0.3s;
}

.features .icon-box i {
  font-size: 32px;
  padding-right: 10px;
  line-height: 1;
}

.features .icon-box h3 {
  font-weight: 700;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-size: 16px;
}

.features .icon-box h3 a {
  color: #222222;
  transition: ease-in-out 0.3s;
}

.features .icon-box h3 a:hover {
  color: #3498db;
}

.features .icon-box:hover {
  background: #eef7fc;
}

/* Featured List ---------------------- */
  /*--- Featured List   --- */
    #featured-list { padding:05px 0px; }
    #featured-list .scrolling { overflow-x:scroll; }
    #featured-list .scrolling ul { width:950px; overflow-x:scroll; padding-top:10px;  }
    #featured-list ul li { float:left; margin-bottom:15px; padding:0px 2px; }
    #featured-list ul li .inner { margin-bottom:10px;}
	#featured-list ul li .innernew { margin-bottom:10px;}
#featured-list { background:#fff; padding:40px 0px; position:relative; text-align:center;}
#featured-list ul { margin:0px; padding:0px; list-style-type:none; }
#featured-list ul li { display:inline-block; padding:0px 1px; }

#featured-list ul li .inner { width:100px; height:100px; border-radius:50%; border: 5px solid #eaeaea; display:table; margin:0px auto 15px auto; transition:-webkit-transform 0.25s ease-out,border-color 0.25s ease-out;transition:transform 0.25s ease-out,border-color 0.25s ease-out }
#featured-list ul li .innernew { height:100px;  display:table; margin:0px auto 15px auto; transition:-webkit-transform 0.25s ease-out,border-color 0.25s ease-out;transition:transform 0.25s ease-out,border-color 0.25s ease-out }

#featured-list ul li:hover .inner { border-color:#59e2fe; -webkit-transform:scale(1.1);transform:scale(1.1) }

#featured-list ul li .inner .fa { font-size:48px; line-height:90px; }
#featured-list ul li .innernew .fa { font-size:60px; line-height:90px; }

#featured-list ul li .inner a { display:block; text-decoration:none; }
#featured-list ul li .inner figure { display:table-cell; vertical-align:middle; }
#featured-list ul li .inner figure img { max-height:48px; }
#featured-list ul li h6 { color:#000; margin:0px; text-transform:uppercase; font-size:12px; }
#featured-list ul li.arrow h6 { color:red; margin:0px; text-transform:uppercase; font-size:12px; }

#featured-list ul li.arrow .innernew .fa { color: #000; }
#featured-list ul li.arrow:hover .innernew { border-color: #ed027b; }

#featured-list ul li.find .inner .fa { color: #ed027b; }
#featured-list ul li.find:hover .inner { border-color: #ed027b; }

#featured-list ul li.schools .inner .fa { color: #00bfe7; }
#featured-list ul li.schools:hover .inner { border-color: #00bfe7; }
#featured-list ul li.contact .inner .fa { color: #FC654C; }
#featured-list ul li.contact:hover .inner { border-color: #FC654C; } 
#featured-list ul li.scholarship .inner .fa { color: #00c1a1; }
#featured-list ul li.scholarship:hover .inner { border-color: #00c1a1; }
#featured-list ul li.launchpad .inner .fa { color: #ff9c00; }
#featured-list ul li.launchpad:hover .inner { border-color: #ff9c00; }
#featured-list ul li.leadership .inner .fa { color: #ed027b; }
#featured-list ul li.leadership:hover .inner { border-color: #ed027b; }
#featured-list ul li.apply .inner .fa { color: #FC654C; }
#featured-list ul li.apply:hover .inner { border-color: #FC654C; }

/* Featured List2 ---------------------- */
.featured-list2 { background:#f2f7ff; padding:40px 0px; }
.featured-list2 .featured-slider .slick-list { overflow:hidden; }
.featured-list2 .slick-slider1 .slick-prev:before { left:-65px; color:#dadada; }
.featured-list2 .slick-slider1 .slick-next:before { right:-65px; color:#dadada; }
.featured-list2 ul { margin:0px; padding:0px; list-style-type:none; padding-left:50px; }
.featured-list2 ul li .fa { float:left; border-radius:50%; display:inline-block; width:60px; height:60px; line-height:60px; text-align:center; font-size:24px; color:#fff; }
.featured-list2 ul li .detail { margin-left:80px; }
.featured-list2 ul li .detail h4 { margin-bottom:4px; font-size:20px; } 
.featured-list2 ul li.icon1 .fa { background:#00bfe7; }
.featured-list2 ul li.icon2 .fa { background:#00c1a1; }
.featured-list2 ul li.icon3 .fa { background:#FC654C; }
.featured-list2 ul li.icon4 .fa { background:#ff9c00; }
.featured-list2 ul li.icon5 .fa { background:#ed027b; }
.featured-list2 ul li.icon6 .fa { background:#58cf00; }
.featured-list2 ul li.icon7 .fa { background:#00bfe7; }
.featured-list2 ul li.icon8 .fa { background:#00c1a1; }
.featured-list2 ul li.icon9 .fa { background:#FC654C; }
/* Filters ---------------------- */
#filters { padding:20px 0px; border-bottom: 1px solid #e9e9e9; }
#filters.fixed { position:fixed; left:0px; top:0px; width:100%; background:#fff; z-index:100; }

section {
  padding: 05px 0;
  overflow: hidden;
}

.section-bg {
  background-color: #f7fbfe;
}

.section-title {
  text-align: left;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: bold;
  text-transform: uppercase;
  position: relative;
  color: #222222;
}

.section-title h2::before, .section-title h2::after {
  content: '';
  width: 50px;
  height: 2px;
  background: #3498db;
  display: inline-block;
}

.section-title h2::before {
  margin: 0 15px 10px 0;
}

.section-title h2::after {
  margin: 0 0 10px 15px;
}

.section-title p {
  margin: 15px 0 0 0;
}

/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
.services .icon-box {
  padding: 30px;
  position: relative;
  overflow: hidden;
  background: #fff;
  box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);
  transition: all 0.3s ease-in-out;
  border-radius: 8px;
  z-index: 1;
}

.services .icon-box::before {
  content: '';
  position: absolute;
  background: #e1f0fa;
  right: -60px;
  top: -40px;
  width: 100px;
  height: 100px;
  border-radius: 50px;
  transition: all 0.3s;
  z-index: -1;
}

.services .icon-box:hover::before {
  background: #3498db;
  right: 0;
  top: 0;
  width: 100%;
  height: 100%;
  border-radius: 0px;
}

.services .icon {
  margin: 0 auto 20px auto;
  padding-top: 10px;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  background: #3498db;
  transition: all 0.3s ease-in-out;
}

.services .icon i {
  font-size: 36px;
  line-height: 1;
  color: #fff;
}

.services .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}

.services .title a {
  color: #111;
}

.services .description {
  font-size: 15px;
  line-height: 28px;
  margin-bottom: 0;
}

.services .icon-box:hover .title a, .services .icon-box:hover .description {
  color: #fff;
}

.services .icon-box:hover .icon {
  background: #fff;
}

.services .icon-box:hover .icon i {
  color: #3498db;
}

/*--------------------------------------------------------------
/*--------------------------------------------------------------
# Features
--------------------------------------------------------------*/
.features .icon-box {
  display: flex;
  align-items: center;
  padding: 20px;
  background: #f6f6f6;
  transition: ease-in-out 0.3s;
}

.features .icon-box i {
  font-size: 32px;
  padding-right: 10px;
  line-height: 1;
}

.features .icon-box h3 {
  font-weight: 700;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-size: 16px;
}

.features .icon-box h3 a {
  color: #222222;
  transition: ease-in-out 0.3s;
}

.features .icon-box h3 a:hover {
  color: #3498db;
}

.features .icon-box:hover {
  background: #eef7fc;
}

</style>
<?php include("headstyle.php"); ?>
<?php include("header.php"); ?>

<div class="row">
	<header>
	<title>UGC Approved Journal, UGC Care Approved Journal, UGC-CARE list, New UGC-CARE Reference List, UGC CARE Journals, ugc care list of journal, ugc approved journal, ugc approved journal list
	</title>
	
	<meta name="description" content="UGC Approved Journal, UGC Care Approved Journal, UGC-CARE list, New UGC-CARE Reference List, UGC CARE Journals, ugc care list of journal, ugc approved journal, ugc approved journal list">
  <meta name="keywords" content="UGC Approved Journal, UGC Care Approved Journal, UGC-CARE list, New UGC-CARE Reference List, UGC CARE Journals, ugc care list of journal, ugc approved journal, ugc approved journal list">
  
		</header>
<div class="col-md-8 col-md-push-2">
<div class="panel panel-body">
<div class="col-md-12 col-lg-12">
<!-- Main Content -->
<div class="panel panel-primary">
	<div class="panel-heading">
    	<h4> <i class="fa fa-cogs fa-1x"> </i> &nbsp;  Publication Procedure & Guidelines</h4>
     </div>
	 
	 <!-- /shortcut link center -->
<section id="featured-list">
<div class="col-md-12">	<div class="panel panel-primary">
					<div class="container">
						<div class="">
						 <div class="section-title aos-init aos-animate" data-aos="fade-up">
          <h2>Publication Process</h2>
          <p>Follow this step and publish your research paper within 2 to 3 day</p></br>
		  <p><a href="submitonline.php" class="btn btn-warning "> Submit Your Paper online  </a>
	 </br>
        </div>
							<ul class="clearfix">
								<li class="apply online">
									<a href="http://ijcrt.org/submitonline.php" target="_blank" title="Apply Online">
										<div class="inner">
											 <i class="fa fa-cloud-upload" aria-hidden="true"></i>
										</div>
										<h6>Submit Article</h6>
									</a>
							  </li>
								<li class="arrow courses">
									<a href="#" title="Find Courses">
										<div class="innernew">
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i> <h6>1 Day</h6>										</div>
										
									</a>
								</li>
								<li class="find courses">
									<a href="Peer Review Policy.php" target="_blank" title="Find Courses">
										<div class="inner">
											<i class="fa fa-check-square" aria-hidden="true"></i></div>
										<h6>Peer Review Process </h6>
									</a>
								</li>
								<li class="arrow courses">
									<a href="#" title="Find Courses">
										<div class="innernew">
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i> <h6>1 Day</h6>										</div>
									</a>
								</li>
								<li class="schools">
									<a href="http://ijcrt.org/pay_form_2.php"  target="_blank" title="Schools">
										<div class="inner">
											 <div class="round-icon"><i class="fa fa-credit-card icons" aria-hidden="true"></i></div>
										</div>
										<h6>Pay Fees</h6>
									</a>
								</li>
								<li class="arrow courses">
									<a href="#" title="Find Courses">
										<div class="innernew">
											<i class="fa fa-long-arrow-right" aria-hidden="true"></i> <h6>1 Day </h6>										</div>
									</a>
								</li>
								<li class="leadership">
									<a href="http://ijcrt.org/archivelist.php" target="_blank" title="Leadership">
										<div class="inner">
											     <div class="round-icon"><i class="fa fa-upload icons" aria-hidden="true"></i></div>
										</div>
										<h6>Paper Publish online </h6>
									</a>
								</li>
								
							</ul>
					</div></div></div>
				</div>
				
				
			</section>
				<a href="submitonline.php">    <img class="img-responsive" src="call101.webp" style="
   
"> </a>

<br>  <br>

	<a href="submitonline.php">    <img class="img-responsive" src="call1031.webp" style="
   
"> </a>
			<!-- /shortcut link center -->
     <div class="panel-body">
	 <div class="row">
	  <p><a href="submitonline.php" class="btn btn-warning col-md-4 col-md-offset-4 col-xs-offset-2"> Submit Your Paper online  </a>
	  </br>
	 <a href="/ijcrt_documets/ijcrt_journal_details.pdf" target= "new" class="btn btn-warning col-md-4 col-md-offset-4 col-xs-offset-2"> Publication Guidelines  </a>
	 </br>
	 </p>
	 </div>	 	 <img src="https://ijcrt.org/howitworks_steps.png" class="img-responsive"  alt="" data-pin-nopin="true" width="100%">	 </br>	 <ol>       <a href= "Content/Files/IJCRT_PaperFormat.docx">     <li><p> Download IJCRT Paper Format and Prepare Paper based on Unique Content</p></li> </a>   <a href= "submitonline.php">          <li><p>Submission of Manuscript/Paper ( Submit your paper online ) </p></li> </a>            <li><p>Review of Your Paper within 2 Days You will get your Acceptance and Rejection Notification via Email and SMS.</p></li>         <a href= "http://ijcrt.org/Authorhome/alogin.php">     <li><p>Download and Filling Copyright Form and Undertaking Form available in Author Home and Pay Publication charges</p></li></a>            <li><p>Submission of Necessary Documents. ( send this all 5 Require Documents to <a href="mailto:editor@ijcrt.org"> editor@ijcrt.org). </a></p></li>             <li><p>After Receiving this all 5 required documents your paper will be publish within 3 to 4 Days.</p></li>			</ol>
	 <p>
     	Prospective authors are invited to submit original papers (not being considered for publication elsewhere) in standard format (that is provided) describing new theoretical and/or experimental research. Author can submit paper with have any number of pages including figures, tables, and references. Submissions will be judged on originality, significance, interest, clarity, relevance, correctness, and presentation.
    </p>
	</div>
</div>
<div class="panel panel-primary">
	<div class="panel-heading">
    	<h4> <i class="fa fa-cogs fa-1x"> </i> &nbsp;  Stages of publications procedure</h4>
     </div>
     <div class="panel-body">
	 <div class="row">
		<div class="col-md-8 col-md-offset-2">
			<a href="submitonline.php">   <img class="img-responsive" src="http://ijcrt.org/paper%20publication%20process.png"/> </a>
		</div>
	 </div>	 </br>
	 <div class="row">
		<div class="col-md-12">
			<ul class="journaldetails" style="text-align:justify; line-height:20px; padding-right:10px !important">
        	<li>Submit your research article/manuscript in .DOC/.DOCX file format to us by mail or online submission.
            	<ul>
                	<li>Submit online by clicking <b><a href="submitonline.php">here</a></b></li>
                    <li>Submit by mail to <a href="mailto:editor@ijcrt.org">editor@ijcrt.org</a> In the subject of the mail write down “Submission of Manuscript/Research Paper: Name of Paper”. also mention paper category, title of the paper, fullname of author, designation, contact number In the message body of the mail.
                    </li>
                </ul>
            </li>
            <li>Next to submission
                <ul>
                <li>Please prepare your research paper/manuscript in IJCRT paper format(click here for download the paper format).also Submitted papers MUST be written in English.</li>
                <li>our team will give the acknowlegement by mail regarding paper submission. also author will get the submitted paper unique registration id.</li>
                <li>Author can track his/her submitted paper status online by login to <b><a href="www.ijcrt.org/Authorhome/alogin.php">AUTHOR's HOME</a></b> account.for login authors have to use paper registration id and corresponding author mail id.</li>
                </ul>
            </li>
            <li>Paper accept/reject notification - Out reviewer team will evaluate submitted research paper and give Notification of research paper accepted or not.
            	<ul>
                <li>Author can also check in AUTHOR HOME account for the reviewer result.</li>
                <li>In the case of paper accepted, authors have to pay Publication fees.</li>
                <li>In the case of paper rejection, author have to make the modification as per instruction given by our reviewer committee.</li>
                </ul>
            </li>
            <li>Document submission - once payment of the publication fees, author have to submit following document in single mail to <a href="mailto:editor@ijcrt.org">editor@ijcrt.org</a>
            	<ul>
                <li>Undertaking by Author Form (scanned copy)(Handwritten signed by author) (Download)</li>
                <li>Copy right transfer form (scanned copy) (Handwritten signed by author) (Download)</li>
                <li>Identity Proof of corresponding  author only(scanned copy) (any one from election Card/PAN Card/College Identity card/Driving License)</li>
                <li>Payment Proof (pdf file of the mail i.e. received from PayUMoney if paid by payUMoney, OR Scan copy/Screen shot) also mentions Paid amount, Transaction ID, and Date of Payment in the mail whenever you send these documents.</li>
                <li>Final Manuscript/Research paper (must be in DOC file format and file name should be your registration ID)</li>
                </ul>
            </li>
            <li>Paper Publication - after receivingabove mentioned documents, our team will publish your paper in 3 to 4 of days.</li>
            <li>Certificate of publication- author can download certificates of each author, confirmation letter, and published paper from AUTHOR HOME.</li>
        </ul>
		</div>
	 </div>
	 
	</div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
    	<h4> <i class="fa fa-cogs fa-1x"> </i> &nbsp;  What is AUTHOR HOME?</h4>
     </div>
     <div class="panel-body">
<a href="http://ijcrt.org/Authorhome/alogin.php" class="btn btn-warning col-md-4 col-md-offset-4 col-xs-offset-2"> Author Home  </a>
	 </br>	 <p>
     	 </br>IJCRT provide the account to each corresponding author individual.
		Once the paper submitted to IJCRT, corresponding author got the Account credential details in author provided Email address.
		Authors can check his/her paper details, Authors Details and Paper status from account.
	</p>
	<p>
		Authors will download the soft copy of the published paper certificate, confirmation letters, and Published paper pdf file from his/her account after the paper will successfully published.
    </p>
	</div>
</div>


<div class="panel panel-primary">
	<div class="panel-heading">
    	<h4> <i class="fa fa-cogs fa-1x"> </i> &nbsp; Regarding reserach paper</h4>
     </div>
     <div class="panel-body">
     	<p><b>Authors have to consider following criteria before publish the paper.</b></p>
        <ul class="journaldetails" style="text-align:justify; line-height:20px; padding-right:10px !important">
        	<li>The manuscript submitted is author’s own original work;</li>
			<li>All authors participated in the work in a substantive way and are prepared to take public responsibility for the work;</li>
			<li>Corresponding (1st Author)Author was authorized by all authors to transfer all royalties related with the manuscript and to enter into a binding contract with IJCRT as detailed in this Copyright Release Form, and He/She will be responsible in the event of all disputes that have occurred and that may occur,</li>
			<li>All authors have seen and approved the manuscript as submitted;</li>
			<li>E-mail and street addresses of all authors have been entered into the IJCRT Journals Manuscript Submission and Evaluation System correctly,</li>
			<li>The manuscript has not been published and is not being submitted or considered for publication elsewhere;</li>
			<li>The text, illustrations, and any other materials included in the manuscript do not infringe upon any existing copyright or other rights of anyone.</li>
			<li>Authors transfer all financial rights, especially processing, reproduction, representation, printing, distribution, and online transmittal, to IJCRT with no limitation whatsoever, If IJCRT found any copyright content or any issue related to copyright in future, then IJCRT have rights to withdraw the paper without prior notice to authors</li> 
			<li>All submitted papers will be sent to reviewers for a blind review. The reviewers use the following in evaluating research papers:Novel Contribution, Originality in Thought, Inferences, Key Strengths, Key Weaknesses, Areas of Improvement, Presentation/Organization of Research
			</li>          
			</ul>
			</li>
	 </ul>	
    </div>
</div>


<div class="panel panel-primary">
	<div class="panel-heading">
    	<h4> <i class="fa fa-cogs fa-1x"> </i> &nbsp;  Number of Author for single Paper publication</h4>
     </div>
     <div class="panel-body">
     	<p>Our basic publication fee include only 5 authors per single research paper. Maximum 5 author will be allowed for single paper publication		</p>
    </div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
    	<h4> <i class="fa fa-cogs fa-1x"> </i> &nbsp;  Certificate of Paper publication</h4>
     </div>
     <div class="panel-body" >
     	<p>Our basic publication fee include softcopy of the certificates. we will provide e-certificate to each author individually, confirmation letter per research paper, and copy of the published paper with unique identification number.
		</p>
		<p>
        our basic publication charge NOT include the hardcopy of the certificates.
		</p>
		<p>
        if author wants hardcopy of the certificates, confirmation letter and copy of published paper then author have to pay additional hardcopy charges to IJCRT.
        </p>
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