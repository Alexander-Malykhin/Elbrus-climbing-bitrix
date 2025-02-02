<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)): ?>
    <nav class="navigation">
        <ul class="navigation__list">
            <?php
            foreach ($arResult as $arItem):?>
                <li>
                    <a href="<?= $arItem["LINK"] ?>" class="navigation__list-item">
                        <?= $arItem["TEXT"] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>

        <a href="tel:+74951087465" class="navigation__phone">
            +7 495 108 74 65
        </a>

        <button class="navigation__phone-button accent__main">
            Заказать звонок
        </button>
    </nav>
<?php endif ?>