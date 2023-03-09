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
        'header' => 'Nama',
        'value' => 'nama',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'header' => 'Jabatan',
        'value' => 'nama',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'header' => 'Email',
        'value' => 'nama',
    ],
    [
        'class' => '\kartik\grid\DataColumn',
        'header' => 'Nomor Whatsapp',
        'value' => 'alamat',
    ],

    [
        'class' => 'kartik\grid\ActionColumn',
        'header' => '',
        'template' => '{btn_edit} {btn_delete}',
        'buttons' => [
            "btn_edit" => function ($url, $model, $key) {
                    return Html::a('<span class="material-symbols-outlined align-middle" style="color: #28A745;">mode_edit</span>', ['view', 'id' => $model->id], [
                        'class' => 'me-2 iconEdit',
                        'role' => 'modal-remote',
                        'title' => 'Detail',
                        'data-toggle' => 'tooltip',
                    ]);
            },
            "btn_delete" => function ($url, $model, $key) {
                    return Html::a('<span class="material-symbols-outlined align-middle" style="color: #DC3545;">delete</span>', ['view', 'id' => $model->id], [
                        'class' => 'iconDelete',
                        'role' => 'modal-remote',
                        'title' => 'Detail',
                        'data-toggle' => 'tooltip',
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