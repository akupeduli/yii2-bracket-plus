<?php

namespace akupeduli\bracket\assets\core;

use akupeduli\bracket\Bracket;
use yii\web\AssetBundle;

class MainAsset extends AssetBundle
{
    public $publishOptions = [
        "except" => [
            "*.html", "*.scss", "*.cfg", "*.config",
            "*.less",
        ],
    ];

    public $css = [
        "css/style.css",
    ];

    public $js = [
        "js/jquery.slimscroll.js",
        "js/waves.js",
        "js/sidebarmenu.js",
    ];

    public $depends = [
        "yii\\web\\YiiAsset",
        "yii\\bootstrap\\BootstrapAsset",
        "yii\\bootstrap\\BootstrapPluginAsset",
    ];

    public function init()
    {
        $material         = Bracket::getComponent();
        $this->sourcePath = $material->sourcePath;
        $this->css[]      = "css/colors/{$material->theme}.css";
        parent::init();
    }
}