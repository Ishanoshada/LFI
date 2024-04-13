<?php
function filecount($FolderPath) {
	
    $filescount = 0;
 // Open the directory 
    $dir = opendir($FolderPath);
	// if the directory doesn't exist  return 0
    if (!$dir){return 0;}
 // Read the directory and get the files 
    while (($file = readdir($dir)) !== false) {
 
        if ($file[0] == '.'){ continue; }
		
 		//if '.' it is a sub folder and call the function recursively
        if (is_dir($FolderPath.$file)){        
			
            // Call the function if it is a folder type
            $filescount += filecount($FolderPath.$file.DIRECTORY_SEPARATOR);			
        }
        else {
            // Increment the File Count.
            $filescount++;
        }
    }    
    // close the directory
    closedir($dir);
     return $filescount;
}

if(!isset($_GET['day'])) $day=1; else $day=$_GET['day'];
//$day=2;

$file_root = 'gallery/day_'.$day.'/big';
if (!file_exists($file_root)){die("CAN NOT FIND THE IMAGES");}

//ECHO filecount($file_root);DIE();

switch ($day)
{
case 1:$theDate="יום חמישי - 11.06.2015";break;
case 2:$theDate="יום שישי - 12.06.2015";break;
case 3:$theDate="יום שבת - 13.06.2015";break;
case 4:$theDate="יום ראשון - 14.06.2015";break;
case 5:$theDate="יום שני - 15.06.2015";break;
case 6:$theDate="יום שלישי - 16.06.2015";break;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Dolomities Album</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width; initial-scale=1.0">

  <style type="text/css">

.onlymobile{display:block;}
.onlypc{display:none;}

body{
background:url("images/body_bg01.png");
}


img{ max-width:100%; height:auto;margin-top:3%}

h1{
max-width:100%;
height:auto;
font-family:arial;
font-size:35px;
direction:rtl;
color:#8f3030;
text-align:center;
font-style:italic;
}

.cassette_subject{
margin-top:5px;
max-width:100%;
height:auto;
font-family:arial;
font-size:18px;
direction:rtl;
color:#8f3030;
text-align:center;
}

a{
margin-top:5px;
max-width:100%;
height:auto;
background-color:#8f3030;
font-family:arial;
font-size:28px;
direction:rtl;
color:#ffffff;
text-align:center;
font-style:italic;
border-radius:20px;
display:block;
text-decoration:none;
padding:10px 0;
}

@media only screen and (min-width: 721px) {

.onlymobile{display:none;}
.onlypc{display:block;}


  *{margin:0;padding:0}

a{
margin-top:0;
padding:0;
}

  body{
       background:url("images/body_bg01.png");
      }
.wrapper{width:1020px;
         margin:10px auto;
}

img{margin-top:0}



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

}
  </style>
  <link rel="stylesheet" href="jquery-ui.css">
  <script src="jquery-1.11.3.js"></script>
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
 <?php echo '<script type="text/javascript">var maxpic=('.filecount($file_root).')-1;var cassette_num='.$day.';</script>';?>
 <div class="wrapper onlypc">

 <h2><?php echo "מסע אופנועים לדולומיטים, ".$theDate;?></h2>

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
		  $PictureNumber = filecount($file_root);
		  $last=101+$PictureNumber;
		  for($i=101; $i<$last; $i++)
		   {
			echo'<img src="'.$file_root.'/'.$i.'.jpg" style="z-index:'.$i.'"/>';
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

<div class="mwrapper onlymobile">
<h1>מסע אופנועים לדולומיטים<br> <span style="font-size:25px"><?php echo $theDate;?></span></h1>
<hr>
<a href="index.php">בחר/י יום אחר</a>
<?php
$file_root = 'gallery/day_'.$day.'/big';
if (file_exists($file_root))
{
  $PictureNumber = filecount($file_root);
  $last=101+$PictureNumber;
  for($i=101; $i<$last; $i++)
   {
	echo'<img src="'.$file_root.'/'.$i.'.jpg"/>';
   }
}
?>
<a href="index.php">בחר/י יום אחר</a>

</div><!-- m_wrapper -->



 </body>
</html>
