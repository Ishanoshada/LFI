<?php
include 'functions.php';
include 'db_connection.php';
if(!isset($_GET['cassette'])) $cassette_id=1; else $cassette_id=$_GET['cassette'];
//$cassette_id=35;
if($cassette_id<10)$cassette_id="0".$cassette_id;
$data=get_cassette_details($cassette_id);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title> gallery </title>
  <meta name="author" content="" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <style type="text/css">
  *{margin:0;padding:0}
  body{
       background:url("images/body_bg01.png");
      }
.wrapper{width:1020px;
         margin:10px auto;
}

.frame_box{
width:1020px;
height:644px;
margin:20px auto;
background-image:url("images/frame_3.jpg");
box-shadow:0px 0px 20px black;
}

.search{
height:40px;
}
.option{
width:160px;
height:40px;
background-image:url("images/text_button_bg.png");
line-height:40px;
float:right;
font-family:arial;
font-size:18px;
font-weight:bold;
color:#000000;
direction:rtl;
margin-right:160px;
text-align:center;
}

a.back{
width:160px;
height:40px;
background-image:url("images/text_button_bg.png");
line-height:40px;
float:left;
font-family:arial;
font-size:18px;
font-weight:bold;
color:#000000;
direction:rtl;
margin-left:100px;
text-align:center;
display:block;
text-decoration:none;
}

#play{
width:40px;
height:40px;
background-image:url("images/buttons_bg_play.png");
float:right;
margin-right:10px;
cursor:hand;
cursor:pointer;
}

#stop{
width:40px;
height:40px;
background-image:url("images/buttons_bg_stop.png");
float:right;
margin-right:10px;
cursor:hand;
cursor:pointer;
}

#next{
width:40px;
height:40px;
background-image:url("images/buttons_bg_play.png");
float:right;
margin-right:100px;
cursor:hand;
cursor:pointer;
}

.next_text{
width:160px;
height:40px;
background-image:url("images/text_button_bg.png");
line-height:40px;
float:right;
font-family:arial;
font-size:18px;
font-weight:bold;
color:#000000;
direction:rtl;
margin-right:5px;
text-align:center;
cursor:hand;
cursor:pointer;
}

#prev{
width:40px;
height:40px;
background-image:url("images/buttons_bg_prev.png");
float:right;
margin-right:5px;
cursor:hand;
cursor:pointer;
}

.prev_text{
width:160px;
height:40px;
background-image:url("images/text_button_bg.png");
line-height:40px;
float:right;
font-family:arial;
font-size:18px;
font-weight:bold;
color:#000000;
direction:rtl;
text-align:center;
cursor:hand;
cursor:pointer;
}


#images{
        margin-left:69px;
		width:888px;
		height:500px;
		overflow:hidden;
		float:left;
		position:relative;
		background-color:#000000;
       }
#images img{
		position:absolute;
		top:0px;
		left:0px;
       }

h2{
   width:932px;
   height:40px;
   line-height:40px;
   color:#000000;
   margin:10px auto;
   font-size:20px;
   font-family:arial;
   background-image:url("images/title_bg.png");
   text-align:center;
  }

.picindex{
  width:150px;
  height:25px;
  line-height:25px;
  position:absolute;
  z-index:200;
  top:450px;
  left:370px;
  background:url("images/picnum_bg.png");
  color:#ffffff;
  font-family:arial;
  font-size:16px;
  text-align:right;
  padding-right:20px;
}

  </style>
  <link rel="stylesheet" href="jquery-ui.css">
  <script src="jquery-1.8.3.min.js"></script>
  <script src="jquery-ui.js"></script>

  <script type="text/javascript"> 
   var playshow=false;
   var image;
   var picnum=0;
   var img_width,img_height,ratio;

   $(document).ready(function(){

$('#images img:gt(0)').css({"left":"888px"});
$(".picindex").html("תמונה "+(picnum+1)+" מתוך "+(maxpic+1));

            img_width=$('#images img:eq(0)').width()*1;
            img_height=$('#images img:eq(0)').height()*1;

			if (img_width<img_height)
			{
				$('#images img:eq(0)').css({"left":"175px","width":"450px","height":"600px"});
			}


		$('#next,.next_text').click(function(){
			$('#images img:eq('+picnum+')').animate({"left":"888px"},800);
			picnum++;
			if (picnum>maxpic){picnum=0;}

            img_width=$('#images img:eq('+picnum+')').width()*1;
            img_height=$('#images img:eq('+picnum+')').height()*1;
			ratio=img_width/img_height;
            
			if (ratio>1.7)
			{
				$('#images img:eq('+picnum+')').css({"left":"-888px"});
				$('#images img:eq('+picnum+')').animate({"left":"0px"},800);
			}
			else if (ratio>1.45)
			{
				$('#images img:eq('+picnum+')').css({"left":"-748px"});
				$('#images img:eq('+picnum+')').animate({"left":"70px"},800);
			}
			else if (ratio>1.25)
			{
				$('#images img:eq('+picnum+')').css({"left":"-666px"});
				$('#images img:eq('+picnum+')').animate({"left":"111px"},800);
			}
			else if (ratio>0.7)
			{
				$('#images img:eq('+picnum+')').css({"left":"-375px","width":"375px","height":"500px"});
				$('#images img:eq('+picnum+')').animate({"left":"256px"},800);
			}
			else if (ratio>0.65)
			{
				$('#images img:eq('+picnum+')').css({"left":"-334px","width":"334px","height":"500px"});
				$('#images img:eq('+picnum+')').animate({"left":"277px"},800);
			}
			else if (ratio>0.5)
			{
				$('#images img:eq('+picnum+')').css({"left":"-282px","width":"282px","height":"500px"});
				$('#images img:eq('+picnum+')').animate({"left":"303px"},800);
			}

			$(".picindex").html("תמונה "+(picnum+1)+" מתוך "+(maxpic+1));
		});

		$('#prev,.prev_text').click(function(){
			$('#images img:eq('+picnum+')').animate({"left":"-888px"},800);
		    picnum--;
			if (picnum<0){picnum=maxpic;}

            img_width=$('#images img:eq('+picnum+')').width()*1;
            img_height=$('#images img:eq('+picnum+')').height()*1;
			ratio=img_width/img_height;

			if (ratio>1.7)
			{
				$('#images img:eq('+picnum+')').css({"left":"888px"});
				$('#images img:eq('+picnum+')').animate({"left":"0px"},800);
			}
			else if (ratio>1.45)
			{
				$('#images img:eq('+picnum+')').css({"left":"888px"});
				$('#images img:eq('+picnum+')').animate({"left":"70px"},800);
			}
			else if (ratio>1.25)
			{
				$('#images img:eq('+picnum+')').css({"left":"888px"});
				$('#images img:eq('+picnum+')').animate({"left":"111px"},800);
			}
			else if (ratio>0.7)
			{
				$('#images img:eq('+picnum+')').css({"left":"888px","width":"375px","height":"500px"});
				$('#images img:eq('+picnum+')').animate({"left":"256px"},800);
			}
			else if (ratio>0.65)
			{
				$('#images img:eq('+picnum+')').css({"left":"888px","width":"334px","height":"500px"});
				$('#images img:eq('+picnum+')').animate({"left":"277px"},800);
			}
			else if (ratio>0.5)
			{
				$('#images img:eq('+picnum+')').css({"left":"888px","width":"282px","height":"500px"});
				$('#images img:eq('+picnum+')').animate({"left":"303px"},800);
			}

			$(".picindex").html("תמונה "+(picnum+1)+" מתוך "+(maxpic+1));
		});

		
		$('#play').click(function(){
			if (playshow==false)
			{
			playshow=true;
			t=setInterval(function(){
				$('#images img:eq('+picnum+')').animate({"left":"888px"},800);
				picnum++;
				if (picnum>maxpic){picnum=0;}
            img_width=$('#images img:eq('+picnum+')').width()*1;
            img_height=$('#images img:eq('+picnum+')').height()*1;
            
			ratio=img_width/img_height;
            
			if (ratio>1.7)
			{
				$('#images img:eq('+picnum+')').css({"left":"-888px"});
				$('#images img:eq('+picnum+')').animate({"left":"0px"},800);
			}
			else if (ratio>1.45)
			{
				$('#images img:eq('+picnum+')').css({"left":"-748px"});
				$('#images img:eq('+picnum+')').animate({"left":"70px"},800);
			}
			else if (ratio>1.25)
			{
				$('#images img:eq('+picnum+')').css({"left":"-666px"});
				$('#images img:eq('+picnum+')').animate({"left":"111px"},800);
			}
			else if (ratio>0.7)
			{
				$('#images img:eq('+picnum+')').css({"left":"-375px","width":"375px","height":"500px"});
				$('#images img:eq('+picnum+')').animate({"left":"256px"},800);
			}
			else if (ratio>0.65)
			{
				$('#images img:eq('+picnum+')').css({"left":"-334px","width":"334px","height":"500px"});
				$('#images img:eq('+picnum+')').animate({"left":"277px"},800);
			}
			else if (ratio>0.5)
			{
				$('#images img:eq('+picnum+')').css({"left":"-282px","width":"282px","height":"500px"});
				$('#images img:eq('+picnum+')').animate({"left":"303px"},800);
			}
			$(".picindex").html("תמונה "+(picnum+1)+" מתוך "+(maxpic+1));
			},3000);
			}

		});

		
		$('#stop').click(function(){
			playshow=false;
			clearInterval(t);
		});


		$('#next_gallery').click(function(){
	      window.location.href = "gallery.php?cassette="+(cassette_num+1);	
		});

		$('#prev_gallery').click(function(){
	      window.location.href = "gallery.php?cassette="+(cassette_num-1);	
		});




   });
 </script>
 </head>

 <body>
 <?php echo '<script type="text/javascript">var maxpic=('.$data['pics'].')-1;var cassette_num='.$cassette_id.';</script>';?>
 <div class="wrapper">
 <h2><?php echo "מקבץ ".$data['id'].": ".$data['subject']?></h2>




<div class="frame_box">
    <div style="clear:both;height:17px;"></div>
	<div class="search">
		<div class="option">מצגת אוטומטית</div>
		<div id="play"></div>
		<div id="stop"></div>
		<a class="back" href="table.php">חזרה לטבלה</a>
		<div style="clear:both;"></div>
	</div>
    <div style="clear:both;height:16px;"></div>
 <div id="images">

		<?php
		$file_root = 'gallery/cassette_'.$cassette_id;
		if (file_exists($file_root.'/big'))
		{
		  $PictureNumber = filecount($file_root.'/big');
		  $last=101+$PictureNumber;
		  for($i=101; $i<$last; $i++)
		   {
			echo'<img src="'.$file_root.'/big/'.$i.'.jpg" style="z-index:'.$i.'"/>';
		   }
		}
		?>
	 <div class="picindex"></div>
 </div> <!-- images -->
    <div style="clear:both;height:17px;"></div>
	<div class="search">
		<div id="next"></div>
		<div class="next_text">השקופית הבאה</div>
		<div style="width:320px;height:40px;float:right"></div>
		<div class="prev_text">השקופית הקודמת</div>
		<div id="prev"></div>
		<div style="clear:both;"></div>
	</div>




</div> <!-- frame_box -->
 <div style="clear:both"></div>
</div> <!-- wrapper -->


 </body>
</html>
