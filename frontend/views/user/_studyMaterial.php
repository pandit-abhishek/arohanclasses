<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use richardfan\widget\JSRegister;

$this->title = 'Download';

?>
<section>
	<div class="container study-material-content">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<?php $form = ActiveForm::begin([
						'id' => 'download-form'
					]); 
				?>
					<div class="form-group">
						<?= $form->field($model,'class')->dropDownList([
		                    ''  => 'Select Class',
		                    '1' => 'XI',
		                    '2' => 'XII',
		                    '3' => 'Post XII'
		                ],['class' => 'form-group'])->label('Choose Class') ?>
					</div>

					<div class="form-group">
						<?= $form->field($model,'class')->dropDownList([
		                    ''  => 'Select Class',
		                    '1' => 'XI',
		                    '2' => 'XII',
		                    '3' => 'Post XII'
		                ],['class' => 'form-group'])->label('Choose Subject') ?>
					</div>

					<div class="form-group">
						<?= $form->field($model,'class')->dropDownList([
		                    ''  => 'Select Class',
		                    '1' => 'XI',
		                    '2' => 'XII',
		                    '3' => 'Post XII'
		                ],['class' => 'form-group'])->label('Choose Topic') ?>
					</div>

	           	<?php ActiveForm::end(); ?>
            </div>
		</div>
	</div>
</section>

