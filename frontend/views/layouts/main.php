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

            <div class="wrap">
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
                <div class="container">
                    <p class="pull-left">&copy; Physics Classes <?= date('Y') ?></p>

                    <p class="pull-right"><?= Yii::powered() ?></p>
                </div>
                <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
                <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            </footer>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
