@extends('base.basetemplate')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tentang SimDesa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tentang</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Agama</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($agamas as $agama)
                      <tr>
                          <td>{{ $agama->nama }}</td>
                          <td style="text-align:left"><div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                Action   <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="{{ url('/penduduk/wilayah/rt/edit/' . $agama->id ) }}">Ubah</a></li>
                                </ul>
                              </div>
                          </td>
                      </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Agama</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </section>
  <!-- /.content -->
</div>
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
    $("#example1").DataTable({
      "aaSorting": []
    });
  });
</script>
@endsection
