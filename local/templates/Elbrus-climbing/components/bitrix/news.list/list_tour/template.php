<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
$this->setFrameMode(true);

$lang = LANGUAGE_ID;
?>

<?php if (!empty($arResult)): ?>
    <ul class="header__banner-list">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <li class="header__banner-item"><?= $arItem["PROPERTIES"]["COUNTRY_" . strtoupper($lang)]["VALUE"] ?></li>
            <li class="header__banner-item"><?= $arItem["PROPERTIES"]["REGION_" . strtoupper($lang)]["VALUE"] ?></li>
            <li class="header__banner-item"><?= $arItem["PROPERTIES"]["ACTIVITY_TYPE_" . strtoupper($lang)]["VALUE"] ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>