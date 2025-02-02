<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult)): ?>
    <div class="schedule__mobile-list">
        <?php foreach (array_reverse($arResult["ITEMS"]) as $arItem): ?>
            <article class="schedule__mobile-item">
                <div class="schedule__mobile-header">
                    <button class="schedule__mobile-button schedule__left">
                        <img alt="arrow" src="<?= $this->GetFolder(); ?>/images/arrow-left.png">
                    </button>

                    <div class="schedule__mobile-container">
                        <h3 class="schedule__mobile-title">
                            <span class="accent__primary"><?= $arItem["PROPERTIES"]["DAY"]["VALUE"] ?> день.</span>
                            <?= $arItem["PROPERTIES"]["NAME"]["VALUE"] ?>
                        </h3>
                    </div>

                    <button class="schedule__mobile-button schedule__right">
                        <img alt="arrow" src="<?= $this->GetFolder(); ?>/images/arrow-right.png">
                    </button>
                </div>

                <p class="schedule__mobile-text">
                    <?= $arItem["PROPERTIES"]["DESCRIPTION_BY_DAYS"]["VALUE"] ?>
                </p>
            </article>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<script src="<?= $this->GetFolder(); ?>/script.js" defer></script>





