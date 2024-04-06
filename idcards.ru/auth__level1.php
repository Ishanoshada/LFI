<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><?$APPLICATION->IncludeComponent(
	"webbix:main.register_level1",
	".default",
	Array(
		"SEF_MODE" => "N",
		"SHOW_FIELDS" => array("NAME", "LAST_NAME", "PERSONAL_PHONE", "WORK_COMPANY", "WORK_POSITION"),
		"REQUIRED_FIELDS" => array("NAME", "LAST_NAME", "PERSONAL_PHONE"),
		"AUTH" => "Y",
		"USE_BACKURL" => "Y",
		"SUCCESS_PAGE" => "/register/ok.php",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array()
	)
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>