<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\components\CustomYii;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title>PhysicsClasses | <?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
		<link rel="shortcut icon" href="favicon.png">
    </head>
    <body>	
        <?php $this->beginBody() ?>
            <div class="wrap nav-header">
    			<header>
                    <?php
                        NavBar::begin([
                            'brandLabel' => 'Physics Classes',
                            'brandUrl' => Yii::$app->homeUrl,
                            'options' => [
                                'class' => 'navbar-inverse navbar-fixed-top',
                            ],
                        ]);
                            
                    
                            if (Yii::$app->user->isGuest) {
                                $menuItems = [
                                    ['label' => 'Home', 'url' => ['/site/index']],
                                    ['label' => 'Contact', 'url' => ['/site/contact']],
                                    ['label' => 'Courses', 'url' => ['/site/courses']],
                                    ['label' => 'More', 'url' => ['/site/more']],
                                    ['label' => 'Batches', 'url' => ['/site/batches']],
                                ];
                                $menuItems[] = ['label' => 'Signup', 'url' => ['/user/signup']];
                                $menuItems[] = ['label' => 'Login', 'url' => ['/user/login']];
                            } else {
                                $menuItems = [
                                    ['label' => 'Home', 'url' => ['/user/home']],
                                    ['label' => 'Contact', 'url' => ['/site/contact']],
                                    ['label' => 'Courses', 'url' => ['/site/courses']],
                                    ['label' => 'More', 'url' => ['/site/more']],
                                    ['label' => 'Batches', 'url' => ['/site/batches']],
                                ];
                                $menuItems[] = ['label' => 'Logout', 'url' => ['/site/logout'],'linkOptions' => ['data' => ['method' => 'post']]];

                            }
                            echo Nav::widget([
                                'options' => ['class' => 'navbar-nav navbar-right'],
                                'items' => $menuItems,
                            ]);
                        NavBar::end();
                    ?>
    			</header>

                <?php 
                    if(!Yii::$app->user->isGuest){ 
                        $user = Yii::$app->user->identity;
                    ?>	
                        <div class="welcome">
                            <p>Welcome <?php echo ucfirst($user->firstname);?></p>
                        </div>

                <?php } ?>
                    
                
                <!-- <div class="container"> -->
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?= Alert::widget() ?>

                    <?= $content ?>
                <!-- </div> -->
            </div>
            <footer class="footer">
                <div class="footer-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <h3>Institution Goal</h3>
                                <p>Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.</p>
                            </div>  
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <h3>Institute Goal</h3>
                                <p>Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.</p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <h3>Director Message</h3>
                                <p>Goal Imagery® Institute is a truly holistic learning environment that taps the subconscious power of emotions and imagination to help you achieve your goals faster and easier.</p>
                            </div>
                        </div>  
                    </div>
                </div>
				<div class="bottom-blog">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<p class="pull-left">© Physics Classes <?php echo date("Y")?></p>
								<p class="pull-right">Powered By <a href="#"><?= CustomYii::powered()?></a></p>
							</div>
						</div>
					</div>
				</div>
                <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
                <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            </footer>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
