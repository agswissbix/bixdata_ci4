<style>
    tbody {
        display: block;
        height: 850px;
        overflow: auto;
    }

    thead,
    tfoot,
    tbody tr {
        display: table;
        width: 100%;
        table-layout: fixed;
    }

    thead {
        width: calc(100% - 1em);
    }

    table {
        width: 100%;
    }
</style>




<div class="col s12 m6 l6">
    <table>
        <thead>
            <tr>

                <?php

                foreach ($columns as $key => $column) {
                    $column_desc = $column['desc'];
                    if ($column_desc != 'recordid_' && $column_desc != 'recordstatus_' && $column_desc != 'recordcss_') {
                ?>
                        <th><?= $column_desc ?></th>
                <?php
                    }
                }

                ?>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($records as $key => $record) {
            ?>
                <tr>
                    <?php
                    foreach ($record as $key_column => $column) {
                        if ($key_column > 2) {

                            $split = explode("|:|", $column);
                            $pt1 = $split[0];
                            if (count($split) == 1) {

                    ?>
                                <td onclick="open_record()"><?= $pt1 ?></td>
                            <?php
                            } else {
                            ?>
                                <td>
                                    <button id='testpopover' type="button" class="btn btn-btn-outline" data-bs-toggle="popover" data-bs-title="Popover title" data-bs-content="<?= $split[1] ?> - <?= $split[2] ?>"><?= $pt1 ?></button>
                                </td>

                    <?php
                            }
                        }
                    }
                    ?>

                </tr>
            <?php
            }

            ?>
            <tr>
        </tbody>
        <tfoot>

            <tr>
                <?php

                foreach ($columns as $key => $column) {
                    $column_desc = $column['desc'];
                    if ($column_desc != 'recordid_' && $column_desc != 'recordstatus_' && $column_desc != 'recordcss_') {
                ?>
                        <th><?= $column_desc ?></th>
                <?php
                    }
                }

                ?>
            </tr>

        </tfoot>
    </table>
</div>