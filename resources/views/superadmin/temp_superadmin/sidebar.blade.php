<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #3A3737">

    {{-- <!-- Sidebar - Brand -->
    <div class="sidebar-brand d-flex flex-column align-items-center justify-content-center">
        <img src="{{ asset('assets/images/logo.png') }}" alt="" width="40" height="40">
    </div> --}}
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
            <i class="far fa-user-circle fa-lg"></i>
        </div>
        {{-- @auth --}}
        <div class="sidebar-brand-text mx-3">
            <span>
                Super Admin
                {{-- {{ auth()->user()->name }} --}}
            </span>
        </div>
        {{-- @endauth --}}
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Data Master</span>
        </a>
        <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/data-role">Data Role</a>
                <a class="collapse-item" href="/data-user">Data User</a>
                <a class="collapse-item" href="/data-sopir">Data Nama Sopir</a>
                <a class="collapse-item" href="/data-kendaraan">Data Kendaraan</a>
            </div>
        </div>
    </li>

    <!-- Tombol Laporan -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Laporan Hasil Panen
        </a>
    </li>

    <!-- Tombol Logout -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
