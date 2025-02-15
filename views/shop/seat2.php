<?php

/* @var $this yii\web\View */

use kartik\helpers\Html;
use yii\helpers\Url;
//use barcode\barcode\BarcodeGenerator as BarcodeGenerator;

$order = Yii::$app->session->get('order');

$username = $order->getName();
$cultural_place_id = $order->getCulturalPlaceId();
$cultural_place_category = $order->getCulturalPlaceCategory();
$show_id = $order->getShowId();
$show_name = $order->getShowName();
$show_time = $order->getShowTime();
$show_date = Yii::$app->formatter->asDate($order->getShowDate(), 'php:d.m.Y');
$place_name = $order->getPlaceName();
$regular_price = $order->getRegularPrice();
$vip_price = $order->getVipPrice();
$seat_id = $order->getSeatId();
$seat_row = $order->getSeatRow();
$seat_col =$order->getSeatCol();
$seat_value = $order->getSeatValue();
$seat_size = sizeof($seat_value);
$auditorium_name = $order->getAuditoriumName();

?>

<!-- main body contents starts here-->
<div class="container" style="margin-top: 2%;">
    <div class="row" style="margin-top: 10%;margin-bottom:10%;">
		<div class="col-md-12 text-center">
			<h3><b><?= \Yii::t('app', 'Your Order'); ?></b></h3>
		</div>
		
		<div class="col-md-12" style="margin-top: 3%;background-color: whitesmoke;">
			<div class="col-md-offset-2 col-md-8">
				<hr />
			</div>
			<div class="col-md-offset-2 col-md-2">
				<?= 
					'<h5><b>', \Yii::t('app', 'Place Name'), '</b></h5><br />',
					'<h5><b>', \Yii::t('app', 'Hall'), '</b></h5><br />',
					'<h5><b>', \Yii::t('app', 'Show Name'), '</b></h5><br />'; 
				?>
				<?php if($seat_size > 0): ?>
					<?= '<h5><b>', \Yii::t('app', 'Seats'), '</b></h5><br />'; ?>
				<?php endif; ?>
				<?=
					'<h5><b>', \Yii::t('app', 'Show date'), '</b></h5><br />',
					'<h5><b>', \Yii::t('app', 'Show Time'), '</b></h5><br />',
					'<h5><b>', \Yii::t('app', 'Regular price per Ticket'), '</b></h5><br />',
					'<h5><b>', \Yii::t('app', 'Vip price per Ticket'), '</b></h5><br />';
					//'<h5><b>', \Yii::t('app', 'Your Barcode'), '</b></h5><br />';
				?>
			</div>
			
			<div class="col-md-8">
				<?= 
					'<h5>: ', Html::encode($place_name), '</h5><br />',
					'<h5>: ', \Yii::t('app', 'Hall'), Html::encode($auditorium_name), '</h5><br />',
					'<h5>: ', Html::encode($show_name), '</h5><br />'; 
				?>
				<?php if($seat_size > 0): ?>
					<h5>: 
						<?php for($ss = 0; $ss < $seat_size; $ss++): ?>
							<?= Html::encode($seat_value[$ss]), ', '; ?>
						<?php endfor; ?>
					</h5><br />
				<?php endif; ?>
				<?=
					'<h5>: ', Html::encode($show_date), '</h5><br />',
					'<h5>: ', Html::encode($show_time), '</h5><br />',
					'<h5>: ', Html::encode($regular_price) .' '. \Yii::t('app', 'TMM'), '</h5><br />', 
					'<h5>: ', Html::encode($vip_price) .' '. \Yii::t('app', 'TMM'), '</h5><br />';
				?>
				<div id="showBarcode"></div><!--This element id should be passed on to options-->
			</div>
			
			<div class="col-md-offset-2 col-md-8">
				
				<hr />
				<?= 
					'<h4 class="text-center"><b>', Html::bsLabel(\Yii::t('app', 'Your total: ') .''. Html::encode($order->getTotalAmount()) .' '.  \Yii::t('app', 'TMM'), Html::TYPE_INFO), '</b></h4>';
				?>
				<?= Html::a(\Yii::t('app', 'Buy'), ['shop/checkout'], ['class'=>'btn btn-default pull-right']); ?>
			</div>			
		</div>
		
		<?php /*$optionsArray = array(
							'elementId'=> 'showBarcode', /* div or canvas id*/
							//'value'=> 'wese-wewe1', /* value for EAN 13 be careful to set right values for each barcode type */
							//'type'=>'code39',/*supported types  ean8, ean13, upc, std25, int25, code11, code39, code93, code128, codabar, msi, datamatrix*/
							//);
				//echo BarcodeGenerator::widget($optionsArray); 
				
				
				
				// display directly to the browser 
				/*header('Content-Type: '.$qrCode->getContentType());
				echo $qrCode->writeString();*/
				
				// or even as data:uri url $qrCode->writeDataUri()
		?>
	</div>
</div> <!-- /container -->

