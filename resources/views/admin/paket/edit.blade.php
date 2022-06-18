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
        <a href="/admin/paket" class="btn btn-warning text-white">Kembali</a>
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
          <form class="form-horizontal form-material mx-2" action="/admin/paket/{{ $tables->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="form-group">
              <label class="col-md-12">Role</label>
              <div class="col-md-12">
                <select name="tipe_id" id="tipe_id" class="form-control form-control-line @error('tipe_id') is-invalid @enderror">
                  @foreach ($tipes as $row)
                    <option value="{{ $row->id }}" {{ ($tables->tipe_id == $row->id) ? 'selected' : '' }}>{{ $row->tipe }}</option>
                  @endforeach
                </select>
                
                @error('role')
                  <span class="invalid-feedback" name="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12">Mulai Harga</label>
              <div class="col-md-12">
                <input type="number" name="mulai_harga" placeholder="Mulai Harga" class="form-control form-control-line @error('mulai_harga') is-invalid @enderror" value="{{ $tables->mulai_harga }}">
                
                @error('mulai_harga')
                  <span class="invalid-feedback" name="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12">Foto</label>
              <div class="col-md-12">
                <input type="file" name="foto" placeholder="Mulai Harga" class="form-control form-control-line @error('foto') is-invalid @enderror" value="{{ $tables->foto }}">
                
                @error('foto')
                  <span class="invalid-feedback" name="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12">Deskripsi</label>
              <div class="col-md-12">
                <textarea id="editor" name="deskripsi" class="@error('foto') is-invalid @enderror">{{ $tables->deskripsi }}</textarea>
                
                @error('deskripsi')
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