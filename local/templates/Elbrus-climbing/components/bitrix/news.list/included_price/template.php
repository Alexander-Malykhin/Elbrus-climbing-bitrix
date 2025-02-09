<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
IncludeModuleLangFile(__FILE__);
?>

<?php if (!empty($arResult)): ?>
    <div class="price__lists-column">
        <div class="price__lists-top">
            <div class="price__lists-header">
                <img alt="image" src="<?= $this->getFolder(); ?>/images/check-box.png">
                <h3 class="price__lists-title"><?= GetMessage("INCLUDED_TITLE") ?></h3>
            </div>
            <button class="price__lists-button">
                <img alt="angle-down" src="<?= $this->getFolder(); ?>/images/angle-down.png">
            </button>
        </div>
        <ul class="price__lists-item">
            <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                <li class="price__lists-first">
                    <p class="price__lists-text">
                        <?= $arItem["PROPERTIES"]["TEXT_" . strtoupper(LANGUAGE_ID)]["VALUE"] ?>
                    </p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<script src="<?= $this->GetFolder(); ?>/script.js" defer></script>
