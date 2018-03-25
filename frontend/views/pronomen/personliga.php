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
            <h1>Personliga pronomen</h1>
            <p>The following sentences contain personliga pronomen in subject and object forms.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Menning</th>
                    <th>Subjekt/Objekt</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jag ska se en film i kväll. <strong>Den</strong> heter Agent X.</td>
                        <td>subjekt</td>
                    </tr>
                    <tr>
                        <td>Jaha. Jag ska se <strong>den</strong> på lördag.</td>
                        <td>objekt</td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>

                    <tr>
                        <td>Vilket snyggt jacka. Var har du köpt <strong>det</strong> ?</td>
                        <td>objekt</td>
                    </tr>
                    <tr>
                        <td>På Dressman. <strong>Det</strong> kostade bara 2000 kronor.</td>
                        <td>subjekt</td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>

                    <tr>
                        <td>Var är Blom och Erik?</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><strong>De</strong> är i skolan.</td>
                        <td>subjekt</td>
                    </tr>
                    <tr>
                        <td>Har du talat med <strong>dem</strong> idag ?</td>
                        <td>objekt</td>
                    </tr>

                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>

                    <tr>
                        <td>Var är dina böcker?</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><strong>De</strong> ligger på skrivbordet.</td>
                        <td>subjekt</td>
                    </tr>
                    <tr>
                        <td>Får jag låna <strong>dem</strong> ?</td>
                        <td>objekt</td>
                    </tr>
                    <tr>
                        <td>Javisst.</td>
                        <td>&nbsp;</td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

</div>
