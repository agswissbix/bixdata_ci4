<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

<style>
    #card-menu .btn {
        float: right;
        margin-left: 5px;
    }
</style>

<div class="card" style=" height: 90%">
    <div class="card-body">
        <p class="card-text">

        <div id="card-menu">

            <button type="button" class="btn btn-light"><i class="mdi mdi-close"></i> </button>

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




        <div class="container text-left" style="margin-top: 20px">
            <div class="row row-cols-2">
                <div class="col"><b>Document nr: </b>
                    123456
                </div>
                <div class="col"><b>Company: </b>
                    Swissbix SA
                </div>
                <div class="col"><b>Title: </b>
                    abc
                </div>
                <div class="col"><b>Total net yearly: </b>
                    123456
                </div>

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
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" style="background-color: #ff5b5b; border: #ff5b5b;">Sales order line</a>

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

                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2" style="background-color: #ff5b5b; border: #ff5b5b">Service and asset</button>

                    <div class="collapse" id="multiCollapseExample2">
                        <div class="card card-body">
                            2
                        </div>
                    </div>

                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3" style="background-color: #ff5b5b; border: #ff5b5b">Company</button>

                    <div class="collapse" id="multiCollapseExample3">
                        <div class="card card-body">
                            3
                        </div>
                    </div>

                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4" style="background-color: #ff5b5b; border: #ff5b5b">Dati</button>

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