<?php
/**
 * @author Di Zhang <zhangdi_me@163.com>
 */

namespace yiizh\jqueryWeUI;

use yii\web\AssetBundle;

/**
 *
 * @package yiizh\jqueryWeUI
 */
class JqueryWeUIAsset extends AssetBundle
{
    public $sourcePath = '@yiizh/jqueryWeUI/assets';

    public $css = [
        'css/weui.min.css',
        'css/jquery-weui.min.css',
    ];

    public $js = [
        'js/jquery-weui.min.js',
        'js/city-picker.min.js',
        'js/swiper.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}