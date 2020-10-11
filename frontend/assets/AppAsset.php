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
        '//fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;800&display=swap',
        'css/style-starter.css',
        'css/site.css',
    ];
    public $js = [
        // 'https://code.jquery.com/jquery-3.3.1.min.js',
        'js/jquery-3.3.1.min.js',
        'js/theme-change.js',
        'js/owl.carousel.js',
        'js/jquery.magnific-popup.min.js',
        'js/counter.js',
        //gallery popup js
        'js/smartphoto.js',
        'js/bootstrap.min.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
