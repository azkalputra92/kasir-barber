<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',

    'components' => [

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\DbManager'
        ],
        // 'user' => [
        //     // 'class' => 'mdm\admin\models\User',
        //     // 'identityClass' => 'mdm\admin\models\User',
        //     'loginUrl' => ['admin/user/login'],
        // ]
    ],

    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'generators' => [
                'crudTemplate'   => [
                    'class' => 'common\customgenerators\template1\Generator',
                ],
            ]
        ],
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
        ],
    ],



];
