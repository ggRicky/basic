<?php
/**
 * Created by PhpStorm.
 * User: ricardo
 * Date: 21/10/17
 * Time: 01:19 PM
 */

// Script para el tutorial 18 - Yii Framework 2 - UploadedFile (Subida de archivos)

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Subir archivos</h1>

<h3><?= $msg ?></h3>

<?php $form = ActiveForm::begin([
    "method" => "post",
    "enableClientValidation" => true,
    "options" => ["enctype" => "multipart/form-data"],
]);
?>

<?= $form->field($model, "file_sel[]")->fileInput(['multiple' => true]) ?>

<?= Html::submitButton("Subir", ["class" => "btn btn-primary"]) ?>

<?php $form->end() ?>