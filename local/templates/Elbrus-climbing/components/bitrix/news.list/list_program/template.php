<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<?php foreach ($arResult["ITEMS"] as $arItem): ?>
    <div class="program__conditions">
        <article class="program__conditions-item">
            <?php if ($arItem["PROPERTIES"]["LEVEL"]["VALUE"] === "1"): ?>
                <ul class="program__conditions-level">
                    <li class="program__conditions-column active__column-primary"></li>
                    <li class="program__conditions-column"></li>
                    <li class="program__conditions-column"></li>
                </ul>
            <?php elseif ($arItem["PROPERTIES"]["LEVEL"]["VALUE"] === "2"): ?>
                <ul class="program__conditions-level">
                    <li class="program__conditions-column active__column-primary"></li>
                    <li class="program__conditions-column active__column-primary"></li>
                    <li class="program__conditions-column"></li>
                </ul>
            <?php else: ?>
                <ul class="program__conditions-level">
                    <li class="program__conditions-column active__column-primary"></li>
                    <li class="program__conditions-column active__column-primary"></li>
                    <li class="program__conditions-column active__column-primary""></li>
                </ul>
            <?php endif; ?>
            <h3 class="program__conditions-title">
                Уровень сложности
            </h3>

            <p class="program__conditions-text">
                9 ходовых дней в среднем по 14 км. Вес рюкзака 15 кг. Есть возможность нанять
                портера.
                Доступно любому обычному человеку без медицинских противопоказаний. Допустимый
                возраст
                12-80 лет.
            </p>
        </article>
        <article class="program__conditions-item">
            <div class="program__conditions-image">
                <img alt="hotel" src="<?=SITE_TEMPLATE_PATH?>/images/hotel.png">
            </div>

            <h3 class="program__conditions-title">
                Проживание
            </h3>

            <p class="program__conditions-text">
                <?=$arItem["PROPERTIES"]["ACCOMMODATION"]["VALUE"]?>
            </p>

            <button class="program__conditions-button">
                Смотреть фото
            </button>
        </article>
        <article class="program__conditions-item">
            <div class="program__conditions-image">
                <img alt="nutrition" src="<?=SITE_TEMPLATE_PATH?>/images/nutrition.png">
            </div>

            <h3 class="program__conditions-title">
                Питание
            </h3>

            <p class="program__conditions-text">
                <?=$arItem["PROPERTIES"]["NUTRITION"]["VALUE"]?>
            </p>
        </article>
    </div>
<?php endforeach; ?>

