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
        <a href="/admin/transaksi" class="btn btn-warning text-white">Kembali</a>
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
          <div class="form-horizontal form-material mx-2">

            <div class="form-group">
              <label class="col-md-12">Tipe Paket</label>
              <div class="col-md-12">
                <input type="text" readonly class="form-control form-control-line" value="{{ $tables->paket->tipe->tipe }}"/>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label class="col-md-12">Nama Pemesan</label>
                <div class="col-md-12">
                  <input type="text" readonly placeholder="Nama Pemesan" name="nama_pemesan" class="form-control form-control-line @error('nama_pemesan') is-invalid @enderror" value="{{ $tables->nama_pemesan }}">
                  @error('nama_pemesan')
                    <span class="invalid-feedback" name="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <label class="col-md-12">Nomor HP</label>
                <div class="col-md-12">
                  <input type="text" readonly placeholder="Nama Pemesan" name="nama_pemesan" class="form-control form-control-line @error('nama_pemesan') is-invalid @enderror" value="{{ $tables->nomor_hp }}">
                  @error('nama_pemesan')
                    <span class="invalid-feedback" name="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label class="col-md-12">Tanggal Pesan</label>
                <div class="col-md-12">
                  <input type="text" readonly placeholder="Nama Pemesan" name="tanggal_pesan" class="form-control form-control-line @error('tanggal_pesan') is-invalid @enderror" value="{{ $tables->tanggal_pesan }}">
                  @error('tanggal_pesan')
                    <span class="invalid-feedback" name="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <label class="col-md-12">Tanggal Trip</label>
                <div class="col-md-12">
                  <input type="text" readonly placeholder="Nama Pemesan" name="tanggal_tour" class="form-control form-control-line @error('tanggal_tour') is-invalid @enderror" value="{{ $tables->tanggal_tour }}">
                  @error('tanggal_tour')
                    <span class="invalid-feedback" name="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6">
                <label class="col-md-12">Tanggal Bayar</label>
                <div class="col-md-12">
                  <input type="text" readonly placeholder="Nama Pemesan" name="tanggal_bayar" class="form-control form-control-line @error('tanggal_bayar') is-invalid @enderror" value="{{ $tables->tanggal_bayar }}">
                  @error('tanggal_bayar')
                    <span class="invalid-feedback" name="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <label class="col-md-12">Total</label>
                <div class="col-md-12">
                  <input type="text" readonly placeholder="Nama Pemesan" name="total" class="form-control form-control-line @error('total') is-invalid @enderror" value="Rp. {{ number_format($tables->total) }}">
                  @error('total')
                    <span class="invalid-feedback" name="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12">Keterangan</label>
              <div class="col-md-12">
                <textarea name="" readonly class="form-control form-control-line">{{ $tables->keterangan }}</textarea>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- Column -->
  </div>
</div>
@endsection