<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);


$lang = LANGUAGE_ID;

$titleProperty = "TITLE_" . strtoupper($lang);
?>


<?php if (!empty($arResult)): ?>
    <h1 class="header__banner-title"><?= $arResult["PROPERTIES"][$titleProperty]["VALUE"] ?></h1>
<?php endif; ?>
