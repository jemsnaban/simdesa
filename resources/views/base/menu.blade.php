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
        <p>{{ Sentinel::getUser()->first_name . " " . Sentinel::getUser()->last_name}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> {{ Sentinel::getUser()->roles()->first()->name }}</a>
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
          <i class="fa fa-address-book-o"></i>
          <span>Kependudukan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::segment(2) === 'keluarga' ? 'active' : null }}"><a href="/penduduk/keluarga"><i class="fa fa-circle-o"></i> Keluarga</a></li>
          <li class="{{ Request::segment(2) === 'list' ? 'active' : null }}"><a href="/penduduk/list"><i class="fa fa-circle-o"></i> Penduduk</a></li>
          <li><a href="/penduduk/kelompok"><i class="fa fa-circle-o"></i> Kelompok</a></li>
        </ul>
      </li>
      <li class="{{ Request::segment(1) === 'wilayah' ? 'active' : null }}">
        <a href="#"><i class="fa fa-map-signs"></i> Wilayah Administrasi
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::segment(2) === 'dusun' ? 'active' : null }}">
            <a href="/wilayah/dusun"><i class="fa fa-circle-o"></i> Dusun</a></li>
          <li class="{{ Request::segment(2) === 'rw' ? 'active' : null }}">
            <a href="/wilayah/rw"><i class="fa fa-circle-o"></i> RW</a></li>
          <li class="{{ Request::segment(2) === 'rt' ? 'active' : null }}">
            <a href="/wilayah/rt"><i class="fa fa-circle-o"></i> RT</a></li>
        </ul>
      </li>
      <li class="treeview {{ Request::segment(1) === 'surat' ? 'active' : null }}">
        <a href="#">
          <i class="fa fa-folder-open-o"></i>
          <span>Surat</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <!--li class="{{ strpos(Request::segment(2), 'template') !== false ? 'active' : null }}"><a href="/surat/daftar_template"><i class="fa fa-circle-o"></i> Master Surat</a></li-->
          <li class="{{ strpos(Request::segment(2), 'surat') !== false ? 'active' : null }}"><a href="/surat/daftar_surat"><i class="fa fa-circle-o"></i> Cetak Surat</a></li>
          <li class="{{ Request::segment(2) === 'keluar' ? 'active' : null }}"><a href="/surat/keluar"><i class="fa fa-circle-o"></i> Surat Keluar</a></li>
          <li class="{{ Request::segment(2) === 'masuk' ? 'active' : null }}"><a href="/surat/masuk"><i class="fa fa-circle-o"></i> Surat Masuk</a></li>
          <li class="{{ Request::segment(2) === 'panduan' ? 'active' : null }}"><a href="/surat/panduan"><i class="fa fa-circle-o"></i> Panduan</a></li>
        </ul>
      </li>
      <li class="treeview {{ Request::segment(1) === 'desa' ? 'active' : null }}">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Desa</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::segment(2) === 'identitas' ? 'active' : null }}"><a href="/desa/identitas"><i class="fa fa-circle-o"></i> Identitas Desa</a></li>
          <li class="{{ Request::segment(2) === 'pemerintah' ? 'active' : null }}"><a href="/desa/pemerintah"><i class="fa fa-circle-o"></i> Pemerintah Desa</a></li>
        </ul>
      </li>
      <li class="{{ Request::segment(1) === 'pengguna' ? 'active' : null }}"><a href="/pengguna"><i class="fa fa-users"></i> <span>Pengguna</span></a></li>
      <li class="treeview {{ Request::segment(1) === 'master' ? 'active' : null }}">
        <a href="#">
          <i class="fa fa-sliders"></i>
          <span>Master</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::segment(2) === 'agama' ? 'active' : null }}"><a href="/master/agama"><i class="fa fa-circle-o"></i> Agama</a></li>
          <li class="{{ Request::segment(2) === 'disabilitas' ? 'active' : null }}"><a href="/master/disabilitas"><i class="fa fa-circle-o"></i> Disabilitas</a></li>
          <li class="{{ Request::segment(2) === 'carakb' ? 'active' : null }}"><a href="/master/carakb"><i class="fa fa-circle-o"></i> Cara KB</a></li>
          <li class="{{ Request::segment(2) === 'hubungan' ? 'active' : null }}"><a href="/master/hubungan"><i class="fa fa-circle-o"></i> Hubungan Dl Keluarga</a></li>
          <li class="{{ Request::segment(2) === 'jabatan' ? 'active' : null }}"><a href="/master/jabatan"><i class="fa fa-circle-o"></i> Jabatan</a></li>
          <li class="{{ Request::segment(2) === 'kawin' ? 'active' : null }}"><a href="/master/kawin"><i class="fa fa-circle-o"></i> Status Kawin</a></li>
          <li class="{{ Request::segment(2) === 'pekerjaan' ? 'active' : null }}"><a href="/master/pekerjaan"><i class="fa fa-circle-o"></i> Pekerjaan</a></li>
          <li class="{{ Request::segment(2) === 'pendidikan' ? 'active' : null }}"><a href="/master/pendidikan"><i class="fa fa-circle-o"></i> Pendidikan</a></li>
          <li class="{{ Request::segment(2) === 'status' ? 'active' : null }}"><a href="/master/status"><i class="fa fa-circle-o"></i> Status</a></li>
        </ul>
      </li>
      <li class="header">Extra</li>
      <li class="{{ Request::segment(1) === 'pengaturan' ? 'active' : null }}"><a href="/pengaturan"><i class="fa fa-circle-o text-red"></i> <span>Pengaturan</span></a></li>
      <li class="{{ Request::segment(1) === 'tentang' ? 'active' : null }}"><a href="/tentang"><i class="fa fa-circle-o text-red"></i> <span>Tentang SimDesa</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
