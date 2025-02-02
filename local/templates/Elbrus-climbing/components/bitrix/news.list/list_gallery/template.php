<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<div class="gallery__list">
    <?php foreach (array_reverse($arResult["ITEMS"]) as $arItem): ?>
        <article class="gallery__list-item">
            <img src="<?= CFile::GetFileArray($arItem['PROPERTIES']['PHOTO']['VALUE'])['SRC'] ?>"
                 alt="<?= $arItem['NAME'] ?>" class="gallery__list-image">
        </article>
    <?php endforeach; ?>
</div>