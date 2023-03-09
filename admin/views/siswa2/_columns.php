<?php

use yii\bootstrap5\Html;
use yii\helpers\Url;

return [
    // [
    //     'class' => 'kartik\grid\CheckboxColumn',
    //     'width' => '20px',
    // ],

    [
        'class' => 'kartik\grid\ActionColumn',
        'header' => 'Akun',
        'template' => '{btn_aksi}',
        'buttons' => [
            "btn_aksi" => function ($url, $model, $key) {
                return Html::a('<i class="icon-more-alt"></i>', ['view', 'id' => $model->id], [
                    'class' => 'btn btn-square btn-light btn-air-light btn-sm',
                    'role' => 'modal-remote',
                    'title' => 'Lihat',
                    'data-toggle' => 'tooltip'
                ]);
            },

        ]
    ],

    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
    // [
    // 'class'=>'\kartik\grid\DataColumn',
    // 'attribute'=>'id',
    // ],
    [
        'class' => '\kartik\grid\DataColumn',
        'header' => '<b>Nis</b>',
        'value' => 'nis',
        // 'options' => []
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'header' => '<b>Nama</b>',
        'value' => 'nama',
        'contentOptions' => [
            'style' => [
                'width:30px',
                'font-size : 500px'
            ]
        ], // For TD
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'header' => '<b>Alamat</b>',
        'value' => 'alamat',
    ],
    // [
    //     'class' => '\kartik\grid\DataColumn',
    //     'attribute' => 'id_user',
    // ],

    [
        'class' => 'kartik\grid\ActionColumn',
        'header' => 'Akun',
        'template' => '{btn_aksi}',
        'buttons' => [
            "btn_aksi" => function ($url, $model, $key) {
                return Html::a('<i class="icon-more-alt"></i>', ['view', 'id' => $model->id], [
                    'class' => 'btn btn-square btn-light btn-air-light btn-sm',
                    'role' => 'modal-remote',
                    'title' => 'Lihat',
                    'data-toggle' => 'tooltip'
                ]);
            },

        ]
    ],

    [
        'class' => 'kartik\grid\ActionColumn',
        'header' => 'Akun',
        'template' => '{edit} {delete}',
        'buttons' => [
            "edit" => function ($url, $model, $key) {
                return Html::a('<i class="icon-more-alt"></i>', ['view', 'id' => $model->id], [
                    'class' => 'btn btn-square btn-light btn-air-light btn-sm',
                    'role' => 'modal-remote',
                    'title' => 'Lihat',
                    'data-toggle' => 'tooltip'
                ]);
            },
            "delete" => function ($url, $model, $key) {
                return Html::a('<i class="icon-more-alt"></i>', ['view', 'id' => $model->id], [
                    'class' => 'btn btn-square btn-light btn-air-light btn-sm',
                    'role' => 'modal-remote',
                    'title' => 'Lihat',
                    'data-toggle' => 'tooltip'
                ]);
            }

        ]
    ],

    // [
    //     'class' => 'kartik\grid\ActionColumn',
    //     'dropdown' => false,
    //     'vAlign' => 'middle',
    //     'urlCreator' => function ($action, $model, $key, $index) {
    //         return Url::to([$action, 'id' => $key]);
    //     },
    //     'viewOptions' => ['role' => 'modal-remote', 'title' => 'Lihat', 'data-toggle' => 'tooltip'],
    //     'updateOptions' => ['role' => 'modal-remote', 'title' => 'Update', 'data-toggle' => 'tooltip'],
    //     'deleteOptions' => [
    //         'role' => 'modal-remote', 'title' => 'Hapus',
    //         'data-confirm' => false, 'data-method' => false, // for overide yii data api
    //         'data-request-method' => 'post',
    //         'data-toggle' => 'tooltip',
    //         'data-confirm-title' => 'Anda Yakin?',
    //         'data-confirm-message' => 'Apakah Anda yakin akan menghapus data ini?'
    //     ],
    // ],

];
