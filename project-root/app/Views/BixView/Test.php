<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!--JQuery-->


    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script type="text/javascript">
        var controller_url = "<?php echo base_url('project-root/public/Bixcontroller/'); ?>/";
        $("#base_container").ready(function() {

        });


        function get_content_loading() {
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

    <style type="text/css">
        .qwe {
            border: 16px solid #f3f3f3;
            /* Light grey */
            border-top: 16px solid #048023;
            /* Dark Green */
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: testspin 2s linear infinite;
            box-sizing: content-box;
        }

        .qwe img {
            height: 120px;
            width: 120px;
            animation: testspin2 2s linear infinite;
            box-sizing: content-box;
        }

        @keyframes testspin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes testspin2 {
            0% {
                transform: rotate(360deg);
            }

            100% {
                transform: rotate(0deg);
            }
        }
    </style>

</head>

<body>


    <div id="base_container">

        <div class="qwe">
            <img src="./swissbix.logo-removebg-preview.png" />
        </div>

    </div>
</body>

</html>