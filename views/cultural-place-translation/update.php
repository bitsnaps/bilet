<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CulturalPlaceTranslation */

$this->title = 'Update Cultural Place Translation: ' . $model->cultural_place_id;
$this->params['breadcrumbs'][] = ['label' => 'Cultural Place Translations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cultural_place_id, 'url' => ['view', 'cultural_place_id' => $model->cultural_place_id, 'language_id' => $model->language_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cultural-place-translation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
