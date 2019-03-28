<?php

namespace akupeduli\bracket\assets\plugins;

use akupeduli\bracket\assets\core\PluginAsset;
use yii\web\JqueryAsset;

/**
 * Class PerfectScrollAsset
 *
 * @author  L Shaf <shafry2008@gmail.com>
 * @package akupeduli\bracket\assets\plugins
 */
class PerfectScrollAsset extends PluginAsset
{
    public $pluginName = "perfect-scrollbar";
    public $js = [
        "perfect-scrollbar.min.js"
    ];
    public $depends = [
        JqueryAsset::class
    ];
}
