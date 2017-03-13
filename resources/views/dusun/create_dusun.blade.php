@extends('base.basetemplate')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input Informasi Dusun
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Wilayah</a></li>
        <li><a href="#">Dusun</a></li>
        <li class="active">Input baru</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Dusun Baru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/penduduk/wilayah/dusun/create">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Dusun</label>
                  <input type="text" class="form-control" name="dusun_nama" id="exampleInputEmail1" placeholder="Masukkan Nama Dusun">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Kepala Dusun</label>
                  <input type="text" class="form-control" name="dusun_kadus_id" id="exampleInputPassword1" placeholder="Nama kepada dusun">
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
