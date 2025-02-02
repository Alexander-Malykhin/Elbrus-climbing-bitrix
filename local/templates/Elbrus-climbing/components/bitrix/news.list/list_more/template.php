<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<div class="more__slider-list">
    <?php if (!empty($arResult)): ?>
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <article class="more__card">
                <header class="more__card-header">
                    <div class="more__card-cover">
                        <img alt="card" src="<?= CFile::GetPath($arItem["PROPERTIES"]["IMAGE"]["VALUE"]) ?>"
                             class="more__card-image">
                    </div>

                    <div class="more__card-content">
                        <div class="more__card-top">
                            <div class="more__card-panel">
                                <span class="more__card-status"><?= $arItem["PROPERTIES"]["ALL_INCLUSIVE"]["VALUE"] ?></span>
                                <span class="more__card-status"><?= $arItem["PROPERTIES"]["COUNTRY"]["VALUE"] ?></span>
                            </div>

                            <button class="more__button-favorite">
                                <img alt="heart" src="<?= $this->getFolder(); ?>/images/heart.png">
                            </button>
                        </div>

                        <h3 class="more__card-title"><?= $arItem["PROPERTIES"]["NAME"]["VALUE"] ?>т</h3>
                    </div>
                </header>

                <footer class="more__card-footer">
                    <div class="more__card-information">
                        <div class="more__card-item">
                            <span class="more__card-route"><?= $arItem["PROPERTIES"]["NUMBER_OF_DAYS"]["VALUE"] ?></span>
                            <span class="more__card-span">дней</span>
                        </div>

                        <div class="more__card-item">
                            <span class="more__card-route"><?= $arItem["PROPERTIES"]["LENGHT_ROUTE"]["VALUE"] ?></span>
                            <span class="more__card-span">км</span>
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
                            <span class="more__card-span">сложность</span>
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
                            <span class="more__card-span">комфорт</span>
                        </div>
                    </div>

                    <div class="more__card-row">
                        <p class="more__card-date">
                            18.08.2022, <br> ещё 27 заездов <br> и под заказ
                        </p>

                        <div class="more__card-line"></div>

                        <ul class="more__card-list">
                            <li class="more__card-price">до 10.08.2022</li>
                            <li class="more__card-price">125 000 ₽</li>
                            <li class="more__card-price">от <span
                                        class="more__card-accent">110 000 ₽</span>
                            </li>
                        </ul>
                    </div>

                    <div class="more__card-buttons">
                        <button class="more__button-description">Подробнее</button>
                        <button class="more__button-order">Забронировать</button>
                    </div>
                </footer>
            </article>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<script src="<?= $this->getFolder(); ?>/script.js" defer></script>