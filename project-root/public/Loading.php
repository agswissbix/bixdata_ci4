<!DOCTYPE html>
<html lang="en">

<body>
    <div class="loader" style="margin-top: auto; margin-bottom: auto;">
        <img src="./swissbix.logo-removebg-preview.png">
    </div>
</body>

</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        .loader {
            border: 7px solid #f3f3f3;
            /* Light grey */
            border-top: 7px solid #ec0928;
            /* Dark Green */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spinloader 1.5s linear infinite;
            margin: auto;
            justify-content: center;
        }

        .loader img {
            height: 25px;
            width: 25px;
            animation: spinlogo 1.5s linear infinite;
        }

        @keyframes spinloader {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes spinlogo {
            0% {
                transform: rotate(360deg);
            }

            100% {
                transform: rotate(0deg);
            }
        }
    </style>
</head>

</html>