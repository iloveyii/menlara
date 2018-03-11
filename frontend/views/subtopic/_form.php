<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model frontend\models\Subtopic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subtopic-form box">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php
    echo $form->field($model, 'topic_id')->widget(Select2::classname(), [
        'data' => $listTopic,
        'language' => 'en',
        'options' => ['placeholder' => 'Select a Topic'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pic_url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<div class="col-md-12">
    <?=
    $this->render('/vocabulary/_form', [
        'model' => $vocabulary
    ]);
    ?>
</div>

<?=
    $this->render('/vocabulary/index', [
        'dataProvider' => $dpVocabulary
    ])
?>
