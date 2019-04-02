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
<?= $this->render($bracket->sidebarFile) ?>
<?= $this->render($bracket->navbarFile) ?>
<div class="br-mainpanel">
    <?= $content ?>
    <footer class="br-footer">
        <div class="footer-left">
            <div><?= $bracket->footerText ?></div>
        </div>
    </footer>
</div>
<?php
$this->endContent();
