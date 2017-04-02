<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use app\models\student;
session_start();
/**
 * Site controller
 */
class SiteController extends Controller{
    
    public function actionProject(){
        
        if(!isset($_SESSION['id'])){
            return $this->render('loginp');
        }

        $id = $_SESSION['id'];
        $student = student::findOne($id);
        if(sizeof($student) > 0){
            return $this->render('projectHome' , ['student' => $student]);            
        }
        else{
            return $this->render('loginp');
        }
    }   
    public function actionLoginproject(){
        if(!isset($_POST['id'])){
            return $this->render('loginp');
        }
        $id = $_POST['id'];
        $password = $_POST['pass'];
        $student = student::findOne(['id' => $id , 'password' => $password]);
        if(sizeof($student) > 0){
            $_SESSION['id'] =$id;
            return $this->render('projectHome' , ['student' => $student ,]);
        }
        else{
            return $this->render('loginp');
        }
    }
    /*
    public function actionProject(){
        if(!isset($_SESSION['id'])){
            return $this->render('loginp');
        }
        $id = $_SESSION['id'];
        $student = student::findOne($id);
        if ( sizeof($student) ){
            $_SESSION['id'] = $id ;
            return $this->render('projectHome' , ['student' => $student ,] );
        }
    }
    
    public function actionLoginForm(){
        if(!isset($_POST['id'])){
            return $this->render('loginp');
        }
        $id=$_POST['id'];
        $password = $_POST['password'];
        $student = student::findOne(['id' => $id , 'password' => $password   , ]);
        if ( sizeof($student) ){
            $_SESSION['id'] = $id ;
            return $this->render('projectHome' , ['student' => $student ,] );
        }
        
    }*/
    public function actionUpdateinfo(){
        if(!isset($_POST['spass'])){
            $id = $_SESSION['id'];
            $student = student::findOne($id);
            return $this->render('update' , ['student' => $student , ]);
        }
        $id = $_SESSION['id'];
        $name = $_POST['name'];
        $gpa = $_POST['gpa'];
        $password = $_POST['pass'];
        $spass = $_POST['spass'];
        Yii::$app->db->createCommand()->update('student', ['name' => $name , 'gpa'=> $gpa , 'password' => $password ], 'id =:id', array(':id' => $id) )->execute();
        $student = student::findOne($id);
        return $this->render('projectHome' , ['student' => $student ,] );
    }
    

    
    /**
     * @inheritdoc
     */
    /*
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
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
*/
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
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
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionLogoutp()
    {
       session_unset();
       session_destroy();
       return $this->render( 'loginp');
    }
     public $enableCsrfValidation = false;


}
