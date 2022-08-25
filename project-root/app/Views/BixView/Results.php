

<!--JQuery-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--Bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


<!--Custom css
<link href="../css/sb-admin-2.css" rel="stylesheet">
-->

<!--Font google-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

<script type="text/javascript">
    var controller_url="<?php echo base_url('project-root/public/Bixcontroller/'); ?>/"; 

    function ajax_results()
    {
        var complete_url=controller_url + 'ajax_results';
        $.ajax( {
            
            dataType: 'html',
            url: complete_url,
            success: function( response ) {
                document.write(response);
            },
            error:function(){
                alert('errore');
            }
        } ); 
    }

    function ajax_results2()
    {
        var complete_url=controller_url + 'ajax_results2';
        $.ajax( {
            
            dataType: 'html',
            url: complete_url,
            success: function( response ) {
                document.write(response);
            },
            error:function(){
                alert('errore');
            }
        } ); 
    }

</script>


<div class="bg-secondary " style="--bs-bg-opacity: .1;">

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Results</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" onclick="ajax_results()">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" onclick="ajax_results2()">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Dashboard</a></li>
            <li><a class="dropdown-item" href="#">Login</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-secondary shadow-lg" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

</br>

<div class="container text-center">
  <div class="row">
    <div class="col">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">

    <button class="btn btn-outline-secondary me-md-2 shadow-lg" type="button">Refresh</button>
                
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle me-md-2 shadow-lg" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Esporta
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Esporta dati excel</a></li>
                        <li><a class="dropdown-item" href="#">Esporta elenco</a></li>
                        <li><a class="dropdown-item" href="#">Esporta migrazione</a></li>
                    </ul>
                </div>

</div>

    <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Tutti</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Report</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">

  <table class="table">
        <thead>
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
               
             

                    
                

            </>
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
        <td>@fat</grid
        td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        </tr>
    </tbody>
</table>

  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">...</div>
</div>

    



    </div>
    <div class="col-lg-auto">
      

    <div class="card shadow-lg" style="width: 25rem; margin-bottom:50px">

    <div class="d-grid  d-md-flex justify-content-md-end">
  <button class="btn btn-outline" type="button">

  <span class="material-symbols-outlined">
file_copy
</span>

  </button>
  <button class="btn btn-outline" type="button">

  <span class="material-symbols-outlined">
delete
</span>
  
  </button>
  <button class="btn btn-outline" type="button">

  <span class="material-symbols-outlined">
key
</span>

  </button>
  <button class="btn btn-outline" type="button">

  <span class="material-symbols-outlined">
push_pin
</span>

  </button>
  <button class="btn btn-outline" type="button">

  <span class="material-symbols-outlined">
close
</span>

  </button>
  <button class="btn btn-outline" type="button">

<span class="material-symbols-outlined">
fullscreen
</span>

  </button>
</div>


  

</br>

    


    <h5 class="card-title"><b>Sales order</b></h5>
    <p class="card-text">

    <div class="container text-center">
  <div class="row row-cols-3">
    <div class="col"><b>Document nr</b>
    
    OR-9201652
</div>
    <div class="col"><b>Company</b>
    Lageco SA
</div>
    <div class="col"><b>Title</b>
    Infrastruttura IT
</div>
    <div class="col"><b>Status</b>
</br>
    Active
</div>
  </div>
</div>

</br>
</br>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Dati</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Allegati</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

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
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0" style="margin-top:10px; margin-left:10px">

  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
  </label>
</div>

<div class="d-grid gap-2">
  <button class="btn btn-outline-secondary" type="button" style="width: 100px">Carica</button>
  <button class="btn btn-outline-secondary" type="button" style="width: 100px">Coda</button>
</div>

<div class="dropdown">
  <button class="btn btn-secondary-light dropdown-toggle me-md-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  <span class="material-symbols-outlined">
file_download
</span>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</d-grid>

  </div>
</div>

    </p>
    
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-outline-secondary me-md-2" type="button">Chiudi</button>
</div>

</br>

  </div>
    </div>
    </div>
  </div>
</div>
</div>

</br>



  <path d="m10.213 1.471.691-1.26c.046-.083.03-.147-.048-.192-.085-.038-.15-.019-.195.058l-.7 1.27A4.832 4.832 0 0 0 8.005.941c-.688 0-1.34.135-1.956.404l-.7-1.27C5.303 0 5.239-.018 5.154.02c-.078.046-.094.11-.049.193l.691 1.259a4.25 4.25 0 0 0-1.673 1.476A3.697 3.697 0 0 0 3.5 5.02h9c0-.75-.208-1.44-.623-2.072a4.266 4.266 0 0 0-1.664-1.476ZM6.22 3.303a.367.367 0 0 1-.267.11.35.35 0 0 1-.263-.11.366.366 0 0 1-.107-.264.37.37 0 0 1 .107-.265.351.351 0 0 1 .263-.11c.103 0 .193.037.267.11a.36.36 0 0 1 .112.265.36.36 0 0 1-.112.264Zm4.101 0a.351.351 0 0 1-.262.11.366.366 0 0 1-.268-.11.358.358 0 0 1-.112-.264c0-.103.037-.191.112-.265a.367.367 0 0 1 .268-.11c.104 0 .19.037.262.11a.367.367 0 0 1 .107.265c0 .102-.035.19-.107.264ZM3.5 11.77c0 .294.104.544.311.75.208.204.46.307.76.307h.758l.01 2.182c0 .276.097.51.292.703a.961.961 0 0 0 .7.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h1.343v2.182c0 .276.097.51.292.703a.972.972 0 0 0 .71.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h.76c.291 0 .54-.103.749-.308.207-.205.311-.455.311-.75V5.365h-9v6.404Zm10.495-6.587a.983.983 0 0 0-.702.278.91.91 0 0 0-.293.685v4.063c0 .271.098.501.293.69a.97.97 0 0 0 .702.284c.28 0 .517-.095.712-.284a.924.924 0 0 0 .293-.69V6.146a.91.91 0 0 0-.293-.685.995.995 0 0 0-.712-.278Zm-12.702.283a.985.985 0 0 1 .712-.283c.273 0 .507.094.702.283a.913.913 0 0 1 .293.68v4.063a.932.932 0 0 1-.288.69.97.97 0 0 1-.707.284.986.986 0 0 1-.712-.284.924.924 0 0 1-.293-.69V6.146c0-.264.098-.491.293-.68Z"/>
</svg>
</div>




