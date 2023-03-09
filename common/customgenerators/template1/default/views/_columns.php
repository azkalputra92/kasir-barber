<?php

use yii\helpers\Url;
use yii\bootstrap5\Html;
use yii\bootstrap\Modal;
use yii\helpers\Inflector;
use yii\helpers\StringHelper;


/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$modelClass = StringHelper::basename($generator->modelClass);
$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();
$actionParams = $generator->generateActionParams();

echo "<?php\n";

?>
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
<?php
$count = 0;
foreach ($generator->getColumnNames() as $name) {
    if ($name == 'id' || $name == 'created_at' || $name == 'updated_at') {
        echo "    // [\n";
        echo "        // 'class'=>'\kartik\grid\DataColumn',\n";
        echo "        // 'attribute'=>'" . $name . "',\n";
        echo "    // ],\n";
    } else if (++$count < 6) {
        echo "    [\n";
        echo "        'class'=>'\kartik\grid\DataColumn',\n";
        echo "         'label' => '" . $name . '<i class="icofont icofont-sort-alt"></i>' . "',\n";
        echo "         'attribute'=>'" . $name . "',\n";
        echo "         'vAlign' => 'middle',\n";
        echo "         'encodeLabel' => false,\n";
        echo "    ],\n";
    } else {
        echo "    // [\n";
        echo "        // 'class'=>'\kartik\grid\DataColumn',\n";
        echo "        // 'label' => '" . $name . '<i class="icofont icofont-sort-alt"></i>' . "',\n";
        echo "        // 'attribute'=>'" . $name . "',\n";
        echo "        // 'vAlign' => 'middle',\n";
        echo "        // 'encodeLabel' => false,\n";
        echo "    // ],\n";
    }
}
?>

[
'class' => 'kartik\grid\ActionColumn',
'header' => '',
'template' => '{edit} {delete}',
'buttons' => [
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