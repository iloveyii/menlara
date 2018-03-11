<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Subtopic */

$this->title = 'Create Subtopic';
$this->params['breadcrumbs'][] = ['label' => 'Subtopics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subtopic-create box">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'vocabulary' => $vocabulary,
        'listTopic' => $listTopic,
        'dpVocabulary' => $dpVocabulary
    ]) ?>

</div>
