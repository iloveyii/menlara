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
            <h1>Possessiva pronomen</h1>
            <p>Possessiva pronomen is used to explain who is owning something or has something.</p>
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
                        <td><strong>Kalle</strong> har en bil. <strong>Hans</strong> bil står i garage på nätterna.</td>
                    </tr>

                    <tr>
                        <td>Eva lånar ofta <strong>hans</strong> bil.</td>
                    </tr>

                    <tr>
                        <td><strong>Kalle</strong> har ett job på en företag. <strong>Hans</strong> jobb är snart ledig.
                        Eva ska söka hans jobb.</td>
                    </tr>

                    <tr>
                        <td><strong>Elle</strong> har en hund. <strong>Hennes</strong> hund heter Jack. Grannarna passar ofta <strong>hennes</strong> hund.</td>
                    </tr>

                    <tr>
                        <td><strong>Man</strong> har en viss handstil. <strong>Ens</strong> handstil är personlig.
                        Somliga kan kanske inte läsa ens handstil.</td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

</div>
