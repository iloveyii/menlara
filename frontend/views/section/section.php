<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Section */

$this->title = $model->sectionName;
$this->params['breadcrumbs'][] = ['label' => 'Sections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-view box">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        this is section details.
    </p>

    <p>
        <ul>
        <?php

            foreach ($model->topics as $topic) {
                printf("<li>%s</li>", $topic->name);
            }

        ?>
        </ul>
    </p>

</div>
