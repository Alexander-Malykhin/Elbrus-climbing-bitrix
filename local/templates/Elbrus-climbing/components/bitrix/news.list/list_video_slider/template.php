<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */
$this->setFrameMode(true);
?>


<?php if(!empty($arResult)):?>
    <div class="header__slider">
       <?php foreach ($arResult["ITEMS"] as $arItem):?>
           <article class="header__slider-item">
               <video muted loop poster="<?= SITE_TEMPLATE_PATH ?>/images/background_header.png"
                      class="header__slider-video">
                   <source src="<?=SITE_TEMPLATE_PATH . $arItem["PROPERTIES"]["LINK_VIDEO"]["VALUE"] ?>" type='video/mp4'>
               </video>

               <button class="header__slider-button">
                   <img src="<?= SITE_TEMPLATE_PATH ?>/images/triangle.png" alt="button"
                        class="header__slider-angle">
               </button>
           </article>
       <?php endforeach;?>
    </div>
<?php endif;?>



<script src="<?=$this->GetFolder(); ?>/script.js" defer></script>