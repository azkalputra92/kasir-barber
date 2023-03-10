<?php

use admin\assets\ChartAsset;
use kartik\grid\GridView;
use yii\bootstrap5\Html;

// use kartik\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';

ChartAsset::register($this);
?>
<div class="site-index">

    <div class="body-content">
        <div class="row">

            <div class="col-md-4">
                <div class="card course-box">
                    <ul class="square-group">
                        <li class="square-1 warning"></li>
                        <li class="square-1 primary"></li>
                        <li class="square-2 warning1"></li>
                        <li class="square-3 danger"></li>
                        <li class="square-4 light"></li>
                        <li class="square-5 warning"></li>
                        <li class="square-6 success"></li>
                        <li class="square-7 success"></li>
                    </ul>
                    <div class="card-body">
                        <div class="course-widget">
                            <div class="course-icon">
                                <svg class="fill-icon">
                                    <use href="../assetsTemplate/svg/icon-sprite.svg#course-1"></use>
                                </svg>
                            </div>
                            <div>
                                <h4 class="mb-0">24</h4><span class="f-light">Jasa Telah Ditangani</span><a class="btn btn-light f-light" href="learning-list-view.html">Lihat Jasa<span class="ms-2">
                                        <svg class="fill-icon f-light">
                                            <use href="../assetsTemplate/svg/icon-sprite.svg#arrowright"></use>
                                        </svg></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card course-box">
                    <ul class="square-group">
                        <li class="square-1 warning"></li>
                        <li class="square-1 primary"></li>
                        <li class="square-2 warning1"></li>
                        <li class="square-3 danger"></li>
                        <li class="square-4 light"></li>
                        <li class="square-5 warning"></li>
                        <li class="square-6 success"></li>
                        <li class="square-7 success"></li>
                    </ul>
                    <div class="card-body">
                        <div class="course-widget">
                            <div class="course-icon warning">
                                <svg class="fill-icon">
                                    <use href="../assetsTemplate/svg/icon-sprite.svg#course-2"></use>
                                </svg>
                            </div>
                            <div>
                                <h4 class="mb-0">3</h4><span class="f-light">Jasa Berlangsung</span><a class="btn btn-light f-light" href="learning-list-view.html">Lihat Jasa<span class="ms-2">
                                        <svg class="fill-icon f-light">
                                            <use href="../assetsTemplate/svg/icon-sprite.svg#arrowright"></use>
                                        </svg></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card course-box">
                    <ul class="square-group">
                        <li class="square-1 warning"></li>
                        <li class="square-1 primary"></li>
                        <li class="square-2 warning1"></li>
                        <li class="square-3 danger"></li>
                        <li class="square-4 light"></li>
                        <li class="square-5 warning"></li>
                        <li class="square-6 success"></li>
                        <li class="square-7 success"></li>
                    </ul>
                    <div class="card-body">
                        <div class="course-widget">
                            <div class="course-icon primary">
                                <svg class="fill-icon">
                                    <use href="../assetsTemplate/svg/icon-sprite.svg#clock"></use>
                                </svg>
                            </div>
                            <div>
                                <h4 class="mb-0">8</h4><span class="f-light">Jasa Akan Datang</span><a class="btn btn-light f-light" href="learning-list-view.html">Lihat Jasa<span class="ms-2">
                                        <svg class="fill-icon f-light">
                                            <use href="../assetsTemplate/svg/icon-sprite.svg#arrowright"></use>
                                        </svg></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card course-box">
                    <div class="card-body">
                        <div class="row m-2">
                            <div class="col-md-8">
                                <!-- <div class="card"> -->
                                <!-- <div class="card-header card-no-border"> -->
                                <div class="header-top">
                                    <h5 class="m-0">Grafik Keuangan Jasa</h5>
                                    <div class="header-right-icon">
                                        <div class="btn-group">
                                            <button class="btn btn-outline-light dropdown-toggle" id="incomedropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" btn-outline-light dropdown-toggle">2023</button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="incomedropdown">
                                                <a class="dropdown-item" href="#">2024</a>
                                                <a class="dropdown-item" href="#">2025</a>
                                                <a class="dropdown-item" href="#">2026 </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- </div> -->
                                <!-- <div class="card-body pt-0"> -->
                                <div id="grafikKeuanganJasa"></div>
                                <!-- </div> -->
                                <!-- </div> -->
                            </div>
                            <div class="col-md-4 p-0 align-items-center d-flex">
                                <div class="row g-sm-4 g-2">
                                    <div class="col-xl-12 col-md-4">
                                        <div class="light-card balance-card widget-hover">
                                            <div class="svg-box">
                                                <svg class="svg-fill">
                                                    <use href="../assetsTemplate/svg/icon-sprite.svg#orders"></use>
                                                </svg>
                                            </div>
                                            <div> <span class="f-light">Belum Bayar</span>
                                                <h6 class="mt-1 mb-0">7 Jasa</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-md-4">
                                        <div class="light-card balance-card widget-hover">
                                            <div class="svg-box">
                                                <svg class="svg-fill">
                                                    <use href="../assetsTemplate/svg/icon-sprite.svg#expense"></use>
                                                </svg>
                                            </div>
                                            <div> <span class="f-light">Sisa Bayar</span>
                                                <h6 class="mt-1 mb-0">12 Jasa</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-md-4">
                                        <div class="light-card balance-card widget-hover">
                                            <div class="svg-box">
                                                <svg class="svg-fill">
                                                    <use href="../assetsTemplate/svg/icon-sprite.svg#doller-return"></use>
                                                </svg>
                                            </div>
                                            <div> <span class="f-light">Sudah Bayar</span>
                                                <h6 class="mt-1 mb-0">40 Jasa</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-7">
                <!-- <div class="card course-box mb-0"> -->
                <!-- <div class="row"> -->
                <div id="ajaxCrudDatatable">
                    <?= GridView::widget([
                        'id' => 'crud-datatable',
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'pjax' => true,
                        'summary' => "Menampilkan <b>{begin}</b> - <b>{end}</b> dari <b>{totalCount}</b> hasil",
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
                            'heading' => '<b>Data Siswa</b>',
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
                            'after' => '<div class="clearfix"></div>',
                        ],
                        'panelFooterTemplate' => '<br><div class="d-flex justify-content-between">{summary}{pager} </div>',
                    ]) ?>
                </div>
                <!-- </div> -->
                <!-- </div> -->
            </div>

            <div class="col-md-5">
                <div class="card course-box">
                    <div class="card-body">
                        <div class="row">
                            <div class="default-datepicker">
                                <div class="datepicker-here" data-language="en">
                                    <div class="datepicker-inline">
                                        <div class="datepicker"><i class="datepicker--pointer"></i>
                                            <nav class="datepicker--nav">
                                                <div class="datepicker--nav-action" data-action="prev"><svg>
                                                        <path d="M 17,12 l -5,5 l 5,5"></path>
                                                    </svg></div>
                                                <div class="datepicker--nav-title">March, <i> 2023 </i></div>
                                                <div class="datepicker--nav-action" data-action="next"><svg>
                                                        <path d="M 14,12 l 5,5 l -5,5"></path>
                                                    </svg></div>
                                            </nav>
                                            <div class="datepicker--content">
                                                <div class="datepicker--days datepicker--body active">
                                                    <div class="datepicker--days-names">
                                                        <div class="datepicker--day-name -weekend-">S</div>
                                                        <div class="datepicker--day-name">M</div>
                                                        <div class="datepicker--day-name">T</div>
                                                        <div class="datepicker--day-name">W</div>
                                                        <div class="datepicker--day-name">T</div>
                                                        <div class="datepicker--day-name">F</div>
                                                        <div class="datepicker--day-name -weekend-">S</div>
                                                    </div>
                                                    <div class="datepicker--cells datepicker--cells-days">
                                                        <div class="datepicker--cell datepicker--cell-day -weekend- -other-month-" data-date="26" data-month="1" data-year="2023">26</div>
                                                        <div class="datepicker--cell datepicker--cell-day -other-month-" data-date="27" data-month="1" data-year="2023">27</div>
                                                        <div class="datepicker--cell datepicker--cell-day -other-month-" data-date="28" data-month="1" data-year="2023">28</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="1" data-month="2" data-year="2023">1</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="2" data-month="2" data-year="2023">2</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="3" data-month="2" data-year="2023">3</div>
                                                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="4" data-month="2" data-year="2023">4</div>
                                                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="5" data-month="2" data-year="2023">5</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="6" data-month="2" data-year="2023">6</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="7" data-month="2" data-year="2023">7</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="8" data-month="2" data-year="2023">8</div>
                                                        <div class="datepicker--cell datepicker--cell-day -current-" data-date="9" data-month="2" data-year="2023">9</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="10" data-month="2" data-year="2023">10</div>
                                                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="11" data-month="2" data-year="2023">11</div>
                                                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="12" data-month="2" data-year="2023">12</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="13" data-month="2" data-year="2023">13</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="14" data-month="2" data-year="2023">14</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="15" data-month="2" data-year="2023">15</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="16" data-month="2" data-year="2023">16</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="17" data-month="2" data-year="2023">17</div>
                                                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="18" data-month="2" data-year="2023">18</div>
                                                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="19" data-month="2" data-year="2023">19</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="20" data-month="2" data-year="2023">20</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="21" data-month="2" data-year="2023">21</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="22" data-month="2" data-year="2023">22</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="23" data-month="2" data-year="2023">23</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="24" data-month="2" data-year="2023">24</div>
                                                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="25" data-month="2" data-year="2023">25</div>
                                                        <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="26" data-month="2" data-year="2023">26</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="27" data-month="2" data-year="2023">27</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="28" data-month="2" data-year="2023">28</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="29" data-month="2" data-year="2023">29</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="30" data-month="2" data-year="2023">30</div>
                                                        <div class="datepicker--cell datepicker--cell-day" data-date="31" data-month="2" data-year="2023">31</div>
                                                        <div class="datepicker--cell datepicker--cell-day -weekend- -other-month-" data-date="1" data-month="3" data-year="2023">1</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-4">
                                <div>
                                    <h5 class="m-0">Upcoming Schedule</h5>
                                </div>
                                <div>
                                    <ul class="schedule-list mt-4">
                                        <li class="primary">
                                            <div>
                                                <h6 class="mb-1">Web Design</h6>
                                                <span>January 3, 2022</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>