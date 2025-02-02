<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult)): ?>
    <nav class="program__menu">
        <ul class="program__list">
            <?php
            foreach ($arResult as $arItem):?>
                <li>
                    <a href="<?= $arItem["LINK"] ?>" class="program__list-link active__link">
                        <?= $arItem["TEXT"] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>


        <p class="program__text">
            18.08.2022 и <span class="accent__main">ещё 27 заездов</span> — от 78 000 ₽
        </p>

        <button class="program__button">
            Забронировать
        </button>
    </nav>
<?php endif ?>