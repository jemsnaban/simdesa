<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Super Admin</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="{{ Request::segment(1) === 'dashboard' ? 'active' : null }} treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::segment(2) === 'statistik' ? 'active' : null }}"><a href="/dashboard/statistik"><i class="fa fa-circle-o"></i>Statistik Kependudukan</a></li>
          <li class="{{ Request::segment(2) === 'laporan' ? 'active' : null }}"><a href="/dashboard/laporan"><i class="fa fa-circle-o"></i>Laporan Bulanan</a></li>
        </ul>
      </li>
      <li class="{{ Request::segment(1) === 'penduduk' ? 'active' : null }} treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Kependudukan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::segment(2) === 'wilayah' ? 'active' : null }}">
              <a href="#"><i class="fa fa-circle-o"></i> Wilayah Administrasi
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="{{ Request::segment(3) === 'dusun' ? 'active' : null }}">
                  <a href="/penduduk/wilayah/dusun"><i class="fa fa-circle-o"></i> Dusun</a></li>
                <li class="{{ Request::segment(3) === 'rw' ? 'active' : null }}">
                  <a href="/penduduk/wilayah/rw"><i class="fa fa-circle-o"></i> RW</a></li>
                <li class="{{ Request::segment(3) === 'rt' ? 'active' : null }}">
                  <a href="/penduduk/wilayah/rt"><i class="fa fa-circle-o"></i> RT</a></li>
              </ul>
            </li>
          <li class="{{ Request::segment(2) === 'keluarga' ? 'active' : null }}"><a href="/penduduk/keluarga"><i class="fa fa-circle-o"></i> Keluarga</a></li>
          <li class="{{ Request::segment(2) === 'list' ? 'active' : null }}"><a href="/penduduk/list"><i class="fa fa-circle-o"></i> Penduduk</a></li>
          <li><a href="/penduduk/kelompok"><i class="fa fa-circle-o"></i> Kelompok</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Surat</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/surat/cetak"><i class="fa fa-circle-o"></i> Cetak Surat</a></li>
          <li><a href="/surat/keluar"><i class="fa fa-circle-o"></i> Surat Keluar</a></li>
          <li><a href="/surat/master"><i class="fa fa-circle-o"></i> Master Surat</a></li>
          <li><a href="/surat/panduan"><i class="fa fa-circle-o"></i> Panduan</a></li>
        </ul>
      </li>
      <li>
        <a href="/bantuan">
          <i class="fa fa-th"></i> <span>Bantuan</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green">new</small>
          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Desa</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/desa/identitas"><i class="fa fa-circle-o"></i> Identitas Desa</a></li>
          <li><a href="/desa/pemerintah"><i class="fa fa-circle-o"></i> Pemerintah Desa</a></li>
        </ul>
      </li>
      <li><a href="/pengguna"><i class="fa fa-book"></i> <span>Pengguna</span></a></li>
      <li class="header">Extra</li>
      <li><a href="/pengaturan"><i class="fa fa-circle-o text-red"></i> <span>Pengaturan</span></a></li>
      <li><a href="/tentang"><i class="fa fa-circle-o text-red"></i> <span>Tentang SimDesa</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
