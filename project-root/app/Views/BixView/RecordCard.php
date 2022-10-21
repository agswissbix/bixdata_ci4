<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

<style>
    #card-menu .btn {
        float: right;
        margin-left: 5px;
    }
</style>

<div class="card" style=" height: 17%;">
    <div class="card-body">
        <p class="card-text">

        <div id="card-menu">

            <button type="button" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top"><i class="mdi mdi-close"></i> </button>

            <button type="button" class="btn btn-light"><i class="mdi mdi-pin-outline"></i> </button>

            <button type="button" class="btn btn-light"><i class="mdi mdi-lock-outline"></i> </button>

            <button type="button" class="btn btn-light" style="color: red"><i class=" mdi mdi-delete-outline"></i> </button>

            <button type="button" class="btn btn-light"><i class="mdi mdi-content-copy" data-bs-placement="top" data-bs-title="Tooltip on top"></i> </button>


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



        <div class="container ">
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
        </div>



        </br>

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="dati-tab" data-bs-toggle="tab" data-bs-target="#dati-tab-pane" type="button" role="tab" aria-controls="dati-tab-pane" aria-selected="true">Data</button>
                <button class="nav-link" id="allegati-tab" data-bs-toggle="tab" data-bs-target="#allegati-tab-pane" type="button" role="tab" aria-controls="allegati-tab-pane" aria-selected="false">Attachments</button>
            </div>
        </nav>
        </br>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="dati-tab-pane" role="tabpanel" aria-labelledby="dati-tab" tabindex="0">

                <p>
                <div class="d-grid gap-2">

                    <?php
                    foreach ($labels as $label_key => $label) {
                    ?>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $label_key ?>" aria-expanded="false" aria-controls="<?= $label_key ?>" style="background-color: #ff5b5b; border: #ff5b5b"><?= $label['description'] ?></button>
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

                <div class="tab-pane fade" id="nav-allegati" role="tabpanel" aria-labelledby="nav-allegati-tab" tabindex="0">...</div>




            </div>
        </div>
    </div>
</div>