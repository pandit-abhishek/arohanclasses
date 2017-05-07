<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/jquery.bxslider.css',
		'css/font-awesome.min.css',
        'vendor/kartik-v/dependent-dropdown/css/dependent-dropdown.css'

    ];
    public $js = [
        'js/jquery.bxSlider.min.js',
        'js/custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
