<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;

use yii\bootstrap\Modal;
use kartik\form\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Screening */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="screening-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'auditorium_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'show_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'screening_start')->textInput() ?>
	
	<?= $form->field($model, 'screening_start')->widget(DatePicker::classname(), [
																			'options' => ['placeholder' => \Yii::t('app', 'yyyy-mm-dd')],
																			'pluginOptions' => [
																						'autoclose'=>false,
																						'format' => 'yyyy-mm-dd'
																			]
													]);
	?>

    <?= $form->field($model, 'start_hour')->textInput() ?>

    <?= $form->field($model, 'start_min')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
