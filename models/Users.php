<?php
/**
 * Created by PhpStorm.
 * User: ricardo
 * Date: 21/09/17
 * Time: 09:17 PM
 */


namespace app\models;
use Yii;
use yii\db\ActiveRecord;

class Users extends ActiveRecord{

    public static function getDb()
    {
        return Yii::$app->db;
    }

    public static function tableName()
    {
        return 'users';
    }

}