<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
$lang = LANGUAGE_ID;
IncludeModuleLangFile(__FILE__);
$priceRub = $arResult['OFFER']['PROPERTY_NEW_PRICE_RUB_VALUE'];
$priceUsd = $arResult['OFFER']['PROPERTY_NEW_PRICE_USD_VALUE'];

?>

<?php if (!empty($arResult["OFFER"])): ?>
    <p class="header__text"> <?= $arResult['OFFER']['PROPERTY_DATE_START_RACE_VALUE'] ?>, <span class="accent__main"><?=GetMessage("TEXT_MORE")?> <?= $arResult['OFFER']['PROPERTY_SUM_PLACES_VALUE'] ?> <?=GetMessage("TEXT_PLACES")?></span>
       <?=GetMessage("TEXT_REQUEST")?> </span> — <span class="current header__text" data-rub="<?= $priceRub ?>" data-usd="<?= $priceUsd ?>"><?= $priceRub ?> ₽</span></p>
<?php endif; ?>

<script src="<?= SITE_TEMPLATE_PATH ?>/js/currency.js"></script>