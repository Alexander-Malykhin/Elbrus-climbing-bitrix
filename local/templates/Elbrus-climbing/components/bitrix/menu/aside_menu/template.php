<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)): ?>
    <div class="menu">
        <div class="menu__background"></div>
        <nav class="menu__aside">
            <div class="menu__column">
                <button class="menu__close">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/close_menu.png" alt="close">
                </button>

                <div class="menu__selects">
                    <div class="menu__select">
                        <div class="menu__select-content">
                            <span class="menu__select-text field__currency">usd</span>
                            <button class="menu__select-currency">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/arrow_black-down.png" alt="arrow-down"
                                     class="header__select-arrow">
                            </button>
                        </div>

                        <ul class="menu__select-list currency__list">
                            <li class="menu__select-item"><span class="menu__select-text">RUB</span></li>
                            <li class="menu__select-item"><span class="menu__select-text">USD</span></li>
                        </ul>
                    </div>

                    <div class="menu__select">
                        <div class="menu__select-content">
                            <span class="menu__select-text field__language">RU</span>
                            <button class="menu__select-language">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/arrow_black-down.png" alt="arrow-down"
                                     class="header__select-arrow">
                            </button>
                        </div>

                        <ul class="menu__select-list language__list">
                            <li class="menu__select-item"><span class="menu__select-text">RU</span></li>
                            <li class="menu__select-item"><span class="menu__select-text">EN</span></li>
                        </ul>
                    </div>
                </div>

                <nav class="menu__list">
                    <?php foreach ($arResult as $arItem): ?>
                        <a href="<?= $arItem["LINK"] ?>">
                        <span class="menu__text menu__list-item">
                            <?= $arItem["TEXT"] ?>
                        </span>
                        </a>
                    <?php endforeach; ?>
                </nav>

                <div class="menu__links">
                    <span class="menu__text">Мы на связи:</span>

                    <div class="menu__links-list">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/whatsapp.png" alt="whatsapp"
                             class="header__links-item">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram.png" alt="telegram"
                             class="header__links-item">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/vk.png" alt="vk" class="header__links-item">
                    </div>

                    <a href="tel:+74951087465" class="menu__phone menu__text">+7 495 108 74 65</a>
                </div>
            </div>
        </nav>
    </div>
<?php endif ?>

<script src="<?=$this->GetFolder(); ?>/script.js" defer></script>
