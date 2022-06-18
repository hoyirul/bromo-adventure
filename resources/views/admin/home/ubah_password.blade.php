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
    <div class="col-lg-12 col-xlg-9 col-md-12">
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

          <form class="form-horizontal form-material mx-2" action="/admin/update_password" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
              <label for="example-email" class="col-md-12">Email</label>
              <div class="col-md-12">
                <input type="email" placeholder="johnathan@admin.com"
                  class="form-control form-control-line" name="email"
                  id="example-email" value="{{ Auth::user()->email }}" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-6">Password Baru</label>
              <input type="password" placeholder="Password Baru"
                class="form-control form-control-line @error('password') is-invalid @enderror" name="password">
              
              @error('password')
                <span class="invalid-feedback" name="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label class="col-md-6">Konfirmasi Password</label>
              <input type="password" placeholder="Konfirmasi Password"
                class="form-control form-control-line @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
              
              @error('password_confirmation')
                <span class="invalid-feedback" name="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            
            <div class="form-group">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-success text-white">Update Password</button>
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