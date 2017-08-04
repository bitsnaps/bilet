<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShowTranslation */

$this->title = 'Create Show Translation';
$this->params['breadcrumbs'][] = ['label' => 'Show Translations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-translation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
