<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
IncludeModuleLangFile(__FILE__);
?>

<?php if (!empty($arResult)): ?>
    <div class="menu__links">
        <span class="menu__text"><?=GetMessage("ASIDE_LINKS")?></span>

        <div class="menu__links-list">
            <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                <a href="<?= $arItem["PROPERTIES"]["LINK"]["VALUE"] ?>">
                    <img src="<?= CFile::GetFileArray($arItem['PROPERTIES']['IMAGE']['VALUE'])['SRC'] ?>"
                         alt="header__links-item">
                </a>
            <?php endforeach; ?>
        </div>

        <a href="tel:+74951087465" class="menu__phone menu__text">+7 495 108 74 65</a>
    </div>
<?php endif; ?>