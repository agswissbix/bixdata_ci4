<!--JQuery-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!--Bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<script type="text/javascript">

    var controller_url = "<?php echo base_url('project-root/public/Bixcontroller/'); ?>/";

    $( "#login" ).ready(function(){
      $( "input" ).keypress(function() {
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
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
      var complete_url = controller_url + 'ajax_login';
      $.ajax({
        type: "POST",
        url: complete_url,
        data: serialized_data,
        success: function(response) {
          document.open();
          document.write(response);
          document.close();
        },
        error: function() {
          alert('errore');
        }
      });
    }


    
    
    
  </script>

<div id="login" class="container">
  <div class="d-flex justify-content-center align-items-center vh-100">



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