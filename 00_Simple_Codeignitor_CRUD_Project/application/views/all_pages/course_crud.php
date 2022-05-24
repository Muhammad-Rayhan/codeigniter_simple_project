<div class="content-wrapper">
    <div class="container">
        <!-- =====Insert==== -->
        <?php
        if ($this->session->flashdata('status2')) {
        ?>
            <div class="alert alert-success text-center">
                <?php echo $this->session->flashdata('status2'); ?>
            </div>
        <?php
        }
        ?>
        <!-- =========== -->
        <?php
        if ($this->session->flashdata('status3')) {
        ?>
            <div class="alert alert-danger text-center">
                <?php echo $this->session->flashdata('status3'); ?>
            </div>
        <?php
        }
        ?>
        <!-- =====Insert====== -->
        <!-- =====Update Message start====== -->
        <?php
        if ($this->session->flashdata('update')) {
        ?>
            <div class="alert alert-success text-center">
                <?php echo $this->session->flashdata('update'); ?>
            </div>
        <?php
        }
        ?>
        <?php
        if ($this->session->flashdata('failupdate')) {
        ?>
            <div class="alert alert-danger text-center">
                <?php echo $this->session->flashdata('failupdate'); ?>
            </div>
        <?php
        }
        ?>
        <!-- =====Update Message End====== -->
        <div class="row justify-content-center mt-5">
            <div class="col-12 border rounded py-2 px">
                <div class="d-flex justify-content-between ">
                    <h3 class="fw-bold">Course Details</h3>
                    <a href="#" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD</a>
                </div>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Serial ID</th>
                            <th scope="col">Department</th>
                            <th scope="col">Subject Code</th>
                            <th scope="col">Subject List</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--Foreach loop start-->
                        <?php foreach ($all_course as $value) : ?>
                            <tr>
                                <td><?php echo $value->serial_id; ?></td>
                                <!--$value->Data_table_feild_name.-->
                                <td><?php echo $value->department; ?></td>
                                <td><?php echo $value->subject_code; ?></td>
                                <td><?php echo $value->subject_list; ?></td>
                                <td>
                                    <a href="#" class="btn btn-success" onclick="editcourse(<?= $value->serial_id ?>);">Edit</a>
                                    <a href="<?php echo base_url(); ?>admin_controller/coursedelete/<?php echo $value->serial_id; ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <!--Foreach loop End-->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- ===========================Course add Modal=============================== -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo base_url(); ?>add-course" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Department</label>
                                <input type="text" class="form-control" id="" aria-describedby="IdHelp" name="department">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Department Code</label>
                                <input type="text" class="form-control" id="" aria-describedby="IdHelp" name="departmentcode">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Subject List</label>
                                <input type="text" class="form-control" id="" aria-describedby="IdHelp" name="subjectlist">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Add Course">
                </div>
            </form>
        </div>
    </div>
</div>


<!-- ===========================Course Edit Modal=============================== -->
<div class="modal fade" id="editcourse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Course</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo base_url() ?>admin_controller/updatecourse/<?php echo $value->serial_id; ?>" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Department</label>
                                <input type="text" class="form-control" id="" aria-describedby="IdHelp" name="department">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Department Code</label>
                                <input type="text" class="form-control" id="" aria-describedby="IdHelp" name="departmentcode">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Subject List</label>
                                <input type="text" class="form-control" id="" aria-describedby="IdHelp" name="subjectlist">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Add Course">
                </div>
            </form>
        </div>
    </div>
</div>



<!-- ======================================Edit course====================================== -->
<script>
    // at first make a one click function on edit button

    function editcourse(serial_id) { //serial_number = catch data table id.   //editcourse = onclick="editcourse(<?= $value->serial_id ?>);"
        $('#editcourse').modal('show'); //#editmodal = edit modal id name
        $.get('<?php echo base_url() . 'admin_controller/editcourse/'; ?>' + serial_id, function(data) { //+ ar por amader id ja diye catch ta dite hobe.
            var formated_data = JSON.parse(data);
            console.log(formated_data);
            $('input[name=department]').val(formated_data.department); //name=studentid(input name value) formated_data.student_id(data table feild name)
            $('input[name=departmentcode]').val(formated_data.subject_code); //name=studentid(input name value) formated_data.student_id(data table feild name)
            $('input[name=subjectlist]').val(formated_data.subject_list);
        });
    }
</script>