@extends('base.basetemplate')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ubah Informasi KK
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Penduduk</a></li>
        <li><a href="#">Keluarga</a></li>
        <li class="active">Ubah</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah KK</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/penduduk/keluarga/edit/{{ $keluarga->id }}">
              {{ method_field('PUT') }}
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor KK</label>
                  <input type="text" class="form-control" name="kk_no" id="exampleInputEmail1" value="{{ $keluarga->kk_no }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NIK Kepala Keluarga</label>
                  <input type="text" class="form-control" name="kk_nama_kepala" id="search_text" value="{{ $keluarga->kk_nik_kepala . ' - ' . $keluarga->kepala_keluarga }}">
                  <input type="hidden" name="kk_nik_kepala" id="q" value="{{ $keluarga->kk_nik_kepala }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <textarea class="form-control" name="kk_alamat" id="exampleInputPassword1" rows="2">{{ $keluarga->kk_alamat }}</textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <input type="hidden" name="id" value="{{ $keluarga->id }}">
                <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
              </div>
            </form>
          </div>
        </section>
  <!-- /.content -->
</div>
@endsection

@section('content-js')
<!-- Select2 -->
<script src="/assets/plugins/select2/select2.full.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
  });

  src = "{{ route('searchpenduduk') }}";
   $("#search_text").autocomplete({
      source: function(request, response) {
          $.ajax({
              url: src,
              dataType: "json",
              data: {
                  term : request.term
              },
              success: function(data) {
                  response(data);
              }
          });
      },
      min_length: 3,
      select: function(event, ui) {
        //alert(ui.item.id);
        $('#q').val(ui.item.nik);
      }
  });
</script>
@endsection

@section('content-css')
<!-- Daterange picker -->
<link rel="stylesheet" href="/assets/dist/css/jquery.ui.autocomplete.css">
@endsection
