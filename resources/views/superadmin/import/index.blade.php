@extends('layouts.app')

@section('content')

<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-book"></i> Import Data</h3>
      <div class="pull-right box-tools">
        
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <form role="form" method="post" action="/superadmin/setting/import" enctype="multipart/form-data">
        @csrf
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Data Import</label>
            <select class="form-control" name="jenis" required>
              <option value="">-</option>
              <option value="matakuliah">MATA KULIAH</option>
              <option value="mahasiswa">MAHASISWA</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">File Excel</label>
            <input type="file" name="file" class="form-control">
          </div>
          
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Import</button>
        </div>
      </form>
    </div>
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