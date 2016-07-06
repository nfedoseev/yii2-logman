<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel nfedoseev\yii2\logman\models\LogmanExceptionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Logman Exceptions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="logman-exceptions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Logman Exceptions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tag',
            'class',
            'error_group',
            'line_number',
            // 'file_name',
            // 'message:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
