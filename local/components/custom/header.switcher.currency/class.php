<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Main\Application;
use Bitrix\Main\SystemException;

class HeaderSwitcherCurrencyComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        $this->IncludeComponentTemplate();
    }
}
