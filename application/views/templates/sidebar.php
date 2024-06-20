<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

        <div class="sidebar-brand-icon rotate-n-15"> <i class="fas fa-book"></i> </div>
        <div class="sidebar-brand-text mx-3">Pustaka Booking</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item active">
    <li class="nav-item"> <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
    <i class="fa fa-reply-all" aria-hidden="true"></i>
            <span>Tampilan Awal</span></a> </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <!-- Heading -->
    <div class="sidebar-heading"> Master Data </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">

        <!-- Nav Item - Dashboard -->
    <li class="nav-item"> <a class="nav-link pb-0" href="<?= base_url('buku/kategori'); ?>">
    <i class="fa fa-book" aria-hidden="true"></i>
            <span>Kategori Buku</span></a> </li>
    <li class="nav-item"> <a class="nav-link pb-0" href="<?= base_url('buku'); ?>">
    <i class="fa fa-map" aria-hidden="true"></i>
            <span>Data Buku</span></a> </li>
    <li class="nav-item"> <a class="nav-link pb-0" href="<?= base_url('user/anggota'); ?>">
    <i class="fa fa-id-card" aria-hidden="true"></i>
            <span>Data Anggota</span></a> </li>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('autentifikasi/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>

    </div>
</ul>

<!-- End of Sidebar -- >