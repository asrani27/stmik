@extends('layouts.app')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add periode</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action="/superadmin/data/periode/add">
        @csrf
      <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Tahun Periode</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" name="tahun" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Semester</label>

          <div class="col-sm-10">
            <select name="semester" class="form-control" required>
              <option value="GANJIL">GANJIL</option>
              <option value="GENAP">GENAP</option>
            </select> 
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">is Aktif?</label>

          <div class="col-sm-10">
            <select name="is_aktif" class="form-control" required>
              <option value="Y">Y</option>
              <option value="T" selected>T</option>
            </select> 
          </div>
        </div>
        
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label"></label>

          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
        
      </div>
      <!-- /.box-body -->
      
      <!-- /.box-footer -->
    </form>
  </div>
@endsection