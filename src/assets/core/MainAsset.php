<?php

namespace akupeduli\bracket\assets\core;

use akupeduli\bracket\Bracket;
use rmrevin\yii\fontawesome\AssetBundle as FABundle;
use rmrevin\yii\ionicon\AssetBundle as IonBundle;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

class MainAsset extends AssetBundle
{
    public $publishOptions = [
        'only' => [
            "css/*"
        ]
    ];

    public $css = [
        "css/bracket.css",
    ];

    public $depends = [
        FABundle::class,
        IonBundle::class
    ];

    public function init()
    {
        /** @var Bracket $bracket */
        $bracket          = Bracket::getComponent();
        $this->sourcePath = $bracket->assetPath;
        if ($bracket->theme !== Bracket::THEME_DEFAULT) {
            $themeCss  = "css/bracket." . $bracket->theme;
            $themeCss .= (YII_ENV_DEV ? "" : ".min") . ".css";
            $this->css[] = $themeCss;
        }

        parent::init();
    }
}
