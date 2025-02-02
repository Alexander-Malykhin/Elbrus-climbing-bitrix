<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
global $APPLICATION;

use Bitrix\Main\Page\Asset;

?>
<!doctype html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <?php Asset::getInstance()->addString(' <meta charset="UTF-8">') ?>
    <?php Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">') ?>
    <?php Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="ie=edge">') ?>
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/scss/index.css") ?>
    <?php $APPLICATION->ShowHead(); ?>
    <link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH ?>/images/logo.svg" type="image/x-icon">
    <title>Elbrus Climbing</title>
</head>
<body>
<div class="panel">
    <?php $APPLICATION->ShowPanel(); ?>
</div>
<!--HEADER-->
<header class="header">
    <!--HEADER BACKGROUND-->
    <div class="header__video">
        <?php $APPLICATION->IncludeComponent(
            "bitrix:news.detail",
            "header_video",
            array(
                "IBLOCK_TYPE" => "header",
                "IBLOCK_ID" => "484",
                "PROPERTY_CODE" => array("LINK_VIDEO"),
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600",
                "COMPONENT_TEMPLATE" => "header_video",
                "ELEMENT_ID" => "220",
            ),
            false
        ); ?>
    </div>
    <!--HEADER CONTENT-->
    <div class="container">
        <div class="header__content">
            <!--HEADER TOP-->
            <div class="header__content-top">
                <div class="header__logo">
                    <?php $APPLICATION->IncludeFile(
                        SITE_TEMPLATE_PATH . '/include/header/logo.php',
                        array(),
                        array("MODE" => "TEXT", "NAME" => "logo")
                    ) ?>
                </div>

                <?php $APPLICATION->IncludeComponent("bitrix:menu", "main_menu", array(
                    "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                    "MENU_CACHE_TYPE" => "A",    // Тип кеширования
                    "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                    "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                    "MENU_CACHE_GET_VARS" => "",    // Значимые переменные запроса
                    "MAX_LEVEL" => "2",    // Уровень вложенности меню
                    "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                    "USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                    "DELAY" => "N",    // Откладывать выполнение шаблона меню
                    "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                ),
                    false
                ); ?>

                <div class="header__panel">
                    <a href="#" class="comments">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/comments.png" alt="comments">
                    </a>

                    <div class="bell">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/bell.png" alt="bell">
                        <span class="bell__sum">2</span>
                    </div>

                    <div class="select">
                        <div class="select__content">
                            <span class="select__text">usd</span>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/select-arrow.png" alt="arrow-select"
                                 class="select__arrow">
                        </div>
                    </div>

                    <p class="header__language">en</p>

                    <a href="#" class="header__user">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/user.png" alt="user">
                    </a>

                    <button class="burger">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/burger.png" alt="burger">
                    </button>
                </div>
            </div>
            <!--HEADER MIDDLE-->
            <div class="header__content-middle">
                <div class="header__banner">
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "list_tour",
                        array(
                            "IBLOCK_ID" => "232",
                            "IBLOCK_TYPE" => "header",
                            "NEWS_COUNT" => "3",
                            "PROPERTY_CODE" => array(
                                "REGION",
                                "COUNTRY",
                                "ACTIVITY_TYPE",
                            ),
                            "CACHE_TIME" => "3600",
                        ),
                        false
                    ); ?>

                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news.detail",
                        "header_title",
                        array(
                            "IBLOCK_ID" => "231",
                            "IBLOCK_TYPE" => "header",
                            "IBLOCK_URL" => "",
                            "PROPERTY_CODE" => array("TITLE"),
                            "CACHE_TIME" => "3600",
                            "CACHE_TYPE" => "A",
                            "ELEMENT_ID" => "145",
                        ),
                        false
                    ); ?>

                    <button class="header__banner-button">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/triangle.png"
                             alt="button"
                             id="button_video"
                             data-play-icon="<?= SITE_TEMPLATE_PATH ?>/images/triangle.png"
                             data-pause-icon="<?= SITE_TEMPLATE_PATH ?>/images/pause.png"
                        >
                    </button>
                </div>

                <div class="header__links">
                    <p class="header__links-text">
                        Мы на связи:
                    </p>

                    <div class="header__links-list">
                        <?php $APPLICATION->IncludeFile(
                            SITE_TEMPLATE_PATH . '/include/header/whatsapp.php',
                            array(),
                            array("MODE" => "TEXT", "NAME" => "whatsapp")
                        ) ?>
                        <?php $APPLICATION->IncludeFile(
                            SITE_TEMPLATE_PATH . '/include/header/telegram.php',
                            array(),
                            array("MODE" => "TEXT", "NAME" => "telegram")
                        ) ?>
                        <?php $APPLICATION->IncludeFile(
                            SITE_TEMPLATE_PATH . '/include/header/vk_header.php',
                            array(),
                            array("MODE" => "TEXT", "NAME" => "vk")
                        ) ?>
                    </div>
                </div>
            </div>
            <!--HEADER SLIDER-->
            <?php $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "list_video_slider",
                array(
                    "IBLOCK_TYPE" => "header",
                    "IBLOCK_ID" => "230",
                    "PROPERTY_CODE" => array(
                        "LINK_VIDEO",
                    ),
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "3600",
                ),
                false
            ); ?>
            <!--HEADER BOTTOM-->
            <div class="header__content-bottom">
                <!--HEADER__DESCRIPTION-DESKTOP-->
                <?php $APPLICATION->IncludeComponent("bitrix:news.list", "level_route", array(
                    "CACHE_TIME" => "3600",
                    "CACHE_TYPE" => "A",
                    "IBLOCK_ID" => "233",
                    "IBLOCK_TYPE" => "header",
                    "PROPERTY_CODE" => array(
                        "COMFORT_COUNT",
                        "LENGHT_TOUR",
                        "LENGHT",
                        "LEVEL_COUNT",
                    ),
                ),
                    false
                ); ?>
                <div class="header__description-mobile">
                    <?php $APPLICATION->IncludeComponent("bitrix:news.list", "list_description_mobile", array(
                        "CACHE_TIME" => "3600",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "IBLOCK_ID" => "8",
                        "IBLOCK_TYPE" => "level_route",
                        "PROPERTY_CODE" => array(
                            "COMFORT_COUNT",
                            "LENGHT_TOUR",
                            "LENGHT",
                            "LEVEL_COUNT",
                        ),
                    ),
                        false,
                    );
                    ?>

                    <p class="header__description-order"><span class="accent__main">27 заездов</span> и под
                        заказ — от 78 000 ₽</p>

                    <div class="header__description-bottom">
                        <button class="header__description-button">
                            Забронировать
                        </button>

                        <button class="header__description-chat">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/comment-green.png" alt="green">
                        </button>
                    </div>
                </div>

                <p class="header__text">18.08.2022, <span class="accent__main">ещё 27 заездов</span> и
                    <span class="accent__main"> под заказ</span> — от 78 000₽</p>

                <button class="header__button">
                    Забронировать
                </button>
            </div>
        </div>
    </div>
    <!--MOBILE MENU -->
    <?php $APPLICATION->IncludeComponent("bitrix:menu", "aside_menu", array(
        "ROOT_MENU_TYPE" => "top",
        "MENU_CACHE_TYPE" => "A",
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_USE_GROUPS" => "Y",
        "MENU_CACHE_GET_VARS" => "",
        "MAX_LEVEL" => "1",
        "CHILD_MENU_TYPE" => "left",
        "USE_EXT" => "Y",
        "DELAY" => "N",
        "ALLOW_MULTI_SELECT" => "N",
    ),
        false
    ); ?>
</header>