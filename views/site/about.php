<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
</div>

<div class="container-fluid">
<div class="row">
<?php include('about-welcome.php'); ?>
<?php include('about-expertise.php'); ?>
<?php include('about-sales.php'); ?>
<?php include('about-service.php'); ?>
</div>
</div>


