<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
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
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <center>
                                <img src="img/400x100_pic1.png" 
                                     class="img-responsive img-thumbnail" alt="Pushkin" style="width: 100%;">
                            </center>
                            <div class="carousel-caption">
                                <h3>Pushkin Theatre</h3>
                                <p>here is little bit about the Theatre.</p>
                            </div>
                        </div>

                        <div class="item">
                            <center><img src="img/400x100_pic2.jpg" 
                                         class=" img-responsive img-thumbnail" alt="Magtymguly" style="width: 100%;"></center>
                            <div class="carousel-caption">
                                <h3>Magtymgyly Theatre</h3>
                                <p>here is little bit about the Theatre.</p>
                            </div>
                        </div>

                        <div class="item">
                            <center><img src="img/400x100_pic3.png" 
                                         class="img-responsive img-thumbnail" alt="Mollanepes" style="width: 100%;"></center>
                            <div class="carousel-caption">
                                <h3>Mollanepes Theatre</h3>
                                <p>here is little bit about the Theatre.</p>
                            </div>
                        </div>

                        <div class="item">
                            <center><img src="img/400x100_pic4.png" 
                                         class="img-responsive img-thumbnail" alt="Seydi" style="width: 100%;"></center>
                            <div class="carousel-caption">
                                <h3>Seydi Theatre</h3>
                                <p>here is little bit about the Theatre.</p>
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

    
		<div class="row" style="margin-top: 3%;">
			<!--FIRST ROW FIRST COLUMN **************************************************-->
			<div class="col-md-8 removePadding">
				<div class="col-md-12" style="background-color: white;">
					<h5><b>FAMOUS ONES</b>
						<span class="pull-right">
							<i class="fa fa-calendar"></i>
							<?= $today; // 2014-10-06 04-08-2017?>
						</span>
					</h5>
				</div>

				<div class=" col-sm-12">
					<!--<img alt="" class="img-responsive" src=
								 "http://www.wallpapereast.com/static/images/6801692-lovely-nature-wallpaper.jpg">-->
					<div class="col-sm-4 removePadding">
						<div class="col-sm-12 thumbnail text-center">
							<img class="img-responsive img-rounded" 
								 src="img/250x210_pic2.png" alt="photoTheatre" style="width: 100%;">

							<div class="caption img-rounded">
								<h4>International festival</h4>
							</div>
						</div>
					</div>

					<div class="col-sm-4 removePadding">
						<div class="col-sm-12 thumbnail text-center">
							<img class="img-responsive img-rounded" 
								 src="img/250x105_pic2.png" alt="photoTheatre" style="width: 100%;">

							<div class="caption img-rounded">
								<h4>International festival</h4>
							</div>
						</div>

						<div class="col-sm-12 thumbnail text-center">
							<img class="img-responsive img-rounded" 
								 src="img/250x105_pic2.png" alt="photoTheatre" style="width: 100%;">

							<div class="caption img-rounded">
								<h4>International festival</h4>
							</div>
						</div>
					</div>

					<div class="col-sm-4 removePadding">
						<div class="col-sm-12 thumbnail text-center">
							<img class="img-responsive img-rounded" 
								 src="img/250x70_pic2.png" alt="photoTheatre" style="width: 100%;">

							<div class="caption img-rounded">
								<h4>International festival</h4>
							</div>
						</div>

						<div class="col-sm-12 thumbnail text-center">
							<img class="img-responsive img-rounded" 
								 src="img/250x70_pic2.png" alt="photoTheatre" style="width: 100%;">

							<div class="caption img-rounded">
								<h4>International festival</h4>
							</div>
						</div>

						<div class="col-sm-12 thumbnail text-center">
							<img class="img-responsive img-rounded" 
								 src="img/250x70_pic2.png" alt="photoTheatre" style="width: 100%;">

							<div class="caption img-rounded">
								<h4>International festival</h4>
							</div>
						</div>
					</div>
				</div>

				<div class=" col-sm-12 removePadding">
					<div class="col-sm-12">
						<div class="col-sm-12 thumbnail text-center">
							<img class="img-responsive img-rounded" 
								 src="img/750x210_pic2.png" alt="photoTheatre" style="width: 100%;">
							<div class="caption img-rounded">
								<h4>International festival</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--FIRST ROW SECOND COLUMN *************************************************-->
			<div class="col-md-4">
				<h5 class="text-center"><b>PUBLISHERS CHOISE</b></h5>
				<div class="col-md-12">
					<img class="img-responsive img-rounded" 
						 src="img/200x120_pic21.png" alt="photoTheatre" style="width: 100%;">
					
				</div>
				<div class="col-md-12" style="margin-top: 6.6%;">
					<img class="img-responsive img-rounded" 
						 src="img/200x120_pic1.png" alt="photoTheatre" style="width: 100%;">
					
				</div>
			</div>
		</div>

		<div class="row" style="margin-top: 3%;">
			<!-- SECOND ROW COLUMN FIRST************************************************************-->
			<div class="col-md-3" style="padding-left: 0;">
				<!-- card of any show *********************************-->
						<?php 
								if(sizeof($show) > 0):	
									if($show->start_min === 0){
										$min = '00';
									}else{
										$min = $show->start_min;
									}
									
									if($show->start_hour < 10){
										$hour = '0'.$show->start_hour;
									}else{
										$hour = $show->start_hour;
									}
									
									if($show->end_hour < 10){
										$end_hour = '0'.$show->end_hour;
									}else{
										$end_hour = $show->end_hour;
									}
									
									if($show->end_min === 0){
										$end_min = '00';
									}else{
										$end_min = $show->end_min;
									}
									
									/*$da = substr($show[$s]->begin_date, 0, 10);
									$date = new DateTime($da . ' '. $hour .':'. $min. ':00');
									if ($today < $date):*/
									
										if(!Yii::$app->user->isGuest):
						?>
											<div class="col-md-12 img-rounded" style="background-color: silver;padding-bottom:2%;padding-top:2%;">
												<a href="<?= Url::to(['about/about-show', 'id' => $show->id])?>">
													<div class="col-sm-12 thumbnail text-center">
														<img class="img-responsive img-rounded" 
															 src="img/<?= Html::encode($show->image_name); ?>" alt="<?= Html::encode($show->image_name); ?>" style="width: 100%;">
														
													</div>
												</a>
												<p class="theatreInfoText">
													<b><?= Html::encode($show_translation->show_name); ?></b><br />
													<?= Html::encode($show_translation->show_description); ?>
												</p><br>
												<p class="theatreInfoText">
													<i class="fa fa-map-marker"></i>
													<?= Html::encode($show_category->category_name); ?><br>
													<i class="fa fa-calendar"></i>
													<?= Yii::$app->formatter->asDate(Html::encode($show->begin_date), 'php:d.m.Y'), ', ', $hour, ':', $min, '-', $end_hour, ':', $end_min;?>
													<span class="pull-right">
															<i class="fa fa-smile-o"></i>
														<b class='theatreInfoText'><?= Html::encode($like_count); ?></b>
													</span>
												</p>
													<?= Html::a(\Yii::t('app', 'Buy'), ['shop/buy-ticket', 'id' => $show->id], ['class'=>'btn btn-primary grid-button']); ?>
												
											</div>
											
										<?php else: ?>
										
										<div class="col-md-12 img-rounded" style="background-color: silver;padding-bottom:2%;padding-top:2%;">
											<div class="col-sm-12 thumbnail text-center">
												<img class="img-responsive img-rounded" 
														src="img/<?= Html::encode($show->image_name); ?>" alt="<?= Html::encode($show->image_name); ?>" style="width: 100%;">
														
											</div>
											<p class="theatreInfoText">
													<b><?= Html::encode($show_translation->show_name); ?></b><br />
													<?= Html::encode($show_translation->show_description); ?>
											</p><br>
											<p class="theatreInfoText">
												<i class="fa fa-map-marker"></i>
													<?= Html::encode($show_category->category_name); ?><br>
												<i class="fa fa-calendar"></i>
												<?= Yii::$app->formatter->asDate(Html::encode($show->begin_date), 'php:d.m.Y'), ', ', Html::encode($show->start_hour), ':', $min, '-', Html::encode($show->end_hour), ':', $end_min;?>
												<span class="pull-right">
													<i class="fa fa-smile-o"></i>
													<b class='theatreInfoText'><?= Html::encode($like_count); ?></b>
												</span>
											</p>
										</div>
										<?php endif; 
										endif;
										?><!--end of card-->

				<!-- Advantages -->
				<?php 
					$advantage_size = sizeof($advantage);
					if($advantage_size > 0):
				?>
					<div class="col-md-12 img-rounded" 
						 style=" margin-top: 4%;padding-top: 10%;padding-bottom: 5%;background-color: whitesmoke;">
						<h5 class="text-center"><b><?= \Yii::t('app', 'Advantages for registering to BILET.TM'); ?></b></h5>
						<!-- add to db as it is-->

						<?php for($a = 0; $a < $advantage_size; $a++): ?>
						<div class="col-md-12" style="margin-top: 2%;">
							<div class="col-md-4">
								<img class="img-responsive img-circle" 
									 src="img/<?= Html::encode($advantage[$a]->image_name); ?>" alt="photo">
							</div>
							<div class="col-md-8">
								<p class="theatreInfoText">
									<b><?= $advantage_translation[$a]->title; ?></b><br />
								</p>
								<hr />
							</div>
						</div>
						
						<?php endfor; ?>
						<!-- up to here -->
						<center>
							<i class="theatreInfoText text-center"><?= Html::a(\Yii::t('app', 'Register'), ['site/register']); ?></i>
						</center>
					</div>
				<?php endif; ?>

				<div class="col-md-12 img-rounded" style="margin-top: 4%;background-color: silver;padding-top:14%;">
						<div class="col-sm-12 thumbnail text-center" style="margin-bottom: 10%;">
							<img class="img-responsive img-rounded" 
								 src="img/200x150_pic22.png" alt="photoTheatre" style="width: 100%;">
							<div class="caption img-rounded" 
								 style="background: transparent;top: 0.3rem;">
								<p>Win certificate to sport school</p>
							</div>
							<div class="caption img-rounded" 
								 style="background: transparent;bottom: 5rem;
								 top: 5rem;background-color: black;color: white;">
								<p>sdad sdasd sadas dsd sadas dsd sadsad as</p>
							</div>
							<div class="caption img-rounded" 
								 style="background: transparent;">
								<p>More...</p>
							</div>
						</div>
				</div>

			</div>
			<!--SECOND ROW COLUMN SECOND************************************************************-->
			
			<!--exhibition ads here-->
			<div class="col-md-3">
				<?php 
					$ex_size = sizeof($exhibition);
					if($ex_size > 0): ?>
				
				<div class="col-md-12 img-rounded" 
					 style="background-color: whitesmoke;">
					<h5 class="text-center"><b><?= \Yii::t('app', 'Exhibitions'); ?></b></h5>
					
					<?php for($ex = 0; $ex < ($ex_size - 3); $ex++): ?>
					
						<div class="col-md-12">
							<div class="col-md-4">
								<img class="img-responsive img-rounded" 
									 src="img/<?= Html::encode($exhibition[$ex]->image_name); ?>" alt="<?= Html::encode($exhibition[$ex]->image_name); ?>Photo">
							</div>
							<div class="col-md-8">
								<p class="theatreInfoText">
									<b><?= Html::encode($exhibition_translation[$ex]->show_name); ?></b><br>
								</p>
								<hr />
							</div>
						</div>

					<?php endfor; ?>
					
					<center>
							<i class="theatreInfoText text-center">
								<?= Html::a(\Yii::t('app', 'Exhibitions'), ['about/about', 'id' => $exhibition[$ex]->cultural_place_id]); ?>
							</i>
					</center>
				</div>
				<?php endif; ?>

				<!-- card of any show *********************************-->
						<?php 
								if(sizeof($show) > 0):	
									if($show->start_min === 0){
										$min = '00';
									}else{
										$min = $show->start_min;
									}
									
									if($show->start_hour < 10){
										$hour = '0'.$show->start_hour;
									}else{
										$hour = $show->start_hour;
									}
									
									if($show->end_hour < 10){
										$end_hour = '0'.$show->end_hour;
									}else{
										$end_hour = $show->end_hour;
									}
									
									if($show->end_min === 0){
										$end_min = '00';
									}else{
										$end_min = $show->end_min;
									}
									
									/*$da = substr($show[$s]->begin_date, 0, 10);
									$date = new DateTime($da . ' '. $hour .':'. $min. ':00');
									if ($today < $date):*/
									
										if(!Yii::$app->user->isGuest):
						?>
											<div class="col-md-12 img-rounded" style="margin-top: 4%;background-color: silver;padding-bottom:2%;padding-top:2%;">
												<a href="<?= Url::to(['about/about-show', 'id' => $show->id])?>">
													<div class="col-sm-12 thumbnail text-center">
														<img class="img-responsive img-rounded" 
															 src="img/<?= Html::encode($show->image_name); ?>" alt="<?= Html::encode($show->image_name); ?>" style="width: 100%;">
														
													</div>
												</a>
												<p class="theatreInfoText">
													<b><?= Html::encode($show_translation->show_name); ?></b><br />
													<?= Html::encode($show_translation->show_description); ?>
												</p><br>
												<p class="theatreInfoText">
													<i class="fa fa-map-marker"></i>
													<?= Html::encode($show_category->category_name); ?><br>
													<i class="fa fa-calendar"></i>
													<?= Yii::$app->formatter->asDate(Html::encode($show->begin_date), 'php:d.m.Y'), ', ', $hour, ':', $min, '-', $end_hour, ':', $end_min;?>
													<span class="pull-right">
															<i class="fa fa-smile-o"></i>
														<b class='theatreInfoText'><?= Html::encode($like_count); ?></b>
													</span>
												</p>
													<?= Html::a(\Yii::t('app', 'Buy'), ['shop/buy-ticket', 'id' => $show->id], ['class'=>'btn btn-primary grid-button']); ?>
												
											</div>
											
										<?php else: ?>
										
										<div class="col-md-12 img-rounded" style="margin-top: 4%;background-color: silver;padding-bottom:2%;padding-top:2%;">
											<div class="col-sm-12 thumbnail text-center">
												<img class="img-responsive img-rounded" 
														src="img/<?= Html::encode($show->image_name); ?>" alt="<?= Html::encode($show->image_name); ?>" style="width: 100%;">
														
											</div>
											<p class="theatreInfoText">
													<b><?= Html::encode($show_translation->show_name); ?></b><br />
													<?= Html::encode($show_translation->show_description); ?>
											</p><br>
											<p class="theatreInfoText">
												<i class="fa fa-map-marker"></i>
													<?= Html::encode($show_category->category_name); ?><br>
												<i class="fa fa-calendar"></i>
												<?= Yii::$app->formatter->asDate(Html::encode($show->begin_date), 'php:d.m.Y'), ', ', Html::encode($show->start_hour), ':', $min, '-', Html::encode($show->end_hour), ':', $end_min;?>
												<span class="pull-right">
													<i class="fa fa-smile-o"></i>
													<b class='theatreInfoText'><?= Html::encode($like_count); ?></b>
												</span>
											</p>
										</div>
										<?php endif; 
										endif;
										?><!--end of card-->

				<!-- card of any show *********************************-->
						<?php 
								if(sizeof($show) > 0):	
									if($show->start_min === 0){
										$min = '00';
									}else{
										$min = $show->start_min;
									}
									
									if($show->start_hour < 10){
										$hour = '0'.$show->start_hour;
									}else{
										$hour = $show->start_hour;
									}
									
									if($show->end_hour < 10){
										$end_hour = '0'.$show->end_hour;
									}else{
										$end_hour = $show->end_hour;
									}
									
									if($show->end_min === 0){
										$end_min = '00';
									}else{
										$end_min = $show->end_min;
									}
									
									/*$da = substr($show[$s]->begin_date, 0, 10);
									$date = new DateTime($da . ' '. $hour .':'. $min. ':00');
									if ($today < $date):*/
									
										if(!Yii::$app->user->isGuest):
						?>
											<div class="col-md-12 img-rounded" style="margin-top: 4%;background-color: silver;padding-bottom:2%;padding-top:2%;">
												<a href="<?= Url::to(['about/about-show', 'id' => $show->id])?>">
													<div class="col-sm-12 thumbnail text-center">
														<img class="img-responsive img-rounded" 
															 src="img/<?= Html::encode($show->image_name); ?>" alt="<?= Html::encode($show->image_name); ?>" style="width: 100%;">
														
													</div>
												</a>
												<p class="theatreInfoText">
													<b><?= Html::encode($show_translation->show_name); ?></b><br />
													<?= Html::encode($show_translation->show_description); ?>
												</p><br>
												<p class="theatreInfoText">
													<i class="fa fa-map-marker"></i>
													<?= Html::encode($show_category->category_name); ?><br>
													<i class="fa fa-calendar"></i>
													<?= Yii::$app->formatter->asDate(Html::encode($show->begin_date), 'php:d.m.Y'), ', ', $hour, ':', $min, '-', $end_hour, ':', $end_min;?>
													<span class="pull-right">
															<i class="fa fa-smile-o"></i>
														<b class='theatreInfoText'><?= Html::encode($like_count); ?></b>
													</span>
												</p>
													<?= Html::a(\Yii::t('app', 'Buy'), ['shop/buy-ticket', 'id' => $show->id], ['class'=>'btn btn-primary grid-button']); ?>
												
											</div>
											
										<?php else: ?>
										
										<div class="col-md-12 img-rounded" style="margin-top: 4%;background-color: silver;padding-bottom:2%;padding-top:2%;">
											<div class="col-sm-12 thumbnail text-center">
												<img class="img-responsive img-rounded" 
														src="img/<?= Html::encode($show->image_name); ?>" alt="<?= Html::encode($show->image_name); ?>" style="width: 100%;">
														
											</div>
											<p class="theatreInfoText">
													<b><?= Html::encode($show_translation->show_name); ?></b><br />
													<?= Html::encode($show_translation->show_description); ?>
											</p><br>
											<p class="theatreInfoText">
												<i class="fa fa-map-marker"></i>
													<?= Html::encode($show_category->category_name); ?><br>
												<i class="fa fa-calendar"></i>
												<?= Yii::$app->formatter->asDate(Html::encode($show->begin_date), 'php:d.m.Y'), ', ', Html::encode($show->start_hour), ':', $min, '-', Html::encode($show->end_hour), ':', $end_min;?>
												<span class="pull-right">
													<i class="fa fa-smile-o"></i>
													<b class='theatreInfoText'><?= Html::encode($like_count); ?></b>
												</span>
											</p>
										</div>
										<?php endif; 
										endif;
										?><!--end of card-->
			</div>
			<!--SECOND ROW COLUMN THIRD*************************************************************-->
			<div class="col-md-6">
					<!-- card of any show *********************************-->
						<?php 
								if(sizeof($show) > 0):	
									if($show->start_min === 0){
										$min = '00';
									}else{
										$min = $show->start_min;
									}
									
									if($show->start_hour < 10){
										$hour = '0'.$show->start_hour;
									}else{
										$hour = $show->start_hour;
									}
									
									if($show->end_hour < 10){
										$end_hour = '0'.$show->end_hour;
									}else{
										$end_hour = $show->end_hour;
									}
									
									if($show->end_min === 0){
										$end_min = '00';
									}else{
										$end_min = $show->end_min;
									}
									
									/*$da = substr($show[$s]->begin_date, 0, 10);
									$date = new DateTime($da . ' '. $hour .':'. $min. ':00');
									if ($today < $date):*/
									
										if(!Yii::$app->user->isGuest):
						?>
											<div class="col-md-12 img-rounded" style="background-color: silver;padding-bottom:2%;padding-top:2%;">
												<a href="<?= Url::to(['about/about-show', 'id' => $show->id])?>">
													<div class="col-sm-12 thumbnail text-center">
														<img class="img-responsive img-rounded" 
															 src="img/<?= Html::encode($show->image_name); ?>" alt="<?= Html::encode($show->image_name); ?>" style="width: 100%;">
														
													</div>
												</a>
												<p class="theatreInfoText">
													<b><?= Html::encode($show_translation->show_name); ?></b><br />
													<?= Html::encode($show_translation->show_description); ?>
												</p><br>
												<p class="theatreInfoText">
													<i class="fa fa-map-marker"></i>
													<?= Html::encode($show_category->category_name); ?><br>
													<i class="fa fa-calendar"></i>
													<?= Yii::$app->formatter->asDate(Html::encode($show->begin_date), 'php:d.m.Y'), ', ', $hour, ':', $min, '-', $end_hour, ':', $end_min;?>
													<span class="pull-right">
															<i class="fa fa-smile-o"></i>
														<b class='theatreInfoText'><?= Html::encode($like_count); ?></b>
													</span>
												</p>
													<?= Html::a(\Yii::t('app', 'Buy'), ['shop/buy-ticket', 'id' => $show->id], ['class'=>'btn btn-primary grid-button']); ?>
												
											</div>
											
										<?php else: ?>
										
										<div class="col-md-12 img-rounded" style="background-color: silver;padding-bottom:2%;padding-top:2%;">
											<div class="col-sm-12 thumbnail text-center">
												<img class="img-responsive img-rounded" 
														src="img/<?= Html::encode($show->image_name); ?>" alt="<?= Html::encode($show->image_name); ?>" style="width: 100%;">
														
											</div>
											<p class="theatreInfoText">
													<b><?= Html::encode($show_translation->show_name); ?></b><br />
													<?= Html::encode($show_translation->show_description); ?>
											</p><br>
											<p class="theatreInfoText">
												<i class="fa fa-map-marker"></i>
													<?= Html::encode($show_category->category_name); ?><br>
												<i class="fa fa-calendar"></i>
												<?= Yii::$app->formatter->asDate(Html::encode($show->begin_date), 'php:d.m.Y'), ', ', Html::encode($show->start_hour), ':', $min, '-', Html::encode($show->end_hour), ':', $end_min;?>
												<span class="pull-right">
													<i class="fa fa-smile-o"></i>
													<b class='theatreInfoText'><?= Html::encode($like_count); ?></b>
												</span>
											</p>
										</div>
										<?php endif; 
										endif;
										?><!--end of card-->

				<div class="row" style="margin-top: 2%;">
					<!--SECOND ROW THIRD COLUMN - 1*********************************************************-->
					<div class="col-md-6" style="padding-left: 0;">
						<!-- card of any show *********************************-->
						<?php 
								if(sizeof($show) > 0):	
									if($show->start_min === 0){
										$min = '00';
									}else{
										$min = $show->start_min;
									}
									
									if($show->start_hour < 10){
										$hour = '0'.$show->start_hour;
									}else{
										$hour = $show->start_hour;
									}
									
									if($show->end_hour < 10){
										$end_hour = '0'.$show->end_hour;
									}else{
										$end_hour = $show->end_hour;
									}
									
									if($show->end_min === 0){
										$end_min = '00';
									}else{
										$end_min = $show->end_min;
									}
									
									/*$da = substr($show[$s]->begin_date, 0, 10);
									$date = new DateTime($da . ' '. $hour .':'. $min. ':00');
									if ($today < $date):*/
									
										if(!Yii::$app->user->isGuest):
						?>
											<div class="col-md-12 img-rounded" style="margin-top: 4%;background-color: silver;padding-bottom:2%;padding-top:2%;">
												<a href="<?= Url::to(['about/about-show', 'id' => $show->id])?>">
													<div class="col-sm-12 thumbnail text-center">
														<img class="img-responsive img-rounded" 
															 src="img/<?= Html::encode($show->image_name); ?>" alt="<?= Html::encode($show->image_name); ?>" style="width: 100%;">
														
													</div>
												</a>
												<p class="theatreInfoText">
													<b><?= Html::encode($show_translation->show_name); ?></b><br />
													<?= Html::encode($show_translation->show_description); ?>
												</p><br>
												<p class="theatreInfoText">
													<i class="fa fa-map-marker"></i>
													<?= Html::encode($show_category->category_name); ?><br>
													<i class="fa fa-calendar"></i>
													<?= Yii::$app->formatter->asDate(Html::encode($show->begin_date), 'php:d.m.Y'), ', ', $hour, ':', $min, '-', $end_hour, ':', $end_min;?>
													<span class="pull-right">
															<i class="fa fa-smile-o"></i>
														<b class='theatreInfoText'><?= Html::encode($like_count); ?></b>
													</span>
												</p>
													<?= Html::a(\Yii::t('app', 'Buy'), ['shop/buy-ticket', 'id' => $show->id], ['class'=>'btn btn-primary grid-button']); ?>
												
											</div>
											
										<?php else: ?>
										
										<div class="col-md-12 img-rounded" style="margin-top: 4%;background-color: silver;padding-bottom:2%;padding-top:2%;">
											<div class="col-sm-12 thumbnail text-center">
												<img class="img-responsive img-rounded" 
														src="img/<?= Html::encode($show->image_name); ?>" alt="<?= Html::encode($show->image_name); ?>" style="width: 100%;">
														
											</div>
											<p class="theatreInfoText">
													<b><?= Html::encode($show_translation->show_name); ?></b><br />
													<?= Html::encode($show_translation->show_description); ?>
											</p><br>
											<p class="theatreInfoText">
												<i class="fa fa-map-marker"></i>
													<?= Html::encode($show_category->category_name); ?><br>
												<i class="fa fa-calendar"></i>
												<?= Yii::$app->formatter->asDate(Html::encode($show->begin_date), 'php:d.m.Y'), ', ', Html::encode($show->start_hour), ':', $min, '-', Html::encode($show->end_hour), ':', $end_min;?>
												<span class="pull-right">
													<i class="fa fa-smile-o"></i>
													<b class='theatreInfoText'><?= Html::encode($like_count); ?></b>
												</span>
											</p>
										</div>
										<?php endif; 
										endif;
										?><!--end of card-->

						<!-- Where to go in the city ******************************-->
						<?php 
							$information_size = sizeof($information);
							if($information_size > 0):
						?>
							<div class="col-md-12 img-rounded" 
								 style="margin-top: 4%;background-color: whitesmoke;">
								<?php 
									for($i = 0; $i < $information_size; $i++):
								?>
								
									<h5 class="text-capitalize"><b><?= Html::encode($information_translation[$i]->title); ?></b></h5>
								
								<?= HtmlPurifier::process($information_translation[$i]->html_description); ?>
								<?php endfor; ?>
							</div>
						<?php endif; ?>
					</div>
					<!--SECOND ROW THIRD COLUMN - 2**********************************************************-->
					<div class="col-md-6" style="padding-right: 0;">
					
						<!-- News block is here *********************************-->
						<?php 
							$news_size = sizeof($news); 
							if($news_size > 0):
							$flag = true;
						?>
							<div class="col-md-12 img-rounded" style="margin-top:4%;background-color: whitesmoke;padding-top:3%;">
								<h5><b><?= \Yii::t('app', 'NEWS'); ?></b></h5>
								<?php 
									for($n = 0; $n < $news_size; $n++):
										if($flag):
								?>
											<img class="img-responsive img-rounded" 
													src="img/<?= Html::encode($news[$i]->image_name); ?>" alt="<?= Html::encode($news[$i]->image_name); ?>Photo" style="float: right;">
										<?php 
											$flag = false; 
											endif; 
										?> 
										<a href="<?= Url::to(['site/news', 'id' => $news[$n]->id])?>" class="theatreInfoText">
											<?= '<b>', Html::encode($news_translation[$i]->title), '</b><br />'; ?>
										</a>
										<hr />
								
								<?php endfor; ?>
							</div>
						<?php endif; ?>
						
						<!-- card of any show *********************************-->
						<?php 
								if(sizeof($show) > 0):	
									if($show->start_min === 0){
										$min = '00';
									}else{
										$min = $show->start_min;
									}
									
									if($show->start_hour < 10){
										$hour = '0'.$show->start_hour;
									}else{
										$hour = $show->start_hour;
									}
									
									if($show->end_hour < 10){
										$end_hour = '0'.$show->end_hour;
									}else{
										$end_hour = $show->end_hour;
									}
									
									if($show->end_min === 0){
										$end_min = '00';
									}else{
										$end_min = $show->end_min;
									}
									
									/*$da = substr($show[$s]->begin_date, 0, 10);
									$date = new DateTime($da . ' '. $hour .':'. $min. ':00');
									if ($today < $date):*/
									
										if(!Yii::$app->user->isGuest):
						?>
											<div class="col-md-12 img-rounded" style="margin-top: 4%;background-color: silver;padding-bottom:2%;padding-top:2%;">
												<a href="<?= Url::to(['about/about-show', 'id' => $show->id])?>">
													<div class="col-sm-12 thumbnail text-center">
														<img class="img-responsive img-rounded" 
															 src="img/<?= Html::encode($show->image_name); ?>" alt="<?= Html::encode($show->image_name); ?>" style="width: 100%;">
														
													</div>
												</a>
												<p class="theatreInfoText">
													<b><?= Html::encode($show_translation->show_name); ?></b><br />
													<?= Html::encode($show_translation->show_description); ?>
												</p><br>
												<p class="theatreInfoText">
													<i class="fa fa-map-marker"></i>
													<?= Html::encode($show_category->category_name); ?><br>
													<i class="fa fa-calendar"></i>
													<?= Yii::$app->formatter->asDate(Html::encode($show->begin_date), 'php:d.m.Y'), ', ', $hour, ':', $min, '-', $end_hour, ':', $end_min;?>
													<span class="pull-right">
															<i class="fa fa-smile-o"></i>
														<b class='theatreInfoText'><?= Html::encode($like_count); ?></b>
													</span>
												</p>
													<?= Html::a(\Yii::t('app', 'Buy'), ['shop/buy-ticket', 'id' => $show->id], ['class'=>'btn btn-primary grid-button']); ?>
												
											</div>
											
										<?php else: ?>
										
										<div class="col-md-12 img-rounded" style="margin-top: 4%;background-color: silver;padding-bottom:2%;padding-top:2%;">
											<div class="col-sm-12 thumbnail text-center">
												<img class="img-responsive img-rounded" 
														src="img/<?= Html::encode($show->image_name); ?>" alt="<?= Html::encode($show->image_name); ?>" style="width: 100%;">
														
											</div>
											<p class="theatreInfoText">
													<b><?= Html::encode($show_translation->show_name); ?></b><br />
													<?= Html::encode($show_translation->show_description); ?>
											</p><br>
											<p class="theatreInfoText">
												<i class="fa fa-map-marker"></i>
													<?= Html::encode($show_category->category_name); ?><br>
												<i class="fa fa-calendar"></i>
												<?= Yii::$app->formatter->asDate(Html::encode($show->begin_date), 'php:d.m.Y'), ', ', Html::encode($show->start_hour), ':', $min, '-', Html::encode($show->end_hour), ':', $end_min;?>
												<span class="pull-right">
													<i class="fa fa-smile-o"></i>
													<b class='theatreInfoText'><?= Html::encode($like_count); ?></b>
												</span>
											</p>
										</div>
										<?php endif; 
										endif;
										?><!--end of card-->
					</div>
				</div>
			</div>
		</div>
		<hr>

	</div><!-- /END OF container ******************************************************-->
</div>
