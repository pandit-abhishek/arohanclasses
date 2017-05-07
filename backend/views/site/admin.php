<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\Pjax;
use richardfan\widget\JSRegister;
use kartik\widgets\DepDrop;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use common\models\ClassRoom;



$this->title = 'Login';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    

    <div class="row">
        <div class="col-lg-5">
            <?php 

            	

            	$form = ActiveForm::begin([
						'id' => 'admin-form',
						'options' => ['enctype' => 'multipart/form-data'],
						'action' => '/material'
					]); 
				?>
					<!-- <div class="form-group"> -->

						<?= $form->field($model,'class')->dropDownList(ArrayHelper::map($class,'id','class_name'),['id'=> 'cat-id','prompt' => '--Select Class--'])->label('Choose Class') ?>

					<!-- </div> -->

					<!-- <div class="form-group"> -->

						<?= 
							$form->field($model, 'subject')->widget(DepDrop::classname(), [
						        'options' => ['id'=>'subcat-id'],
						        'pluginOptions'=>[
						        	'depends'=>['cat-id'],
						            'placeholder' => 'Select...',
						            'url' => Url::to(['/subject'])
						        ]
						    ]);
						// $form->field($model,'subject')->dropDownList($subject,['class' => 'form-group subject','prompt' => '--Select Subject--'])->label('Choose Subject') 

						?>

					<!-- </div> -->

					<!-- <div class="form-group"> -->

		            	<?= $form->field($model, 'chapter')->textInput(['autofocus' => true])->input('contact')->label('Chapter'); ?>
						

					<!-- </div> -->

					<!-- <div class="form-group"> -->

		            	<?= $form->field($model, 'topic')->textInput(['autofocus' => true])->input('contact')->label('Topic'); ?>
						

					<!-- </div> -->

					<!-- <div class="form-group"> -->

		            	<?= $form->field($model, 'subtopic')->textInput(['autofocus' => true])->input('contact')->label('Sub Topic'); ?>
						

					<!-- </div> -->

					<!-- <div class="form-group"> -->
						<?= $form->field($model, 'file')->fileInput() ?>
					<!-- </div> -->

				<div class="form-group">
	                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'study-material-button']) ?> 
				</div>	

	           	<?php ActiveForm::end(); 

	           	
	           	?>
        </div>
    </div>
</div>



<?php JSRegister::begin(); ?>
	<script>
	    $(".choose-class").change(function() {
	    	var class_id = this.value;
	    	console.log(class_id);
	    	$.ajax({
	    		url:'subject',
	    		data:{'class_id':class_id},
	    		type:'POST',
	    		success : function(data){
	    			$(".subject").html(data);
	    			console.log(data);
	    		}
	    	});
	    	
	    	
	    });
	</script>
<?php JSRegister::end(); ?>