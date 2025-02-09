<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
IncludeModuleLangFile(__FILE__);
?>

<?php foreach (array_reverse($arResult["ITEMS"]) as $arItem): ?>
    <?php
    $priceRub = $arItem["PROPERTIES"]["PRICE_RUB"]["VALUE"];
    $priceUsd = $arItem["PROPERTIES"]["PRICE_USD"]["VALUE"];
    $discountedPriceRub = $arItem["PROPERTIES"]["DISCOUNTED_PRICE_RUB"]["VALUE"];
    $discountedPriceUsd = $arItem["PROPERTIES"]["DISCOUNTED_PRICE_USD"]["VALUE"];
    $personPriceRub = $arItem["PROPERTIES"]["PRICE_PARTICIPANT_RUB"]["VALUE"];
    $personPriceUsd = $arItem["PROPERTIES"]["PRICE_PARTICIPANT_USD"]["VALUE"];
    $prepaymentRub = $arItem["PROPERTIES"]["PREPAYMENT_RUB"]["VALUE"];
    $prepaymentUsd = $arItem["PROPERTIES"]["PREPAYMENT_USD"]["VALUE"];
    ?>

    <article class="card">
        <?php if ($arItem["PROPERTIES"]["NAME_" . strtoupper(LANGUAGE_ID)]["VALUE"] === 'групповой тур' || $arItem["PROPERTIES"]["NAME_" . strtoupper(LANGUAGE_ID)]["VALUE"] === 'group tour'): ?>
            <div class="card__first">
                <div class="card__top">
                    <button class="card__arrow-right" id="right">
                        <img alt="arrow-right" src="<?= $this->GetFolder(); ?>/images/arrow-right.png">
                    </button>

                    <h2 class="card__top-title">
                        <?= $arItem["PROPERTIES"]["NAME_" . strtoupper(LANGUAGE_ID)]["VALUE"] ?>
                    </h2>

                    <p class="card__top-text"><?= GetMessage("CARD_TOP_TEXT_FIRST") ?></p>
                </div>

                <div class="card__middle">
                    <span class="card__first-old current" data-rub="<?= $priceRub ?>" data-usd="<?= $priceUsd ?>">
                        <?= $priceRub ?> ₽
                    </span>
                    <p class="card__first-price"><?= GetMessage("FROM") ?>
                        <span class="card__price current" data-rub="<?= $discountedPriceRub ?>"
                              data-usd="<?= $discountedPriceUsd ?>">
                            <?= $discountedPriceRub ?> ₽
                        </span>
                    </p>
                    <p class="card__description"><?= GetMessage("PRICE_PERSON") ?>,
                        <?= GetMessage("DISCOUNT") ?> <?= $arItem["PROPERTIES"]["DISCOUNT_DATE"]["VALUE"] ?>
                    </p>
                </div>

                <footer class="card__bottom card__first-bottom">
                    <div class="card__line"></div>

                    <div class="card__list">
                        <p class="card__list-text"><?= GetMessage("CARD_MIDDLE_TEXT_FIRST") ?></p>
                        <span class="card__list-text card__accent current"
                              data-rub="<?= $prepaymentRub ?>"
                              data-usd="<?= $prepaymentUsd ?>">
                            <?= $prepaymentRub ?> ₽
                        </span>
                    </div>

                    <?php if ($arItem["PROPERTIES"]["RULE"]["VALUE"] === "да"): ?>
                        <button class="card__first-conditions">
                            <img alt="info" src="<?= $this->GetFolder(); ?>/images/info-alt.png">
                            <span class="card__first-span"><?= GetMessage("CARD_BOTTOM_TEXT_FIRST") ?></span>
                        </button>
                    <?php endif; ?>
                </footer>
            </div>
        <?php else: ?>
            <div class="card__last">
                <div class="card__top">
                    <button class="card__arrow-left" id="left">
                        <img alt="arrow-left" src="<?= $this->GetFolder(); ?>/images/arrow-left.png">
                    </button>

                    <h2 class="card__top-title">
                        <?= $arItem["PROPERTIES"]["NAME_" . strtoupper(LANGUAGE_ID)]["VALUE"] ?>
                    </h2>

                    <p class="card__top-text"><?= GetMessage("CARD_TOP_TEXT_LAST") ?></p>
                </div>

                <div class="card__last-middle">
                    <div class="card__last-price">
                        <span class="card__price current"
                              data-rub="<?= $priceRub ?>"
                              data-usd="<?= $priceUsd ?>">
                            <?= $priceRub ?> ₽
                        </span>
                        <p class="card__description"><?= GetMessage("PRICE_PERSON") ?></p>
                    </div>

                    <div class="card__last-additionally">
                        <span class="card__accent current"
                              data-rub="<?= $personPriceRub ?>"
                              data-usd="<?= $personPriceUsd ?>">
                            + <?= $personPriceRub ?> ₽
                        </span>
                        <p class="card__description"><?= GetMessage("CARD_MIDDLE_TEXT_LAST") ?></p>
                    </div>
                </div>

                <footer class="card__bottom card__last-bottom">
                    <div class="card__line"></div>
                    <ul class="card__list">
                        <?= GetMessage("CARD_BOTTOM_TEXT_LAST") ?>
                    </ul>
                </footer>
            </div>
        <?php endif; ?>
    </article>
<?php endforeach; ?>

<script src="<?= SITE_TEMPLATE_PATH ?>/js/currency.js"></script>
<script src="<?= $this->GetFolder(); ?>/script.js" defer></script>
