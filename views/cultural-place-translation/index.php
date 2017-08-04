<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cultural Place Translations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cultural-place-translation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cultural Place Translation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cultural_place_id',
            'language_id',
            'place_name',
            'cultural_place_description:ntext',
            'place_city',
            'place_street',
            'work_hour',
            'off_day',
            'bus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
