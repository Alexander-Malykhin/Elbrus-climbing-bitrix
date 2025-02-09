<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult)): ?>
    <div class="information__list">
        <?php foreach ($arResult['ITEMS'] as $arItem): ?>
            <article class="information__list-item">
                <div class="information__list-top">
                    <h3 class="information__list-title">
                        <?= $arItem["PROPERTIES"]["TITLE_" . strtoupper(LANGUAGE_ID)]["VALUE"] ?>
                    </h3>

                    <button class="information__button-item">
                        <img alt="arrow" src="<?= $this->getFolder(); ?>/images/triangle_down.png">
                    </button>
                </div>

                <ul class="information__list-content">
                    <?php foreach ($arItem["PROPERTIES"]["TEXT_" . strtoupper(LANGUAGE_ID)]["VALUE"] as $arElement): ?>
                        <li class="information__list-text"><?= $arElement ?></li>
                    <?php endforeach; ?>
                </ul>
            </article>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<script src="<?= $this->GetFolder(); ?>/script.js" defer></script>





