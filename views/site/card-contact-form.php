<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */

/* @var $model app\forms\ContactForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

?>

<div class="col-md-3 card bg-warning">
<div class="card-header text-center"><strong>Enquiry Form</strong></div>

<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

	<div class="alert alert-success">
	Thank you for contacting us. We will respond to you as soon as possible.
	</div>

<?php else: ?>


<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

<?= $form->field($model, 'name')->textInput(['autofocus' => false]) ?>

<?= $form->field($model, 'email') ?>

<?= $form->field($model, 'subject') ?>

<?= $form->field($model, 'body')->textarea(['rows' => 1]) ?>

<?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
'template' => '<div class="row"><div class="col-md-6">{input}</div><div class="col-md-3">{image}</div></div>',
]) ?>

	<div class="form-group">
	<?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
	</div>

<?php ActiveForm::end(); ?>


<?php endif; ?>
</div>
