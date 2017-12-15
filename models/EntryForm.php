<?php
/**
 * Created by PhpStorm.
 * User: ricardo
 * Date: 6/11/17
 * Time: 05:50 PM
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}
