<!--Start Dashboard Content-->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-center align-items-center">
                        <h4>Insert Image - Product Data in Codeigniter 3.x</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url("admin/categories/add_product") ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Product Description</label>
                            <input type="text" name="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Product Price</label>
                            <input type="number" name="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="prod_image" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="product_save" class="btn btn-info px-3">Save</button>
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