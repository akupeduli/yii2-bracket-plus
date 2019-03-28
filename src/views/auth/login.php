<?php

use akupeduli\bracket\forms\LoginForm;
use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use akupeduli\bracket\Bracket;

$bracket = Bracket::getComponent();

if (!isset($loginForm)) {
    throw new InvalidConfigException("\$loginForm is required");
}
if (!($loginForm instanceof LoginForm) and !is_subclass_of($loginForm, LoginForm::className())) {
    throw new InvalidConfigException("\$loginForm must extends from " . LoginForm::className());
}
?>

<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-60">The Admin Template For Perfectionist</div>
        <?php
        $form = ActiveForm::begin([
            "errorCssClass" => "has-danger",
            "options" => [
                "id" => "loginForm",
            ],
            "fieldConfig" => [
                "template" => "{input}\n{error}",
                "inputOptions" => [
                    "class" => "form-control",
                ],
                "errorOptions" => [
                    "class" => "form-control-feedback",
                ],
            ],
        ]);
        if ($loginForm->loginWith === LoginForm::WITH_USERNAME) {
            echo $form->field($loginForm, "username", [
                "inputOptions" => [
                    "placeholder" => $loginForm->getAttributeLabel("username"),
                ],
            ]);
        } else if ($loginForm->loginWith === LoginForm::WITH_EMAIL) {
            $forgotUrl = "";
            if (!is_null($loginForm->forgotPasswordUrl)) {
                $forgotUrl = Html::a("Forgot Password", $loginForm->forgotPasswordUrl, [
                    "class" => 'tx-info tx-12 d-block mg-t-10'
                ]);
            }
            echo $form->field($loginForm, "email", [
                "template" => "{input}\n{hint}\n{error}\n" . $forgotUrl,
                "inputOptions" => [
                    "placeholder" => $loginForm->getAttributeLabel("email"),
                ],
            ]);
        }
    
        echo $form->field($loginForm, "password", [
            "inputOptions" => [
                "placeholder" => $loginForm->getAttributeLabel("password"),
            ],
        ])->passwordInput();
        ?>
        <button type="submit" class="btn btn-info btn-block">Sign In</button>
        <?php if (!is_null($loginForm->registerUrl)): ?>
            <div class="mg-t-60 tx-center">
                Not yet a member? <a href="<?= Url::to($loginForm->registerUrl) ?>" class="tx-info">Sign Up</a>
            </div>
        <?php endif; ?>
        <?php ActiveForm::end() ?>
    </div><!-- login-wrapper -->
</div><!-- d-flex -->

<?php
