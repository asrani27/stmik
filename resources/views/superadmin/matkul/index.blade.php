@extends('layouts.app')

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-book"></i> Mata Kuliah</h3>
      <div class="pull-right box-tools">
        <a href="/superadmin/data/matakuliah/add" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>#</th>
          <th>Kode</th>
          <th>Nama</th>
          <th>SKS</th>
          <th>Semester</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($data as $key=>$item)
              <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->kode}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->sks}}</td>
                <td>{{$item->semester}}</td>
                <td>

                <a href="/superadmin/data/matakuliah/edit/{{$item->id}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                <a href="#" data-id="{{$item->id}}" class="btn btn-danger btn-xs hapusdata"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>

<div class="modal fade" id="modal-hapus">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-red">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><i class="ion ion-clipboard"></i> Hapus Data</h4>
        </div>
        <form method="post" action="/superadmin/data/matakuliah/delete">
        <div class="modal-body">
            @csrf
            
            <div class="form-group text-center">
            <h3><i class="fa  fa-exclamation-triangle"></i> Yakin ingin di hapus?</h3><br/>
            </div>
            <div class="form-group">
                <input type="hidden" id="uuid" class="form-control" name="id" readonly>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <button type="button" class="btn btn-block bg-navy" data-dismiss="modal"><i class="fa fa-sign-out"></i> Tidak</button>
                </div>
                <div class="col-md-6">
                  
                <button type="submit" class="btn btn-block btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                </div>
              </div>
            </div>
            
        </div>
        
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
@endsection

@push('js')
    
<script>
  $(document).on('click', '.hapusdata', function() {
    
    $('#uuid').val($(this).data('id'));
    $("#modal-hapus").modal({
      backdrop: 'static',
      keyboard: false
  });
});
</script>
@endpush