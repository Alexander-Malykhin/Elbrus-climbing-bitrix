<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
global $APPLICATION;

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);
?>
<!doctype html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <?php Asset::getInstance()->addString(' <meta charset="UTF-8">') ?>
    <?php Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">') ?>
    <?php Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="ie=edge">') ?>
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/scss/index.css") ?>
    <?php Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js") ?>
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
                "IBLOCK_ID" => "27",
                "PROPERTY_CODE" => array("LINK_VIDEO"),
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "3600",
                "COMPONENT_TEMPLATE" => "header_video",
                "ELEMENT_ID" => "47",
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
                    "ROOT_MENU_TYPE" => "top",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => "",
                    "MAX_LEVEL" => "2",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "Y",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N",
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


                    <?php $APPLICATION->IncludeComponent("custom:header.switcher.currency", "", []); ?>

                    <?php
                    $APPLICATION->IncludeComponent("custom:lang.switcher",
                        "default",
                        []);
                    ?>

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
                            "IBLOCK_ID" => "30",
                            "IBLOCK_TYPE" => "header",
                            "NEWS_COUNT" => "3",
                            "PROPERTY_CODE" => array(
                                "REGION_" . strtoupper(LANGUAGE_ID),
                                "COUNTRY_" . strtoupper(LANGUAGE_ID),
                                "ACTIVITY_TYPE_" . strtoupper(LANGUAGE_ID),
                            ),
                            "CACHE_TIME" => "3600",
                        ),
                        false
                    ); ?>

                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news.detail",
                        "header_title",
                        array(
                            "IBLOCK_ID" => "29",
                            "IBLOCK_TYPE" => "header",
                            "PROPERTY_CODE" => array("TITLE_" . strtoupper(LANGUAGE_ID)),
                            "CACHE_TIME" => "3600",
                            "CACHE_TYPE" => "A",
                            "ELEMENT_ID" => "55",
                            "CACHE_KEY" => LANGUAGE_ID
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
                        <?= GetMessage("LINKS") ?>:
                    </p>

                    <div class="header__links-list">
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "list_header_links",
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
                </div>
            </div>
            <!--HEADER SLIDER-->
            <?php $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "list_video_slider",
                array(
                    "IBLOCK_TYPE" => "header",
                    "IBLOCK_ID" => "28",
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
                    "IBLOCK_ID" => "31",
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
                <!--HEADER__DESCRIPTION-MOBILE-->
                <div class="header__description-mobile">
                    <?php $APPLICATION->IncludeComponent("bitrix:news.list", "list_description_mobile", array(
                        "CACHE_TIME" => "3600",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "IBLOCK_ID" => "31",
                        "IBLOCK_TYPE" => "header",
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

                    <div class="header__description-bottom">
                        <button class="header__description-button" id="main-btn">
                            <?= GetMessage("BUTTON_RESERVE") ?>
                        </button>

                        <button class="header__description-chat">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/comment-green.png" alt="green">
                        </button>
                    </div>
                </div>

                <?php $APPLICATION->IncludeComponent(
                    "custom:header.race",
                    ".default",
                    array(
                        "IBLOCK_ID" => "42",
                        "IBLOCK_TYPE" => "section_race",
                        "CACHE_KEY" => LANGUAGE_ID
                    ),
                    false
                ); ?>

                <button class="header__button" id="booking-btn">
                    <?= GetMessage("BUTTON_RESERVE") ?>
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