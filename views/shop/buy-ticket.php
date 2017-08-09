<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

switch($cultural_place[0]->category_id){
	case 2:
		$url_place = 'site/movie';
		$url_show_time = 'movie/about-movie';
		break;
}
?>

<!-- main body contents starts here-->
<div class="container" style="margin-top: 5%;">
    <div class="row" style="margin-top: 5%;">
        <!--Left Column *********************************************-->
        <div class="col-md-3">
            <div class="col-md-12" style="background-color: whitesmoke;
                 padding-top: 5%;padding-bottom: 15%;">
                <div class="col-md-12 img-rounded" 
                     style="background-color: white;padding-top: 5%;padding-bottom: 15%;">
                    <h4 class="text-center"><?= \Yii::t('app', 'SHOW'); ?></h4>
                    <u><a href="<?= Url::to([$url_show_time, 'id' => $cultural_place[0]->id])?>"><?= $show_translation[0]->show_name ?></a></u><br><br>
                </div>

                <a href="<?= Url::to([$url_place])?>">
                    <div class="col-md-12 text-center ticketRightCol img-rounded"><?= $cultural_place_translation[0]->place_name ?></div>
                </a>
                <a href="<?= Url::to([$url_show_time, 'id' => $cultural_place[0]->id])?>">
					<?php 
						if($show[0]->start_min === 0){
							$min = '00';
						}else{
							$min = $show[0]->start_min;
						}
					?>
                    <div class="col-md-12 text-center ticketRightCol img-rounded"><?= $show[0]->start_hour, ':', $min; ?></div>
                </a>
                <div class="col-md-12 text-center ticketRightCol img-rounded" 
                     style="background-color: black;"><?= \Yii::t('app', 'Seat'); ?></div>
					 
                <div class="col-md-12 text-center ticketRightCol img-rounded" 
                     style="background-color: black;"><?= \Yii::t('app', 'Price'); ?></div>
            </div>
        </div>
        <!--Right Column *********************************************-->
        <div class="col-md-9">
            <h3 class="text-center"><?= \Yii::t('app', 'Buy Tickets Online'); ?></h3>
            <h4 class="text-center" style="margin-top:6%;"><?= $cultural_place_translation[0]->place_name ?></h4>

            <div class="col-md-12 ticketOnline">
				<div class="col-md-12" style="margin-top: 2%;">
					<div class="col-md-3"><p><?= \Yii::t('app', 'Show name'); ?></p></div>
                    <div class="col-md-8"><p><b class="ticketTime"><?= $show_translation[0]->show_name ?></b></div>
                </div>
				<div class="col-md-12" style="margin-top: 2%;">
					<div class="col-md-3"><p><?= \Yii::t('app', 'Start Time'); ?></p></div>
                    <div class="col-md-8"><p><time class="ticketTime"><b> <?= $show[0]->start_hour, ':', $show[0]->start_min; ?></b></time></div>
                </div>
            </div>
			
            <div class="col-md-12" style="padding-top: 5%;">
                <p>
                    <?= \Yii::t('app', 'By pressing "Next" button, you are agree with user terms'); ?>
                </p>
            </div>
				<?= Html::a(\Yii::t('app', 'Next'), ['shop/seat', 
													 'id' => $show[0]->id,
													 'cultural_place_id' => $cultural_place[0]->id,
													 'cultural_place_category' => $cultural_place[0]->category_id,
													 'show_name' => $show_translation[0]->show_name, 
													 'show_time' => $show[0]->start_hour .':'. $min, 
													 'place_name' => $cultural_place_translation[0]->place_name], ['class'=>'btn btn-default pull-right']); ?>
        </div>
    </div>

    <hr>
</div> 
<!-- /END OF container ******************************************************-->