<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cultural Places';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cultural-place-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cultural Place', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_id',
            'tel1',
            'tel2',
            'tel3',
            // 'fax',
            // 'email:email',
            // 'image_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
