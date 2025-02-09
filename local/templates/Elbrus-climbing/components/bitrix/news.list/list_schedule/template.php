<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
IncludeModuleLangFile(__FILE__);
?>

<?php if (!empty($arResult)): ?>
    <?php foreach ($arResult['ITEMS'] as $arItem): ?>
        <article class="schedule__list-item">
       <span class="schedule__list-day">
           <?= $arItem["PROPERTIES"]["DAY"]["VALUE"] ?>
           <?= GetMessage("DAY") ?>.
       </span>

            <div class="schedule__list-content">
                <p class="schedule__list-title"><?= $arItem["PROPERTIES"]["NAME_" . strtoupper(LANGUAGE_ID)]["VALUE"] ?></p>

                <p class="schedule__list-text">
                    <?= $arItem["PROPERTIES"]["DESCRIPTION_BY_DAYS_" . strtoupper(LANGUAGE_ID)]["VALUE"] ?>
                </p>
            </div>

            <button class="schedule__button-item">
                <img alt="arrow" src="<?= $this->GetFolder(); ?>/images/triangle_down.png">
            </button>
        </article>
    <?php endforeach; ?>
<?php endif; ?>
<script src="<?= $this->GetFolder(); ?>/script.js" defer></script>





