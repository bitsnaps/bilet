<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SeatReserved */

$this->title = Yii::t('app', 'Update Seat Reserved: {nameAttribute}', [
    'nameAttribute' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Seat Reserveds'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<?= $this->render('@dektrium/user/views/admin/_menu'); ?>
<div class="seat-reserved-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
