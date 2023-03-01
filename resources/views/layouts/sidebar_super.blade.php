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

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link {{ request()->routeIs('super_admin.index') ? ' active' : '' }}"
            href="{{ route('super_admin.index') }}">

            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <li class="nav-item {{ request()->routeIs('super_admin.akses') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('super_admin.akses') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Menagement APP</span></a>
    </li>
    <li
        class="nav-item {{ request()->routeIs('users.index', 'users.create', 'users.edit', 'users.show') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>User Menagement</span></a>
    </li>
    <li
        class="nav-item {{ request()->routeIs('profilsekolahs.index', 'profilsekolahs.create', 'profilsekolahs.edit', 'profilsekolahs.show') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('profilsekolahs.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Setting APP</span></a>
    </li>

    <li
        class="nav-item {{ request()->routeIs('kepalasekolahs.index', 'kepalasekolahs.create', '', 'kepalasekolahs.show') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('kepalasekolahs.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Kepala Sekolah</span></a>
    </li>
    <li
        class="nav-item {{ request()->routeIs('gurus.index', 'gurus.create', 'gurus.edit', 'gurus.show') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('gurus.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Guru</span></a>
    </li>
    {{-- <li class="nav-item">
        <a class="nav-link{{ request()->routeIs('murids.index') ? ' active' : '' }}"
            href="{{ route('murids.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Murid</span></a>
    </li> --}}
    <li
        class="nav-item {{ request()->routeIs('matapelajarans.index', 'matapelajarans.create', 'matapelajarans.edit', 'matapelajarans.show') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('matapelajarans.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Mata Pelajaran</span></a>
    </li>
    <li
        class="nav-item {{ request()->routeIs('kelas.index', 'kelas.create', 'kelas.edit', 'kelas.show') ? ' active' : '' }}">
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
