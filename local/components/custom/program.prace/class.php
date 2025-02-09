<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Iblock;
use Bitrix\Main\SystemException;

class ProgramRaceComponent extends CBitrixComponent
{
    private $iblockId;
    private $currentDate;

    public function onPrepareComponentParams($arParams)
    {
        if (empty($arParams['IBLOCK_ID'])) {
            throw new SystemException("Не указан ID инфоблока.");
        }

        $this->iblockId = (int) $arParams['IBLOCK_ID'];
        $this->currentDate = new \Bitrix\Main\Type\DateTime();

        return $arParams;
    }

    private function getClosestOffer()
    {
        $arFilter = [
            'IBLOCK_ID' => $this->iblockId,
            'ACTIVE' => 'Y',
            '>=PROPERTY_DATE_START_RACE' => $this->currentDate,
        ];

        $arSort = ['PROPERTY_DATE_START_RACE' => 'ASC'];
        $arSelect = ['ID', 'NAME', 'PROPERTY_DATE_START_RACE', 'PROPERTY_SUM_PLACES', 'PROPERTY_NEW_PRICE'];

        $res = CIBlockElement::GetList($arSort, $arFilter, false, ['nTopCount' => 1], $arSelect);

        if ($arElement = $res->GetNext()) {
            return $arElement;
        }

        return null;
    }

    public function executeComponent()
    {
        try {
            $offer = $this->getClosestOffer();

            if ($offer) {
                $this->arResult['OFFER'] = $offer;
            } else {
                $this->arResult['ERROR'] = 'Нет доступных предложений.';
            }

            $this->IncludeComponentTemplate();
        } catch (SystemException $e) {
            ShowError($e->getMessage());
        }
    }
}
