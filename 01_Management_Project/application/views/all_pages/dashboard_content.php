<!-- ==========Start Data Insert Messeage========== -->
<?php
if ($this->session->flashdata('insert_success')) {
?>
    <div class="alert alert-success text-center">
        <?php echo $this->session->flashdata('insert_success'); ?>
    </div>
<?php
}
?>
<?php
if ($this->session->flashdata('insert_error')) {
?>
    <div class="alert alert-danger text-center">
        <?php echo $this->session->flashdata('insert_error'); ?>
    </div>
<?php
}
?>
<!-- ==========End Data Insert Messeage========== -->

<!-- ==========Start Data Update Messeage========== -->
<?php
if ($this->session->flashdata('update_success')) {
?>
    <div class="alert alert-success text-center">
        <?php echo $this->session->flashdata('update_success'); ?>
    </div>
<?php
}
?>
<?php
if ($this->session->flashdata('update_error')) {
?>
    <div class="alert alert-danger text-center">
        <?php echo $this->session->flashdata('update_error'); ?>
    </div>
<?php
}
?>
<!-- ==========End Data Update Messeage========== -->
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
                    <th scope="col" class="fw-bold">Serial Number</th>
                    <th scope="col" class="fw-bold">Student Name</th>
                    <th scope="col" class="fw-bold">Student ID</th>
                    <th scope="col" class="fw-bold">Course</th>
                    <th scope="col" class="fw-bold">Email</th>
                    <th scope="col" class="fw-bold">Phone</th>
                    <th scope="col" class="fw-bold">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($getall_info as $value) { ?>
                    <!--$getall_info = Come from model $getdata['getall_info'] variable-->
                    <tr>
                        <td><?= $value->serial_number; ?></td>
                        <!--$value($getall_info as $value)->serial_number(data table feild name)-->
                        <td><?= $value->student_name; ?></td>
                        <td><?= $value->student_id; ?></td>
                        <td><?= $value->course; ?></td>
                        <td><?= $value->email; ?></td>
                        <td><?= $value->phone; ?></td>
                        <td>
                            <a href="#" class="btn btn-success" onclick="show(<?php echo $value->serial_number ?>);">Show</a>
                            <a href="#" class="btn btn-primary" onclick="edit(<?php echo $value->serial_number ?>);">Edit</a>
                            <!--edit() = Call json function name-->
                            <a href="#" class=" btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>



<!-- ################################################ Insert ############################################################ -->



<!-- ====================Start Insert Modal==================== -->
<!--Data Insert Modal Start-->
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
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Student Name</label>
                                <input type="text" class="form-control" id="" aria-describedby="IdHelp" name="studentname">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Student ID</label>
                                <input type="text" class="form-control" id="" aria-describedby="IdHelp" name="studentid">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Course</label>
                                <select class="form-select " aria-label="Default select example" style="padding: .7rem 2.25rem .375rem .75rem;" name="course">
                                    <option selected>Select Your Course</option>
                                    <option value="Computer">Computer</option>
                                    <option value="Architecture">Architecture</option>
                                    <option value="Civil">Civil</option>
                                    <option value="Chemical & Food">Chemical & Food</option>
                                    <option value="Electrical">Electrical</option>
                                    <option value="ElectronicsEnvironmental">ElectronicsEnvironmental</option>
                                    <option value="Environmental">Environmental</option>
                                    <option value="Mechanical">Mechanical</option>
                                    <option value="Power (Automobile & RA)">Power (Automobile & RA)</option>
                                    <option value="NonTech Dept.">NonTech Dept.</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" id="" aria-describedby="FileHelp" name="email">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="" aria-describedby="FileHelp" name="phone">
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
<!-- ====================End Insert Modal==================== -->



<!-- ################################################ Edit ############################################################ -->



<!-- ====================Start Edit Modal==================== -->
<!--Data Insert Modal Start-->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('update') ?>" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <input type="hidden" name="edit_id" id="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Student Name</label>
                                <input type="text" class="form-control" id="" aria-describedby="IdHelp" name="studentname">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Student ID</label>
                                <input type="text" class="form-control" id="" aria-describedby="IdHelp" name="studentid">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Course</label>
                                <select class="form-select " aria-label="Default select example" style="padding: .7rem 2.25rem .375rem .75rem;" name="course">
                                    <option selected>Select Your Course</option>
                                    <option value="Computer">Computer</option>
                                    <option value="Architecture">Architecture</option>
                                    <option value="Civil">Civil</option>
                                    <option value="Chemical & Food">Chemical & Food</option>
                                    <option value="Electrical">Electrical</option>
                                    <option value="ElectronicsEnvironmental">ElectronicsEnvironmental</option>
                                    <option value="Environmental">Environmental</option>
                                    <option value="Mechanical">Mechanical</option>
                                    <option value="Power (Automobile & RA)">Power (Automobile & RA)</option>
                                    <option value="NonTech Dept.">NonTech Dept.</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" id="" aria-describedby="FileHelp" name="email">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="" aria-describedby="FileHelp" name="phone">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Update">
                </div>
            </form>
        </div>
    </div>
</div>
<!--Data Insert Modal End-->
<!-- ====================End Edit Modal==================== -->
<!-- ====================Start Edit Modal Json Code==================== -->
<script>
    //make sure jquery link declear on js link
    // At first make sure our edit button have a one click function like [ onclick="edit(<?= $value->serial_number ?>);" = $value(our foreach key value ariable name)->serial_number(Our data table id feild name) ]
    function edit(serial_number) { //edit(serial_number) = edit button oneclick function name(serial_number = Catch our data table id $value->serial_number) 
        $('#editmodal').modal('show'); //Show modal on this page declear by id  #editmodal = modal id name.
        $.get('<?php echo base_url() . 'main/editstudent_info/'; ?>' + serial_number, function(data) {
            var formated_data = JSON.parse(data);
            console.log(formated_data);
            $('input[name=edit_id]').val(formated_data.serial_number);
            $('input[name=studentname]').val(formated_data.student_name); //name=studentname(input name value) formated_data.student_name(data table feild name)
            $('input[name=studentid]').val(formated_data.student_id);
            $('select[name=course]').val(formated_data.course);
            $('input[name=email]').val(formated_data.email);
            $('input[name=phone]').val(formated_data.phone);
            // $('textarea[name=price]').val(formated_data.product_price);  if show text area value than at first declear textarea
        });
    }
</script>
<!-- ====================End Edit Modal Json Code==================== -->



<!-- ################################################## Show ########################################################## -->



<!-- ====================Start Show Modal==================== -->
<!--Data Show Modal Start-->
<div class="modal fade" id="showmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Show Student Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card" style="width: 100%; margin-bottom: 0px;">
                <img src="assets/images/aaron-burden-QJDzYT_K8Xg-unsplash.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                    <a href="#" class="btn btn-primary" onclick="add_course(<?= $value->serial_number ?>);">ADD COURSE</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Data Show Modal End-->
<!-- ====================End Show Modal==================== -->
<!-- ====================Start Show Modal Json Code==================== -->
<script>
    //make sure jquery link declear on js link
    // At first make sure our edit button have a one click function like [ onclick="edit(<?= $value->serial_number ?>);" = $value(our foreach key value ariable name)->serial_number(Our data table id feild name) ]
    function show(serial_number) { //edit(serial_number) = edit button oneclick function name(serial_number = Catch our data table id $value->serial_number) 
        $('#showmodal').modal('show'); //Show modal on this page declear by id  #editmodal = modal id name.
        $.get('<?php echo base_url() . 'main/editstudent_info/'; ?>' + serial_number, function(data) {
            var formated_data = JSON.parse(data);
            console.log(formated_data);
            $('input[name=edit_id_course]').val(serial_number);
            // $('input[name=studentname]').val(formated_data.student_name); //name=studentname(input name value) formated_data.student_name(data table feild name)
            // $('input[name=studentid]').val(formated_data.student_id);
            // $('select[name=course]').val(formated_data.course);
            // $('input[name=email]').val(formated_data.email);
            // $('input[name=phone]').val(formated_data.phone);
            // $('textarea[name=price]').val(formated_data.product_price);  if show text area value than at first declear textarea
        });
    }
</script>
<!-- ====================End Show Modal Json Code==================== -->





<!-- ################################################## Add Course ########################################################## -->





<!-- ====================Start Show Modal==================== -->
<!--Data Show Modal Start-->
<div class="modal fade" id="addcourse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url() ?>added-course" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <input type="text" name="edit_id_course" id="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="" class="form-label">Course</label>
                                <select class="form-select " aria-label="Default select example" style="padding: .7rem 2.25rem .375rem .75rem;" name="addcourse">
                                    <?php foreach ($getallcourse as $value) : ?>
                                        <option value="<?= $value->serial_number ?>"><?= $value->course_list ?></option>
                                    <?php endforeach; ?>
                                </select>
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
<!--Data Show Modal End-->
<!-- ====================End Show Modal==================== -->
<!-- ====================Start Add Course Modal Json Code==================== -->
<script>
    //make sure jquery link declear on js link
    // At first make sure our edit button have a one click function like [ onclick="edit(<?= $value->serial_number ?>);" = $value(our foreach key value ariable name)->serial_number(Our data table id feild name) ]
    function add_course(serial_number) { //edit(serial_number) = edit button oneclick function name(serial_number = Catch our data table id $value->serial_number) 
        $('#addcourse').modal('show'); //Show modal on this page declear by id  #editmodal = modal id name.
        $('#showmodal').modal('hide');
        $.get('<?php echo base_url() . 'main/select_course/'; ?>' + serial_number, function(data) {
            var formated_data = JSON.parse(data);
            console.log(formated_data);
            $('input[name=edit_id_course]').val(formated_data.serial_number);
            // $('input[name=studentname]').val(formated_data.student_name); //name=studentname(input name value) formated_data.student_name(data table feild name)
            // $('input[name=studentid]').val(formated_data.student_id);
            // $('select[name=course]').val(formated_data.course);
            // $('input[name=email]').val(formated_data.email);
            // $('input[name=phone]').val(formated_data.phone);
            // $('textarea[name=price]').val(formated_data.product_price);  if show text area value than at first declear textarea
        });
    }
</script>
<!-- ====================End Add Course Modal Json Code==================== -->