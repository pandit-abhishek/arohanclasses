<?php
use Yii;
use yii\helpers\Html;
$this->title = 'Batches';
use richardfan\widget\JSRegister;

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
	<?php if(Yii::$app->user->isGuest){ ?>
        <div class="top-margin"></div>
    <?php } ?>
	<div class="container">
		<div class="row batches">
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 <?php echo $left_border ?>">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 <?php echo $heading ?>">
				<h3>Batches</h3>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 <?php echo $right_border ?>">
			</div>
			<div class="clearfix"></div>
			<div class="gapper"></div>
			<div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
				<div class="block-item">
					<div class="block-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/class.jpg">
						<div class="hover-bg bg-color-2"></div>
						<?php if(!Yii::$app->user->isGuest) { ?>
							<button class = "current-batches">View More</button>
						<?php } else { ?>
							<a href="/facility?id=current-batches">View More</a>
						<?php } ?>

						
					</div>
					<div class="block-name clear-fix">
						<span class="price">Current Batches</span>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
				<div class="block-item">
					<div class="block-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/class.jpg">
						<div class="hover-bg bg-color-2"></div>

						<?php if(!Yii::$app->user->isGuest) { ?>
							<button class = "upcoming-batches">View More</button>
						<?php } else { ?>
							<a href="/facility?id=upcoming-batches">View More</a>
						<?php } ?>
						
					</div>
					<div class="block-name clear-fix">
						<span class="price">Upcoming Batches</span>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="gapper"></div>
	</div>
</section>
<section>
	<div class="popup-block">
		<div class="modal fade" id="current-batches" role="dialog">
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

		<div class="modal fade" id="upcoming-batches" role="dialog">
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
	</div>
</section>

<?php JSRegister::begin(); ?>
	<script>
	    $(".current-batches").click(function() {
	    	$("#current-batches").modal('show');
	    });
	    $(".upcoming-batches").click(function() {
	    	$("#upcoming-batches").modal('show');
	    });
	</script>
<?php JSRegister::end(); ?>