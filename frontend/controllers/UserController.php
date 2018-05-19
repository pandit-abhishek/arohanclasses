<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\SignupForm;
use common\models\LoginForm;
use common\models\StudyMaterial;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\ClassRoom;
use common\models\Subject;
use common\models\Topics;

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
                $post = Yii::$app->request->post();
                // echo "<pre>";print_r($post);die;
                $class = $post['class_id'];
                $subject = $post['sub_id'];
                $topic = $post['topic_id'];
                $subtopic = $post['subtopic_id'];

                $material = StudyMaterial::find()->where(['class' => $class ,'subject' => $subject,'topic' => $topic , 'subtopic' => $subtopic ])->asArray()->all();
                // echo"<pre>";print_r($material);die;

            }else{
                $class  = ClassRoom::find()->all();

                // echo "<pre>";print_r($model);die;
                return $this->render('_studyMaterial',['model' => $model,'class' => $class]);

            }
                    }else{
            return $this->render('index');
        }
        
    }


    public function actionGetSubject(){
        // print_r(Yii::$app->request->post());
        // $subject =  Subject::find()->where(['class_id' => Yii::$app->request->post('class_id')])->asArray()->all();
        // return json_encode($subject);
        // 
        // 
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            // echo 'here';
            $parents = $_POST['depdrop_parents'];
            if ($parents != null) {
                $class_id = $parents[0];
                $out = Subject::find()->where(['class_id' => $class_id])->asArray()->all();
                // print_r( $out);die;
                // the getSubCatList function will query the database based on the
                // cat_id and return an array like below:
                // [
                //    ['id'=>'<sub-cat-id-1>', 'name'=>'<sub-cat-name1>'],
                //    ['id'=>'<sub-cat_id_2>', 'name'=>'<sub-cat-name2>']
                // ]
                $newOut = [];
                foreach ($out as $key => $value) {
                    $newOut[] = [
                        'id' => $value['id'],
                        'name' => $value['sub_name']
                    ];
                }
                // print_r($newOut);die;
                echo json_encode(['output'=>$newOut, 'selected'=>'']);
                return;
            }
        }
        echo Json::encode(['output'=>'', 'selected'=>'']);
            
    }


    public function actionGetTopics(){
        // print_r(Yii::$app->request->post());
        // $subject =  Subject::find()->where(['class_id' => Yii::$app->request->post('class_id')])->asArray()->all();
        // return json_encode($subject);
        // 
        // 
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            // echo 'here';
            $parents = $_POST['depdrop_parents'];
            if ($parents != null) {
                $sub_id = $parents[0];
                $out = Topics::find()->where(['sub_id' => $sub_id])->asArray()->all();
                // print_r( $out);die;
                // the getSubCatList function will query the database based on the
                // cat_id and return an array like below:
                // [
                //    ['id'=>'<sub-cat-id-1>', 'name'=>'<sub-cat-name1>'],
                //    ['id'=>'<sub-cat_id_2>', 'name'=>'<sub-cat-name2>']
                // ]
                $newOut = [];
                foreach ($out as $key => $value) {
                    $newOut[] = [
                        'id' => $value['id'],
                        'name' => $value['topic_name']
                    ];
                }
                // print_r($newOut);die;
                echo json_encode(['output'=>$newOut, 'selected'=>'']);
                return;
            }
        }
        echo Json::encode(['output'=>'', 'selected'=>'']);
            
    }

    public function actionGetSubTopics(){
        // print_r(Yii::$app->request->post());
        // $subject =  Subject::find()->where(['class_id' => Yii::$app->request->post('class_id')])->asArray()->all();
        // return json_encode($subject);
        // 
        // 
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            // echo 'here';
            $parents = $_POST['depdrop_parents'];
            if ($parents != null) {
                $class_id = $parents[0];
                $sub_id = $parents[1];
                $topic_id = $parents[2];

                $out = StudyMaterial::find()->where(['class' => $class_id ,'subject' => $sub_id,'topic' => $topic_id])->asArray()->all();

                // print_r( $out);die;
                // the getSubCatList function will query the database based on the
                // cat_id and return an array like below:
                // [
                //    ['id'=>'<sub-cat-id-1>', 'name'=>'<sub-cat-name1>'],
                //    ['id'=>'<sub-cat_id_2>', 'name'=>'<sub-cat-name2>']
                // ]
                $newOut = [];
                foreach ($out as $key => $value) {
                    $newOut[] = [
                        'id'   =>  $value['subtopic'],
                        'name' => $value['subtopic']
                    ];
                }
                // print_r($newOut);die;
                echo json_encode(['output'=>$newOut, 'selected'=>'']);
                return;
            }
        }
        echo Json::encode(['output'=>'', 'selected'=>'']);
            
    }


    public function actionMaterial(){
        $material = StudyMaterial::find()->where(['class' => $class_id ,'subject' => $sub_id,'topic' => $topic_id])->asArray()->all();
    }
}