<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Show Translations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-translation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Show Translation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'show_id',
            'language_id',
            'show_name',
            'show_description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
