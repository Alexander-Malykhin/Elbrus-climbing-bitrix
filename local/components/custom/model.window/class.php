<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Iblock;
use Bitrix\Main\SystemException;

class ModelWindowComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        $this->IncludeComponentTemplate();
    }
}
