<?php

namespace akupeduli\bracket\assets\plugins;

use akupeduli\bracket\assets\core\PluginAsset;

class DataTableAsset extends PluginAsset
{
    public $pluginName = "datatables.net-dt";
    public $css = [
        "css/jquery.dataTables.min.css",
    ];
    public $js = [
        "js/dataTables.dataTables.min.js",
    ];
    public $depends = [
        JQueryDTAsset::class
    ];
}
