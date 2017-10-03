<?php

/* @var $this yii\web\View */

//use yii\helpers\Html;
use kartik\helpers\Html;
use yii\helpers\Url;
use app\models\Client;
use kartik\rating\StarRating;

$url = ['about/about', 'id' => intval($data['cultural_place_id'])];
switch(intval($data['category_id'])){
	case 2:
		$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'MOVIE'), 'url' => ['site/list', 'id' => 2]];
		$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'ABOUT MOVIE'), 'url' => $url];
		
		$page_title = \Yii::t('app', 'Movies');
		break;
	case 3:
		$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'THEATRE'), 'url' => ['site/list', 'id' => 3]];
		$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'ABOUT THEATRE'), 'url' => $url];
		
		$page_title = \Yii::t('app', 'Scens');
		break;
	case 4:
		$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'EXHIBITION'), 'url' => ['site/list', 'id' => 4]];
		$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'ABOUT EXHIBITION'), 'url' => $url];
		
		$page_title = \Yii::t('app', 'Exibitions');
		break;
	case 5:
		$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'CONCERT'), 'url' => ['site/list', 'id' => 5]];
		$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'ABOUT CONCERT'), 'url' => $url];
		
		$page_title = \Yii::t('app', 'Concerts');
		break;
	case 6:
		$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'CHILDREN'), 'url' => ['site/list', 'id' => 6]];
		$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'ABOUT CHILDREN'), 'url' => $url];
		
		$page_title = \Yii::t('app', 'Children show');
		break;
	case 7:
		$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'SPORT'), 'url' => ['site/list', 'id' => 7]];
		$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'ABOUT SPORT'), 'url' => $url];
		
		$page_title = \Yii::t('app', 'Sport Avtivities');
		break;
}

$this->title = \Yii::t('app', 'ABOUT SHOW');
$this->params['breadcrumbs'][] = Html::encode($this->title);

date_default_timezone_set("Asia/Ashgabat");
$today = new DateTime("now");

if(intval($data['start_min']) === 0){
	$min = '00';
}else{
	$min = $data['start_min'];
}
						
if(intval($data['start_hour']) < 10){
	$hour = '0'.$data['start_hour'];
}else{
	$hour = $data['start_hour'];
}
						
$da = substr($data['begin_date'], 0, 10);
$date = new DateTime($da . ' '. $hour .':'. $min. ':00');

if($today < $date){
	//show is not expire yet
	$expire = false;
}else{
	//show is expire
	$expire = true;
}

?>

<!-- main body contents starts here-->
<div class="container" style="margin-top: 2%;">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12 text-center">
                        <h3><?= Html::encode($data['place_name']) ?></h3>
                        <p><i><?= Html::encode($page_title); ?></i></p>
                        <h4>
							<?= Html::encode($data['show_name']) ?>
						</h4>
                    <hr />
                    <div class="col-md-4">
                        <img class="img-responsive img-rounded" 
                             src="img/about_show_img/<?= Html::encode($data['image_name']) ?>" alt='<?= Html::encode($data['image_name']) ?>Photo' style="width: 100%;">
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive img-rounded" 
                             src="img/about_show_img/<?= Html::encode($data['image_name']) ?>" alt='<?= Html::encode($data['image_name']) ?>Photo' style="width: 100%;">
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive img-rounded" 
                             src="img/about_show_img/<?= Html::encode($data['image_name']) ?>" alt='<?= Html::encode($data['image_name']) ?>Photo' style="width: 100%;">
                    </div>
                    <div class="col-md-12" style="margin-top:2%;">
						<span class="pull-right">
							<?= Html::a('<i class="fa fa-smile-o"></i>', ['about/like', 'id' => intval($data['show_id'])]); ?>
									
							<b class='theatreInfoText'><?= $like_count; ?></b>
						</span>
                        <p class="theatreInfoText" style="padding-top: 4%;">
                            <?= Html::encode($data['show_description']); ?>
                        </p>
						
						<?php if(!$expire and intval($data['show_status']) === 1): ?>
							<?= Html::a('<i class="glyphicon glyphicon-credit-card"> ' .\Yii::t('app', 'Buy'). '</i>', 
										['shop/buy-ticket', 'id' => intval($data['show_id'])], ['class'=>'btn btn-success pull-right', 'id' => 'btnSuccess']); ?>
						<?php endif; ?>
						
					</div>
                </div>
            </div>
			
			<?php if(!$expire): ?>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6 img-rounded" style="margin-left: -2%;background-color: #d09bbf;border: 0.05em #732d5e solid;color: white;">
							<h4 class="text-center"><?= \Yii::t('app', 'Show Times') ?></h4>
						</div>
					</div>
					<div class="col-md-12 img-rounded" style="background-color: rgba(255, 255, 0, 0.44);border: 0.05em yellow solid;">
						<?php 
							$size = sizeof($all_shows);
							for($i = 0; $i < $size; $i++):
								if($all_shows[$i]->start_min === 0){
									$min = '00';
								}else{
									$min = $all_shows[$i]->start_min;
								}
						?>
						
						<div class="col-md-2">
							<h6 class="text-center" style="color: #d09bbf;"><u><?= Html::encode(Yii::$app->formatter->asDate($all_shows[$i]->begin_date, 'php:d.m.Y')); ?></u></h6>
							<center><b><?= Html::encode($all_shows[$i]->start_hour), ':', Html::encode($min); ?></b></center><br>
						</div>
						
						<?php endfor; ?>
					</div>
				</div>
			<?php endif; ?>
			
            <div class="row">
                <div class="col-md-12">
                    <h6 class="text-center" style="padding-top: 5%;"><b><?= \Yii::t('app', 'Feedback from customers'); ?></b></h6><br>
                    
					<!--Here we count comments and show it-->
					<?php 
						$size2 = sizeof($comment);
						for($i = 0; $i < $size2; $i++):
					?>
					
					<b><?= Html::encode($comment[$i]->name); ?></b>
                    <p class="theatreInfoText">
                        <?= Html::encode($comment[$i]->comment); ?>
                    </p>
                    <p class="theatreInfoText" style="text-indent: 2%;">
                        <b><?= Html::encode(Yii::$app->formatter->asDate($comment[$i]->comment_date, 'php:d-m-Y')); ?></b> 
						
						<?= Html::a('<i style="padding-left: 4%;padding-right: 4%;"> ' .\Yii::t('app', 'leave a comment'). '</i>', ['about/user-comment', 'id' => intval($data['show_id'])]); ?>
						
						<!--Here we count stars and show it-->
						<?php 
							$size3 = $comment[$i]->star_count;
							for($x = 0; $x < $size3; $x++):
						?>
						<i class="glyphicon glyphicon-star"></i>
                        
						<?php endfor; ?>
                    </p><br>
					
					<?php endfor; ?>
					
					<?php if($size2 === 0): ?>
						<a href="<?= Url::to(['about/user-comment', 'id' => intval($data['show_id'])]); ?>">
							<i><?= \Yii::t('app', 'leave a comment'); ?></i>
						</a>
					<?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-md-4 theatreInfoRightCol">
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
			
			<div class="col-md-offset-1 col-md-10 img-rounded panel">
				<div class="row">
					<div class="index-panel-heading">
						<h5 class="text-center index-panel-title"><b><?= \Yii::t('app', 'Title') ?></b></h5>
					</div>
					<div class="panel-body">
						<div class="col-md-12 thumbnail text-center" style="margin-top:2%;">
                            <img class="img-responsive img-rounded" src="img/news/internationalFestival4.jpg" 
                                 alt="photoTheatre" style="width: 100%;">

                            <div class="caption img-rounded">
                                <h4><?= \Yii::t('app', 'International festival') ?></h4>
                            </div>
                        </div>

                        <div class="col-md-12 thumbnail text-center" style="margin-top:10%;">
                            <img class="img-responsive img-rounded" src="img/06.jpg" 
                                 alt="photoTheatre" style="width: 100%;">

                            <div class="caption img-rounded">
                                <h4><?= \Yii::t('app', 'International festival') ?></h4>
                            </div>
                        </div>
					</div>
				</div>
            </div>
		</div>
    </div>

    <hr>
</div> <!-- /container -->