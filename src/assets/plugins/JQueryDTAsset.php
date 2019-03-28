<?php

namespace akupeduli\bracket\assets\plugins;

use akupeduli\bracket\assets\core\PluginAsset;
use yii\bootstrap4\BootstrapPluginAsset;
use yii\web\JqueryAsset;

/**
 * Class JQueryDTAsset
 *
 * @author  L Shaf <shafry2008@gmail.com>
 * @package akupeduli\bracket\assets\plugins
 */
class JQueryDTAsset extends PluginAsset
{
    public $pluginName = "datatables.net";
    public $js = [
        'js/jquery.dataTables.min.js'
    ];
    public $depends = [
        JqueryAsset::class,
        BootstrapPluginAsset::class
    ];
}