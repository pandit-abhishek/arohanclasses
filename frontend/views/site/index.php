<?php 
use yii\helpers\Html;
use yii\helpers\Url;
?>
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 home-slider">
				<ul class="main-slider">
					<li><img src="images/missile.jpg" class="img-responsive" alt="" /></li>
					<li><img src="images/satellite1.jpg" class="img-responsive" alt="" /></li>
					<li><img src="images/class-room-lect.jpg" class="img-responsive" alt="" /></li>
					<li><img style = "height: 539px; width:100%; " src="images/earth-orbit.png" class="img-responsive" alt="" /></li>
				</ul>
			</div>
		</div>	
	</div>
	<div class="container">
		<div class="row we-provide">
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 left-border">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
				<h3>We Provide</h3>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 right-border">
			</div>
			<div class="clearfix"></div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="block-item">
					<div class="block-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/class.jpg">
						<div class="hover-bg bg-color-2"></div>
						<?php 
							// Html::a('View More',Url::to('/construction', true));
						?>
						<a href="index.php/facility?id=courses">View More</a>
					</div>
					<div class="block-name clear-fix">
						<span class="price">Courses</span>
					</div>
				</div>
			</div>	
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="block-item">
					<div class="block-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/study-material.jpg">
						<div class="hover-bg bg-color-2"></div>
						<a href="index.php/facility?id=studyMaterial">View More</a>
					</div>
					<div class="block-name clear-fix">
						<span class="price">Study Material</span>
						
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="block-item">
					<div class="block-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/girl-image.jpg">
						<div class="hover-bg bg-color-2"></div>
						<a href="index.php/facility?id=problemSolvingClass">View More</a>
					</div>
					<div class="block-name clear-fix">
						<span class="price">Problem Solving & Free Demo Classes</span>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="gapper"></div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="block-item">
					<div class="block-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/class-panorama.jpg">
						<div class="hover-bg bg-color-2"></div>
						<a href="index.php/facility?id=testSeries">View More</a>
					</div>
					<div class="block-name clear-fix">
						<span class="price">Test Series</span>
					</div>
				</div>
			</div>	
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="block-item">
					<div class="block-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/video-lecture.jpg">
						<div class="hover-bg bg-color-2"></div>
						<a href="index.php/facility?id=videoLecture">View More</a>
					</div>
					<div class="block-name clear-fix">
						<span class="price">Video Lecture</span>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="block-item">
					<div class="block-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/more.jpg">
						<div class="hover-bg bg-color-2"></div>
						<a href="index.php/facility?id=more">View More</a>
					</div>
					<div class="block-name clear-fix">
						<span class="price">More</span>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="gapper"></div>
		</div>	

		
	</div>
</section>