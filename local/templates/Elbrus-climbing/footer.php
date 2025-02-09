<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);


print_r($MESS["F00TER_LINKS"]);
?>
<!--FOOTER-->
<footer class="footer">
    <div class="container">
        <!--FOOTER CONTENT-->
        <div class="footer__content">
            <div class="footer__logo">
                <?php $APPLICATION->IncludeFile(
                    SITE_TEMPLATE_PATH . '/include/header/logo.php',
                    array(),
                    array("MODE" => "TEXT", "NAME" => "logo")
                ) ?>
            </div>
            <div class="footer__rating">
                <div class="footer__rating-item">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/tripadvisor.png" alt="tripadvisor">
                    <span class="footer__rating-number">4.4</span>
                    <div class="footer__rating-star">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/star.png" alt="star">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/star.png" alt="star">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/star.png" alt="star">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/star.png" alt="star">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/star.png" alt="star">
                    </div>
                    <span class="footer__rating-sum">(123)</span>
                </div>
                <div class="footer__rating-item">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/google.png" alt="google">
                    <span class="footer__rating-number">4.4</span>
                    <div class="footer__rating-star">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/star.png" alt="star">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/star.png" alt="star">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/star.png" alt="star">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/star.png" alt="star">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/star.png" alt="star">
                    </div>
                    <span class="footer__rating-sum">(123)</span>
                </div>
                <div class="footer__rating-item">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/y.png" alt="yandex">
                    <span class="footer__rating-number">4.4</span>
                    <div class="footer__rating-star">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/star.png" alt="star">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/star.png" alt="star">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/star.png" alt="star">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/star.png" alt="star">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/star.png" alt="star">
                    </div>
                    <span class="footer__rating-sum">(123)</span>
                </div>
            </div>
            <?php $APPLICATION->IncludeComponent(
                "bitrix:news.detail",
                "footer_address",
                array(
                    "IBLOCK_ID" => "45",
                    "IBLOCK_TYPE" => "footer",
                    "ELEMENT_ID" => "67",
                    "NEWS_COUNT" => "1",
                    "PROPERTY_CODE" => array(
                        "TITLE_" . strtoupper(LANGUAGE_ID),
                    ),
                    "CACHE_TIME" => "3600",
                ),
                false
            ); ?>
            <div class="footer__selects">
                <article class="footer__select">
                    <?php
                    $APPLICATION->IncludeComponent("custom:lang.switcher.footer",
                        "default",
                        []);
                    ?>
                </article>

                <?php $APPLICATION->IncludeComponent("custom:footer.switcher.currency", "", []); ?>

                <article class="footer__select">
                    <div class="select__content">
                        <span class="accent__select"><?= GetMessage("FOOTER_LINKS")?></span>
                    </div>
                </article>
            </div>
            <div class="footer__carts">
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "list_footer_payment",
                    array(
                        "IBLOCK_ID" => "46",
                        "IBLOCK_TYPE" => "footer",
                        "NEWS_COUNT" => "4",
                        "PROPERTY_CODE" => array(
                            "IMAGE",
                        ),
                        "CACHE_TIME" => "3600",
                    ),
                    false
                ); ?>
            </div>
            <p class="footer__policy">
                <?= GetMessage("POLICY")?>
            </p>
            <div class="footer__links">
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "list_footer_links",
                    array(
                        "IBLOCK_ID" => "47",
                        "IBLOCK_TYPE" => "footer",
                        "NEWS_COUNT" => "2",
                        "PROPERTY_CODE" => array(
                            "IMAGE", "LINK"
                        ),
                        "CACHE_TIME" => "3600",
                    ),
                    false
                ); ?>
            </div>
        </div>
    </div>
</footer>
</body>

</html>