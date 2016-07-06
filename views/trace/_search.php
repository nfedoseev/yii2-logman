<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model nfedoseev\yii2\logman\models\LogmanTracessSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="logman-traces-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'request_tag') ?>

    <?= $form->field($model, 'message') ?>

    <?= $form->field($model, 'message_full') ?>

    <?= $form->field($model, 'message_short') ?>

    <?php // echo $form->field($model, 'message_all') ?>

    <?php // echo $form->field($model, 'line') ?>

    <?php // echo $form->field($model, 'file') ?>

    <?php // echo $form->field($model, 'additional') ?>

    <?php // echo $form->field($model, 'level') ?>

    <?php // echo $form->field($model, 'category') ?>

    <?php // echo $form->field($model, 'time') ?>

    <?php // echo $form->field($model, 'traces') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
