<?php

namespace akupeduli\bracket\assets;

use akupeduli\bracket\assets\core\MainPluginAsset;
use yii\web\AssetBundle;

/**
 * Class BracketPlugin
 *
 * @author  L Shaf <shafry2008@gmail.com>
 * @package akupeduli\bracket\assets
 */
class BracketPlugin  extends AssetBundle
{
    public $sourcePath = "@akupeduli/bracket/web";
    public $depends = [
        MainPluginAsset::class
    ];
}
