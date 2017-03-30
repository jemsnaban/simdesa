@extends('base.basetemplate')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Penduduk
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Kependudukan</a></li>
      <li><a href="#">Penduduk</a></li>
      <li class="active">Daftar</li>
    </ol>

    <br>
    <a href="{{ url('/penduduk/list/create') }}" class="btn btn-primary">Input penduduk baru</a>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Daftar Penduduk</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>No. KK</th>
                <th>Dusun</th>
                <th>RT/RW</th>
                <th>Umur</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Kawin</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                  @foreach ($penduduks as $penduduk)
                    <tr>
                      <td>{{ $penduduk->nik }}</td>
                      <td>{{ $penduduk->nama }}</td>
                      <td>{{ $penduduk->no_kk }}</td>
                      <td>{{ $penduduk->dusun }}</td>
                      <td>{{ $penduduk->rt }} / {{ $penduduk->rw }}</td>
                      <td>{{ Carbon\Carbon::createFromFormat('Y-m-d', $penduduk->tanggal_lahir)->age }}</td>
                      <td>{{ $penduduk->pendidikan }}</td>
                      <td>{{ $penduduk->pekerjaan }}</td>
                      <td>{{ $penduduk->status_kawin }}</td>
                      <td style="text-align:center"><div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Action   <span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                              <li><a href="{{ url('/penduduk/list/edit/' . $penduduk->id ) }}">Ubah</a></li>
                            </ul>
                          </div>
                      </td>
                    </tr>
                  @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>No. KK</th>
                <th>Dusun</th>
                <th>RT/RW</th>
                <th>Umur</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Kawin</th>
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
    $("#example1").DataTable( {
        responsive: true
    });
  });
</script>
@endsection
