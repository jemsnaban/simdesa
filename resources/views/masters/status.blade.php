@extends('base.basetemplate')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Master Status
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Master</li>
        <li class="active">Status</li>
      </ol>

      <br>
      <a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#myModalCreate">Input data baru</a>
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
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($statuses as $status)
                      <tr>
                          <td>{{ $status->nama }}</td>
                          <td style="text-align:center">
                              <div class="btn-group">

                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                Action   <span class="caret"></span></button>

                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                  <li>
                                    <a href="#" type="button" class="btnchange" data-toggle="modal" data-target="#myModalUpdate">Ubah</a>
                                    <input type="hidden" class="id" name="id" value="{{ $status->id }}">
                                    <input type="hidden" class="nama" value="{{ $status->nama }}">
                                  </li>
                                  <li>
                                      <a href="{{ url('/master/status/delete/'.$status->id) }}">Sembunyikan</a>
                                  </li>
                                </ul>

                              </div>
                          </td>
                      </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </section>
  <!-- /.content -->
</div>

<!-- Modal create-->
<div class="modal fade" id="myModalCreate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form action="/master/status/create" method="post">
      {{ csrf_field() }}
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Input Data Baru</h4>
        </div>
        <div class="modal-body" id="form_create">
            <div class="form-group">
              <label for="exampleInputEmail1">Status</label>
              <input type="text" class="form-control" name="nama" placeholder="Masukkan Status">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Modal edit-->
<div class="modal fade" id="myModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <form action="/master/status/update" method="post">
      {{ csrf_field() }}
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Ubah Data</h4>
        </div>
        <div class="modal-body" id="form_update">
            <div class="form-group">
              <label for="exampleInputEmail1">Status</label>
              <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Status">
              <input type="hidden" name="id" id="id" value="">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
      </div>
    </form>
  </div>
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

    $('#example1').on('click', 'tbody tr td li .btnchange',function (e) {
      //e.preventDefault();
      var id = $(this).parent().find('.id').val();
      var nama = $(this).parent().find('.nama').val();

      console.log(id + nama);

      $('#form_update #nama').val(nama);
      $('#form_update #id').val(id);
    })
  });
</script>
@endsection
