<?php
global $APPLICATION;
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Elbrus Climbing");
?><!--MAIN-->
<main class="main">
    <!--SECTION PROGRAM-->
    <section id="program" class="program">
        <div class="container">
            <!--PROGRAM CONTENT-->
            <div class="program__content">
                <!--PROGRAM PRICE-->
                <div class="program__price">
                    <p class="program__price-date">
                        18.08.2022, <span class="accent__main">ещё 27 заездов</span> <br> возможен индивидуальный
                        тур
                        <br> и тур под заказ для частных групп
                    </p>

                    <span class="program__price-line"></span>

                    <ul class="program__price-list">
                        <li class="program__price-item">до 10.08.2022</li>
                        <li class="program__price-item">125 000 ₽</li>
                        <li class="program__price-item">от <span class="program__price-accent">110 000 ₽</span>
                        </li>
                    </ul>
                </div>
                <!--PROGRESS PROGRAM-->
                <div class="progress progress__program"></div>
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "program_information",
                    array(
                        "CACHE_TIME" => "3600",
                        "CACHE_TYPE" => "A",
                        "IBLOCK_ID" => "234",
                        "IBLOCK_TYPE" => "section_program",
                        "NEWS_COUNT" => "20",
                        "ELEMENT_ID" => "157",
                        "PROPERTY_CODE" => array(
                            "PROGRAM_TEXT",
                            "START_TRAVEL",
                            "END_TRAVEL",
                        ),
                    ),
                    false
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
                            "IBLOCK_ID" => "235",
                            "IBLOCK_TYPE" => "section_program",
                            "NEWS_COUNT" => "3",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "3600",
                            "PROPERTY_CODE" => array("ACCOMMODATION", "NUTRITION", "LEVEL"),
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
                <h2 class="section__title">
                    Что будем делать?
                </h2>

                <div class="route__information">
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "list_route",
                        array(
                            "CACHE_TIME" => "3600",
                            "IBLOCK_ID" => "236",
                            "IBLOCK_TYPE" => "section_route",
                            "NEWS_COUNT" => "5",
                            "PROPERTY_CODE" => array("PROGRAM_TEXT"),
                        )
                    ); ?>

                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news.detail",
                        "image_route",
                        array(
                            "CACHE_TIME" => "3600",
                            "CACHE_TYPE" => "A",
                            "ELEMENT_ID" => "169",
                            "IBLOCK_ID" => "237",
                            "IBLOCK_TYPE" => "section_route",
                            "IBLOCK_URL" => "",
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
                <div class="progress progress__gallery"></div>
                <h2 class="section__title">
                    Фотографии с маршрута
                </h2>
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "list_gallery",
                    array(
                        "COMPONENT_TEMPLATE" => "list_gallery",
                        "IBLOCK_TYPE" => "section_gallery",
                        "IBLOCK_ID" => "238",
                        "NEWS_COUNT" => "24",
                        "PROPERTY_CODE" => array(
                            "PHOTO",
                        ),
                        "CACHE_TIME" => "3600",
                    ),
                    false
                ); ?>
                <!--GALLERY SLIDER-->
                <div class="gallery__slider">
                    <button class="gallery__slider-button gallery__slider-left">
                        <img alt="button" src="<?= SITE_TEMPLATE_PATH?>/images/select-arrow.png">
                    </button>
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "route_slider",
                        array(
                            "COMPONENT_TEMPLATE" => "route_slider",
                            "IBLOCK_TYPE" => "section_gallery",
                            "IBLOCK_ID" => "238",
                            "NEWS_COUNT" => "24",
                            "PROPERTY_CODE" => array(
                                "PHOTO",
                            ),
                            "CACHE_TIME" => "3600",
                        ),
                        false
                    ); ?>
                    <button class="gallery__slider-button gallery__slider-right">
                        <img alt="button" src="<?= SITE_TEMPLATE_PATH?>/images/select-arrow.png">
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!--GALLERY MOBILE-->
    <section class="gallery__mobile">
        <div class="gallery__mobile-background"></div>
        <button class="gallery__mobile-close"></button>
        <div class="gallery__mobile-container">
            <div class="gallery__mobile-list">
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "list_gallery_mobile",
                    array(
                        "COMPONENT_TEMPLATE" => "section_slider",
                        "IBLOCK_TYPE" => "section_gallery",
                        "IBLOCK_ID" => "238",
                        "NEWS_COUNT" => "24",
                        "PROPERTY_CODE" => array(
                            "PHOTO",
                        ),
                        "CACHE_TIME" => "3600",
                    ),
                    false
                ); ?>
            </div>
        </div>
    </section>
    <!--SECTION SCHEDULE-->
    <section id="schedule" class="schedule section">
        <div class="container">
            <!--SCHEDULE CONTENT-->
            <div class="schedule__content">
                <div class="progress progress__schedule"></div>
                <div class="schedule__content-top">
                    <h2 class="section__title">
                        Описание по дням
                    </h2>
                    <button class="schedule__button-list">
                        Раскрыть все дни
                    </button>
                </div>
                <div class="schedule__list">
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "list_schedule",
                        array(
                            "IBLOCK_TYPE" => "section_description",
                            "IBLOCK_ID" => "239",
                            "NEWS_COUNT" => "6",
                            "PROPERTY_CODE" => array(
                                "DAYS", "DESCRIPTION_BY_DAYS","NAME"
                            ),
                            "CACHE_TIME" => "3600",
                        ),
                        false
                    ); ?>
                </div>
                <!--SCHEDULE MOBILE-->
                <div class="schedule__mobile-hidden">
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "list_schedule_mobile",
                        array(
                            "IBLOCK_TYPE" => "section_description",
                            "IBLOCK_ID" => "239",
                            "NEWS_COUNT" => "6",
                            "PROPERTY_CODE" => array(
                                "DAYS", "DESCRIPTION_BY_DAYS", "NAME"
                            ),
                            "CACHE_TIME" => "3600",
                        ),
                        false
                    ); ?>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION PRICE-->
    <section id="price" class="price section">
        <div class="container">
            <div class="progress progress__price"></div>
            <!--PRICE CONTENT-->
            <div class="price__content">
                <h2 class="section__title">
                    Стоимость
                </h2>
                <div class="price__cards">
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "price_card",
                        array(
                            "IBLOCK_ID" => "242",
                            "IBLOCK_TYPE" => "section_price",
                            "PROPERTY_CODE" => array("NAME", "PRICE", "DISCOUNTED_PRICE", "DISCOUNT_DATE", "PREPAYMENT", "PRICE_PARTICIPANT", "RULE"),
                            "CACHE_TIME" => "3600",
                            "CACHE_TYPE" => "A",
                        ),
                        false
                    ); ?>
                </div>
                <div class="price__lists">
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "included_price",
                        array(
                            "IBLOCK_ID" => "240",
                            "IBLOCK_TYPE" => "section_price",
                            "PROPERTY_CODE" => array("TEXT"),
                            "CACHE_TIME" => "3600",
                            "CACHE_TYPE" => "A",
                        ),
                        false
                    ); ?>

                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "not_included_price",
                        array(
                            "IBLOCK_ID" => "241",
                            "IBLOCK_TYPE" => "section_price",
                            "PROPERTY_CODE" => array("TEXT"),
                            "CACHE_TIME" => "3600",
                            "CACHE_TYPE" => "A",
                        ),
                        false
                    ); ?>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION CHOICE-->
    <section id="choice" class="choice section">
        <div class="container">
            <div class="progress progress__choice"></div>

            <div class="choice__content">
                <h2 class="section__title">
                    Выберите заезд
                </h2>

                <?php $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "list_race",
                    array(
                        "IBLOCK_ID" => "243",
                        "IBLOCK_TYPE" => "section_race",
                        "PROPERTY_CODE" => array("DATE_START_RACE", "DATE_END_RACE", "IMAGE_INSTRUCTOR", "DESCRIPTION_INSTRUCTOR", "SUM_PLACES", "OlD_PRICE", "NEW_PRICE", "DISCOUNT_DATE", "NAME_INSTRUCTOR"),
                        "CACHE_TIME" => "3600",
                        "CACHE_TYPE" => "A",
                    ),
                    false
                ); ?>
            </div>
        </div>
    </section>
    <!--SECTION INFORMATION-->
    <section id="information" class="information section">
        <div class="container">
            <div class="progress progress__information"></div>
            <!--INFORMATION CONTENT-->
            <div class="information__content">
                <h2 class="section__title">
                    Информация
                </h2>
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "list_information",
                    array(
                        "IBLOCK_ID" => "244",
                        "IBLOCK_TYPE" => "information",
                        "PROPERTY_CODE" => array("TITLE", "TEXT"),
                        "CACHE_TIME" => "3600",
                        "CACHE_TYPE" => "A",
                    ),
                    false
                ); ?>
                <!--INFORMATION CONTENT MOBILE-->
                <div class="information__module">
                    <div class="information__module-content">
                        <h3 class="information__module-title">
                            Как принять участие?
                        </h3>

                        <p class="information__module-text">
                            Вы можете <span class="information__module-aсcent">забронировать этот тур</span> прямо
                            сейчас самостоятельно. Это займет 5 минут. Если у вас
                            остались вопросы, <span class="information__module-aсcent">свяжитесь с нами</span>
                            удобным
                            для вас способом.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION REVIEWS-->
    <section class="reviews section">
        <div class="container">
            <div class="progress progress__reviews"></div>
            <div class="reviews__content">

                <h2 class="section__title">
                    Отзывы на Яндекс
                </h2>

                <div class="reviews__image">
                    <img alt="yandex" src="/local/templates/Elbrus-climbing/images/yandex_main.png">
                </div>
                <div class="reviews__laptop">
                    <img alt="yandex" src="/local/templates/Elbrus-climbing/images/yandex_laptop.png">
                </div>
                <div class="reviews__mobile">
                    <img alt="yandex" src="/local/templates/Elbrus-climbing/images/yandex_mobile.png">
                </div>
            </div>
        </div>
    </section>
    <!--SECTION MORE-->
    <section class="more section">
        <div class="container">
            <div class="progress progress__more"></div>
            <!--MORE CONTENT-->
            <div class="more__content">
                <div class="more__content-top">
                    <h2 class="section__title">
                        Ещё Эльбрус
                    </h2>
                    <button class="more__button-all">
                        Все туры
                    </button>
                </div>
                <div class="more__slider">
                    <div class="more__slider-container">
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "list_more",
                            array(
                                "IBLOCK_ID" => "245",
                                "IBLOCK_TYPE" => "more",
                                "PROPERTY_CODE" => array("ALL_INCLUSIVE", "COUNTRY", "NAME", "NUMBER_OF_DAYS", "LENGHT_ROUTE", "LEVEL", "COMFORT", "IMAGE"),
                                "CACHE_TIME" => "3600",
                                "CACHE_TYPE" => "N",
                            ),
                            false
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