<?php
use yii\bootstrap5\Html;
use yii\helpers\Url;

return [
[
'class' => 'kartik\grid\ActionColumn',
'header' => '',
'template' => '{view}',
'buttons' => [
"view" => function ($url, $model, $key) {
return Html::a('<i class="icofont icofont-plus-circle"></i>', ['view', 'id' => $model->id], [
'class' => 'btn-lg',
'role' => 'modal-remote',
'title' => 'Lihat',
'data-toggle' => 'tooltip'
]);
},


]
],
//[
//'class' => 'kartik\grid\CheckboxColumn',
//'width' => '20px',
//],
[
'class' => 'kartik\grid\SerialColumn',
'header' => 'No',
'width' => '30px',
],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id',
    // ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'label' => 'nis<i class="icofont icofont-sort-alt"></i>',
        'attribute'=>'nis',
        'vAlign' => 'middle',
        'encodeLabel' => false,
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'label' => 'nama<i class="icofont icofont-sort-alt"></i>',
        'attribute'=>'nama',
        'vAlign' => 'middle',
        'encodeLabel' => false,
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'label' => 'alamat<i class="icofont icofont-sort-alt"></i>',
        'attribute'=>'alamat',
        'vAlign' => 'middle',
        'encodeLabel' => false,
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'label' => 'id_user<i class="icofont icofont-sort-alt"></i>',
        'attribute'=>'id_user',
        'vAlign' => 'middle',
        'encodeLabel' => false,
    ],

[
'class' => 'kartik\grid\ActionColumn',
'header' => '',
'template' => '{btn_custom} {edit} {delete}',
'buttons' => [
"btn_custom" => function ($url, $model, $key) {
return Html::a('<i class="far fa-images"></i>', ['view', 'id' => $model->id], [
'class' => 'btn btn-square btn-light btn-air-light btn-md',
'role' => 'modal-remote',
'title' => 'Lihat',
'data-toggle' => 'tooltip'
]);
},
"edit" => function ($url, $model, $key) {
return Html::a('<i class="icofont icofont-pencil-alt-5"></i>', ['update', 'id' => $model->id], [
'class' => 'btn btn-square btn-light btn-air-light btn-md',
'role' => 'modal-remote',
'title' => 'Lihat',
'data-toggle' => 'tooltip'
]);
},
"delete" => function ($url, $model, $key) {
return Html::a('<i class="icofont icofont-ui-delete"></i>', ['delete', 'id' => $model->id], [
'class' => 'btn btn-square btn-light btn-air-light btn-md',
'role' => 'modal-remote', 'title' => 'Hapus',
'data-confirm' => false, 'data-method' => false, // for overide yii data api
'data-request-method' => 'post',
'data-toggle' => 'tooltip',
'data-confirm-title' => 'Anda Yakin?',
'data-confirm-message' => 'Apakah Anda yakin akan menghapus data ini?'
]);
}

]
],

// [
// 'class' => 'kartik\grid\ActionColumn',
// 'dropdown' => false,
// 'vAlign' => 'middle',
// 'urlCreator' => function ($action, $model, $key, $index) {
// return Url::to([$action, 'id' => $key]);
// },
// 'viewOptions' => ['role' => 'modal-remote', 'title' => 'Lihat', 'data-toggle' => 'tooltip'],
// 'updateOptions' => ['role' => 'modal-remote', 'title' => 'Update', 'data-toggle' => 'tooltip'],
// 'deleteOptions' => [
// 'role' => 'modal-remote', 'title' => 'Hapus',
// 'data-confirm' => false, 'data-method' => false, // for overide yii data api
// 'data-request-method' => 'post',
// 'data-toggle' => 'tooltip',
// 'data-confirm-title' => 'Anda Yakin?',
// 'data-confirm-message' => 'Apakah Anda yakin akan menghapus data ini?'
// ],
// ],

];