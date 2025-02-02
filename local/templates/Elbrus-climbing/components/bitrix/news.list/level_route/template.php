<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<div class="header__description-desktop">
    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
        <article class="header__description-item">
            <div class="header__description-title"><?= $arItem["PROPERTIES"]["LENGHT"]["VALUE"] ?> <span
                        class="header__description-text">км</span>
            </div>
            <p class="header__description-text">Протяженность</p>
        </article>

        <article class="header__description-item">
            <div class="header__description-title"><?= $arItem["PROPERTIES"]["LENGHT_TOUR"]["VALUE"] ?> <span
                        class="header__description-text">дней</span>
            </div>
            <p class="header__description-text">Продолжительность</p>
        </article>

        <article class="header__description-item">
            <?php if ($arItem["PROPERTIES"]["LEVEL_COUNT"]["VALUE"] === "1"): ?>
                <ul class="header__description-level">
                    <li class="header__description-column active__column-main"></li>
                    <li class="header__description-column"></li>
                    <li class="header__description-column"></li>
                </ul>
            <?php elseif ($arItem["PROPERTIES"]["LEVEL_COUNT"]["VALUE"] === "2"): ?>
                <ul class="header__description-level">
                    <li class="header__description-column active__column-main"></li>
                    <li class="header__description-column  active__column-main"></li>
                    <li class="header__description-column"></li>
                </ul>
            <?php else: ?>
                <ul class="header__description-level">
                    <li class="header__description-column active__column-main"></li>
                    <li class="header__description-column  active__column-main"></li>
                    <li class="header__description-column active__column-main"></li>
                </ul>
            <?php endif; ?>
            <p class="header__description-text">Сложность</p>
        </article>

        <article class="header__description-item">
            <?php if ($arItem["PROPERTIES"]["COMFORT_COUNT"]["VALUE"] === "1"): ?>
                <ul class="header__description-level">
                    <li class="header__description-column active__column-main"></li>
                    <li class="header__description-column"></li>
                    <li class="header__description-column"></li>
                </ul>
            <?php elseif ($arItem["PROPERTIES"]["COMFORT_COUNT"]["VALUE"] === "2"): ?>
                <ul class="header__description-level">
                    <li class="header__description-column active__column-main"></li>
                    <li class="header__description-column  active__column-main"></li>
                    <li class="header__description-column"></li>
                </ul>
            <?php elseif ($arItem["PROPERTIES"]["COMFORT_COUNT"]["VALUE"] === "3"): ?>
                <ul class="header__description-level">
                    <li class="header__description-column active__column-main"></li>
                    <li class="header__description-column  active__column-main"></li>
                    <li class="header__description-column active__column-main"></li>
                </ul>
            <?php else: ?>
                <ul class="header__description-level">
                    <li class="header__description-column"></li>
                    <li class="header__description-column"></li>
                    <li class="header__description-column"></li>
                </ul>
            <?php endif; ?>

            <p class="header__description-text">Комфорт</p>
        </article>
    <?php endforeach; ?>
</div>


