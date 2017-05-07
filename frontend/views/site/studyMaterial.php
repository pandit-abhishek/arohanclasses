<?php
use richardfan\widget\JSRegister;
?>

<section>
	<div class="top-margin">
	</div>
	<div class="study-material-list">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<img src="images/study-material-list.png" class="img-responsive" alt="" />
				</div>
			</div>
		</div>
		<div class="gapper"></div>
		<div class="container">	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 outer-left-border">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 outer-heading">
					<h3>Study Material</h3>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 outer-right-border">
				</div>

				<div class="clearfix"></div>
				<div class="gapper"></div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 study-material-tabs">
					<ul class="list-unstyled list-inline">
						<li>
							<a href="#">Study Materials<span>View Details</span></a>
							<div class="tab-details">
								<p>This course is designed to multiply the learning ability of students by enhancing their CREATIVITY, COMPETITIVE TEMPERAMENT & using their potential by our teaching methodology. Apart from studies, we also care for social culture of our students by  providing motivational classes along with discipline environment.This course is designed to multiply the learning ability of students by enhancing their CREATIVITY, COMPETITIVE TEMPERAMENT & using their potential by our teaching methodology. Apart from studies, we also care for social culture of our students by  providing motivational classes along with discipline environment.</p>
							</div>
						</li>
						<li>
							<a href="#">Study Materials<span>View Details</span></a>
							<div class="tab-details">
								<p>This course is designed to multiply the learning ability of students by enhancing their CREATIVITY, COMPETITIVE TEMPERAMENT & using their potential by our teaching methodology. Apart from studies, we also care for social culture of our students by  providing motivational classes along with discipline environment.This course is designed to multiply the learning ability of students by enhancing their CREATIVITY, COMPETITIVE TEMPERAMENT & using their potential by our teaching methodology. Apart from studies, we also care for social culture of our students by  providing motivational classes along with discipline environment.</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="gapper"></div>
		</div>

	</div>
</section>


<?php JSRegister::begin(); ?>
	<script>
		$('.study-material-tabs ul li a').click(function(){
			$(this).siblings().slideToggle();
  		});

	</script>
<?php JSRegister::end(); ?>