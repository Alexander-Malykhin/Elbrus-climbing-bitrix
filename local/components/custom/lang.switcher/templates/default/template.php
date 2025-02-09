<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<div class="language">
    <span class="language__text"><?= LANGUAGE_ID ?></span>

    <div class="language__list">
        <span class="language__list-item" data-lang="ru">ru</span>
        <span class="language__list-item" data-lang="en">en</span>
    </div>
</div>

<script src="<?= $this->GetFolder(); ?>/script.js" defer></script>