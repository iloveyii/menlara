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

    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="bs-callout bs-callout-info" style="padding-left: 5px;">
                    <div class="col-md-4">
                        <?= Html::img($model->pic_url, ['style'=>'border:1px black solid; width: 100%;'])?>
                        <small><?= trim($model->pic_text) ?></small>
                    </div>
                    <div class="col-md-8">
                        <h4><?= Html::encode($this->title) ?></h4>
                        <p><?= trim($model->description) ?></p>
                    </div>
                    <div style="clear:both"></div>
                </div>
            </div>

        </div>
    </div>

    <?=
    $this->render('/vocabulary/index', [
        'dataProvider' => $dpVocabulary
    ])
    ?>


</div>


