<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        .loaderBix {
            border: 7px solid #f3f3f3;
            border-top: 7px solid #ff1a1a;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spinloader 1.5s linear infinite;
            box-sizing: content-box;
        }

        .loaderBix img {
            height: 60px;
            width: 60px;
            animation: spinlogo 1.5s linear infinite;
            box-sizing: content-box;
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

<body>
    <p style="text-align: center">

    <div class="loaderBix" style="margin: auto; margin-top: 20%">
        <img src="./swissbix.logo-removebg-preview.png" />
    </div>

    </p>

</body>

</html>