<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShowCategory */

$this->title = 'Create Show Category';
$this->params['breadcrumbs'][] = ['label' => 'Show Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
