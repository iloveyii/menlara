<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Tenses */

$this->title = 'Create Tenses';
$this->params['breadcrumbs'][] = ['label' => 'Tenses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tenses-create box">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
