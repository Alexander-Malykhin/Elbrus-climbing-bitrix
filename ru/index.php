<?php global $APPLICATION, $MESS;
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$langFile = $_SERVER["DOCUMENT_ROOT"] . "/" . LANGUAGE_ID . "/messages.php";

if (file_exists($langFile)) {
    include $langFile;
}

$APPLICATION->SetTitle("Elbrus Climbing");
?>
    <!--MAIN-->
    <main class="main">
        <?php $APPLICATION->IncludeComponent("custom:model.window", "", []); ?>
        <!--SECTION PROGRAM-->
        <section id="program" class="program">
            <div class="container">
                <!--PROGRAM CONTENT-->
                <div class="program__content">
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news.detail",
                        "program_race",
                        array(
                            "IBLOCK_ID" => "44",
                            "IBLOCK_TYPE" => "section_race",
                            "PROPERTY_CODE" => array("NEW_PRICE_RUB", "NEW_PRICE_USD","DATE_START_RACE","SUM_PLACES"),
                            "CACHE_TIME" => "3600",
                            "CACHE_TYPE" => "A",
                            "ELEMENT_ID" => "107",
                        ),
                        false
                    ); ?>
                    <!--PROGRESS PROGRAM-->
                    <div class="progress progress__program"></div>
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "program_information",
                        array(
                            "CACHE_TIME" => "3600",
                            "CACHE_TYPE" => "A",
                            "ELEMENT_ID" => "268",
                            "IBLOCK_ID" => "33",
                            "IBLOCK_TYPE" => "section_program",
                            "NEWS_COUNT" => "1",
                            "PROPERTY_CODE" => array("PROGRAM_TEXT_" . strtoupper(LANGUAGE_ID), "START_TRAVEL_" . strtoupper(LANGUAGE_ID), "END_TRAVEL_" . strtoupper(LANGUAGE_ID),)
                        )
                    ); ?>
                    <!--PROGRAM MIDDLE-->
                    <div class="program__content-middle">
                        <div class="container">
                            <?php $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "secondary_menu",
                                array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "bottom",
                                    "COMPONENT_TEMPLATE" => "catalog_horizontal",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => "",
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "bottom",
                                    "USE_EXT" => "N"
                                )
                            ); ?>
                        </div>
                    </div>
                    <!--PROGRAM BOTTOM-->
                    <div class="program__content-bottom">
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "list_program",
                            array(
                                "IBLOCK_ID" => "34",
                                "IBLOCK_TYPE" => "section_program",
                                "ELEMENT_ID" => "77",
                                "NEWS_COUNT" => "3",
                                "CACHE_TIME" => "3600",
                                "PROPERTY_CODE" => array("ACCOMMODATION_" . strtoupper(LANGUAGE_ID), "NUTRITION_" . strtoupper(LANGUAGE_ID), "LEVEL_" . strtoupper(LANGUAGE_ID))
                            )
                        ); ?>
                    </div>
                    <!--PROGRAM ROUTE-->
                    <?php $APPLICATION->IncludeFile(
                        SITE_TEMPLATE_PATH . '/include/program/route.php',
                        array(),
                        array("MODE" => "TEXT", "NAME" => "route")
                    ) ?>
                </div>
            </div>
        </section>
        <!--SECTION ROUTE-->
        <section id="route" class="route section">
            <div class="container">
                <div class="progress progress__route"></div>
                <!--ROUTE CONTENT-->
                <div class="route__content">
                    <h2 class="section__title"><?= $MESS["ROUTE"] ?></h2>
                    <div class="route__information">
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "list_route",
                            array(
                                "CACHE_TIME" => "3600",
                                "IBLOCK_ID" => "35",
                                "IBLOCK_TYPE" => "section_route",
                                "NEWS_COUNT" => "5",
                                "PROPERTY_CODE" => array("PROGRAM_TEXT_" . strtoupper(LANGUAGE_ID))
                            )
                        ); ?>

                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:news.detail",
                            "image_route",
                            array(
                                "CACHE_TIME" => "3600",
                                "CACHE_TYPE" => "A",
                                "ELEMENT_ID" => "81",
                                "IBLOCK_ID" => "36",
                                "IBLOCK_TYPE" => "section_route",
                                "NEWS_COUNT" => "1",
                                "PROPERTY_CODE" => array("IMAGE")
                            )
                        ); ?>
                    </div>
                </div>
            </div>
        </section>
        <!--SECTION GALLERY-->
        <section id="gallery" class="gallery section">
            <div class="container">
                <!--GALLERY CONTENT-->
                <div class="gallery__content">
                    <div class="progress progress__gallery">
                    </div>
                    <h2 class="section__title"><?= $MESS["GALLERY"] ?></h2>
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "list_gallery",
                        array(
                            "CACHE_TIME" => "3600",
                            "COMPONENT_TEMPLATE" => "list_gallery",
                            "IBLOCK_ID" => "37",
                            "IBLOCK_TYPE" => "section_gallery",
                            "NEWS_COUNT" => "24",
                            "PROPERTY_CODE" => array("PHOTO")
                        )
                    ); ?>
                    <!--GALLERY SLIDER-->
                    <div class="gallery__slider">
                        <button class="gallery__slider-button gallery__slider-left"><img alt="button" src="<?= SITE_TEMPLATE_PATH ?>/images/select-arrow.png">
                        </button>
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "route_slider",
                            array(
                                "CACHE_TIME" => "3600",
                                "COMPONENT_TEMPLATE" => "route_slider",
                                "IBLOCK_ID" => "37",
                                "IBLOCK_TYPE" => "section_gallery",
                                "NEWS_COUNT" => "24",
                                "PROPERTY_CODE" => array("PHOTO")
                            )
                        ); ?>
                        <button class="gallery__slider-button gallery__slider-right"><img alt="button" src="<?= SITE_TEMPLATE_PATH ?>/images/select-arrow.png">
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!--GALLERY MOBILE-->
        <section class="gallery__mobile">
            <div class="gallery__mobile-background">
            </div>
            <button class="gallery__mobile-close"></button>
            <div class="gallery__mobile-container">
                <div class="gallery__mobile-list">
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "list_gallery_mobile",
                        array(
                            "CACHE_TIME" => "3600",
                            "COMPONENT_TEMPLATE" => "section_slider",
                            "IBLOCK_ID" => "37",
                            "IBLOCK_TYPE" => "section_gallery",
                            "NEWS_COUNT" => "24",
                            "PROPERTY_CODE" => array("PHOTO")
                        )
                    ); ?>
                </div>
            </div>
        </section>
        <!--SECTION SCHEDULE-->
        <section id="schedule" class="schedule section">
            <div class="container">
                <!--SCHEDULE CONTENT-->
                <div class="schedule__content">
                    <div class="progress progress__schedule">
                    </div>
                    <div class="schedule__content-top">
                        <h2 class="section__title"><?= $MESS["SCHEDULE"] ?></h2>
                        <button class="schedule__button-list">
                            <?= $MESS["BUTTON_SCHEDULE_SELECT"] ?>
                        </button>
                    </div>
                    <div class="schedule__list">
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "list_schedule",
                            array(
                                "CACHE_TIME" => "3600",
                                "IBLOCK_ID" => "38",
                                "IBLOCK_TYPE" => "section_description",
                                "NEWS_COUNT" => "6",
                                "PROPERTY_CODE" => array("DAYS", "DESCRIPTION_BY_DAYS_" . strtoupper(LANGUAGE_ID), "NAME_" . strtoupper(LANGUAGE_ID))
                            )
                        ); ?>
                    </div>
                    <!--SCHEDULE MOBILE-->
                    <div class="schedule__mobile-hidden">
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "list_schedule_mobile",
                            array(
                                "CACHE_TIME" => "3600",
                                "IBLOCK_ID" => "38",
                                "IBLOCK_TYPE" => "section_description",
                                "NEWS_COUNT" => "6",
                                "PROPERTY_CODE" => array("DAYS", "DESCRIPTION_BY_DAYS_" . strtoupper(LANGUAGE_ID), "NAME_" . strtoupper(LANGUAGE_ID))
                            )
                        ); ?>
                    </div>
                </div>
            </div>
        </section>
        <!--SECTION PRICE-->
        <section id="price" class="price section">
            <div class="container">
                <div class="progress progress__price">
                </div>
                <!--PRICE CONTENT-->
                <div class="price__content">
                    <h2 class="section__title"><?= $MESS["PRICE"] ?> </h2>
                    <div class="price__cards">
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "price_card",
                            array(
                                "CACHE_TIME" => "3600",
                                "CACHE_TYPE" => "A",
                                "IBLOCK_ID" => "41",
                                "IBLOCK_TYPE" => "section_price",
                                "PROPERTY_CODE" => array("NAME_" . strtoupper(LANGUAGE_ID), "PRICE_USD","PRICE_RUB", "DISCOUNTED_PRICE", "DISCOUNT_DATE", "PREPAYMENT", "PRICE_PARTICIPANT", "RULE")
                            )
                        ); ?>
                    </div>
                    <div class="price__lists">
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "included_price",
                            array(
                                "3" => false,
                                "IBLOCK_ID" => "39",
                                "IBLOCK_TYPE" => "section_price",
                                "PROPERTY_CODE" => array("TEXT_" . strtoupper(LANGUAGE_ID), "CACHE_TIME" => "3600", "CACHE_TYPE" => "A",)
                            )
                        ); ?>

                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "not_included_price",
                            array(
                                "3" => false,
                                "IBLOCK_ID" => "40",
                                "IBLOCK_TYPE" => "section_price",
                                "PROPERTY_CODE" => array("TEXT_" . strtoupper(LANGUAGE_ID), "CACHE_TIME" => "3600", "CACHE_TYPE" => "A",)
                            )
                        ); ?>
                    </div>
                </div>
            </div>
        </section>
        <!--SECTION CHOICE-->
        <section id="choice" class="choice section">
            <div class="container">
                <div class="progress progress__choice">
                </div>
                <div class="choice__content">
                    <h2 class="section__title"><?= $MESS["RACE"] ?></h2>
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "list_race",
                        array(
                            "CACHE_TIME" => "3600",
                            "CACHE_TYPE" => "A",
                            "IBLOCK_ID" => "42",
                            "IBLOCK_TYPE" => "section_race",
                            "PROPERTY_CODE" => array("DATE_START_RACE", "DATE_END_RACE", "IMAGE_INSTRUCTOR", "DESCRIPTION_INSTRUCTOR_" . strtoupper(LANGUAGE_ID), "SUM_PLACES", "OlD_PRICE", "NEW_PRICE", "DISCOUNT_DATE", "NAME_INSTRUCTOR_" . strtoupper(LANGUAGE_ID))
                        )
                    ); ?>
                </div>
            </div>
        </section>
        <!--SECTION INFORMATION-->
        <section id="information" class="information section">
            <div class="container">
                <div class="progress progress__information">
                </div>
                <!--INFORMATION CONTENT-->
                <div class="information__content">
                    <h2 class="section__title"><?= $MESS["INFORMATION"] ?></h2>
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "list_information",
                        array(
                            "CACHE_TIME" => "3600",
                            "CACHE_TYPE" => "A",
                            "IBLOCK_ID" => "43",
                            "IBLOCK_TYPE" => "information",
                            "PROPERTY_CODE" => array("TITLE_" . strtoupper(LANGUAGE_ID), "TEXT_" . strtoupper(LANGUAGE_ID))
                        )
                    ); ?>
                    <!--INFORMATION CONTENT MOBILE-->
                    <div class="information__module">
                        <div class="information__module-content">
                            <h3 class="information__module-title"> <?= $MESS["PARTICIPATE"] ?> </h3>
                            <p class="information__module-text">
                                <?= $MESS["PARTICIPATE_TEXT"] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--SECTION REVIEWS-->
        <section class="reviews section">
            <div class="container">
                <div class="progress progress__reviews">
                </div>
                <div class="reviews__content">
                    <h2 class="section__title"><?= $MESS["REVIEWS"] ?></h2>
                    <div class="reviews__image">
                        <img alt="yandex" src="<?= SITE_TEMPLATE_PATH ?>/images/yandex_main.png">
                    </div>
                    <div class="reviews__laptop">
                        <img alt="yandex" src="<?= SITE_TEMPLATE_PATH ?>/images/yandex_laptop.png">
                    </div>
                    <div class="reviews__mobile">
                        <img alt="yandex" src="<?= SITE_TEMPLATE_PATH ?>/images/yandex_mobile.png">
                    </div>
                </div>
            </div>
        </section>
        <!--SECTION MORE-->
        <section class="more section">
            <div class="container">
                <div class="progress progress__more">
                </div>
                <!--MORE CONTENT-->
                <div class="more__content">
                    <div class="more__content-top">
                        <h2 class="section__title"><?= $MESS["MORE"] ?></h2>
                        <button class="more__button-all">
                            <?= $MESS["BUTTON_MORE"] ?>
                        </button>
                    </div>
                    <div class="more__slider">
                        <div class="more__slider-container">
                            <?php $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "list_more",
                                array(
                                    "CACHE_TIME" => "3600",
                                    "CACHE_TYPE" => "N",
                                    "IBLOCK_ID" => "44",
                                    "IBLOCK_TYPE" => "more",
                                    "PROPERTY_CODE" => array("START_DATE", "END_DATE", "DESCONT", "START_PRICE", "DESCONT_PRICE", "PLACES", "ALL_INCLUSIVE_" . strtoupper(LANGUAGE_ID), "COUNTRY_" . strtoupper(LANGUAGE_ID), "NAME_" . strtoupper(LANGUAGE_ID), "NUMBER_OF_DAYS", "LENGHT_ROUTE", "LEVEL", "COMFORT", "IMAGE")
                                )
                            ); ?>
                        </div>
                        <div class="more__slider-buttons">
                            <button class="more__button-slider prev">
                                <img alt="left" src="<?= SITE_TEMPLATE_PATH ?>/images/button_slider_left.png">
                            </button>
                            <button class="more__button-slider next">
                                <img alt="right" src="<?= SITE_TEMPLATE_PATH ?>/images/button_slider_right.png">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>