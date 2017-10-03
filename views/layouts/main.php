<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\components\FooterSign;
use app\components\SearchField;
use app\components\LanguageSwitcher;
use app\models\CategoryTranslation;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
	
	//earlier we setted language id, so now we getting it
	$id = Yii::$app->session->get('langId');
	$translate = CategoryTranslation::find($id)->where(['language_id' => $id])->all();
	
	/*
    NavBar::begin([
        'brandLabel' => Html::img('img/Bilet.png', ['class' => 'img-responsive', 'alt' => 'logo', 'id' => 'topLogo']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-inverse navbar-fixed-top',
        ],
    ]);
	
	echo '<div class="container">
			<div class="row">';
			
	echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [ 
			
            Yii::$app->user->isGuest ? (
                ['label' => \Yii::t('app', 'Login'), 'url' => ['/user/security/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/user/security/logout'], 'post')
                . Html::submitButton(
                    \Yii::t('app', 'Logout') .'(' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
				.'<li>'
                . Html::beginForm(['/user/settings/profile'], 'post')
                . Html::submitButton( \Yii::t('app', 'Profile'), ['class' => 'btn btn-link logout'])
                . Html::endForm()
                . '</li>'
            ),
			['label' => \Yii::t('app', 'TM'), 'url' => ['/site/translate', 'lang' => 'TM']],
			['label' => \Yii::t('app', 'RU'), 'url' => ['/site/translate', 'lang' => 'RU']],
        ],
    ]);
	
	echo SearchField::widget();
	
	echo '</div>
		</div>';
		
	echo '<div class="row">
			<div class="container">';
	
    echo Nav::widget([
				'options' => ['class' => 'nav nav-pills nav-justified'],
				'items' => [
					['label' => $translate[0]->category_name, 'url' => ['/site/index']],
					['label' => $translate[1]->category_name, 'url' => ['/site/list', 'id' => 2]],
					['label' => $translate[2]->category_name, 'url' => ['/site/list', 'id' => 3]],
					['label' => $translate[3]->category_name, 'url' => ['/site/list', 'id' => 4]],
					['label' => $translate[4]->category_name, 'url' => ['/site/list', 'id' => 5]],
					['label' => $translate[5]->category_name, 'url' => ['/site/list', 'id' => 6]],
					['label' => $translate[6]->category_name, 'url' => ['/site/list', 'id' => 7]],
				],
			]);
	
	echo '</div>
		</div>';
	
    NavBar::end();
	*/
	?>
	
	<!--*********************************-->
	 <div class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom: 0px;border-radius: 0px; border-bottom: 1px solid #fff;">
        <div class="row" style="background-color:#af6799;">
            <div class="col-md-12">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
					<ul class="row" id="topNavigation">
						<div class="col-md-3" id="topLogo">
							<a href="<?= Url::to(['/site/index'])?>">
								<img class="img-responsive" src="img/logo/Bilet.png" alt="logo">
							</a>
						</div>
						<?php echo Nav::widget([
									'options' => ['class' => 'navbar-nav navbar-right'],
									'items' => [ 
										
										Yii::$app->user->isGuest ? (
											'<li>'
											.Html::beginForm(['/user/security/login'], 'post')
											.Html::submitButton(\Yii::t('app', 'Login'), ['class' => 'btn btn-link logout'])
											.Html::endForm()
											.'</li>'
										) : (
											'<li>'
											. Html::beginForm(['/user/security/logout'], 'post')
											. Html::submitButton(
												\Yii::t('app', 'Logout') .'(' . Yii::$app->user->identity->username . ')',
												['class' => 'btn btn-link logout']
											)
											. Html::endForm()
											. '</li>'
											.'<li>'
											. Html::beginForm(['/user/settings/profile'], 'post')
											. Html::submitButton( \Yii::t('app', 'Profile'), ['class' => 'btn btn-link logout'])
											. Html::endForm()
											. '</li>'
										),
										'<li>'.Html::a(\Yii::t('app', 'TM'), ['/site/translate', 'lang' => 'TM'], ['class'=>'language_btn', 'id' => 'btn_tm']).'</li>',
										'<li>'.Html::a(\Yii::t('app', 'RU'), ['/site/translate', 'lang' => 'RU'], ['class'=>'language_btn', 'id' => 'btn_ru']).'</li>',
									],
								]);
						?>
						
					</ul>
                    <ul class="row" id="bottomNavigation">
					  <?php echo Nav::widget([
												'options' => ['class' => 'nav navbar-nav'],
												'items' => [
													['label' => $translate[0]->category_name, 'url' => ['/site/index']],
													['label' => $translate[1]->category_name, 'url' => ['/site/list', 'id' => 2]],
													['label' => $translate[2]->category_name, 'url' => ['/site/list', 'id' => 3]],
													['label' => $translate[3]->category_name, 'url' => ['/site/list', 'id' => 4]],
													['label' => $translate[4]->category_name, 'url' => ['/site/list', 'id' => 5]],
													['label' => $translate[5]->category_name, 'url' => ['/site/list', 'id' => 6]],
													['label' => $translate[6]->category_name, 'url' => ['/site/list', 'id' => 7]],
												],
											]);
											
							echo SearchField::widget();
					  ?>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
	
    

	
    <div class="container-fluid" style="margin-top: 5.3%;"> <!--background-image: url('img/bilet_tm_1.jpg');-->
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
		
		<?= $content ?>
		
    </div>
</div>

<!--footer*******************************************************************-->

<?= FooterSign::widget() ?>	

<footer class="footer" id="footer">

    <div class="container">
       <div class="col-md-12" style="padding-top: 35px; padding-bottom: 35px;">
           
           <div class="col-md-3">
               <center>
                   <img id="biletLogo" src="img/logo/Bilet.png" style="width: 70%;" />
               </center>
           </div>
           <div class="col-md-6">
               <div class="text-center" style="margin-bottom: 10px;">
                   <a href="#" class="bold" style="text-decoration: underline; font-size: 18px;"><?= \Yii::t('app', 'Advertise') ?></a>
               </div>
               <div class="text-center" style="color: #fff;">
                   <?= \Yii::t('app', 'Email address for contact - ') ?><span class="bold">info@bilet.tm</span>
               </div>
               <ul>
				   <li><a href="https://vk.com/friends?act=find"><i class="fa fa-vk" id="vkColor"></i></a></li>
                   <li><a href="https://www.ok.ru/profile/574735705240"><i class="fa fa-odnoklassniki" id="odnoklassnikiColor"></i></a></li>
                   <li><a href="#"><i class="fa fa-linkedin" id="linkedInColor"></i></a></li>
				   <li><a href="#"><i class="fa fa-facebook" id="facebookColor"></i></a></li>
                   
               </ul>
           </div>
           <div class="col-md-3">
               <center><a href="http://ttweb.org/"><img id="ttwebLogo" src="img/logo/ttWeb.png" alt="ttWebLogo" style="width: 40%;"></a></center>
           </div>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
