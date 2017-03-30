@extends('base.basetemplate')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Daftar KK
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/dashboard/statistik') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Penduduk</a></li>
      <li><a href="#">Keluarga</a></li>
      <li class="active">Daftar</li>
    </ol>

    <br>
    <a href="{{ url('/penduduk/keluarga/create') }}" class="btn btn-primary">Input data baru</a>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Daftar semua KK</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nomor KK</th>
                <th>Kepala Keluarga</th>
                <th>Alamat</th>
                <th>Tanggal Daftar</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach($keluargas as $keluarga)
                    <tr>
                        <td>{{ $keluarga->kk_no }}</td>
                        <td>{{ $keluarga->kk_nik_kepala }}</td>
                        <td>{{ $keluarga->kk_alamat }}</td>
                        <td>{{ $keluarga->created_at }}</td>
                        <td style="text-align:center"><div class="btn-group">
                              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                              Action   <span class="caret"></span></button>
                              <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="{{ url('/penduduk/keluarga/edit/' . $keluarga->id ) }}">Ubah</a></li>
                              </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Nomor KK</th>
                <th>Kepala Keluarga</th>
                <th>Alamat</th>
                <th>Tanggal Daftar</th>
                <th>Action</th>
              </tr>
              </tfoot>
            </table>
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

<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endsection
