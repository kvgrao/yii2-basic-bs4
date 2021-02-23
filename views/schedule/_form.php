<?php
use yii\base;
use yii\helpers\VarDumper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

use yii\helpers\ArrayHelper;
use app\models\Service;
use app\models\Slot;

$baseUrl = Url::Base();

/* @var $this yii\web\View */
/* @var $model app\models\Schedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-form">

    <?php $form = ActiveForm::begin(); ?>
    
		<?php $model->member_id = 1010; ?>

    <?= $form->field($model, 'member_id')->textInput() ?>
		
		<?= $form->field($model, 'date')->widget(DatePicker::classname(), [
		'language' => 'en', 
		'type' => DatePicker::TYPE_COMPONENT_APPEND,
		'pluginOptions' => [
				'autoclose' => true,
				'format' => 'yyyy-mm-dd',
				'todayHighlight' => true, 'startDate' => '-15d', 'endDate' => '+15d', 
				'daysOfWeekDisabled' => '0', 'daysOfWeekHighlighted' => '06',
				'orientation' => 'bottom',
			],
 
			'pluginEvents' => [ 
			"change" => "function() { 
			var x = $('#schedule-date').val();
			var url = '$baseUrl/schedule/slots-available?date1='+x;
			
			$.post( url, 
			function( data ) {
          $( '#schedule-slot_id' ).html( data );
          });
			
			}"],
 
]) 

?>

<?php 

	$services=Service::find()->where(['deleted' => NULL])->all();
	$servicesData=ArrayHelper::map($services,'service_id', 'description');

	$slots=Slot::find()->select('slot_id, slot_time')->where(['deleted' => NULL])->all();
	$slotsData=ArrayHelper::map($slots,'slot_id', 'slot_time');

?>

    <?= $form->field($model, 'service_id')->dropDownList($servicesData); ?>

    <?= $form->field($model, 'slot_id')->dropDownList([]); ?>


    <?= $form->field($model, 'ipaddress')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
