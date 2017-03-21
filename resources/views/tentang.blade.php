@extends('base.basetemplate')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tentang SimDesa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tentang</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
              <h3>Tentang SIMDESA</h3>
              <p>SIMDesa merupakan aplikasi berbasis web yang diharapkan dapat membantu
                desa-desa di Indonesia untuk lebih berkembang dalam semua bidang.
                Teknologi dipandang penting untuk mendukung perkembangan desa dalam hal:</p>
              <ul>
                <li>Pelayanan yang transparan dan tidak berbelit-belit</li>
                <li>Adanya informasi kependudukan yang lengkap</li>
                <li>Kerja perangkat desa semakin mudah</li>
              </ul>

              <h3>Pengembangan</h3>

              <p>Aplikasi ini terbuka untuk dikembangkan, dibangun menggunakan:</p>
              <ul>
                <li><a href="https://laravel.com/">Laravel Framework.</a></li>
                <li><a href="http://getbootstrap.com/">Bootstrap.</a></li>
                <li><a href="https://cartalyst.com/manual/sentinel/2.0#introduction">Sentinel - Laravel Package.</a></li>
              </ul>
              <h3>Issue</h3>
              <p>Jika anda memiliki ide atau gagasan ataupun masukan, masukkan
                di <a href="https://github.com/jemsnaban/simdesa/issues">https://github.com/jemsnaban/simdesa/issues</a> atau hubungi e-mail
                jemsnaban di jemsnaban.info@gmail.com.</p>

              <h3>Hak Cipta, Syarat dan Ketentuan</h3>
              <p>Sistem ini dikelola dengan merujuk pada lisensi <a href="https://github.com/jemsnaban/simdesa/blob/master/LICENSE.md">GNU General Public License Version 3</a></p>
            </div>
          </div>
        </section>
  <!-- /.content -->
</div>
@endsection
