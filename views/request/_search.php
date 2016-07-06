<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model nfedoseev\yii2\logman\models\LogmanRequestsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="logman-requests-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tag') ?>

    <?= $form->field($model, 'url') ?>

    <?= $form->field($model, 'site') ?>

    <?= $form->field($model, 'time') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'method') ?>

    <?php // echo $form->field($model, 'user_ip') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
