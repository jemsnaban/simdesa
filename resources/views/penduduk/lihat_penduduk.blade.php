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
      <li class="active">Detail</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header page-header">
            <h3 class="box-title">Detail Penduduk</h3>
            <div class="pull-right">
              <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Action   <span class="caret"></span></button>
                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                  <li><a href="{{ url('/penduduk/list/edit/' . $penduduk->id) }}">Ubah</a></li>
                  <li><a href="{{ url('/penduduk/list/detail/' . $penduduk->id ) }}">Lihat</a></li>
                  <li><a href="{{ url('/penduduk/list/detail/' . $penduduk->id ) }}">Cetak Biodata</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <div class="col-md-12">
                <div class="col-md-3">
                  <img src="/assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image" width="100%">

                  <div class="btn-action">
                    <a href="#" class="btn btn-sm btn-primary">Upload File</a>
                    <a href="#" class="btn btn-sm btn-success">Kamera</a>
                  </div>
                </div>
                <div class="col-md-9">
                    <div class="box-body table-responsive no-padding">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <td><b>Nama</b></td>
                            <td>{{ $penduduk->nama }}</td>
                          </tr>
                          <tr>
                            <td><b>NIK</b></td>
                            <td>{{ $penduduk->nik }}</td>
                          </tr>
                          <tr>
                            <td><b>Nomor Kartu Keluarga</b></td>
                            <td>{{ $penduduk->no_kk }}</td>
                          </tr>
                          <tr>
                            <td><b>Jenis Kelamin</b></td>
                            <td>{{ $penduduk->jenis_kelamin }}</td>
                          </tr>
                          <tr>
                            <td><b>Tempat, Tanggal Lahir</b></td>
                            <td>{{ $penduduk->tempat_lahir .", " . $penduduk->tanggal_lahir }}</td>
                          </tr>
                          <tr>
                            <td><b>RT</b></td>
                            <td>{{ $penduduk->rt }}</td>
                          </tr>
                          <tr>
                            <td><b>RW</b></td>
                            <td>{{ $penduduk->rw }}</td>
                          </tr>
                          <tr>
                            <td><b>Dusun</b></td>
                            <td>{{ $penduduk->dusun }}</td>
                          </tr>
                          <tr>
                            <td><b>Agama</b></td>
                            <td>{{ $penduduk->agama }}</td>
                          </tr>
                          <tr>
                            <td><b>Pendidikan</b></td>
                            <td>{{ $penduduk->pendidikan }}</td>
                          </tr>
                          <tr>
                            <td><b>Pekerjaan</b></td>
                            <td>{{ $penduduk->pekerjaan }}</td>
                          </tr>
                          <tr>
                            <td><b>Status Nikah</b></td>
                            <td>{{ $penduduk->status_kawin }}</td>
                          </tr>
                          <tr>
                            <td><b>Hubungan dalam Keluarga</b></td>
                            <td>{{ $penduduk->hubungan }}</td>
                          </tr>
                          <tr>
                            <td><b>Golongan Darah</b></td>
                            <td>{{ $penduduk->gol_darah }}</td>
                          </tr>
                          <tr>
                            <td><b>Kewarganegaraan</b></td>
                            <td>{{ $penduduk->kewarganegaraan }}</td>
                          </tr>
                          <tr>
                            <td><b>Ayah</b></td>
                            <td>{{ $penduduk->ayah }}</td>
                          </tr>
                          <tr>
                            <td><b>Ibu</b></td>
                            <td>{{ $penduduk->ibu }}</td>
                          </tr>
                          <tr>
                            <td><b>Alamat Sebelum</b></td>
                            <td>{{ $penduduk->alamat_sblm }}</td>
                          </tr>
                          <tr>
                            <td><b>Alamat Sekarang</b></td>
                            <td>{{ $penduduk->alamat_skrg }}</td>
                          </tr>
                          <tr>
                            <td><b>Akta Nikah</b></td>
                            <td>{{ $penduduk->akta_nikah }}</td>
                          </tr>
                          <tr>
                            <td><b>Tanggal Nikah</b></td>
                            <td>{{ $penduduk->tanggal_nikah }}</td>
                          </tr>
                          <tr>
                            <td><b>Akta Cerai</b></td>
                            <td>{{ $penduduk->akta_cerai }}</td>
                          </tr>
                          <tr>
                            <td><b>Tanggal Cerai</b></td>
                            <td>{{ $penduduk->tanggal_cerai }}</td>
                          </tr>
                          <tr>
                            <td><b>Disabilitas</b></td>
                            <td>{{ $penduduk->cacat }}</td>
                          </tr>
                          <tr>
                            <td><b>Cara KB</b></td>
                            <td>{{ $penduduk->cara_kb }}</td>
                          </tr>
                          <tr>
                            <td><b>Status</b></td>
                            <td>{{ $penduduk->status }}</td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
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
<style media="screen">
  .btn-action{
    text-align: center;
    margin-top: 10px;
  }
</style>
@endsection

@section('content-js')
<!-- page script -->

<!-- DataTables -->
<script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable( {
        responsive: true,
        buttons: [
           'copy', 'excel', 'pdf'
       ]
    });
  });
</script>
@endsection
