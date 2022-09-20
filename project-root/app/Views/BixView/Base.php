<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        
        <!--JQuery-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        
        <!-- Custom fonts for this template-->
        <link href="http://localhost:8822/bixdata_ci4/node_modules/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
      
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.css" rel="stylesheet">
        
        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.js"></script>

        <script type="text/javascript">

            function get_content_loading()
            {
                $.ajax({
                    type: "url",
                    url: controller_url + 'get_view_loading',
                    success: function(response) {
                        return response;
                    },
                    error: function() {
                        return 'Errore';
                    }
                });
            }

        </script>

        <title>BixData</title>
    </head>

    <body>
        <div id="base_container">
            <?=$content?>
        </div>
    </body>
</html>
