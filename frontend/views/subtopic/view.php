<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Subtopic */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Subtopics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subtopic-view box">

    <div>
        <div class="col-md-12 box">
            <p>
                <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>
        </div>

    </div>

    <div>

        <div class="col-md-3">
            <?= Html::img($model->pic_url, ['style'=>'border:1px black solid; width: 100%;'])?>
        </div>

        <div class="col-md-9">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>

    </div>


    <div>
        <div class="col-md-12 box">
            <hr />
            <?= $model->description ?>
        </div>
    </div>

    <?=
    $this->render('/vocabulary/index', [
        'dataProvider' => $dpVocabulary
    ])
    ?>

</div>
