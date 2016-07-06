<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model nfedoseev\yii2\logman\models\LogmanTraces */

$this->title = 'Update Logman Traces: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Logman Traces', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="logman-traces-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
