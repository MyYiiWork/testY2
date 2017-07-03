<?php
return [
    'timeZone' => 'Asia/Shanghai',
    'vendorPath' => '@project/vendor',
    'modules' => [
        'settings' => [
            'class' => 'pheme\settings\Module',
            'sourceLanguage' => 'en'
        ],
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'settings' => [
            'class' => 'pheme\settings\components\Settings'
        ],
        'i18n' => [
            'translations' => [
                'user' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages', // example: @app/messages/fr/user.php
                ]
            ],
        ],
    ],
];
