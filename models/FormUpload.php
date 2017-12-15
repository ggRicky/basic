<?php
/**
 * Created by PhpStorm.
 * User: ricardo
 * Date: 21/10/17
 * Time: 01:26 PM
 */

// Script para el tutorial 18 - Yii Framework 2 - UploadedFile (Subida de archivos)

namespace app\models;
use yii\base\Model;

class FormUpload extends Model{

    public $file_sel;

    public function rules()
    {
        return [
            [   'file_sel', 'file',
                'skipOnEmpty' => false,
                'uploadRequired' => 'No has seleccionado ningún archivo', //Error
                'maxSize' => 1024*1024*1, //1 MB
                'tooBig' => 'El tamaño máximo permitido es 1MB', //Error
                'minSize' => 10, //10 Bytes
                'tooSmall' => 'El tamaño mínimo permitido son 10 BYTES', //Error
                'extensions' => 'pdf, txt, doc',
                'wrongExtension' => 'El archivo {file} no contiene una extensión permitida {extensions}', //Error
                'maxFiles' => 4,
                'tooMany' => 'El máximo de archivos permitidos son {limit}', //Error
            ],
        ];
    }

    public function attributeLabels()
    {
        return [
            'file_sel' => 'Seleccionar archivos:',
        ];
    }
}
