<?php

use yii\helpers\Url;
use yii\bootstrap5\Html;
use yii\bootstrap5\Modal;
use kartik\grid\GridView;
use cangak\ajaxcrud\CrudAsset;
use cangak\ajaxcrud\BulkButtonWidget;
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

            'pager' => [


                'firstPageLabel' => 'Previous',
                'lastPageLabel'  => 'Next',
                // 'options'       =>  [
                //     'class' => 'float-end'
                // ]
                // 'class' => LinkPager::class
            ],

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
            // 'tableOptions' => ['class' => 'table table-hover table-lg'],
            'panel' => [
                'type' => '',
                'footer' => false,

                'heading' => '<b>Daftar Client</b>' .  Html::a(
                    '<i class="fas fa fa-plus" aria-hidden="true"></i> Client Baru',
                    ['create'],
                    ['role' => 'modal-remote', 'title' => 'Tambah Siswas', 'class' => 'btn btn-info']
                ),
                // 'before' => '<div class="input-group mb-3">
                //                 <input type="text" class="form-control" placeholder="Cari Nama Client..." aria-label="Recipients username" aria-describedby="button-addon2">
                //                 <button class="btn btn-outline-primary" type="button" id="button-addon2"><i class="fas fa-search"></i> Pencarian</button>
                //             </div>',
                'before' =>

                Html::beginForm(['/siswa2/index'], 'GET', ['class' => 'form-inline']) .
                    '<div class="input-group mb-3">' .
                    Html::input('text', 'Siswa2Search[cari]', '', ['class' => 'form-control', 'placeholder' => 'Cari Nama Jasa...']) .
                    Html::submitButton(
                        '<i class="fas fa-search"></i> Pencarian',
                        [
                            'data-pjax' => 1,
                            'class' => 'btn btn-outline-primary'
                        ]
                    ) . '</div>'
                    . Html::endForm(),
                // 'after' => BulkButtonWidget::widget([
                //     'buttons' => Html::a(
                //         '<i class="fas fa fa-trash" aria-hidden="true"></i>&nbsp; Hapus semua',
                //         ["bulkdelete"],
                //         [
                //             "class" => "btn btn-danger btn-xs",
                //             'role' => 'modal-remote-bulk',
                //             'data-confirm' => false, 'data-method' => false, // for overide yii data api
                //             'data-request-method' => 'post',
                //             'data-confirm-title' => 'Aapakah anda yakin?',
                //             'data-confirm-message' => 'Apakah Anda yakin akan menghapus data ini?'
                //         ]
                //     ),
                // ]) .
                //     '<div class="clearfix"></div>',

                'after' => '<br><div class="d-flex justify-content-between">{summary}{pager} </div>',

                // 'footer' => '<div class="d-flex justify-content-between">{summary}{pager} </div>',

            ]
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