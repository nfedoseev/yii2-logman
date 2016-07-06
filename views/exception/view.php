<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model nfedoseev\yii2\logman\models\LogmanExceptions */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Logman Exceptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="logman-exceptions-view">

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
            'tag',
            'class',
            'error_group',
            'line_number',
            'file_name',
            'message:ntext',
        ],
    ]) ?>

</div>
