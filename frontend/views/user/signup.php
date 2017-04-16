<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Signup';

?>
<section>
    <div class="signup-form">
        <div class="form-blog">

            <p>Please fill out the following fields to signup:</p>
            <?php $form = ActiveForm::begin([
                    'id' => 'signup-form',
                    'options' => ['class' => 'form-horizontal'],
                ]); 
            ?>
            
                <?= $form->field($model, 'firstname' ,['options'=>['class' => 'form-group']])->textInput(['autofocus' => true])->input('firstname', ['placeholder' => "First Name"])->label(false); ?>
            
            
            <?= $form->field($model, 'lastname',['options'=>['class' => 'form-group']])->textInput(['autofocus' => true])->input('lastname', ['placeholder' => "Last Name"])->label(false); ?>
           
            <?= $form->field($model, 'email',['options'=>['class' => 'form-group']])->textInput(['autofocus' => true])->input('username', ['placeholder' => "Email Or Mobile"])->label(false); ?>

            <?= $form->field($model, 'password',['options'=>['class' => 'form-group']])->passwordInput()->input('password', ['placeholder' => "Password"])->label(false); ?>

            <?= $form->field($model, 'confirmPassword',['options'=>['class' => 'form-group']])->passwordInput()->input('confirmPassword', ['placeholder' => "Confirm Password"])->label(false); ?>

            <?= $form->field($model, 'contactNo',['options'=>['class' => 'form-group']])->textInput(['autofocus' => true])->input('contactNo', ['placeholder' => "Contact No"])->label(false); ?>

            <?= $form->field($model,'gender',['options' => ['class' => 'form-group']])->radioList([
                            'Male'=>'male',
                            'Female'=>'female'
                        ],
                        [
                            'item' => function($index, $label, $name, $checked, $value) {
                                $selected = ($checked)?"checked='checked'":"";
                                $class = ($checked) ? 'radio-checked' : '';
                                $return = '<label class="radio-inline '.$class.'">';
                                $return .= '<input type="radio" class="genderName" name="' . $name . '" value="' . $value . '" '.($selected).'>';
                                $return .= $label;
                                $return .= '</label>';
                                return $return;
                            }
                        ]
                        )->label('I am a :') ?>

            <?= $form->field($model,'class',['options' => ['class' => 'form-group']])->dropDownList([
                    ''  => 'Select Class',
                    '1' => 'XI',
                    '2' => 'XII',
                    '3' => 'Post XII'
                ],['class' => 'form-group']) ?>

            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary','disabled'=> false, 'name' => 'signup-button']) ?>
            </div>

        <?php ActiveForm::end(); ?>
                
        </div>
    </div> 

</section>

