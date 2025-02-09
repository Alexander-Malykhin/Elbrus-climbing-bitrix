<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
IncludeModuleLangFile(__FILE__);
?>

<div class="choice__table">
    <header class="choice__table-header">
        <h2 class="choice__table-title"><?= GetMessage("TITLE_DATA") ?></h2>
        <h2 class="choice__table-title"><?= GetMessage("TITLE_INSTRUCTOR") ?></h2>
        <h2 class="choice__table-title"><?= GetMessage("TITLE_LEFT") ?></h2>
        <h2 class="choice__table-title"><?= GetMessage("TITLE_PRICE") ?></h2>
    </header>

    <?php if (!empty($arResult)): ?>
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <?php
            $priceRub = $arItem["PROPERTIES"]["NEW_PRICE_RUB"]["VALUE"];
            $priceUsd = $arItem["PROPERTIES"]["NEW_PRICE_USD"]["VALUE"];
            $oldPriceRub = $arItem["PROPERTIES"]["OlD_PRICE_RUB"]["VALUE"];
            $oldPriceUsd = $arItem["PROPERTIES"]["OlD_PRICE_USD"]["VALUE"];
            ?>

            <article class="choice__table-row">
                <?php if ($arItem["PROPERTIES"]["DATE_START_VALUE"]["VALUE"] !== '' && $arItem["PROPERTIES"]["DATE_END_RACE"]["VALUE"] !== ''): ?>
                    <span class="choice__table-date">
                        <?= $arItem["PROPERTIES"]["DATE_START_RACE"]["VALUE"] ?>–<?= $arItem["PROPERTIES"]["DATE_END_RACE"]["VALUE"] ?>
                    </span>
                <?php else: ?>
                    <span class="choice__table-date choice__table-red">
                        <?= GetMessage("OPEN_DATA") ?>
                    </span>
                <?php endif; ?>

                <?php if ($arItem["PROPERTIES"]["IMAGE_INSTRUCTOR"]["VALUE"] !== '' && $arItem["PROPERTIES"]["NAME_INSTRUCTOR"]["VALUE"] !== '' && $arItem["PROPERTIES"]["DESCRIPTION_INSTRUCTOR"]["VALUE"] !== ''): ?>
                    <div class="choice__table-information">
                        <img alt="instructor"
                             src="<?= CFile::GetPath($arItem["PROPERTIES"]["IMAGE_INSTRUCTOR"]["VALUE"]) ?>"
                             class="choice__table-image">
                        <div class="choice__table-content">
                            <p class="choice__table-name">
                                <?= $arItem["PROPERTIES"]["NAME_INSTRUCTOR_" . strtoupper(LANGUAGE_ID)]["VALUE"] ?>
                            </p>
                            <p class="choice__table-description">
                                <?= $arItem["PROPERTIES"]["DESCRIPTION_INSTRUCTOR_" . strtoupper(LANGUAGE_ID)]["VALUE"] ?>
                            </p>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="choice__table-information">
                        <img alt="date" src="<?= $this->getFolder(); ?>/images/data.png"
                             class="choice__table-image">
                        <div class="choice__table-content">
                            <p class="choice__table-description">
                                <?= GetMessage("TEXT_RACE") ?>
                            </p>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($arItem["PROPERTIES"]["SUM_PLACES"]["VALUE"] !== ''): ?>
                    <div class="choice__table-place choice__table-red">
                        <?= $arItem["PROPERTIES"]["SUM_PLACES"]["VALUE"] ?> <?=GetMessage("CHOISE_PLACE")?>
                    </div>
                <?php else: ?>
                    <div class="choice__table-place">
                        <span class="choice__table-line"></span>
                    </div>
                <?php endif; ?>


                <div class="choice__table-price">
                    <ul>
                        <li class="choice__table-old current" data-rub="<?= $oldPriceRub ?>"
                            data-usd="<?= $oldPriceRub ?>"><?= $oldPriceRub ?> ₽
                        </li>
                        <li class="choice__table-new current" data-rub="<?= $priceRub ?>"
                            data-usd="<?= $priceRub ?>"><?= $priceRub ?> ₽
                        </li>
                        <li class="choice__table-lastdate">
                            <?=GetMessage("CHOISE_TO")?> <?= date("d.m.y", strtotime($arItem["PROPERTIES"]["DISCOUNT_DATE"]["VALUE"])) ?></li>
                    </ul>
                </div>

                <button class="choice__table-button" id="race-btn">
                    <?=GetMessage("CHOISE_BUTTON")?>
                </button>
            </article>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<script src="<?= $this->GetFolder(); ?>/script.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/currency.js"></script>