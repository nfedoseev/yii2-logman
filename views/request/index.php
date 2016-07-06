<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel nfedoseev\yii2\logman\models\LogmanRequestsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Logman Requests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="logman-requests-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Logman Requests', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tag',
            'url:url',
            'site',
            'time',
            // 'status',
            // 'method',
            // 'user_ip',
            // 'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
