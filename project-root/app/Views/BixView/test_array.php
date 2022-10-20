<?php
foreach ($arrays as $arrays_key => $array) {
?>
    <span><?= $arrays_key ?>: <?= $array['desc'] ?> - <?= $array['value'] ?></span><br />

<?php

}
?>

<?php
foreach ($arrays as $arrays_key => $array) {
?>
    <?php
    foreach ($array as $field_key => $field_value) {
    ?>
        <?= $field_value ?> -
    <?php
    }
    ?>
    <br />
    <br />
<?php

}
?>

<?php
foreach ($arrays as $arrays_key => $array) {

?>
    <span><b><?= $arrays_key ?></b>:<?= $array['fieldid'] ?> - <?= $array['type'] ?></span>

<?php
}
?>

<?php
foreach ($arrays as $arrays_key => $array) {
?>

    <?php
    foreach ($array as $field => $field_value) {
    ?>

        <span><?= $field_value ?></span>
        <br>

<?php
    }
}
?>