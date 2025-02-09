<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult)): ?>
    <video muted loop poster="<?= SITE_TEMPLATE_PATH ?>/images/background_header.png" id="video">
        <source src="<?= $arResult["PROPERTIES"]["LINK_VIDEO"]["VALUE"] ?>" type='video/mp4'>
    </video>
<?php endif; ?>

<script src="<?= $this->GetFolder(); ?>/script.js" defer></script>