@extends('base.basetemplate')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Lihat Informasi KK
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Penduduk</a></li>
        <li><a href="#">Keluarga</a></li>
        <li class="active">Lihat</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Detail KK</h3>
              <div class="pull-right">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                  Action   <span class="caret"></span></button>
                  <ul class="dropdown-menu dropdown-menu-right" role="menu">
                    <li><a href="{{ url('/penduduk/list/edit/' . $keluarga->id) }}">Ubah</a></li>
                    <li><a href="{{ url('/penduduk/list/detail/' . $keluarga->id ) }}">Cetak Kartu Keluarga</a></li>
                    <li><a href="{{ url('/penduduk/list/detail/' . $keluarga->id ) }}">Tambah Anggota Keluarga</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <div class="top-body with-border">
                  <div class="col-md-2">
                    <p><b>Nomor KK</b></p>
                  </div>
                  <div class="col-md-10">
                    <p>{{ $keluarga->kk_no }}</p>
                  </div>
                  <div class="col-md-2">
                    <p><b>Kepala Keluarga</b></p>
                  </div>
                  <div class="col-md-10">
                    <p>{{ $keluarga->kepala_keluarga }}</p>
                  </div>
                  <div class="col-md-2">
                    <p><b>Alamat</b></p>
                  </div>
                  <div class="col-md-10">
                    <p>{{ $keluarga->kk_alamat }}</p>
                  </div>
              </div>

              <div class="content-body">

                <div class="col-md-12">
                  <h3>Anggota Keluarga</h3>
                  @foreach($anggotas as $anggota)
                    <div class="col-md-4">
                      <div class="box box-widget widget-user-2">
                        <div class="widget-user-header bg-yellow">
                          <div class="widget-user-image">
                            <img class="img-circle" src="/assets/dist/img/user2-160x160.jpg" alt="User Avatar">
                          </div>
                          <h5 class="widget-user-username" style="font-size:17px;">{{ $anggota->nama }}</h5>
                          <h5 class="widget-user-desc">{{ $anggota->hubungan }}</h5>
                        </div>
                        <div class="box-footer no-padding">
                          <ul class="nav nav-stacked">
                            <li><a href="#">NIK <span class="pull-right">{{ $anggota->nik }}</span></a></li>
                            <li><a href="#">Lahir <span class="pull-right">{{ $anggota->tanggal_lahir }}</span></a></li>
                            <li><a href="#">Umur <span class="pull-right">{{ $anggota->tanggal_lahir }}</span></a></li>
                            <li><a href="#">Pekerjaan <span class="pull-right">{{ $anggota->pekerjaan }}</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
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
