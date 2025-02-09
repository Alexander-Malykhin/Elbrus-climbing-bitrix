<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<div class="menu__select">
    <div class="menu__select-content">
        <span class="menu__select-text field__language"><?= LANGUAGE_ID ?></span>
        <button class="menu__select-language"></button>
    </div>

    <ul class="menu__select-list">
        <li class="menu__select-item"><span class="menu__select-text">RU</span></li>
        <li class="menu__select-item"><span class="menu__select-text">EN</span></li>
    </ul>
</div>

<script src="<?= $this->GetFolder(); ?>/script.js" defer></script>