<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult)): ?>
    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
        <a href="<?= $arItem["PROPERTIES"]["LINK"]["VALUE"] ?>">
            <img src="<?= CFile::GetFileArray($arItem['PROPERTIES']['IMAGE']['VALUE'])['SRC'] ?>" alt="header__links-item">
        </a>
    <?php endforeach; ?>
<?php endif; ?>