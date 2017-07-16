<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Traffic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="traffic-form">

    <?php $form = ActiveForm::begin(); ?>
    <!-- placeholder is not working currently -->
    <!--<?= $form->field($model, 'week')->textInput()->input(['placeholder'=> "YYYY-MM-DD (ex. 2016-01-24)"]) ?>-->

    <!-- dosamigos datepicker -->
    <?= $form->field($model, 'week')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
       // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
]);?>



    YYYY-MM-DD (ex. 2016-01-24)
    <br>
    <br>


    <?= $form->field($model, 'traffic')->textInput() ?>


    <br>
    <br>
    <?php
        // Set correct Time zone
        date_default_timezone_set("America/New_York");
        // Setting the value of whenSubmitted
        $model->whenSubmitted= date("Y-m-d h:i:s");

    ?>

    <?= $form->field($model, 'whenSubmitted')->hiddenInput()->label(false) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
