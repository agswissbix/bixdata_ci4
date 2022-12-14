<?php
helper('base_helper');
?>

<script type="text/javascript">
    if (screen.width <= 1280) {
        $("html").attr("data-sidenav-size", "condensed");
        $(".tabs-title").attr("display", "none");
        $(".tabs-icon").attr("display", "visible");
    }

    $("#bixdata2").ready(function() {

        $("#toggle-menu").click(function() {
            var current_sidenav_size = $("html").attr("data-sidenav-size");
            if (current_sidenav_size == 'default') {
                $("html").attr("data-sidenav-size", "condensed");
            } else {
                $("html").attr("data-sidenav-size", "default");
            }

        });



    });

    function ajax_get_searchrecords(tableid) {
        var serialized_data = [];
        $("#bixdata_results_container").load('Loading.php');
        $.ajax({
            type: "POST",
            url: controller_url + 'ajax_get_searchrecords/' + tableid,
            data: serialized_data,
            success: function(response) {
                $("#bixdata_results_container").html(response);
                $('[data-toggle="tooltip"]').tooltip();
            },
            error: function() {
                $("#bixdata_results_container").html(response);
            }
        });
    }

    function open_test_content() {
        var serialized_data = [];
        $("#bixdata_recordcard_container").load('Loading.php');
        $.ajax({
            type: "POST",
            url: controller_url + 'ajax_get_test_content',
            data: serialized_data,
            success: function(response) {
                $("#bixdata_results_container").html(response);
            },
            error: function() {
                $("#bixdata_results_container").html(response);
            }
        });
    }

    function open_planner() {
        var serialized_data = [];
        $("#bixdata_recordcard_container").load('Loading.php');
        $.ajax({
            type: "POST",
            url: controller_url + 'ajax_get_planner',
            data: serialized_data,
            success: function(response) {
                $("#bixdata_results_container").html(response);
            },
            error: function() {
                $("#bixdata_results_container").html(response);
            }
        });
    }

    function open_calendar() {
        var serialized_data = [];
        $("#bixdata_recordcard_container").load('Loading.php');
        $.ajax({
            type: "POST",
            url: controller_url + 'ajax_get_calendar',
            data: serialized_data,
            success: function(response) {
                $("#bixdata_results_container").html(response);
            },
            error: function() {
                $("#bixdata_results_container").html(response);
            }
        });
    }

    function open_gantt() {
        var serialized_data = [];
        $("#bixdata_recordcard_container").load('Loading.php');
        $.ajax({
            type: "POST",
            url: controller_url + 'ajax_get_gantt',
            data: serialized_data,
            success: function(response) {
                $("#bixdata_results_container").html(response);
            },
            error: function() {
                $("#bixdata_results_container").html(response);
            }
        });
    }

    function open_kanban() {
        var serialized_data = [];
        $("#bixdata_recordcard_container").load('Loading.php');
        $.ajax({
            type: "POST",
            url: controller_url + 'ajax_get_kanban',
            data: serialized_data,
            success: function(response) {
                $("#bixdata_results_container").html(response);
            },
            error: function() {
                $("#bixdata_results_container").html(response);
            }
        });
    }






    function sidebarmenu_toggle(el) {

    }
</script>

<div id="bixdata2" style="height: 100%;">
    <!-- ========== Topbar Start ========== -->
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
        <div class="navbar-custom topnav-navbar">
            <div class="container-fluid detached-nav">

                <!-- Topbar Logo -->
                <div class="logo-topbar">
                    <!-- Logo light -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">


                        <p class="shadow-sm p-0 mb-0 bg-white rounded" style="width: 50px; color: red; margin-right: 1px;"><b>BIX</b></p>

                        <p class=" mb-0" style="width: 50px; color: white; margin-left: 0px;"><b>DATA</b></p>
                    </a>

                    <!-- Logo Dark -->
                    <a href="index.html" class="logo-dark">
                        <span class="logo-lg">
                            <img src="<?= assets_url() ?>/images/logo-dark.png" alt="dark logo" height="22">
                        </span>
                        <span class="logo-sm">
                            <img src="<?= assets_url() ?>/images/logo-dark-sm.png" alt="small logo" height="22">
                        </span>
                    </a>
                </div>

                <!-- Sidebar Menu Toggle Button -->
                <button class="button-toggle-menu" id="toggle-menu">
                    <i class="mdi mdi-menu"></i>
                </button>

                <!-- Horizontal Menu Toggle Button -->
                <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>

                <ul class="list-unstyled topbar-menu float-end mb-0">
                    <li class="dropdown notification-list d-lg-none">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ri-search-line noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                            <form class="p-3">
                                <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>


                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ri-notification-3-line noti-icon"></i>
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                            <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 font-16 fw-semibold"> Notification</h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                            <small>Clear All</small>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="px-3" style="max-height: 300px;" data-simplebar>

                                <h5 class="text-muted font-13 fw-normal mt-2">Today</h5>
                                <!-- item-->

                                <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-primary">
                                                    <i class="mdi mdi-comment-account-outline"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Datacorp <small class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-info">
                                                    <i class="mdi mdi-account-plus"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Admin <small class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">New user registered</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <h5 class="text-muted font-13 fw-normal mt-0">Yesterday</h5>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon">
                                                    <img src="<?= assets_url() ?>/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Cristina Pride <small class="fw-normal text-muted ms-1">1 day ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <h5 class="text-muted font-13 fw-normal mt-0">30 Dec 2021</h5>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-primary">
                                                    h <i class="mdi mdi-comment-account-outline"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Datacorp</h5>
                                                <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon">
                                                    <img src="<?= assets_url() ?>/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Karen Robinson</h5>
                                                <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <div class="text-center">
                                    <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                </div>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                View All
                            </a>

                        </div>
                    </li>


                    <li class="notification-list d-none d-sm-inline-block">
                        <a class="nav-link" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                            <i class="ri-settings-3-line noti-icon"></i>
                        </a>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="account-user-avatar">
                                <img src="<?= assets_url() ?>/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                            </span>
                            <span>
                                <span class="user-hover">
                                    <span class="account-user-name">Dominic Keller</span>
                                    <span class="account-position">Founder</span>
                                </span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                            <!-- item-->
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-circle me-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-edit me-1"></i>
                                <span>Settings</span>
                            </a>


                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lifebuoy me-1"></i>

                                <span>Support</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock-outline me-1"></i>
                                <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout me-1"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>

                <!-- Topbar Search Form -->
                <div class="app-search dropdown">

                    <form>
                        <div class="input-group">
                            <input type="search" class="form-control dropdown-toggle" placeholder="Search..." id="top-search" autocomplete="off">
                            <span class="mdi mdi-magnify search-icon"></span>
                            <button class="input-group-text btn btn-primary" type="submit" style="background-color: #ff5b5b; border: #ff5b5b">Search</button>
                        </div>
                    </form>

                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="uil-notes font-16 me-1"></i>
                            <span>Analytics Report</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="uil-life-ring font-16 me-1"></i>
                            <span>How can I help you?</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="uil-cog font-16 me-1"></i>
                            <span>User profile settings</span>
                        </a>

                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                        </div>

                        <div class="notification-list">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="d-flex">
                                    <img class="d-flex me-2 rounded-circle" src="<?= assets_url() ?>/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                    <div class="w-100">
                                        <h5 class="m-0 font-14">Erwin Brown</h5>
                                        <span class="font-12 mb-0">UI Designer</span>
                                    </div>
                                </div>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="d-flex">
                                    <img class="d-flex me-2 rounded-circle" src="<?= assets_url() ?>/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                    <div class="w-100">
                                        <h5 class="m-0 font-14">Jacob Deo</h5>
                                        <span class="font-12 mb-0">Developer</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Topbar End ========== -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="leftside-menu">

        <!-- Logo Light -->
        <div class="logo-topbar" style="height: 100%;">
            <!-- Logo light -->


            <!-- Logo Dark -->
            <div id="logo-leftside" href="index.html" class="logo logo-dark">
                <span class="logo-lg sidebar-brand d-flex align-items-center justify-content-center">
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">


                        <p id="logo-leftside-bix" class="shadow-sm p-0 mb-0 bg-white rounded" style="width: 50px; color: red; margin-right: 3px; font-size: 20px;"><b>BIX</b></p>

                        <p class=" mb-0" style="width: 50px; color: white; margin-top: 2px; font-size: 20px;"><b>DATA</b></p>
                    </a>
                </span>

                <span class="logo-sm sidebar-brand d-flex align-items-center justify-content-center">
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">


                        <p id="logo-leftside-bix" style="width: 50px; color: red; margin-right: -30px; margin-top: 16px; font-size: 20px;"><b>B</b></p>

                        <p class=" mb-0" style="width: 50px; color: white; margin-left: -5px; margin-top: 1px; font-size: 20px;"><b>D</b></p>

                    </a>
                </span>
            </div>

            <!-- Sidebar Hover Menu Toggle Button -->
            <button type="button" class="bg-transparent button-sm-hover p-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                <i class="ri-checkbox-blank-circle-line align-middle"></i>
            </button>

            <!-- Sidebar -left -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span class="badge bg-success float-end">5</span>
                            <span> Dashboards </span>
                        </a>
                        <div class="collapse" id="sidebarDashboards">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="dashboard-analytics.html">Analytics</a>
                                </li>
                                <li>
                                    <a href="index.html">Ecommerce</a>
                                </li>
                                <li>
                                    <a href="dashboard-projects.html">Projects</a>
                                </li>
                                <li>
                                    <a href="dashboard-crm.html">CRM</a>
                                </li>
                                <li>
                                    <a href="dashboard-wallet.html">E-Wallet</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="side-nav-title side-nav-item">Tables</li>

                    <?php
                    foreach ($tables_menu as $workspace_name => $workspace) {
                    ?>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebar<?= $workspace_name ?>" aria-expanded="false" aria-controls="sidebarCrm" class="side-nav-link">
                                <i class="uil uil-tachometer-fast"></i>
                                <span class="menu-arrow"></span>
                                <span><?= $workspace_name ?><br /></span>
                            </a>
                            <?php
                            foreach ($workspace as $key => $table) {
                            ?>
                                <div class="collapse" id="sidebar<?= $workspace_name ?>">
                                    <ul class="side-nav-second-level">
                                        <li>
                                            <a onclick="ajax_get_searchrecords('<?= $table['id'] ?>')"><?= $table['description'] ?><br /></a>
                                        </li>
                                    </ul>
                                </div>
                        </li>

                    <?php
                            }
                    ?>
                <?php
                    }
                ?>

                <!--- End Sidemenu -->

                <!-- Help Box -->

                <!-- end Help Box -->
                <li class="side-nav-title side-nav-item">Systems</li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarSettings" aria-expanded="false" aria-controls="sidebarSettings" class="side-nav-link">
                        <i class="uil-home-alt"></i>
                        <span> Settings </span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" onclick="open_test_content(this)" aria-expanded="false" aria-controls="sidebarSettings" class="side-nav-link">
                        <i class="uil-home-alt"></i>
                        <span> Test content </span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" onclick="open_planner(this)" aria-expanded="false" aria-controls="sidebarSettings" class="side-nav-link">
                        <i class="uil-calendar-alt"></i>
                        <span> Planner </span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" onclick="open_calendar(this)" aria-expanded="false" aria-controls="sidebarSettings" class="side-nav-link">
                        <i class="uil-calendar-alt"></i>
                        <span> Calendar </span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" onclick="open_gantt(this)" aria-expanded="false" aria-controls="sidebarSettings" class="side-nav-link">
                        <i class="uil-calendar-alt"></i>
                        <span> Gantt </span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" onclick="open_kanban(this)" aria-expanded="false" aria-controls="sidebarSettings" class="side-nav-link">
                        <i class="uil-calendar-alt"></i>
                        <span> Kanban </span>
                    </a>
                </li>


                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- ========== Left Sidebar End ========== -->
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <!--test content-->
    <div class="content-page" style="min-height: 80%;height: 80%;">
        <div class="content" style="height: 100%;">

            <!-- Start Content-->
            <div id="bixdata_container" class="container-fluid" style="height: 100%">
                <div class="row" style="height: 100%;">
                    <div id="bixdata_results_container" class="col-xl-8 col-md-8 mb-4" style="height: 100%; margin-bottom: 0px">
                        <?= $content ?>
                    </div>
                    <div id="bixdata_recordcard_container" class="col-xl-4 col-md-4 mb-4" style="height: 100%">

                    </div>
                </div>

            </div>

        </div>
    </div>

    <!--planner-->
    <div class="content-page" style="min-height: 80%;height: 80%;">
        <div class="content" style="height: 100%;">

            <!-- Start Content-->
            <div id="bixdata_container" class="container-fluid" style="height: 100%">
                <div class="row" style="height: 100%;">
                    <div id="bixdata_planner_container" class="col-xl-8 col-md-8 mb-4" style="height: 100%; margin-bottom: 0px">
                        <?= $content ?>
                    </div>
                    <div id="bixdata_planner_container" class="col-xl-4 col-md-4 mb-4" style="height: 100%">

                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>