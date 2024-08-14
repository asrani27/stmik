@extends('layouts.app')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add Mahasiswa</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action="/superadmin/data/mahasiswa/add">
        @csrf
      <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">NIM Mahasiswa</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" name="nim" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Nama Mahasiswa</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Jurusan</label>

          <div class="col-sm-10">
            <select name="jurusan" class="form-control" required>
              <option value="">-</option>
              @foreach ($jurusan as $item)
                  <option value="{{$item->singkatan}}">{{$item->nama}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>

          <div class="col-sm-10">
            <select name="jkel" class="form-control" required>
              <option value="">-</option>
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Angkatan</label>

          <div class="col-sm-10">
            <select name="angkatan" class="form-control" required>
              <option value="">-</option>
              @foreach ($angkatan as $item)
                  <option value="{{$item->tahun}}">{{$item->tahun}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Status</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" name="status" value="aktif" readonly>
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