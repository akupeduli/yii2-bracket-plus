<?php

use akupeduli\bracket\assets\plugins\DataTableAsset;
use yii\bootstrap4\BootstrapPluginAsset;
use yii\bootstrap4\PopperAsset;
use yii\web\JqueryAsset;
use yii\web\View;

return [
    JqueryAsset::class => [
        "jsOptions" => [
            "position" => View::POS_HEAD,
        ],
    ],

    PopperAsset::class => [
        'sourcePath' => null,
        'js' => [
            'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.js'
        ],
    ],

    BootstrapPluginAsset::class => [
        'depends' => [
            JqueryAsset::class,
            PopperAsset::class
        ],
    ],

    'mimicreative\datatables\assets\DataTableAsset' => [
        'class' => DataTableAsset::class,
    ],
];
