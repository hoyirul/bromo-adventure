@extends('user.layouts.main')

@section('content')

@include('user.elements.banner')

<section id="packets">
  <div class="container">
    <div class="row flex-md-center">
      <div class="col-md-11 col-lg-4 py-md-3 px-4 px-md-3 px-lg-0 px-xl-2 order-lg-1">
        <h1 class="fw-bold fs-md-3 fs-xl-5">Yuk Ngetrip Sama Bromo Adventure.</h1>
        <hr class="text-primary my-4 my-lg-3 my-xl-4" style="height:3px; width:70px;" />
        <p class="lh-lg text-justify">Bromo Adventure adalah sebuah platform pemesanan mobil hartop/jeep untuk trip ke Bromo Semeru Tengger.</p><a class="btn btn-lg btn-primary hover-top" href="#videos" role="button">Jelajahi</a>
      </div>
      <div class="col-lg-8 order-lg-0 order-1 px-4 px-md-3 py-8 py-md-3">
        <div class="row h-100">

          <style>
            .img-trip{
              object-fit: cover;
              height: 300px !important;
            }
          </style>

          @foreach ($packets as $item)
            <div class="col-md-4 mb-3 mb-4">
              <a href="/paket/{{ $item->id }}/show">
                <div class="card h-100 text-white hover-top">
                  <img class="img-fluid h-100 img-trip" src="{{ asset('storage/'.$item->foto) }}" alt="" />
                  <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-dark-gradient">
                    <div class="pt-3"><span style="font-size: 9pt" class="badge bg-primary">Mulai Rp. {{ number_format($item->mulai_harga / 1000) }}K</span></div>
                    <div class="ps-3 d-flex justify-content-between align-items-center">
                      <h5 style="font-size: 12pt" class="text-white">{{ $item->tipe->tipe }}</h5>
                      {{-- <h6 class="text-600">3 days</h6> --}}
                    </div>
                  </div>
                </div>
              </a>
            </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>

<section class="pt-5" id="videos">

  <div class="container">
    <div class="row flex-center mb-5">
      <div class="col-lg-8 text-center">
        <h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5">Keindahan Bromo</h1>
        <hr class="mx-auto text-primary my-4" style="height:3px; width:70px;" />
        <p class="mx-auto">Melihat keindahan sang surya terbit dari ufuk timur di Gunung Bromo secara perlahan mungkin menjadi satu anugrah yang tak terhingga indahnya. aduan warna kuning, oranye, hitam dan biru yang dihasilkan oleh fenomena alam ini sungguh menjadi pemandangan menarik yang tersaji bagi mata kita yang melihatnya.</p>
      </div>
    </div>
    <div class="row flex-center">
      <div class="col-12">
        <div class="carousel slide" id="carouselExampleIndicators" data-bs-touch="false" data-bs-interval="false">
          <div class="row align-items-center">
            <div class="col-12 col-xxl-7 px-2">
              <div class="carousel-inner">
                <div class="carousel-item active h-100">
                  <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY">
                    <iframe src="https://www.youtube.com/embed/s5BvI5Y5DWc" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end of .container-->

</section>

<section class="pt-5" id="destinasi">

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

<section id="booking">
  <div class="bg-holder" style="background-image:url({{ asset('landing/assets/img/banner/bromo-1.svg') }});background-position:center;background-size:cover;">
  </div>
  <!--/.bg-holder-->

  <div class="container">
    <div class="row">
      <div class="col-12 py-8 text-white">
        <div class="d-flex flex-column flex-center">
          <h2 class="text-white fs-2 fs-md-3">KAMI TUNGGU ANDA DI BROMO</h2>
          <h1 class="text-white fs-2 fs-sm-4 fs-lg-7 fw-bold">Nikmati pelayanan kami ke bromo.</h1>
        </div>
        {{-- <form class="row gy-2 gx-md-2 gx-lg-4 flex-center my-6">
          <div class="col-6 col-md-3">
            <label class="visually-hidden" for="inlineFormSelectPref">Destinations</label>
            <select class="form-select" id="inlineFormSelectPref">
              <option selected="">Destinations</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-6 col-md-3">
            <label class="visually-hidden" for="autoSizingSelect">Package</label>
            <select class="form-select" id="autoSizingSelect">
              <option selected="">Package</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-6 col-md-3">
            <label class="visually-hidden" for="date">Date</label>
            <div class="input-group">
              <input class="form-control" id="date" type="date" />
            </div>
          </div>
          <div class="col-6 col-md-auto">
            <button class="btn btn-lg btn-primary" type="submit">Book Now</button>
          </div>
        </form> --}}
      </div>
    </div>
  </div>
</section>

@endsection