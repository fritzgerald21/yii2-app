<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TrafficSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Traffic';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="traffic-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Traffic', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('View Graph', ['graph'], ['class' => 'btn btn-info']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'week',
            'traffic',
            'whenSubmitted',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
