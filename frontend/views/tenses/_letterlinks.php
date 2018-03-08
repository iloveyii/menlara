<?php
foreach ($letters as $letter=>$count) :
?>
    <a href="/tenses?like=<?=$count?>" class="btn btn-default"  style="margin-top: 6px" type="button">
        <span class="badge"> <?= strtoupper($count) ?> </span>
    </a>

<?php
endforeach;
?>
<br />
<br />
