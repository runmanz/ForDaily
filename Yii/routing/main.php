<?php
 $params = ....
 
 return [
    'id' => ..,
    'bathPath' ...,
    'bootstrap' ...,
    'controllerNamespace' ...
    'components' => [
        'request' ...,
        'cache' ...,
        'user' ...,
        'session' ...,
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                'file' => [
                    'class' => 'yii\log\FileTarget',
                ],
                'db' => [
                    'class' => 'yii\log\DbTarget',
                ],
                /*[
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],*/
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'suffix' => '.html',
            'rules' => [
                '<controller:\w+>/<action:[\w-]+>'=>'<controller>/<action>',
                '<controller:(post|comment)>/<id:\d+>/<action:(create|update|delete)>' => '<controller>/<action>',
                '<controller:(post|comment)>/<id:\d+>' => '<controller>/view',
                '<controller:(post|comment)>s' => '<controller>/index',
            ],
        ],
    ]
 ];
