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
        <title>Arohan Classess | <?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
		<link rel="shortcut icon" href="favicon.png">
    </head>
    <body>	
        <?php $this->beginBody() ?>
            <div class="wrap nav-header">
    			<header>
                    <?php
                        NavBar::begin([
                            'brandLabel' => 'Arohan Classes',
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
                                    ['label' => 'Batches', 'url' => ['/site/batches']],
                                    ['label' => 'Signup', 'url' => ['/user/signup']],
                                    ['label' => 'Login', 'url' => ['/user/login']],
                                ];
                            } else {
                                $menuItems = [
                                    ['label' => 'Home', 'url' => ['/user/home']],
                                    ['label' => 'Contact', 'url' => ['/site/contact']],
                                    ['label' => 'Courses', 'url' => ['/site/courses']],
                                    ['label' => 'Batches', 'url' => ['/site/batches']],
                                    ['label' => 'More', 'url' => ['/site/more']],
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
                <!-- <div class="header-margin"></div> -->
                <?php 
                    if(!Yii::$app->user->isGuest){ 
                        if(Yii::$app->controller->action->id == 'contact'){
                            $backColorClass = 'contact-not-guest';
                        }else {
                            $backColorClass = 'contact-guest';
                        }
                        $user = Yii::$app->user->identity;
                    ?>	
                        <div class="container-fluid welcome <?php echo $backColorClass ;?>">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <p>Welcome <?php echo ucfirst($user->firstname);?></p>
                                </div>
                            </div>
                        </div>

                <?php } ?>
                    
                <?php if(Yii::$app->session->hasFlash('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <span><?= Yii::$app->session->getFlash('success') ?></span>
                    </div>
                <?php endif; ?>

                <?php if(Yii::$app->session->hasFlash('error')): ?>
                    <div class="alert alert-error" role="alert">
                        <span><?= Yii::$app->session->getFlash('error') ?></span>
                    </div>
                <?php endif; ?>
                
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
								<p class="pull-left">© Arohan Classes <?php echo date("Y")?></p>
								<p class="pull-right">Powered By <a target = "_blank" href="www.technovihar.com"><?= CustomYii::powered()?></a></p>
							</div>
						</div>
					</div>
				</div>
                <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script> -->
                <!-- <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
                <script type="text/javascript" src="./js/jquery-3.2.1.js"></script>
                <script type="text/javascript" src="./js/bootstrap.js"></script>
            </footer>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
