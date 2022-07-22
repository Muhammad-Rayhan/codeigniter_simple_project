<!--Start Dashboard Content-->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-center align-items-center">
                        <h4>Edit & Update Image - Product Data in Codeigniter 3.x</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url("admin/categories/data_update/" . $product->id) ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input type="text" name="name" value="<?= $product->name ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Product Description</label>
                            <input type="text" name="description" value="<?= $product->description ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Product Price</label>
                            <input type="number" name="price" value="<?= $product->price ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="hidden" name="old_product_image" value="<?= $product->image ?>">
                            <input type="file" name="prod_image" class="form-control">
                            <div class="mt-3">
                                <img src="<?php echo base_url('images/') . $product->image; ?>" alt="" style="width: 60px; height: 60px; border-radius: 10%; border: 2px solid black;">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="product_update" class="btn btn-info px-3">Update</button>
                        </div>
                    </form>
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