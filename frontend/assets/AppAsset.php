<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main admin application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/myStyle.css',
        'assetsTemplate/css/font-awesome.css',
        'assetsTemplate/css/vendors/icofont.css',
        'assetsTemplate/css/vendors/themify.css',
        'assetsTemplate/css/vendors/flag-icon.css',
        'assetsTemplate/css/vendors/feather-icon.css',
        'assetsTemplate/css/vendors/slick.css',
        'assetsTemplate/css/vendors/slick-theme.css',
        'assetsTemplate/css/vendors/scrollbar.css',
        'assetsTemplate/css/vendors/animate.css',
        'assetsTemplate/css/vendors/bootstrap.css',
        'assetsTemplate/css/style.css',
        'assetsTemplate/css/color-1.css',
        'assetsTemplate/css/responsive.css',

    ];
    public $js = [
        'assetsTemplate/js/bootstrap/bootstrap.bundle.min.js',
        'assetsTemplate/js/icons/feather-icon/feather.min.js',
        'assetsTemplate/js/icons/feather-icon/feather-icon.js',
        'assetsTemplate/js/scrollbar/simplebar.js',
        'assetsTemplate/js/scrollbar/custom.js',
        'assetsTemplate/js/sidebar-menu.js',
        'assetsTemplate/js/script.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        'yidas\yii\fontawesome\FontawesomeAsset',
        FontAsset::class,
    ];
}
