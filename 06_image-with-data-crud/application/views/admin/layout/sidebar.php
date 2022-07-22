<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="index.html">
            <img src="<?= base_url() ?>assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            <h5 class="logo-text">Dashtreme Admin</h5>
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
            <a href="<?= base_url('admin/dashboard') ?>">
                <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a href="<?= base_url('admin/categories') ?>">
                <i class="zmdi zmdi-invert-colors"></i> <span>Manage Category</span>
            </a>
        </li>

        <li>
            <a href="<?= base_url('admin/categories/insert_area') ?>">
                <i class="zmdi zmdi-format-list-bulleted"></i> <span>Insert Area</span>
            </a>
        </li>

        <li>
            <a href="<?= base_url('admin/categories/data_edit') ?>">
                <i class="zmdi zmdi-grid"></i> <span>Edit Area</span>
            </a>
        </li>

        <li>
            <a href="calendar.html">
                <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
                <small class="badge float-right badge-light">New</small>
            </a>
        </li>
    </ul>

</div>