<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model nfedoseev\yii2\logman\models\LogmanTraces */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Logman Traces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="logman-traces-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'request_tag',
            'message:ntext',
            'message_full:ntext',
            'message_short:ntext',
            'message_all:ntext',
            'line',
            'file',
            'additional:ntext',
            'level',
            'category',
            'time',
            'traces:ntext',
        ],
    ]) ?>

</div>
