<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

<div id="tables" class="card shadow mb-4">

    <div class="card-body">

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

        <button type="button" class="btn btn-danger btn-sm">
            <span class="material-symbols-outlined">
                lock
            </span>
        </button>

        <button type="button" class="btn btn-danger btn-sm">
            <span class="material-symbols-outlined">
                push_pin
            </span>
        </button>

        <button type="button" class="btn btn-danger btn-sm">
            <span class="material-symbols-outlined">
                close
            </span>
        </button>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">


            <button class="btn btn-outline-danger me-md-2" type="button" style="margin-right: 10px;">Stampe</button>
            <button class="btn btn-outline-danger" type="button">Funzioni</button>
        </div>

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
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Dati</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Allegati</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">

                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>

                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">...</div>
        </div>