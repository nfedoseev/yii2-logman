<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model nfedoseev\yii2\logman\models\LogmanTraces */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="logman-traces-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'request_tag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'message')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'message_full')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'message_short')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'message_all')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'line')->textInput() ?>

    <?= $form->field($model, 'file')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'additional')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'level')->textInput() ?>

    <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'time')->textInput() ?>

    <?= $form->field($model, 'traces')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
