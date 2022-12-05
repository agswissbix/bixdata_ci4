<script type="text/javascript">
    $("#tables").ready(function() {




        $('[data-bs-toggle="popover"]').popover();





        $("#nav-calendar")[0].addEventListener('shown.bs.tab', function(event) {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.render();
        })

    })





    $(function() {
        $('#calendar-tab a:last').tab('show');
    });


    function search() {
        var serialized_data=[];
        serialized_data.push({name: 'table', value: '<?=$table?>'});
        $("#records_table_container").load('Loading.php');
        $.ajax({
            type: "POST",
            url: controller_url + 'ajax_get_records_table',
            data: serialized_data,
            success: function(response) {
                $("#records_table_container").html(response);
            },
            error: function() {
                $("#records_table_container").html(response);
            }
        });
    }






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
                            <button class="btn btn-outline-danger" type="submit" style="margin-top: -65px; margin-left: 90px;" onclick="search()">Search</button>
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
                    <button class="nav-link active" id="tutti-tab" data-bs-toggle="tab" data-bs-target="#records_table_container" type="button" role="tab" aria-controls="records_table_container" aria-selected="true">Results</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="report-tab" data-bs-toggle="tab" data-bs-target="#report-tab-pane" type="button" role="tab" aria-controls="report-tab-pane" aria-selected="false">Report</button>
                </li>
                <li id="nav-calendar" class="nav-item" role="presentation">
                    <button class="nav-link" id="calendar-tab" data-bs-toggle="tab" data-bs-target="#calendar-tab-pane" type="button" role="tab" aria-controls="calendar-tab-pane" href="#calendar" aria-selected="false">Calendar</button>
                </li>
                <li id="nav-kanban" class="nav-item" role="presentation">
                    <button class="nav-link" id="kanban-tab" data-bs-toggle="tab" data-bs-target="#kanban-tab-pane" type="button" role="tab" aria-controls="kanban-tab-pane" href="#kanban" aria-selected="false">Kanban</button>
                </li>
                <li id="nav-gantt" class="nav-item" role="presentation">
                    <button class="nav-link" id="gantt-tab" data-bs-toggle="tab" data-bs-target="#gantt-tab-pane" type="button" role="tab" aria-controls="gantt-tab-pane" href="#gantt" aria-selected="false">Gantt</button>
                </li>
            </ul>
            <!-- Nav menu end -->
            <!-- Nav content start-->
            <div class="tab-content" id="myTabContent" style="height: 100%">
                <div class="tab-pane fade show active" id="records_table_container" role="tabpanel" aria-labelledby="tutti-tab" tabindex="0" style="height: 100%;overflow: scroll;">
                    <?= $records_table ?>
                </div>

                <div class="tab-pane fade" id="report-tab-pane" style="height: 100%; width: 100%" role="tabpanel" aria-labelledby="report-tab" tabindex="0">




                </div>

                <div class="tab-pane fade" id="calendar-tab-pane" role="tabpanel" aria-labelledby="calendar-tab" tabindex="0">

                    <div id="calendar"></div>





                </div>

                <div class="tab-pane fade" id="kanban-tab-pane" role="tabpanel" aria-labelledby="kanban-tab" tabindex="0">


                </div>

                <!--<div class="tab-pane fade" id="gantt-tab-pane" role="tabpanel" aria-labelledby="gantt-tab" tabindex="0">

                    <link rel="stylesheet" href="../dist/frappe-gantt.css" />
                    <script src="../dist/frappe-gantt.js"></script>

                    <svg id="gantt"></svg>



                    <script type="text/javascript">
                        var tasks = [

                            {
                                start: '2018-10-01',
                                end: '2018-10-08',
                                name: 'Redesign website',
                                id: "Task 0",
                                progress: 20
                            },
                            {
                                start: '2018-10-03',
                                end: '2018-10-06',
                                name: 'Write new content',
                                id: "Task 1",
                                progress: 5,
                                dependencies: 'Task 0'
                            },
                            {
                                start: '2018-10-04',
                                end: '2018-10-08',
                                name: 'Apply new styles',
                                id: "Task 2",
                                progress: 10,
                                dependencies: 'Task 1'
                            },
                            {
                                start: '2018-10-08',
                                end: '2018-10-09',
                                name: 'Review',
                                id: "Task 3",
                                progress: 5,
                                dependencies: 'Task 2'
                            },
                            {
                                start: '2018-10-08',
                                end: '2018-10-10',
                                name: 'Deploy',
                                id: "Task 4",
                                progress: 0,
                                dependencies: 'Task 2'
                            },
                            {
                                start: '2018-10-11',
                                end: '2018-10-11',
                                name: 'Go Live!',
                                id: "Task 5",
                                progress: 0,
                                dependencies: 'Task 4',
                                custom_class: 'bar-milestone'
                            },
                            {
                                start: '2014-01-05',
                                end: '2019-10-12',
                                name: 'Long term task',
                                id: "Task 6",
                                progress: 0
                            }

                        ]

                        var gantt = new Gantt("#gantt", tasks);

                        var gantt_chart = new Gantt(".gantt-target", tasks, {
                            on_click: function(task) {
                                console.log(task);
                            },
                            on_date_change: function(task, start, end) {
                                console.log(task, start, end);
                            },
                            on_progress_change: function(task, progress) {
                                console.log(task, progress);
                            },
                            on_view_change: function(mode) {
                                console.log(mode);
                            },
                            view_mode: 'Month',
                            language: 'en'
                        });
                        console.log(gantt_chart);
                    </script>
                    -->



            </div>
        </div>
        <!-- nav content end-->
    </div>
    <!-- Results end-->

</div>



</div>