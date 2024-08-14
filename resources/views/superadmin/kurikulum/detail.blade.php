@extends('layouts.app')

@push('css')
    
  <!-- Select2 -->
  <link rel="stylesheet" href="/stmik/bower_components/select2/dist/css/select2.min.css">
@endpush

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Detail Kurikulum</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form">
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Tahun</label>
        <input type="text" class="form-control" readonly value="{{$data->tahun}}">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Jurusan</label>
        <input type="text" class="form-control" readonly value="{{$data->jurusan->nama}}">
      </div>
    </div>
  </form>
</div>


<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Tambahkan Mata Kuliah</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row">
      <form method="post" action="/superadmin/data/kurikulum/detail/{{$data->id}}">
        @csrf
        <div class="col-md-5">
          <div class="form-group">
            <label>Mata Kuliah</label>
            <select class="form-control select2" style="width: 100%;" name="kode_mata_kuliah" required>
              <option value="">-</option>
              @foreach ($matakuliah as $item)
                  <option value="{{$item->kode}}" {{old('kode_mata_kuliah') == $item->kode ? 'selected':''}}>{{$item->kode}} {{$item->nama}} - {{$item->semester}}</option>
              @endforeach
            </select>
          </div>
          <!-- /.form-group -->
          
        </div>
        <!-- /.col -->
        <div class="col-md-5">
          <div class="form-group">
            <label>Semester</label>
            <select class="form-control select2" style="width: 100%;" name="semester" required>
              <option value="1" {{old('semester') == '1' ? 'selected':''}}>1</option>
              <option value="2" {{old('semester') == '2' ? 'selected':''}}>2</option>
              <option value="3" {{old('semester') == '3' ? 'selected':''}}>3</option>
              <option value="4" {{old('semester') == '4' ? 'selected':''}}>4</option>
              <option value="5" {{old('semester') == '5' ? 'selected':''}}>5</option>
              <option value="6" {{old('semester') == '6' ? 'selected':''}}>6</option>
              <option value="7" {{old('semester') == '7' ? 'selected':''}}>7</option>
              <option value="8" {{old('semester') == '8' ? 'selected':''}}>8</option>
            </select>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-2">
          <div class="form-group">
            <label>Aksi</label>
          <button class="form-control btn btn-primary" type="submit"><i class="fa fa-plus"></i> Tambahkan</button>
          </div>
        </div>
      </form>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.box-body -->
</div>

<div class="box box-primary">
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form">
    <div class="box-body">
      <strong>SEMESTER 1</strong>
      <table class="table table-bordered">
        <thead>
          <tr style="background-color: #3c8dbc; color:white">
            <th  width="2%">#</th>
            <th width="5%">Kode</th>
            <th width="40%">Mata Kuliah</th>
            <th width="5%" class="text-center">SKS</th>
            <th width="5%">Aksi</th>
          </tr>
        </thead>
        @if ($data->detail != null)
        <tbody>
          @foreach ($data->detail->where('semester','1') as $key => $item)
          <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->kode_mata_kuliah}}</td>
            <td>{{$item->matakuliah->nama}}</td>
            <td>{{$item->matakuliah->sks}}</td>
            <td>
              <a href="#" class="btn btn-xs btn-danger deletedetail" data-id="{{$item->id}}"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3" class="text-right">TOTAL SKS</td>
            <td>{{$data->detail->where('semester','1')->map->matakuliah->sum('sks')}}</td>
            <td></td>
          </tr>
        </tfoot>
        @endif
      </table>

      <br/>

      <strong>SEMESTER 2</strong>
      <table class="table table-bordered">
        <thead>
          <tr style="background-color: #3c8dbc; color:white">
            <th width="2%">#</th>
            <th width="5%">Kode</th>
            <th width="40%">Mata Kuliah</th>
            <th width="5%" class="text-center">SKS</th>
            <th width="5%">Aksi</th>
          </tr>
        </thead>

        @if ($data->detail != null)
        <tbody>
          @foreach ($data->detail->where('semester','2') as $key => $item)
          <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->kode_mata_kuliah}}</td>
            <td>{{$item->matakuliah->nama}}</td>
            <td>{{$item->matakuliah->sks}}</td>
            <td>
              <a href="#" class="btn btn-xs btn-danger deletedetail" data-id="{{$item->id}}"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3" class="text-right">TOTAL SKS</td>
            <td>{{$data->detail->where('semester','2')->map->matakuliah->sum('sks')}}</td>
            <td></td>
          </tr>
        </tfoot>
        @endif
      </table>

      <br/>

      <strong>SEMESTER 3</strong>
      <table class="table table-bordered">
        <thead>
          <tr style="background-color: #3c8dbc; color:white">
            <th width="2%">#</th>
            <th width="5%">Kode</th>
            <th width="40%">Mata Kuliah</th>
            <th width="5%" class="text-center">SKS</th>
            <th width="5%">Aksi</th>
          </tr>
        </thead>
        @if ($data->detail != null)
        <tbody>
          @foreach ($data->detail->where('semester','3') as $key => $item)
          <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->kode_mata_kuliah}}</td>
            <td>{{$item->matakuliah->nama}}</td>
            <td>{{$item->matakuliah->sks}}</td>
            <td>
              <a href="#" class="btn btn-xs btn-danger deletedetail" data-id="{{$item->id}}"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3" class="text-right">TOTAL SKS</td>
            <td>{{$data->detail->where('semester','3')->map->matakuliah->sum('sks')}}</td>
            <td></td>
          </tr>
        </tfoot>
        @endif
      </table>
      <br/>

      <strong>SEMESTER 4</strong>
      <table class="table table-bordered">
        <thead>
          <tr style="background-color: #3c8dbc; color:white">
            <th width="2%">#</th>
            <th width="5%">Kode</th>
            <th width="40%">Mata Kuliah</th>
            <th width="5%" class="text-center">SKS</th>
            <th width="5%">Aksi</th>
          </tr>
        </thead>
        @if ($data->detail != null)
        <tbody>
          @foreach ($data->detail->where('semester','4') as $key => $item)
          <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->kode_mata_kuliah}}</td>
            <td>{{$item->matakuliah->nama}}</td>
            <td>{{$item->matakuliah->sks}}</td>
            <td>
              <a href="#" class="btn btn-xs btn-danger deletedetail" data-id="{{$item->id}}"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3" class="text-right">TOTAL SKS</td>
            <td>{{$data->detail->where('semester','4')->map->matakuliah->sum('sks')}}</td>
            <td></td>
          </tr>
        </tfoot>
        @endif
      </table>
      <br/>

      <strong>SEMESTER 5</strong>
      <table class="table table-bordered">
        <thead>
          <tr style="background-color: #3c8dbc; color:white">
            <th width="2%">#</th>
            <th width="5%">Kode</th>
            <th width="40%">Mata Kuliah</th>
            <th width="5%" class="text-center">SKS</th>
            <th width="5%">Aksi</th>
          </tr>
        </thead>
        @if ($data->detail != null)
        <tbody>
          @foreach ($data->detail->where('semester','5') as $key => $item)
          <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->kode_mata_kuliah}}</td>
            <td>{{$item->matakuliah->nama}}</td>
            <td>{{$item->matakuliah->sks}}</td>
            <td>
              <a href="#" class="btn btn-xs btn-danger deletedetail" data-id="{{$item->id}}"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3" class="text-right">TOTAL SKS</td>
            <td>{{$data->detail->where('semester','5')->map->matakuliah->sum('sks')}}</td>
            <td></td>
          </tr>
        </tfoot>
        @endif
      </table>
      <br/>

      <strong>SEMESTER 6</strong>
      <table class="table table-bordered">
        <thead>
          <tr style="background-color: #3c8dbc; color:white">
            <th width="2%">#</th>
            <th width="5%">Kode</th>
            <th width="40%">Mata Kuliah</th>
            <th width="5%" class="text-center">SKS</th>
            <th width="5%">Aksi</th>
          </tr>
        </thead>
        @if ($data->detail != null)
        <tbody>
          @foreach ($data->detail->where('semester','6') as $key => $item)
          <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->kode_mata_kuliah}}</td>
            <td>{{$item->matakuliah->nama}}</td>
            <td>{{$item->matakuliah->sks}}</td>
            <td>
              <a href="#" class="btn btn-xs btn-danger deletedetail" data-id="{{$item->id}}"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3" class="text-right">TOTAL SKS</td>
            <td>{{$data->detail->where('semester','6')->map->matakuliah->sum('sks')}}</td>
            <td></td>
          </tr>
        </tfoot>
        @endif
      </table>
      <br/>

      <strong>SEMESTER 7</strong>
      <table class="table table-bordered">
        <thead>
          <tr style="background-color: #3c8dbc; color:white">
            <th width="2%">#</th>
            <th width="5%">Kode</th>
            <th width="40%">Mata Kuliah</th>
            <th width="5%" class="text-center">SKS</th>
            <th width="5%">Aksi</th>
          </tr>
        </thead>
        @if ($data->detail != null)
        <tbody>
          @foreach ($data->detail->where('semester','7') as $key => $item)
          <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->kode_mata_kuliah}}</td>
            <td>{{$item->matakuliah->nama}}</td>
            <td>{{$item->matakuliah->sks}}</td>
            <td>
              <a href="#" class="btn btn-xs btn-danger deletedetail" data-id="{{$item->id}}"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3" class="text-right">TOTAL SKS</td>
            <td>{{$data->detail->where('semester','7')->map->matakuliah->sum('sks')}}</td>
            <td></td>
          </tr>
        </tfoot>
        @endif
      </table>
      <br/>

      <strong>SEMESTER 8</strong>
      <table class="table table-bordered">
        <thead>
          <tr style="background-color: #3c8dbc; color:white">
            <th width="2%">#</th>
            <th width="5%">Kode</th>
            <th width="40%">Mata Kuliah</th>
            <th width="5%" class="text-center">SKS</th>
            <th width="5%">Aksi</th>
          </tr>
        </thead>
        @if ($data->detail != null)
        <tbody>
          @foreach ($data->detail->where('semester','8') as $key => $item)
          <tr>
            <td>{{$key + 1}}</td>
            <td>{{$item->kode_mata_kuliah}}</td>
            <td>{{$item->matakuliah->nama}}</td>
            <td>{{$item->matakuliah->sks}}</td>
            <td>
              <a href="#" class="btn btn-xs btn-danger deletedetail" data-id="{{$item->id}}"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3" class="text-right">TOTAL SKS</td>
            <td>{{$data->detail->where('semester','8')->map->matakuliah->sum('sks')}}</td>
            <td></td>
          </tr>
        </tfoot>
        @endif
      </table>
      
    </div>
  </form>
</div>

<div class="modal fade" id="modal-hapus">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="ion ion-clipboard"></i> Hapus Data</h4>
      </div>
      <form method="post" action="/superadmin/data/kurikulum/delete-detail">
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
</div>
@endsection

@push('js')
<script>
  $(document).on('click', '.deletedetail', function() {
    
    $('#uuid').val($(this).data('id'));
    $("#modal-hapus").modal({
      backdrop: 'static',
      keyboard: false
  });
});
</script>
<!-- Select2 -->
<script src="/stmik/bower_components/select2/dist/js/select2.full.min.js"></script>

<script>
  $(function () {
    $('.select2').select2()
  })
</script>
@endpush