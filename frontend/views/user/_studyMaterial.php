<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use richardfan\widget\JSRegister;
use yii\helpers\ArrayHelper;
use kartik\widgets\DepDrop;
use yii\helpers\Url;
$this->title = 'Download';

?>
<section>
	<div class="container study-material-content">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<?php $form = ActiveForm::begin([
						'id' => 'download-form',
					]); 
				?>
					<?= $form->field($model,'class')->dropDownList(ArrayHelper::map($class,'id','class_name'),['id'=> 'class-id','prompt' => '--Select Class--'])->label('Choose Class') 
					?>

					<?= 
							$form->field($model, 'subject')->widget(DepDrop::classname(), [
						        'options' => ['id'=>'sub-id'],
						        'pluginOptions'=>[
						        	'depends'=>['class-id'],
						            'placeholder' => 'Select...',
						            'url' => Url::to(['/subject'])
						        ]
						    ]);
					?>

					<?= 
							$form->field($model, 'topic')->widget(DepDrop::classname(), [
						        'options' => ['id'=>'topic-id'],
						        'pluginOptions'=>[
						        	'depends'=>['sub-id'],
						            'placeholder' => 'Select...',
						            'url' => Url::to(['/topics'])
						        ]
						    ]);
					?>

					<?= 
							$form->field($model, 'subtopic')->widget(DepDrop::classname(), [
						        'options' => ['id'=>'subtopic-id'],
						        'pluginOptions'=>[
						        	'depends'=>['class-id','sub-id','topic-id'],
						            'placeholder' => 'Select...',
						            'url' => Url::to(['/sub-topics'])
						        ]
						    ]);
					?>

				<div class="form-group">
	                <?= Html::button('Submit', ['class' => 'btn btn-primary submit-value', 'name' => 'study-material-button']) ?> 
				</div>	
	           	<?php ActiveForm::end(); ?>
            </div>
		</div>
	</div>
</section>

<?php JSRegister::begin(); ?>
	<script>
	    $(".submit-value").click(function() {
	    	class_id = $('#class-id').val();
	    	sub_id =   $('#sub-id').val();
	    	topic_id = $('#topic-id').val();
	    	subtopic_id = $('#subtopic-id').val();
	    	console.log(sub_id);
	    	$.ajax({
	    		url:'download',
	    		data:{'class_id': class_id,'sub_id':sub_id,'topic_id':topic_id,'subtopic_id':subtopic_id},
	    		type:'POST',
	    		success : function(data){
	    			console.log(data);
	    		}
	    	});
	    });
	</script>
<?php JSRegister::end(); ?>