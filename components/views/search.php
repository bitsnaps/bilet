<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="navbar-form">
	<?php $form = ActiveForm::begin(['id' => 'search-form'],
									['role' => 'search',]); ?>
		
		<div class="input-group pull-right">
			
			<?= $form->field($model, 'search', ['inputOptions' => ['class' => 'form-control']])
																->textInput()
																->input('search', ['placeholder' => \Yii::t('app', 'Search')])
																->label(false)?>
										
			<div class="input-group-btn">
				<?= Html::submitButton('<i class="fa fa-search"></i>', ['class' => 'btn btn-default', 'name' => 'search-button']) ?>
			</div>

		</div>
		
	<?php ActiveForm::end(); ?>
</div>