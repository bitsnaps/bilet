<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ShowCategoryTranslation */

$this->title = 'Create Show Category Translation';
$this->params['breadcrumbs'][] = ['label' => 'Show Category Translations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="show-category-translation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
