<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


<div class="card" style="width: 18rem;">
    <div class="card-body">
        <p class="card-text">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">

            <button type="button" class="btn btn-light"><i class="mdi mdi-content-copy" data-bs-placement="top" data-bs-title="Tooltip on top"></i> </button>

            <button type="button" class="btn btn-danger" style="background-color: red; border: red"><i class="mdi mdi-delete-outline"></i> </button>

            <button type="button" class="btn btn-light"><i class="mdi mdi-lock-outline"></i> </button>

            <button type="button" class="btn btn-light"><i class="mdi mdi-pin-outline"></i> </button>

            <button type="button" class="btn btn-light"><i class="mdi mdi-close"></i> </button>

        </div>

        </br>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">


            <button class="btn btn-outline-secondary me-md-2" type="button">Stampe</button>
            <button class="btn btn-outline-secondary" type="button" style="margin-right: 10px">Funzioni</button>
        </div>

        </br>

        <div class="container text-center">
            <div class="row row-cols-2">
                <div class="col"><b>Document nr

                    </b>
                    </br>
                    123456
                </div>
                <div class="col"><b>Company

                    </b>
                    </br>
                    Swissbix SA
                </div>
                <div class="col">
                    </br>
                    <b>
                        Title

                    </b>
                    </br>
                    abc
                </div>
                <div class="col">
                    </br>
                    <b>Total net yearly
                    </b>
                    </br>
                    123456
                </div>

            </div>
        </div>

        </br>

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-dati-tab" data-bs-toggle="tab" data-bs-target="#nav-dati" type="button" role="tab" aria-controls="nav-dati" aria-selected="true">Dati</button>
                <button class="nav-link" id="nav-allegati-tab" data-bs-toggle="tab" data-bs-target="#nav-allegati" type="button" role="tab" aria-controls="nav-allegati" aria-selected="false">Allegati</button>
            </div>
        </nav>
        </br>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="dati-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

                <p>
                <div class="d-grid gap-2">
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" style="background-color: red; border: red;">Sales order line</a>

                    <div class="collapse" id="multiCollapseExample1">
                        <div class="card card-body">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2" style="background-color: red; border: red">Service and asset</button>

                    <div class="collapse" id="multiCollapseExample2">
                        <div class="card card-body">
                            2
                        </div>
                    </div>

                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3" style="background-color: red; border: red">Company</button>

                    <div class="collapse" id="multiCollapseExample3">
                        <div class="card card-body">
                            3
                        </div>
                    </div>

                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4" style="background-color: red; border: red">Dati</button>

                    <div class="collapse" id="multiCollapseExample4">
                        <div class="card card-body">
                            4
                        </div>
                    </div>

                </div>
                </p>

                <div class="tab-pane fade" id="nav-allegati" role="tabpanel" aria-labelledby="nav-allegati-tab" tabindex="0">...</div>




            </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-secondary">Chiudi</button>
        </div>