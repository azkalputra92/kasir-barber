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
        'template' => '{btn_edit} {btn_delete}',
        'buttons' => [
            "btn_edit" => function ($url, $model, $key) {
                    return Html::a('<span class="material-symbols-outlined align-middle" style="color: #28A745;">mode_edit</span>', ['view', 'id' => $model->id], [
                        'class' => 'p-2 me-2',
                        'role' => 'modal-remote',
                        'title' => 'Detail',
                        'data-toggle' => 'tooltip',
                        'style' => '
                            border: 1px solid #E0E0E0;
                            box-shadow: 0px 1px 2px rgba(10, 10, 10, 0.12);
                            border-radius: 4px;'
                    ]);
            },
            "btn_delete" => function ($url, $model, $key) {
                    return Html::a('<span class="material-symbols-outlined align-middle" style="color: #DC3545;">delete</span>', ['view', 'id' => $model->id], [
                        'class' => 'p-2',
                        'role' => 'modal-remote',
                        'title' => 'Detail',
                        'data-toggle' => 'tooltip',
                        'style' => '
                            border: 1px solid #E0E0E0;
                            box-shadow: 0px 1px 2px rgba(10, 10, 10, 0.12);
                            border-radius: 4px;'
                    ]);
            },
        ],
    ],
    // [
    //     'class' => 'kartik\grid\ActionColumn',
    //     'dropdown' => false,
    //     'vAlign' => 'middle',
    //     'urlCreator' => function ($action, $model, $key, $index) {
    //         return Url::to([$action, 'id' => $key]);
    //     },
    //     'template' => '{view} {delete}',
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