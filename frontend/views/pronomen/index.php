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
            <h1>Pronomen</h1>
            <p>A pronoun replaces a noun or stands in front of a noun.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-1 col-md-4">
            <h3>Personliga</h3>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Subjekt</th>
                    <th>Objekt</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td colspan="2"><strong>First person</strong></td>
                </tr>
                <tr>
                    <td>jag</td>
                    <td>mig</td>
                </tr>
                <tr>
                    <td>vi</td>
                    <td>oss</td>
                </tr>

                <tr>
                    <td colspan="2"><strong>Second person</strong></td>
                </tr>
                <tr>
                    <td>du</td>
                    <td>dig</td>
                </tr>
                <tr>
                    <td>ni</td>
                    <td>er</td>
                </tr>


                <tr>
                    <td colspan="2"><strong>Third person</strong></td>
                </tr>
                <tr>
                    <td>han</td>
                    <td>honom</td>
                </tr>
                <tr>
                    <td>hon</td>
                    <td>henne</td>
                </tr>
                <tr>
                    <td>de</td>
                    <td>dem</td>
                </tr>
                <tr>
                    <td>den</td>
                    <td>den</td>
                </tr>
                <tr>
                    <td>det</td>
                    <td>det</td>
                </tr>
                <tr>
                    <td>man</td>
                    <td>en</td>
                </tr>

                </tbody>
            </table>
        </div>

        <div class="col-md-offset-1 col-md-4">
            <h3>Reflexiva</h3>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th colspan="2"><--------------------|</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td colspan="2"><strong>First person</strong></td>
                </tr>
                <tr>
                    <td>jag</td>
                    <td>mig</td>
                </tr>
                <tr>
                    <td>vi</td>
                    <td>oss</td>
                </tr>

                <tr>
                    <td colspan="2"><strong>Second person</strong></td>
                </tr>
                <tr>
                    <td>du</td>
                    <td>dig</td>
                </tr>
                <tr>
                    <td>ni</td>
                    <td>er</td>
                </tr>

                <tr>
                    <td colspan="2"><strong>Third person</strong></td>
                </tr>
                <tr>
                    <td>han</td>
                    <td>sig</td>
                </tr>
                <tr>
                    <td>hon</td>
                    <td>sig</td>
                </tr>
                <tr>
                    <td>de</td>
                    <td>sig</td>
                </tr>
                <tr>
                    <td>den</td>
                    <td>sig</td>
                </tr>
                <tr>
                    <td>det</td>
                    <td>sig</td>
                </tr>
                <tr>
                    <td>man</td>
                    <td>sig</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-offset-1 col-md-4">
            <h3>Possessiva</h3>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>pronomen</th>
                    <th>en ord</th>
                    <th>ett ord</th>
                    <th>plural</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td colspan="4"><strong>First person</strong></td>
                </tr>
                <tr>
                    <td>jag</td>
                    <td>min</td>
                    <td>mitt</td>
                    <td>mina</td>
                </tr>
                <tr>
                    <td>vi</td>
                    <td>vår</td>
                    <td>vårt</td>
                    <td>våra</td>
                </tr>

                <tr>
                    <td colspan="4"><strong>Second person</strong></td>
                </tr>
                <tr>
                    <td>du</td>
                    <td>din</td>
                    <td>ditt</td>
                    <td>dina</td>
                </tr>
                <tr>
                    <td>ni</td>
                    <td>er</td>
                    <td>ert</td>
                    <td>era</td>
                </tr>


                <tr>
                    <td colspan="4"><strong>Third person</strong></td>
                </tr>
                <tr>
                    <td>han</td>
                    <td>hans</td>
                    <td>hans</td>
                    <td>hans</td>
                </tr>
                <tr>
                    <td>hon</td>
                    <td>hennes</td>
                    <td>hennes</td>
                    <td>hennes</td>
                </tr>
                <tr>
                    <td>de</td>
                    <td>deras</td>
                    <td>deras</td>
                    <td>deras</td>
                </tr>
                <tr>
                    <td>den</td>
                    <td>dess</td>
                    <td>dess</td>
                    <td>dess</td>
                </tr>
                <tr>
                    <td>det</td>
                    <td>dess</td>
                    <td>dess</td>
                    <td>dess</td>
                </tr>
                <tr>
                    <td>man</td>
                    <td>ens</td>
                    <td>ens</td>
                    <td>ens</td>
                </tr>

                </tbody>
            </table>
        </div>

        <div class="col-md-offset-1 col-md-4">
            <h3>Reflexiva possessiva</h3>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>pronomen</th>
                    <th>en ord</th>
                    <th>ett ord</th>
                    <th>plural</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td colspan="4"><strong>First person</strong></td>
                </tr>
                <tr>
                    <td>jag</td>
                    <td>min</td>
                    <td>mitt</td>
                    <td>mina</td>
                </tr>
                <tr>
                    <td>vi</td>
                    <td>vår</td>
                    <td>vårt</td>
                    <td>våra</td>
                </tr>

                <tr>
                    <td colspan="4"><strong>Second person</strong></td>
                </tr>
                <tr>
                    <td>du</td>
                    <td>din</td>
                    <td>ditt</td>
                    <td>dina</td>
                </tr>
                <tr>
                    <td>ni</td>
                    <td>er</td>
                    <td>ert</td>
                    <td>era</td>
                </tr>


                <tr>
                    <td colspan="4"><strong>Third person</strong></td>
                </tr>
                <tr>
                    <td>han</td>
                    <td>sin</td>
                    <td>sitt</td>
                    <td>sina</td>
                </tr>
                <tr>
                    <td>hon</td>
                    <td>sin</td>
                    <td>sitt</td>
                    <td>sina</td>
                </tr>
                <tr>
                    <td>de</td>
                    <td>sin</td>
                    <td>sitt</td>
                    <td>sina</td>
                </tr>
                <tr>
                    <td>den</td>
                    <td>sin</td>
                    <td>sitt</td>
                    <td>sina</td>
                </tr>
                <tr>
                    <td>det</td>
                    <td>sin</td>
                    <td>sitt</td>
                    <td>sina</td>
                </tr>
                <tr>
                    <td>man</td>
                    <td>sin</td>
                    <td>sitt</td>
                    <td>sina</td>
                </tr>

                </tbody>
            </table>
        </div>

    </div>

</div>
