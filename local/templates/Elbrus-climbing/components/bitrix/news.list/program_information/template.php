<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);

IncludeModuleLangFile(__FILE__);
?>

<?php foreach ($arResult["ITEMS"] as $arItem): ?>
    <!--PROGRAM INFORMATION-->
    <div class="program__content-information">
        <div class="program__information">
            <div class="program__information-top">
                <h2 class="section__title"><?= GetMessage("TITLE_PROGRAM") ?></h2>

                <button class="program__information-favorites">
                    <span class="accent__main"><?= GetMessage("BUTTON_FAVORITES") ?></span>
                </button>

                <button class="program__button-mobile">
                    <img alt="heart" src="<?= $this->GetFolder(); ?>/images/heart-mobile.png">
                </button>
            </div>

            <p class="program__information-text">
                <?= $arItem["PROPERTIES"]["PROGRAM_TEXT_" . strtoupper(LANGUAGE_ID)]["VALUE"] ?>
            </p>

            <button class="program__information-download">
                <?= GetMessage("BUTTON_DOWNLOAD") ?>
            </button>

            <div class="program__buttons">
                <button class="program__buttons-mobile">
                    <img alt="map" src="<?= $this->GetFolder(); ?>/images/map.png">
                    <span class="program__buttons-text"><?= GetMessage("START_AND_FINISH") ?></span>
                </button>

                <button class="program__buttons-mobile">
                    <img alt="download" src="<?= $this->GetFolder(); ?>/images/download.png">
                    <span class="program__buttons-text"><?= GetMessage("BUTTON_PROGRAM") ?></span>
                </button>
            </div>
        </div>
    </div>
    <!--PROGRAM WAY-->
    <div class="program__content-way">
        <div class="program__way">
            <p class="program__way-text">
                <span class="program__way-color"><?= GetMessage("START") ?>:</span> <?= $arItem["PROPERTIES"]["START_TRAVEL_" . strtoupper(LANGUAGE_ID)]["VALUE"] ?>
            </p>

            <p class="program__way-text">
                <span class="program__way-color"><?= GetMessage("FINISH") ?>:</span> <?= $arItem["PROPERTIES"]["END_TRAVEL_" . strtoupper(LANGUAGE_ID)]["VALUE"] ?>
            </p>
        </div>
    </div>
<?php endforeach; ?>

<script src="<?= $this->GetFolder(); ?>/script.js" defer></script>
