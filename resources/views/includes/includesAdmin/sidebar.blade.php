<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
    <div class="sidebar-brand-icon ">
      <img src="{{asset('logo.png')}}" alt="">
    </div>
    <div class="sidebar-brand-text mx-3">SMA N 01 MUKOMUKO </div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{request()->is('admin/dashboard') ? 'active' : ''}}">
    <a class="nav-link" href="{{route('dashboard')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Data Guru
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item {{request()->is('admin/kepalaSekolah') ? 'active' : ''}}">
    <a class="nav-link collapsed" href="{{route('kepalaSekolah')}}" >
      <i class="fas fa-fw fa-cog"></i>
      <span>Kepala Sekolah</span>
    </a>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item {{request()->is('admin/guruPns') ? 'active' : ''}}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
      aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Guru</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Data Guru</h6>
        <a class="collapse-item" href="{{route('guruPns')}}">Guru Pns</a>
        <a class="collapse-item" href="{{route('guruHonorer')}}">Guru Honor</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Data Master
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item {{request()->is('userLogin') ? 'active' : ''}}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesMaster" aria-expanded="true"
      aria-controls="collapsePagesMaster">
      <i class="fas fa-fw fa-folder"></i>
      <span>User Login</span>
    </a>
    <div id="collapsePagesMaster" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Login App</h6>
        <a class="collapse-item" href="{{route('userLogin')}}">User Login</a>
      </div>
    </div>
  </li>

<!-- Divider -->
{{-- <hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Data Siswa
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
    aria-controls="collapsePages">
    <i class="fas fa-fw fa-folder"></i>
    <span>Kelas</span>
  </a>
  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Login Screens:</h6>
      <a class="collapse-item" href="login.html">Login</a>
    </div>
  </div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
  <a class="nav-link" href="charts.html">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Charts</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link" href="tables.html">
    <i class="fas fa-fw fa-table"></i>
    <span>Tables</span></a>
</li>

  <!-- Divider --> --}}
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Data Sekolah
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" >
      <i class="fas fa-fw fa-cog"></i>
      <span>Visi & Misi</span>
    </a>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sekolah"
      aria-expanded="true" aria-controls="sekolah">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Sekolah</span>
    </a>
    <div id="sekolah" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Data Sekolah</h6>
        <a class="collapse-item" href="utilities-color.html">Jadwal Sekolah</a>
        <a class="collapse-item" href="utilities-color.html">Jadwal Ujian</a>
        <a class="collapse-item" href="utilities-color.html">Jumlah Kelas</a>
      </div>
    </div>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->