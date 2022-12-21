<?php
helper('base_helper');
?>

<div class="record_minicard_deal" data-recordid="<?= $recordid ?>" data-status="todo">
    <h5><span class="badge bg-secondary">medium</span></h5>

    <b>
        <div><?= $record_fields['dealname']['value'] ?></div>
    </b>
    <div><?= $record_fields['amount']['value'] ?> chf</div>
    <div class="position-absolute top-0 end-0" style="margin-top: 5px; margin-right: 5px; font-size: 9pt"><?= $record_fields['closedate']['value'] ?></div>


    <div><?= $record_fields['expectedmargin']['value'] ?> chf</div>
    <div style="margin-top: 10px"><img src="<?= assets_url() ?>/images/users/mauro.png?v=<?= time(); ?>" width="40px" style="border-radius: 50%; margin-right: 10px "><?= $record_fields['dealuser']['value'] ?></div>
</div>