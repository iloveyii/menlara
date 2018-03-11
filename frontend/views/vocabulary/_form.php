<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model frontend\models\Vocabulary */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vocabulary-form">

    <?php $form = ActiveForm::begin( ['options'=>['class' => 'form-inline']] ); ?>

    <?= $form->field($model, 'word')->textInput(['maxlength' => true, 'placeholder'=>'Word'])->label(false) ?>

    <?= $form->field($model, 'meaning')->textInput(['maxlength' => true, 'placeholder'=>'Meaning'])->label(false) ?>

    <?= $form->field($model, 'lang')->widget(Select2::classname(), [
            'data' => ['en'=>'en', 'sv'=>'sv'],
            'language' => 'en',
            'options' => ['placeholder' => 'Select a language'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ])->label(false);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <div class="help-block"></div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
