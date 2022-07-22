<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title ?></title>
    <!-- loader-->
    <!-- <link href="<?= base_url() ?>assets/css/pace.min.css" rel="stylesheet" /> -->
    <!-- <script src="<?= base_url() ?>assets/js/pace.min.js"></script> -->
    <!--favicon-->
    <link rel="icon" href="<?= base_url() ?>assets/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="<?= base_url() ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="<?= base_url() ?>assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <!-- Data table-->

    <!-- animate CSS-->
    <link href="<?= base_url() ?>assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="<?= base_url() ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="<?= base_url() ?>assets/css/sidebar-menu.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- Custom Style-->
    <link href="<?= base_url() ?>assets/css/app-style.css" rel="stylesheet" />

    <style>
        table,
        th,
        td {
            border: 1px solid white;
            border-collapse: collapse;
        }
    </style>

</head>

<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <?php $this->load->view("admin/layout/sidebar"); ?>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <!-- Header Section Start -->
            <?php $this->load->view("admin/layout/header"); ?>
            <!-- Header Section End -->
        </header>
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper" style="padding-bottom: 22%;">
            <!-- Main Body Section Start -->
            <?php $this->load->view($body); ?>
            <!-- Main Body Section End -->
        </div>
        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <?php $this->load->view("admin/layout/footer") ?>
        <!--End footer-->

        <!--start color switcher-->
        <div class="right-sidebar">
            <div class="switcher-icon">
                <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
            </div>
            <div class="right-sidebar-content">

                <p class="mb-0">Gaussion Texture</p>
                <hr>

                <ul class="switcher">
                    <li id="theme1"></li>
                    <li id="theme2"></li>
                    <li id="theme3"></li>
                    <li id="theme4"></li>
                    <li id="theme5"></li>
                    <li id="theme6"></li>
                </ul>

                <p class="mb-0">Gradient Background</p>
                <hr>

                <ul class="switcher">
                    <li id="theme7"></li>
                    <li id="theme8"></li>
                    <li id="theme9"></li>
                    <li id="theme10"></li>
                    <li id="theme11"></li>
                    <li id="theme12"></li>
                    <li id="theme13"></li>
                    <li id="theme14"></li>
                    <li id="theme15"></li>
                </ul>

            </div>
        </div>
        <!--end color switcher-->

    </div>
    <!--End wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="<?= base_url() ?>assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="<?= base_url() ?>assets/js/sidebar-menu.js"></script>
    <!-- loader scripts -->
    <!-- <script src="<?= base_url() ?>assets/js/jquery.loading-indicator.js"></script> -->
    <!-- Custom scripts -->
    <script src="<?= base_url() ?>assets/js/app-script.js"></script>
    <!-- Data table -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <!-- Chart js -->
    <script src="<?= base_url() ?>assets/plugins/Chart.js/Chart.min.js"></script>
    <!-- Index js -->
    <script src="<?= base_url() ?>assets/js/index.js"></script>


</body>

</html>


<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>