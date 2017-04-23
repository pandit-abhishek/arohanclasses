<?php
use yii\helpers\Html;
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
				<div class="course-item">
					<div class="course-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/class.jpg">
						<div class="hover-bg bg-color-2"></div>
						<a href="/facility?id=classroom">View More</a>
					</div>
					<div class="course-name clear-fix">
						<span class="price">Class Room Courses</span>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="course-item">
					<div class="course-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/class-X.jpg">
						<div class="hover-bg bg-color-2"></div>
						<a href="/facility?id=classroom">View More</a>
					</div>
					<div class="course-name clear-fix">
						<span class="price">Class Room Courses</span>
					</div>
				</div>
			</div>	
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="course-item">
					<div class="course-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/class-XII.jpg">
						<div class="hover-bg bg-color-2"></div>
						<a href="/facility?id=classroom">View More</a>
					</div>
					<div class="course-name clear-fix">
						<span class="price">Class Room Courses</span>
					</div>
				</div>
			</div>	
			<div class="clearfix"></div>
			<div class="gapper"></div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="course-item">
					<div class="course-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/class-IX.jpg">
						<div class="hover-bg bg-color-2"></div>
						<a href="/facility?id=classroom">View More</a>
					</div>
					<div class="course-name clear-fix">
						<span class="price">Class Room Courses</span>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="course-item">
					<div class="course-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/courses-girl.jpg">
						<div class="hover-bg bg-color-2"></div>
						<a href="/facility?id=classroom">View More</a>
					</div>
					<div class="course-name clear-fix">
						<span class="price">Class Room Courses</span>
					</div>
				</div>
			</div>	
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="course-item">
					<div class="course-hover">
						<img alt="" data-at2x="pic/370x280-img-2@2x.jpg" src="images/gurukul.jpg">
						<div class="hover-bg bg-color-2"></div>
						<a href="/facility?id=classroom">View More</a>
					</div>
					<div class="course-name clear-fix">
						<span class="price">Class Room Courses</span>
					</div>
				</div>
			</div>				
		</div>
		
	</div>




		<!-- <p class="heading"></p>

		<div class="class-room-courses">
			<p>Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.</p>
		</div>
		<div class="jee-main">
			<p>Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.</p>
		</div>
		<div class="jee-advance">
			<p>Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.</p>
		</div>
		<div class="neet">
			<p>Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.</p>
		</div>
		<div class="eleventh">
			<p>Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.</p>
		</div>
		<div class="twelth">
			<p>Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.</p>
		</div> -->
		
	
</section>
