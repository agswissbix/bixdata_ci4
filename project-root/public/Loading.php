<style type="text/css">
    .loader {
        border: 16px solid #f3f3f3;
        /* Light grey */
        border-top: 16px solid #048023;
        /* Dark Green */
        border-radius: 50%;
        width: 120px;
        height: 120px;
        animation: spinloader 2s linear infinite;
    }

    .loader img {
        height: 120px;
        width: 120px;
        animation: spinlogo 2s linear infinite;
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


<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        .loader {
            border: 16px solid #f3f3f3;
            /* Light grey */
            border-top: 16px solid #048023;
            /* Dark Green */
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spinloader 2s linear infinite;
        }

        .loader img {
            height: 120px;
            width: 120px;
            animation: spinlogo 2s linear infinite;
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
    <div class="loader">
        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20210610212340/gfglogo.png" />
    </div>
</body>

</html>