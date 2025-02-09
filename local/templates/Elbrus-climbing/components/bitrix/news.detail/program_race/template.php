<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);


$lang = LANGUAGE_ID;
IncludeModuleLangFile(__FILE__);
?>


<?php if (!empty($arResult)): ?>
    <?php
    $priceRub = $arResult["PROPERTIES"]["START_PRICE_RUB"]["VALUE"];
    $priceUsd = $arResult["PROPERTIES"]["START_PRICE_USD"]["VALUE"];
    $discontRub = $arResult["PROPERTIES"]["DESCONT_PRICE_RUB"]["VALUE"];
    $discontUsd = $arResult["PROPERTIES"]["DESCONT_PRICE_RUB"]["VALUE"];
    ?>

    <!--PROGRAM PRICE-->
    <div class="program__price">
        <p class="program__price-date">
            <?= $arResult["PROPERTIES"]["START_DATE"]["VALUE"] ?>,<span
                    class="accent__main"><?= GetMessage("PROGRAM_MORE") ?> <?= $arResult["PROPERTIES"]["PLACES"]["VALUE"] ?>  <?=GetMessage("PROGRAM_RACE")?>
        </p>

        <span class="program__price-line"></span>
        <ul class="program__price-list">
            <li class="program__price-item"><?= GetMessage("PROGRAM_TO") ?> <?= $arResult["PROPERTIES"]["END_DATE"]["VALUE"] ?></li>
            <li class="program__price-item current" data-rub="<?= $priceRub ?>" data-usd="<?= $priceUsd ?>"><?=  $priceRub ?> ₽</li>
            <li class="program__price-item current" data-rub="<?= $discontRub ?>" data-usd="<?= $discontRub ?>"><?= GetMessage("PROGRAM_FORM") ?> <span class="program__price-accent"><?= $discontRub ?> ₽</span></li>
        </ul>
    </div>
<?php endif; ?>


<script src="<?= SITE_TEMPLATE_PATH ?>/js/currency.js"></script>