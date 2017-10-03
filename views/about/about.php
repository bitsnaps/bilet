<?php

/* @var $this yii\web\View */

use kartik\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

		switch($cultural_place_translation->culturalPlace->category_id){
			case 2:
				$this->title = \Yii::t('app', 'ABOUT MOVIE');
				$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'MOVIE'), 'url' => ['site/list', 'id' => 2]];
				
				$page_title = \Yii::t('app', 'Movies');
				break;
			case 3:
				$this->title = \Yii::t('app', 'ABOUT THEATRE');
				$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'THEATRE'), 'url' => ['site/list', 'id' => 3]];
				
				$page_title = \Yii::t('app', 'Scens');
				break;
			case 4:
				$this->title = \Yii::t('app', 'ABOUT EXHIBITION');
				$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'EXHIBITION'), 'url' => ['site/list', 'id' => 4]];
				
				$page_title = \Yii::t('app', 'Exhibitions');
				break;
			case 5:
				$this->title = \Yii::t('app', 'ABOUT CONCERT');
				$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'CONCERT'), 'url' => ['site/list', 'id' => 5]];
				
				$page_title = \Yii::t('app', 'Concerts');
				break;
			case 6:
				$this->title = \Yii::t('app', 'ABOUT CHILDREN');
				$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'CHILDREN'), 'url' => ['site/list', 'id' => 6]];
				
				$page_title = \Yii::t('app', 'Children');
				break;
			case 7:
				$this->title = \Yii::t('app', 'ABOUT SPORT');
				$this->params['breadcrumbs'][] = ['label' => \Yii::t('app', 'SPORT'), 'url' => ['site/list', 'id' => 7]];
				
				$page_title = \Yii::t('app', 'Sport Activities');
				break;
		}

$this->params['breadcrumbs'][] = Html::encode($this->title);

?>

<!-- main body contents starts here-->
<div class="container-fluid" style="margin-top: 2%;">
    <div class="row">
        <div class="col-md-8">
            <div class="col-md-12 text-center" style="padding-left: 0;">
                    <h3><?= Html::encode($cultural_place_translation->place_name); ?></h3>
                <div class="col-md-12" style="margin-top: 1%;">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <center>
                                    <img src="img/about_img/banner/400x100_pic7.jpg" 
                                         class="img-thumbnail" alt="SportPhoto" style="width: 100%;">
                                </center>
                                <div class="carousel-caption">
                                    <h3>...</h3>
                                    <p>...</p>
                                </div>
                            </div>

                            <div class="item">
                                <center>
                                    <img src="img/about_img/banner/400x100_pic3.jpg" 
                                         class="img-thumbnail" alt="SportPhoto" style="width: 100%;">
                                </center>
                                <div class="carousel-caption">
                                    <h3>...</h3>
                                    <p>...</p>
                                </div>
                            </div>
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
            <div class="col-md-12" style="margin-top: 5%;padding-left: initial;">
				<div class="col-md-4">
					<?php 
						$img_url = substr($cultural_place_translation->culturalPlace->image_name, 0, strpos($cultural_place_translation->culturalPlace->image_name, '.'));
						$img_format = substr($cultural_place_translation->culturalPlace->image_name, strlen($img_url));
					?>
					<img class="img-responsive img-rounded" src="img/about_img/<?= $img_url ?>1<?= $img_format ?>" 
							alt="<?= $cultural_place_translation->culturalPlace->image_name ?>" style="width: 100%;" />
				</div>
                <div class="col-md-8"  style="background-color: white;">
                    <p class="theatreInfoText" style="text-align: justify; text-indent: 4%;">
                        <?= Html::encode($cultural_place_translation->cultural_place_description); ?>
                    </p>
                </div>
            </div>

            <div class="col-md-12" style="margin-top: 5%;padding-left: 0;">
                <div class="col-md-12" style="margin-bottom: 3%;">
                    <div class="col-md-6 img-rounded" style="background-color: #d09bbf;border: 0.05em #732d5e solid;">
                        <h4 class="text-center"><?= Html::encode($page_title); ?></h4>
                    </div>
                </div>

                <!-- here is for loop to populate movies -->
                <?php 
					date_default_timezone_set("Asia/Ashgabat");
					$today = new DateTime("now");
					//here we convert server system(php.ini -berlin time-) time to local turkmenistan time
                ?>

				<?php if(!$search): ?>
					<?php foreach($show_translations as $show_translation):
						
						if($show_translation->show->start_min === 0){
							$min = '00';
						}else{
							$min = $show_translation->show->start_min;
						}
						
						if($show_translation->show->start_hour < 10){
							$hour = '0'.$show_translation->show->start_hour;
						}else{
							$hour = $show_translation->show->start_hour;
						}
						
						$da = substr($show_translation->show->end_date, 0, 10);
						$date = new DateTime($da . ' '. $hour .':'. $min. ':00');
						
						$date_string = Yii::$app->formatter->asDate($show_translation->show->begin_date, 'php:d.m.Y');
					?>
					
					<?php if ($today < $date): ?>

					<div class="col-md-4" style="margin-bottom: 2%;">
						
						<div class="col-md-12 img-rounded panel cards">
							<div class="row">
							<?php if(!Yii::$app->user->isGuest): ?>
							
								<a href="<?= Url::to(['about/about-show', 'id' => $show_translation->show->id])?>">
									<div class="col-sm-12 thumbnail text-center">
										<img class="img-responsive img-rounded" 
												src="img/about_img/card/<?= Html::encode($show_translation->show->image_name); ?>" 
												alt="<?= Html::encode($show_translation->show->image_name); ?>" style="width: 100%;">
														
									</div>
								</a>
								<div style="padding-left: 2%;padding-right: 2%;padding-bottom: 2%;">
									<h4 style="color: #77295b;"><?= Html::encode($show_translation->show_name); ?></h4>
									<p class="theatreInfoText">
										<?= Html::encode($show_translation->show_description); ?>
									</p><br>
									<p class="theatreInfoText">
										<i class="fa fa-calendar"></i>
										<?= $date_string, ', ', $hour, ':', $min ?>
									</p>
									<?php if($show_translation->show->show_status === 1): ?>
										<?= Html::a(\Yii::t('app', 'Buy'), ['shop/buy-ticket', 'id' => $show_translation->show->id], ['class'=>'btn btn-info grid-button', 'id' => 'btnSuccess']); ?>
									<?php endif; ?>
								</div>
							
							<?php else: ?>
							
								<div class="col-sm-12 thumbnail text-center">
									<img class="img-responsive img-rounded" 
											src="img/about_img/card/<?= Html::encode($show_translation->show->image_name); ?>" 
											alt="<?= Html::encode($show_translation->show->image_name); ?>" style="width: 100%;">
														
								</div>
								<div style="padding-left: 2%;padding-right: 2%;padding-bottom: 2%;">
									<h4 style="color: #77295b;"><?= Html::encode($show_translation->show_name); ?></h4>
									<p class="theatreInfoText">
										<?= Html::encode($show_translation->show_description); ?>
									</p><br>
									<p class="theatreInfoText">
										<i class="fa fa-calendar"></i>
										<?= $date_string, ', ', $hour, ':', $min ?>
									</p>
									<?php if($show_translation->show->show_status === 1): ?>
										<a onclick="buyButton()" id="btnSuccess" class="btn btn-info grid-button"><?= \Yii::t('app', 'Buy'); ?></a>
									<?php endif; ?>
								</div>
								
							<?php endif; ?>
							
							</div>
						</div>
						
					</div>

					<?php endif; ?>
					
					<?php endforeach;?>
				<?php else: ?>
				
					<?php foreach($show_translations as $show_translation):
						
						if($show_translation->show->start_min === 0){
							$min = '00';
						}else{
							$min = $show_translation->show->start_min;
						}
						
						if($show_translation->show->start_hour < 10){
							$hour = '0'.$show_translation->show->start_hour;
						}else{
							$hour = $show_translation->show->start_hour;
						}
						
						$da = substr($show_translation->show->end_date, 0, 10);
						$date = new DateTime($da . ' '. $hour .':'. $min. ':00');
						
						$date_string = Yii::$app->formatter->asDate($show_translation->show->begin_date, 'php:d.m.Y');
					?>
					
					<?php if ($today < $date): ?>

					<div class="col-md-4" style="margin-bottom: 2%;">
						
						<div class="col-md-12 img-rounded panel cards">
							<div class="row">
							<?php if(!Yii::$app->user->isGuest): ?>
							
								<a href="<?= Url::to(['about/about-show', 'id' => $show_translation->show->id])?>">
									<div class="col-sm-12 thumbnail text-center">
										<img class="img-responsive img-rounded" 
												src="img/about_img/card/<?= Html::encode($show_translation->show->image_name); ?>" 
												alt="<?= Html::encode($show_translation->show->image_name); ?>" style="width: 100%;">
														
									</div>
								</a>
								<div style="padding-left: 2%;padding-right: 2%;padding-bottom: 2%;">
									<h4 style="color: #77295b;"><?= Html::encode($show_translation->show_name); ?></h4>
									<p class="theatreInfoText">
										<?= Html::encode($show_translation->show_description); ?>
									</p><br>
									<p class="theatreInfoText">
										<i class="fa fa-calendar"></i>
										<?= $date_string, ', ', $hour, ':', $min ?>
									</p>
									<?php if($show_translation->show->show_status === 1): ?>
										<?= Html::a(\Yii::t('app', 'Buy'), ['shop/buy-ticket', 'id' => $show_translation->show->id], ['class'=>'btn btn-info grid-button', 'id' => 'btnSuccess']); ?>
									<?php endif; ?>
								</div>
							
							<?php else: ?>
							
								<div class="col-sm-12 thumbnail text-center">
									<img class="img-responsive img-rounded" 
											src="img/about_img/card/<?= Html::encode($show_translation->show->image_name); ?>" 
											alt="<?= Html::encode($show_translation->show->image_name); ?>" style="width: 100%;">
														
								</div>
								<div style="padding-left: 2%;padding-right: 2%;padding-bottom: 2%;">
									<h4 style="color: #77295b;"><?= Html::encode($show_translation->show_name); ?></h4>
									<p class="theatreInfoText">
										<?= Html::encode($show_translation->show_description); ?>
									</p><br>
									<p class="theatreInfoText">
										<i class="fa fa-calendar"></i>
										<?= $date_string, ', ', $hour, ':', $min ?>
									</p>
									<?php if($show_translation->show->show_status === 1): ?>
										<a onclick="buyButton()" id="btnSuccess" class="btn btn-info grid-button"><?= \Yii::t('app', 'Buy'); ?></a>
									<?php endif; ?>
								</div>
								
							<?php endif; ?>
							
							</div>
						</div>
						
					</div>

					<?php else: ?>
					
					<div class="col-md-4" style="margin-bottom: 2%;">
						
						<div class="col-md-12 img-rounded panel cards">
							<div class="row">
							<?php if(!Yii::$app->user->isGuest): ?>
							
								<a href="<?= Url::to(['about/about-show', 'id' => $show_translation->show->id])?>">
									<div class="col-sm-12 thumbnail text-center">
										<img class="img-responsive img-rounded" 
												src="img/about_img/card/<?= Html::encode($show_translation->show->image_name); ?>" 
												alt="<?= Html::encode($show_translation->show->image_name); ?>" style="width: 100%;">
														
									</div>
								</a>
								<div style="padding-left: 2%;padding-right: 2%;padding-bottom: 2%;">
									<h4 style="color: #77295b;"><?= Html::encode($show_translation->show_name); ?></h4>
									<p class="theatreInfoText">
										<?= Html::encode($show_translation->show_description); ?>
									</p><br>
									<p class="theatreInfoText">
										<i class="fa fa-calendar"></i>
										<?= $date_string, ', ', $hour, ':', $min ?>
									</p>
								</div>
							
							<?php else: ?>
							
								<div class="col-sm-12 thumbnail text-center">
									<img class="img-responsive img-rounded" 
											src="img/about_img/card/<?= Html::encode($show_translation->show->image_name); ?>" 
											alt="<?= Html::encode($show_translation->show->image_name); ?>" style="width: 100%;">
														
								</div>
								<div style="padding-left: 2%;padding-right: 2%;padding-bottom: 2%;">
									<h4 style="color: #77295b;"><?= Html::encode($show_translation->show_name); ?></h4>
									<p class="theatreInfoText">
										<?= Html::encode($show_translation->show_description); ?>
									</p><br>
									<p class="theatreInfoText">
										<i class="fa fa-calendar"></i>
										<?= $date_string, ', ', $hour, ':', $min ?>
									</p>
								</div>
								
							<?php endif; ?>
							
							</div>
						</div>
						
					</div>
					<?php endif; ?>
					
					<?php endforeach;?>
				<?php endif; ?>
				
                <div class="col-sm-12" id="buyMovieInfo" style="display:none;">
                    <p><?= \Yii::t('app', 'if you want to buy or get info about tickets, JUST REGISTEEEEEEEEER!'); ?></p>
                </div>
            </div>
		</div>
        <div class="col-md-4">
            <div class="col-md-offset-1 col-md-10 img-rounded panel cards">
				<div class="row">
					<div class="index-panel-heading">
						<h5 class="text-center index-panel-title"><b><?= \Yii::t('app', 'WORLD') ?></b></h5>
					</div>
					<div class="col-md-12" style="margin-top: 8%;">
						<div class="col-md-4">
							<div class="row">
								<img class="img-responsive img-rounded" 
									 src="img/news/internationalFestival1.jpg" alt="photo">
							</div>
						</div>
						<div class="col-md-8">
							<p class="theatreInfoText" style="padding-bottom: 18%;">
								<b><?= \Yii::t('app', 'Championship i the Russia') ?></b>
							</p>
							<hr />
						</div>
					</div>
					
					<div class="col-md-12">
						<div class="col-md-4">
							<div class="row">
								<img class="img-responsive img-rounded" 
									 src="img/news/internationalFestival2.jpg" alt="photo">
							</div>
						</div>
						<div class="col-md-8">
							<p class="theatreInfoText" style="padding-bottom: 18%;">
								<b><?= \Yii::t('app', 'International festival Gold-Sacsafon') ?></b>
							</p>
							<hr />
						</div>
					</div>
					
					<div class="col-md-12">
						<div class="col-md-4">
							<div class="row">
								<img class="img-responsive img-rounded" 
									 src="img/news/internationalFestival3.jpg" alt="photo">
							</div>
						</div>
						<div class="col-md-8">
							<p class="theatreInfoText" style="padding-bottom: 18%;">
								<b><?= \Yii::t('app', 'International festival TessaFest') ?></b>
							</p>
							<hr />
						</div>
					</div>
					
					<div class="col-md-12">
						<div class="col-md-4">
							<div class="row">
								<img class="img-responsive img-rounded" 
									 src="img/news/internationalFestival4.jpg" alt="photo">
							</div>
						</div>
						<div class="col-md-8">
							<p class="theatreInfoText" style="padding-bottom: 18%;">
								<b><?= \Yii::t('app', 'Russian Festival Blue Bird') ?></b>
							</p>
						</div>
					</div>
				</div>
            </div>

			<div class="col-md-offset-1 col-md-10 img-rounded panel cards">
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
	<div class="col-md-12 text-center">
		<?php 
			
			echo LinkPager::widget([
										'pagination' => $pages,
									])
		?>
	</div>
</div> <!-- /container -->

