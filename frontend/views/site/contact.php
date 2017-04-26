<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';

?>
<section>
    <div class="container-fluid">
        <div class="row contact">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>Any query feel free to call us or you can also email.</h3>
            </div>
            
            <div class="clearfix"></div>
            
            <div class="contact-form">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model, 'name',['options' => ['class' => 'form-group']])->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'email',['options' => ['class' => 'form-group']]) ?>

                        <?= $form->field($model, 'subject') ?>

                        <?= $form->field($model, 'body')->textarea(['rows' => 5]) ?>

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
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <h3>Route Map</h3>
                <div class="route-map">

                </div>

            </div>
        </div>
    </div>
</section>

