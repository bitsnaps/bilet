<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use app\models\User;

$url = ['about/about', 'id' => $cultural_place[0]->id];
switch($cultural_place[0]->category_id){
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
$this->params['breadcrumbs'][] = $this->title;

?>

<!-- main body contents starts here-->
<div class="container" style="margin-top: 2%;">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <img class="img-responsive" src="img/sep.png" alt="">
                        <h4><?= $cultural_place_translation[0]->place_name ?></h4>
                        <p><i><?= $page_title; ?></i></p>
                        <h4><?= $show_translation[0]->show_name; ?></h4>
                        <img class="img-responsive" src="img/sep.png" alt="">
                    </center>
                    <hr>
                    <div class="col-md-4">
                        <img class="img-responsive img-rounded" 
                             src="img/<?= $show[0]->image_name; ?>" alt='<?= $show_translation[0]->show_name; ?>Photo' style="width: 100%;">
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive img-rounded" 
                             src="img/<?= $show[0]->image_name; ?>" alt='<?= $show_translation[0]->show_name; ?>Photo' style="width: 100%;">
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive img-rounded" 
                             src="img/<?= $show[0]->image_name; ?>" alt='<?= $show_translation[0]->show_name; ?>Photo' style="width: 100%;">
                    </div>
                    <div class="col-md-12" style="margin-top:2%;">
						<?= User::findIdentity(Yii::$app->user->id)->username?>
						<span class="pull-right">
							<?= Html::a('<i class="fa fa-smile-o"></i>', ['about/like', 'id' => $show[0]->id]); ?>
									
							<b class='theatreInfoText'><?= $like_count ?></b>
						</span>
                        <p class="theatreInfoText" style="padding-top: 4%;">
                            <?= $show_translation[0]->show_description; ?>
                        </p>
						
						<?php if(!$expire): ?>
							<?= Html::a('<i class="glyphicon glyphicon-credit-card"> ' .\Yii::t('app', 'Buy'). '</i>', ['shop/buy-ticket', 'id' => $show[0]->id], ['class'=>'btn btn-success pull-right']); ?>
						<?php endif; ?>
						
					</div>
                </div>
            </div>
			
			<?php if(!$expire): ?>
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-6" style="margin-left: -2%;background-color: #e4b9b9;">
							<h4 class="text-center"><?= \Yii::t('app', 'Show Times') ?></h4>
						</div>
					</div>
					<div class="col-md-12" style="background-color: whitesmoke;">
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
							<h6 class="text-center" style="color: #dca7a7"><u><?= Yii::$app->formatter->asDate($all_shows[$i]->begin_date, 'php:d.m.Y'); ?></u></h6>
							<center><b><?= $all_shows[$i]->start_hour, ':', $min; ?></b></center><br>
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
					
					<b><?= $comment[$i]->name; ?></b>
                    <p class="theatreInfoText">
                        <?= $comment[$i]->comment; ?>
                    </p>
                    <p class="theatreInfoText" style="text-indent: 2%;">
                        <b><?= Yii::$app->formatter->asDate($comment[$i]->comment_date, 'php:d-m-Y'); ?></b> 
						
						<?= Html::a('<i style="padding-left: 4%;padding-right: 4%;"> ' .\Yii::t('app', 'leave a comment'). '</i>', ['about/user-comment', 'id' => $show[0]->id]); ?>
						
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
						<a href="<?= Url::to(['about/user-comment', 'id' => $show[0]->id])?>">
							<i><?= \Yii::t('app', 'leave a comment'); ?></i>
						</a>
					<?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-md-4 theatreInfoRightCol">
            <div class=" col-md-12 row theatreInfoRightRow">
                <div class="col-md-offset-2 col-md-8" style="background-color: silver;">
                    <a href="#">
                        <div class="col-sm-12 thumbnail text-center">
                            <img class="img-responsive img-rounded" 
                                 src="../img/200x150_pic22.png" alt="photoTheatre" style="width: 100%;">
                            <div class="caption img-rounded" 
                                 style="background: transparent;top: 0.3rem;padding-left: 75%;">

                                <i class="glyphicon glyphicon-eye-open">123</i>
                            </div>
                        </div>
                    </a>
                    <p class="theatreInfoText">
                        <b>dhdab hhbcdjh dbchbc hdcbc</b>
                        chdv dcv djvcsvdc dhcvsvcd dvcsgd 
                        chdv dcv djvcsvdc dhcvsvcd dvcsgd 
                        chdv dcv djvcsvdc dhcvsvcd dvcsgd 
                        chdv dcv djvcsvdc dhcvsvcd dvcsgd
                    </p><br>
                    <p class="theatreInfoText">
                        <i class="fa fa-location-arrow"></i>
                        opera and ballet<br>
                        <i class="fa fa-calendar"></i>
                        April 15, 18:00-20:00
                        <span class="pull-right">
                            <a href='#'>
                                <i class="fa fa-heart-o"></i>
                            </a>
                            <b class='theatreInfoText'>523</b>
                        </span>
                    </p>
                </div>
            </div>
            <div class="col-md-12 row theatreInfoRightRow">
                <div class="col-md-offset-2 col-md-8" style="background-color: whitesmoke;">
                    <center><h4>How to buy tickets online</h4></center>
                    <p class="theatreInfoText">
                        hbvsdbv shdvhjsv jsvhdhjsvd hjvd jshvd havcd 
                        hvcsdvc dvcsdvc hbvsdbv shdvhjsv jsvhdhjsvd hjvd jshvd havcd 
                        hvcsdvc dvcsdvc hbvsdbv shdvhjsv jsvhdhjsvd hjvd jshvd havcd 
                        hvcsdvc dvcsdvc hbvsdbv shdvhjsv jsvhdhjsvd hjvd jshvd havcd 
                        hvcsdvc dvcsdvc hbvsdbv shdvhjsv jsvhdhjsvd hjvd jshvd havcd 
                        hvcsdvc dvcsdvc.
                    </p>
                    <p class="theatreInfoText">
                        hbvsdbv shdvhjsv jsvhdhjsvd hjvd jshvd havcd 
                        hvcsdvc dvcsdvc hbvsdbv shdvhjsv jsvhdhjsvd hjvd jshvd havcd 
                        hvcsdvc dvcsdvc hbvsdbv shdvhjsv jsvhdhjsvd hjvd jshvd havcd 
                        hvcsdvc dvcsdvc hbvsdbv shdvhjsv jsvhdhjsvd hjvd jshvd havcd 
                        hvcsdvc dvcsdvc.
                    </p>
                    <p class="theatreInfoText">
                        hbvsdbv shdvhjsv jsvhdhjsvd hjvd jshvd havcd 
                        hvcsdvc dvcsdvc hbvsdbv shdvhjsv jsvhdhjsvd hjvd jshvd havcd 
                        hvcsdvc dvcsdvc hbvsdbv shdvhjsv jsvhdhjsvd hjvd jshvd havcd 
                        hvcsdvc dvcsdvc hbvsdbv shdvhjsv jsvhdhjsvd hjvd jshvd havcd 
                        hvcsdvc dvcsdvc.
                    </p>
                    <div class=" col-sm-12 row">
                        <div class="col-md-12 thumbnail text-center">
                            <img class="img-responsive img-rounded" src="../img/200x150_pic33.png" 
                                 alt="photoTheatre" style="width: 100%;">

                            <div class="caption img-rounded">
                                <h4>International festival</h4>
                            </div>
                        </div>
                    </div>

                    <div class=" col-sm-12 row">
                        <div class="col-md-12 thumbnail text-center">
                            <img class="img-responsive img-rounded" src="../img/200x150_pic44.png" 
                                 alt="photoTheatre" style="width: 100%;">

                            <div class="caption img-rounded">
                                <h4>International festival</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
	
	<?php if(!$expire): ?>
		<div class="row" style="margin-top: 3%;">
			<h5 class="text-center"><b><?= \Yii::t('app', 'How to find'); ?></b></h5>
			<div id="map-outer" class="col-md-12">
				<div id="map-container" class="col-md-7"></div>
				<div id="address" class="col-md-5">
					<address style="background-color: white;padding-top: 2%;padding-bottom: 2%;">
						<div class="theatreInfoImg">
							<i class="fa fa-phone"></i> 
							<a href='tel:<?= $cultural_place[0]->tel1; ?>' class='theatreInfoText'>
								<?= $cultural_place[0]->tel1; ?>
							</a><br>
							<i class="fa fa-address-book-o"></i>
							<a href='#' class='theatreInfoText'>
								<?= $cultural_place_translation[0]->place_city, ', ',  $cultural_place_translation[0]->place_street; ?>
							</a><br>
							<i class="fa fa-clock-o"></i> 
							<a class='theatreInfoText'>
								<?= $cultural_place_translation[0]->work_hour, ', ', \Yii::t('app', 'Closed'), $cultural_place_translation[0]->off_day; ?>
							</a><br>
							<i class="fa fa-bus"></i> 
							<a class='theatreInfoText'>
								<?= $cultural_place_translation[0]->bus; ?>
							</a><br>
						</div>
					</address>
				</div>
			</div><!-- /map-outer -->
		</div> <!-- /row -->
	<?php endif; ?>
</div> <!-- /container -->