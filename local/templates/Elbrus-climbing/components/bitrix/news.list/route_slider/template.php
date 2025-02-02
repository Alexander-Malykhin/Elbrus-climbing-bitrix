<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>


<?php if(!empty($arResult)):?>
    <div class="gallery__slider-list">
        <button class="gallery__slider-close"></button>
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <article class="gallery__slider-item">
                <img src="<?= CFile::GetFileArray($arItem['PROPERTIES']['PHOTO']['VALUE'])['SRC'] ?>"
                     alt="<?= $arItem['NAME'] ?>"
                     class="image-gallery">
            </article>
        <?php endforeach; ?>
    </div>
<?php endif;?>

<script src="<?= $this->getFolder(); ?>/script.js" defer></script>