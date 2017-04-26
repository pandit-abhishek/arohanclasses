	<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Signup';

?>
<section>
    <div class="signup-form login-form">
        <div class="form-blog">

            <p>Registration form:</p>
            <?php $form = ActiveForm::begin([
                    'id' => 'signup-form',
					'options' => ['class' => 'form-horizontal'],
                    'requiredCssClass'=>'required',
					'fieldConfig'=>[
						'options'=>[
							'tag' => false
						],

					]
                ]); 
            ?>

			<div class="signup-first-name ">
				<div class="form-group field-signupform-firstname required">
					<?= $form->field($model, 'firstname')->textInput(['autofocus' => true])->input('firstname', ['placeholder' => "First Name"])->label(false); ?>
					<i class="fa fa-user" aria-hidden="true"></i>
				 </div>	
            </div>

			<div class="signup-last-name">
				<div class="form-group">
					<?= $form->field($model, 'lastname')->textInput(['autofocus' => true])->input('lastname', ['placeholder' => "Last Name"])->label(false); ?>
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
			</div>

			<div class="clearfix"></div>	

			<div class="form-group">
				<?= $form->field($model, 'username')->textInput(['autofocus' => true])->input('username', ['placeholder' => "Email Or Mobile"])->label(false); ?>
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</div>

			<div class="form-group">
				<?= $form->field($model, 'password')->passwordInput()->input('password', ['placeholder' => "Password"])->label(false); ?>
				<i class="fa fa-lock" aria-hidden="true"></i>
			</div>

			<div class="form-group">
				<?= $form->field($model, 'confirm_pass')->passwordInput()->input('password', ['placeholder' => "Confirm Password"])->label(false); ?>
				<i class="fa fa-lock" aria-hidden="true"></i>
			</div>

			<div class="form-group">
            	<?= $form->field($model, 'contact')->textInput(['autofocus' => true])->input('contact', ['placeholder' => "Contact No"])->label(false); ?>
				<i class="fa fa-phone" aria-hidden="true"></i>
			</div>

			<div class="form-group">
				<?= $form->field($model,'class')->dropDownList([
                    ''  => 'Select Class',
                    '1' => 'XI',
                    '2' => 'XII',
                    '3' => 'Post XII'
                ],['class' => 'form-group'])->label(false) ?>
			</div>
			
			<div class="form-group select-gender">
            <?= $form->field($model,'gender')->radioList([
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
			</div>
			
           	<div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?> 
			</div>	
        <?php ActiveForm::end(); ?>         
        </div>
    </div> 
</section>

