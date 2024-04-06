<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Календарь мероприятий");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.calendar", 
	"template1", 
	array(
		"AJAX_MODE" => "Y",
		"IBLOCK_TYPE" => "additional_content",
		"IBLOCK_ID" => "33",
		"MONTH_VAR_NAME" => "month",
		"YEAR_VAR_NAME" => "year",
		"WEEK_START" => "1",
		"DATE_FIELD" => "DATE_ACTIVE_FROM",
		"TYPE" => "EVENTS",
		"SHOW_YEAR" => "Y",
		"SHOW_TIME" => "Y",
		"TITLE_LEN" => "0",
		"SET_TITLE" => "N",
		"SHOW_CURRENT_DATE" => "Y",
		"SHOW_MONTH_LIST" => "Y",
		"NEWS_COUNT" => "0",
		"DETAIL_URL" => "event_detail.php?ELEMENT_ID=#ELEMENT_ID#",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"COMPONENT_TEMPLATE" => "template1",
		"FILTER_NAME" => "",
		"LIST_URL" => ""
	),
	false
);?> 
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>