<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Subtopic */

$this->title = 'Update Subtopic: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Subtopics', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subtopic-update box">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'vocabulary' => $vocabulary,
        'listTopic' => $listTopic,
        'dpVocabulary' => $dpVocabulary
    ]) ?>

</div>
