<!-- <!DOCTYPE html>
<html lang="en"> -->


<!-- Mirrored from www.urbanui.com/calmui/template/demo/vertical-compact/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Sep 2019 10:48:52 GMT -->

<!-- <head> -->
<!-- Required meta tags -->
<!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CalmUI Admin</title> -->
<!-- Bootstrap 5 link -->
<!-- Font awsome cdn link -->
<!-- plugins:css -->
<!-- endinject -->
<!-- Plugin css for this page -->
<!-- End plugin css for this page -->
<!-- inject:css -->
<!-- endinject -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/images/favicon.png" /> -->


<!-- </head> -->

<!-- <body class="sidebar-mini"> -->
<div class="content-wrapper">
    <?php
    if ($this->session->flashdata('status')) {
    ?>
        <div class="alert alert-success text-center">
            <?php echo $this->session->flashdata('status'); ?>
        </div>
    <?php
    }
    ?>
    <!-- ========= -->
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
    <!-- =========== -->
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
    <!-- =====Delete Message start====== -->
    <?php
    if ($this->session->flashdata('delete')) {
    ?>
        <div class="alert alert-success text-center">
            <?php echo $this->session->flashdata('delete'); ?>
        </div>
    <?php
    }
    ?>
    <?php
    if ($this->session->flashdata('faildelete')) {
    ?>
        <div class="alert alert-danger text-center">
            <?php echo $this->session->flashdata('faildelete'); ?>
        </div>
    <?php
    }
    ?>
    <!-- =====Delete Message End====== -->
    <!-- =====ADD Message start====== -->
    <?php
    if ($this->session->flashdata('add')) {
    ?>
        <div class="alert alert-success text-center">
            <?php echo $this->session->flashdata('add'); ?>
        </div>
    <?php
    }
    ?>
    <?php
    if ($this->session->flashdata('failadd')) {
    ?>
        <div class="alert alert-danger text-center">
            <?php echo $this->session->flashdata('failadd'); ?>
        </div>
    <?php
    }
    ?>
    <!-- =====ADD Message End====== -->
    <div class="row mt-3">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2>All Student Info:</h2>
                <form class="">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <a href="" class="btn btn-primary fw-bolder d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Student</a>
            </div>
            <hr>

            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th scope="col">Serial Number</th>
                        <!-- <th scope="col">Photo</th> -->
                        <th scope="col">Student ID</th>
                        <!-- <th scope="col">Title</th> -->
                        <th scope="col">Name</th>
                        <!-- <th scope="col">Email</th> -->
                        <th scope="col">Department</th>
                        <th scope="col">Major</th>
                        <th scope="col">Phone</th>
                        <th scope="col" class="ms-5">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <!--Foreach loop start-->
                    <?php foreach ($all_info as $value) : ?>
                        <tr>

                            <td><?php echo $value->serial_number; ?></td>
                            <!--$value->Data_table_feild_name.-->
                            <!-- <td></td> -->
                            <!--$value->Data_table_feild_name.-->
                            <td><?php echo $value->student_id; ?></td>
                            <td><?php echo $value->name; ?></td>
                            <td><?php echo $value->department; ?></td>
                            <td><?php echo $value->major; ?></td>
                            <td><?php echo $value->phone; ?></td>
                            <td>
                                <a href="#" class="btn btn-primary" onclick="view(<?= $value->serial_number ?>);">View</a>
                                <a href="#" class="btn btn-success" onclick="edit(<?= $value->serial_number ?>);">Edit</a>
                                <!--serial_number = data table feild name-->
                                <!--editbtn-->
                                <a href="<?php echo base_url(); ?>admin_controller/delete/<?php echo $value->serial_number; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <!--Foreach loop End-->
                </tbody>
            </table>
        </div>
    </div>
</div>

<!--Data Insert Modal Start-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo base_url(); ?>add-student" method="post">
                <div class="modal-body">
                    <div class="row">
                        <!-- <div class="col-12">
                            <div class="mb-3">
                                <label for="exampleInputFile1" class="form-label">Upload Image</label>
                                <input type="file" class="form-control" id="exampleInputFile1" aria-describedby="FileHelp" name="image">
                            </div>
                        </div> -->
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Student ID</label>
                                <input type="text" class="form-control" id="" aria-describedby="IdHelp" name="studentid">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <select class="form-select " aria-label="Default select example" style="padding: .7rem 2.25rem .375rem .75rem;" name="title">
                                    <option selected>Select Your Title</option>
                                    <option value="Md">Md</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Miss">Miss</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" id="" aria-describedby="FileHelp" name="name">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" id="" aria-describedby="FileHelp" name="email">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Department</label>
                                <select class="form-select " aria-label="Default select example" style="padding: .7rem 2.25rem .375rem .75rem;" name="department">
                                    <option selected>Select Your Department</option>
                                    <option value="Marketing">Marketing</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Major</label>
                                <select class="form-select " aria-label="Default select example" style="padding: .7rem 2.25rem .375rem .75rem;" name="major">
                                    <option selected>Select Your Major</option>
                                    <option value="SEM SEM Marketing">SEM Marketing</option>
                                    <option value="SEO Marketing">SEO Marketing</option>
                                    <option value="PPC Marketing">PPC Marketing</option>
                                    <option value="SMM Marketing">SMM Marketing</option>
                                    <option value="Content Marketing">Content Marketing</option>
                                    <option value="Email Marketing">Email Marketing</option>
                                    <option value="Influencer/Affiliate Marketing">Influencer/Affiliate Marketing</option>
                                    <option value="Viral Marketing">Viral Marketing</option>
                                    <option value="Radio Advertising">Radio Advertising</option>
                                    <option value="Television Advertising">Television Advertising</option>
                                    <option value="Mobile Advertising">Mobile Advertising</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="exampleInputFile1" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="exampleInputFile1" aria-describedby="FileHelp" name="phone">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="exampleInputFile1" class="form-label">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Add Student">
                </div>
            </form>
        </div>
    </div>
</div>
<!--Data Insert Modal End-->

<!-- ==========================================EDIT========================================== -->

<!--Data Edit Modal Start-->
<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo base_url() ?>admin_controller/update/<?php echo $value->serial_number; ?>" method="post">
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="serialid" id="editid">

                        <!-- <div class="col-12">
                            <div class="mb-3">
                                <label for="exampleInputFile1" class="form-label">Upload Image</label>
                                <input type="file" class="form-control" id="exampleInputFile1" aria-describedby="FileHelp" name="image">
                            </div>
                        </div> -->
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Student ID</label>
                                <input type="text" class="form-control" id="" aria-describedby="IdHelp" name="studentid" id="studentid">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <select class="form-select " aria-label="Default select example" style="padding: .7rem 2.25rem .375rem .75rem;" name="title" id="title">
                                    <option selected>Select Your Title</option>
                                    <option value="Md">Md</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Miss">Miss</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" id="" aria-describedby="FileHelp" name="name" id="name">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" id="" aria-describedby="FileHelp" name="email" id="email">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Department</label>
                                <select class="form-select " aria-label="Default select example" style="padding: .7rem 2.25rem .375rem .75rem;" name="department" id="department">
                                    <option selected>Select Your Department</option>
                                    <option value="Marketing">Marketing</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Major</label>
                                <select class="form-select " aria-label="Default select example" style="padding: .7rem 2.25rem .375rem .75rem;" name="major" id="major">
                                    <option selected>Select Your Major</option>
                                    <option value="SEM SEM Marketing">SEM Marketing</option>
                                    <option value="SEO Marketing">SEO Marketing</option>
                                    <option value="PPC Marketing">PPC Marketing</option>
                                    <option value="SMM Marketing">SMM Marketing</option>
                                    <option value="Content Marketing">Content Marketing</option>
                                    <option value="Email Marketing">Email Marketing</option>
                                    <option value="Influencer/Affiliate Marketing">Influencer/Affiliate Marketing</option>
                                    <option value="Viral Marketing">Viral Marketing</option>
                                    <option value="Radio Advertising">Radio Advertising</option>
                                    <option value="Television Advertising">Television Advertising</option>
                                    <option value="Mobile Advertising">Mobile Advertising</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="exampleInputFile1" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="exampleInputFile1" aria-describedby="FileHelp" name="phone">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="exampleInputFile1" class="form-label">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Update Student">
                </div>
            </form>
        </div>
    </div>
</div>
<!--Data Edit Modal End-->
<!-- ==========================================View========================================== -->

<!-- ==========================================ADD========================================== -->
<!--view Modal Start-->
<!-- Modal -->
<div class="modal fade" id="viewmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content" style="width:450px;">
            <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
            <!-- <form action="<?php echo base_url() ?>admin_controller/update/<?php echo $value->serial_number; ?>" method="post"> -->
            <div class="modal-body" style="padding:0px;">
                <div class="card" style="width: 100%;">
                    <img src="<?php echo base_url(); ?>/assets/images/students.jpg" class=" card-img-top" alt="..." style="height: 250px;">
                    <div class="card-body" style="padding: 0rem 1rem 1rem 1rem;">
                        <div class="mb-4 text-center text-dark">
                            <h2 style="border-bottom: 1px solid black;">STUDENT INFO</h2>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="card-title h2" style="margin-bottom: 0px; font-size: 1rem;">Name: <input name="name" style="border: none; margin-bottom: 5px;"></span>
                            <a href="#" onclick="add(<?= $value->serial_number ?>);" class="text-decoration-none fw-bolder bg-primary btn-primary px-2 py-1 rounded">ADD</a>
                        </div>
                        <span style="color: #4a4a4a;">Student ID: <input name="studentid" style="border: none; margin-bottom: 5px;"></span><br>
                        <span style="color: #4a4a4a;">Department: <input name="department" style="border: none; margin-bottom: 5px;"></span><br>
                        <span style="color: #4a4a4a;">Major: <input name="major" style="border: none; margin-bottom: 5px;"></span><br>
                        <span style="color: #4a4a4a;">Email: <input name="email" style="border: none; margin-bottom: 5px;"></span><br>
                        <span style="color: #4a4a4a;">Phone: <input name="phone" style="border: none; margin-bottom: 5px;"></span>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->

                        <!-- ======================Table====================== -->
                        <table class="table table-success mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <!-- <th scope="col">Student ID</th> -->
                                    <!-- <th scope="col">Department</th> -->
                                    <!-- <th scope="col">Major</th> -->
                                    <!-- <th scope="col">Email</th> -->
                                    <!-- <th scope="col">Phone</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <td><input name="serialid" style="border: none; margin-bottom: 5px; background: transparent;"></td>
                                <td><input name="name" style="border: none; margin-bottom: 5px; background: transparent;"></td>
                                <!-- <td><input name="department" style="border: none; margin-bottom: 5px; background: transparent;"></td> -->
                            </tbody>
                        </table>
                        <!-- ======================Table====================== -->
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Update Student">
                </div> -->
            <!-- </form> -->
        </div>
    </div>
</div>
<!--add Modal End-->

<!-- ==========================================ADD========================================== -->

<!--Data Edit Modal Start-->
<!-- Modal -->
<div class="modal fade" id="addmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php //echo base_url()
                            ?>admin_controller/Curse_update/<?php //echo $value->serial_number; 
                                                                                    ?>" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Course</label>
                                <!-- <input type="text" class="form-control" id="exampleInputFile1" aria-describedby="FileHelp" name="course"> -->
                                <select class="form-select " aria-label="Default select example" style="padding: .7rem 2.25rem .375rem .75rem;" name="course" id="course">
                                    <option selected>Select Your Department</option>
                                    <? //php foreach ($cource as $key) { 
                                    ?>
                                    <!-- <option value="<?= $key->serial_id ?>"><?= $key->department ?></option> -->
                                    <? //php } 
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="ADD">
                </div>
            </form>
        </div>
    </div>
</div>
<!--Data Edit Modal End-->


<script>
    // $(document).ready(function() {
    // $('.editbtn').on('click', function() { //'.editbtn' = original edit button class name declear.
    // $('#editmodal').modal('show'); //modal id. '#editmodal' =modal id name.

    // $tr = $(this).closest('tr');
    // var data = $tr.children("td").map(function() {
    //     return $(this).text();
    // }).get();

    // console.log(data);

    // $('#editid').val(data[0]);
    // $('#studentid').val(data[1]);
    // $('#title').val(data[2]);
    // $('#name').val(data[3]);
    // $('#email').val(data[4]);
    // $('#department').val(data[4]);
    // $('#major').val(data[4]);
    // $('#phone').val(data[4]);
    // $('#description').val(data[4]);

    //         });
    //     });
</script>


<!-- ======================================Edit====================================== -->
<script>
    // at first make a one click function on edit button

    function edit(serial_number) { //serial_number = catch data table id.  
        $('#editmodal').modal('show'); //#editmodal = edit modal id name
        $.get('<?php echo base_url() . 'admin_controller/editinfo/'; ?>' + serial_number, function(data) { //+ ar por amader id ja diye catch ta dite hobe.
            var formated_data = JSON.parse(data);
            console.log(formated_data);
            $('input[name=studentid]').val(formated_data.serial_number); //name=studentid(input name value) formated_data.student_id(data table feild name)
            $('input[name=studentid]').val(formated_data.student_id); //name=studentid(input name value) formated_data.student_id(data table feild name)
            $('select[name=title]').val(formated_data.title);
            $('input[name=name]').val(formated_data.name);
            $('input[name=email]').val(formated_data.email);
            $('select[name=department]').val(formated_data.department);
            $('select[name=major]').val(formated_data.major);
            $('input[name=phone]').val(formated_data.phone);
            $('textarea[name=description]').val(formated_data.description);
        });
    }
</script>
<!-- =======================================VIEW======================================== -->
<script>
    // at first make a one click function on edit button

    function view(serial_number) { //serial_number = catch data table id.  
        $('#viewmodel').modal('show'); //#editmodal = edit modal id name
        $.get('<?php echo base_url() . 'admin_controller/viewinfo/'; ?>' + serial_number, function(data) { //+ ar por amader id ja diye catch ta dite hobe.
            var formated_data = JSON.parse(data);
            console.log(formated_data);
            $('input[name=serialid]').val(formated_data.serial_number);
            // $('input[name=image]').val(formated_data.image);
            $('input[name=studentid]').val(formated_data.student_id); //name=studentid(input name value) formated_data.student_id(data table feild name)
            $('input[name=title]').val(formated_data.title);
            $('input[name=name]').val(formated_data.name);
            $('input[name=email]').val(formated_data.email);
            $('input[name=department]').val(formated_data.department);
            $('input[name=major]').val(formated_data.major);
            $('input[name=phone]').val(formated_data.phone);
            $('textarea[name=description]').val(formated_data.description);
        });
    }
</script>
<!-- ============================ADD========================================== -->
<script>
    // at first make a one click function on edit button

    function add(serial_number) { //serial_number = catch data table id.  
        $('#addmodal').modal('show');

        $('#viewmodel').modal('hide'); //When click add button than hide

        //#editmodal = edit modal id name
        $.get('<?php echo base_url() . 'admin_controller/select_ccdata/'; ?>' + serial_number, function(data) { //+ ar por amader id ja diye catch ta dite hobe.
            var formated_data = JSON.parse(data);
            console.log(formated_data);
            // $('input[name=serialid]').val(formated_data.serial_number);
            // $('input[name=image]').val(formated_data.image);
            //$('input[name=studentid]').val(formated_data.student_id); //name=studentid(input name value) formated_data.student_id(data table feild name)
            // $('input[name=title]').val(formated_data.title);
            // $('input[name=name]').val(formated_data.name);
            // $('input[name=email]').val(formated_data.email);
            // $('selecte[name=adddepartment]').val(formated_data.department);
            // $('select[name=addmajor]').val(formated_data.major);
            //$('input[name=phone]').val(formated_data.phone);
            //$('input[name=description]').val(formated_data.description);




            $('input[name=course]').val(formated_data.department);


        });
    }
</script>
<!-- Jquery 2.2.4 link -->
<!-- Bootstrap 5 link -->
<!-- plugins:js -->
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<!-- endinject -->
<!-- Custom js for this page-->
<!-- End custom js for this page-->
<!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/off-canvas.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/template.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/settings.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/todolist.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/dashboard.js"></script> -->

<!-- </body> -->


<!-- Mirrored from www.urbanui.com/calmui/template/demo/vertical-compact/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Sep 2019 10:49:15 GMT -->

<!-- </html> -->