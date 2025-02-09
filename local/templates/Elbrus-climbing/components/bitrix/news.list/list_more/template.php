<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
IncludeModuleLangFile(__FILE__);
?>

<div class="more__slider-list">
    <?php if (!empty($arResult)): ?>
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <?php
            $priceRub = $arItem["PROPERTIES"]["START_PRICE_RUB"]["VALUE"];
            $priceUsd = $arItem["PROPERTIES"]["START_PRICE_USD"]["VALUE"];
            $discountPriceRub = $arItem["PROPERTIES"]["DESCONT_PRICE_RUB"]["VALUE"];
            $discountPriceUsd = $arItem["PROPERTIES"]["DESCONT_PRICE_USD"]["VALUE"];
            ?>

            <article class="more__card">
                <header class="more__card-header">
                    <div class="more__card-cover">
                        <img alt="card" src="<?= CFile::GetPath($arItem["PROPERTIES"]["IMAGE"]["VALUE"]) ?>"
                             class="more__card-image">
                    </div>

                    <div class="more__card-content">
                        <div class="more__card-top">
                            <div class="more__card-panel">
                                <span class="more__card-status"><?= $arItem["PROPERTIES"]["ALL_INCLUSIVE_" . strtoupper(LANGUAGE_ID)]["VALUE"] ?></span>
                                <span class="more__card-status"><?= $arItem["PROPERTIES"]["COUNTRY_" . strtoupper(LANGUAGE_ID)]["VALUE"] ?></span>
                            </div>

                            <button class="more__button-favorite">
                                <img alt="heart" src="<?= $this->getFolder(); ?>/images/heart.png">
                            </button>
                        </div>

                        <h3 class="more__card-title"><?= $arItem["PROPERTIES"]["NAME_" . strtoupper(LANGUAGE_ID)]["VALUE"] ?></h3>
                    </div>
                </header>

                <footer class="more__card-footer">
                    <div class="more__card-information">
                        <div class="more__card-item">
                            <span class="more__card-route"><?= $arItem["PROPERTIES"]["NUMBER_OF_DAYS"]["VALUE"] ?></span>
                            <span class="more__card-span"><?= GetMessage("CARD_DAY") ?></span>
                        </div>

                        <div class="more__card-item">
                            <span class="more__card-route"><?= $arItem["PROPERTIES"]["LENGHT_ROUTE"]["VALUE"] ?></span>
                            <span class="more__card-span"><?= GetMessage("CARD_KM") ?></span>
                        </div>

                        <div class="more__card-item">
                            <?php if ($arItem["PROPERTIES"]["LEVEL"]["VALUE"] === "1"): ?>
                                <ul class="more__card-level">
                                    <li class="more__card-column active__card-level"></li>
                                    <li class="more__card-column"></li>
                                    <li class="more__card-column"></li>
                                </ul>
                            <?php elseif ($arItem["PROPERTIES"]["LEVEL"]["VALUE"] === "2"): ?>
                                <ul class="more__card-level">
                                    <li class="more__card-column active__card-level"></li>
                                    <li class="more__card-column active__card-level"></li>
                                    <li class="more__card-column"></li>
                                </ul>
                            <?php else: ?>
                                <ul class="more__card-level">
                                    <li class="more__card-column active__card-level"></li>
                                    <li class="more__card-column active__card-level"></li>
                                    <li class="more__card-column active__card-level"></li>
                                </ul>
                            <?php endif; ?>
                            <span class="more__card-span"><?= GetMessage("CARD_LEVEL") ?></span>
                        </div>

                        <div class="more__card-item">
                            <?php if ($arItem["PROPERTIES"]["COMFORT"]["VALUE"] === "1"): ?>
                                <ul class="more__card-level">
                                    <li class="more__card-column active__card-level"></li>
                                    <li class="more__card-column"></li>
                                    <li class="more__card-column"></li>
                                </ul>
                            <?php elseif ($arItem["PROPERTIES"]["COMFORT"]["VALUE"] === "2"): ?>
                                <ul class="more__card-level">
                                    <li class="more__card-column active__card-level"></li>
                                    <li class="more__card-column active__card-level"></li>
                                    <li class="more__card-column"></li>
                                </ul>
                            <?php else: ?>
                                <ul class="more__card-level">
                                    <li class="more__card-column active__card-level"></li>
                                    <li class="more__card-column active__card-level"></li>
                                    <li class="more__card-column active__card-level"></li>
                                </ul>
                            <?php endif; ?>
                            <span class="more__card-span"><?= GetMessage("CARD_COMFORT") ?></span>
                        </div>
                    </div>

                    <div class="more__card-row">
                        <p class="more__card-date">
                            <?= $arItem["PROPERTIES"]["START_DATE"]["VALUE"] ?>,
                            <br> <?= GetMessage("CARD_MORE") ?> <?= $arItem["PROPERTIES"]["PLACES"]["VALUE"] ?> <?= GetMessage("CARD_RACE") ?>
                        </p>

                        <div class="more__card-line"></div>

                        <ul class="more__card-list">
                            <li class="more__card-price"><?= GetMessage("CARD_TO") ?> <?= $arItem["PROPERTIES"]["END_DATE"]["VALUE"] ?></li>
                            <li class="more__card-price current" data-rub="<?= $priceRub ?>" data-usd="<?= $priceRub ?>"
                            "><?= $priceRub ?> ₽</li>
                            <li class="more__card-price"><?= GetMessage("CARD_FORM") ?> <span
                                        class="more__card-accent current" data-rub="<?= $discountPriceRub ?>"
                                        data-usd="<?= $discountPriceUsd ?>"><?= $discountPriceRub ?> ₽</span>
                            </li>
                        </ul>
                    </div>

                    <div class="more__card-buttons">
                        <button class="more__button-description"><?= GetMessage("CARD_BUTTON_MORE") ?></button>
                        <button class="more__button-order"><?= GetMessage("CARD_BUTTON_RESERVE") ?></button>
                    </div>
                </footer>
            </article>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<script src="<?= SITE_TEMPLATE_PATH ?>/js/currency.js"></script>
<script src="<?= $this->getFolder(); ?>/script.js" defer></script>