@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        <div class="text-center">
        <img src="/stmik/logo/stmik.png" width="20%">
        </div>
        <br/>
        <br/>
        <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Login Aplikasi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="/login" method="POST">
                @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NRP/NIM</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" placeholder="nrp/nim" autocomplete="off" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-danger pull-right">Log in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
    </div>
    <div class="col-md-3">
    </div>
</div>
@endsection