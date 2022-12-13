<?php
helper('base_helper');
?>

<!DOCTYPE html>
<html lang="en" data-layout-mode="fluid" data-topbar-color="dark" data-sidenav-color="light" data-sidenav-user="true" data-sidenav-size="default" style="overflow: hidden;min-height: 100%; height: 100%;">

<head>
    <meta charset="utf-8" />
    <title>BixData</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <link rel="icon" href="swissbix.logo-removebg-preview.png">




    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= assets_url() ?>swissbix.logo-removebg-preview.png">

    <!-- Plugin css -->
    <link rel=" stylesheet" href="<?= assets_url() ?>/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?= assets_url() ?>/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

    <!--Chart.js-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!--Icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>


    <!--Fullcalendar-->
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css' rel='stylesheet' />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js"></script>

    <!-- Icons css -->
    <link href="<?= assets_url() ?>/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="<?= assets_url() ?>/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Custom css -->
    <link href="<?= assets_url() ?>/css/custom.css?v=<?= time(); ?>" rel="stylesheet" type="text/css" id="app-style" />

    <!--Custom small css-->
    <link href="<?= assets_url() ?>/css/custom-sm.css?v=<?= time(); ?>" rel="stylesheet" type="text/css" id="app-style" />

    <script type="text/javascript">
        var controller_url = "<?php echo base_url('project-root/public/Bixcontroller/'); ?>/";
    </script>

    <!--
    <script>
        var controller_url = "<?php echo base_url('node_modules/frappe-gantt/dist/frappe-gantt.js'); ?>/";
    </script>

    <link var controller_url="<?php echo base_url('node_modules/frappe-gantt/dist/frappe-gantt.css'); ?>/" ;>
-->
</head>

<body style="min-height: 100%; height: 100%;">
    <!-- Begin page -->
    <div class="wrapper" style="height: 100%">
        <?= $wrapped_content ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- Vendor js -->
    <script src="<?= assets_url() ?>/js/vendor.min.js"></script>

    <!-- Daterangepicker js -->
    <script src="<?= assets_url() ?>/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= assets_url() ?>/vendor/daterangepicker/daterangepicker.js"></script>

    <!-- Charts js -->
    <script src="<?= assets_url() ?>/vendor/chart.js/chart.min.js"></script>
    <!--<script src="<?= assets_url() ?>/vendor/apexcharts/apexcharts.min.js"></script>-->

    <!--Fullcalendar-->
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css' rel='stylesheet' />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js"></script>

    <!-- Vector Map js -->
    <script src="<?= assets_url() ?>/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?= assets_url() ?>/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Analytics Dashboard App js -->
    <!--<script src="<?= assets_url() ?>/js/pages/demo.dashboard-analytics.js"></script>-->

    <!-- App js -->
    <script src="<?= assets_url() ?>/js/app.min.js"></script>





</body>

</html>