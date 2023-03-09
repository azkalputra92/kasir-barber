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
  <div class="mb-4">
    <a href='/admin/siswa2/index' class="link-dark">
      <h6><span class="material-symbols-outlined align-middle">arrow_back</span> <span
          class="align-middle">Kembali</span></h6>
    </a>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>
            <span class="material-symbols-outlined me-2 align-middle">person_search</span>
            <span class="align-middle">Detail Client</span>
          </h5>
        </div>
        <div class="card-body border-bottom">
          <div class="row">
            <div class="col-md-3">
              <div class="row text-muted">Nama Perusahaan</div>
              <div class="row"><?= $data->nama; ?></div>
            </div>
            <div class="col-md-3">
              <div class="row text-muted">Nama Badan Usaha</div>
              <div class="row"><?= $data->nama; ?></div>
            </div>
            <div class="col-md-3">
              <div class="row text-muted">Nama Owner</div>
              <div class="row"><?= $data->nama; ?></div>
            </div>
            <div class="col-md-3">
              <div class="row text-muted">Alamat Lengkap</div>
              <div class="row"><?= $data->alamat; ?></div>
            </div>
          </div>

        </div>
        <div class="card-body">
          <a class="me-2 iconEdit" href="/admin/siswa2/view?id=1" title="Detail" role="modal-remote"
            data-toggle="tooltip">
            <span class="material-symbols-outlined align-middle">mode_edit</span>
          </a>
          <a class="iconDelete" href="/admin/siswa2/view?id=1" href="/admin/siswa2/view?id=1" title="Detail"
            role="modal-remote" data-toggle="tooltip">
            <span class="material-symbols-outlined align-middle">delete</span>
          </a>
        </div>
      </div>
      <div class="col-sm-12">
        <div id="ajaxCrudDatatable">
          <?= GridView::widget([
            'id' => 'crud-datatable',
            'dataProvider' => $dataProvider,
            'filterModel' => null,
            'summary' => "Menampilkan <b>{begin}</b> - <b>{end}</b> dari <b>{totalCount}</b> hasil",
            'pager' => [


                'firstPageLabel' => 'Previous',
                'lastPageLabel'  => 'Next',
            ],

            'pjax' => true,

            'columns' => require(__DIR__ . '/_columns_detail_client.php'),
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
                'footer' => false,

                'heading' => '<b>Daftar Kontak Client</b>' .  Html::a(
                    '<i class="fas fa fa-plus" aria-hidden="true"></i> Kontak Client',
                    ['create'],
                    ['role' => 'modal-remote', 'title' => 'Kontak Client', 'class' => 'btn btn-info']
                ),
                'before' =>

                Html::beginForm(['/siswa2/index'], 'GET', ['class' => 'form-inline']) .
                    '<div class="input-group mb-3">' .
                    Html::input('text', 'Siswa2Search[cari]', '', ['class' => 'form-control', 'placeholder' => 'Cari nama client...']) .
                    Html::submitButton(
                        '<i class="fas fa-search"></i> Pencarian',
                        [
                            'data-pjax' => 1,
                            'class' => 'btn btn-outline-primary'
                        ]
                    ) . '</div>'
                    . Html::endForm(),

                'after' => '<br><div class="d-flex justify-content-between">{summary}{pager} </div>',
                        ],
        ]) ?>
        </div>
      </div>
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