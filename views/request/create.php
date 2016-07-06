<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model nfedoseev\yii2\logman\models\LogmanRequests */

$this->title = 'Create Logman Requests';
$this->params['breadcrumbs'][] = ['label' => 'Logman Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="logman-requests-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
