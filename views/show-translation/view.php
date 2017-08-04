<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShowTranslation */

$this->title = $model->show_id;
$this->params['breadcrumbs'][] = ['label' => 'Show Translations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-translation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'show_id' => $model->show_id, 'language_id' => $model->language_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'show_id' => $model->show_id, 'language_id' => $model->language_id], [
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
            'show_id',
            'language_id',
            'show_name',
            'show_description',
        ],
    ]) ?>

</div>
