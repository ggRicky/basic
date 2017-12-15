<?php
/**
 * Created by PhpStorm.
 * User: ricardo
 * Date: 19/10/17
 * Time: 06:18 PM
 */

// Script para el tutorial 16 - Yii Framework 2 - User (Recuperar Password)

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Recover Password</h1>

<h3><?= $msg ?></h3>

<?php $form = ActiveForm::begin([
    'method' => 'post',
    'enableClientValidation' => true,
]);
?>

<div class="form-group">
    <?= $form->field($model, "email")->input("email") ?>
</div>

<?= Html::submitButton("Recover Password", ["class" => "btn btn-primary"]) ?>

<?php $form->end() ?>
