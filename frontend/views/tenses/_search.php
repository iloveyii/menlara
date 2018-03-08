<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TensesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tenses-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'english') ?>

    <?= $form->field($model, 'infinitiv') ?>

    <?= $form->field($model, 'presens') ?>

    <?= $form->field($model, 'preteritum') ?>

    <?php // echo $form->field($model, 'supinum') ?>

    <?php // echo $form->field($model, 'imperativ') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
