<?php
use yii\helpers\Html;
$this->title = 'Batches';

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
						<a href="/facility?id=classroom">View More</a>
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
						<a href="/facility?id=classroom">View More</a>
					</div>
					<div class="block-name clear-fix">
						<span class="price">Upcoming Batches</span>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
			</div>
		</div>

	</div>
	<!-- <div class ="batches">
		<div class="current-batches">
			<p>Current batches</p>
		</div>
		<div class="upcoming-batches">
			<p>Upcoming batches</p>
		</div>
	</div> -->
</section>