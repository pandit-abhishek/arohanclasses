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
    public $email;
    public $password;
    public $contactNo;
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
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            [['firstname','lastname','username','email','password','contactNo'],'safe']
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
        $user->username = $this->username;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->status = 1;
        $user->created_at = Date('Y-m-d H:i:s');
        $user->updated_at = Date('Y-m-d H:i:s');
        // print_r($user->attributes);die;
        return $user->save() ? $user : null;
    }
}
