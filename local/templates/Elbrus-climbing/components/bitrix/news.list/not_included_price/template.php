<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult)): ?>
    <div class="price__lists-column">
        <div class="price__lists-top">
            <div class="price__lists-header">
                <img alt="image" src="<?= $this->getFolder(); ?>/images//close.png">
                <h3 class="price__lists-title">В стоимость не включено</h3>
            </div>
            <button class="price__lists-button">
                <img alt="angle-down" src="<?= $this->getFolder(); ?>/images/angle-down.png">
            </button>
        </div>
        <ul class="price__lists-item">
            <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                <li class="price__lists-last">
                    <p class="price__lists-text">
                        <?= $arItem["PROPERTIES"]["TEXT"]["VALUE"] ?>
                    </p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<script src="<?= $this->GetFolder(); ?>/script.js" defer></script>
