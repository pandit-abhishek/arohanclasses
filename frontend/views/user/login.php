<?php 
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
$this->title = 'Login';
?>
<section>
<div class="login-form">
	<div class="form-blog">
		<?php $form = ActiveForm::begin([
					'id' => 'login-form',
					'options' => ['class' => 'form-horizontal'],

				]);  ?>
			
				<?= $form->field($model, 'username',['options' => ['class' => 'form-group']])->textInput(['class'=>'form-control', 'autofocus' => true])->input('email', ['placeholder' => "Email OR Mobile"])->label(false); ?>
			
				<?= $form->field($model, 'password',['options' => ['class' => 'form-group']])->passwordInput()->input('password', ['placeholder' => "Password"])->label(false); ?>
				
				<?= $form->field($model, 'rememberMe')->checkbox() ?>
			
				<?= Html::submitButton('Login', ['class' => 'btn btn-primary form-group', 'disabled'=> false,'name' => 'login-button']) ?>
			<div class="forgot-psd">
				If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
			</div>
		<?php ActiveForm::end(); ?>
	</div>	
</div>
</section>