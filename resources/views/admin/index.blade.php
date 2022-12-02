@extends('backend-dashboard.app')
@section('title')
    Admin | Dashboard
@endsection
@section('judul')
    Dashboard
    
@endsection

@section('content')
    <div class="col-lg-12 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $pegawai }}</h3>

                <p>Jumlah Pegawai</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/pegawai" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

         <div class="col-lg-12 mb-4 order-0">
          <div class="card">
            <div class="d-flex align-items-end row">
              <div class="col-sm-7">
                <div class="card-body">
                  <h5 class="card-title text-primary">Selamat Datang Di Dashboard Admin 🎉</h5><br>
                  @auth
                       <p class="mb-4">{{ auth()->user()->name }}</p>
                  @endauth
                   
                  <i class="fa-sharp fa-solid fa-face-smile text-warning"></i>
                  <a href="javascript:;" class="">Enjoy your work !!!</a>
                </div>
              </div>
              <div class="col-sm-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                  <img src="https://demos.themeselection.com/sneat-bootstrap-html-admin-template-free/assets/img/illustrations/man-with-laptop-light.png" height="350" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                </div>
              </div>
            </div>
          </div>
        </div>
           
            
          </div>
@endsection

@section('js')
    
@endsection