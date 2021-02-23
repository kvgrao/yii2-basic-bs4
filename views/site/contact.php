<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */

/* @var $model app\forms\ContactForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title                   = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-contact">
	<h4><center><?= Html::encode($this->title) ?></center></h4>
</div>

<div class="row">
<?php include('card-contact-content.php'); ?>
<?php include('card-contact-form.php'); ?>
<?php include('card-contact-address.php'); ?>	
<?php include('card-contact-map.php'); ?>	
</div>
