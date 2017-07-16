<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Traffic */

$this->title = 'Create Traffic';
$this->params['breadcrumbs'][] = ['label' => 'Traffic', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="traffic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
