<?php
//ob_start("ob_gzhandler"); 
session_start();
//header("Cache-Control: no-store, no-cache, must-revalidate");
//header("Content-Type: text/html; charset=utf-8");

$referer = isset($_SERVER["HTTP_REFERER"])? $_SERVER["HTTP_REFERER"]:'';
if($referer =='')
{
$referer = isset($_SERVER['HTTP_ORIGIN'])? $_SERVER['HTTP_ORIGIN'] :'';
}
$referer = urldecode($referer);
//$referer = urldecode($referer);
$referer = str_replace("?utm_source", "?&utm_source", $referer);
$current = "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
$current = str_replace("?utm_source", "?&utm_source", $current);
if($referer != "") {
$referer_domain = url_to_domain($referer);
$current_domain = url_to_domain($current);
if($referer_domain != $current_domain) {
$_SESSION["referer"] = $referer;
$_SESSION["source"] = url_to_source($referer, $current);
}
}
//echo $_SESSION["referer"] . " - " . $_SESSION["source"];
function url_to_domain($url) {
$source_url = parse_url($url);
return $source_url["host"];
}
function url_to_source($referer, $current) {
$adurl = "";
$utm_source = "";
$utm_medium = "";
$utm_campaign = "" ;
//referer
/* parse_str($referer, $output_referer);
$adurl = $output["adurl"];
$utm_source = $output_referer["utm_source"];
$utm_medium = $output_referer["utm_medium"];
$utm_campaign = $output_referer["utm_campaign"]; */
//current
/* if($utm_source == "" && $utm_medium == "" && $utm_campaign == "") { */
parse_str($current, $output_current);
if(isset($adurl) && isset($utm_source) && isset($utm_medium) && isset($utm_compaign))
{
$adurl = $output_current["adurl"];
$utm_source = $output_current["utm_source"];
$utm_medium = $output_current["utm_medium"];
$utm_campaign = $output_current["utm_campaign"];
}
/* } */
return "adurl = " . $adurl . " ; utm_source = " . $utm_source . ";  utm_medium = " . $utm_medium . "; utm_campaign = " . $utm_campaign;
}
?>