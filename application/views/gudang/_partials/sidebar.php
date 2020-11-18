<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('c_gudang') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
<!--     <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'barang' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Barang</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('barang/in') ?>">Barang Masuk</a>
            <a class="dropdown-item" href="<?php echo site_url('barang/out') ?>">Barang Keluar</a>
            <a class="dropdown-item" href="<?php echo site_url('barang') ?>">List Barang</a>
        </div>
    </li> -->

    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('c_gudang/barang_gd_msuk') ?>">
            <i class="far fa-arrow-alt-circle-down"></i>
            <span>Barang Masuk</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('c_gudang/barang_gd_kluar') ?>">
            <i class="fas fa-sign-in-alt"></i>
            <span>Barang Keluar</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('c_gudang/barang_gd') ?>">
            <i class="fas fa-box"></i>
            <span>List Barang</span></a>
    </li>

<!--     <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
    </li> -->
</ul>
