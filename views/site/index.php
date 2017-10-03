<?php
use kartik\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = \Yii::t('app', 'BiletTM');
$today = Yii::$app->formatter->asDate('now', 'php:d-m-Y');
?>
<div class="site-index">

                <!--CAROUSEL ************************************************************-->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <center>
                                <img src="img/index_banner/400x100_pic5.jpg" 
                                     class="img-responsive img-thumbnail" alt="Pushkin" style="width: 100%;">
                            </center>
                            <div class="carousel-caption">
                                <h3>...</h3>
                                <p>...</p>
                            </div>
                        </div>

                        <div class="item">
                            <center><img src="img/index_banner/400x100_pic1.jpg" 
                                         class=" img-responsive img-thumbnail" alt="Magtymguly" style="width: 100%;"></center>
                            <div class="carousel-caption">
                                <h3>...</h3>
                                <p>...</p>
                            </div>
                        </div>

                        <div class="item">
                            <center><img src="img/index_banner/400x100_pic6.jpg" 
                                         class="img-responsive img-thumbnail" alt="Mollanepes" style="width: 100%;"></center>
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
     
	
	<!-- Main content starts here -->
    <div class="body-content">

    
		<div class="row">
			<!--FIRST ROW FIRST COLUMN **************************************************-->
			<div class="col-md-8">
				<div class="col-md-12 img-rounded panel">
					<div class="row">
						<div class="index-panel-heading">
							<h3 class="index-panel-title"><b><?= \Yii::t('app', 'FAMOUS ONES'); ?></b>
								<span class="pull-right">
									<i class="fa fa-calendar"></i>
									<?= $today; // 2014-10-06 04-08-2017?>
								</span>
							</h3>
						</div>
						<div class="panel-body" id="index_famous">
							<div class="row">
								<img class="img-responsive" src="img/famous/400x100_pic7.jpg" alt="photoTheatre" style="width: 100%;">
							</div>
							<div class="row">
								<img class="img-responsive" src="img/famous/03.jpg" alt="photoTheatre" style="width: 100%;">
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!--FIRST ROW SECOND COLUMN *************************************************-->
			<div class="col-md-4" style="margin-top: 1%;">
				<div class="col-md-12 img-rounded panel" id="index_publisher">
					<div class="row">
						<div class="index-panel-heading">
							<h5 class="text-center index-panel-title"><b><?= \Yii::t('app', 'PUBLISHERS CHOISE') ?></b></h5>
						</div>
						<div class="panel-body">
							<div class="row">
								<img class="img-responsive" src="img/publisher/07.jpg" alt="photoTheatre" style="width: 100%;">
							</div>
							<div class="row">
								<img class="img-responsive" src="img/publisher/09.jpg" alt="photoTheatre" style="width: 100%;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row" style="margin-top: 3%;padding-left: 1.3%;">
			<!-- SECOND ROW COLUMN FIRST************************************************************-->
			<div class="col-md-3" id="first_column">
				<!-- card of any show *********************************-->
						<?php 
								if(sizeof($show) > 0):	
									if($show[0]->start_min === 0){
										$min = '00';
									}else{
										$min = $show[0]->start_min;
									}
									
									if($show[0]->start_hour < 10){
										$hour = '0'.$show[0]->start_hour;
									}else{
										$hour = $show[0]->start_hour;
									}
									
									if($show[0]->end_hour < 10){
										$end_hour = '0'.$show[0]->end_hour;
									}else{
										$end_hour = $show[0]->end_hour;
									}
									
									if($show[0]->end_min === 0){
										$end_min = '00';
									}else{
										$end_min = $show[0]->end_min;
									}
									
									/*$da = substr($show[$s]->begin_date, 0, 10);
									$date = new DateTime($da . ' '. $hour .':'. $min. ':00');
									if ($today < $date):*/
									
										if(!Yii::$app->user->isGuest):
						?>
											<div class="col-md-12 img-rounded panel cards">
												<div class="row">
												<a href="<?= Url::to(['about/about-show', 'id' => $show[0]->id])?>">
													<div class="col-md-12 thumbnail text-center">
														<img class="img-responsive img-rounded" 
															 src="img/about_img/card/<?= Html::encode($show[0]->image_name); ?>" alt="<?= Html::encode($show[0]->image_name); ?>" style="width: 100%;">
														
													</div>
												</a>
												<div style="padding-left: 2%;padding-right: 2%;padding-bottom: 2%;">
												<h4 style="color: #77295b;"><?= Html::encode($show_translation[0]->show_name); ?></h4>
												<p class="theatreInfoText">
													<?= Html::encode($show_translation[0]->show_description); ?>
												</p><br>
												<p class="theatreInfoText">
													<i class="fa fa-map-marker"></i>
													<?= Html::encode($show_category[0]->category_name); ?><br>
													<i class="fa fa-calendar"></i>
													<?= Yii::$app->formatter->asDate(Html::encode($show[0]->begin_date), 'php:d.m.Y'), ', ', $hour, ':', $min, '-', $end_hour, ':', $end_min;?>
													<span class="pull-right">
															<i class="fa fa-smile-o"></i>
														<b class='theatreInfoText'><?= Html::encode($like_count[0]); ?></b>
													</span>
												</p>
													<?= Html::a(\Yii::t('app', 'Buy'), ['shop/buy-ticket', 'id' => $show[0]->id], ['class'=>'btn btn-info grid-button', 'id' => 'btnSuccess']); ?>
												</div>
												</div>
											</div>
											
										<?php else: ?>
										
										<div class="col-md-12 img-rounded panel cards">
											<div class="row">
											<div class="col-md-12 thumbnail text-center">
												<img class="img-responsive img-rounded" 
														src="img/about_img/card/<?= Html::encode($show[0]->image_name); ?>" alt="<?= Html::encode($show[0]->image_name); ?>" style="width: 100%;">
														
											</div>
											<div style="padding-left: 2%;padding-right: 2%;padding-bottom: 2%;">
											<h4 style="color: #77295b;"><?= Html::encode($show_translation[0]->show_name); ?></h4>
											<p class="theatreInfoText">
													<?= Html::encode($show_translation[0]->show_description); ?>
											</p><br>
											<p class="theatreInfoText">
												<i class="fa fa-map-marker"></i>
													<?= Html::encode($show_category[0]->category_name); ?><br>
												<i class="fa fa-calendar"></i>
												<?= Yii::$app->formatter->asDate(Html::encode($show[0]->begin_date), 'php:d.m.Y'), ', ', Html::encode($show[0]->start_hour), ':', $min, '-', Html::encode($show[0]->end_hour), ':', $end_min;?>
												<span class="pull-right">
													<i class="fa fa-smile-o"></i>
													<b class='theatreInfoText'><?= Html::encode($like_count[0]); ?></b>
												</span>
											</p>
											</div>
											</div>
										</div>
										<?php endif; 
										endif;
										?><!--end of card-->

				<!-- Advantages -->
				<?php 
					$advantage_size = sizeof($advantage);
					if($advantage_size > 0):
				?>
					<div class="col-md-12 img-rounded panel" style="background: rgba(255, 255, 0, 0.44);">
						<div class="row">
						<div class="index-panel-heading">
							<h5 class="text-center index-panel-title"><b><?= \Yii::t('app', 'Advantages for registering to BILETTM.COM'); ?></b></h5>
						</div>
						<!-- add to db as it is-->

						<?php for($a = 0; $a < $advantage_size; $a++): ?>
						<div class="col-md-12" style="margin-top: 2%;">
							<div class="col-md-4">
								<img class="img-responsive img-circle" 
									 src="img/<?= Html::encode($advantage[$a]->image_name); ?>" alt="photo" style="width: 80%;">
							</div>
							<div class="col-md-8">
								<p class="advantageText">
									<b><?= $advantage_translation[$a]->title; ?></b><br />
								</p>
							</div>
						</div>
						<?php if($a !== ($advantage_size - 1)): ?>
						<div class="row"><div class="col-md-offset-2 col-md-8"><hr style="border-color: #af6799;" /></div></div>
						<?php endif; ?>
						
						<?php endfor; ?>
						<!-- up to here -->
						<?php if(Yii::$app->user->isGuest): ?>
						<center> <!--style="color: #964c80;"-->
							<i class="theatreInfoText text-center">
								<?= Html::a(
												\Yii::t('app', 'Register'), 
												['user/registration/register'], 
												['style' => 'color: #77295b;']
											); 
								?>
							</i>
						</center>
						<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>

				<div class="col-md-12 img-rounded panel">
					<div class="row">
					<div class="index-panel-heading">
							<h5 class="text-center index-panel-title"><b><?= \Yii::t('app', 'V Asian Games 2017'); ?></b></h5>
					</div>
						
						<div class="col-md-12 thumbnail text-center">
							<img class="img-responsive img-rounded" 
								 src="img/06.jpg" alt="photoTheatre" style="width: 100%;">
							<!--<div class="caption img-rounded" 
								 style="background: transparent;top: 0.3rem;">
								<p><?= \Yii::t('app', 'Win certificate to sport school'); ?></p>
							</div>
							<div class="caption img-rounded" 
								 style="background: transparent;">
								<p><?= \Yii::t('app', 'More...'); ?></p>
							</div> -->
						</div>
					</div>
				</div>

			</div>
			<!--SECOND ROW COLUMN SECOND************************************************************-->
			
			<!--exhibition ads here-->
			<div class="col-md-3" id="second_column">
				<?php 
					$ex_size = sizeof($exhibition);
					if($ex_size > 0): ?>
				
				<div class="col-md-12 img-rounded panel" id="index_exhibition">
					<div class="row">
						<div class="index-panel-heading">
							<h5 class="text-center index-panel-title"><b><?= \Yii::t('app', 'Exhibitions'); ?></b></h5>
						</div>
						
						<?php for($ex = 0; $ex < ($ex_size - 2); $ex++): ?>
						
							<div class="col-md-12" style="margin-top:5%;margin-bottom: 2%;">
								<div class="col-md-6">
								<div class="row">
									<img class="img-responsive img-rounded" 
										 src="img/about_img/card/<?= Html::encode($exhibition[$ex]->image_name); ?>" alt="<?= Html::encode($exhibition[$ex]->image_name); ?>Photo">
								</div>
								</div>
								<div class="col-md-6">
									<p class="theatreInfoText">
										<b><?= Html::encode($exhibition_translation[$ex]->show_name); ?></b><br>
									</p>
								</div>
							</div>

						<?php endfor; ?>
						
						<center>
								<i class="theatreInfoText text-center">
									<?= Html::a(\Yii::t('app', 'exhibitions'), ['about/about', 'id' => $exhibition[$ex]->cultural_place_id], ['style' => 'color: #77295b;']); ?>
								</i>
						</center>
					</div>
				</div>
				<?php endif; ?>

				<!-- card of any show *********************************-->
						<?php 
								if(sizeof($show) > 0):	
									if($show[1]->start_min === 0){
										$min = '00';
									}else{
										$min = $show[1]->start_min;
									}
									
									if($show[1]->start_hour < 10){
										$hour = '0'.$show[1]->start_hour;
									}else{
										$hour = $show[1]->start_hour;
									}
									
									if($show[1]->end_hour < 10){
										$end_hour = '0'.$show[1]->end_hour;
									}else{
										$end_hour = $show[1]->end_hour;
									}
									
									if($show[1]->end_min === 0){
										$end_min = '00';
									}else{
										$end_min = $show[1]->end_min;
									}
									
									/*$da = substr($show[$s]->begin_date, 0, 10);
									$date = new DateTime($da . ' '. $hour .':'. $min. ':00');
									if ($today < $date):*/
									
										if(!Yii::$app->user->isGuest):
						?>
											<div class="col-md-12 img-rounded panel cards">
												<div class="row">
												<a href="<?= Url::to(['about/about-show', 'id' => $show[1]->id])?>">
													<div class="col-md-12 thumbnail text-center">
														<img class="img-responsive img-rounded" 
															 src="img/about_img/card/<?= Html::encode($show[1]->image_name); ?>" alt="<?= Html::encode($show[1]->image_name); ?>" style="width: 100%;">
														
													</div>
												</a>
												<div style="padding-left: 2%;padding-right: 2%;padding-bottom: 2%;">
												<h4 style="color: #77295b;"><?= Html::encode($show_translation[1]->show_name); ?></h4>
												<p class="theatreInfoText">
													<?= Html::encode($show_translation[1]->show_description); ?>
												</p><br>
												<p class="theatreInfoText">
													<i class="fa fa-map-marker"></i>
													<?= Html::encode($show_category[1]->category_name); ?><br>
													<i class="fa fa-calendar"></i>
													<?= Yii::$app->formatter->asDate(Html::encode($show[1]->begin_date), 'php:d.m.Y'), ', ', $hour, ':', $min, '-', $end_hour, ':', $end_min;?>
													<span class="pull-right">
															<i class="fa fa-smile-o"></i>
														<b class='theatreInfoText'><?= Html::encode($like_count[1]); ?></b>
													</span>
												</p>
													<?= Html::a(\Yii::t('app', 'Buy'), ['shop/buy-ticket', 'id' => $show[1]->id], ['class'=>'btn btn-info grid-button', 'id' => 'btnSuccess']); ?>
												</div>
												</div>
											</div>
											
										<?php else: ?>
										
										<div class="col-md-12 img-rounded panel cards">
											<div class="row">
											<div class="col-md-12 thumbnail text-center">
												<img class="img-responsive img-rounded" 
														src="img/about_img/card/<?= Html::encode($show[1]->image_name); ?>" alt="<?= Html::encode($show[1]->image_name); ?>" style="width: 100%;">
														
											</div>
											<div style="padding-left: 2%;padding-right: 2%;padding-bottom: 2%;">
											<h4 style="color: #77295b;"><?= Html::encode($show_translation[1]->show_name); ?></h4>
											<p class="theatreInfoText">
													<?= Html::encode($show_translation[1]->show_description); ?>
											</p><br>
											<p class="theatreInfoText">
												<i class="fa fa-map-marker"></i>
													<?= Html::encode($show_category[1]->category_name); ?><br>
												<i class="fa fa-calendar"></i>
												<?= Yii::$app->formatter->asDate(Html::encode($show[1]->begin_date), 'php:d.m.Y'), ', ', Html::encode($show[1]->start_hour), ':', $min, '-', Html::encode($show[1]->end_hour), ':', $end_min;?>
												<span class="pull-right">
													<i class="fa fa-smile-o"></i>
													<b class='theatreInfoText'><?= Html::encode($like_count[1]); ?></b>
												</span>
											</p>
											</div>
											</div>
										</div>
										<?php endif; 
										endif;
										?><!--end of card-->

				<!-- card of any show *********************************-->
						<?php 
								if(sizeof($show) > 0):	
									if($show[2]->start_min === 0){
										$min = '00';
									}else{
										$min = $show[2]->start_min;
									}
									
									if($show[2]->start_hour < 10){
										$hour = '0'.$show[2]->start_hour;
									}else{
										$hour = $show[2]->start_hour;
									}
									
									if($show[2]->end_hour < 10){
										$end_hour = '0'.$show[2]->end_hour;
									}else{
										$end_hour = $show[2]->end_hour;
									}
									
									if($show[2]->end_min === 0){
										$end_min = '00';
									}else{
										$end_min = $show[2]->end_min;
									}
									
									/*$da = substr($show[$s]->begin_date, 0, 10);
									$date = new DateTime($da . ' '. $hour .':'. $min. ':00');
									if ($today < $date):*/
									
										if(!Yii::$app->user->isGuest):
						?>
											<div class="col-md-12 img-rounded panel cards">
												<div class="row">
												<a href="<?= Url::to(['about/about-show', 'id' => $show[2]->id])?>">
													<div class="col-md-12 thumbnail text-center">
														<img class="img-responsive img-rounded" 
															 src="img/about_img/card/<?= Html::encode($show[2]->image_name); ?>" alt="<?= Html::encode($show[2]->image_name); ?>" style="width: 100%;">
														
													</div>
												</a>
												<div style="padding-left: 2%;padding-right: 2%;padding-bottom: 2%;">
												<h4 style="color: #77295b;"><?= Html::encode($show_translation[2]->show_name); ?></h4>
												<p class="theatreInfoText">
													<?= Html::encode($show_translation[2]->show_description); ?>
												</p><br>
												<p class="theatreInfoText">
													<i class="fa fa-map-marker"></i>
													<?= Html::encode($show_category[2]->category_name); ?><br>
													<i class="fa fa-calendar"></i>
													<?= Yii::$app->formatter->asDate(Html::encode($show[2]->begin_date), 'php:d.m.Y'), ', ', $hour, ':', $min, '-', $end_hour, ':', $end_min;?>
													<span class="pull-right">
															<i class="fa fa-smile-o"></i>
														<b class='theatreInfoText'><?= Html::encode($like_count[2]); ?></b>
													</span>
												</p>
													<?= Html::a(\Yii::t('app', 'Buy'), ['shop/buy-ticket', 'id' => $show[2]->id], ['class'=>'btn btn-info grid-button', 'id' => 'btnSuccess']); ?>
												</div>
												</div>
											</div>
											
										<?php else: ?>
										
										<div class="col-md-12 img-rounded panel cards">
											<div class="row">
											<div class="col-md-12 thumbnail text-center">
												<img class="img-responsive img-rounded" 
														src="img/about_img/card/<?= Html::encode($show[2]->image_name); ?>" alt="<?= Html::encode($show[2]->image_name); ?>" style="width: 100%;">
														
											</div>
											<div style="padding-left: 2%;padding-right: 2%;padding-bottom: 2%;">
											<h4 style="color: #77295b;"><?= Html::encode($show_translation[2]->show_name); ?></h4>
											<p class="theatreInfoText">
													<?= Html::encode($show_translation[2]->show_description); ?>
											</p><br>
											<p class="theatreInfoText">
												<i class="fa fa-map-marker"></i>
													<?= Html::encode($show_category[2]->category_name); ?><br>
												<i class="fa fa-calendar"></i>
												<?= Yii::$app->formatter->asDate(Html::encode($show[2]->begin_date), 'php:d.m.Y'), ', ', Html::encode($show[2]->start_hour), ':', $min, '-', Html::encode($show[2]->end_hour), ':', $end_min;?>
												<span class="pull-right">
													<i class="fa fa-smile-o"></i>
													<b class='theatreInfoText'><?= Html::encode($like_count[2]); ?></b>
												</span>
											</p>
											</div>
											</div>
										</div>
										<?php endif; 
										endif;
										?><!--end of card-->
			</div>
			<!--SECOND ROW COLUMN THIRD*************************************************************-->
			<div class="col-md-6" id="third_column">
					<!-- card of any show *********************************-->
						<?php 
								if(sizeof($show) > 0):	
									if($show[3]->start_min === 0){
										$min = '00';
									}else{
										$min = $show[3]->start_min;
									}
									
									if($show[3]->start_hour < 10){
										$hour = '0'.$show[3]->start_hour;
									}else{
										$hour = $show[3]->start_hour;
									}
									
									if($show[3]->end_hour < 10){
										$end_hour = '0'.$show[3]->end_hour;
									}else{
										$end_hour = $show[3]->end_hour;
									}
									
									if($show[3]->end_min === 0){
										$end_min = '00';
									}else{
										$end_min = $show[3]->end_min;
									}
									
									/*$da = substr($show[$s]->begin_date, 0, 10);
									$date = new DateTime($da . ' '. $hour .':'. $min. ':00');
									if ($today < $date):*/
									
										if(!Yii::$app->user->isGuest):
						?>
											<div class="col-md-12 img-rounded panel cards" style="margin-top: 1.1%;">
												<div class="row">
												<a href="<?= Url::to(['about/about-show', 'id' => $show[3]->id])?>">
													<div class="col-md-12 thumbnail text-center">
														<img class="img-responsive img-rounded" 
															 src="img/about_img/card/<?= Html::encode($show[3]->image_name); ?>" alt="<?= Html::encode($show[3]->image_name); ?>" style="width: 100%;">
														
													</div>
												</a>
												<div style="padding-left: 2%;padding-right: 2%;padding-bottom: 2%;">
												<h4 style="color: #77295b;"><?= Html::encode($show_translation[3]->show_name); ?></h4>
												<p class="theatreInfoText">
													<?= Html::encode($show_translation[3]->show_description); ?>
												</p><br>
												<p class="theatreInfoText">
													<i class="fa fa-map-marker"></i>
													<?= Html::encode($show_category[3]->category_name); ?><br>
													<i class="fa fa-calendar"></i>
													<?= Yii::$app->formatter->asDate(Html::encode($show[3]->begin_date), 'php:d.m.Y'), ', ', $hour, ':', $min, '-', $end_hour, ':', $end_min;?>
													<span class="pull-right">
															<i class="fa fa-smile-o"></i>
														<b class='theatreInfoText'><?= Html::encode($like_count[3]); ?></b>
													</span>
												</p>
													<?= Html::a(\Yii::t('app', 'Buy'), ['shop/buy-ticket', 'id' => $show[3]->id], ['class'=>'btn btn-info grid-button', 'id' => 'btnSuccess']); ?>
												</div>
												</div>
											</div>
											
										<?php else: ?>
										
										<div class="col-md-12 img-rounded panel cards" style="margin-top: 1%;">
											<div class="row">
												<div class="col-md-12 thumbnail text-center">
													<img class="img-responsive img-rounded" 
															src="img/about_img/card/<?= Html::encode($show[3]->image_name); ?>" alt="<?= Html::encode($show[3]->image_name); ?>" style="width: 100%;">
															
												</div>
												<div style="padding-left: 2%;padding-right: 2%;padding-bottom: 2%;">
												<h4 style="color: #77295b;"><?= Html::encode($show_translation[3]->show_name); ?></h4>
												<p class="theatreInfoText">
														<?= Html::encode($show_translation[3]->show_description); ?>
												</p><br>
												<p class="theatreInfoText">
													<i class="fa fa-map-marker"></i>
														<?= Html::encode($show_category[3]->category_name); ?><br>
													<i class="fa fa-calendar"></i>
													<?= Yii::$app->formatter->asDate(Html::encode($show[3]->begin_date), 'php:d.m.Y'), ', ', Html::encode($show[3]->start_hour), ':', $min, '-', Html::encode($show[3]->end_hour), ':', $end_min;?>
													<span class="pull-right">
														<i class="fa fa-smile-o"></i>
														<b class='theatreInfoText'><?= Html::encode($like_count[3]); ?></b>
													</span>
												</p>
												</div>
											</div>
										</div>
										<?php endif; 
										endif;
										?><!--end of card-->

				<div class="row" style="margin-top: 2%;">
					<!--SECOND ROW THIRD COLUMN - 1*********************************************************-->
					<div class="col-md-6" style="padding-left: 0;" id="third_column_1">
						<!-- Where to go in the city ******************************-->
						<?php 
							$body = '';
							$information_size = sizeof($information);
							if($information_size > 0):
						?>
							<div class="col-md-12 img-rounded" id="index_city" style="margin-top: 4%;">
								<?php 
									for($i = 0; $i < $information_size; $i++){
										$title = $information_translation[$i]->title;
										$body .= $information_translation[$i]->html_description;
									}
								?>
								<?= Html::panel(
												['heading' => Html::encode($title), 'body' => '<div class="panel-body">'. HtmlPurifier::process($body) .'</div>'],
												Html::TYPE_WARNING
									);
								?> 
							</div>
						<?php endif; ?>
					</div>
					<!--SECOND ROW THIRD COLUMN - 2**********************************************************-->
					<div class="col-md-6" style="padding-right: 0;" id="third_column_2">
					
						<!-- News block is here *********************************-->
						<?php 
							$news_size = sizeof($news); 
							if($news_size > 0):
							$flag = true;
						?>
							<div class="col-md-12 img-rounded" id="index_news" style="margin-top: 4%;">
								<?php 
									$news_body = '';
									$flag = true;
									$hr = '<hr />';
									for($n = 0; $n < $news_size; $n++){
										if($n === ($news_size - 1)){
											$hr = '';
										}
										$news_body .= '<a href="'. Url::to(['site/news', 'id' => $news[$n]->id]). '" class="theatreInfoText">'. '<b>'. Html::encode($news_translation[$n]->title). '</b><br /></a>' .$hr;
										if($flag){
											$flag = false;
											$img = '<img class="img-responsive img-rounded" src="img/news/' .Html::encode($news[$n]->image_name). '" alt="' .Html::encode($news[$n]->image_name). 'Photo" style="float: right;">';
										}
									}
								?>
										 
								<?= Html::panel(
												['heading' => \Yii::t('app', 'NEWS'), 'body' => '<div class="panel-body">'.$img. $news_body .'</div>'],
												Html::TYPE_WARNING
									);
								?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<hr>

	</div><!-- /END OF container ******************************************************-->
</div>
