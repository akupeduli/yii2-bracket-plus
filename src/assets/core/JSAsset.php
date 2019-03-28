<?php

namespace akupeduli\bracket\assets\core;

use akupeduli\bracket\assets\plugins\MomentAsset;
use akupeduli\bracket\assets\plugins\PerfectScrollAsset;
use akupeduli\bracket\Bracket;
use yii\bootstrap4\BootstrapPluginAsset;
use yii\web\AssetBundle;

/**
 * Class JSAsset
 *
 * @author  L Shaf <shafry2008@gmail.com>
 * @package akupeduli\bracket\assets\core
 */
class JSAsset extends AssetBundle
{
    public $sourcePath = "@akupeduli/bracket/web";

    public $js = [
        'js/bracket.js'
    ];

    public $depends = [
        BootstrapPluginAsset::class,
        PerfectScrollAsset::class,
        MomentAsset::class
    ];
}