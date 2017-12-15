<?php

namespace app\models;

class User extends \yii\base\Object implements \yii\web\IdentityInterface
{

    /**
     *
     * Acción para el tutorial 15 - Yii Framework 2 - User (Autenticar usuarios)
     *
     */


    public $id;
    public $username;
    public $email;               // Propiedad que se agrega al código original para uso en el tutorial Yii2 No. 15 Autenticar Usuarios de José Manuel Dávila González
    public $password;
    public $authKey;
    public $accessToken;
    public $activate;            // Propiedad que se agrega al código original para uso en el tutorial Yii2 No. 15 Autenticar Usuarios de José Manuel Dávila González
    public $verification_code;   // Propiedad que se agrega al código original para uso en el tutorial Yii2 No. 16 Recuperar Password de José Manuel Dávila González
    public $role;                // Propiedad que se agrega al código original para uso en el tutorial Yii2 No. 17 User y Admin de José Manuel Dávila González


    /**
     *
     * Acción para el tutorial 17 - Yii Framework 2 - User y Admin (Control de acceso a usuarios)
     *
     */

    public static function isUserAdmin($id)
    {
        if (Users::findOne(['id' => $id, 'activate' => '1', 'role' => 2])){
            return true;
        } else {

            return false;
        }

    }

    public static function isUserSimple($id)
    {
        if (Users::findOne(['id' => $id, 'activate' => '1', 'role' => 1])){
            return true;
        } else {

            return false;
        }
    }

    /**
     *
     * Acción para el tutorial 15 - Yii Framework 2 - User (Autenticar Usuario)
     *
     */

    /**
     * @inheritdoc
     */

    /* Busca la identidad del usuario a través de su $id */
    public static function findIdentity($id)
    {

        // La siguiente consulta busca el registro almacenado en la base de datos, quedando disponibles
        // en la variable $user.

        $user = Users::find()
            ->where("activate=:activate", [":activate" => 1])
            ->andWhere("id=:id", ["id" => $id])
            ->one();

        return isset($user) ? new static($user) : null;
    }

    /**
     * @inheritdoc
     */

    /* Busca la identidad del usuario a través de su token de acceso */
    public static function findIdentityByAccessToken($token, $type = null)
    {

        // La siguiente consulta busca los registros almacenados en la base de datos, quedando disponibles
        // en el arreglo $users.

        $users = Users::find()
            ->where("activate=:activate", [":activate" => 1])
            ->andWhere("accessToken=:accessToken", [":accessToken" => $token])
            ->all();

        foreach ($users as $user) {
            if ($user->accessToken === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */

    /* Busca la identidad del usuario a través del username */
    public static function findByUsername($username)
    {

        // La siguiente consulta busca los registros almacenados en la base de datos, quedando disponibles
        // en el arreglo $users.

        $users = Users::find()
            ->where("activate=:activate", ["activate" => 1])
            ->andWhere("username=:username", [":username" => $username])
            ->all();

        foreach ($users as $user) {
            if (strcasecmp($user->username, $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * @inheritdoc
     */

    /* Regresa el id del usuario */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */

    /* Regresa la clave de autenticación */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */

    /* Valida la clave de autenticación */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;

    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        /* Valida el password */
        if (crypt($password, $this->password) == $this->password)
        {
            return $password === $password;
        }
    }
}