<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reading';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subtopic-index box">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Subtopic', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'topic.name',
            'updated_at',
            // 'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
