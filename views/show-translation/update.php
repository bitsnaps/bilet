<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShowTranslation */

$this->title = 'Update Show Translation: ' . $model->show_id;
$this->params['breadcrumbs'][] = ['label' => 'Show Translations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->show_id, 'url' => ['view', 'show_id' => $model->show_id, 'language_id' => $model->language_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="show-translation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
