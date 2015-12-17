<?php
return [
    'name' => 'Yii Project',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
        ],
    ],

    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

      'urlManager' => [
            'class' =>'yii\web\UrlManager',
            'enablePrettyUrl' => true,
        'showScriptName' => false,

        ],

    ],
];
