<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;

Loc::loadMessages(__FILE__);

class mode extends CModule
{

//НАСТРОЙКИ МОДУЛЯ
    public function __construct()
    {
        if (is_file(__DIR__ . '/version.php')) {
            include_once(__DIR__ . '/version.php');
            $this->MODULE_ID = get_class($this);
            $this->MODULE_VERSION = $arModuleVersion['VERSION'];
            $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
            $this->MODULE_NAME = Loc::getMessage('MODULE_NAME');
        } else {
            CAdminMessage::showMessage(
                Loc::getMessage('MODULE_FILE_NOT_FOUND') . ' version.php'
            );
        }
    }


//УСТАНОВКА МОДУЛЯ
    public function doInstall()
    {

        global $APPLICATION;


        $this->AddBlockTypes();
        $this->AddBlocks();
        $this->AddPropertiesIB();

        ModuleManager::registerModule($this->MODULE_ID);

        $APPLICATION->includeAdminFile(
            Loc::getMessage('MODULE_INSTALL_TITLE') . ' «' . Loc::getMessage('MODULE_NAME') . '»',
            __DIR__ . '/step.php'
        );


    }

//УДАЛЕНИЕ МОДУЛЯ
    public function doUninstall()
    {

        global $APPLICATION;
        $this->RemoveBlockTypes();

        ModuleManager::unRegisterModule($this->MODULE_ID);

        $APPLICATION->includeAdminFile(
            Loc::getMessage('MODULE_UNINSTALL_TITLE') . ' «' . Loc::getMessage('MODULE_NAME') . '»',
            __DIR__ . '/unstep.php'
        );
    }

//УСТАНОВКА ТИПА ИНФОБЛОКА
    public function AddBlockTypes()
    {
        CModule::IncludeModule('iblock');

        $iblockType = new CIBlockType;
        //HEADER
        $arFieldHeader = [
            "ID" => "header",
            'SECTIONS' => 'N',
            'IN_RSS' => 'N',
            'SORT' => 100,
            'LANG' => [
                'ru' => [
                    'NAME' => 'Шапка сайта',
                    'SECTION_NAME' => 'Разделы',
                    'ELEMENT_NAME' => 'Элементы',
                ],
                'en' => [
                    'NAME' => 'Header',
                    'SECTION_NAME' => 'Sections',
                    'ELEMENT_NAME' => 'Elements',
                ],
            ],
        ];
        $iblockType->Add($arFieldHeader);
        //PROGRAM
        $arFieldProgram = [
            "ID" => "section_program",
            'SECTIONS' => 'N',
            'IN_RSS' => 'N',
            'SORT' => 100,
            'LANG' => [
                'ru' => [
                    'NAME' => 'О программе',
                    'SECTION_NAME' => 'Разделы',
                    'ELEMENT_NAME' => 'Элементы',
                ],
                'en' => [
                    'NAME' => 'Program',
                    'SECTION_NAME' => 'Sections',
                    'ELEMENT_NAME' => 'Elements',
                ],
            ],
        ];
        $iblockType->Add($arFieldProgram);
        //ROUTE
        $arFieldRoute = [
            "ID" => "section_route",
            'SECTIONS' => 'N',
            'IN_RSS' => 'N',
            'SORT' => 100,
            'LANG' => [
                'ru' => [
                    'NAME' => 'Что будем делать',
                    'SECTION_NAME' => 'Разделы',
                    'ELEMENT_NAME' => 'Элементы',
                ],
                'en' => [
                    'NAME' => 'What we will do',
                    'SECTION_NAME' => 'Sections',
                    'ELEMENT_NAME' => 'Elements',
                ],
            ],
        ];
        $iblockType->Add($arFieldRoute);
        //GALLERY
        $arFieldGallery = [
            "ID" => "section_gallery",
            'SECTIONS' => 'N',
            'IN_RSS' => 'N',
            'SORT' => 100,
            'LANG' => [
                'ru' => [
                    'NAME' => 'Фотографии с маршрута',
                    'SECTION_NAME' => 'Разделы',
                    'ELEMENT_NAME' => 'Элементы',
                ],
                'en' => [
                    'NAME' => 'Photos from the route',
                    'SECTION_NAME' => 'Sections',
                    'ELEMENT_NAME' => 'Elements',
                ],
            ],
        ];
        $iblockType->Add($arFieldGallery);
        //DESCRIPTION
        $arFieldDescription = [
            "ID" => "section_description",
            'SECTIONS' => 'N',
            'IN_RSS' => 'N',
            'SORT' => 100,
            'LANG' => [
                'ru' => [
                    'NAME' => 'Описание по дням',
                    'SECTION_NAME' => 'Разделы',
                    'ELEMENT_NAME' => 'Элементы',
                ],
                'en' => [
                    'NAME' => 'Description by day',
                    'SECTION_NAME' => 'Sections',
                    'ELEMENT_NAME' => 'Elements',
                ],
            ],
        ];
        $iblockType->Add($arFieldDescription);
        //PRICE
        $arFieldPrice = [
            "ID" => "section_price",
            'SECTIONS' => 'N',
            'IN_RSS' => 'N',
            'SORT' => 100,
            'LANG' => [
                'ru' => [
                    'NAME' => 'Стоимость',
                    'SECTION_NAME' => 'Разделы',
                    'ELEMENT_NAME' => 'Элементы',
                ],
                'en' => [
                    'NAME' => 'Price',
                    'SECTION_NAME' => 'Sections',
                    'ELEMENT_NAME' => 'Elements',
                ],
            ],
        ];
        $iblockType->Add($arFieldPrice);
        //RACE
        $arFieldRace = [
            "ID" => "section_race",
            'SECTIONS' => 'N',
            'IN_RSS' => 'N',
            'SORT' => 100,
            'LANG' => [
                'ru' => [
                    'NAME' => 'Выберите заезд',
                    'SECTION_NAME' => 'Разделы',
                    'ELEMENT_NAME' => 'Элементы',
                ],
                'en' => [
                    'NAME' => 'Check race',
                    'SECTION_NAME' => 'Sections',
                    'ELEMENT_NAME' => 'Elements',
                ],
            ],
        ];
        $iblockType->Add($arFieldRace);
        //INFORMATION
        $arFieldInformation = [
            "ID" => "section_information",
            'SECTIONS' => 'N',
            'IN_RSS' => 'N',
            'SORT' => 100,
            'LANG' => [
                'ru' => [
                    'NAME' => 'Информация',
                    'SECTION_NAME' => 'Разделы',
                    'ELEMENT_NAME' => 'Элементы',
                ],
                'en' => [
                    'NAME' => 'Information',
                    'SECTION_NAME' => 'Sections',
                    'ELEMENT_NAME' => 'Elements',
                ],
            ],
        ];
        $iblockType->Add($arFieldInformation);
        //MORE
        $arFieldMore = [
            "ID" => "section_more",
            'SECTIONS' => 'N',
            'IN_RSS' => 'N',
            'SORT' => 100,
            'LANG' => [
                'ru' => [
                    'NAME' => 'Еще',
                    'SECTION_NAME' => 'Разделы',
                    'ELEMENT_NAME' => 'Элементы',
                ],
                'en' => [
                    'NAME' => 'More',
                    'SECTION_NAME' => 'Sections',
                    'ELEMENT_NAME' => 'Elements',
                ],
            ],
        ];
        $iblockType->Add($arFieldMore);
        //FOOTER
        $arFieldFooter = [
            "ID" => "footer",
            'SECTIONS' => 'N',
            'IN_RSS' => 'N',
            'SORT' => 100,
            'LANG' => [
                'ru' => [
                    'NAME' => 'Подвал сайта',
                    'SECTION_NAME' => 'Разделы',
                    'ELEMENT_NAME' => 'Элементы',
                ],
                'en' => [
                    'NAME' => 'Footer',
                    'SECTION_NAME' => 'Sections',
                    'ELEMENT_NAME' => 'Elements',
                ],
            ],
        ];
        $iblockType->Add($arFieldFooter);
    }

//УДАЛЕНИЕ ТИПА ИНФОБЛОКА
    public function RemoveBlockTypes()
    {
        CModule::IncludeModule('iblock');

        $iblockType = new CIBlockType;
        //HEADER
        $iblockType->Delete("header");
        //PROGRAM
        $iblockType->Delete("section_program");
        //ROUTE
        $iblockType->Delete("section_route");
        //GALLERY
        $iblockType->Delete("section_gallery");
        //DESCRIPTION
        $iblockType->Delete("section_description");
        //PRICE
        $iblockType->Delete("section_price");
        //INFORMATION
        $iblockType->Delete("section_information");
        //RACE
        $iblockType->Delete("section_race");
        //MORE
        $iblockType->Delete("section_more");
        //FOOTER
        $iblockType->Delete("footer");
    }

//УСТАНОВКА ИНФОБЛОКА
    public function AddBlocks()
    {
        CModule::IncludeModule('iblock');

        $iblocksData = [
            //TYPE HEADER
            [
                'NAME' => 'Главное видео',
                'TYPE' => 'header',
                "NUMBER" => "1",
            ],
            [
                'NAME' => 'Видео слайдер',
                'TYPE' => 'header',
                "NUMBER" => "2",
            ],
            [
                'NAME' => 'Полное название маршрута',
                'TYPE' => 'header',
                "NUMBER" => "3",
            ],
            [
                'NAME' => 'Описание тура',
                'TYPE' => 'header',
                "NUMBER" => "4",
            ],
            [
                'NAME' => 'Сложность маршрута',
                'TYPE' => 'header',
                "NUMBER" => "5",
            ],
            [
                'NAME' => 'Ссылки на социальные сети',
                'TYPE' => 'header',
                "NUMBER" => "22",
            ],
            //TYPE SECTION_PROGRAM
            [
                'NAME' => 'Описание программы',
                'TYPE' => 'section_program',
                "NUMBER" => "6",
            ],
            [
                'NAME' => 'Информация о программе',
                'TYPE' => 'section_program',
                "NUMBER" => "7",
            ],
            //TYPE SECTION_ROTE
            [
                'NAME' => 'О маршруте',
                'TYPE' => 'section_route',
                "NUMBER" => "8",
            ],
            [
                'NAME' => 'Изображение маршрута',
                'TYPE' => 'section_route',
                "NUMBER" => "9",
            ],
            //TYPE SECTION_GALLERY
            [
                'NAME' => 'Галерея',
                'TYPE' => 'section_gallery',
                "NUMBER" => "10",
            ],
            //TYPE SECTION_DESCRIPTION
            [
                'NAME' => 'Описание по дням',
                'TYPE' => 'section_description',
                "NUMBER" => "11",
            ],
            //TYPE SECTION_PRICE
            [
                'NAME' => 'В стоимость включено',
                'TYPE' => 'section_price',
                "NUMBER" => "12",
            ],
            [
                'NAME' => 'В стоимость не включено',
                'TYPE' => 'section_price',
                "NUMBER" => "13",
            ],
            [
                'NAME' => 'Стоимость тура',
                'TYPE' => 'section_price',
                "NUMBER" => "14",
            ],
            //TYPE SECTION_RACE
            [
                'NAME' => 'Выберите заезд',
                'TYPE' => 'section_race',
                "NUMBER" => "15",
            ],
            //TYPE SECTION_INFORMATION
            [
                'NAME' => 'Информация',
                'TYPE' => 'section_information',
                "NUMBER" => "16",
            ],
            //TYPE SECTION_MORE
            [
                'NAME' => 'Еще',
                'TYPE' => 'section_more',
                "NUMBER" => "17",
            ],
            //TYPE FOOTER
            [
                'NAME' => 'Адрес',
                'TYPE' => 'footer',
                "NUMBER" => "18",
            ],
            [
                'NAME' => 'Список платежных систем',
                'TYPE' => 'footer',
                "NUMBER" => "19",
            ],
            [
                'NAME' => 'Социальные сети',
                'TYPE' => 'footer',
                "NUMBER" => "20",
            ],
            [
                'NAME' => 'Метрика',
                'TYPE' => 'footer',
                "NUMBER" => "21",
            ],
        ];

        foreach ($iblocksData as $iblockData) {
            $arFields = [
                "ACTIVE" => "Y",
                "NAME" => $iblockData['NAME'],
                "CODE" => $iblockData['NUMBER'],
                "IBLOCK_TYPE_ID" => $iblockData['TYPE'],
                "SORT" => 100,
                "SITE_ID" => "s1",
            ];

            $iblock = new CIBlock;
            $iblock->Add($arFields);
        }
    }

    //УСТАНОВКА СВОЙСТВ ИНФОБЛОКА
    private function getIblockIdByCode($iblockCode)
    {
        $iblock = CIBlock::GetList([], ['CODE' => $iblockCode])->Fetch();
        return $iblock ? $iblock['ID'] : null;
    }

    public function AddPropertiesIB()
    {
        CModule::IncludeModule("iblock");

        //ГЛАВНОЕ ВИДЕО
        $propertiesMainVideo = [
            [
                "NAME" => "ССЫЛКА НА ВИДЕО О МАРШРУТЕ",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "LINK_VIDEO",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("1"),
            ]
        ];

        foreach ($propertiesMainVideo as $property) {
            $iblockProperty = new CIBlockProperty;
            $iblockProperty->Add($property);
        }

        //ВИДЕО СЛАЙДЕР
        $propertiesVideoSlider = [
            [
                "NAME" => "ССЫЛКА НА ВИДЕО О МАРШРУТЕ",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "LINK_VIDEO",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("2"),
            ]
        ];

        foreach ($propertiesVideoSlider as $property) {
            $iblockProperty = new CIBlockProperty;
            $iblockProperty->Add($property);
        }

        //ПОЛНОЕ НАЗВАНИЕ МАРШРУТА
        $propertiesMainTitle = [
            [
                "NAME" => "ПОЛНОЕ НАЗВАНИЕ МАРШРУТА RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "TITLE_RU",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("3"),
            ],
            [
                "NAME" => "ПОЛНОЕ НАЗВАНИЕ МАРШРУТА EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "TITLE_EN",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("3"),
            ]
        ];

        foreach ($propertiesMainTitle as $property) {
            $iblockProperty = new CIBlockProperty;
            $iblockProperty->Add($property);
        }

        //ОПИСАНИЕ МАРШРУТА
        $propertiesDescriptionRoute = [
            [
                "NAME" => "СТРАНА ТУРА RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "COUNTRY_RU",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("4"),
            ],
            [
                "NAME" => "СТРАНА ТУРА EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "COUNTRY_EN",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("4"),
            ],
            [
                "NAME" => "РЕГИОН RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "REGION_RU",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("4"),
            ],
            [
                "NAME" => "РЕГИОН_EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "REGION_EN",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("4"),
            ],
            [
                "NAME" => "ТИП АКТИВНОСТИ RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "ACTIVITY_TYPE_RU",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("4"),
            ],
            [
                "NAME" => "ТИП АКТИВНОСТИ EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "ACTIVITY_TYPE_EN",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("4"),
            ]
        ];

        foreach ($propertiesDescriptionRoute as $property) {
            $iblockProperty = new CIBlockProperty;
            $iblockProperty->Add($property);
        }

        //СЛОЖНОСТЬ МАРШРУТА
        $propertiesLevelRoute = [
            [
                "NAME" => "ПРОТЯЖЕННОСТЬ",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "LENGHT",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("5"),
            ],
            [
                "NAME" => "ОБЩАЯ ПРОДОЛЖИТЕНОСТЬ ТУРА",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "LENGHT_TOUR",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("5"),
            ],
            [
                "NAME" => "СЛОЖНОСТЬ",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "LEVEL_COUNT",
                "PROPERTY_TYPE" => "L",
                "IBLOCK_ID" => $this->getIblockIdByCode("5"),
                "VALUES" => [
                    ["VALUE" => "1", "SORT" => 100, "XML_ID" => "1", "DEF" => "Y"],
                    ["VALUE" => "2", "XML_ID" => "2", "SORT" => 100],
                    ["VALUE" => "3", "XML_ID" => "3", "SORT" => 100]
                ]
            ],
            [
                "NAME" => "КОМФОРТ",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "COMFORT_COUNT",
                "PROPERTY_TYPE" => "L",
                "IBLOCK_ID" => $this->getIblockIdByCode("5"),
                "VALUES" => [
                    ["VALUE" => "1", "SORT" => 100, "XML_ID" => "1", "DEF" => "Y"],
                    ["VALUE" => "2", "SORT" => 100, "XML_ID" => "2"],
                    ["VALUE" => "3", "SORT" => 100, "XML_ID" => "3"],
                    ["VALUE" => "4", "SORT" => 100, "XML_ID" => "4"]
                ]
            ]
        ];

        foreach ($propertiesLevelRoute as $property) {
            $iblockProperty = new CIBlockProperty;
            $iblockProperty->Add($property);
        }

        //ССЫЛКИ НА СОЦИЛЬАНЫЕ СЕТИ
        $propertiesMainTitle = [
            [
                "NAME" => "ССЫЛКА НА СОЦИАЛЬНУЮ СЕТЬ",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "LINK",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("22"),
            ],
            [
                "NAME" => "КАРТИНКА СОЦИАЛЬНОЙ СЕТИ",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "IMAGE",
                "PROPERTY_TYPE" => "F",
                "IBLOCK_ID" => $this->getIblockIdByCode("22"),
            ]
        ];

        foreach ($propertiesMainTitle as $property) {
            $iblockProperty = new CIBlockProperty;
            $iblockProperty->Add($property);
        }

        //ОПИСАНИЕ ПРОГРАММЫ
        $propertiesDescriptionProgram = [
            [
                "NAME" => "КОРОТКОЕ ТЕКСТОВОЕ ОПИСАНИЕ RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "PROGRAM_TEXT_RU",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("6"),
            ],
            [
                "NAME" => "КОРОТКОЕ ТЕКСТОВОЕ ОПИСАНИЕ EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "PROGRAM_TEXT_EN",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("6"),
            ],
            [
                "NAME" => "СТАРТ ПУТЕШЕСТВИЯ RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "START_TRAVEL_RU",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("6"),
            ],
            [
                "NAME" => "СТАРТ ПУТЕШЕСТВИЯ EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "START_TRAVEL_EN",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("6"),
            ],
            [
                "NAME" => "ФИНИШ RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "END_TRAVEL_RU",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("6"),
            ],
            [
                "NAME" => "ФИНИШ EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "END_TRAVEL_EN",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("6"),
            ]
        ];

        foreach ($propertiesDescriptionProgram as $property) {
            $iblockProperty = new CIBlockProperty;
            $iblockProperty->Add($property);
        }

        //ИНФОРМАЦИЯ О ПРОГРАММЕ
        $propertiesInformationProgram = [
            [
                "NAME" => "СЛОЖНОСТЬ",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "LEVEL",
                "PROPERTY_TYPE" => "L",
                "IBLOCK_ID" => $this->getIblockIdByCode("7"),
                "VALUES" => [
                    ["VALUE" => "1", "SORT" => 100, "XML_ID" => "1", "DEF" => "Y"],
                    ["VALUE" => "2", "XML_ID" => "2", "SORT" => 100],
                    ["VALUE" => "3", "XML_ID" => "3", "SORT" => 100]
                ]
            ],
            [
                "NAME" => "ГДЕ ПЛАНИРУЕТСЯ ПРОЖИВАНИЕ RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "ACCOMMODATION_RU",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("7"),
            ],
            [
                "NAME" => "ГДЕ ПЛАНИРУЕТСЯ ПРОЖИВАНИЕ EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "ACCOMMODATION_EN",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("7"),
            ],
            [
                "NAME" => "ПИТАНИЕ RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "NUTRITION_RU",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("7"),
            ],
            [
                "NAME" => "ПИТАНИЕ EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "NUTRITION_EN",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("7"),
            ]
        ];

        foreach ($propertiesInformationProgram as $property) {
            $iblockProperty = new CIBlockProperty;
            $iblockProperty->Add($property);
        }

        //О МОРШРУТЕ
        $propertiesRoute = [
            [
                "NAME" => "КОРОТКОЕ ТЕКСТОВОЕ ОПИСАНИЕ RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "PROGRAM_TEXT_RU",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("8"),
            ],
            [
                "NAME" => "КОРОТКОЕ ТЕКСТОВОЕ ОПИСАНИЕ EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "PROGRAM_TEXT_EN",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("8"),
            ]
        ];

        foreach ($propertiesRoute as $property) {
            $iblockProperty = new CIBlockProperty;
            $iblockProperty->Add($property);
        }

        //ИЗОБРАЖЕНИЕ МАРШРУТА
        $propertiesRoute = [
            [
                "NAME" => "ФОТО КАРТЫ МАРШРУТА",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "IMAGE",
                "PROPERTY_TYPE" => "F",
                "IBLOCK_ID" => $this->getIblockIdByCode("9"),
            ]
        ];

        foreach ($propertiesRoute as $property) {
            $iblockProperty = new CIBlockProperty;
            $iblockProperty->Add($property);
        }

        //ГАЛЕРЕЯ
        $propertiesGallery = [
            [
                "NAME" => "ФОТОГРАФИИ С МАРШРУТА",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "PHOTO",
                "PROPERTY_TYPE" => "F",
                "IBLOCK_ID" => $this->getIblockIdByCode("10"),
            ]
        ];

        foreach ($propertiesGallery as $property) {
            $iblockProperty = new CIBlockProperty;
            $iblockProperty->Add($property);
        }

        //ОПИСАНИЕ ПО ДНЯМ
        $propertiesDescriptionDay = [
            [
                "NAME" => "ДЕНЬ",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "DAY",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("11"),
            ],
            [
                "NAME" => "ЗАГОЛОВОК RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "NAME_RU",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("11"),
            ],
            [
                "NAME" => "ЗАГОЛОВОК EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "NAME_EN",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("11"),
            ],
            [
                "NAME" => "ОПИСАНИЕ ПО ДНЯМ RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "DESCRIPTION_BY_DAYS_RU",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("11"),
            ],
            [
                "NAME" => "ОПИСАНИЕ ПО ДНЯМ EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "DESCRIPTION_BY_DAYS_EN",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("11"),
            ]
        ];

        foreach ($propertiesDescriptionDay as $property) {
            $iblockProperty = new CIBlockProperty;
            $iblockProperty->Add($property);
        }

        //В СТОИМОСТЬ ВКЛЮЧЕНО
        $propertiesDescriptionInclude = [
            [
                "NAME" => "ТЕКСТ СПИСКА RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "TEXT_RU",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("12"),
            ],
            [
                "NAME" => "ТЕКСТ СПИСКА EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "TEXT_EN",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("12"),
            ],
        ];

        foreach ($propertiesDescriptionInclude as $property) {
            $iblockProperty = new CIBlockProperty;
            $iblockProperty->Add($property);
        }

        //В СТОИМОСТЬ НЕ ВКЛЮЧЕНО
        $propertiesDescriptionNotInclude = [
            [
                "NAME" => "ТЕКСТ СПИСКА RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "TEXT_RU",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("13"),
            ],
            [
                "NAME" => "ТЕКСТ СПИСКА EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "TEXT_EN",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("13"),
            ],
        ];

        foreach ($propertiesDescriptionNotInclude as $property) {
            $iblockProperty = new CIBlockProperty;
            $iblockProperty->Add($property);
        }

        //СТОИМОСТЬ ТУРА
        $propertiesPriceCard = [
            [
                "NAME" => "НАЗВАНИЕ ТУРА RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "NAME_RU",
                "PROPERTY_TYPE" => "L",
                "IBLOCK_ID" => $this->getIblockIdByCode("14"),
                "VALUES" => [
                    ["VALUE" => "групповой тур", "SORT" => 100, "XML_ID" => "1", "DEF" => "Y"],
                    ["VALUE" => "частный тур", "SORT" => 100, "XML_ID" => "2"],
                ]
            ],
            [
                "NAME" => "НАЗВАНИЕ ТУРА EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "NAME_EN",
                "PROPERTY_TYPE" => "L",
                "IBLOCK_ID" => $this->getIblockIdByCode("14"),
                "VALUES" => [
                    ["VALUE" => "group tour", "SORT" => 100, "XML_ID" => "1", "DEF" => "Y"],
                    ["VALUE" => "private tour", "SORT" => 100, "XML_ID" => "2"],
                ]
            ],
            [
                "NAME" => "ЦЕНА ТУРА RUB",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "PRICE_RUB",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("14"),
            ],
            [
                "NAME" => "ЦЕНА ТУРА USD",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "PRICE_USD",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("14"),
            ],
            [
                "NAME" => "ЦЕНА СО СКИДКОЙ RUB",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "DISCOUNTED_PRICE_RUB",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("14"),
            ],
            [
                "NAME" => "ЦЕНА СО СКИДКОЙ USD",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "DISCOUNTED_PRICE_USD",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("14"),
            ],
            [
                "NAME" => "СКИДКА ДЕЙСТВУЕТ ДО",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "DISCOUNT_DATE",
                "PROPERTY_TYPE" => "S",
                "USER_TYPE" => "Date",
                "IBLOCK_ID" => $this->getIblockIdByCode("14"),
            ],
            [
                "NAME" => "ПРЕДОПЛАТА RUB",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "PREPAYMENT_RUB",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("14"),
            ],
            [
                "NAME" => "ПРЕДОПЛАТА USD",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "PREPAYMENT_USD",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("14"),
            ],
            [
                "NAME" => "ЦЕНА ЗА КАЖДОГО СЛЕДУЮЩЕГО УЧАСТНИКА RUB",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "PRICE_PARTICIPANT_RUB",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("14"),
            ],
            [
                "NAME" => "ЦЕНА ЗА КАЖДОГО СЛЕДУЮЩЕГО УЧАСТНИКА USD",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "PRICE_PARTICIPANT_USD",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("14"),
            ],
            [
                "NAME" => "ПРАВИЛА ВОЗВРАТА",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "RULE",
                "PROPERTY_TYPE" => "L",
                "IBLOCK_ID" => $this->getIblockIdByCode("14"),
                "VALUES" => [
                    ["VALUE" => "да", "SORT" => 100, "XML_ID" => "1", "DEF" => "Y"],
                    ["VALUE" => "нет", "SORT" => 100, "XML_ID" => "2"],
                ]
            ],
        ];

        foreach ($propertiesPriceCard as $property) {
            $iblockProperty = new CIBlockProperty;
            $iblockProperty->Add($property);
        }

        //ВЫБЕРИТЕ ЗАЕЗД
        $propertiesRace = [
            [
                "NAME" => "ДАТА НАЧАЛА ЗАЕЗДА",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "DATE_START_RACE",
                "PROPERTY_TYPE" => "S",
                "USER_TYPE" => "Date",
                "IBLOCK_ID" => $this->getIblockIdByCode("15"),
            ],
            [
                "NAME" => "ДАТА ОКОНЧАНИЯ ЗАЕЗДА",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "DATE_END_RACE",
                "PROPERTY_TYPE" => "S",
                "USER_TYPE" => "Date",
                "IBLOCK_ID" => $this->getIblockIdByCode("15"),
            ],
            [
                "NAME" => "КАРТИНКА ИНСТРУКТОРА",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "IMAGE_INSTRUCTOR",
                "PROPERTY_TYPE" => "F",
                "IBLOCK_ID" => $this->getIblockIdByCode("15"),
            ],
            [
                "NAME" => "ОПИСАНИЕ ИНСТРУКТОРА RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "DESCRIPTION_INSTRUCTOR_RU",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("15"),
            ],
            [
                "NAME" => "ОПИСАНИЕ ИНСТРУКТОРА EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "DESCRIPTION_INSTRUCTOR_EN",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("15"),
            ],
            [
                "NAME" => "ОСТАЛОСЬ МЕСТ",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "SUM_PLACES",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("15"),
            ],
            [
                "NAME" => "СТАРАЯ ЦЕНА RUB",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "OlD_PRICE_RUB",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("15"),
            ],
            [
                "NAME" => "СТАРАЯ ЦЕНА USD",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "OlD_PRICE_USD",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("15"),
            ],
            [
                "NAME" => "НОВАЯ ЦЕНА RUB",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "NEW_PRICE_RUB",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("15"),
            ],
            [
                "NAME" => "НОВАЯ ЦЕНА USD",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "NEW_PRICE_USD",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("15"),
            ],
            [
                "NAME" => "ДАТА ОКОНЧАНИЯ СКИДКИ",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "DISCOUNT_DATE",
                "PROPERTY_TYPE" => "S",
                "USER_TYPE" => "Date",
                "IBLOCK_ID" => $this->getIblockIdByCode("15"),
            ],
            [
                "NAME" => "ФИО ИНСТРУКТОРА RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "NAME_INSTRUCTOR_RU",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("15"),
            ],
            [
                "NAME" => "ФИО ИНСТРУКТОРА EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "NAME_INSTRUCTOR_EN",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("15"),
            ],
        ];

        foreach ($propertiesRace as $property) {
            $iblockProperty = new CIBlockProperty;
            $iblockProperty->Add($property);
        }

        //ИНФОРМАЦИЯ
        $propertiesInformation = [
            [
                "NAME" => "ЗАГОЛОВОК СПИСКА RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "TITLE_RU",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("16"),
            ],
            [
                "NAME" => "ЗАГОЛОВОК СПИСКА EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "TITLE_EN",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("16"),
            ],
            [
                "NAME" => "ТЕКСТ СПИСКА RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "TEXT_RU",
                "PROPERTY_TYPE" => "S",
                "MULTIPLE" => "Y",
                "IBLOCK_ID" => $this->getIblockIdByCode("16"),
            ],
            [
                "NAME" => "ТЕКСТ СПИСКА EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "TEXT_EN",
                "PROPERTY_TYPE" => "S",
                "MULTIPLE" => "Y",
                "IBLOCK_ID" => $this->getIblockIdByCode("16"),
            ],
        ];

        foreach ($propertiesInformation as $property) {
            $iblockProperty = new CIBlockProperty;
            $iblockProperty->Add($property);
        }

        //ЕЩЕ
        $propertiesMore = [
            [
                "NAME" => "ВСЕ ВКЛЮЧЕНО RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "ALL_INCLUSIVE_RU",
                "PROPERTY_TYPE" => "L",
                "IBLOCK_ID" => $this->getIblockIdByCode("17"),
                "VALUES" => [
                    ["VALUE" => "Все включено", "SORT" => 100, "XML_ID" => "1", "DEF" => "Y"],
                    ["VALUE" => "Не все включено", "SORT" => 100, "XML_ID" => "2"],
                ]
            ],
            [
                "NAME" => "ВСЕ ВКЛЮЧЕНО EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "ALL_INCLUSIVE_EN",
                "PROPERTY_TYPE" => "L",
                "IBLOCK_ID" => $this->getIblockIdByCode("17"),
                "VALUES" => [
                    ["VALUE" => "Everything is included", "SORT" => 100, "XML_ID" => "1", "DEF" => "Y"],
                    ["VALUE" => "Not all inclusive", "SORT" => 100, "XML_ID" => "2"],
                ]
            ],
            [
                "NAME" => "СТРАНА RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "COUNTRY_RU",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("17"),
            ],
            [
                "NAME" => "СТРАНА EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "COUNTRY_EN",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("17"),
            ],
            [
                "NAME" => "ЗАГОЛОВОК RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "NAME_RU",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("17"),
            ],
            [
                "NAME" => "ЗАГОЛОВОК EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "NAME_EN",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("17"),
            ],
            [
                "NAME" => "КОЛИЧЕСТВО ДНЕЙ",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "NUMBER_OF_DAYS",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("17"),
            ],
            [
                "NAME" => "ДЛИНА МАРШРУТА",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "LENGHT_ROUTE",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("17"),
            ],
            [
                "NAME" => "СЛОЖНОСТЬ",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "LEVEL",
                "PROPERTY_TYPE" => "L",
                "IBLOCK_ID" => $this->getIblockIdByCode("17"),
                "VALUES" => [
                    ["VALUE" => "1", "SORT" => 100, "XML_ID" => "1", "DEF" => "Y"],
                    ["VALUE" => "2", "SORT" => 100, "XML_ID" => "2"],
                    ["VALUE" => "3", "SORT" => 100, "XML_ID" => "3"],
                ]
            ],
            [
                "NAME" => "КОМФОРТ",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "COMFORT",
                "PROPERTY_TYPE" => "L",
                "IBLOCK_ID" => $this->getIblockIdByCode("17"),
                "VALUES" => [
                    ["VALUE" => "1", "SORT" => 100, "XML_ID" => "1", "DEF" => "Y"],
                    ["VALUE" => "2", "SORT" => 100, "XML_ID" => "2"],
                    ["VALUE" => "3", "SORT" => 100, "XML_ID" => "3"],
                    ["VALUE" => "4", "SORT" => 100, "XML_ID" => "4"],
                ]
            ],
            [
                "NAME" => "ИЗОБРАЖЕНИЕ",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "IMAGE",
                "PROPERTY_TYPE" => "F",
                "IBLOCK_ID" => $this->getIblockIdByCode("17"),
            ],
            [
                "NAME" => "НАЧАЛЬНАЯ ДАТА ЗАЕЗДА",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "START_DATE",
                "PROPERTY_TYPE" => "S",
                "USER_TYPE" => "Date",
                "IBLOCK_ID" => $this->getIblockIdByCode("17"),
            ],
            [
                "NAME" => "СКИДКА",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "DESCONT",
                "PROPERTY_TYPE" => "L",
                "IBLOCK_ID" => $this->getIblockIdByCode("17"),
                "VALUES" => [
                    ["VALUE" => "ДА", "SORT" => 100, "XML_ID" => "1", "DEF" => "Y"],
                    ["VALUE" => "НЕТ", "SORT" => 100, "XML_ID" => "2"],
                ]
            ],
            [
                "NAME" => "ДЕЙСВИЕ СКИДКИ",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "END_DATE",
                "PROPERTY_TYPE" => "S",
                "USER_TYPE" => "Date",
                "IBLOCK_ID" => $this->getIblockIdByCode("17"),
            ],
            [
                "NAME" => "НАЧАЛЬНАЯ ЦЕНА RUB",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "START_PRICE_RUB",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("17"),
            ],
            [
                "NAME" => "НАЧАЛЬНАЯ ЦЕНА USD",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "START_PRICE_USD",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("17"),
            ],
            [
                "NAME" => "ЦЕНА ПО СКИДКЕ RUB",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "DESCONT_PRICE_RUB",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("17"),
            ],
            [
                "NAME" => "ЦЕНА ПО СКИДКЕ USD",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "DESCONT_PRICE_USD",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("17"),
            ],
            [
                "NAME" => "КОЛИЧЕСТВО ЗАЕЗДОВ",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "PLACES",
                "PROPERTY_TYPE" => "N",
                "IBLOCK_ID" => $this->getIblockIdByCode("17"),
            ],
        ];

        foreach ($propertiesMore as $property) {
            $iblockProperty = new CIBlockProperty;
            $iblockProperty->Add($property);
        }

        //FOOTER
        $propertiesFooter = [
            [
                "NAME" => "адрес RU",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "TITLE_RU",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("18"),
            ],
            [
                "NAME" => "адрес EN",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "TITLE_EN",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("18"),
            ],
            [
                "NAME" => "Картинка платежной системы",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "IMAGE",
                "PROPERTY_TYPE" => "F",
                "IBLOCK_ID" => $this->getIblockIdByCode("19"),
            ],
            [
                "NAME" => "Ссылка на социальную сеть",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "LINK",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("20"),
            ],
            [
                "NAME" => "Картинка платежной системы",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "IMAGE",
                "PROPERTY_TYPE" => "F",
                "IBLOCK_ID" => $this->getIblockIdByCode("20"),
            ],
            [
                "NAME" => "Картинка метрики",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "IMAGE",
                "PROPERTY_TYPE" => "F",
                "IBLOCK_ID" => $this->getIblockIdByCode("21"),
            ],
            [
                "NAME" => "URL аналитики",
                "ACTIVE" => "Y",
                "SORT" => 100,
                "CODE" => "IMAGE",
                "PROPERTY_TYPE" => "S",
                "IBLOCK_ID" => $this->getIblockIdByCode("21"),
            ],
        ];

        foreach ($propertiesFooter as $property) {
            $iblockProperty = new CIBlockProperty;
            $iblockProperty->Add($property);
        }
    }
}


