<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$today = Yii::$app->formatter->asDate('now', 'php:d-m-Y');
?>
<div class="site-index">
	<div class="row">
		<div class="col-md-12 text-center" style="background-color: whitesmoke;">
			<h4><?= \Yii::t('app', 'Your order did not went thru, please try it again!'); ?></h4>
			<p>
				<?php if($received_data !== null): ?>
					<?= 'Not null: ', var_dump($received_data); ?>
				<?php else: ?>
					<?= 'Null: ', var_dump($received_data); ?>
				<?php endif; ?>
			</p>
		</div>
	</div>
</div>
