<!-- dragula js-->
<script src="assets/vendor/dragula/dragula.min.js"></script>

<!--Demo
<script src="assets/js/ui/component.dragula.js"></script>
-->



<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tasks</a></li>
                        <li class="breadcrumb-item active">Kanban Board</li>
                    </ol>
                </div>
                <h4 class="page-title">Kanban Board
                    <a href="#" data-bs-toggle="modal" data-bs-target="#add-new-task-modal" class="btn btn-success btn-sm ms-3">Add New</a>
                </h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="board">
                <div class="tasks" data-plugin="dragula" data-containers='["task-list-one", "task-list-two", "task-list-three", "task-list-four"]'>
                    <h5 class="mt-0 task-header">TODO (3)</h5>

                    <div id="task-list-one" class="task-list-items">

                        <!-- Task Item -->
                        <div class="card mb-0">
                            <div class="card-body p-3">
                                <small class="float-end text-muted">18 Jul 2018</small>
                                <span class="badge bg-danger">High</span>

                                <h5 class="mt-2 mb-2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">iOS App home page</a>
                                </h5>

                                <p class="mb-0">
                                    <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-briefcase-outline text-muted"></i>
                                        iOS
                                    </span>
                                    <span class="text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                        <b>74</b> Comments
                                    </span>
                                </p>

                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical font-18"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                    </div>
                                </div>

                                <p class="mb-0">
                                    <img src="assets/images/users/avatar-2.jpg" alt="user-img" class="avatar-xs rounded-circle me-1" />
                                    <span class="align-middle">Robert Carlile</span>
                                </p>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- Task Item End -->

                        <!-- Task Item -->
                        <div class="card mb-0">
                            <div class="card-body p-3">
                                <small class="float-end text-muted">18 Jul 2018</small>
                                <span class="badge bg-secondary text-light">Medium</span>

                                <h5 class="mt-2 mb-2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">Topnav layout design</a>
                                </h5>

                                <p class="mb-0">
                                    <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-briefcase-outline text-muted"></i>
                                        Hyper
                                    </span>
                                    <span class="text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                        <b>28</b> Comments
                                    </span>
                                </p>

                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical font-18"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                    </div>
                                </div>

                                <p class="mb-0">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="avatar-xs rounded-circle me-1" />
                                    <span class="align-middle">Coder Themes</span>
                                </p>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- Task Item End -->

                        <!-- Task Item -->
                        <div class="card mb-0">
                            <div class="card-body p-3">
                                <small class="float-end text-muted">11 Jul 2018</small>
                                <span class="badge bg-success">Low</span>

                                <h5 class="mt-2 mb-2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">Invite user to a project</a>
                                </h5>

                                <p class="mb-0">
                                    <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-briefcase-outline text-muted"></i>
                                        CRM
                                    </span>
                                    <span class="text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                        <b>68</b> Comments
                                    </span>
                                </p>

                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical font-18"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                    </div>
                                </div>

                                <p class="mb-0">
                                    <img src="assets/images/users/avatar-3.jpg" alt="user-img" class="avatar-xs rounded-circle me-1" />
                                    <span class="align-middle">Lucas Hardy</span>
                                </p>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- Task Item End -->

                    </div> <!-- end company-list-1-->
                </div>

                <div class="tasks">
                    <h5 class="mt-0 task-header text-uppercase">In Progress (2)</h5>

                    <div id="task-list-two" class="task-list-items">

                        <!-- Task Item -->
                        <div class="card mb-0">
                            <div class="card-body p-3">
                                <small class="float-end text-muted">22 Jun 2018</small>
                                <span class="badge bg-secondary text-light">Medium</span>

                                <h5 class="mt-2 mb-2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">Write a release note</a>
                                </h5>

                                <p class="mb-0">
                                    <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-briefcase-outline text-muted"></i>
                                        Hyper
                                    </span>
                                    <span class="text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                        <b>17</b> Comments
                                    </span>
                                </p>

                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical font-18"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                    </div>
                                </div>

                                <p class="mb-0">
                                    <img src="assets/images/users/avatar-5.jpg" alt="user-img" class="avatar-xs rounded-circle me-1" />
                                    <span class="align-middle">Sean White</span>
                                </p>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- Task Item End -->

                        <!-- Task Item -->
                        <div class="card mb-0">
                            <div class="card-body p-3">
                                <small class="float-end text-muted">19 Jun 2018</small>
                                <span class="badge bg-success">Low</span>

                                <h5 class="mt-2 mb-2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">Enable analytics tracking</a>
                                </h5>

                                <p class="mb-0">
                                    <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-briefcase-outline text-muted"></i>
                                        CRM
                                    </span>
                                    <span class="text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                        <b>48</b> Comments
                                    </span>
                                </p>

                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical font-18"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                    </div>
                                </div>

                                <p class="mb-0">
                                    <img src="assets/images/users/avatar-6.jpg" alt="user-img" class="avatar-xs rounded-circle me-1" />
                                    <span class="align-middle">Louis Allen</span>
                                </p>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- Task Item End -->

                    </div> <!-- end company-list-2-->
                </div>


                <div class="tasks">
                    <h5 class="mt-0 task-header text-uppercase">Review (4)</h5>
                    <div id="task-list-three" class="task-list-items">

                        <!-- Task Item -->
                        <div class="card mb-0">
                            <div class="card-body p-3">
                                <small class="float-end text-muted">2 May 2018</small>
                                <span class="badge bg-danger">High</span>

                                <h5 class="mt-2 mb-2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">Kanban board design</a>
                                </h5>

                                <p class="mb-0">
                                    <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-briefcase-outline text-muted"></i>
                                        CRM
                                    </span>
                                    <span class="text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                        <b>65</b> Comments
                                    </span>
                                </p>

                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical font-18"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                    </div>
                                </div>

                                <p class="mb-0">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="avatar-xs rounded-circle me-1" />
                                    <span class="align-middle">Coder Themes</span>
                                </p>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- Task Item End -->

                        <!-- Task Item -->
                        <div class="card mb-0">
                            <div class="card-body p-3">
                                <small class="float-end text-muted">7 May 2018</small>
                                <span class="badge bg-secondary text-light">Medium</span>

                                <h5 class="mt-2 mb-2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">Code HTML email template</a>
                                </h5>

                                <p class="mb-0">
                                    <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-briefcase-outline text-muted"></i>
                                        CRM
                                    </span>
                                    <span class="text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                        <b>106</b> Comments
                                    </span>
                                </p>

                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical font-18"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                    </div>
                                </div>

                                <p class="mb-0">
                                    <img src="assets/images/users/avatar-9.jpg" alt="user-img" class="avatar-xs rounded-circle me-1" />
                                    <span class="align-middle">Zak Turnbull</span>
                                </p>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- Task Item End -->

                        <!-- Task Item -->
                        <div class="card mb-0">
                            <div class="card-body p-3">
                                <small class="float-end text-muted">8 Jul 2018</small>
                                <span class="badge bg-secondary text-light">Medium</span>

                                <h5 class="mt-2 mb-2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">Brand logo design</a>
                                </h5>

                                <p class="mb-0">
                                    <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-briefcase-outline text-muted"></i>
                                        Design
                                    </span>
                                    <span class="text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                        <b>95</b> Comments
                                    </span>
                                </p>

                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical font-18"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                    </div>
                                </div>

                                <p class="mb-0">
                                    <img src="assets/images/users/avatar-8.jpg" alt="user-img" class="avatar-xs rounded-circle me-1" />
                                    <span class="align-middle">Lily Parkin</span>
                                </p>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- Task Item End -->

                        <!-- Task Item -->
                        <div class="card mb-0">
                            <div class="card-body p-3">
                                <small class="float-end text-muted">22 Jul 2018</small>
                                <span class="badge bg-danger">High</span>

                                <h5 class="mt-2 mb-2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">Improve animation loader</a>
                                </h5>

                                <p class="mb-0">
                                    <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-briefcase-outline text-muted"></i>
                                        CRM
                                    </span>
                                    <span class="text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                        <b>39</b> Comments
                                    </span>
                                </p>

                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical font-18"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                    </div>
                                </div>

                                <p class="mb-0">
                                    <img src="assets/images/users/avatar-4.jpg" alt="user-img" class="avatar-xs rounded-circle me-1" />
                                    <span class="align-middle">Riley Steele</span>
                                </p>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- Task Item End -->

                    </div> <!-- end company-list-3-->
                </div>

                <div class="tasks">
                    <h5 class="mt-0 task-header text-uppercase">Done (1)</h5>
                    <div id="task-list-four" class="task-list-items">

                        <!-- Task Item -->
                        <div class="card mb-0">
                            <div class="card-body p-3">
                                <small class="float-end text-muted">16 Jul 2018</small>
                                <span class="badge bg-success">Low</span>

                                <h5 class="mt-2 mb-2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#task-detail-modal" class="text-body">Dashboard design</a>
                                </h5>

                                <p class="mb-0">
                                    <span class="pe-2 text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-briefcase-outline text-muted"></i>
                                        Hyper
                                    </span>
                                    <span class="text-nowrap mb-2 d-inline-block">
                                        <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                        <b>287</b> Comments
                                    </span>
                                </p>

                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle text-muted arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical font-18"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-plus-circle-outline me-1"></i>Add People</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                    </div>
                                </div>

                                <p class="mb-0">
                                    <img src="assets/images/users/avatar-10.jpg" alt="user-img" class="avatar-xs rounded-circle me-1" />
                                    <span class="align-middle">Harvey Dickinson</span>
                                </p>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- Task Item End -->

                    </div> <!-- end company-list-4-->
                </div>

            </div> <!-- end .board-->
        </div> <!-- end col -->
    </div>
    <!-- end row-->

</div>

<div class="modal fade task-modal-content" id="add-new-task-modal" tabindex="-1" role="dialog" aria-labelledby="NewTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="NewTaskModalLabel">Create New Task</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="p-2">
                    <div class="mb-3">
                        <label class="form-label">Project</label>
                        <select class="form-select form-control-light">
                            <option>Select</option>
                            <option>Hyper - Admin Dashboard</option>
                            <option>CRM - Design & Development</option>
                            <option>iOS - App Design</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="task-title" class="form-label">Title</label>
                                <input type="text" class="form-control form-control-light" id="task-title" placeholder="Enter title">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="task-priority2" class="form-label">Priority</label>
                                <select class="form-select form-control-light" id="task-priority2">
                                    <option>Low</option>
                                    <option>Medium</option>
                                    <option>High</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="task-description" class="form-label">Description</label>
                        <textarea class="form-control form-control-light" id="task-description" rows="3"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="task-title" class="form-label">Assign To</label>
                                <select class="form-select form-control-light" id="task-priority">
                                    <option>Coderthemes</option>
                                    <option>Robert Carlile</option>
                                    <option>Louis Allen</option>
                                    <option>Sean White</option>
                                    <option>Riley Steele</option>
                                    <option>Zak Turnbull</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="task-priority" class="form-label">Due Date</label>
                                <input type="text" class="form-control form-control-light" id="birthdatepicker" data-toggle="date-picker" data-single-date-picker="true">
                            </div>
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>
    ! function(r) {
        "use strict";

        function t() {
            this.$body = r("body")
        }
        t.prototype.init = function() {
            r('[data-plugin="dragula"]').each(function() {
                var t = r(this).data("containers"),
                    a = [];
                if (t)
                    for (var n = 0; n < t.length; n++) a.push(r("#" + t[n])[0]);
                else a = [r(this)[0]];
                var i = r(this).data("handleclass");
                i ? dragula(a, {
                    moves: function(t, a, n) {
                        return n.classList.contains(i);
                    }
                }) : dragula(a)
            })
        }, r.Dragula = new t, r.Dragula.Constructor = t
    }(window.jQuery),
    function() {

        "use strict";
        window.jQuery.Dragula.init()
    }();
</script>