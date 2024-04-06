<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?>
<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket", "new", array(
	"COLUMNS_LIST" => array(
			0 => "NAME",
			1 => "PRICE",
			2 => "TYPE",
			3 => "DISCOUNT",
			4 => "QUANTITY",
			5 => "DELETE",
			6 => "DELAY",
			7 => "WEIGHT",
		),
		"PATH_TO_ORDER" => "/order/",
		"HIDE_COUPON" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "Y",
		"COUNT_DISCOUNT_4_ALL_QUANTITY" => "Y",
		"USE_PREPAYMENT" => "N",
		"QUANTITY_FLOAT" => "N",
		"SET_TITLE" => "Y"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>