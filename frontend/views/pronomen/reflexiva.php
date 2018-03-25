<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
?>

<div class="box">
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <br><br>
            <?=  Html::a('Pronomen', ['pronomen/index'], ['class'=>'btn btn-default'] )?>
            <?=  Html::a('Personliga', ['pronomen/personliga'], ['class'=>'btn btn-success'] )?>
            <?=  Html::a('Reflexiva', ['/pronomen/reflexiva'], ['class'=>'btn btn-danger'] )?>
            <?=  Html::a('Possessiva', ['/pronomen/possessiva'], ['class'=>'btn btn-warning'] )?>
            <?=  Html::a('Reflexiva possessiva', ['/pronomen/reflexivapossessiva'], ['class'=>'btn btn-info'] )?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <h1>Reflexiva pronomen</h1>
            <p>Reflexiva pronomen links back to the subject in the phrase.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Menning <--------------|</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Jag</strong> tvättar <strong>mig</strong>.</td>
                    </tr>

                    <tr>
                        <td><strong>Du</strong> tvättar <strong>dig</strong>.</td>
                    </tr>

                    <tr>
                        <td><strong>Kalle</strong> tvättar <strong>sig</strong>.</td>
                    </tr>

                    <tr>
                        <td><strong>Man</strong> måste tvättar <strong>sig</strong>.</td>
                    </tr>

                    <tr>
                        <td><strong>Vi</strong> tvättar <strong>oss</strong>.</td>
                    </tr>

                    <tr>
                        <td><strong>Ni</strong> tvättar <strong>er</strong>.</td>
                    </tr>

                    <tr>
                        <td><strong>De</strong> tvättar <strong>sig</strong>.</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</div>
