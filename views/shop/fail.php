<?php
use yii\bootstrap\Alert;
/* @var $this yii\web\View */

$today = Yii::$app->formatter->asDate('now', 'php:d-m-Y');
?>
<div class="site-index">
	<div class="row">
		<div class="col-md-12 text-center">
			<?php if($response_status === 1 or $response_status === '1'): ?>
				<?= Alert::widget([
                        'options' => ['class' => 'alert-dismissible alert-danger'],
                        'body' => \Yii::t('app', 'Order with this order number was already proccessed')
                    ]) 
				?>
			<?php endif; ?>
			
			<?php if($response_status === 2 or $response_status === '2'): ?>
				<?= Alert::widget([
                        'options' => ['class' => 'alert-dismissible alert-danger'],
                        'body' => \Yii::t('app', 'Payment refused')
                    ]) 
				?>
			<?php endif; ?>
			
			<?php if($response_status === 5 or $response_status === '5'): ?>
				<?= Alert::widget([
                        'options' => ['class' => 'alert-dismissible alert-danger'],
                        'body' => \Yii::t('app', 'Permission Denied. Check with administration!')
                    ]) 
				?>
			<?php endif; ?>
			
			<?php if($response_status === 6 or $response_status === '6'): ?>
				<?= Alert::widget([
                        'options' => ['class' => 'alert-dismissible alert-danger'],
                        'body' => \Yii::t('app', 'Order Error!')
                    ]) 
				?>
			<?php endif; ?>
			
			<?php if($response_status === 7 or $response_status === '7'): ?>
				<?= Alert::widget([
                        'options' => ['class' => 'alert-dismissible alert-danger'],
                        'body' => \Yii::t('app', 'System Error!')
                    ]) 
				?>
			<?php endif; ?>
			
			<?php if($response_status === 100 or $response_status === '100'): ?>
				<?= Alert::widget([
                        'options' => ['class' => 'alert-dismissible alert-danger'],
                        'body' => \Yii::t('app', 'Unknown Error!')
                    ]) 
				?>
			<?php endif; ?>
			
			<?php if($response_status === 101 or $response_status === '101'): ?>
				<?= Alert::widget([
                        'options' => ['class' => 'alert-dismissible alert-danger'],
                        'body' => \Yii::t('app', 'Time out!')
                    ]) 
				?>
			<?php endif; ?>
			
			<?php if($response_status === null or $response_status === ''): ?>
				<?= Alert::widget([
                        'options' => ['class' => 'alert-dismissible alert-danger'],
                        'body' => \Yii::t('app', 'Unknown Error!')
                    ]) 
				?>
			<?php endif; ?>
		</div>
	</div>
</div>
