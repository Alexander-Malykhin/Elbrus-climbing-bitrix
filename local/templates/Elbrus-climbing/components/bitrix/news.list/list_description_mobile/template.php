<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
IncludeModuleLangFile(__FILE__);
?>

<?php if (!empty($arResult)): ?>
    <div class="header__description-list">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <article class="header__description-item">
                <h4 class="header__description-title"><?=$arItem["PROPERTIES"]["LENGHT"]["VALUE"]?></h4>
                <p class="header__description-text"><?=GetMessage("LEVEL_DAYS")?></p>
            </article>
            <article class="header__description-item">
                <h4 class="header__description-title"><?=$arItem["PROPERTIES"]["LENGHT_TOUR"]["VALUE"]?></h4>
                <p class="header__description-text"><?=GetMessage("LEVEL_KM")?></p>
            </article>
            <article class="header__description-item">
                <h4 class="header__description-title"><?=$arItem["PROPERTIES"]["LEVEL_COUNT"]["VALUE"][0]?>/3</h4>
                <p class="header__description-text"><?=GetMessage("LEVEL_COUNT")?></p>
            </article>
            <article class="header__description-item">
                <h4 class="header__description-title"><?=$arItem["PROPERTIES"]["COMFORT_COUNT"]["VALUE"][0]?>/4</h4>
                <p class="header__description-text"><?=GetMessage("LEVEL_COMFORT")?></p>
            </article>
        <?php endforeach; ?>
    </div>
<?php endif; ?>








