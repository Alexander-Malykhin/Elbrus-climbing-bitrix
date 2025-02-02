<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<pre>
    <?php print_r($arResult["PROPERTIES"]["LINK_VIDEO"]["VALUE"]) ?>
</pre>

<video muted loop poster="<?= SITE_TEMPLATE_PATH ?>/images/background_header.png" id="video">
    <source src="<?= $arResult["PROPERTIES"]["LINK_VIDEO"]["VALUE"] ?>" type='video/mp4'>
</video>


<script src="<?= $this->GetFolder(); ?>/script.js" defer></script>