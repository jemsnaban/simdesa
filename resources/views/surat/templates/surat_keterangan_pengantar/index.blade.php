@extends('base.basetemplate')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input Informasi Surat
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Cetak Surat</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Informasi Surat Baru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/surat/preview/{{ $surat->slug }}">
              {{ method_field('PUT') }}
              {{ csrf_field() }}
              <div class="box-body">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Pemohon</label>
                    <input type="text" class="form-control" name="pemohon_nama" id="search_text" placeholder="Nama Pemohon">
                    <input type="hidden" name="pemohon_id" id="q" value="">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Surat</label>
                    <input type="text" class="form-control" name="nomor_surat" id="exampleInputEmail1" placeholder="Masukkan Nomor Surat">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keperluan</label>
                    <input type="text" class="form-control" name="keperluan" id="exampleInputEmail1" placeholder="Masukkan Keperluan">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <textarea name="keterangan" rows="4" class="form-control" placeholder="Keterangan"></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Berlaku Sejak</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" name="start_date" id="start" value="{{ date('d/m/Y') }}">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Berlaku Sampai</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" name="end_date" id="end" value="{{ date('d/m/Y') }}">
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mengetahui Perangkat Desa</label>
                    <select class="form-control select2" name="id_jabatan" style="width: 100%;">
                      <option value="">Pilih Perangkat Desa</option>
                      @foreach($pemerintahs as $pemerintah)
                        <option value="{{ $pemerintah->id }}">{{ $pemerintah->nama ." (". $pemerintah->nama_jabatan. " )" }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">Cetak Surat</button>
                  <input type="hidden" name="template_id" value="{{ $surat->id }}">
                  <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
                </div>
              </div>
            </form>
          </div>
        </section>
  <!-- /.content -->
</div>
@endsection

@section('private-css')
<!-- Select2 -->
<link rel="stylesheet" href="/assets/plugins/select2/select2.min.css">
@endsection

@section('content-css')
<!-- Daterange picker -->
<link rel="stylesheet" href="/assets/dist/css/jquery.ui.autocomplete.css">
@endsection

@section('content-js')
<!-- Select2 -->
<script src="/assets/plugins/select2/select2.full.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
  });

  $('#start').datepicker({
    autoclose: true,
    format: 'dd/mm/yyyy',
    defaultDate : new Date()
  });

  $('#end').datepicker({
    autoclose: true,
    format: 'dd/mm/yyyy',
    defaultDate : new Date()
  });

  src = "{{ route('searchdusun') }}";
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
        $('#q').val(ui.item.id);
      }
  });
</script>
@endsection
