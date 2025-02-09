<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!-- Модальное окно -->
<div id="booking-modal" class="modal">
    <div class="modal__content">
        <div class="spinner"></div>
        <div class="success-message">
            <svg class="checkmark" viewBox="-5 5 60 40">
                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" stroke-linecap="round"/>
                <path class="checkmark__check" fill="none" stroke-width="5" d="M14 27l7 7 16-16"/>
            </svg>
            <p><?= GetMessage("BOOKED") ?></p>
        </div>
    </div>
</div>

<script src="<?= SITE_TEMPLATE_PATH ?>/js/script.js" defer></script>

