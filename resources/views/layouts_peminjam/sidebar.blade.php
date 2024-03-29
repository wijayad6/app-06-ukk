<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">APPUS <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider mb-3">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard_peminjam') }}">
        <i class="fas fa-fw fa-home"></i>
        <span>Beranda</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('peminjaman') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Peminjaman</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('koleksi') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Koleksi</span></a>
    </li>
    {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('koleksi') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Koleksi</span></a>
    </li> --}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
