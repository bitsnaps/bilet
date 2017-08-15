<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$url_place = 'site/list';
$url_show_time = 'about/about';
$order = Yii::$app->session->get('order');

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
$auditorium_id = $order->getAuditoriumId();

?>

<!-- main body contents starts here-->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?= var_dump($s); ?><br />
			<?= 
				'<b>Show Name: </b>', $show_name,'<br />',
				'<b>Show Time: </b>', $show_time,'<br />',
				'<b>Show date: </b>', $show_date,'<br />',
				'<b>Place Name: </b>', $place_name,'<br />',
				'<b>Regular price per Ticket: </b>', $regular_price,'<br />',
				'<b>Vip price per Ticket: </b>',$vip_price,'<br />',
				'<b>Auditprium Id: </b>', $auditorium_id;

			?>
			
		</div>
		<div class="col-md-12">
			<?= Html::a(\Yii::t('app', 'Buy'), ['shop/buy', 'id' => $show_id], ['class'=>'btn btn-default pull-right']); ?>
		</div>
	</div>
	<hr />
<div>