<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\SignupForm;
use common\models\LoginForm;
use common\models\StudyMaterial;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class UserController extends Controller
{
	public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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

    
	public function actionSignup(){
       
        $model = new SignupForm();
        if(!empty(Yii::$app->request->post())){
            
            if ($model->load(Yii::$app->request->post())) {
                if ($user = $model->signup()) {
                    if (Yii::$app->getUser()->login($user)) {
                        return $this->redirect('home'); 
                    }
                }
            }
        }else{
            return $this->render('signup', [
                'model' => $model,
            ]); 
        }
	}


	public function actionLogin(){
        
		if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $user = Yii::$app->user->identity;
            return $this->redirect('home');
        }else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
	}



    public function actionHome(){
        if(!Yii::$app->user->isGuest) {
            $user = Yii::$app->user->identity;
            return $this->render('user',[
                'model' => $user
            ]);
        }else{
            return $this->render('index');
        }
        
    }


    public function actionDownload(){
        if(!Yii::$app->user->isGuest){
            $model = new StudyMaterial();
            if(!empty(Yii::$app->request->post())){
                // echo "<pre>";print_r($studyMaterial);die;
                // return $this->render('_studyMaterial');

            }else{
                // echo "<pre>";print_r($model);die;
                return $this->render('_studyMaterial',['model' => $model]);

            }
                    }else{
            return $this->render('index');
        }
        
    }
}