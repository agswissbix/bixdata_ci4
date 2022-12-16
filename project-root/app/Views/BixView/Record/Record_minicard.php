<h5><span class="badge bg-secondary">New</span></h5>
<?php
$i = 0;
foreach ($record_fields as $key => $array) {

    $i  += 1;
    $id_jdoc = 'recordidcompany_jdoc';
    $pos = strpos($key, $id_jdoc);

    if ($i <= 6 and $pos === false) {


?>
        <div>
            <b>
                <p><?= $array['description'] ?>
            </b>
            <?= " ", $array['value'] ?></p>


        </div>
<?php
    }
}
?>