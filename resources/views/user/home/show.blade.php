@extends('user.layouts.main')

@section('content')

<section id="packets">
  <div class="container">
    <div class="row flex-md-center">
      <div class="col-md-11 col-lg-4 py-md-3 px-4 pt-5 px-md-3 px-lg-0 px-xl-2 order-lg-1">
        <h1 class="fw-bold fs-md-3 fs-xl-5">Yuk Ngetrip Sama Bromo Adventure.</h1>
        <hr class="text-primary my-4 my-lg-3 my-xl-4" style="height:3px; width:70px;" />
        <p class="lh-lg text-justify">Bromo Adventure adalah sebuah platform pemesanan mobil hartop/jeep untuk trip ke Bromo Semeru Tengger.</p>
        <form action="/checkout" method="POST" onsubmit="return confirm('Apakah anda yakin akan memesan paket ini?')">
          @csrf

          <input type="hidden" name="paket_id" value="{{ $packets->id }}">
          <div class="form-group mb-3">
            <label>Nama</label>
            <input type="text" name="nama_pemesan" placeholder="Nama Anda" class="form-control text-dark @error('nama_pemesan') is-invalid @enderror">
            @error('nama_pemesan')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="form-group mb-3">
            <label>Nomor HP</label>
            <input type="number" name="nomor_hp" placeholder="Nomor HP Anda" class="form-control text-dark @error('nomor_hp') is-invalid @enderror">
            @error('nomor_hp')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="form-group mb-3">
            <label>Tanggal Trip</label>
            <input type="date" name="tanggal_tour" placeholder="Tanggal Trip" class="form-control text-dark @error('tanggal_tour') is-invalid @enderror">
            @error('tanggal_tour')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="form-group mb-3">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control text-dark" placeholder="Keterangan"></textarea>
          </div>

          <button type="submit" class="btn btn-lg btn-primary hover-top">Checkout</button>
        </form>
      </div>
      <div class="col-lg-8 order-lg-0 order-1 px-4 px-md-3 py-8 py-md-3">
        <div class="row h-100">

          <style>
            .img-trip{
              object-fit: cover;
              height: 400px !important;
            }
          </style>

          <div class="col-md-12">
            <div class="card text-white hover-top">
              <img class="img-fluid img-trip" src="{{ asset('storage/'.$packets->foto) }}" alt="" />
              <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-dark-gradient">
                <div class="pt-3"><span style="font-size: 12pt" class="badge bg-primary">Mulai Rp. {{ number_format($packets->mulai_harga / 1000) }}K</span></div>
                <div class="ps-3 d-flex justify-content-between align-items-center">
                  <h5 style="font-size: 12pt" class="text-white">{{ $packets->tipe->tipe }}</h5>
                  {{-- <h6 class="text-600">3 days</h6> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12 mt-3">
            {!! $packets->deskripsi !!}
          </div>

        </div>

      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>

<section style="margin-top: -100px" class="pt-5" id="destinasi">

  <div class="container">
    <div class="row flex-center mb-5">
      <div class="col-lg-8 text-center">
        <h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5">Destinasi Kami</h1>
        <hr class="mx-auto text-primary my-4" style="height:3px; width:70px;" />
        <p class="mx-auto">Taman Nasional Bromo Tengger Semeru adalah taman nasional di Jawa Timur, Indonesia, yang terletak di wilayah administratif Kabupaten Pasuruan, Kabupaten Malang, Kabupaten Lumajang dan Kabupaten Probolinggo.</p>
      </div>
    </div>
    <div class="row h-100 flex-center">
      <div class="row flex-lg-center">
        <div class="col-md-12">
          <div class="row h-100">
            
            <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
              <div class="card h-100 w-100 text-white"><a class="stretched-link" href="#destinasi"><img class="img-fluid" src="{{ asset('landing/assets/img/adventure/penanjakan.jpeg') }}" alt="" /></a>
                <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                  <h5 class="text-white fs--1">Penanjakan</h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
              <div class="card h-100 w-100 text-white"><a class="stretched-link" href="#destinasi"><img class="img-fluid" src="{{ asset('landing/assets/img/adventure/widodaren.jpeg') }}" alt="" /></a>
                <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                  <h5 class="text-white fs--1">Bukit Widodaren</h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
              <div class="card h-100 w-100 text-white"><a class="stretched-link" href="#destinasi"><img class="img-fluid" src="{{ asset('landing/assets/img/adventure/kawah-bromo.jpeg') }}" alt="" /></a>
                <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                  <h5 class="text-white fs--1">Kawah Bromo</h5>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
              <div class="card h-100 w-100 text-white"><a class="stretched-link" href="#destinasi"><img class="img-fluid" src="{{ asset('landing/assets/img/adventure/lautan-pasir.png') }}" alt="" /></a>
                <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                  <h5 class="text-white fs--1">Lautan Pasir</h5>
                </div>
              </div>
            </div>

            <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
              <div class="card h-100 w-100 text-white"><a class="stretched-link" href="!#"><img class="img-fluid" src="{{ asset('landing/assets/img/adventure/bukit-teletubies.jpeg') }}" alt="" /></a>
                <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                  <h5 class="text-white fs--1">Bukit Teletubbies</h5>
                </div>
              </div>
            </div>

            <div class="col-6 col-sm-4 col-xl-1 mb-3 hover-top px-2"></div>

          </div>    
        </div>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>

@endsection