@extends('layouts.app')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Jurusan</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action="/superadmin/data/matakuliah/edit/{{$data->id}}">
        @csrf
      <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Kode </label>

          <div class="col-sm-10">
            <input type="text" class="form-control" name="kode" value="{{$data->kode}}" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Nama Mata Kuliah</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" value="{{$data->nama}}" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">SKS</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" name="sks" value="{{$data->sks}}" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Semester</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" name="semester" value="{{$data->semester}}" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label"></label>

          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
          </div>
        </div>
        
      </div>
      <!-- /.box-body -->
      
      <!-- /.box-footer -->
    </form>
  </div>
@endsection