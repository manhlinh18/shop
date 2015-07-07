<?php
namespace app\assets;

class AppAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/media';
    public $css = [
        //'css/style.default.css',
        'css/styles.css',
       // 'css/animate.min.css',
        //'css/custom.css',
        //'css/owl.carousel.css',
        //'css/owl.theme.css',
        //'css/owl.transitions.css',
    ];
    public $js = [
        'js/scripts.js',
        //'js/front.js',
        //'js/jquery.flexslider.min.js',
        //'js/main.js',
        //'js/modernizr.js',
        //'js/owl.carousel.min.js',
       // 'js/respond.min.js',
       // 'js/waypoints.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
