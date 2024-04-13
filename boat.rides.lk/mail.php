<?php
//sendMail();
if(isset($_REQUEST['sendMail']))
{
    
//recipient
//$to = 'yohan@foresightsl.com';
$to = $_REQUEST['sendMail'];
//sender
$from = 'info@boat.rides.lk';
$fromName = 'Rides Boat';

//email subject
//$subject = 'PHP Email with Attachment by CodexWorld'; 
$subject = $_REQUEST['subject'];
$htmlContent = $_REQUEST['Conten'];

//attachment file path
$file = '';
$cc=$_REQUEST['cc'];
$bcc=$_REQUEST['bcc'];




//email body content
//$htmlContent = '<h1>PHP Email with Attachment </h1> <p>This email has sent from PHP script with attachment.</p>';


//header for sender info
$headers = "From: $fromName"." <".$from.">";

// Cc email

if($cc!='')
$headers .= "\nCc: ".$cc;

// Bcc email
if($bcc!='')
$headers .= "\nBcc: ".$bcc;


//boundary 
$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

//headers for attachment 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

//multipart boundary 
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 

//preparing attachment
if(!empty($file) > 0){
    if(is_file($file)){
        $message .= "--{$mime_boundary}\n";
        $fp =    @fopen($file,"rb");
        $data =  @fread($fp,filesize($file));

        @fclose($fp);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 
        "Content-Description: ".basename($file)."\n" .
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    }
}


$message .= "--{$mime_boundary}--";
$returnpath = "-f" . $from;

//send email
$mail = @mail($to, $subject, $message, $headers, $returnpath); 

//email sending status
echo $mail?"<div class='alert alert-success hide' role='alert'>Mail sent.</div>":"<div class='alert alert-danger hide' role='alert'>Mail sending failed.</div>";
}