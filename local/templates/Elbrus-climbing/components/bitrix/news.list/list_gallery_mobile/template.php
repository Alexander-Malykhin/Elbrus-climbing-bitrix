<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult)): ?>
    <?php foreach (array_reverse($arResult["ITEMS"]) as $arItem): ?>
        <article class="gallery__mobile-item">
            <img src="<?= CFile::GetFileArray($arItem['PROPERTIES']['PHOTO']['VALUE'])['SRC'] ?>"
                 alt="<?= $arItem['NAME'] ?>" class="gallery__mobile-image">
        </article>
    <?php endforeach; ?>
<?php endif; ?>
