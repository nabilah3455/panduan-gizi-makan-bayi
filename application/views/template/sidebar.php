<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="<?= base_url('assets/') ?>/img/admin-avatar.png" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong"><?= $nama ?></div><small>Administrator</small>
            </div>
        </div>
        <ul class="side-menu metismenu">
            <li <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : ''; ?>>
                <a href="<?= base_url('dashboard') ?>"><i class="sidebar-item-icon fa fa-home"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="heading">MAIN MENU</li>
            <li <?= $this->uri->segment(1) == 'berita' ? 'class="active"' : ''; ?>>
                <a href="<?= base_url('berita'); ?>"><i class="sidebar-item-icon fa fa-newspaper-o"></i>
                    <span class="nav-label">Berita MPASI</span>
                </a>
            </li>
            <li <?= $this->uri->segment(1) == 'bahan' ? 'class="active"' : ''; ?>>
                <a href="<?= base_url('bahan'); ?>"><i class="sidebar-item-icon fa fa-cutlery"></i>
                    <span class="nav-label">Bahan MPASI</span>
                </a>
            </li>
            <li <?= $this->uri->segment(1) == 'menu' ? 'class="active"' : ''; ?>>
                <a href="<?= base_url('menu'); ?>"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Menu MPASI</span>
                </a>
            </li>
            <li <?= $this->uri->segment(1) == 'kalkulator' ? 'class="active"' : ''; ?>>
                <a href=<?= base_url('kalkulator'); ?>><i class="sidebar-item-icon fa fa-calculator"></i>
                    <span class="nav-label">Kalkulator Gizi</span>
                </a>
            </li>
            <!-- <li <?= $this->uri->segment(1) == 'admin' ? 'class="active"' : ''; ?>>
                <a href=<?= base_url('admin'); ?>><i class="sidebar-item-icon fa fa-users"></i>
                    <span class="nav-label">Data Admin</span>
                </a>
            </li> -->
            <li <?= $this->uri->segment(1) == 'login/logout' ? 'class="active"' : ''; ?>>
                <a href=<?= base_url('login/logout'); ?>><i class="sidebar-item-icon fa fa-sign-out"></i>
                    <span class="nav-label">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- END SIDEBAR-->