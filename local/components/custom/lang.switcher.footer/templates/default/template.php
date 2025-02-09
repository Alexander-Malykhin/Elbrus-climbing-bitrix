<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<div class="footer__select-content">
    <span class="footer__select-text"><?= LANGUAGE_ID ?></span>

    <button class="footer__select-arrow"></button>

    <div class="footer__select-list">
        <span class="footer__select-item" data-lang="ru">ru</span>
        <span class="footer__select-item" data-lang="en">en</span>
    </div>
</div>

<script src="<?= $this->GetFolder(); ?>/script.js" defer></script>