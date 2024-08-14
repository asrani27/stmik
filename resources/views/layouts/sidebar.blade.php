
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>

    @if (Auth::user()->roles == 'superadmin')
    <!-- Superadmin -->
    <li class="{{ request()->is('superadmin/beranda') ? 'active' : '' }}"><a href="/superadmin/beranda"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>
    <li class="{{ request()->is('superadmin/portal/*') ? 'active' : '' }} treeview">
        <a href="#">
        <i class="fa fa-database"></i> <span>Portal</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li class="{{ request()->is('superadmin/portal/informasi*') ? 'active' : '' }}"><a href="/superadmin/portal/informasi"><i class="fa fa-circle {{ request()->is('superadmin/portal/informasi*') ? 'text-blue' : '' }}"></i> Informasi</a></li>

        </ul>
    </li>
    <li class="{{ request()->is('superadmin/data/*') ? 'active' : '' }} treeview">
        <a href="#">
        <i class="fa fa-database"></i> <span>Data</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li class="{{ request()->is('superadmin/data/periode*') ? 'active' : '' }}"><a href="/superadmin/data/periode"><i class="fa fa-circle {{ request()->is('superadmin/data/periode*') ? 'text-blue' : '' }}"></i> Periode</a></li>
        <li class="{{ request()->is('superadmin/data/jurusan*') ? 'active' : '' }}"><a href="/superadmin/data/jurusan"><i class="fa fa-circle {{ request()->is('superadmin/data/jurusan*') ? 'text-blue' : '' }}"></i> Jurusan</a></li>
        <li class="{{ request()->is('superadmin/data/matakuliah') ? 'active' : '' }}"><a href="/superadmin/data/matakuliah"><i class="fa fa-circle {{ request()->is('superadmin/data/matakuliah') ? 'text-blue' : '' }}"></i> Mata Kuliah</a></li>
        <li class="{{ request()->is('superadmin/data/kurikulum') ? 'active' : '' }}"><a href="/superadmin/data/kurikulum"><i class="fa fa-circle {{ request()->is('superadmin/data/kurikulum') ? 'text-blue' : '' }}"></i> Kurikulum</a></li>
        <li class="{{ request()->is('superadmin/data/mahasiswa') ? 'active' : '' }}"><a href="/superadmin/data/mahasiswa"><i class="fa fa-circle {{ request()->is('superadmin/data/mahasiswa') ? 'text-blue' : '' }}"></i> Mahasiswa</a></li>

        </ul>
    </li>
    <li class="{{ request()->is('superadmin/setting/*') ? 'active' : '' }} treeview">
        <a href="#">
        <i class="fa fa-database"></i> <span>Setting</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li class="{{ request()->is('superadmin/setting/role*') ? 'active' : '' }}"><a href="/superadmin/setting/role"><i class="fa fa-circle {{ request()->is('superadmin/setting/role*') ? 'text-blue' : '' }}"></i> Role</a></li>
        <li class="{{ request()->is('superadmin/setting/import*') ? 'active' : '' }}"><a href="/superadmin/setting/import"><i class="fa fa-circle {{ request()->is('superadmin/setting/import*') ? 'text-blue' : '' }}"></i> Import</a></li>

        </ul>
    </li>
    @endif
    
    @if (Auth::user()->roles == 'mahasiswa')
    <!-- Mahasiswa -->
    <li class="{{ request()->is('mahasiswa/beranda') ? 'active' : '' }}"><a href="/mahasiswa/beranda"><i class="fa fa-dashboard"></i> <span>BERANDA</span></a></li>
    <li class="{{ request()->is('mahasiswa/krs') ? 'active' : '' }}"><a href="/mahasiswa/krs"><i class="fa fa-book"></i> <span>KRS</span></a></li>
    <li class="{{ request()->is('mahasiswa/khs') ? 'active' : '' }}"><a href="/mahasiswa/khs"><i class="fa fa-book"></i> <span>KHS</span></a></li>
    <li class="{{ request()->is('mahasiswa/transkrip') ? 'active' : '' }}"><a href="/mahasiswa/transkrip"><i class="fa fa-book"></i> <span>TRANSKRIP NILAI</span></a></li>
    @endif
    
    <li><a href="/logout"><i class="fa fa-sign-out"></i> <span>LOGOUT</span></a></li>
  </ul>
