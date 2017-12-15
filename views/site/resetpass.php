<?php
/**
 * Created by PhpStorm.
 * User: ricardo
 * Date: 19/10/17
 * Time: 06:26 PM
 */

// Script para el tutorial 16 - Yii Framework 2 - User (Recuperar Password)

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h3><?= $msg ?></h3>

<h1>Reset Password</h1>
<?php $form = ActiveForm::begin([
    'method' => 'post',
    'enableClientValidation' => true,
]);
?>

<div class="form-group">
    <?= $form->field($model, "email")->input("email") ?>
</div>

<div class="form-group">
    <?= $form->field($model, "password")->input("password") ?>
</div>

<div class="form-group">
    <?= $form->field($model, "password_repeat")->input("password") ?>
</div>

<div class="form-group">
    <?= $form->field($model, "verification_code")->input("text") ?>
</div>

<div class="form-group">
    <?= $form->field($model, "recover")->input("hidden")->label(false) ?>
</div>

<?= Html::submitButton("Reset password", ["class" => "btn btn-primary"]) ?>

<?php $form->end() ?>
