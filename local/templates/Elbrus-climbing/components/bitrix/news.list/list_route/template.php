<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>
<div class="route__list">
    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
        <article class="route__list-item">
            <img alt="arrow" src="<?= SITE_TEMPLATE_PATH ?>/images/arrow-top-right.png">
            <p class="route__list-text">
                <?= $arItem["PROPERTIES"]["PROGRAM_TEXT"]["VALUE"] ?>
            </p>
        </article>
    <?php endforeach; ?>
</div>
