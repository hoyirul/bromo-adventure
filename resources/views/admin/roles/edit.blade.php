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
        <a href="/admin/role" class="btn btn-warning text-white">Kembali</a>
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
          <form class="form-horizontal form-material mx-2" action="/admin/role/{{ $tables->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
              <label class="col-md-12">Role</label>
              <div class="col-md-12">
                <input type="text" placeholder="Role" name="role" class="form-control form-control-line @error('role') is-invalid @enderror" value="{{ $tables->role }}">
                @error('role')
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