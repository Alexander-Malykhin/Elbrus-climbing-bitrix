<?php global $APPLICATION;
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeModuleLangFile(__FILE__);
?>

<?php if (!empty($arResult)): ?>
    <div class="menu">
        <div class="menu__background"></div>
        <nav class="menu__aside">
            <div class="menu__column">
                <button class="menu__close">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/close_menu.png" alt="close">
                </button>

                <div class="menu__selects">
                    <?php $APPLICATION->IncludeComponent("custom:aside.switcher.currency", "", []); ?>

                    <?php
                    $APPLICATION->IncludeComponent("custom:lang.switcher.aside",
                        "default",
                        []);
                    ?>
                </div>

                <nav class="menu__list">
                    <?php foreach ($arResult as $arItem): ?>
                        <a href="<?= $arItem["LINK"] ?>">
                        <span class="menu__text menu__list-item">
                            <?= GetMessage($arItem["TEXT"]) ?>
                        </span>
                        </a>
                    <?php endforeach; ?>
                </nav>

                <?php $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "list_aside_links",
                    array(
                        "IBLOCK_TYPE" => "header",
                        "IBLOCK_ID" => "32",
                        "PROPERTY_CODE" => array(
                            "LINK", "IMAGE"
                        ),
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "3600",
                    ),
                    false
                ); ?>
            </div>
        </nav>
    </div>
<?php endif ?>

<script src="<?= $this->GetFolder(); ?>/script.js" defer></script>
