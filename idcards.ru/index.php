<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "ТерраЛинк: дистрибуция");
$APPLICATION->SetPageProperty("description", "Карт-принтеры Fargo, Datacard для печати пластиковых карт. Карты, считыватели и контроллеры HID.
	Биометрические IP-считыватели/контроллеры Suprema. ПО для СКУД и макетирования карт");
$APPLICATION->SetPageProperty("keywords", "FARGO, Datacard, пластиковые карты, принтеры fargo, изготовление пластиковых карт, принтер для пластиковых карт,
	расходные fargo, принтеры карт, монохромная лента, ламинационная лента, считыватель бесконтактных карт HID, fargo hdp5000, проксимити карты купить, считыватель
	PROX, считыватели hid, брелоки-ретракторы, пластиковая наклейка, ретракторы, несущая лента Fargo");
$APPLICATION->SetTitle("Карт-принтеры Fargo, Datacard для печати пластиковых карт. Карты, считыватели и контроллеры HID.  Биометрические IP-считыватели/контроллеры Suprema. ПО для СКУД и макетирования карт");
?><div class="main-slider">
	 <?
$arSelect = Array("NAME", "PREVIEW_PICTURE", "PROPERTY_LINK");
$arFilter = Array("IBLOCK_ID" => IntVal(35), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
$res = CIBlockElement::GetList(Array("SORT" => "ASC"), $arFilter, false, Array("nPageSize" => 50), $arSelect);
while ($item = $res->GetNextElement()) {
	$arFields = $item->GetFields();
	$img_path = CFile::GetPath($arFields["PREVIEW_PICTURE"]);
	?>
	<div class="slide">
 <a class="tgm-click-on-slider" href="<?= $arFields["PROPERTY_LINK_VALUE"] ?>"><img alt="<?= $arFields["NAME"] ?>" src="<?= $img_path ?>" title="Официальный статус партнера"></a>
	</div>
	 <? } ?>
</div>
<div class="indent">
 <span style="text-align: justify;">Основанная в Канаде в 1989 году компания ТерраЛинк занимает лидирующие позиции на рынках информационных технологий России, Казахстана и других стран СНГ.&nbsp;</span><span style="text-align: justify;">Одним из ключевых направлений нашей деятельности является поставка комплексных решений в области безопасности, включая:<br>
 </span>
	<blockquote>
		<ul>
			<li><span style="text-align: justify;">принтеры для печати на пластиковых картах и расходные материалы,</span></li>
			<li>системы контроля доступа и учета рабочего времени, </li>
			<li>интегрированные системы безопасности,</li>
			<li>системы видеонаблюдения и охранной сигнализации,</li>
			<li>системы логического доступа, </li>
			<li>микрофонные системы,</li>
			<li>системы бронирования переговорных комнат. </li>
		</ul>
	</blockquote>
	 В наш каталог входят бренды международного уровня: PCSC, HID Global, HID Fargo, HID Omnikey, HID Lumidigm, Suprema, Entrust, Magicard, Evolis, Revolabs, SecuGen, 2FA, ResourceExpress, DigitalPersona, Hikvision, HiWatch, Abloy.
	<p>
		 Статус официального дистрибьютора крупнейших производителей в области безопасности: HID Global, Suprema, PCSC, Entrust, Magicard, Evolis и других, позволяет предложить нашим партнерам и конечным заказчикам оптимальные условия поставок и гибкую ценовую политику.
	</p>
	<p>
		 Кроме того, ТерраЛинк является авторизованным сервисным центром, обладающим максимальным уровнем компетенций по всем направлениям деятельности.
	</p>
	<p style="text-align: justify;">
	</p>
	 <!--</div>-->
	<div class="actions-block row mt-40">
		<div class="col-md-4 col-sm-12 col-xs-12">
			<h2 class="mb-20">Акции</h2>
			 <?
			$arSelect = Array("ID", "NAME", "PREVIEW_PICTURE", "DETAIL_PAGE_URL", "PROPERTY_ACTION_VIEW_FRONT");
			$arFilter = Array("PROPERTY_ACTION_VIEW_FRONT" => "Y", "IBLOCK_ID" => 4, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
			$res = CIBlockElement::GetList(Array("ID" => "DESC"), $arFilter, false, Array("nTopCount" => 1), $arSelect);
			while ($ob = $res->GetNextElement()) {
				$arFields = $ob->GetFields();
				$pictureSrc = CFile::GetPath($arFields["~PREVIEW_PICTURE"]);
				?>
			<div class="newstitlebox">
 <a class="newstitle main-page" href="<? echo $arFields["DETAIL_PAGE_URL"] ?>"><? echo $arFields["NAME"] ?></a>
			</div>
 <a href="<? echo $arFields["DETAIL_PAGE_URL"] ?>" class="news-box-content"> <span class="image"> <img alt="<?= $arFields["NAME"] ?>" src="<?= $pictureSrc ?>"> </span> </a>
			<? } ?>
			<div class="text-right">
 <a href="/special/" class="button">Все акции</a>
			</div>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<h2 class="mb-20">Новости</h2>
			 <?
			$arSelect = Array("ID", "NAME", "PREVIEW_PICTURE", "DETAIL_PAGE_URL");
			$arFilter = Array("IBLOCK_ID" => 2, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
			$res = CIBlockElement::GetList(Array("ACTIVE_FROM" => "DESC"), $arFilter, false, Array("nTopCount" => 1), $arSelect);
			while ($ob = $res->GetNextElement()) {
				$arFields = $ob->GetFields();
				$pictureSrc = CFile::GetPath($arFields["~PREVIEW_PICTURE"]);
				?>
			<div class="newstitlebox">
 <a class="newstitle main-page" href="<? echo $arFields["DETAIL_PAGE_URL"] ?>"><? echo $arFields["NAME"] ?></a>
			</div>
 <a href="<? echo $arFields["DETAIL_PAGE_URL"] ?>" class="news-box-content"> <span class="image"> <img alt="<?= $arFields["NAME"] ?>" src="<?= $pictureSrc ?>"> </span> </a>
			<? } ?>
			<div class="text-right">
 <a href="/news/" class="button">Все новости</a>
			</div>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12">
			<h2 class="mb-20">Мероприятия</h2>
			 <?
			$arSelect = Array("ID", "NAME", "PREVIEW_PICTURE", "DETAIL_PAGE_URL");

			global $USER;
			if ($USER->IsAdmin()) {

				//тестирование под админом
				$arFilter = Array("IBLOCK_ID" => 33, "ACTIVE" => "Y");
				$res = CIBlockElement::GetList(Array("ID" => "DESC"), $arFilter, false, Array("nTopCount" => 1), $arSelect);
			} else {
				$arFilter = Array("IBLOCK_ID" => 33, "ACTIVE" => "Y");
				$res = CIBlockElement::GetList(Array("ID" => "DESC"), $arFilter, false, Array("nTopCount" => 1), $arSelect);
			}

			while ($ob = $res->GetNextElement()) {
				$arFields = $ob->GetFields();
				$pictureSrc = CFile::GetPath($arFields["~PREVIEW_PICTURE"]);
				/* echo '<pre>';
				  var_dump($ob);
				  echo '</pre>'; */
				?>
			<div class="newstitlebox">
 <a class="newstitle main-page" href="<? echo $arFields["DETAIL_PAGE_URL"] ?>"><? echo $arFields["NAME"] ?></a>
			</div>
 <a href="<? echo $arFields["DETAIL_PAGE_URL"] ?>" class="news-box-content"> <span class="image"> <img alt="<?= $arFields["NAME"] ?>" src="<?= $pictureSrc ?>"> </span> </a>
			<? } ?>
			<div class="text-right">
 <a href="/support/events.php" class="button">Все мероприятия</a>
			</div>
		</div>
	</div>
	<div class="promo-block">
		<div class="indent">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-xs-4">
 <img src="<?= SITE_TEMPLATE_PATH ?>/img/1.png" alt="">
						</div>
						<div class="col-md-9 col-sm-8 col-xs-8">
							<div>
 <strong>Дистрибуция</strong>
								<p>
									 Дистрибуция HID Global, Fargo, Datacard, Suprema
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-xs-4">
 <img src="<?= SITE_TEMPLATE_PATH ?>/img/2.png" alt="">
						</div>
						<div class="col-md-9 col-sm-8 col-xs-8">
							<div>
 <strong>Разработка</strong>
								<p>
									 Разработка ПО для СКУД и интегрированных систем
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-xs-4">
 <img src="<?= SITE_TEMPLATE_PATH ?>/img/1.png" alt="">
						</div>
						<div class="col-md-9 col-sm-8 col-xs-8">
							<div>
 <strong>Сервисный центр</strong>
								<p>
									 Единственный авторизованный HID в СНГ сервисный центр карт-принтеров Fargo
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 <br>
 <br>
</div>
 <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>