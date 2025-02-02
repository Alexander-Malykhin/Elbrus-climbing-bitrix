<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<img src="<?= CFile::GetPath($arResult['PROPERTIES']['IMAGE']['VALUE'])?>" class="route__image">
