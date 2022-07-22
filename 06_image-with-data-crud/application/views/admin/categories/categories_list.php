<!--Start Dashboard Content-->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4>Categories List</h4>
                        <a href="<?= base_url("admin/categories/insert_area") ?>" class="btn btn-warning">ADD PRODUCT</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <div class="card-body">
                        <table id="example" class="display rounded table table-striped" style="width:100%">
                            <thead>
                                <tr class="bg-danger">
                                    <th class="text-dark text-center">Serial</th>
                                    <th class="text-dark text-center">Product Image</th>
                                    <th class="text-dark text-center">Product Name</th>
                                    <th class="text-dark text-center">Product Description</th>
                                    <th class="text-dark text-center">Product Price</th>
                                    <th class="text-dark text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($get_all_data->num_rows() > 0) {
                                    $i = 1;
                                    foreach ($get_all_data->result() as $value) {
                                ?>
                                        <tr class="text-center">
                                            <td class="text-white"><?= $i ?></td>
                                            <td class="text-white">
                                                <img src="<?php echo base_url('images/') . $value->image; ?>" alt="" style="width: 40px; height: 40px; border-radius: 10%; border: 2px solid black;">
                                            </td>
                                            <td class="text-white"><?= $value->name ?></td>
                                            <td class="text-white"><?= $value->description ?></td>
                                            <td class="text-white"><?= $value->price ?></td>
                                            <td class="text-white">
                                                <a href="<?= base_url("admin/categories/data_edit/") ?><?= $value->id ?>" class="btn btn-info">Edit</a>
                                                <a href="<?= base_url("admin/categories/data_delete/". $value->id ) ?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                <?php
                                        $i++;
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Row-->

    <!--End Dashboard Content-->

    <!--start overlay-->
    <div class="overlay toggle-menu"></div>
    <!--end overlay-->

</div>
<!-- End container-fluid-->