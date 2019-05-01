<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;
use app\models\Supplier;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['login','logout','suppliers','','site','/','/site'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['logout','suppliers','','site','/'],
                        'roles' => ['@'],
                    ],
                    [
                      'allow' => true,
                      'actions' => ['login'],
                      'roles' => ['?'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    // 'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
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

    public function actionSuppliers(){
      $model = new Supplier;
      $suppliers = $model->getSuppliers();
      return $this->render('suppliers',['suppliers' => $suppliers]);
      // if(isset($_POST['title']) and $_POST['title'] != ""){
      //   $text = $_POST['title'];
      //   $command = Yii::$app->db->createCommand("SELECT * FROM SUPPLIER WHERE NAME_SUP LIKE '$text%'")->queryAll();
      //   print_r($command);
      //   // return $suppliers = $command;
      // }
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {

      return $this->render('login');
    }

    public function actionExample(){
      $name_sup = $_POST['referal'];
      $data = Yii::$app->db->createCommand("SELECT * FROM SUPPLIER WHERE NAME_SUP LIKE '$name_sup%'")->queryAll();
      foreach ($data as $key) {
      echo "\n<li>".$key['name_sup']."</li>"; //$row["name"] - имя поля таблицы
      };
      // foreach ($data as $dat) {
      //   echo "<h1>dfgdfg</h1>";
      // }
      // return $this->render('suppliers',['suppliers' => $data]);
      // $name_sup = $_POST['title'];
      // echo $name_sup;
    }

    public function actionSignin(){

      if(isset($_POST['signin'])){

        $loginuser = $_POST['login'];
        $passworduser = $_POST['password'];
        $user = User::findOne(['login_emp' => $loginuser]);
        if($user!=null){
          Yii::$app->user->login($user);
          return $this->redirect(['/site/index']);
        }
        else {
          echo "string";
        }
      }
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
    // public function actionContact()
    // {
    //     $model = new ContactForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
    //         Yii::$app->session->setFlash('contactFormSubmitted');
    //
    //         return $this->refresh();
    //     }
    //     return $this->render('contact', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Displays about page.
     *
     * @return string
     */
    // public function actionAbout()
    // {
    //     return $this->render('about');
    // }

}
