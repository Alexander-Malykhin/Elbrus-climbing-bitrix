<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class LanguageSwitcherComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        $this->arResult['CURRENT_LANG'] = LANGUAGE_ID;
        $this->arResult['LANGS'] = [
            'ru' => '/ru/',
            'en' => '/en/',
        ];

        $this->includeComponentTemplate();
    }
}
