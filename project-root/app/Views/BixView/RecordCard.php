<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

<div id="tables" class="card shadow mb-4">

    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">

            <button type="button" class="btn btn-secondary btn-sm">
                <span class="material-symbols-outlined">
                    content_copy
                </span>

            </button>
            <button type="button" class="btn btn-danger btn-sm">
                <span class="material-symbols-outlined">
                    delete
                </span>
            </button>

            <button type="button" class="btn btn-secondary btn-sm">
                <span class="material-symbols-outlined">
                    lock
                </span>
            </button>

            <button type="button" class="btn btn-secondary btn-sm">
                <span class="material-symbols-outlined">
                    push_pin
                </span>
            </button>

            <button type="button" class="btn btn-secondary btn-sm">
                <span class="material-symbols-outlined">
                    close
                </span>
            </button>

        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">


            <button class="btn btn-outline-secondary me-md-2" type="button" style="margin-right: 10px;">Stampe</button>
            <button class="btn btn-outline-secondary" type="button">Funzioni</button>
        </div>
        banlieu
        <div class="container text-center">
            <div class="row row-cols-3">
                <div class="col"><b>Document nr
                        </br>
                    </b></div>
                <div class="col"><b>Company
                        </br>
                    </b></div>
                <div class="col"><b>Title
                        </br>
                    </b></div>
                <div class="col"><b>Total net yearly
                        </br>
                    </b></div>

            </div>
        </div>

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-dati-tab" data-bs-toggle="tab" data-bs-target="#nav-dati" type="button" role="tab" aria-controls="nav-dati" aria-selected="true">Dati</button>
                <button class="nav-link" id="nav-allegati-tab" data-bs-toggle="tab" data-bs-target="#nav-allegati" type="button" role="tab" aria-controls="nav-allegati" aria-selected="false">Allegati</button>
            </div>
        </nav>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="dati-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

                <p>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="">
                        Sales order line
                    </a>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style=" margin-top: 5px">
                        Service and asset
                    </button>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style=" margin-top: 5px">
                        Company
                    </button>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style=" margin-top: 5px">
                        Dati
                    </button>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="allegati-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-secondary">Chiudi</button>
        </div>