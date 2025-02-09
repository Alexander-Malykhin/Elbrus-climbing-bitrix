<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
$lang = LANGUAGE_ID;
?>



<?php if (!empty($arResult["OFFER"])): ?>
    <p class="program__text">
        <?= $arResult['OFFER']['PROPERTY_DATE_START_RACE_VALUE'] ?> и <span class="accent__main">ещё <?= $arResult['OFFER']['PROPERTY_SUM_PLACES_VALUE'] ?> заездов</span> — от <?= $arResult['OFFER']['PROPERTY_NEW_PRICE_VALUE'] ?> ₽
    </p>
<?php endif; ?>



