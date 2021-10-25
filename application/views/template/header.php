<style>
    .brand-tip{
        font-size: 16px;
    }
</style>

<!-- START HEADER-->
<header class="header">
    <div class="page-brand">
        <span class="brand">
            <span class="brand-tip">Panduan Gizi Makan Bayi</span>
        </span>
    </div>
    <div class="flexbox flex-1">
        <!-- START TOP-LEFT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li>
                <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
            </li>
            <li>
                <!-- <form class="navbar-search" action="javascript:;">
                    <div class="rel">
                        <span class="search-icon"><i class="ti-search"></i></span>
                        <input class="form-control" placeholder="Search here...">
                    </div>
                </form> -->
            </li>
        </ul>
        <!-- END TOP-LEFT TOOLBAR-->
        <!-- START TOP-RIGHT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li class="dropdown dropdown-user">
                <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                    <img src="<?= base_url('assets/') ?>img/admin-avatar.png" />
                    <span></span><?= $nama ?></a>
                <ul class="dropdown dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="<?= base_url('login/logout') ?>"><i class="fa fa-power-off"></i>Logout</a>
                </ul>
            </li>
        </ul>
        <!-- END TOP-RIGHT TOOLBAR-->
    </div>
</header>
<!-- END HEADER-->