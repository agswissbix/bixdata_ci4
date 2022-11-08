<?php
helper('base_helper');
?>

<!DOCTYPE html>
<html lang="en" data-layout-mode="fluid" data-topbar-color="dark" data-sidenav-color="light" data-sidenav-user="true" data-sidenav-size="default" style="overflow: hidden;min-height: 100%; height: 100%;">

<head>
    <meta charset="utf-8" />
    <title>Analytics Dashboard | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= assets_url() ?>/images/favicon.ico">

    <!-- Plugin css -->
    <link rel="stylesheet" href="<?= assets_url() ?>/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?= assets_url() ?>/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <!-- Icons css -->
    <link href="<?= assets_url() ?>/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="<?= assets_url() ?>/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Custom css -->
    <link href="<?= assets_url() ?>/css/custom.css?v=<?= time(); ?>" rel="stylesheet" type="text/css" id="app-style" />

    <script type="text/javascript">
        var controller_url = "<?php echo base_url('project-root/public/Bixcontroller/'); ?>/";
    </script>

</head>

<body style="min-height: 100%; height: 100%;">
    <!-- Begin page -->
    <div class="wrapper" style="height: 100%">
        <?= $wrapped_content ?>
    </div>

    <!-- Vendor js -->
    <script src="<?= assets_url() ?>/js/vendor.min.js"></script>

    <!-- Daterangepicker js -->
    <script src="<?= assets_url() ?>/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= assets_url() ?>/vendor/daterangepicker/daterangepicker.js"></script>

    <!-- Charts js -->
    <script src="<?= assets_url() ?>/vendor/chart.js/chart.min.js"></script>
    <script src="<?= assets_url() ?>/vendor/apexcharts/apexcharts.min.js"></script>

    <!--Fullcalendar-->
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css' rel='stylesheet' />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js"></script>

    <!-- Vector Map js -->
    <script src="<?= assets_url() ?>/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?= assets_url() ?>/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Analytics Dashboard App js -->
    <script src="<?= assets_url() ?>/js/pages/demo.dashboard-analytics.js"></script>

    <!-- App js -->
    <script src="<?= assets_url() ?>/js/app.min.js"></script>


</body>

</html>