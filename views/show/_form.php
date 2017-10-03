<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;

use yii\bootstrap\Modal;
use kartik\form\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Show */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="show-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'show_category_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cultural_place_id')->textInput(['maxlength' => true]) ?>
	
	<?= $form->field($model, 'begin_date')->widget(DatePicker::classname(), [
																			'options' => ['placeholder' => \Yii::t('app', 'yyyy-mm-dd')],
																			'pluginOptions' => [
																						'autoclose'=>false,
																						'format' => 'yyyy-mm-dd'
																			]
													]);
	?>
	
	<?= $form->field($model, 'end_date')->widget(DatePicker::classname(), [
																			'options' => ['placeholder' => \Yii::t('app', 'yyyy-mm-dd')],
																			'pluginOptions' => [
																						'autoclose'=>false,
																						'format' => 'yyyy-mm-dd'
																			]
													]);
	?>
	

    <?= $form->field($model, 'start_hour')->textInput() ?>

    <?= $form->field($model, 'start_min')->textInput() ?>

    <?= $form->field($model, 'end_hour')->textInput() ?>

    <?= $form->field($model, 'end_min')->textInput() ?>

    <?= $form->field($model, 'image_name')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'show_status')->input('number', ['min' => 0, 'max' => 1, 'placeholder' => \Yii::t('app', 'select 0 if show is free, otherwise 1')]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
