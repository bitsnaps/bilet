<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CulturalPlace */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cultural Places', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cultural-place-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'category_id',
            'tel1',
            'tel2',
            'tel3',
            'fax',
            'email:email',
            'image_name',
        ],
    ]) ?>

</div>
