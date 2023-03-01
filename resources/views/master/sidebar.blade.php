<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('profilsekolahs.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Profil Sekolah</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('kepalasekolahs.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Kepala Sekolah</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('gurus.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Guru</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-folder"></i>
            <span>Murid</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('matapelajarans.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Mata Pelajaran</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('kelas.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Kelas</span></a>
    </li>

    <hr class="sidebar-divider">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->


</ul>
