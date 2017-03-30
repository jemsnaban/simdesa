@extends('base.basetemplate')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Informasi Dusun
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Kependudukan</a></li>
      <li><a href="#">Wilayah</a></li>
      <li><a href="#">Dusun</a></li>
      <li class="active">Daftar</li>
    </ol>

    <br>
    <a href="{{ url('/penduduk/wilayah/dusun/create') }}" class="btn btn-primary">Input dusun baru</a>
    <a href="{{ url('/penduduk/wilayah/rw/create') }}" class="btn btn-success">Input RW baru</a>
    <a href="{{ url('/penduduk/wilayah/rt/create') }}" class="btn btn-warning">Input RT baru</a>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Daftar Dusun</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nama Dusun</th>
                <th>Kepala Dusun</th>
                <th>RW</th>
                <th>RT</th>
                <th>KK</th>
                <th>Jiwa</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach($dusuns as $dusun)
                    <tr>
                        <td>{{ $dusun->dusun_nama }}</td>
                        <td>{{ $dusun->kadus }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="text-align:center"><div class="btn-group">
                              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                              Action   <span class="caret"></span></button>
                              <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="{{ url('/penduduk/wilayah/dusun/edit/' . $dusun->id ) }}">Ubah</a></li>
                              </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Nama Dusun</th>
                <th>Kepala Dusun</th>
                <th>RW</th>
                <th>RT</th>
                <th>KK</th>
                <th>Jiwa</th>
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
