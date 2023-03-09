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
        'css/myStyle.css',
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200',
        'https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap',
        'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap',
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
        // Toggle Button
        'assetsTemplate/js/icons/feather-icon/feather.min.js',
        'assetsTemplate/js/icons/feather-icon/feather-icon.js',
        // Scrollbar js
        'assetsTemplate/js/scrollbar/simplebar.js',
        'assetsTemplate/js/scrollbar/custom.js',
        // End Scrollbar js

        // Plugins JS start
        'assetsTemplate/js/sidebar-menu.js',

        // Plugins JS Ends
        // Theme js
        'assetsTemplate/js/script.js',
        // 'assetsTemplate/js/theme-customizer/customizer.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        'yidas\yii\fontawesome\FontawesomeAsset', //https://github.com/yidas/yii2-fontawesome di composer dahulu setelah itu tambah disini. setelah itu extends class kartik ke dalam common/grid (buat sendiri kelasnya)
    ];
}