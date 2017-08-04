<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CulturalPlace */

$this->title = 'Create Cultural Place';
$this->params['breadcrumbs'][] = ['label' => 'Cultural Places', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cultural-place-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
