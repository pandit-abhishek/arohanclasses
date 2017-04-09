<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Signup';

?>
<div class="user-signup">
    

    <p>Please fill out the following fields to signup:</p>
    <?php $form = ActiveForm::begin([
            'id' => 'form-signup'
        ]); 
    ?>
    <div class="row">
        <div class="col-lg-5">
            
                <div class="form-group">
                    <?= $form->field($model, 'firstname' ,['options'=>['class']])->textInput(['autofocus' => true]) ?>
                </div>
                
                <?= $form->field($model, 'lastname')->textInput(['autofocus' => true]) ?>
               
                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'contactNo')->passwordInput() ?>
                

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
