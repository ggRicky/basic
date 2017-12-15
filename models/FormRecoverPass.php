<?php
/**
 * Created by PhpStorm.
 * User: ricardo
 * Date: 19/10/17
 * Time: 06:20 PM
 */

// Script para el tutorial 16 - Yii Framework 2 - User (Recuperar Password)

namespace app\models;
use Yii;
use yii\base\Model;

class FormRecoverPass extends Model{

    public $email;

    public function rules()
    {
        return [
            ['email', 'required', 'message' => 'Campo requerido'],
            ['email', 'match', 'pattern' => "/^.{5,80}$/", 'message' => 'Mínimo 5 y máximo 80 caracteres'],
            ['email', 'email', 'message' => 'Formato no válido'],
        ];
    }
}
