@extends('base.basetemplate')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Daftar Template Surat
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Surat</a></li>
      <li class="active">Daftar Template</li>
    </ol>

    <br>
    <a href="{{ url('/surat/create_template') }}" class="btn btn-primary btn-small">Buat Template Baru</a>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Daftar template</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nama Template</th>
                <th>Kode</th>
                <th>keterangan</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach($templates as $template)
                    <tr>
                        <td>{{ $template->nama }}</td>
                        <td>{{ $template->kode }}</td>
                        <td>{{ $template->keterangan }}</td>
                        <td style="text-align:left"><div class="btn-group">
                              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                              Action   <span class="caret"></span></button>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/surat/edit_template/' . $template->id ) }}">Ubah</a></li>
                                <li><a href="{{ url('/surat/deactivate_template/' . $template->id ) }}">Sembunyikan</a></li>
                              </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Nama Template</th>
                <th>Kode</th>
                <th>Keterangan</th>
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
