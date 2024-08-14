@extends('layouts.app')

@section('content')
<div class="box box-solid" style="padding: 20px;">
    <div class="box-body border-radius-none">
        <table>
            <tr>
                <td style="vertical-align: top">  
                    <h3>Selamat datang di Aplikasi Akademik [Nama Aplikasi]!</h3>

                    Kami sangat senang dan bangga menyambut Anda di platform digital kami, yang dirancang khusus untuk mendukung perjalanan akademik Anda. Di era digital ini, kami memahami betapa pentingnya kemudahan akses, efisiensi, dan kenyamanan dalam mengelola berbagai aspek akademik. Oleh karena itu, kami telah mengembangkan [Nama Aplikasi] dengan berbagai fitur inovatif yang akan membantu Anda mencapai potensi akademik terbaik Anda.
                    
                </td>
                <td> <img src="/icon/un.svg" width="70%"></td>
            </tr>
        </table>
    </div>
    <!-- /.box-body -->
    
  </div>
<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-blue">
          <span class="info-box-icon"><i class="fa fa-book"></i></span>
    
          <div class="info-box-content">
            <span class="info-box-text">TOTAL SKS SELESAI</span>
            <span class="info-box-number">0</span>
    
            <div class="progress">
              <div class="progress-bar" style="width: 70%"></div>
            </div>
                <span class="progress-description">
                    
                </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-blue">
          <span class="info-box-icon"><i class="fa fa-book"></i></span>
    
          <div class="info-box-content">
            <span class="info-box-text">TOTAL MATA KULIAH SELESAI</span>
            <span class="info-box-number">0</span>
    
            <div class="progress">
              <div class="progress-bar" style="width: 70%"></div>
            </div>
                <span class="progress-description">
                    
                </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-blue">
          <span class="info-box-icon"><i class="fa fa-users"></i></span>
    
          <div class="info-box-content">
            <span class="info-box-text">PERIODE</span>
            <span class="info-box-number">0</span>
    
            <div class="progress">
              <div class="progress-bar" style="width: 70%"></div>
            </div>
                <span class="progress-description">
                    
                </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-blue">
          <span class="info-box-icon"><i class="fa fa-user"></i></span>
    
          <div class="info-box-content">
            <span class="info-box-text">DOSEN PA</span>
            <span class="info-box-number">0</span>
    
            <div class="progress">
              <div class="progress-bar" style="width: 70%"></div>
            </div>
                <span class="progress-description">
                    
                </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    
</div>

@endsection