<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult)): ?>
    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
        <img src="<?= CFile::GetFileArray($arItem['PROPERTIES']['IMAGE']['VALUE'])['SRC'] ?>" alt="image-link">
    <?php endforeach; ?>
<?php endif; ?>