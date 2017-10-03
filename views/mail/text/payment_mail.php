<?php

/*
 *author: shagy
 */

 use yii\helpers\Html;
?>

<?= Yii::t('app', 'Dear '), $order_model->getName() ?>

<?= Yii::t('app', 'Your Order Id: '), $order->id ?>

<?= Yii::t('app', 'Show Name'), ': ', $order_model->getShowName() ?>

<?= Yii::t('app', 'Show date'), ': ', $order_model->getShowDate() ?>

<?= Yii::t('app', 'Show Time'), ': ', $order_model->getShowTime() ?>

<?= Yii::t('app', 'Seats'), ': '?>
	<?php 
	$seat = $order_model->getSeatValue();
	for($ss = 0; $ss < $order->ticket_count; $ss++): ?>
		<?= Html::encode($seat[$ss]), ', '; ?>
	<?php endfor; ?>

<?= Yii::t('app', 'Purchase Date: '), $order->date_created ?>

<?= Yii::t('app', 'Confirmation number: '), $order->confirmation_number ?>

<?= Yii::t('app', 'Total Amount: '), $order->amount ?>