<?php
// Initialize the session
// Initialize the session

session_start();

 
// If session variable is not set it will redirect to login page
//if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
//  header("location: login.php");
//  exit;
//}

 
//$uname=$_SESSION["username"];



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Division of Biomedical Engineering Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

<link 
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" 
  rel="stylesheet"  type='text/css'>


    <link type="text/css" href="welcome/css/bootstrap-table.css" rel="stylesheet">
<style >

.pdfobject-container { height: 20rem; width: 40rem; border: 1rem solid rgba(0,0,0,.1); }
  .table tbody tr.highlight td {
  background-color:#61adff;
color:black;
}
  .fixed-table-body  tbody tr:hover {
color: black;
background-color:   #EAEDED;


}

.fixed-table-body{
  font-size: 1em;
 
 color:black;
}
.btn-secondary{
   color: white;
    background-color: #167ce9;
    border-color: #ddd;
}
.pagination > li > a
{
    background-color: white;
    color: #167ce9 ;
}

.pagination > li > a:focus,
.pagination > li > a:hover,
.pagination > li > span:focus,
.pagination > li > span:hover
{
    color: white;
    background-color: #167ce9;
    border-color: #ddd;
}

.pagination > .active > a
{
    color: white;
    background-color: #167ce9  !Important;
    border: solid 1px #167ce9  !Important;
}

.pagination > .active > a:hover
{
    background-color: #167ce9 !Important;
    border: solid 1px #167ce9 ;
}
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 20px 0;
  border-radius: 4px;
}
.pagination > li {
  display: inline;
}
.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  margin-left: -1px;
  line-height: 1.42857143;
  color: #428bca;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid #ddd;
}
</style>


  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <img src="images/logo.png" alt="logo" width="70" height="100">
    <div class="container">
      
      <a class="navbar-brand" href="index.html"><i ></i><span>BMES</span>-MOH</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About BME </a></li>
          <li class="nav-item"><a href="departments.php" class="nav-link">Hospital Requests</a></li>
          <li class="nav-item"><a href="eng.html" class="nav-link">Top Officials</a></li>
          <li class="nav-item"><a href="tender.html" class="nav-link">Tenders in BES</a></li>
            <li class="nav-item"><a href="Supliers.html" class="nav-link">Registered Supliers</a></li>
              <li class="nav-item"><a href="Specifications.php" class="nav-link">Standard Specifications</a></li>
              <li class="nav-item"><a href="Covid19_Equipment_Spec.php" class="nav-link">Covid-19 Equipment Specifications</a></li>
                <li class="nav-item"><a href="instruments.php" class="nav-link">Instruments DB</a></li>
                <li class="nav-item active"><a href="Supplier_2020.php" class="nav-link">Suppliers 2020</a></li>
                 <li class="nav-item"><a href="estimate.php" class="nav-link">Estimate Costs</a></li>
                 <li class="nav-item"><a href="spare_parts.php" class="nav-link">Spare Parts</a></li>
                 <li class="nav-item "><a href="contract.php" class="nav-link">Service Contract</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact Details</a></li>
            <li class="nav-item"><a href="./admin/index.php" class="nav-link">Admin</a></li>
             <li class="nav-item"><a href="login/logout.php" class="nav-link">Logout</a></li>         
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/bg_6.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
        <h1>Suppliers 2020 </h1>
            
          </div>
        </div>
      </div>
    </div>



<div class="container-fluid"  id="shifts">
        
             <table
  id="table"
 
  data-filter-control="true"
  data-show-search-clear-button="true"
  data-toolbar="#toolbar"
  data-search="true"
  data-show-refresh="true"
  data-show-toggle="true"
  data-page-size='5'
  data-show-columns="true"
  data-show-columns-toggle-all="true"
  data-ser
  data-minimum-count-columns="2"
 data-side-pagination="server"
  data-pagination="true"
  data-id-field="id"
  data-page-list="[5,10, 25, 50, 100, all]"
  data-show-footer="true"
  data-url="Sup_2020/sup_list.php"
   data-click-to-select="true"
  >
 <thead>
    <tr>
          

    <th data-field="id"data-width="50" data-filter-control="input" data-sortable="true" data-valign="top" data-switchable="false">ID</th>
      <th data-field="a" data-width="100"  data-sortable="true" data-filter-control="input" data-valign="top" data-switchable="false">Name of the Equipment</th>
      <th data-field="b" data-width="200" data-filter-control="input" data-sortable="true" data-valign="top" data-switchable="false">Equipment code</th>
      <th data-field="c" data-width="100" data-filter-control="input" data-sortable="true" data-valign="top" data-switchable="false">Make</th>
      <th data-field="d" data-width="100" data-filter-control="input" data-sortable="true" data-valign="top"data-switchable="false">Model</th>
      <th data-field="e" data-width="100" data-filter-control="input" data-sortable="true" data-valign="top" data-switchable="false" >Country of origin</th>
      <th data-field="f" data-width="100" data-filter-control="input" data-sortable="true" data-valign="top" data-switchable="false">Name of the local supplier (Local agent)</th>
      <th data-field="g" data-width="100" data-filter-control="input" data-sortable="true" data-valign="top" data-switchable="false">Company Reg. No.</th>
      <th data-field="h" data-width="100" data-filter-control="input" data-sortable="true" data-valign="top" data-switchable="false">Address</th>
      <th data-field="i"  data-width="100" data-filter-control="input" data-sortable="true" data-valign="top" data-switchable="false">TP. No</th>
      <th data-field="j"   data-filter-control="input" data-sortable="true" data-valign="top" data-switchable="false">Fax No</th>
      <th data-field="k" data-width="100" data-filter-control="input" data-sortable="true"data-valign="top" data-switchable="false">Mobile No.</th>
      <th data-field="l"  data-filter-control="input" data-sortable="true" data-valign="top" data-switchable="false">e-Mail</th>
      <th data-field="m" data-width="100" data-filter-control="input" data-sortable="true" data-valign="top" data-switchable="true">Manufacture</th>
      <th data-field="n" data-width="100" data-visible="true" data-filter-control="input" data-sortable="true" data-valign="top" data-switchable="true">Manufactures Address</th>
	<th data-field="o" data-width="100" data-visible="true" data-filter-control="input" data-sortable="true" data-valign="top" data-switchable="true">Manufactures TP</th>
	<th data-field="p" data-width="100" data-visible="true" data-filter-control="input" data-sortable="true" data-valign="top" data-switchable="true">Manufactures email</th>
	<th data-field="q" data-width="100" data-visible="true" data-filter-control="input" data-sortable="true" data-valign="top" data-switchable="true">Manufactures Contact person</th>
	<th data-field="r" data-width="100" data-visible="true" data-filter-control="input" data-sortable="true" data-valign="top" data-switchable="true">NMRA Reg. No.</th>




    </tr>
  </thead>
</table>       
                      
       </div>  
<br><br><br>
       <div class="container-fluid"><div id="pdfviewer"></div></div>
        








      <br>
      <br>

<br>


       
          
  

<p>   </p>



    <footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(images/bg_5.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">BMES</h2>
              <p>Division of Biomedical Engineering Services</p>
              <p>Ministry of Health</p>
             
            </div>
          </div>
         
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="index.html" class="py-2 d-block">Home</a></li>
                <li><a href="about.html" class="py-2 d-block">About</a></li>
                <li><a href="departments.html" class="py-2 d-block">Departments</a></li>
                <li><a href="doctor.html" class="py-2 d-block">Engineers</a></li>
                <li><a href="tenders.html" class="py-2 d-block">Tenders</a></li>
                <li><a href="contact.html" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">No 27, De Saram Place, Colombo 10</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">011 269 1916
</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">besinfosystem@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

           
          </div>
        </div>
      </div>
    </footer>
    
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>




  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
 
  <script src="js/main.js"></script>


    <script type="text/javascript" src="Sup_2020/typeahead.js"></script>



    
<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>


/*<script>
   
  $(function() {
    $('#table').bootstrapTable()
  })

  $('#table').on('click', 'tbody tr', function(event) {

  $(this).addClass('highlight').siblings().removeClass('highlight');

});



window.setInterval(function ()
{
   var $table=$('#table');
      $table.bootstrapTable('refresh');
      //console.log('refreshed');
}, 300000);
</script>*/
    
  </body>
</html>