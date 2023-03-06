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
        // 'css/assets/css/js/bootstrap/bootstrap.bundle.min.js',
        // 'css/assets/css/js/icons/feather-icon/feather.min.js',
        // 'css/assets/css/js/icons/feather-icon/feather-icon.js',
        // // Scrollbar js
        // 'css/assets/css/js/scrollbar/simplebar.js',
        // 'css/assets/css/js/scrollbar/custom.js',
        // // End Scrollbar js
        // // Sidebar jquery
        // 'css/assets/css/js/config.js',
        // // End Sidebar jquery
        // // Plugins JS start
        // 'css/assets/css/js/sidebar-menu.js',
        // 'css/assets/css/js/clock.js',
        // 'css/assets/css/js/slick/slick.min.js',
        // 'css/assets/css/js/slick/slick.js',
        // 'css/assets/css/js/header-slick.js',
        // 'css/assets/css/js/chart/apex-chart/apex-chart.js',
        // 'css/assets/css/js/chart/apex-chart/stock-prices.js',
        // 'css/assets/css/js/chart/apex-chart/moment.min.js',
        // 'css/assets/css/js/notify/bootstrap-notify.min.js',
        // 'css/assets/css/js/dashboard/default.js',
        // 'css/assets/css/js/notify/index.js',
        // 'css/assets/css/js/typeahead/handlebars.js',
        // 'css/assets/css/js/typeahead/typeahead.bundle.js',
        // 'css/assets/css/js/typeahead/typeahead.custom.js',
        // 'css/assets/css/js/typeahead-search/handlebars.js',
        // 'css/assets/css/js/typeahead-search/typeahead-custom.js',
        // // Plugins JS Ends
        // // Theme js
        // 'css/assets/css/js/script.js',
        // 'css/assets/css/js/theme-customizer/customizer.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        'yidas\yii\fontawesome\FontawesomeAsset', //https://github.com/yidas/yii2-fontawesome di composer dahulu setelah itu tambah disini. setelah itu extends class kartik ke dalam common/grid (buat sendiri kelasnya)
    ];
}
