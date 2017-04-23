<?php
use yii\helpers\Html;
$this->title = 'User';

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
		<div class="row user">
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 <?php echo $left_border ?>">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 <?php echo $heading ?>">
				<h3>We have many things for you........</h3>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 <?php echo $right_border ?>">
			</div>
			<div class="clearfix"></div>
			<div class="gapper"></div>


			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="block-item">
					<div class="block-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/class.jpg">
						<div class="hover-bg bg-color-2"></div>
						<a href="/facility?id=classroom">View More</a>
					</div>
					<div class="block-name clear-fix">
						<span class="price">Study Material</span>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="block-item">
					<div class="block-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/class.jpg">
						<div class="hover-bg bg-color-2"></div>
						<a href="/facility?id=classroom">View More</a>
					</div>
					<div class="block-name clear-fix">
						<span class="price">Video Lecture</span>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="block-item">
					<div class="block-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/class.jpg">
						<div class="hover-bg bg-color-2"></div>
						<a href="/facility?id=classroom">View More</a>
					</div>
					<div class="block-name clear-fix">
						<span class="price">Test Series</span>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="gapper"></div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="block-item">
					<div class="block-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/class.jpg">
						<div class="hover-bg bg-color-2"></div>
						<a href="/facility?id=classroom">View More</a>
					</div>
					<div class="block-name clear-fix">
						<span class="price">Extra Classes</span>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="block-item">
					<div class="block-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/class.jpg">
						<div class="hover-bg bg-color-2"></div>
						<a href="/facility?id=classroom">View More</a>
					</div>
					<div class="block-name clear-fix">
						<span class="price">Free Demo Classes</span>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="block-item">
					<div class="block-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/class.jpg">
						<div class="hover-bg bg-color-2"></div>
						<a href="/facility?id=classroom">View More</a>
					</div>
					<div class="block-name clear-fix">
						<span class="price">Science Lifes</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
