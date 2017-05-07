<?php
use yii\helpers\Html;
$this->title = 'User';
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
						<button class="study-material">View More</button>
						<!-- <a href="/facility?id=classroom">View More</a> -->
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
			<div class="clearfix"></div>
			<div class="gapper"></div>
		</div>
	</div>
</section>

<section>
	<div class="popup-block">
		<div class="modal fade" id="study-material" role="dialog">
		    <div class="modal-dialog modal-sm vertical-align-center">
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Study Material</h4>
		        </div>
		        <div class="modal-body">
		            <p>Success in IIT-JEE ( one of the toughest exam in the world) and NEET, not only ensure your secure career but also secure the growth of our country. Only hard work is not sufficient for the success in IIT-JEE/ NEET,  but smart work with hard work is necessary for success for such high level examination. We recommend hard work in study with revision both with consistency for success. At Physics Classes we provide the platform for the students to develop right attitude, sincerity and understanding of subjects required to excel in the examinations. Our study material are self elaborated and self sufficient.</p>
		        </div>
		        <div class="download-button">
		        	<a class="btn btn-info" role="button" href="/download?id=study-material">Download</a>
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
	    $(".study-material").click(function() {
	    	$("#study-material").modal('show');
	    });
	</script>
<?php JSRegister::end(); ?>