<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = \Yii::t('app', 'CHILDREN');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <!-- Example row of columns -->
    <div class="row theatreInfoTitleRow">
        <div class="col-md-12">
            <center><img class="img-responsive" src="img/sep.png" alt="">
                <h4 ><?= \Yii::t('app', 'Childrens of the city Ashgabat'); ?></h4>
                <img class="img-responsive" src="img/sep.png" alt="">
            </center>
        </div>
    </div>
    <div class="row">
        <div class='col-md-8' style="background-color: white;">
			<?php 
				$placeSize = sizeof($cultural_place);
				for($i = 0; $i < $placeSize; $i++):
			?>
            <div class='row theatreInfoRow'>
                <div class='col-sm-4'>
                    <img class="img-responsive img-rounded" style="width: 100%;" 
                         src='img/<?= $cultural_place[$i]->image_name; ?>.jpg' alt='<?= $cultural_place[$i]->image_name; ?>'><!-- 200x120pixel pic's for all theatre's -->
                </div>
                <div class='col-sm-8'>
                    <h4 class='text-center text-capitalize'>
						<?= Html::a(Html::encode($cultural_place_translation[$i]->place_name), ['children/about-children']) ?>
                    </h4>
                    <div class="theatreInfoImg">
                        <i class="fa fa-phone"></i>
                        <a href='tel:+99312941902' class='theatreInfoText'>
                            <?= $cultural_place[$i]->tel1; ?>
                        </a>
						<span class="theatreInfoText"> / </span>
						<a href='tel:+99312941902' class='theatreInfoText'>
                            <?= $cultural_place[$i]->tel2; ?>
                        </a>
						<span class="theatreInfoText"><?= \Yii::t('app', 'fax'); ?></span>
						<a href='tel:+99312941902' class='theatreInfoText'>
                            <?= $cultural_place[$i]->fax; ?>
                        </a><br>
                        <i class="fa fa-address-book-o"></i>
                        <a href='#' class='theatreInfoText'>
                            <?= $cultural_place_translation[$i]->place_city, ', ',  $cultural_place_translation[$i]->place_street; ?>
                        </a><br>
                        <i class="fa fa-clock-o"></i> 
                        <a class='theatreInfoText'>
                            <?= $cultural_place_translation[$i]->work_hour, ', ', \Yii::t('app', 'Closed'), $cultural_place_translation[$i]->off_day; ?>
                        </a><br>
                        <i class="fa fa-bus"></i> 
                        <a class='theatreInfoText'>
                            <?= \Yii::t('app', 'Bus routs'), $cultural_place_translation[$i]->bus; ?>
                        </a><br>
                    </div>
                    <span class="pull-right">
                        <a href='#'>
                            <i class="fa fa-smile-o"></i>
                        </a>
                        <b class='theatreInfoText'>523</b>
                    </span>
                </div>
            </div>
            <hr>
			<?php endfor;?>
        </div>
        <div class="col-md-4 theatreInfoRightCol">
            <div class=" col-md-12 row theatreInfoRightRow">
                <div class="col-md-offset-2 col-md-8">
                    <a href="#">
                        <div class="col-sm-12 thumbnail">
                            <img class="img-responsive img-rounded" 
                                 src="img/200x150_pic22.png" alt="photoTheatre">
                            <div class="caption img-rounded" 
                                 style="background: transparent;top: 0.3rem;padding-left: 75%;">

                                <i class="glyphicon glyphicon-eye-open">123</i>
                            </div>
                        </div>
                    </a>
                    <p class="theatreInfoText" style="background: transparent;top: 0.3rem;">
                        <b>dhdab hhbcdjh dbchbc hdcbc</b><br>
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
							<?= Html::a('<i class="fa fa-heart-o"></i>', ['site/index']) ?>
                            <b class='theatreInfoText'>523</b>
                        </span>
                    </p>
                </div>
            </div>
            <div class="col-md-12 row theatreInfoRightRow">
                <div class="col-md-offset-2 col-md-8">
                    <center><a href="listOfSketch.html"><h4>Where to go on weekends</h4></a></center>
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
                        hvcsdvc dvcsdvc hbvsdbv shdvhjsv jsvhdhjsvd hjvd jshvd havcd 
                        hvcsdvc dvcsdvc hbvsdbv shdvhjsv jsvhdhjsvd hjvd jshvd havcd 
                        hvcsdvc dvcsdvc.
                    </p>
                    <div class=" col-sm-12 row">
                        <div class="col-md-12 thumbnail text-center">
                            <img class="img-responsive img-rounded" 
                                 src="img/200x120_pic21.png" 
                                 alt="photoTheatre" style="width: 100%;">

                            <div class="caption img-rounded">
                                <h4>International festival</h4>
                            </div>
                        </div>
                    </div>

                    <div class=" col-sm-12 row">
                        <div class="col-md-12 thumbnail text-center">
                            <img class="img-responsive img-rounded" 
                                 src="img/200x120_pic21.png" 
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
</div> <!-- /container -->