<?php

use yii\bootstrap5\Html;
use yii\helpers\Url;

return [
    [
        'header' => 'No',
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'header' => 'Nama Jabatan',
        'value' => 'nama',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'header' => 'Nama Badan Usaha',
        'value' => 'nama',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'header' => 'Nama Owner',
        'value' => 'nama',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'header' => 'Alamat Lengkap',
        'value' => 'alamat',
    ],
    // [
    //     'class' => '\kartik\grid\DataColumn',
    //     'attribute' => 'id_user',
    // ],
    // [

    //     'class' => 'kartik\grid\ActionColumn',
    //     'header' => 'Akun',
    //     'template' => '{btn_aksi}',
    //     'buttons' => [
    //         "btn_aksi" => function ($url, $model, $key) {
    //             return Html::a('Buat Akun', ['buat-akun', 'id' => $model->id], [
    //                 'class' => 'btn btn-primary',
    //                 'role' => 'modal-remote',
    //                 'title' => 'Lihat',
    //                 'data-toggle' => 'tooltip'
    //             ]);
    //         },

    //     ]
    // ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'header' => '',
        'template' => '{btn_aksi}',
        'buttons' => [
            "btn_aksi" => function ($url, $model, $key) {
                    return Html::a('...', ['view', 'id' => $model->id], [
                        'class' => 'btn btn-outline-info btn-xs',
                        'role' => 'modal-remote',
                        'title' => 'Detail',
                        'data-toggle' => 'tooltip'
                    ]);
           
            },

        ]
    ],

];