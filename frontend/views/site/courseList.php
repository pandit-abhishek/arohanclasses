<?php 
use Yii;
use richardfan\widget\JSRegister;

?>

<section>
	<?php if(Yii::$app->user->isGuest){ ?>
        <div class="top-margin"></div>
    <?php } ?>
	<div class="course-list">
		<div class="container-fluid course-description">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<img src="images/course-description.png" class="img-responsive" alt="" />
			</div>
		</div>

	
		<div class="container t">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 outer-left-border">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 outer-heading">
					<h3>List of Courses</h3>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 outer-right-border">
				</div>

				<div class="clearfix"></div>
				<div class="gapper"></div>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 course-tabs">
					<ul class="list-unstyled list-inline">
						<li>
							<a href="#">Pre Foundation Course<span>View Details</span></a>
							<div class="tab-details">
								<p>This course is designed to multiply the learning ability of students by enhancing their CREATIVITY, COMPETITIVE TEMPERAMENT & using their potential by our teaching methodology. Apart from studies, we also care for social culture of our students by  providing motivational classes along with discipline environment.</p>
							</div>
						</li>
						<li>
							<a href="#">Foundation course<span>View Details</span></a>
							<div class="tab-details">
								<p>This course is designed to multiply the learning ability of students by enhancing their CREATIVITY, COMPETITIVE TEMPERAMENT & using their potential by our teaching methodology. Apart from studies, we also care for social culture of our students by  providing motivational classes along with discipline environment.</p>
							</div>
						</li>
						<li>
							<a href="#">SANKALP<span>View Details</span></a>
							<div class="tab-details">
								<p>This course is designed to multiply the learning ability of students by enhancing their CREATIVITY, COMPETITIVE TEMPERAMENT & using their potential by our teaching methodology. Apart from studies, we also care for social culture of our students by  providing motivational classes along with discipline environment.</p>
							</div>
						</li>
						<li>
							<a href="#">Nischay<span>View Details</span></a>
							<div class="tab-details">
								<p>This course is designed to multiply the learning ability of students by enhancing their CREATIVITY, COMPETITIVE TEMPERAMENT & using their potential by our teaching methodology. Apart from studies, we also care for social culture of our students by  providing motivational classes along with discipline environment.</p>
							</div>
						</li>
						<li>
							<a href="#">UDAN<span>View Details</span></a>
							<div class="tab-details">
								<p>This course is designed to multiply the learning ability of students by enhancing their CREATIVITY, COMPETITIVE TEMPERAMENT & using their potential by our teaching methodology. Apart from studies, we also care for social culture of our students by  providing motivational classes along with discipline environment.</p>
							</div>
						</li>
						<li>
							<a href="#">Crash Course<span>View Details</span></a>
							<div class="tab-details">
								<p>This course is designed to multiply the learning ability of students by enhancing their CREATIVITY, COMPETITIVE TEMPERAMENT & using their potential by our teaching methodology. Apart from studies, we also care for social culture of our students by  providing motivational classes along with discipline environment.</p>
							</div>
						</li>
					</ul>
				</div>

				<div class="clearfix"></div>
				<div class="gapper"></div>
			</div>			
		</div>
	</div>
	

</section>

<?php JSRegister::begin(); ?>
	<script>
		$('.course-tabs ul li a').click(function(){
			$(this).siblings().slideToggle();
  		});

	</script>
<?php JSRegister::end(); ?>





