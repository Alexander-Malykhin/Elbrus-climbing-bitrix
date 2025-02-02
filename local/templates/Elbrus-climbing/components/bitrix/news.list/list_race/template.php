<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<div class="choice__table">
    <header class="choice__table-header">
        <h2 class="choice__table-title">Дата заезда</h2>
        <h2 class="choice__table-title">Инструктор</h2>
        <h2 class="choice__table-title">Осталось</h2>
        <h2 class="choice__table-title">Цена</h2>
    </header>

    <?php if (!empty($arResult)): ?>
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <article class="choice__table-row">
                <?php if ($arItem["PROPERTIES"]["DATE_START_VALUE"]["VALUE"] !== '' && $arItem["PROPERTIES"]["DATE_END_RACE"]["VALUE"] !== ''): ?>
                    <span class="choice__table-date">
                        <?= $arItem["PROPERTIES"]["DATE_START_RACE"]["VALUE"] ?>–<?= $arItem["PROPERTIES"]["DATE_END_RACE"]["VALUE"] ?>
                    </span>
                <?php else: ?>
                    <span class="choice__table-date choice__table-red">
                        Открытая дата
                    </span>
                <?php endif; ?>

                <?php if ($arItem["PROPERTIES"]["IMAGE_INSTRUCTOR"]["VALUE"] !== '' && $arItem["PROPERTIES"]["NAME_INSTRUCTOR"]["VALUE"] !== '' && $arItem["PROPERTIES"]["DESCRIPTION_INSTRUCTOR"]["VALUE"] !== ''): ?>
                    <div class="choice__table-information">
                        <img alt="instructor"
                             src="<?= CFile::GetPath($arItem["PROPERTIES"]["IMAGE_INSTRUCTOR"]["VALUE"]) ?>"
                             class="choice__table-image">
                        <div class="choice__table-content">
                            <p class="choice__table-name">
                                <?= $arItem["PROPERTIES"]["NAME_INSTRUCTOR"]["VALUE"] ?>
                            </p>
                            <p class="choice__table-description">
                                <?= $arItem["PROPERTIES"]["DESCRIPTION_INSTRUCTOR"]["VALUE"] ?>
                            </p>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="choice__table-information">
                        <img alt="date" src="<?= $this->getFolder(); ?>/images/data.png"
                             class="choice__table-image">
                        <div class="choice__table-content">
                            <p class="choice__table-description">
                                Забронировать этот тур без привязки к определённой дате и выбрать заезд позже в
                                любое время без дополнительной оплаты.
                            </p>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($arItem["PROPERTIES"]["SUM_PLACES"]["VALUE"] !== ''): ?>
                    <div class="choice__table-place choice__table-red">
                        <?= $arItem["PROPERTIES"]["SUM_PLACES"]["VALUE"] ?> место
                    </div>
                <?php else: ?>
                    <div class="choice__table-place">
                        <span class="choice__table-line"></span>
                    </div>
                <?php endif; ?>


                <div class="choice__table-price">
                    <ul>
                        <li class="choice__table-old"><?= $arItem["PROPERTIES"]["OlD_PRICE"]["VALUE"] ?> ₽</li>
                        <li class="choice__table-new"><?= $arItem["PROPERTIES"]["NEW_PRICE"]["VALUE"] ?> ₽</li>
                        <li class="choice__table-lastdate">
                            до <?= date("d.m.y", strtotime($arItem["PROPERTIES"]["DISCOUNT_DATE"]["VALUE"])) ?></li>
                    </ul>
                </div>

                <button class="choice__table-button">
                    Забронировать
                </button>
            </article>
        <?php endforeach; ?>
    <?php endif; ?>
</div>