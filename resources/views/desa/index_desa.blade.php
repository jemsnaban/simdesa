@extends('base.basetemplate')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Informasi Desa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Desa</a></li>
        <li class="active">Identitas</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input/Ubah Informasi Desa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/desa/identitas">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Desa</label>
                  <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Masukkan Nama Desa" required="" value="{{ $desa->nama }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Kepala Desa</label>
                  <input type="text" class="form-control" name="kades_nama" id="search_text" placeholder="Nama kepada desa" required="" value="{{ $desa->kades }}">
                  <input type="hidden" id="q" class="form-control" name="kades_id" value="{{ $desa->kades_id }}" required="">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Kantor Desa</label>
                  <input type="text" class="form-control" name="alamat_kantor" id="exampleInputEmail1" placeholder="Masukkan alamat kantor" required="" value="{{ $desa->alamat_kantor }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Pos</label>
                  <input type="text" class="form-control" name="kode_pos" id="exampleInputEmail1" placeholder="Masukkan Kode Pos" value="{{ $desa->kode_pos }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kecamatan</label>
                  <input type="text" class="form-control" name="kecamatan" id="exampleInputEmail1" placeholder="Masukkan Kecamatan" required="" value="{{ $desa->kecamatan }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Camat</label>
                  <input type="text" class="form-control" name="nama_camat" id="exampleInputEmail1" placeholder="Masukkan Nama Camat" required="" value="{{ $desa->nama_camat }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nip Camat</label>
                  <input type="text" class="form-control" name="nip_camat" id="exampleInputEmail1" placeholder="Masukkan Nip Camat" value="{{ $desa->nip_camat }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kabupaten</label>
                  <input type="text" class="form-control" name="kabupaten" id="exampleInputEmail1" placeholder="Masukkan Kabupaten" required="" value="{{ $desa->kabupaten }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Provinsi</label>
                  <input type="text" class="form-control" name="provinsi" id="exampleInputEmail1" placeholder="Masukkan Provinsi" required="" value="{{ $desa->provinsi }}">
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

@section('content-css')
<!-- Daterange picker -->
<link rel="stylesheet" href="/assets/dist/css/jquery.ui.autocomplete.css">
@endsection

@section('content-js')
<script type="text/javascript">
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
