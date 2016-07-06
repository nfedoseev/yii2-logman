<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model nfedoseev\yii2\logman\models\LogmanTraces */

$this->title = 'Create Logman Traces';
$this->params['breadcrumbs'][] = ['label' => 'Logman Traces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="logman-traces-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
