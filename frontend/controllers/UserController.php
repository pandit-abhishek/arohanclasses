<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\SignupForm;
use common\models\LoginForm;
class UserController extends Controller
{
	/*public function behaviors()
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
    }*/

    
	public function actionSignup(){
        // echo 'here';die;
        $model = new SignupForm();
        if(!empty(Yii::$app->request->post())){
            $post = Yii::$app->request->post();
            // echo 'here';die;

            // echo"<pre>";print_r(Yii::$app->request->post());die;

            if ($model->load(Yii::$app->request->post())) {
                if ($user = $model->signup()) {
                    // print_r($user);die;
                    if (Yii::$app->getUser()->login($user)) {
                        return $this->render('user', [
                            'model' => $user
                        ]); 
                    }
                }
            }
        }else{
            // print_r($model);die;
            return $this->render('signup', [
                'model' => $model,
            ]); 
        }
	}


	public function actionLogin(){
        // echo 'here';die;
		if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            // echo 'here';die;
            return $this->render('user', [
                    'model' => $model
                ]);
        } else {
            // echo 'here';die;
            return $this->render('login', [
                'model' => $model,
            ]);
        }
	}

    public function actionHome(){
        return $this->render('user');
    }
}