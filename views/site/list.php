<?php

/* @var $this yii\web\View */

use kartik\helpers\Html;
use yii\widgets\LinkPager;


$this->params['breadcrumbs'][] = Html::encode($title);
?>

<div class="container-fluid" style="margin-top: 5%;">
    <!-- Example row of columns -->
    <div class="row theatreInfoTitleRow">
        <div class="col-md-12 text-center">
                <h3><?= Html::encode($page_title); ?></h3>
        </div>
    </div>
    <div class="row">
        <div class='col-md-8' style="background-color: white;">
			<?php foreach ($cultural_place_translations as $cultural_place_translation): ?>
			<div class='row theatreInfoRow'>
                <div class='col-sm-4'>
                    <img class="img-responsive img-rounded" style="width: 100%;" 
                         src='img/list_img/<?= Html::encode($cultural_place_translation->culturalPlace->image_name); ?>' alt='<?= Html::encode($cultural_place_translation->culturalPlace->image_name); ?>'><!-- 200x120pixel pic's for all theatre's -->
                </div>
                <div class='col-sm-8'>
                    <h4 class='text-center text-capitalize'><b>
						<?= Html::a(Html::encode($cultural_place_translation->place_name), ['about/about', 'id' => $cultural_place_translation->culturalPlace->id]); ?>
                    </b></h4>
                    <div class="theatreInfoImg">
                        <i class="fa fa-phone"></i>
                        <a href='tel:+99312941902' class='theatreInfoText'>
                            <?= Html::encode($cultural_place_translation->culturalPlace->tel1); ?><!--$cultural_place_translation->culturalPlace->tel1-->
                        </a>
						<span class="theatreInfoText"> / </span>
						<a href='tel:+99312941902' class='theatreInfoText'>
                            <?= Html::encode($cultural_place_translation->culturalPlace->tel2); ?>
                        </a>
						<span class="theatreInfoText"><?= \Yii::t('app', 'fax'); ?></span>
						<a href='tel:+99312941902' class='theatreInfoText'>
                            <?= Html::encode($cultural_place_translation->culturalPlace->fax); ?>
                        </a><br>
                        <i class="fa fa-address-book-o"></i>
                        <a href='#' class='theatreInfoText'>
                            <?= Html::encode($cultural_place_translation->place_city), ', ',  Html::encode($cultural_place_translation->place_street); ?>
                        </a><br>
                        <i class="fa fa-clock-o"></i> 
                        <a class='theatreInfoText'>
                            <?= Html::encode($cultural_place_translation->work_hour), ', ', \Yii::t('app', 'Closed'), Html::encode($cultural_place_translation->off_day); ?>
                        </a><br>
                        <i class="fa fa-bus"></i> 
                        <a class='theatreInfoText'>
                            <?= \Yii::t('app', 'Bus routs'), Html::encode($cultural_place_translation->bus); ?>
                        </a><br>
                    </div>
                    <!-- <span class="pull-right">
                        <a href='#'>
                            <i class="fa fa-smile-o"></i>
                        </a>
                        <b class='theatreInfoText'>523</b>
                    </span> -->
                </div>
            </div>
            <hr>
			<?php endforeach;?>
			<div class="col-md-12 text-center">
			<?php 
			
				echo LinkPager::widget([
										'pagination' => $pages,
								])
			?>
			</div>
        </div>
        <div class="col-md-4">
            <div class=" col-md-12 row list_panel">
                <div class="col-md-offset-2 col-md-8">
				<?= Html::panel(
						['heading' => \Yii::t('app', 'Title'), 
						'body' => '<div class="panel-body">'. \Yii::t('app', 'Content goes here!') .'<br />+993 12 94 15 11<br />+993 64 35 82 33<br />+993 64 35 84 50<br /><i>www.ttweb.org<br />info@ttweb.org</i></div>'],
						Html::TYPE_WARNING
					);
				?> 
                
				</div>
            </div>
            <div class="col-md-12 row list_panel">
                <div class="col-md-offset-2 col-md-8">
				<?= Html::panel(
						['heading' => \Yii::t('app', 'Title'), 
						'body' => '<div class="panel-body">'. \Yii::t('app', 'Content goes here!') .'<br />+993 12 94 15 11<br />+993 64 35 82 33<br />+993 64 35 84 50<br /><i>www.ttweb.org<br />info@ttweb.org</i></div>'],
						Html::TYPE_WARNING
					);
				?> 
                
				</div>
				
				<div class="col-md-offset-2 col-md-8">
                
                    <div class="col-md-12 thumbnail" style="margin-top:2%;">
                        <img class="img-responsive img-rounded" src="img/about_img/card/DespicableMe_3.jpg" 
                                 alt="photoTheatre" style="width: 100%;">

                    </div>

                    <div class="col-md-12 thumbnail" style="margin-top:10%;">
                        <img class="img-responsive img-rounded" src="img/about_img/card/ashgabatConcert.jpg" 
                                 alt="photoTheatre" style="width: 100%;">

                    </div>
				</div>
			</div>
		</div>
    </div>
</div> <!-- /container -->