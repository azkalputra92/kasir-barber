<?php

use yii\helpers\Url;
use yii\bootstrap5\Html;
use yii\bootstrap5\Modal;
use kartik\grid\GridView;
use kartik\date\DatePicker;
use cangak\ajaxcrud\CrudAsset;
use cangak\ajaxcrud\BulkButtonWidget;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\LinkPager;

/* @var $this yii\web\View */
/* @var $searchModel admin\models\Siswa2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Siswas';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<div class="siswa-index">
    <div id="ajaxCrudDatatable">
        <?= GridView::widget([
            'id' => 'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => null,
            'summary' => "Menampilkan <b>{begin}</b> - <b>{end}</b> dari <b>{totalCount}</b> hasil",
            'pjax' => true,
            'columns' => require(__DIR__ . '/_columns.php'),
            'toolbar' => [
                [
                    'content' =>
                    '<hr>'
                ],
            ],
            'striped' => false,
            'condensed' => true,
            'responsive' => true,

            'panel' => [
                'type' => '',

                'heading' => '<b>Daftar Client</b>' .  Html::a(
                    '<i class="fas fa fa-plus" aria-hidden="true"></i> Client Baru',
                    ['create'],
                    ['role' => 'modal-remote', 'title' => 'Tambah Siswas', 'class' => 'btn btn-info']
                ),

                'before' =>
                '<div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">' .
                    Html::beginForm(['/siswa2/index'], 'GET', ['data-pjax' => true]) .

                    '<div class="input-group mb-3">' .
                    Html::input('text', 'Siswa2Search[cari]', '', ['data-pjax' => true, 'class' => 'form-control', 'placeholder' => 'Cari Nama Jasa...']) .
                    Html::submitButton(
                        '<i class="fas fa-search"></i> Pencarian',
                        [
                            'data-pjax' => true,
                            'class' => 'btn btn-outline-primary'
                        ]
                    ) . '</div>' .
                    Html::endForm() .
                    '</div>' .
                    '<div class="col-md-6">' .
                    Html::beginForm(['/siswa2/index'], 'GET', ['data-pjax' => true]) .

                    '<div class="input-group mb-3">' .
                    '<div class="row">' .
                    '<div class="col-md-9">' .
                    DatePicker::widget([
                        'name' => 'from_date',

                        'type' => DatePicker::TYPE_RANGE,
                        'name2' => 'to_date',

                        'options' => [
                            'placeholder' => 'Pilih Tanggal'
                        ],
                        'options2' => [
                            'placeholder' => 'Pilih Tanggal'
                        ],
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'yyyy-mm-dd',
                        ]
                    ]) . '</div>' .
                    '<div class="col-md-3">' .
                    Html::submitButton(
                        '<i class="fas fa-sliders-h"></i> Filter',
                        [
                            'data-pjax' => true,
                            'class' => 'btn btn-outline-primary'
                        ]
                    ) . '</div>' . '</div>' .
                    '</div>' .
                    Html::endForm() .
                    '</div>' .
                    '</div>
                    </div>
                </div>' . '<div class="clearfix"></div>',

                'footer' =>  false,

            ],
            'panelAfterTemplate' => '<br><div class="d-flex justify-content-between">{summary}{pager} </div>'
        ]) ?>
    </div>
</div>
<?php Modal::begin([
    "options" => [
        "id" => "ajaxCrudModal",
        "tabindex" => false // important for Select2 to work properly
    ],
    "id" => "ajaxCrudModal",
    "footer" => "", // always need it for jquery plugin
]) ?>
<?php Modal::end(); ?>