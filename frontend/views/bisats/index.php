<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
?>

<div class="box">
    <h1>Huvudsats och Bisats</h1>

    <p>
        Huvudsats and bisats are phrases of a sentence. In this section we explain first a Huvudsats and then a bisats.
    </p>

    <div class="row">
        <div class="col-md-9">
            <h3>Huvudsats</h3>
            <p>A Huvudsats is a simple sentence with a subjekt and verb. It can stay alone as a fully meaningful sentence. Other features are as follows:</p>
            <p>
            <ol>
                <li>On first place there can be subject, time or place.</li>
                <li>On second place there is <strong>verb</strong> always. (simple sentence i.e. when there is no bisats with it). </li>
                <li> <i>Adverb</i> (t.ex ofta) always comes after first verb.</li>
                <li>Words order: <br>
                    <b>Subjekt -- Verb -- Adverb -- Objekt -- Adverbial/plats/tid</b>
                </li>
                <li>Huvudsats words order changes when plats/tid comes at first place. ie. subjekt and verb interchange positions.</li>
            </ol>
            </p>
            <p>Huvudsats examples :
            <ul>
                <li>Jag <strong>läser</strong> <i>ofta</i> böcker. </li>
                <li>Förra veckan <strong>åkte</strong> jag till Slussen.</li>
                <li>Martin <strong>hjälper</strong> mig med läxan.</li>
                <li>I Säffle <strong>bor</strong> det inte många människor.</li>
            </ul>
            </p>

        </div>
        <div class="col-md-3">
            <br><br>
            <?= Html::img(['@web/images/huvudsats-1.png'], ['class' => 'pull-left img-responsive']); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <h3>Bisats</h3>
            <p>If we want to add more information to a simple sentence( Huvudsats ), we can add another phrase called bisats. A bisats is a phrase with its own subject and verb but it has no meaning without a huvudsats.</p>
            <p>Jag läser ofta böcker, <u>när jag är ledig.</u></p>
            <p>In the above sentence, the underlined phrase is a bisats but it does not convey any meaning without the huvudsats. Therefore we always use huvudsats with a bisats. Other attributes are as follows:</p>
            <p>
                <ol>
                    <li>Bisats start with a word called bisatsinledare eg. när, att, om, som, eftersom etc.</li>
                    <li>It has always the same words order: <br>
                        <b>Bisatsinledare -- Subjekt -- Adverb -- Verb -- Objekt -- Adverbial/plats/tid</b>
                    </li>
                    <li>Adverb comes before first verb (BIFF - förre första verb).</li>
                    <li>However it has impact on the words (verb, adverb) order in Huvudsats. This is very important and we will discuss it in details below.</li>
                </ol>
            </p>
        </div>
        <div class="col-md-4"></div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3>Bisats impacts words order in huvudsats</h3>
            <p>
                <ol>
                    <li>
                        <h4>Combine two huvudsats - nothing changes here</h4>
                        <p>Jag ska köpa en ny klänning. (<i>huvudsats 1</i>)</p>
                        <p>Jag ska gå på fest. (<i>huvudsats 2</i>)</p>
                        <p>Jag ska köpa en ny klänning, eftersom jag ska gå på fest. (<i>Huvudsats with bisats</i>) </p>
                    </li>
                    <li>
                        <h4>Use of inte</h4>
                        <p>The word 'inte' comes after first verb in huvudsats but before first verb in bisats (BIFF - bisats förre första).</p>
                        <p>Min bror <u>köpte inte</u> en dyr bil. Han <u>hade inte</u> råd.</p>
                        <p>Min bror köpte inte en dyr bil, eftersom han <u>inte hade</u> råd.</p>
                        <p></p>
                    </li>
                    <li>
                        <h4>Use bisats before huvudsats</h4>
                        <p>We can use bisats before a huvudsats, but it will interchange <u>subjekt and verb</u> in huvudsats. So the words orders will be:
                            <br>
                        <b>bistats -- verb -- subjekt ...</b>
                        </p>
                        <p>Det regnade mycket. <u>Mannen åkte</u> bil till stan. (<i>two huvudsats</i>)</p>
                        <p>Eftersom det regnade mycket, <u>åkte mannen</u> bil till stan. (<i> bistats + huvudsats</i>)</p>
                    </li>
                    <li>
                        <h4>Use bisats before huvudsats with inte</h4>
                        <p>It has the same words order as above, however now 'inte' becomes after subjekt (not verb).</p>
                        <p>Han fick inte köra bil. Han hade inte körkort.</p>
                        <p>Eftersom han inte hade körkort, han fick inte köra bil. (<i>Rule: han fick inte -- inte after first verb in huvudsats</i>)</p>
                        <p>Eftersom han inte hade körkort, fick han inte köra bil. (<i>Rule: fick han inte -- subjekt(han) and verb(fick) interchanged because huvudsats comes after bisats</i>)</p>
                    </li>
                </ol>
            </p>
        </div>
    </div>


</div>

