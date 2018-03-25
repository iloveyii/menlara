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
            <h1>Reflexiva possessiva pronomen</h1>
            <p>Possessiva pronomen is used to explain who is owning something or has something and also linking back to subjekt.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Menning</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Emma</strong> tycker inte om <strong>sin</strong> svärmor.</td>
                    </tr>

                    <tr>
                        <td><strong>Man</strong> måste göra <strong>sina</strong> läxor om man vill ha bra betyg.</td>
                    </tr>

                    <tr>
                        <td><strong>Alex</strong> köper ofta blommor till <strong>sin</strong> flickvän.</td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

</div>
