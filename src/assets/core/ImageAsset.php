<?php

namespace akupeduli\bracket\assets\core;

use akupeduli\bracket\Bracket;
use yii\web\AssetBundle;

/**
 * @Author: L Shaf
 * @Email : shafry2008@gmail.com
 */
class ImageAsset extends AssetBundle
{
    public function init()
    {
        /** @var Bracket $bracket */
        $bracket          = Bracket::getComponent();
        $this->sourcePath = $bracket->assetPath . "/img";
        parent::init();
    }
}
