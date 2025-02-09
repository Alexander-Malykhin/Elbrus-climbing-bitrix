<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult)): ?>
    <p class="footer__local">
        <?= $arResult["PROPERTIES"]["TITLE_" . strtoupper(LANGUAGE_ID)]["VALUE"] ?>
    </p>
<?php endif; ?>