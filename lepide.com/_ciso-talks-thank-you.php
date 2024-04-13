<?php
include "session.php";
?>
<!doctype html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>CISO Talks | The Information Security Podcast from Lepide</title>
<meta content="" name="description">
<meta content="" name="keywords">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="cssrd/mainstyle-new.css" rel="stylesheet" type="text/css">
<link rel="preload" href="cssrd/mainstyle-new.css" as="style" onload="this.rel='stylesheet'">
<link href="cssrd/themestyle.css" rel="stylesheet" type="text/css">
<link rel="preload" href="cssrd/themestyle.css" as="style" onload="this.rel='stylesheet'">
<style>
a.morethemebtn{color:#74ae4d !important; text-decoration:none !important;}
a.morethemebtn:hover{color:#fff !important;}
</style>
<script type="text/javascript" src="jsrd/jquery.js"></script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KK85BMV');</script>
<!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KK85BMV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->    
<main class="sute la-new topspsno fixedwthd homepagenew home2019 newthnakyoupage21">
<?php include "headerwithnewmenu-new-form.php"; ?>
<div class="thankyoupagenew">
<div class="thankspage">
<div class="text-center">
<h1><strong>Thank You! </strong></h1>
<p class="sub-txt1" style="font-size:16px; line-height:30px;">Thank You! Our CISO Talks hosts will be in touch to discuss your request</p>


<p class="newtxtformat"><a href="https://www.lepide.com/ciso-talks.html" class="morethemebtn">Back to CISO Talks</a></p>
</div>
</div>
</div>
<footer class="downloadnewpage text-center">
<main class="container">
<p class="copyrights">Lepide<sup>®</sup> is a registered trademark of Lepide Software Private Limited. © Copyright <?php echo date("Y");  ?> Lepide Software Private Limited.</p>
</main>
</footer>
</main>
<script type="text/javascript" src="jsrd/bootstrap.js"></script> 
<script type="text/javascript" src="jsrd/owl.carousel.js"></script> 
<script type="text/javascript" src="jsrd/scroller.js"></script> 
<script type="text/javascript" src="jsrd/global-jquery.js"></script> 
<script type="text/javascript" src="js/jquery.validate.js"></script> 
<script type="text/javascript" src="jsrd/responsive-tabs.js"></script> 
<!--<script type="text/javascript" src="../js/bootstrap-clockpicker.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>--> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script> 
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
$('#verticalTabnew').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
$('#verticalTabnewnn').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script> 
<script src="jsrd/jquery.smoove.js"></script> 
<script>$('.block').smoove({offset:'40%'});</script>
<script type="text/javascript" src="https://lepide.iljmp.com/improvely.js"></script> 
<script type="text/javascript">
improvely.init('lepide', 1);
improvely.conversion({
goal: 'LAS download',
revenue: 1,
reference: ''
});
</script> 
<script type="text/javascript">
improvely.label('<?php echo  $_SESSION['c_mail']; ?>');
</script> 
<!--LeadSquared Tracking Code Start-->
<script type="text/javascript" src="https://web.mxradon.com/t/Tracker.js"></script>
<script type="text/javascript">
Asc = 20;
pidTracker('16389');
</script>
<!--LeadSquared Tracking Code End-->
<script>
$(document).ready(function() {
// Gets the video src from the data-src on each button
var $videoSrc;  
$('.video-btn').click(function() {
$videoSrc = $(this).data( "src" );
});
// when the modal is opened autoplay it  
$('#myModal').on('shown.bs.modal', function (e) {
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',$videoSrc + "?rel=0&autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
})
// stop playing the youtube video when I close the modal
$('#myModal').on('hide.bs.modal', function (e) {
// a poor man's stop video
$("#video").attr('src',$videoSrc); 
})   
// document ready  
});
</script>
</body>
</html>