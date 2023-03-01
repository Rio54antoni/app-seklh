<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon rotate-n-10">
            @if (App\Models\Profilsekolah::first()->foto)
                <img src="/image/{{ App\Models\Profilsekolah::first()->foto }}" width="60px" height="60px">
            @else
                <img src="/assets/img/logo.png" width="60px" height="60px">
            @endif
        </div>
        <div class="sidebar-brand-text mx-3">
            {{ App\Models\Profilsekolah::first()->nama }}
        </div>
    </a>
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.index') }}">

            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('kepalasekolah.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Kepala Sekolah</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('guru.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Guru</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-folder"></i>
            <span>Murid</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('matapelajaran.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Mata Pelajaran</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('kela.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Kelas</span></a>
    </li>

    <hr class="sidebar-divider">
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->


</ul>
