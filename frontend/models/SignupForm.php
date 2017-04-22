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
    public $username;
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
            [['firstname','lastname','username','password','confirmPassword','contactNo','class','gender'], 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            // ['username', 'string', 'min' => 2, 'max' => 255],

            ['username', 'trim'],
            // ['username', 'email'],
            // ['email', 'string', 'max' => 255],
            // ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'string', 'min' => 6],
            [['firstname','lastname','username','password','confirmPassword','contactNo','class'],'safe']
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
        
        $user = new User();
        $userData = $user->setAttr($this->attributes);

        if($userData && $user->save()){
            return $userData;
        }else {
            return false;
        }
        
    }
}
