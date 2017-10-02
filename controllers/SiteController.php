<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

// 2017-09-25 : Las siguientes declaraciones son necesarias para el Turorial de Yii2 de Manuel J. Dávila

use app\models\ValidarFormulario;
use app\models\ValidarFormularioAjax;
use yii\widgets\ActiveForm;
use app\models\FormAlumnos;
use app\models\Alumnos;
use app\models\FormSearch;
use yii\helpers\Html;
use yii\data\Pagination;
use yii\helpers\Url;
use app\models\FormRegister;
use app\models\Users;

class SiteController extends Controller
{

    /**
     *
     * Acción para el tutorial 3 - Yii Framework 2 Conectar acción-vista (Hola Mundo)
     *
     */
    public function actionSaluda($get = "Tutorial Yii2")
    {
        $mensaje = "Hola Mundo";
        $numeros= [0, 1, 2, 3, 4, 5];
        return $this->render("saluda",
                            [
                                "mensaje"=>$mensaje,
                                "numeros"=>$numeros,
                                "parametro"=>$get,
                            ]);
    }

    /**
     *
     * Acción para el tutorial 4 - Yii Framework 2 Conectar vista-acción (formularios y redirecciones)
     *
     */
    public function actionFormulario($mensaje = null)
    {
        return $this->render("formulario",["mensaje" => $mensaje]);
    }

    /**
     *
     * Acción para el tutorial 4 - Yii Framework 2 Conectar vista-acción (formularios y redirecciones)
     *
     */
    public function actionRequest()
    {
        $mensaje = null;

        if (isset($_REQUEST["nombre"]))
        {
            $mensaje = "Bien, has enviado tu nombre correctamente " . $_REQUEST["nombre"];
        }

        $this->redirect(["site/formulario","mensaje" => $mensaje]);
    }

    /**
     *
     * Accion para el tutorial 5 - Yii Framework 2 - Validar formularios lado cliente y servidor (ActiveForm)
     *
     */
    public function actionValidarformulario()
    {
        $model = new ValidarFormulario;

        if ($model->load(Yii::$app->request->post()))
        {
            if ($model->validate())
            {
                // Por ejemplo, se puede consultar una base de datos
            }
            else
            {
                $model->getErrors();
            }
        }

        return $this->render("validarformulario", ["model" => $model]);
    }

    /**
     *
     * Accion para el tutorial 6 - Yii Framework 2 - Validar formulario con AJAX
     *
     */
    public function actionValidarformularioajax()
    {
        $model = new ValidarFormularioAjax();
        $msg = null;

        if ($model->load(Yii::$app->request->post()) && Yii::$app->request->isAjax)
        {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }

        if ($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                // Por ejemplo aqui hacemos una consulta a una base de datos
                $msg = "Enhorabuena, formulario enviado correctamente.";
                $model -> nombre = null;
                $model -> email = null;
            }
            else
            {
                $model->getErrors();
            }

        }

        return $this->render("validarformularioajax",['model' => $model, 'msg' => $msg ]);

    }

    /**
     *
     * Acción para el tutorial 7 - Yii Framework 2  CRUD ActiveRecord Create (Crear registros)
     *
     */
    public function actionCreate()
    {
        $model = new FormAlumnos;
        $msg = null;

        if ($model->load(Yii::$app->request->post()))
        {
            if ($model->validate())
            {
                $table = new Alumnos;

                $table->nombre = $model->nombre;
                $table->apellidos = $model->apellidos;
                $table->clase = $model->clase;
                $table->nota_final = $model->nota_final;

                if ($table->insert())
                {

                    $msg = "Enhorabuenaregistro guardado correctamente";
                    $model->nombre = null;
                    $model->apellidos = null;
                    $model->clase = null;
                    $model->nota_final = null;

                }
                else
                {
                    $msg = "Ha ocurrido un error al insertar el registro";
                }

            }
            else
            {
                $model-> getErrors();
            }
        }

        return $this -> render("create", ['model' => $model,'msg' => $msg]);

    }


    /**
     *
     * Acción para el tutorial 8 - Yii Framework 2  CRUD ActiveRecord Read (Lectura de registros)
     *
    public function actionView()
    {

        $table = new Alumnos;
        $model = $table->find()->all();

        return $this->render("view", ["model" => $model]);

    }
    */

    /**
     *
     * Acción para el tutorial 9 - Yii Framework 2 - CRUD ActiveRecord Search (Formulario de búsqueda)
     *
    public function actionView()
    {
        $table = new Alumnos;
        $model = $table->find()->all();

        $form = new FormSearch;
        $search = null;
        if($form->load(Yii::$app->request->get()))
        {
            if ($form->validate())
            {
                $search = Html::encode($form->q);

                // 2017-09-11 INCIDENCIA : Al ejecutar el siguiente código original del tutorial .....

                //       $query = "SELECT * FROM alumnos WHERE id_alumno LIKE '%$search%' OR ...";

                // Ocurrió un error :

                //      $query = "SELECT * FROM alumnos WHERE id_alumno LIKE '%Fernández%' OR ...";
                //                                                            ^
                //                                                            |
                //      ERROR : Hint: Ningún operador coincide con el nombre y el tipo de los argumentos. Puede ser necesario agregar conversiones explícitas de tipos.

                // Explicación : Este error se provocó debido a que el campo 'id_alumno' es de tipo numérico, y se usa el operador LIKE que trabaja con valores de TEXTO en la consulta SQL.
                //               MySQL hace una conversión implícita, pero Postrgesql NO la hace. Así que se debe realizar de forma explícita con la función CAST ( AS TEXT).

                // Solución :

                //       $query = "SELECT * FROM alumnos WHERE CAST(id_alumno AS TEXT) LIKE '%$search%' OR ";

                $query = "SELECT * FROM alumnos WHERE CAST(id_alumno AS TEXT) LIKE '%$search%' OR ";
                $query .= "nombre LIKE '%$search%' OR apellidos LIKE '%$search%'";
                $model = $table->findBySql($query)->all();
            }
            else
            {
                $form->getErrors();
            }
        }
        return $this->render("view", ["model" => $model, "form" => $form, "search" => $search]);
    }
     */

    /**
     *
     * Acción para el tutorial 10 - Yii Framework 2 - CRUD ActiveRecord Pagination (Paginación de resultados)
     *
     */
    public function actionView()
    {
        $form = new FormSearch;
        $search = null;
        if($form->load(Yii::$app->request->get()))
        {
            if ($form->validate())
            {
                $search = Html::encode($form->q);
                $table = Alumnos::find()
                    ->where(["like", "cast(id_alumno as text)", $search]) // Se hace la misma modificación del Tutorial 9 para usar el CAST y evitar los problemas de consultar texto sobre un campo numérico.
                    ->orWhere(["like", "nombre", $search])
                    ->orWhere(["like", "apellidos", $search]);
                $count = clone $table;
                $pages = new Pagination([
                    "pageSize" => 1,
                    "totalCount" => $count->count()
                ]);
                $model = $table
                    ->offset($pages->offset)
                    ->limit($pages->limit)
                    ->all();
            }
            else
            {
                $form->getErrors();
            }
        }
        else
        {
            $table = Alumnos::find();
            $count = clone $table;
            $pages = new Pagination([
                "pageSize" => 1,
                "totalCount" => $count->count(),
            ]);
            $model = $table
                ->offset($pages->offset)
                ->limit($pages->limit)
                ->all();
        }
        return $this->render("view", ["model" => $model, "form" => $form, "search" => $search, "pages" => $pages]);
    }

    /**
     *
     * Acción para el tutorial 11 - Yii Framework 2 - CRUD ActiveRecord Delete (Eliminar Registros)
     *
     */
    public function actionDelete()
    {
        if(Yii::$app->request->post())
        {
            $id_alumno = Html::encode($_POST["id_alumno"]);
            if((int) $id_alumno)
            {
                if(Alumnos::deleteAll("id_alumno=:id_alumno", [":id_alumno" => $id_alumno]))
                {
                    echo "Alumno con id $id_alumno eliminado con éxito, redireccionando ...";
                    echo "<meta http-equiv='refresh' content='3; ".Url::toRoute("site/view")."'>";
                }
                else
                {
                    echo "Ha ocurrido un error al eliminar el alumno, redireccionando ...";
                    echo "<meta http-equiv='refresh' content='3; ".Url::toRoute("site/view")."'>";
                }
            }
            else
            {
                echo "Ha ocurrido un error al eliminar el alumno, redireccionando ...";
                echo "<meta http-equiv='refresh' content='3; ".Url::toRoute("site/view")."'>";
            }
        }
        else
        {
            return $this->redirect(["site/view"]);
        }
    }


    /**
     *
     * Acción para el tutorial 12 - Yii Framework 2 - CRUD ActiveRecord Update (Actualizar Registros)
     *
     */
    public function actionUpdate()
    {
        $model = new FormAlumnos;
        $msg = null;

        if($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                $table = Alumnos::findOne($model->id_alumno);
                if($table)
                {
                    $table->nombre = $model->nombre;
                    $table->apellidos = $model->apellidos;
                    $table->clase = $model->clase;
                    $table->nota_final = $model->nota_final;
                    if ($table->update())
                    {
                        $msg = "El Alumno ha sido actualizado correctamente";
                    }
                    else
                    {
                        $msg = "El Alumno no ha podido ser actualizado";
                    }
                }
                else
                {
                    $msg = "El alumno seleccionado no ha sido encontrado";
                }
            }
            else
            {
                $model->getErrors();
            }
        }

        if (Yii::$app->request->get("id_alumno"))
        {
            $id_alumno = Html::encode($_GET["id_alumno"]);
            if ((int) $id_alumno)
            {
                $table = Alumnos::findOne($id_alumno);
                if($table)
                {
                    $model->id_alumno = $table->id_alumno;
                    $model->nombre = $table->nombre;
                    $model->apellidos = $table->apellidos;
                    $model->clase = $table->clase;
                    $model->nota_final = $table->nota_final;
                }
                else
                {
                    return $this->redirect(["site/view"]);
                }
            }
            else
            {
                return $this->redirect(["site/view"]);
            }
        }
        else
        {
            return $this->redirect(["site/view"]);
        }
        return $this->render("update", ["model" => $model, "msg" => $msg]);
    }


    /**
     *
     * Acción para el tutorial 14 - Yii Framework 2 - User (Registro de usuarios)
     *
     */

    private function randKey($str='', $long=0)
    {
        $key = null;
        $str = str_split($str);
        $start = 0;
        $limit = count($str)-1;
        for($x=0; $x<$long; $x++)
        {
            $key .= $str[rand($start, $limit)];
        }
        return $key;
    }

    public function actionConfirm()
    {
        $table = new Users;
        if (Yii::$app->request->get())
        {

            //Obtenemos el valor de los parámetros get

            $id = Html::encode($_GET["id"]);
            $authKey = $_GET["authKey"];

            if ((int) $id)
            {

                //Realizamos la consulta para obtener el registro

                $model = $table
                    ->find()
                    ->where("id=:id", [":id" => $id])
                    ->andWhere("\"authKey\"=:authKey", [":authKey" => $authKey]);

                // 2017-09-22 : Incidencia : Al ejecutar este script se presenta un error que Yii2 reporta como :

                // SQLSTATE[42703]: Undefined column: 7 ERROR: no existe la columna «authkey»
                // LINE 1: SELECT COUNT(*) FROM "users" WHERE (id=$1) AND (authKey=$2)

                // El campo authKey en realidad existe, pero como fue dedinido con una mayúscula, entonces la consulta presenta fallos por esta situación.

                // Investigando en la siguiente liga : https://www.postgresql.org/message-id/47BDC6FB.8050908%40aldia.com.mx

                // Encontré lo siguiente :

                // " Si utilizas mayúsculas debes poner el nombre del campo entre comillas:   Select * From tabla Where "idUsuario" = '2'; "
                // " Lo mismo aplica para los nombres de las tablas:   Select * From "NombreTabla" Where "NombreCampo" = n; "

                // De tal forma que la solución queda de la siguiente forma :

                // Código original : ->andWhere("authKey=:authKey", [":authKey" => $authKey]);
                // Código modificado : ->andWhere("\"authKey\"=:authKey", [":authKey" => $authKey]);

                // Con este cambio se construye la siguiente consulta, cuyo resultado ya es una sentencias sintácticamente correcta.

                // SELECT COUNT(*) FROM "users" WHERE (id='2') AND ("authKey"='386f6aa21bfa8de6 ... b163ed335de2d1c960c0dcd8e6')

                // Esta situación se presentó por que utilicé PostgreSQL, y en el tutorial se usa MySQL.


                //Si el registro existe

                if ($model->count() == 1)
                {
                    $activar = Users::findOne($id);
                    $activar->activate = 1;
                    if ($activar->update())
                    {
                        echo "Enhorabuena registro llevado a cabo correctamente, redireccionando ...";
                        echo "<meta http-equiv='refresh' content='8; ".Url::toRoute("site/login")."'>";
                    }
                    else
                    {
                        echo "Ha ocurrido un error al realizar el registro, redireccionando ...";
                        echo "<meta http-equiv='refresh' content='8; ".Url::toRoute("site/login")."'>";
                    }
                }
                else //Si no existe redireccionamos a login
                {
                    return $this->redirect(["site/login"]);
                }
            }
            else //Si id no es un número entero redireccionamos a login
            {
                return $this->redirect(["site/login"]);
            }
        }
    }

    public function actionRegister()
    {
        // Creamos la instancia con el model de validación

        $model = new FormRegister;

        // Mostrará un mensaje en la vista cuando el usuario se haya registrado

        $msg = null;

        // Validación mediante ajax

        if ($model->load(Yii::$app->request->post()) && Yii::$app->request->isAjax)
        {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }

        // Validación cuando el formulario es enviado vía post
        // Esto sucede cuando la validación ajax se ha llevado a cabo correctamente
        // También previene por si el usuario tiene desactivado javascript y la
        // validación mediante ajax no puede ser llevada a cabo

        if ($model->load(Yii::$app->request->post()))
        {
            if($model->validate())
            {
                // Preparamos la consulta para guardar el usuario

                $table = new Users;
                $table->username = $model->username;
                $table->email = $model->email;

                // Encriptamos el password

                $table->password = crypt($model->password, Yii::$app->params["salt"]);

                // Creamos una cookie para autenticar al usuario cuando decida recordar la sesión, esta misma
                // clave será utilizada para activar el usuario

                $table->authKey = $this->randKey("abcdef0123456789", 200);

                // Creamos un token de acceso único para el usuario

                $table->accessToken = $this->randKey("abcdef0123456789", 200);

                // Si el registro es guardado correctamente

                if ($table->insert())
                {
                    // Nueva consulta para obtener el id del usuario
                    // Para confirmar al usuario se requiere su id y su authKey

                    $user = $table->find()->where(["email" => $model->email])->one();
                    $id = urlencode($user->id);
                    $authKey = urlencode($user->authKey);

                    $subject = "Confirmar registro";
                    $body = "<h1>Haga click en el siguiente enlace para finalizar tu registro</h1>";
                    $body .= "<a href='http://cttwapp.com/index.php?r=site/confirm&id=".$id."&authKey=".$authKey."'>Confirmar</a>";

                    // Enviamos el correo

                    Yii::$app->mailer->compose()
                        ->setTo($user->email)
                        ->setFrom([Yii::$app->params["adminEmail"] => Yii::$app->params["title"]])
                        ->setSubject($subject)
                        ->setHtmlBody($body)
                        ->send();

                    $model->username = null;
                    $model->email = null;
                    $model->password = null;
                    $model->password_repeat = null;

                    $msg = "Enhorabuena, ahora sólo falta que confirmes tu registro en tu cuenta de correo";
                }
                else
                {
                    $msg = "Ha ocurrido un error al llevar a cabo tu registro";
                }

            }
            else
            {
                $model->getErrors();
            }
        }
        return $this->render("register", ["model" => $model, "msg" => $msg]);
    }


    // 2017 Original code for Yii2 Basic Project

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
