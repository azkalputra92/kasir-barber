<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class FontAsset extends AssetBundle
{
    public $css = [
        '//fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap',
        '//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap',
    ];

    public $cssOptions = [
    ];
}