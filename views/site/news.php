<?php

/* @var $this yii\web\View */

use kartik\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\bootstrap\Alert;

$this->title = \Yii::t('app', 'NEWS');
$this->params['breadcrumbs'][] = Html::encode($this->title);
?>

<!-- main body contents starts here-->
<div class="container">
    <!--Caorurel slide with 3 items active-->
    <div class="row" style="margin-top: 0.3%;">
        <div class="col-md-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
					<?php for($i = 0; $i < $total_count; $i++): ?>
						<?php if($i === 0): ?>
							<li data-target="#myCarousel" data-slide-to="<?= $i ?>" class="active"></li>
						<?php else: ?>
							<li data-target="#myCarousel" data-slide-to="<?= $i ?>"></li>
						<?php endif; ?>
					<?php endfor; ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
					<?php $active = 'active';
						  $count = false;
						foreach($all_article as $article): ?>
						<?php if($count === true){
								$active = '';
							} 
						?>
						<div class="item <?= $active ?>">
							<div class="col-md-offset-1 col-md-10">
								<a href="<?= Url::to(['site/news', 'id' => $article->article->id]) ?>">
									<div class="row">
										<div class="col-md-4">
											<img src="img/news/<?= $article->article->image_name ?>" class="img-responsive img-rounded" 
												alt="<?= $article->article->image_name ?>" style="width: 40%;">
										</div>
										<div class="col-md-8" style="margin-top: 3%;">
											<h4>
												<i class="fa fa-key"></i><?= $article->title ?> 
											</h4>
										</div>
									</div>
								</a>
							</div>
						</div>
					<?php 
						$count = true;
						endforeach; ?>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <!--Main content with news and author's photo-->
    <div class="row" style="margin-top: 10%;">
		<div class="col-md-8">
		<?php if(!empty($article_translation)): ?>
			<div class="col-md-12">
				<h3 class="text-center">&laquo; <?= $article_translation->title ?> &raquo;</h3>
			</div>

			<div class="row" style="margin-top: 15%;">
				<div class="col-md-4 text-center">
					<center>
						<img class="img-responsive img-rounded" src="img/news/<?= $article_translation->article->image_name ?>" 
								alt="<?= $article_translation->article->image_name ?>" style="width: 80%;"/>
					</center>
				</div>
				
				<?php if(Yii::$app->user->isGuest): ?>
				<div class="col-md-8" style="overflow: hidden;">
					<div style="height: 50px;">
						<p id="newsText">
							<?= $article_translation->html_description ?>
						</p>
					</div>
				</div>

				<div class="col-md-12 img-rounded" style="background-color: whitesmoke;margin-top: 5%;">
					<h4 class="text-center">
						<?= \Yii::t('app', 'All news after') ?>
						<?= Html::a(\Yii::t('app', 'Register'), ['user/registration/register']); ?>
					</h4>
				</div>
				<?php else: ?>
				<div class="col-md-8">
					<p>
						<?= $article_translation->html_description ?>
					</p>
				</div>
				<?php endif; ?>
			</div>
		<?php else: ?>
			<div class="col-md-12">
				<?= Alert::widget([
                        'options' => ['class' => 'alert-dismissible alert-danger'],
                        'body' => \Yii::t('app', 'There is no such a news!')
                    ]) 
				?>
			</div>
		<?php endif; ?>
		</div>
		
		<div class="col-md-4">
			<div class="col-md-offset-1 col-md-10 img-rounded panel">
				<div class="row">
					<div class="index-panel-heading">
						<h5 class="text-center index-panel-title"><b><?= \Yii::t('app', 'Title') ?></b></h5>
					</div>
					<div class="panel-body">
						<?= \Yii::t('app', 'Content goes here!') ?>
						<br />+993 12 94 15 11<br />+993 64 35 82 33<br />+993 64 35 84 50<br /><i>www.ttweb.org<br />info@ttweb.org</i>
					</div>
				</div>
            </div>
			
			<div class="col-md-offset-1 col-md-10 img-rounded panel">
				<div class="row">
					<div class="index-panel-heading">
						<h5 class="text-center index-panel-title"><b><?= \Yii::t('app', 'Title') ?></b></h5>
					</div>
					<div class="panel-body">
						<?= \Yii::t('app', 'Content goes here!') ?>
						<br />+993 12 94 15 11<br />+993 64 35 82 33<br />+993 64 35 84 50<br /><i>www.ttweb.org<br />info@ttweb.org</i>
					</div>
				</div>
            </div>

            <div class="col-md-offset-1 col-md-10" style="margin-top: 3%;">
				<div class="row">
					<div class="col-md-12 thumbnail text-center">
						<img class="img-responsive img-rounded" 
							 src="img/06.jpg" 
							 alt="photoSport" style="width: 100%;">

						<div class="caption img-rounded">
							<h4><?= \Yii::t('app', 'Asian Olimpic Games') ?></h4>
						</div>
					</div>
				</div>
            </div>
		</div>
    </div>
    <hr>
</div> 