<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Harapan Bangsa <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Settings Section -->
    <div class="sidebar-heading">
        Settings
    </div>

    <!-- Data Master Section -->
    <li
        class="nav-item {{ request()->routeIs('pekerjaan_ortu.index') || request()->routeIs('penghasilan_ortu.index') || request()->routeIs('sekolah.profile') ? ' active' : '' }}">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Master</span>
        </a>
        <div id="collapseTwo"
            class="collapse {{ request()->routeIs('pekerjaan_ortu.index') || request()->routeIs('penghasilan_ortu.index') || request()->routeIs('sekolah.profile') ? ' show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Master Data:</h6>
                <a class="collapse-item{{ request()->routeIs('pekerjaan_ortu.index') ? ' active' : '' }}"
                    href="{{ route('pekerjaan_ortu.index') }}">Pekerjaan Orang Tua</a>
                <a class="collapse-item{{ request()->routeIs('penghasilan_ortu.index') ? ' active' : '' }}"
                    href="{{ route('penghasilan_ortu.index') }}">Penghasilan Orang tua</a>
                <a class="collapse-item{{ request()->routeIs('sekolah.profile') ? ' active' : '' }}"
                    href="{{ route('sekolah.profile') }}">Profil Sekolah</a>
            </div>
        </div>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
