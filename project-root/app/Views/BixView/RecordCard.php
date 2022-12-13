<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

<style>
    #card-menu .btn {
        float: right;
        margin-left: 5px;
    }
</style>


<script type="text/javascript">
    $("#RecordCard").ready(function() {

        $('[data-bs-toggle="tooltip"]').tooltip();

    });

    function closeCard(vrbl) {
        //$(vrbl).closest("#RecordCard").remove();
        $(vrbl).closest("#RecordCard").slideToggle(200, function() {
            $('#bixdata_recordcard_container').html('');
        });

    }


    function caricaRis(el) {
        $(el)
        var serialized_data = [];
        //$("#bixdata_recordcard_container").load('Loading.php');
        /*
         $.ajax({
             type: "POST",
             url: controller_url + 'ajax_get_recordcard',
             data: serialized_data,
             success: function(response) {
                 //$("#bixdata_recordcard_container").html(response);
                 $("#bixdata_recordcard_container").html('test');
             },
             error: function() {
                 $("#bixdata_recordcard_container").html(response);
             }
         });*/
    }
</script>

<div id="RecordCard" class="card" style=" height: 100%; overflow: scroll">
    <div class="card-body">
        <p class="card-text">

        <div id="card-menu">

            <button type="button" class="btn btn-light button-recordcard" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="close" onclick="closeCard(this)"><i class="mdi mdi-close"></i> </button>

            <button type="button" class="btn btn-light button-recordcard" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="pin"><i class="mdi mdi-pin-outline"></i> </button>

            <button type="button" class="btn btn-light button-recordcard" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="permissions"><i class="mdi mdi-lock-outline"></i> </button>

            <button type="button" class="btn btn-light button-recordcard" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="delete" style="color: red"><i class=" mdi mdi-delete-outline"></i> </button>

            <button type="button" class="btn btn-light button-recordcard" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="copy"><i class="mdi mdi-content-copy"></i> </button>


            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Prints
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Functions
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>

            <div style="clear:both;"></div>
        </div>



        <div class="container" style="height:auto">
            <?= $previewcard ?>
        </div>



        </br>


        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="fields-tab" data-bs-toggle="tab" data-bs-target="#fields-tab-pane" type="button" role="tab" aria-controls="fields-tab-pane" aria-selected="true">Fields</button>
                <button class="nav-link" id="linked-tab" data-bs-toggle="tab" data-bs-target="#linked-tab-pane" type="button" role="tab" aria-controls="linked-tab-pane" aria-selected="false">Linked</button>
                <button class="nav-link" id="attachment-tab" data-bs-toggle="tab" data-bs-target="#attachment-tab-pane" type="button" role="tab" aria-controls="attachment-tab-pane" aria-selected="false">Attachment</button>
                <button class="nav-link" id="statistics-tab" data-bs-toggle="tab" data-bs-target="#statistics-tab-pane" type="button" role="tab" aria-controls="statistics-tab-pane" aria-selected="false">Statistics</button>
                <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history-tab-pane" type="button" role="tab" aria-controls="history-tab-pane" aria-selected="false">History</button>
                <button class="nav-link" id="workflow-tab" data-bs-toggle="tab" data-bs-target="#workflow-tab-pane" type="button" role="tab" aria-controls="workflow-tab-pane" aria-selected="false">Workflow</button>
            </div>
        </nav>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="fields-tab-pane" role="tabpanel" aria-labelledby="fields-tab" tabindex="0">


                <?php
                foreach ($record_fields as $record => $field) {
                    if ($field['value'] != null) {
                        if ($record != 'recordid_jdoc') {
                ?>


                            <br>
                            <span><b><?= $field['description'] ?></b></span>: <span><?= $field['value'] ?></span>

                <?php
                        }
                    }
                }
                ?>




            </div>

            <div class="tab-pane fade" id="linked-tab-pane" role="tabpanel" aria-labelledby="linked-tab" tabindex="0">

                <p>
                <div class="d-grid gap-2">

                    <?php
                    foreach ($labels as $label_key => $label) {
                    ?>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $label_key ?>" aria-expanded="false" aria-controls="<?= $label_key ?>" style="background-color: #ff5b5b; border: #ff5b5b" onclick=caricaRis(this)><?= $label['description'] ?></button>
                        <div class="collapse" id="<?= $label_key ?>">
                            <div class="card card-body">
                                <?= $label['description'] ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>



                </div>
                </p>



            </div>

            <div class="tab-pane fade" id="attachment-tab-pane" role="tabpanel" aria-labelledby="attachment-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="statistics-tab-pane" role="tabpanel" aria-labelledby="statistics-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="history-tab-pane" role="tabpanel" aria-labelledby="history-tab" tabindex="0">...</div>
            <div class="tab-pane fade" id="workflow-tab-pane" role="tabpanel" aria-labelledby="workflow-tab" tabindex="0">...</div>

        </div>
    </div>
</div>