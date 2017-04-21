<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $confirmPassword;
    public $contactNo;
    public $class;
    public $gender;
    

    
    /*public function attributes(){
        return[
            'firstname',
            'lastname',
            'username',
            'email',
            'password',
            'contact'
        ];
    }*/

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname','lastname','email','password','confirmPassword','contactNo','class','gender'], 'required'],
            // ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            // ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            // ['password', 'required'],
            ['password', 'string', 'min' => 6],
            [['firstname','lastname','email','password','confirmPassword','contactNo','class'],'safe']
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {

        if (!$this->validate()) {
            return null;
        }
        // echo"<pre>";print_r($this->attributes);die;
        $user = new User();
        $userData = $user->setAttr($this->attributes);
        if($userData && $user->save()){
            return $userData;
        }else{
            echo"<pre>";print_r($userData->errors);die;
            return false;
        }
        
    }
}
