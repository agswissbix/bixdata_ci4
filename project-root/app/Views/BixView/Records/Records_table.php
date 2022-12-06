<style>
    .container {
        padding: 1rem;
        margin: 1rem;
        height: 100%;
    }

    .table-scroll {
        /*width:100%; */
        display: block;
        empty-cells: show;

        /* Decoration */
        border-spacing: 0;

        height: 100%
    }

    .table-scroll thead,
    tfoot {
        background-color: #f1f1f1;
        position: relative;
        display: block;
        width: 100%;
        overflow-y: scroll;
    }

    .table-scroll tbody {
        /* Position */
        display: block;
        position: relative;
        width: 100%;
        overflow-y: scroll;
        /* Decoration */

        height: 200px;
    }

    .table-scroll tr {
        width: 100%;
        display: flex;
    }

    .table-scroll td,
    .table-scroll th {
        flex-basis: 50%;
        flex-grow: 2;
        display: block;
        text-align: left;
    }

    td {
        width: 200px;
    }

    /* Other options */

    .table-scroll.small-first-col td:first-child,
    .table-scroll.small-first-col th:first-child {
        flex-basis: 20%;
        flex-grow: 1;
    }

    .table-scroll tbody tr:nth-child(2n) {
        background-color: rgba(130, 130, 170, 0.1);
    }



    .small-col {
        flex-basis: 10%;
    }
</style>

<div class="container">
    <table class="table table-bordered table-scroll small-first-col" id="dataTable" style="width: 100%; height: 100%" cellspacing="0">
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


        <tbody class="body-half-screen" style="height: 87.2%">
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