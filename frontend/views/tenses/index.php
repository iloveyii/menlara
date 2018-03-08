<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tenses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tenses-index box">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tense', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'english',
            'infinitiv',
            'presens',
            'preteritum',
            'supinum',
            'imperativ',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
