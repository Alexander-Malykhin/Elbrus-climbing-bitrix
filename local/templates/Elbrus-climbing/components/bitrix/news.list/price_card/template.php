<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<?php foreach (array_reverse($arResult["ITEMS"]) as $arItem): ?>
    <article class="card">
        <?php if ($arItem["PROPERTIES"]["NAME"]["VALUE"] === 'групповой тур'): ?>
            <div class="card__first">
                <div class="card__top">
                    <button class="card__arrow-right" id="right">
                        <img alt="arrow-right"
                             src="<?= $this->GetFolder(); ?>/images/arrow-right.png">
                    </button>

                    <h2 class="card__top-title">
                        <?= $arItem["PROPERTIES"]["NAME"]["VALUE"] ?>
                    </h2>

                    <p class="card__top-text">Место в одном <br> из запланированных <span
                                class="card__color">заездов</span></p>
                </div>

                <div class="card__middle">
                    <span class="card__first-old"><?= $arItem["PROPERTIES"]["PRICE"]["VALUE"] ?> ₽</span>
                    <p class="card__first-price">от <span
                                class="card__price"><?= $arItem["PROPERTIES"]["DISCOUNTED_PRICE"]["VALUE"] ?> ₽</span>
                    </p>
                    <p class="card__description">Цена за 1 человека,
                        скидка <?= $arItem["PROPERTIES"]["DISCOUNT_DATE"]["VALUE"] ?></p>
                </div>

                <footer class="card__bottom card__first-bottom">
                    <div class="card__line"></div>

                    <div class="card__list">
                        <p class="card__list-text">
                            Для <span class="card__accent card__color">бронирования</span> достаточно
                        </p>

                        <span class="card__list-text card__accent">
                            <?= $arItem["PROPERTIES"]["PREPAYMENT"]["VALUE"] ?> ₽
                        </span>
                    </div>

                    <?php if ($arItem["PROPERTIES"]["RULE"]["VALUE"] === "да"): ?>
                        <button class="card__first-conditions">
                            <img alt="info" src="<?= $this->GetFolder(); ?>/images/info-alt.png">
                            <span class="card__first-span">Условия отмены</span>
                        </button>
                    <?php endif; ?>
                </footer>
            </div>
        <?php else: ?>
            <div class="card__last">
                <div class="card__top">
                    <button class="card__arrow-left" id="left">
                        <img alt="arrow-left" src="/local/templates/Elbrus-climbing/images/arrow-left.png">
                    </button>

                    <h2 class="card__top-title">
                        <?= $arItem["PROPERTIES"]["NAME"]["VALUE"] ?>
                    </h2>

                    <p class="card__top-text">Для одного участника или для частной <br> группы в любые
                        согласованные даты</p>
                </div>

                <div class="card__last-middle">
                    <div class="card__last-price">
                        <span class="card__price"><?= $arItem["PROPERTIES"]["PRICE"]["VALUE"] ?> ₽</span>
                        <p class="card__description">Цена за 1 человека</p>
                    </div>

                    <div class="card__last-additionally">
                        <span class="card__accent">+<?= $arItem["PROPERTIES"]["PRICE_PARTICIPANT"]["VALUE"] ?> ₽</span>
                        <p class="card__description">Цена за каждого следующего участника</p>
                    </div>
                </div>

                <footer class="card__bottom card__last-bottom">
                    <div class="card__line"></div>
                    <ul class="card__list">
                        <li class="card__last-text">Для заказа</li>
                        <li class="card__list-text"><span class="card__accent card__color">свяжитесь с менеджером</span>
                        </li>
                    </ul>
                </footer>
            </div>
        <?php endif; ?>
    </article>
<?php endforeach; ?>

<script src="<?= $this->GetFolder(); ?>/script.js" defer></script>