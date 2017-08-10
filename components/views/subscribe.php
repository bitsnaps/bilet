<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div class="footerSignUp">		
    <div class="parallax">
        <div class="parallax-pattern-overlay">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                        <h5 class="display-2"><?= \Yii::t('app', 'SIGN UP FOR NEWS'); ?></h5>
                        <h6 class="learn">
                                    <?= \Yii::t('app', 'to get more info about news and acivities in the city, just type your e-mail at the bottom'); ?>
                        </h6>
                        <br>
						<fieldset class="form-group">
							<?php $form = ActiveForm::begin(['id' => 'subscribe-form']); ?>

								<div class="input-group">
								
									<?= $form->field($model, 'email', ['inputOptions' => ['class' => 'form-control']])
															->textInput()
															->input('email', ['placeholder' => "email@mail.ru"])
															->label(false)?>
									
									<div class="input-group-btn">
										<?= Html::submitButton('<i class="fa fa-search"></i>', ['class' => 'btn btn-default', 'name' => 'subscribe-button']) ?>
									</div>
								
								</div> 
								
								<?= $form->field($model, 'agree')->checkbox([
														'template' => "<div class=\"col-md-offset-3 col-md-6 white\">{input} <br />{label}</div>\n<div class=\"col-md-8\">{error}</div>",
													])->label(\Yii::t('app', 'I agree with all terms and condition')) ?>

							<?php ActiveForm::end(); ?>
						</fieldset>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>