<?php

namespace akupeduli\bracket\assets\core;

use akupeduli\bracket\Bracket;
use yii\bootstrap4\BootstrapPluginAsset;
use yii\web\AssetBundle;

/**
 * Class MainPluginAsset
 *
 * @author  L Shaf <shafry2008@gmail.com>
 * @package akupeduli\bracket\assets\core
 */
class MainPluginAsset extends AssetBundle
{
    public $publishOptions = [
        'only' => [
            "js/*"
        ]
    ];
    
    public $js = [
        "js/bracket.js",
    ];
    
    public $depends = [
        BootstrapPluginAsset::class
    ];
    
    public function init()
    {
        /** @var Bracket $bracket */
        $bracket          = Bracket::getComponent();
        $this->sourcePath = $bracket->assetPath;
        parent::init();
    }
}