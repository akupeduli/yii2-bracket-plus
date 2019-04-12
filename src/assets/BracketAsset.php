<?php

namespace akupeduli\bracket\assets;

use akupeduli\bracket\assets\core\StyleAsset;
use yii\web\AssetBundle;

class BracketAsset extends AssetBundle
{
    public $sourcePath = "@akupeduli/bracket/web";
    
    public $js = [
        'js/bracket.js'
    ];
    
    public $depends =  [
        StyleAsset::class
    ];
}
