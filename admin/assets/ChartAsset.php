<?php

namespace admin\assets;

use yii\web\AssetBundle;

/**
 * Main admin application asset bundle.
 */
class ChartAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [];
    public $js = [
        'assetsTemplate/js/chart/apex-chart/apex-chart.js',
        'js/dashboard-chart.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
