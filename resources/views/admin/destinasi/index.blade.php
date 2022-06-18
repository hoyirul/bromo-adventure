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
        <a href="/admin/destinasi/create" class="btn btn-success text-white">Tambah</a>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tabel {{ $title }}</h4>
          <h6 class="card-title"><i
            class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Tabel {{ $title }}
            Outside Padding
          </h6>

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

          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Destinasi</th>
                  <th scope="col">Dibuat</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($tables as $item)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->destinasi }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                      <form action="/admin/destinasi/{{ $item->id }}" method="POST" onsubmit="return confirm('Yakin akan mengahpus?')">
                      @csrf
                      @method('DELETE')

                      <a href="/admin/destinasi/{{ $item->id }}/edit" class="btn btn-info btn-sm">Ubah</a>
                      <button type="submit" class="btn btn-danger btn-sm text-white">Hapus</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection