<?php

use akupeduli\bracket\assets\core\JSAsset;
use akupeduli\bracket\Bracket;
use yii\helpers\Html;

$this->beginContent(__DIR__.'/base.php');
$bracket = Bracket::getComponent();
JSAsset::register($this);
?>
<div class="br-logo">
    <?= $bracket->logo ?>
</div>
<?php
echo $this->render($bracket->sidebarFile);
echo $this->render($bracket->navbarFile);
echo Html::tag("div", $content, ["class" => "br-mainpanel"]);
$this->endContent();
