<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class MainAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';

  public $options = [];
  /**
   * @inheritdoc
   */
  public function init()
  {
    $this->options = array_merge($this->options, array_filter([
      'key' => 'AIzaSyBEUELqbHiu8XbPmTLtoIzQu4dC_29HB0E',
      'callback' => 'initMap',
      'sensor' => 'false',
    ]));
    ////maps.google.com/maps/api/js?key=AIzaSyBEUELqbHiu8XbPmTLtoIzQu4dC_29HB0E&callback=initMap&sensor=false
    $this->js[] = '//maps.google.com/maps/api/js?'. http_build_query($this->options);
     $this->js[] = 'js/main.js';
  }

    public $css = [
        'css/animate.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/jquery.fancybox.css',
        'css/jquery.fs.boxer.min.css',
        'css/lightview.css',
        'css/main.css',
        'css/owl.carousel.css',
        'css/slit-slider.css',
        'css/superslides.css',
    ];
    public $js = [
      'js/modernizr-2.6.2.min.js',
      'js/jquery-1.11.1.min.js',
      'js/bootstrap.min.js',
      'js/jquery.singlePageNav.min.js',
      'js/jquery.fancybox.pack.js',
      'js/jquery.ba-cond.min.js',
      'js/jquery.easing.min.js',
      'js/jquery.parallax-1.1.3.js',
      'js/jquery.slitslider.js',
      //'js/main.js',
      'js/owl.carousel.min.js',
      'js/wow.min.js',

    ];
/*   public $jsOptions = [
      'position' => \yii\web\View::POS_BEGIN,
    ];*/
    public $depends = [
      'yii\web\JqueryAsset',
      'yii\web\YiiAsset',
      'yii\bootstrap\BootstrapAsset',
    ];


}
