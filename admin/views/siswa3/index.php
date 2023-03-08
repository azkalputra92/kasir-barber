<?php
use yii\helpers\Url;
use yii\bootstrap5\Html;
use yii\bootstrap5\Modal;
use kartik\grid\GridView;
use cangak\ajaxcrud\CrudAsset; 
use cangak\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
/* @var $searchModel admin\models\Siswa3Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Siswas';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<div class="siswa-index">
    <div id="ajaxCrudDatatable">
        <?=GridView::widget([
            'id'=>'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'pjax'=>true,
            'summary'=>"Menampilkan <b>{begin}</b> - <b>{end}</b> dari <b>{totalCount}</b> hasil",
            'columns' => require(__DIR__.'/_columns.php'),
            'toolbar'=> [
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
                'heading' => '<b>Data Siswa</b>' .  Html::a(
                    '<i class="fas fa fa-plus" aria-hidden="true"></i> Client Baru',
                    ['create'],
                    ['role' => 'modal-remote', 'title' => 'Tambah Siswas', 'class' => 'btn btn-info']
                ),
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
                        . Html::endForm() ,
                'after' => '<div class="clearfix"></div>',
            ],
            'panelFooterTemplate'=> '<br><div class="d-flex justify-content-between">{summary}{pager} </div>',
        ])?>
    </div>
</div>
<?php Modal::begin([
   "options" => [
    "id"=>"ajaxCrudModal",
    "tabindex" => false // important for Select2 to work properly
],
   "id"=>"ajaxCrudModal",
    "footer"=>"",// always need it for jquery plugin
])?>
<?php Modal::end(); ?>
