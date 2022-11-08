<script type="text/javascript">
    $("#tables").ready(function() {

            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.render();


            $('[data-bs-toggle="popover"]').popover();






        }


    );

    $(function() {
        $('#calendar-tab a:last').tab('show');
    });

    $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
        var target = $(e.target).attr("href");
        if ((target == '#messages')) {
            alert('ok');
        } else {
            alert('not ok');
        }
    });







    function open_record() {
        var serialized_data = [];
        $("#bixdata_recordcard_container").load('Loading.php');
        $.ajax({
            type: "POST",
            url: controller_url + 'ajax_get_recordcard',
            data: serialized_data,
            success: function(response) {
                $("#bixdata_recordcard_container").html(response);
            },
            error: function() {
                $("#bixdata_recordcard_container").html(response);
            }
        });

    }
</script>

<!--Content tables start-->
<div id="content-tables" class="card shadow mb-4" style="height: 100%;">
    <div class="card-body" style="height: 100%;">
        <!-- Filters start-->
        <div id="filters">
            <div class="text-center">
                <div class="row">
                    <div class="col">

                        <div class="d-grid gap-2 d-md-block">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 50%;">
                            <button class="btn btn-outline-danger" type="submit" style="margin-top: -65px; margin-left: 90px;">Search</button>
                        </div>

                        <button type="button" class="btn btn-outline-secondary" style="margin-top: -113px; margin-left: 250px;" onclick="$('#hiddenCard').toggle(100);">Filters</button>

                    </div>
                    <div class="col">


                        <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-top: 3px; margin-right: 3px">
                            <button class="btn btn-outline-danger me-md-2" type="button">Refresh</button>
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary me md-2 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Export
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Esporta dati excel</a></li>
                                    <li><a class="dropdown-item" href="#">Esporta elenco</a></li>
                                    <li><a class="dropdown-item" href="#">Esporta migrazione</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <div id="hiddenCard" style="display: none;">
                <div class="card shadow-sm p-3 mb-5 bg-body rounded" style="margin-left: 30px;margin-right: 30px;">
                    <p class="card-text">

                    <div class="container text-center">
                        <div class="row">
                            <div class="col">

                                <div>
                                    <form class=" d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                </div>
                                </form>

                            </div>
                            <div class="col">

                                <div>
                                    <form class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                </div>
                                </form>

                            </div>
                            <div class="col">

                                <div>
                                    <form class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                </div>
                                </form>

                            </div>
                            <div class="col">

                                <div>
                                    <form class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                </div>
                                </form>

                            </div>

                            <div class="col">
                                <button type="button" class="btn btn-outline-secondary" onclick="$('#hiddenCardAF').toggle(100);">Advanced filters</button>
                                </br>
                            </div>



                        </div>
                    </div>

                    </p>
                </div>

                <div id="hiddenCardAF" style="display: none; margin-top: -40px">
                    <div class="card shadow-sm p-3 mb-5 bg-body rounded" style="margin-left: 30px;margin-right: 30px;">
                        <div class="card-body">

                            <div class="container text-center">
                                <div class="row">
                                    <div class="col">

                                        <label for="birthday">inserisci una data</label>
                                        <input type="date" id="birthday" name="birthday">

                                    </div>
                                    <div class="col">

                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                            <select class="form-select" id="inputGroupSelect01">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>






            </div>



        </div>
        <!-- Filters end-->

        <!-- Results start-->
        <div id="results" style="height: 75%">
            <!-- Nav menu start -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tutti-tab" data-bs-toggle="tab" data-bs-target="#tutti-tab-pane" type="button" role="tab" aria-controls="tutti-tab-pane" aria-selected="true">Results</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="report-tab" data-bs-toggle="tab" data-bs-target="#report-tab-pane" type="button" role="tab" aria-controls="report-tab-pane" aria-selected="false">Report</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="calendar-tab" data-bs-toggle="tab" data-bs-target="#calendar-tab-pane" type="button" role="tab" aria-controls="calendar-tab-pane" href="#calendar" aria-selected="false">Calendar</button>
                </li>
            </ul>
            <!-- Nav menu end -->
            <!-- Nav content start-->
            <div class="tab-content" id="myTabContent" style="height: 100%">
                <div class="tab-pane fade show active" id="tutti-tab-pane" role="tabpanel" aria-labelledby="tutti-tab" tabindex="0" style="height: 100%;overflow: scroll;">

                    <!-- Table results 1 start -->
                    <table class="table table-bordered" id="dataTable" style="width: 100%;" cellspacing="0">
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

                    </table>
                    <!-- Table results 1 stop -->
                    <!-- Table results 2 start -->

                    <!-- Table results end -->
                </div>

                <div class="tab-pane fade" id="report-tab-pane" role="tabpanel" aria-labelledby="report-tab" tabindex="0">

                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                    <script>
                        const labels = [
                            'January',
                            'February',
                            'March',
                            'April',
                            'May',
                            'June',
                        ];

                        const data = {
                            labels: labels,
                            datasets: [{
                                label: 'My First dataset',
                                backgroundColor: 'rgb(255, 99, 132)',
                                borderColor: 'rgb(255, 99, 132)',
                                data: [0, 10, 5, 2, 20, 30, 45],
                            }]
                        };

                        const config = {
                            type: 'line',
                            data: data,
                            options: {}
                        };
                    </script>

                    <script>
                        const myChart = new Chart(
                            document.getElementById('myChart'),
                            config
                        );
                    </script>


                </div>

                <div class="tab-pane fade" id="calendar-tab-pane" role="tabpanel" aria-labelledby="calendar-tab" tabindex="0">

                    
               


                    

                </div>
            </div>
            <!-- nav content end-->
        </div>
        <!-- Results end-->
        <div id="calendar"></div>
    </div>

    
    
</div>