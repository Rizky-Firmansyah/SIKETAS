<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #313145">
    <!-- Sidebar - Brand -->
    {{-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" width="40" height="40">
        </div>
        <div class="sidebar-brand-text mx-3">SIKETAS</div>
    </a> --}}
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
            <i class="far fa-user-circle fa-lg"></i>
        </div>
        @auth
            <div class="sidebar-brand-text mx-3">
                <span>
                    {{ auth()->user()->name }}
                </span>
            </div>
        @endauth
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

    <!-- Button Data Panen Anggota  -->
    <li class="nav-item">
        <a class="nav-link" href="tanggal-panen-anggota">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Registrasi Anggota Baru
        </a>
    </li>
    <!-- Button Data Panen Anggota  -->
    <li class="nav-item">
        <a class="nav-link" href="tanggal-panen-anggota">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Data Panen Anggota
        </a>
    </li>
    <!-- Button Log Out -->
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
