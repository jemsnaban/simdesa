@extends('base.basetemplate')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input Informasi KK
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Penduduk</a></li>
        <li><a href="#">Keluarga</a></li>
        <li class="active">Input baru</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input KK Baru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/penduduk/keluarga/create">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor KK</label>
                  <input type="text" class="form-control" name="kk_no" id="exampleInputEmail1" placeholder="Masukkan Nomor KK (sesuai kartu keluarga)">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NIK Kepala Keluarga</label>
                  <input type="text" class="form-control" name="kk_nik_kepala" id="exampleInputPassword1" placeholder="Nik kepada keluarga">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <textarea class="form-control" name="kk_alamat" id="exampleInputPassword1" placeholder="Alamat" rows="2"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
              </div>
            </form>
          </div>
        </section>
  <!-- /.content -->
</div>
@endsection
