<?
define("NEED_AUTH", true);
$_REQUEST["forgot_password"] = "yes";
$_GET["forgot_password"] = "yes";
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>
Вы уже авторизованы!
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>