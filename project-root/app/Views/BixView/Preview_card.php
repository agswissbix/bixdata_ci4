<div class="row row-cols-3 row-cols-md-2 row-cols-sm-1">

    <?php
    foreach ($previewcard_fields as $key => $array) {
        if ($key != 'recordid_jdoc') {
    ?>
            <!-- pc = preview card -->
            <div class="col">
                <span class="span-pc"><b><?= $array['desc'] ?></b> : <?= $array['value'] ?></span><br />
            </div>
    <?php
        }
    }
    ?>

</div>