<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel nfedoseev\yii2\logman\models\LogmanTracessSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Logman Traces';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="logman-traces-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Logman Traces', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'request_tag',
            'message:ntext',
            'message_full:ntext',
            'message_short:ntext',
            // 'message_all:ntext',
            // 'line',
            // 'file',
            // 'additional:ntext',
            // 'level',
            // 'category',
            // 'time',
            // 'traces:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
