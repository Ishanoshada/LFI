<?
$Db_Host = "localhost";
$Db_User = "woomyoung";
$Db_Passwd = "woomyoung9504*";
$Db_Name = "woomyoung";

//DB Connect.
$dbconn=mysql_connect($Db_Host,$Db_User,$Db_Passwd) or die("DB서버 연결에 실패하였습니다.");
$status = mysql_select_db($Db_Name,$dbconn);
@mysql_query("set names utf-8"); //핵심임
if (!$status) {
   error("DB_ERROR");
   exit;
}
?>