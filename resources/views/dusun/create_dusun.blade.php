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
        <li><a href="#">Kependudukan</a></li>
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
            <form role="form" method="post" action="/wilayah/dusun/create">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Dusun</label>
                  <input type="text" class="form-control" name="dusun_nama" id="exampleInputEmail1" placeholder="Masukkan Nama Dusun" required="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Kepala Dusun</label>
                  <input type="text" class="form-control" name="dusun_kadus_nama" id="search_text" placeholder="Nama kepada dusun" required="">
                  <input type="hidden" id="q" class="form-control" name="dusun_kadus_id" value="" required="">
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
