<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TicketDataOptionTranslation */

$this->title = $model->ticket_option_data_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ticket Data Option Translations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('@dektrium/user/views/admin/_menu'); ?>
<div class="ticket-data-option-translation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'ticket_option_data_id' => $model->ticket_option_data_id, 'language_id' => $model->language_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'ticket_option_data_id' => $model->ticket_option_data_id, 'language_id' => $model->language_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ticket_option_data_id',
            'language_id',
            'option_value',
        ],
    ]) ?>

</div>
