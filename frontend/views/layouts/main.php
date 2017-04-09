<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
    </head>
    <body>
        <?php $this->beginBody() ?>

            <div class="wrap nav-header">
                <?php
                    NavBar::begin([
                        'brandLabel' => 'Physics Classes',
                        'brandUrl' => Yii::$app->homeUrl,
                        'options' => [
                            'class' => 'navbar-inverse navbar-fixed-top',
                        ],
                    ]);
                        $menuItems = [
                            ['label' => 'Home', 'url' => ['/site/index']],
                            ['label' => 'Contact', 'url' => ['/site/contact']],
                            ['label' => 'Courses', 'url' => ['/site/courses']],
                            ['label' => 'More', 'url' => ['/site/more']],
                            ['label' => 'Batches', 'url' => ['/site/batches']],
                        ];
                
                        if (Yii::$app->user->isGuest) {
                            $menuItems[] = ['label' => 'Signup', 'url' => ['/user/signup']];
                            $menuItems[] = ['label' => 'Login', 'url' => ['/user/login']];
                        } else {
                            $menuItems[] = '<li>'
                                . Html::beginForm(['/site/logout'], 'post')
                                . Html::submitButton(
                                    'Logout (' . Yii::$app->user->identity->username . ')',
                                    ['class' => 'btn btn-link logout']
                                )
                                . Html::endForm()
                                . '</li>';
                        }
                        echo Nav::widget([
                            'options' => ['class' => 'navbar-nav navbar-right'],
                            'items' => $menuItems,
                        ]);
                    NavBar::end();
                ?>

               <!--  <div class="container"> -->
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?= Alert::widget() ?>
                    <?= $content ?>
               <!--  </div> -->
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
                <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
                <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            </footer>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
