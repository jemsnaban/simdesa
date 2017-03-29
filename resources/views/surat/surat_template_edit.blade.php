@extends('base.basetemplate')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Ubah Template
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Surat</a></li>
      <li class="active">Ubah Baru</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Ubah template</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <form role="form" method="post" action="/surat/edit_template/{{ $template->id }}">
              {{ method_field('PUT') }}
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Template</label>
                  <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Masukkan Nama Template" required="" value="{{ $template->nama }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kode</label>
                  <input type="text" class="form-control" name="kode" id="search_text" placeholder="Nama Kode Template" required="" value="{{ $template->kode }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Keterangan</label>
                  <input type="text" class="form-control" name="keterangan" id="exampleInputEmail1" placeholder="Masukkan keterangan" value="{{ $template->keterangan }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">HTML Code <small>Sesuaikan dengan format plugin PHPWORD (+ tag php)</small></label>
                  <textarea class="form-control" rows="12" id="html_code" name="html_code" placeholder="Masukkan Kode HTML/PHP">{{ $template->html_code }}</textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
              </div>
            </form>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('content-css')
<!-- DataTables -->
<link rel="stylesheet" href="/assets/plugins/datatables/dataTables.bootstrap.css">
@endsection

@section('content-js')
<!-- page script -->

<!-- DataTables -->
<script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="/assets/plugins/ckeditor/ckeditor.js"></script>

<script>
  $(function () {
    /*CKEDITOR.replace('html_code');*/
  });
</script>
@endsection
