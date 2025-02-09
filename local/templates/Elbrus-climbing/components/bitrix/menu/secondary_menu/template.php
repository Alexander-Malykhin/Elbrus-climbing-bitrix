<?php global $APPLICATION;
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);

IncludeModuleLangFile(__FILE__);
?>

<?php if (!empty($arResult)): ?>
    <nav class="program__menu">
        <ul class="program__list">
            <?php
            foreach ($arResult as $arItem):?>
                <li>
                    <a href="<?= $arItem["LINK"] ?>" class="program__list-link active__link">
                        <?= GetMessage($arItem["TEXT"]) ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>

        <?php $APPLICATION->IncludeComponent(
            "custom:program.race",
            ".default",
            array(
                "IBLOCK_ID" => "42",
                "IBLOCK_TYPE" => "section_race",
                "CACHE_KEY" => LANGUAGE_ID
            ),
            false
        ); ?>

        <button class="program__button" id="secondary-btn">
            <?= GetMessage("Забронировать") ?>
        </button>
    </nav>
<?php endif ?>

<script src="<?=$this->GetFolder();?>/script.js"></script>
