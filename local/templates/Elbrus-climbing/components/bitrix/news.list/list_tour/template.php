<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult)): ?>
    <ul class="header__banner-list">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <li class="header__banner-item"><?= $arItem["PROPERTIES"]["COUNTRY"]["VALUE"] ?></li>
            <li class="header__banner-item"><?= $arItem["PROPERTIES"]["REGION"]["VALUE"] ?></li>
            <li class="header__banner-item"><?= $arItem["PROPERTIES"]["ACTIVITY_TYPE"]["VALUE"] ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>