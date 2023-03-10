<?php

namespace admin\assets;

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
        'assetsTemplate/css/font-awesome.css',
        'assetsTemplate/css/vendors/icofont.css',
        'assetsTemplate/css/vendors/themify.css',
        'assetsTemplate/css/vendors/flag-icon.css',
        'assetsTemplate/css/vendors/feather-icon.css',
        //  Plugins css start
        'assetsTemplate/css/vendors/slick.css',
        'assetsTemplate/css/vendors/slick-theme.css',
        'assetsTemplate/css/vendors/scrollbar.css',
        'assetsTemplate/css/vendors/animate.css',
        // End Plugins css start
        // Bootstrap css
        'assetsTemplate/css/vendors/bootstrap.css',
        'assetsTemplate/css/style.css',
        'assetsTemplate/css/color-1.css',
        'assetsTemplate/css/responsive.css',

    ];
    public $js = [
        'assetsTemplate/js/bootstrap/bootstrap.bundle.min.js',
        'assetsTemplate/js/icons/feather-icon/feather.min.js',
        'assetsTemplate/js/icons/feather-icon/feather-icon.js',
        // Scrollbar js
        'assetsTemplate/js/scrollbar/simplebar.js',
        'assetsTemplate/js/scrollbar/custom.js',
        // End Scrollbar js
        // Sidebar jquery
        'assetsTemplate/js/config.js',
        // End Sidebar jquery
        // Plugins JS start
        'assetsTemplate/js/sidebar-menu.js',

        'assetsTemplate/js/clock.js',
        'assetsTemplate/js/slick/slick.min.js',
        'assetsTemplate/js/slick/slick.js',
        'assetsTemplate/js/header-slick.js',
        'assetsTemplate/js/chart/apex-chart/apex-chart.js',
        'assetsTemplate/js/chart/apex-chart/stock-prices.js',
        'assetsTemplate/js/chart/apex-chart/moment.min.js',
        'assetsTemplate/js/notify/bootstrap-notify.min.js',
        'assetsTemplate/js/dashboard/default.js',
        'assetsTemplate/js/notify/index.js',
        'assetsTemplate/js/typeahead/handlebars.js',
        'assetsTemplate/js/typeahead/typeahead.bundle.js',
        'assetsTemplate/js/typeahead/typeahead.custom.js',
        'assetsTemplate/js/typeahead-search/handlebars.js',
        'assetsTemplate/js/typeahead-search/typeahead-custom.js',
        // Plugins JS Ends
        // Theme js
        'assetsTemplate/js/script.js',

        'assetsTemplate/js/theme-customizer/customizer.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        'yidas\yii\fontawesome\FontawesomeAsset', //https://github.com/yidas/yii2-fontawesome di composer dahulu setelah itu tambah disini. setelah itu extends class kartik ke dalam common/grid (buat sendiri kelasnya)
    ];
}
