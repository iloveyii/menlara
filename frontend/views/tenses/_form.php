<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Tenses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tenses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'english')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'infinitiv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'presens')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'preteritum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supinum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imperativ')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
