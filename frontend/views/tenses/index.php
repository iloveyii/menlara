<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TensesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tenses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tenses-index box">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tenses', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= $this->render('_letterlinks', [
                'letters' => $letters
        ]);
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'header'=>'english',
                'value'=>function($model) {
                    $arr = explode(',', $model->english);
                    return implode(', ', array_slice($arr, 0, 3));
                }
            ],
            'infinitiv',
            'presens',
            'preteritum',
            'supinum',
            'imperativ',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
