<?php

use Yii;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';

?>
<section>
<div class="contact">
    <div class="container">
        <div class="row">
            <?php if(Yii::$app->user->isGuest){ ?>
                <div class="gapper"></div>
            <?php } ?>

            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>Any query feel free to call us or you can also email.</h3>
            </div>
            <div class="clearfix"></div>
            <div class="contact-form">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model,'name',['options' => ['class' => 'form-group']])->textInput(['class'=>'form-control','autofocus' => true] )->input('name', ['placeholder' => "Enter your name"])->label(false); ?>

                        <?= $form->field($model, 'email',['options' => ['class' => 'form-group']])->textInput(['class'=>'form-control','autofocus' => true] )->input('email', ['placeholder' => "Enter your Email"])->label(false); ?>

                        <?= $form->field($model, 'subject',['options' => ['class' => 'form-group']])->textInput(['class'=>'form-control','autofocus' => true] )->input('subject', ['placeholder' => "Enter your Email"])->label(false); ?>

                        <?= $form->field($model, 'body')->textarea(['rows' => 5])->label(false) ?>

                        <?= $form->field($model, 'reCaptcha', ['enableAjaxValidation' => false])->widget(
                            \himiklab\yii2\recaptcha\ReCaptcha::className(), [
                                    'name' => 'reCaptcha',
                                    'siteKey' => '6LdoRx4UAAAAAI92ljw1ZAnL6s8YZ7m21Sy2hGIm',
                                    'widgetOptions' => ['class' => 'recaptcha-contact']
                                ]
                            )->label(false) 
                        ?>

                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                    <div class="route-map">
                        <img src="../images/root-map.png" class="img-responsive" alt="Loading Root map">    
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>  
</section>

