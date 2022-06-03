<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="<?= base_url()?>assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="<?= base_url()?>assets/images/logo-dark.png" alt="" height="22">
            </span>
        </a>

        <a href="index.html" class="logo logo-light">
            <span class="logo-lg">
                <img src="<?= base_url()?>assets/images/logo-light.png" alt="" height="22">
            </span>
            <span class="logo-sm">
                <img src="<?= base_url()?>assets/images/logo-sm-light.png" alt="" height="22">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-dashboards">Dashboards</li>

                <li>
                    <a href="index.html">
                        <i class="icon nav-icon" data-feather="monitor"></i>
                        <span class="menu-item" data-key="t-sales">Sales</span>
                        <span class="badge rounded-pill badge-soft-secondary">5+</span>
                    </a>
                </li>

                <li>
                    <a href="dashboards-analytics.html">
                        <i class="icon nav-icon" data-feather="pie-chart"></i>
                        <span class="menu-item" data-key="t-analytics">Analytics</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="icon nav-icon" data-feather="book"></i>
                        <span class="menu-item" data-key="t-contacts">Contacts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="contacts-grid.html" data-key="t-user-grid">User Grid</a></li>
                        <li><a href="contacts-list.html" data-key="t-user-list">User List</a></li>
                        <li><a href="user-settings.html" data-key="t-user-settings">User Settings</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>