<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vocabularies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vocabulary-index box">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'layout' => '{items}',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'word',
            'meaning',
            'lang',

        ],
    ]); ?>
</div>
