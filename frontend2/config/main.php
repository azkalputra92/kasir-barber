<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend2',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'frontend2\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend2',
            'class' => 'common\components\Request',
            'web' => '/frontend2/web',
            'adminUrl' => '/frontend2'
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend2', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend2
            'name' => 'advanced-frontend2',
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

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [],
        ],

    ],
    'as access' => [
        // 'class' => '\hscstudio\mimin\components\AccessControl',
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'gii/*',
            'site/*',
            'debug/*',
            // 'mimin/*', // only in dev mode
        ],
    ],
    'params' => $params,
];
