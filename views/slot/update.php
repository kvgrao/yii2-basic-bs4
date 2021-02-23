<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Slot */

$this->title = 'Update Slot: ' . $model->slot_id;
$this->params['breadcrumbs'][] = ['label' => 'Slots', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->slot_id, 'url' => ['view', 'id' => $model->slot_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="slot-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
