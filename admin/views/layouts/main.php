<?php

/** @var \yii\web\View $this */
/** @var string $content */

use admin\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>

<body onload="startTime()">
    <?php $this->beginBody() ?>

    <!-- loader starts-->
    <!-- <div class=" loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"></fecolormatrix>
            </filter>
        </svg>
    </div> -->
    <!-- loader ends -->

    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <form class="form-inline search-full col" action="#" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus />
                                <div class="spinner-border Typeahead-spinner" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                                <i class="close-search" data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper">
                        <a href="index.html"><img class="img-fluid" src="../assetsTemplate/images/logo/logo.png" alt="" /></a>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                    </div>
                </div>

                <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                    <ul class="nav-menus">

                        <li>
                            <span class="header-search">
                                <svg>
                                    <use href="../assetsTemplate/svg/icon-sprite.svg#search"></use>
                                </svg></span>
                        </li>

                        <li>
                            <div class="mode">
                                <svg>
                                    <use href="../assetsTemplate/svg/icon-sprite.svg#moon"></use>
                                </svg>
                            </div>
                        </li>

                        <li class="profile-nav onhover-dropdown pe-0 py-0">
                            <div class="media profile-media">
                                <img class="b-r-10" src="../assetsTemplate/images/dashboard/profile.png" alt="" />
                                <div class="media-body">
                                    <span><?= Yii::$app->user->identity->username ?></span>
                                    <p class="mb-0 font-roboto">
                                        Admin <i class="middle fa fa-angle-down"></i>
                                    </p>
                                </div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">

                                <li>
                                    <form action="../site/logout">
                                        <a type="submit"><i data-feather="log-in"> </i><span>Log Out</span></a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
                    <div class="ProfileCard u-cf">
              <div class="ProfileCard-avatar"><svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-airplay m-0"
                ><path
                    d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"
                  ></path><polygon
                    points="12 15 17 21 7 21 12 15"
                  ></polygon></svg></div>
              <div class="ProfileCard-details">
                <div class="ProfileCard-realName">{{name}}</div>
              </div>
            </div>
          </script>
                <script class="empty-template" type="text/x-handlebars-template">
                    <div class="EmptyMessage">Your search turned up 0 results. This most
              likely means the backend is down, yikes!</div>
          </script>
            </div>
        </div>
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper" sidebar-layout="stroke-svg">
                <div>
                    <div class="logo-wrapper">
                        <a href="index.html"><img class="img-fluid for-light" src="../assetsTemplate/images/logo/logo.png" alt="" /><img class="img-fluid for-dark" src="../assetsTemplate/images/logo/logo_dark.png" alt="" /></a>
                        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="toggle-sidebar">
                            <i class="status_toggle middle sidebar-toggle" data-feather="grid">
                            </i>
                        </div>
                    </div>
                    <div class="logo-icon-wrapper">
                        <a href="index.html"><img class="img-fluid" src="../assetsTemplate/images/logo/logo-icon.png" alt="" /></a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow">
                            <i data-feather="arrow-left"></i>
                        </div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn">
                                    <a href="index.html"><img class="img-fluid" src="../assetsTemplate/images/logo/logo-icon.png" alt="" /></a>
                                    <div class="mobile-back text-end">
                                        <span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                                    </div>
                                </li>
                                <li class="sidebar-main-title">
                                    <div>
                                        <h6 class="lan-1">Generall</h6>
                                    </div>
                                </li>
                                <li class="sidebar-list">
                                    <a class="sidebar-link" href="../site/index">
                                        <svg class="stroke-icon">
                                            <use href="../assetsTemplate/svg/icon-sprite.svg#stroke-home"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assetsTemplate/svg/icon-sprite.svg#fill-home"></use>
                                        </svg><span class="lan-3">Dashboard </span></a>

                                </li>

                                <li class="sidebar-list">
                                    <a class="sidebar-link " href="siswa/index">
                                        <svg class="stroke-icon">
                                            <use href="../assetsTemplate/svg/icon-sprite.svg#stroke-widget"></use>
                                        </svg>
                                        <svg class="fill-icon">
                                            <use href="../assetsTemplate/svg/icon-sprite.svg#fill-widget"></use>
                                        </svg><span>Siswa</span></a>

                                </li>



                                <li class="sidebar-list">
                                    <?php
                                    if (Yii::$app->user->isGuest) {
                                        echo html::a(
                                            'Login',
                                            ['site/login']
                                        );
                                    } else {


                                        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'sidebar-link']);
                                        echo Html::submitButton(
                                            'Logout (' . Yii::$app->user->identity->username . ')',
                                            ['class' => 'btn btn-outline-primary sidebar-link logout']
                                        );
                                        echo Html::endForm();
                                    } ?>


                                </li>



                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow">
                            <i data-feather="arrow-right"></i>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->

            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">

                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <svg class="stroke-icon">
                                                <use href="../assetsTemplate/svg/icon-sprite.svg#stroke-home"></use>
                                            </svg></a>
                                    </li>


                                    <li class="breadcrumb-item active"></li>
                                    <?= Breadcrumbs::widget([
                                        'itemTemplate' => '<li class="breadcrumb-item">{link}</li>',
                                        'links' =>
                                        isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                    ]) ?>
                                </ol>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <?= $content ?>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Copyright 2022 © Cuba theme by pixelstrap</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
