<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model nfedoseev\yii2\logman\models\LogmanRequests */

$this->title = 'Update Logman Requests: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Logman Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="logman-requests-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
