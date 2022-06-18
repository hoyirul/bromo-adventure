@extends('admin.layouts.main')
@section('content')
<div class="page-breadcrumb">
  <div class="row align-items-center">
    <div class="col-5">
      <h4 class="page-title">Tabel {{ $title }}</h4>
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
        <a href="/admin/user" class="btn btn-warning text-white">Kembali</a>
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
          <form class="form-horizontal form-material mx-2" action="/admin/user" method="post">
            @csrf
            
            <div class="form-group mb-3">
              <label class="col-md-12">Nama User</label>
              <div class="col-md-12">
                <input type="text" placeholder="Nama"
                  class="form-control form-control-line @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                
                @error('name')
                  <span class="invalid-feedback" name="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12">Email</label>
              <div class="col-md-12">
                <input type="email" placeholder="Email"
                  class="form-control form-control-line @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                
                @error('email')
                  <span class="invalid-feedback" name="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12">Role</label>
              <div class="col-md-12">
                <select name="role_id" id="role_id" class="form-control form-control-line @error('role_id') is-invalid @enderror">
                  @foreach ($roles as $row)
                    <option value="{{ $row->id }}" {{ (old('role_id') == $row->id) ? 'selected' : '' }}>{{ $row->role }}</option>
                  @endforeach
                </select>
                
                @error('role')
                  <span class="invalid-feedback" name="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label class="col-md-6">Password</label>
                <input type="password" placeholder="Password"
                  class="form-control form-control-line @error('password') is-invalid @enderror" name="password">
                
                @error('password')
                  <span class="invalid-feedback" name="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>

              <div class="col-md-6">
                <label class="col-md-6">Confirm Password</label>
                <input type="password" placeholder="Confirm Password"
                  class="form-control form-control-line @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
                
                @error('password_confirmation')
                  <span class="invalid-feedback" name="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-success text-white">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Column -->
  </div>
</div>
@endsection