<?php
use yii\helpers\Url;
use yii\bootstrap5\Html;
use yii\bootstrap5\Modal;
use kartik\grid\GridView;
use cangak\ajaxcrud\CrudAsset;
use cangak\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
/* @var $searchModel admin\models\ClientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clients';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<div class="client-index">
    <div id="ajaxCrudDatatable">
        <?=GridView::widget([
        'id'=>'crud-datatable',
        'dataProvider' => $dataProvider,
        'filterModel' => null,
        'pjax'=>true,
        'summary'=>"Menampilkan <b>{begin}</b> - <b>{end}</b> dari <b>{totalCount}</b> hasil",
        'columns' => require(__DIR__.'/_columns.php'),
        'toolbar'=> [
        [
        'content' =>
        '
        <hr>'
        ],
        ],
        'striped' => false,
        'condensed' => true,
        'responsive' => true,
        'panel' => [
        'type' => '',
        'heading' => '<b>Data Client</b>' . Html::a(
        '<i class="fas fa fa-plus" aria-hidden="true"></i> Client',
        ['create'],
        ['role' => 'modal-remote', 'title' => 'Tambah Siswas', 'class' => 'btn btn-info']
        ),
        'before' =>
        '<div class="row">
            <div class="col-md-12">
                <div class="row">
                    ' .
                    Html::beginForm(['/siswa2/index'], 'GET', ['data-pjax' => true]) .

                    '<div class="input-group mb-3">' .
                        Html::input('text', 'Siswa2Search[cari]', '', ['data-pjax' => true, 'class' => 'form-control', 'placeholder' => 'Cari Nama Jasa...']) .
                        Html::submitButton(
                        '<i class="fas fa-search"></i> Pencarian',
                        [
                        'data-pjax' => true,
                        'class' => 'btn btn-primary btn-search'
                        ]
                        ) . '</div>' .
                    Html::endForm() .

                    '</div>
            </div>
        </div>',
        'after' => '<div class="clearfix"></div>',
        ],
        'panelFooterTemplate'=> '<br>
        <div class="d-flex justify-content-between">{summary}{pager} </div>',
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