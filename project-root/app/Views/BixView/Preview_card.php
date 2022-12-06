<div class="row row-cols-3 row-cols-md-2 row-cols-sm-1">

    <?php
    foreach ($previewcard_fields as $key => $array) {
        if ($key != 'recordid_jdoc') {
    ?>
            <div class="col">
                <span><b><?= $array['desc'] ?></b> : <?= $array['value'] ?></span><br />
            </div>
    <?php
        }
    }
    ?>

</div>