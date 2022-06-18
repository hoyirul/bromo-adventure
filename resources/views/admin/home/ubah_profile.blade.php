@extends('admin.layouts.main')
@section('content')
<div class="page-breadcrumb">
  <div class="row align-items-center">
    <div class="col-5">
      <h4 class="page-title">{{ $title }}</h4>
      <div class="d-flex align-items-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="col-7">
      <div class="text-end upgrade-btn">
        <a href="/admin/home" class="btn btn-primary text-white">Dashboard</a>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <!-- Row -->
  <div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
      <div class="card">
        <div class="card-body">
          <center class="m-t-30">
            @if (Auth::user()->foto == null)  
              <img src="{{ asset('assets/images/users/1.jpg') }}" class="img-circle" width="150" />
            @else
              <img src="{{ asset('storage/'.Auth::user()->foto) }}" class="img-circle" width="150" />
            @endif
            <h4 class="card-title m-t-10">{{ Auth::user()->name }}</h4>
            <h6 class="card-subtitle">Accoubts {{ Auth::user()->role->role }} BRADV corp</h6>
            <div class="row text-center justify-content-md-center">
              <div class="col-4"><a href="javascript:void(0)" class="link"><i
                class="icon-people"></i>
                <font class="font-medium">254</font>
                </a>
              </div>
              <div class="col-4"><a href="javascript:void(0)" class="link"><i
                class="icon-picture"></i>
                <font class="font-medium">54</font>
                </a>
              </div>
            </div>
          </center>
        </div>
      </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
      <div class="card">
        <div class="card-body">

          @if(session('success'))
            <div class="alert alert-success">
              {{session('success')}}
            </div>
          @endif
          @if(session('danger'))
            <div class="alert alert-danger">
              {{session('danger')}}
            </div>
          @endif

          <form class="form-horizontal form-material mx-2" action="/admin/update_profile" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
              <label class="col-md-12">Full Name</label>
              <div class="col-md-12">
                <input type="text" placeholder="Johnathan Doe"
                  class="form-control form-control-line" value="{{ Auth::user()->name }}" name="name">
              </div>
            </div>
            <div class="form-group">
              <label for="example-email" class="col-md-12">Email</label>
              <div class="col-md-12">
                <input type="email" placeholder="johnathan@admin.com"
                  class="form-control form-control-line" name="email"
                  id="example-email" value="{{ Auth::user()->email }}" readonly>
              </div>
            </div>

            <div class="form-group">
              <label for="example-join" class="col-md-12">Join At</label>
              <div class="col-md-12">
                <input type="text" placeholder="johnathan@admin.com"
                  class="form-control form-control-line" name="join"
                  id="example-join" value="{{ Auth::user()->created_at }}" readonly>
              </div>
            </div>

            <div class="form-group">
              <label for="example-file" class="col-md-12">Foto</label>
              <div class="col-md-12">
                <input type="file"
                  class="form-control form-control-line" name="foto"
                  id="example-file" value="{{ Auth::user()->foto }}">
              </div>
            </div>
            
            <div class="form-group">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-success text-white">Update Profile</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Column -->
  </div>
  <!-- Row -->
</div>
@endsection