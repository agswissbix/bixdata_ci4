<h5><span class="badge bg-secondary">New</span></h5>
<?php
$i = 0;
foreach ($record_fields as $key => $array) {
    $i  += 1;
    if ($i <= 6) {


?>
        <div>
            <b>
                <p><?= $key ?>
            </b>
            <?= " ", $array['value'] ?></p>


        </div>
<?php
    }
}
?>