<?php

return [
    'modules' => [
        'admin' => [
            'class' => Itstructure\AdminModule\Module::class,
            'viewPath' => '@app/views/admin',
            'controllerMap' => [
//                'catalog' => CatalogController::class,
            ],
            'accessRoles' => ['admin', 'manager'],
            'isMultilanguage' => false,
            'components' => [
                'view' => [
                    'class' => Itstructure\AdminModule\components\AdminView::class,
                    'skin' => Itstructure\AdminModule\components\AdminView::SKIN_GREEN_LIGHT,
                    'bodyLayout' => Itstructure\AdminModule\components\AdminView::LAYOUT_SIDEBAR_MINI,
                    'mainMenuConfig' => require __DIR__ . '/main-menu.php',
                    'extraAssets' => require __DIR__ . '/extra-assets.php',
                ],
            ],
        ],
    ],
];
