<?php
use yii\helpers\Html;
use richardfan\widget\JSRegister;

$this->title = 'Courses';

if(Yii::$app->user->isGuest){
	$left_border = 'outer-left-border';
	$right_border = 'outer-right-border';
	$heading = 'outer-heading';
}else{
	$left_border = 'inner-left-border';
	$right_border = 'inner-right-border';
	$heading = 	'inner-heading';
}
?>
<section>
	<div class="container">
		<div class="row courses">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 <?php echo $left_border ?>">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 <?php echo $heading ?>"">
				<h3>Courses We Provides</h3>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 <?php echo $right_border ?>">
			</div>
			<div class="clearfix"></div>
			<div class="gapper"></div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="block-item">
					<div class="block-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/class.jpg">
						<div class="hover-bg bg-color-2"></div>

						<?php if(!Yii::$app->user->isGuest) { ?>
							<button class = "courses-class-room">View More</button>
						<?php } else { ?>
							<a href="/facility?id=classroom">View More</a>
						<?php } ?>
					</div>
					<div class="block-name clear-fix">
						<span class="price">Class Room Courses</span>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="block-item">
					<div class="block-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/class-X.jpg">
						<div class="hover-bg bg-color-2"></div>

						<?php if(!Yii::$app->user->isGuest) { ?>
							<button class = "jee-main">View More</button>
						<?php } else { ?>
							<a href="/facility?id=classroom">View More</a>
						<?php } ?>

					</div>
					<div class="block-name clear-fix">
						<span class="price">Jee Main</span>
					</div>
				</div>
			</div>	
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="block-item">
					<div class="block-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/class-XII.jpg">
						<div class="hover-bg bg-color-2"></div>

						<?php if(!Yii::$app->user->isGuest) { ?>
							<button class = "jee-advance">View More</button>
						<?php } else { ?>
							<a href="/facility?id=classroom">View More</a>
						<?php } ?>

					</div>
					<div class="block-name clear-fix">
						<span class="price">Jee Advance</span>
					</div>
				</div>
			</div>	
			<div class="clearfix"></div>
			<div class="gapper"></div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="block-item">
					<div class="block-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/class-IX.jpg">
						<div class="hover-bg bg-color-2"></div>

						<?php if(!Yii::$app->user->isGuest) { ?>
							<button class = "neet">View More</button>
						<?php } else { ?>
							<a href="/facility?id=classroom">View More</a>
						<?php } ?>

					</div>
					<div class="block-name clear-fix">
						<span class="price">NEET</span>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="block-item">
					<div class="block-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/courses-girl.jpg">
						<div class="hover-bg bg-color-2"></div>

						<?php if(!Yii::$app->user->isGuest) { ?>
							<button class = "eleventh">View More</button>
						<?php } else { ?>
							<a href="/facility?id=classroom">View More</a>
						<?php } ?>

					</div>
					<div class="block-name clear-fix">
						<span class="price">XI</span>
					</div>
				</div>
			</div>	
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="block-item">
					<div class="block-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/gurukul.jpg">
						<div class="hover-bg bg-color-2"></div>

						<?php if(!Yii::$app->user->isGuest) { ?>
							<button class = "tweleth">View More</button>
						<?php } else { ?>
							<a href="/facility?id=classroom">View More</a>
						<?php } ?>

					</div>
					<div class="block-name clear-fix">
						<span class="price">XII</span>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="gapper"></div>				
		</div>
	</div>
</section>



<!-- Course POP UP starts here. -->
<section>
	<div class="popup-block">
		<div class="modal fade" id="class-room" role="dialog">
		    <div class="modal-dialog modal-sm vertical-align-center">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Class Room Courses</h4>
		        </div>
		        <div class="modal-body">
		            <p>Success in IIT-JEE ( one of the toughest exam in the world) and NEET, not only ensure your secure career but also secure the growth of our country. Only hard work is not sufficient for the success in IIT-JEE/ NEET,  but smart work with hard work is necessary for success for such high level examination. We recommend hard work in study with revision both with consistency for success. At Physics Classes we provide the platform for the students to develop right attitude, sincerity and understanding of subjects required to excel in the examinations. Our study material are self elaborated and self sufficient.</p>
		        </div>
		        <div class="modal-footer">
		            <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
		        </div>
		      </div>
		    </div>
		</div>

		<div class="modal fade" id="jee-main" role="dialog">
		    <div class="modal-dialog modal-sm vertical-align-center">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Jee Main</h4>
		        </div>
		        <div class="modal-body">
		            <p>Success in IIT-JEE ( one of the toughest exam in the world) and NEET, not only ensure your secure career but also secure the growth of our country. Only hard work is not sufficient for the success in IIT-JEE/ NEET,  but smart work with hard work is necessary for success for such high level examination. We recommend hard work in study with revision both with consistency for success. At Physics Classes we provide the platform for the students to develop right attitude, sincerity and understanding of subjects required to excel in the examinations. Our study material are self elaborated and self sufficient.</p>
		        </div>
		        <div class="modal-footer">
		            <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
		        </div>
		      </div>
		    </div>
		</div>

		<div class="modal fade" id="jee-advance" role="dialog">
		    <div class="modal-dialog modal-sm vertical-align-center">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Jee Advance</h4>
		        </div>
		        <div class="modal-body">
		            <p>Success in IIT-JEE ( one of the toughest exam in the world) and NEET, not only ensure your secure career but also secure the growth of our country. Only hard work is not sufficient for the success in IIT-JEE/ NEET,  but smart work with hard work is necessary for success for such high level examination. We recommend hard work in study with revision both with consistency for success. At Physics Classes we provide the platform for the students to develop right attitude, sincerity and understanding of subjects required to excel in the examinations. Our study material are self elaborated and self sufficient.</p>
		        </div>
		        <div class="modal-footer">
		            <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
		        </div>
		      </div>
		    </div>
		</div>

		<div class="modal fade" id="neet" role="dialog">
		    <div class="modal-dialog modal-sm vertical-align-center">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">NEET</h4>
		        </div>
		        <div class="modal-body">
		            <p>Success in IIT-JEE ( one of the toughest exam in the world) and NEET, not only ensure your secure career but also secure the growth of our country. Only hard work is not sufficient for the success in IIT-JEE/ NEET,  but smart work with hard work is necessary for success for such high level examination. We recommend hard work in study with revision both with consistency for success. At Physics Classes we provide the platform for the students to develop right attitude, sincerity and understanding of subjects required to excel in the examinations. Our study material are self elaborated and self sufficient.</p>
		        </div>
		        <div class="modal-footer">
		            <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
		        </div>
		      </div>
		    </div>
		</div>

		<div class="modal fade" id="eleventh" role="dialog">
		    <div class="modal-dialog modal-sm vertical-align-center">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">XI</h4>
		        </div>
		        <div class="modal-body">
		            <p>Success in IIT-JEE ( one of the toughest exam in the world) and NEET, not only ensure your secure career but also secure the growth of our country. Only hard work is not sufficient for the success in IIT-JEE/ NEET,  but smart work with hard work is necessary for success for such high level examination. We recommend hard work in study with revision both with consistency for success. At Physics Classes we provide the platform for the students to develop right attitude, sincerity and understanding of subjects required to excel in the examinations. Our study material are self elaborated and self sufficient.</p>
		        </div>
		        <div class="modal-footer">
		            <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
		        </div>
		      </div>
		    </div>
		</div>

		<div class="modal fade" id="tweleth" role="dialog">
		    <div class="modal-dialog modal-sm vertical-align-center">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">XII</h4>
		        </div>
		        <div class="modal-body">
		            <p>Success in IIT-JEE ( one of the toughest exam in the world) and NEET, not only ensure your secure career but also secure the growth of our country. Only hard work is not sufficient for the success in IIT-JEE/ NEET,  but smart work with hard work is necessary for success for such high level examination. We recommend hard work in study with revision both with consistency for success. At Physics Classes we provide the platform for the students to develop right attitude, sincerity and understanding of subjects required to excel in the examinations. Our study material are self elaborated and self sufficient.</p>
		        </div>
		        <div class="modal-footer">
		            <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
		        </div>
		      </div>
		    </div>
		</div>
	</div>
</section>
<!-- Course POP UP end here. -->


<?php JSRegister::begin(); ?>
	<script>
	    $(".courses-class-room").click(function() {
	    	$("#class-room").modal('show');
	    });
	    $(".jee-main").click(function() {
	    	$("#jee-main").modal('show');
	    });
	    $(".jee-advance").click(function() {
	    	$("#jee-advance").modal('show');
	    });
	    $(".neet").click(function() {
	    	$("#neet").modal('show');
	    });
	    $(".eleventh").click(function() {
	    	$("#eleventh").modal('show');
	    });
	    $(".tweleth").click(function() {
	    	$("#tweleth").modal('show');
	    });
	</script>
<?php JSRegister::end(); ?>