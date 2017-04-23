<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';

?>
<section>
   <div class="contact-container">
        
        <p>Any query feel free to call us or you can also email.</p>

        <div class="contact-form">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name',['options' => ['class' => 'form-group']])->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email',['options' => ['class' => 'form-group']]) ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 5]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), 
                        [
                            'template' => 
                                '<div class="row">
                                    <div class="col-lg-3">{image}</div>
                                    <div class="col-lg-6">{input}</div>
                                </div>'
                        ]); 
                    ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
                
        </div>
        
        <div classs="contact-number-block">
            <p>Route Map</p>
            
        </div>
    </div> 
</section>

