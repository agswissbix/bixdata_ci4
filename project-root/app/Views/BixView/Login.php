<!--JQuery-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--Bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<script type="text/javascript">
  

  $("#login").ready(function() {
    $("input").keypress(function() {
      var keycode = (event.keyCode ? event.keyCode : event.which);
      if (keycode == '13') {
        ajax_login();
      }
    });
  });

  function ajax_login() {

    var serialized_data = [];
    serialized_data.push({
      name: 'username',
      value: $('#username').val()
    });
    serialized_data.push({
      name: 'password',
      value: $('#password').val()
    });

    $("#base_container").load('Loading.php');
    $.ajax({
      type: "POST",
      url: controller_url + 'ajax_login',
      data: serialized_data,
      success: function(response) {
        $("#base_container").html(response);
      },
      error: function() {
        $("#base_container").html(response);
      }
    });


  }
</script>

<div id="login" class="container">
  <img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco,dpr_1/736cf93031754a435dd2" class="center">
  <div class="d-flex justify-content-center align-items-center vh-100">

    <style type="text/css">
      .center {
        width: 10%;
      }
    </style>
    <div class="card shadow-lg" style="width: 40rem;">

      <div style=" margin-top:10px; margin-bottom:20px">
        <div class="container text-center">
          <div class="row">
            <div class="col-3">

            </div>
            <div class="col-6">
              <div style="font-size:40px">
                <p> Login </p>
              </div>
              </br>

              <?php
              if ($message != '') {
              ?>
                <div class="alert alert-danger" role="alert">
                  <?= $message ?>
                </div>
              <?php
              }
              ?>

              <input id='username' class="form-control me-2" type="username" placeholder="Username" aria-label="Username">
              <input id='password' class="form-control me-2" type="password" placeholder="Password" aria-label="Password">
            </div>
            <div class="col-3">

            </div>
          </div>
          <div class="row">
            <div class="col">

            </div>
            <div class="col-5">
              </br>
              <button id="accedi" type="button" class="btn btn-outline-secondary" style="margin-right:12px" onclick="ajax_login();">Accedi</button>
            </div>
            <div class="col">

            </div>
          </div>
        </div>


      </div>
    </div>





  </div>


</div>