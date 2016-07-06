<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model nfedoseev\yii2\logman\models\LogmanExceptions */

$this->title = 'Update Logman Exceptions: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Logman Exceptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="logman-exceptions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
