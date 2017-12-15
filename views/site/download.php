<?php
/**
 * Created by PhpStorm.
 * User: ricardo
 * Date: 21/10/17
 * Time: 04:06 PM
 */

// Script para el tutorial 19 - Yii Framework 2 - Force Download (Forzar descarga de archivos)
?>

<?php use yii\helpers\Url; ?>

<?php if (Yii::$app->session->hasFlash('errordownload')): ?>

    <h3><strong class="label label-danger">¡Ha ocurrido un error al descargar el archivo!</strong></h3>

<?php else: ?>

    <a href="<?= Url::toRoute(["site/download", "file" => "yii.pdf"]) ?>">Descargar archivo</a>

<?php endif; ?>