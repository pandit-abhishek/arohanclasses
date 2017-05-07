<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\StudyMaterial;
use common\models\ClassRoom;
use common\models\Subject;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    /*public function behaviors()
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
    }*/

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
        $model = new LoginForm();
        if(!empty(Yii::$app->request->post())){
            
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                // echo 'here';die;
                return $this->redirect('home'); 
            }
        }else{
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

    public function actionHome(){
        // echo"<pre>";print_r(!Yii::$app->user->isGuest);die;
       
        if(!Yii::$app->user->isGuest){
            // $class = new ClassRoom();
            $class  = ClassRoom::find()->all();
            
            // foreach ($class as $key => $value) {
            //     $newClass[] = $value['class_name'];
            // }
            // echo"<pre>";print_r($newClass);die;
            $model = new StudyMaterial();
            return $this->render('admin', [
                'model' => $model,
                'class' => $class,
            ]);
        }else{
            $model = new LoginForm();
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionUploadMaterial(){
        $model = new StudyMaterial();
        $class  = ClassRoom::find()->all();
        // UploadedFile::getInstance($model,'file');
        $model->setAttr(Yii::$app->request->post());
        $model = new StudyMaterial();
        $class  = ClassRoom::find()->all();
        return $this->render('admin', [
            'model' => $model,
            'class' => $class,
        ]);
        // echo"<pre>";print_r(Yii::$app->request->post());die;
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
                $cat_id = $parents[0];
                $out = Subject::find()->where(['class_id' => $cat_id])->asArray()->all();
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
}
