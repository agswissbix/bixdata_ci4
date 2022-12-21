<!-- dragula js-->
<script src="assets/vendor/dragula/dragula.min.js"></script>





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
                <?php
                foreach ($kanban_records as $kanban_state => $kanban_state_records) {

                ?>
                    <div class="tasks" data-status="<?= $kanban_state ?>">
                        <h5 class="mt-0 task-header"><?= $kanban_state ?></h5>
                        <?php
                        foreach ($kanban_state_records as $kanban_state_record_key => $kanban_recordcard_mini) {
                        ?>
                        <div id="task-list-two" class="task-list-items">
                            <div class="card mb-0">
                                <div class="card-body p-3">
                                    <?= $kanban_recordcard_mini ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>


                    </div>
                <?php
                }
                ?>



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
    function update_status(el) {
        alert($(el).data('recordid'));
        var div_col = $(el).closest('.tasks');
        alert($(div_col).data('status'));

    }

    var tsi_id = [];

    $(".task-list-items").each(function(index) {
        var element_id = $(this).attr("id");
        tsi_id.push(document.getElementById(element_id));
    });
    console.log('Kanban debug:');
    console.log(tsi_id);

    dragula(tsi_id).on('drop', function(el) {
        update_status(el);
    });
</script>