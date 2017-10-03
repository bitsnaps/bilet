<?php

/*
 *author: shagy
 */
use yii\helpers\Html;

?>

<?= Yii::t('app', 'Dear '), $user ?>

<?= Yii::t('app', 'Reservation was made succesfully') ?>

<?= Yii::t('app', 'Show Name'), ': ', $order->getShowName() ?>

<?= Yii::t('app', 'Show date'), ': ', $order->getShowDate() ?>

<?= Yii::t('app', 'Show Time'), ': ', $order->getShowTime() ?>

<?= Yii::t('app', 'Seats'), ': ' ?>
	<?php 
		$seat_value = $order->getSeatValue();
		$seat_size = sizeof($seat_value);
		for($ss = 0; $ss < $seat_size; $ss++): ?>
		<?= Html::encode($seat_value[$ss]), ', '; ?>
	<?php endfor; ?>

<?= Yii::t('app', 'Your balance is: '), $order->getTotalAmount(), ' ', Yii::t('app', 'TMM') ?>

<?= Yii::t('app', 'You have 20 minute to make a payment. Otherwise your reservation will be dropped') ?>

<?= Yii::t('app', 'Thank you!') ?>
