<?php
Yii::setAlias('@upload', dirname(__DIR__) . '/upload'); 
Yii::setAlias('@css', dirname(dirname(__DIR__)) . '/vendor');            

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
            // 'csrfCookie' => [
            //     'httpOnly' => true,
            //     'path' => '/admin',
            // ],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true,'path' => '/admin',],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'response' => [
            // 'format' => yii\web\Response::FORMAT_JSON,
            'charset' => 'UTF-8',
            
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            // 'name' => 'advanced-backend',
            // 'cookieParams' => [
            //     'path' => '/admin',
            // ],
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<alias:home|login>' => 'site/<alias>',
                'POST material' => 'site/upload-material',
                'POST subject' => 'site/get-subject'
            ],
        ],
        
    ],
    'params' => $params,
];
