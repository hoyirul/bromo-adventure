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
        <a href="/admin/transaksi/export" target="_blank" class="btn btn-danger text-white">Export PDF (Transaksi)</a>
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
                  <th scope="col">#ID Transaksi</th>
                  <th scope="col">Tipe Paket</th>
                  <th scope="col">Pemesan</th>
                  <th scope="col">Nomor HP</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Tanggal Pesan</th>
                  <th scope="col">Tanggal Bayar</th>
                  <th scope="col">Tanggal Tour</th>
                  {{-- <th scope="col">Total</th> --}}
                  <th scope="col">Dibuat</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($tables as $item)
                  <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->paket->tipe->tipe }}</td>
                    <td>{{ $item->nama_pemesan }}</td>
                    <td>{{ $item->nomor_hp }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>{{ $item->tanggal_pesan }}</td>
                    <td>
                      @if ($item->status == 'unpaid')
                        <a href="/admin/transaksi/{{ $item->id }}/bayar" class="btn btn-primary text-white btn-sm">Bayar</a>
                      @else
                        <span class="btn btn-success text-white btn-sm">{{ $item->tanggal_bayar }}</span>
                      @endif
                    </td>
                    <td>{{ $item->tanggal_tour }}</td>
                    {{-- <td>{{ $item->total }}</td> --}}
                    <td>{{ substr($item->created_at, 0, 10) }}</td>
                    <td>
                      @if ($item->status == 'unpaid')
                        <span class="btn btn-danger text-white btn-sm">{{ $item->status }}</span>
                      @else
                        <span class="btn btn-success text-white btn-sm">{{ $item->status }}</span>
                      @endif
                    </td>
                    <td>
                      <a href="/admin/transaksi/{{ $item->id }}/show" class="btn btn-info btn-sm">Detail</a>
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