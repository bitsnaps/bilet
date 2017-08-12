<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$today = Yii::$app->formatter->asDate('now', 'php:d-m-Y');
?>
<div class="site-index">

    <div class="row" style="margin-top: 0.1%;">
            <div class="col-md-12">
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
            </div>
        </div>
	
	<!-- Main content starts here -->
    <div class="body-content">

    
		<div class="row" style="margin-top: 3%;background-color: whitesmoke;">
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

				<div class=" col-sm-12 row">
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

				<div class=" col-sm-12 row removePadding">
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
			<div class="col-md-4" style="background-color: whitesmoke;">
				<h5 class="text-center"><b>PUBLISHERS CHOISE</b></h5>
				<div class="col-md-12">
					<img class="img-responsive img-rounded" 
						 src="img/200x120_pic21.png" alt="photoTheatre" style="width: 100%;">
					<p class="theatreInfoText">
						<b>dhdab hhbcdjh dbchbc hdcbc</b>
						chdv dcv djvcsvdc dhcvsvcd 
					</p>
				</div>
				<div class="col-md-12">
					<img class="img-responsive img-rounded" 
						 src="img/200x120_pic1.png" alt="photoTheatre" style="width: 100%;">
					<p class="theatreInfoText">
						<b>dhdab hhbcdjh dbchbc hdcbc</b>
						chdv dcv djvcsvdc dhcvsvcd 
					</p>
				</div>
			</div>
		</div>

		<div class="row" style="margin-top: 3%;">
			<!-- SECOND ROW COLUMN FIRST************************************************************-->
			<div class="col-md-3" style="padding-left: 0;">
				<div class="col-md-12" style="background-color: silver;">
					<a href="#">
						<div class="col-sm-12 thumbnail text-center">
							<img class="img-responsive img-rounded" 
								 src="img/200x150_pic22.png" alt="photoTheatre" style="width: 100%;">
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
						<i class="fa fa-map-marker"></i>
						opera and ballet<br>
						<i class="fa fa-calendar"></i>
						April 15, 18:00-20:00
						<span class="pull-right">
							<a href='#'>
								<i class="fa fa-smile-o"></i>
							</a>
							<b class='theatreInfoText'>523</b>
						</span>
					</p>
				</div>

				<!-- Advantages -->
				<div class="col-md-12" 
					 style=" margin-top: 4%;padding-top: 10%;padding-bottom: 5%;background-color: whitesmoke;">
					<h5 class="text-center"><b><?= \Yii::t('app', 'Advantages for registering to BILET.TM'); ?></b></h5>
					<!-- add to db as it is-->

					<?php 
						$advantage_size = sizeof($advantage);
						for($a = 0; $a < $advantage_size; $a++):
					?>
					<div class="col-md-12">
						<div class="col-md-4">
							<img class="img-responsive img-circle" 
								 src="img/<?= $advantage[$a]->image_name; ?>" alt="photo">
						</div>
						<div class="col-md-8">
							<p class="theatreInfoText">
								<b><?= $advantage_translation[$a]->title; ?></b><br />
								<?= $advantage_translation[$a]->html_description; ?>
							</p>
						</div>
					</div>

					<?php endfor; ?>
					<!-- up to here -->
					<center>
						<i class="theatreInfoText text-center"><?= Html::a(\Yii::t('app', 'Register'), ['site/register']); ?></i>
					</center>
				</div>

				<div class="col-md-12" style="margin-top: 4%;background-color: silver;">
					<a href="#">
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
					</a>

					<center>
						<p class="theatreInfoText text-center" style="padding-top: 3%;">
							<i><?= Html::a(\Yii::t('app', 'All contests'), ['site/contests']); ?></i>
						</p>
					</center>
				</div>

				<div class="col-md-12" style="margin-top: 4%;background-color: silver;
					 padding-top: 10%;">
					<p class="theatreInfoText">
						<br><b>dhdab hhbcdjh dbchbc hdcbc</b><br>
						chdv dcv djvcsvdc dhcvsvcd dvcsgd
						chdv dcv djvcsvdc dhcvsvcd dvcsgd
						chdv dcv djvcsvdc dhcvsvcd dvcsgd
						chdv dcv djvcsvdc dhcvsvcd dvcsgd
						chdv dcv djvcsvdc dhcvsvcd dvcsgd
						dhcvsvcd dvcsgd
						chdv dcv djvcsvdc dhcvsvcd dvcsgd
						chdv dcv djvcsvdc dhcvsvcd dvcsgd
						dhcvsvcd dvcsgd
						chdv dcv djvcsvdc dhcvsvcd dvcsgd
						chdv dcv djvcsvdc dhcvsvcd dvcsgd
					</p><br>
					<p class="theatreInfoText">
						<i class="fa fa-map-marker"></i>
						opera and ballet
						<span class="pull-right">
							<a href='#'>
								<i class="glyphicon glyphicon-eye-open"></i>
							</a>
							<b class='theatreInfoText'>1523</b>
						</span><br>
						<i class="fa fa-calendar"></i>
						April 15, 18:00-20:00
						<span class="pull-right">
							<a href='#'>
								<i class="fa fa-smile-o"></i>
							</a>
							<b class='theatreInfoText'>523</b>
						</span>
					</p>
				</div>
			</div>
			<!--SECOND ROW COLUMN SECOND************************************************************-->
			<div class="col-md-3">
				<div class="col-md-12" 
					 style="background-color: whitesmoke;">
					<h5 class="text-center"><b>EXHIBITION</b></h5>
					<div class="col-md-12">
						<div class="col-md-4">
							<img class="img-responsive img-rounded" 
								 src="img/100x100_pic33.png" alt="photo">
						</div>
						<div class="col-md-8">
							<p class="theatreInfoText">
								<b>dhdab hhbcdjh dbchbc hdcbcchdv dcv </b><br>
								sadsd sadsad sdasd sdasd sdsad sadad
							</p>
						</div>
					</div>

					<div class="col-md-12">
						<div class="col-md-4">
							<img class="img-responsive img-rounded" src="" alt="photo">
						</div>
						<div class="col-md-8">
							<p class="theatreInfoText">
								<b>dhdab hhbcdjh dbchbc hdcbcchdv dcv </b><br>
								sadsd sadsad sdasd sdasd sdsad sadad
							</p>
						</div>
					</div>

					<div class="col-md-12">
						<div class="col-md-4">
							<img class="img-responsive img-rounded" src="" alt="photo">
						</div>
						<div class="col-md-8">
							<p class="theatreInfoText">
								<b>dhdab hhbcdjh dbchbc hdcbcchdv dcv </b><br>
								sadsd sadsad sdasd sdasd sdsad sadad
							</p>
						</div>
					</div>

					<div class="col-md-12">
						<div class="col-md-4">
							<img class="img-responsive img-rounded" src="" alt="photo">
						</div>
						<div class="col-md-8">
							<p class="theatreInfoText">
								<b>dhdab hhbcdjh dbchbc hdcbcchdv dcv </b><br>
								sadsd sadsad sdasd sdasd sdsad sadad
							</p>
						</div>
					</div>

					<div class="col-md-12">
						<div class="col-md-4">
							<img class="img-responsive img-rounded" src="" alt="photo">
						</div>
						<div class="col-md-8">
							<p class="theatreInfoText">
								<b>dhdab hhbcdjh dbchbc hdcbcchdv dcv </b><br>
								sadsd sadsad sdasd sdasd sdsad sadad
							</p>
						</div>
					</div>

					<div class="col-md-12">
						<div class="col-md-4">
							<img class="img-responsive img-rounded" src="" alt="photo">
						</div>
						<div class="col-md-8">
							<p class="theatreInfoText">
								<b>dhdab hhbcdjh dbchbc hdcbcchdv dcv </b><br>
								sadsd sadsad sdasd sdasd sdsad sadad
							</p>
						</div>
					</div>
					<center>
						<a href="exhibitions/exhibition.html" class="theatreInfoText">
							<i>All exhibitions</i>
						</a>
					</center>
				</div>

				<div class="col-md-12" style="margin-top: 4%;background-color: silver;">
					<a href="#">
						<div class="col-sm-12 thumbnail text-center">
							<img class="img-responsive img-rounded" 
								 src="img/200x150_pic22.png" alt="photoTheatre" style="width: 100%;">
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
						<i class="fa fa-map-marker"></i>
						opera and ballet<br>
						<i class="fa fa-calendar"></i>
						April 15, 18:00-20:00
						<span class="pull-right">
							<a href='#'>
								<i class="fa fa-smile-o"></i>
							</a>
							<b class='theatreInfoText'>523</b>
						</span>
					</p>
				</div>

				<div class="col-md-12" style="margin-top: 4%;background-color: silver;">
					<a href="#">
						<div class="col-sm-12 thumbnail text-center">
							<img class="img-responsive img-rounded" 
								 src="img/200x150_pic22.png" alt="photoTheatre" style="width: 100%;">
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
						<i class="fa fa-map-marker"></i>
						opera and ballet<br>
						<i class="fa fa-calendar"></i>
						April 15, 18:00-20:00
						<span class="pull-right">
							<a href='#'>
								<i class="fa fa-smile-o"></i>
							</a>
							<b class='theatreInfoText'>523</b>
						</span>
					</p>
				</div>
			</div>
			<!--SECOND ROW COLUMN THIRD*************************************************************-->
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12" style="background-color: silver;">
						<a href="#">
							<div class="col-sm-12 thumbnail text-center">
								<img class="img-responsive img-rounded" 
									 src="img/200x150_pic22.png" alt="photoTheatre" 
									 style="width: 100%;">
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
							<i class="fa fa-map-marker"></i>
							opera and ballet<br>
							<i class="fa fa-calendar"></i>
							April 15, 18:00-20:00
							<span class="pull-right">
								<a href='#'>
									<i class="fa fa-smile-o"></i>
								</a>
								<b class='theatreInfoText'>523</b>
							</span>
						</p>
					</div>
				</div>

				<div class="row" style="margin-top: 2%;">
					<!--SECOND ROW THIRD COLUMN - 1*********************************************************-->
					<div class="col-md-6" style="padding-left: 0;">
						<div class="col-md-12" style="background-color: silver;">
							<a href="#">
								<div class="col-sm-12 thumbnail text-center">
									<img class="img-responsive img-rounded" 
										 src="img/200x150_pic22.png" alt="photoTheatre" 
										 style="width: 100%;">
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
								<i class="fa fa-map-marker"></i>
								opera and ballet<br>
								<i class="fa fa-calendar"></i>
								April 15, 18:00-20:00
								<span class="pull-right">
									<a href='#'>
										<i class="fa fa-smile-o"></i>
									</a>
									<b class='theatreInfoText'>523</b>
								</span>
							</p>
						</div>

						<!-- Where to go in the city ******************************-->
						<div class="col-md-12" 
							 style="margin-top: 4%;background-color: whitesmoke;">
							<?php 
								$information_size = sizeof($information);
								for($i = 0; $i < $information_size; $i++):
							?>
							
								<h5 class="text-capitalize"><b><?= $information_translation[$i]->title; ?></b></h5>
							
							<?= $information_translation[$i]->html_description; ?>
							<hr />
							<?php endfor; ?>
						</div>
					</div>
					<!--SECOND ROW THIRD COLUMN - 2**********************************************************-->
					<div class="col-md-6" style="padding-right: 0;">
					
						<!-- News block is here *********************************-->
						<div class="col-md-12" style="background-color: whitesmoke;">
							<h5><b><?= \Yii::t('app', 'NEWS'); ?></b></h5>
							<img class="img-responsive img-rounded" 
								 src="img/<?= $news[0]->image_name; ?>" alt="newsPhoto" style="float: right;">
							
							<?php 
								$news_size = sizeof($news);
								for($n = 0; $n < $news_size; $n++):
							?>
								<a href="<?= Url::to(['site/news', 'id' => $news[$n]->id])?>" class="theatreInfoText">
									<?= '<b>', $news_translation[$i]->title, '</b><br />'; ?>
								</a>
								<hr />
							
							<?php endfor; ?>
						</div>
						
						<div class="col-md-12" style="margin-top: 4%;background-color: silver;">
							<a href="#">
								<div class="col-sm-12 thumbnail text-center">
									<img class="img-responsive img-rounded" 
										 src="img/200x150_pic22.png" alt="photoTheatre" style="width: 100%;">
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
								<i class="fa fa-map-marker"></i>
								opera and ballet<br>
								<i class="fa fa-calendar"></i>
								April 15, 18:00-20:00
								<span class="pull-right">
									<a href='#'>
										<i class="fa fa-smile-o"></i>
									</a>
									<b class='theatreInfoText'>523</b>
								</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>

	</div><!-- /END OF container ******************************************************-->
</div>
