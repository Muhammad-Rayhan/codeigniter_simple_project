<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Dashboard Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">




    <!-- <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .nav-link {
            color: #262626;
            ;
        }

        .nav-link:focus,
        .nav-link:hover {
            color: #262626;
            ;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>
    <!-- Hearder call here -->
    <?php $this->load->view('frontend/layout/header') ?>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar call here -->
            <?php $this->load->view('frontend/layout/sidebar') ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="background-color: #eaeff9;">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <button type="button" class="btn btn-primary clickButton" data-bs-toggle="modal" data-bs-target="#exampleModal">Data Insert</button>
                    </div>
                </div>

                <table id="example" class="display table" style="padding-top: 10px;">
                    <thead class="bg-info">
                        <tr>
                            <td class="text-center">Serial</td>
                            <td class="text-center">Name</td>
                            <td class="text-center">Email</td>
                            <td class="text-center">Message</td>
                            <td class="text-center">Action</td>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        if ($get_all_data->num_rows() > 0) {
                            $i = 1;
                            foreach ($get_all_data->result() as $value) {
                        ?>
                                <tr>
                                    <td><?php echo $i ?></td>
                                    <td><?php echo $value->name ?></td>
                                    <td><?php echo $value->email ?></td>
                                    <td><?php echo $value->details ?></td>
                                    <td>
                                        <a href="#" onclick="dataEdit(<?php echo $value->id ?>)" class="btn btn-success px-4">Edit</a>
                                        <a href="#" onclick="dataDelete(<?php echo $value->id ?>)" class="btn btn-danger px-4">Delete</a>
                                    </td>
                                </tr>
                        <?php
                                $i++;
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <!-- Body Content Here -->
            </main>
        </div>
    </div>

    <!-- =======================================================Modal======================================================= -->
    <!-- Modal -->
    <form id="formId">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Hidden ID: </label>
                            <input type="text" class="form-control" value="0" name="id">
                        </div>
                        <div class="form-group">
                            <label>Name: </label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label>Email: </label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>Message: </label>
                            <input type="text" class="form-control" name="details">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary btnTitle">Insery</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="dashboard.js"></script>

    <script>
        // $(document).ready(function() {
        //     $('#example').DataTable({
        //         "ajax": <?php echo base_url("frontend/ajaxCrudController/fatchAllDataFormDatabase"); ?>,
        //         "order": [],
        //     });
        // });

        $(".clickButton").click(function() {
            $(".btnTitle").html("Insert");
        });

        $(document).ready(function() {
            $('#example').DataTable();
        });

        //Ajax Data Insert Code
        $("#formId").submit(function(event) {
            event.preventDefault();

            let id = $("input[name=id]").val()
            if (id == 0) {
                $.ajax({
                    url: '<?php echo base_url("index.php/frontend/ajaxCrudController/dataInsert") ?>',
                    type: 'post',
                    data: $(this).serialize(),
                    async: false, //Uporer kaj  success hole nicer kaj korbe onnothai nicer kaj korbe na.
                    dataType: 'json',
                    success: function(data) {
                        // let dataResult = JSON.parse(data)
                        // setAlert(dataResult.alert, dataResult.message);
                        $("#exampleModal").modal("hide");
                        $("#formId")[0].reset();
                        // alert("Data Insert Successfully!");
                        // $("#example").DataTable().ajax.reload();
                    },
                    // error:function()  //Optional
                    // {
                    //     alert("Data Not Found!");
                    // }
                });
            } else {
                $.ajax({
                    url: '<?php echo base_url("index.php/frontend/ajaxCrudController/dataUpdate/") ?>' + id,
                    type: 'post',
                    data: $(this).serialize(),
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        $("#exampleModal").modal("hide");
                        alert("Data Update Successfully!");
                    }
                });
            }
        });


        function dataEdit(id) {
            $(".btnTitle").html("Update");
            $("#exampleModal").modal("show");
            $.ajax({
                url: '<?php echo base_url("index.php/frontend/ajaxCrudController/dataEdit/") ?>' + id,
                type: 'post',
                data: {
                    id: id,
                },
                dataType: 'json',
                success: function(data) {
                    var data = data;

                    $("input[name=id]").val(data.id);
                    $("input[name=name]").val(data.name);
                    $("input[name=email]").val(data.email);
                    $("input[name=details]").val(data.details);
                }
            });
        }

        function dataDelete(id) {
            $.ajax({
                url: '<?php echo base_url("index.php/frontend/ajaxCrudController/dataDelete/") ?>' + id,
                type: 'post',
                data: {
                    id: id,
                },
                dataType: 'json',
                success: function(data) {
                    alert("Data Delete Successfully!");
                }
            });
        }
    </script>




    <!-- ==================================Sweet Alert Start================================== -->
    <!-- <script>
        function setAlert(alert, message) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: alert,
                title: message
            })
        }
    </script> -->
    <!-- ==================================Sweet Alert End==================================== -->




</body>

</html>