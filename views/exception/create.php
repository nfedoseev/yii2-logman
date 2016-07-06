<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model nfedoseev\yii2\logman\models\LogmanExceptions */

$this->title = 'Create Logman Exceptions';
$this->params['breadcrumbs'][] = ['label' => 'Logman Exceptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="logman-exceptions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
