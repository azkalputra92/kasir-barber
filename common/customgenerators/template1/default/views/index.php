<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;
use yii\bootstrap5\Modal;
use yii\helpers\Url;
use yii\bootstrap5\Html;


/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();
echo "<?php\n";
?>
use yii\helpers\Url;
use yii\bootstrap5\Html;
use yii\bootstrap5\Modal;
use kartik\grid\GridView;
use cangak\ajaxcrud\CrudAsset; 
use cangak\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
<?= !empty($generator->searchModelClass) ? "/* @var \$searchModel " . ltrim($generator->searchModelClass, '\\') . " */\n" : '' ?>
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>;
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index">
    <div id="ajaxCrudDatatable">
        <?="<?="?>GridView::widget([
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
                'heading' => '<b>Data <?= Inflector::camel2words(StringHelper::basename($generator->modelClass)) ?></b>' .  Html::a(
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
        ])<?="?>\n"?>
    </div>
</div>
<?='<?php Modal::begin([
   "options" => [
    "id"=>"ajaxCrudModal",
    "tabindex" => false // important for Select2 to work properly
],
   "id"=>"ajaxCrudModal",
    "footer"=>"",// always need it for jquery plugin
])?>'."\n"?>
<?='<?php Modal::end(); ?>'?>

