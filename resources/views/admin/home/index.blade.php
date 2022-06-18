@extends('admin.layouts.main')

@section('content')
<div class="page-breadcrumb">
  <div class="row align-items-center">
    <div class="col-5">
      <h4 class="page-title">Dashboard</h4>
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
        <a href="/admin/transaksi" class="btn btn-danger text-white">Transaksi ({{ $count_transaksi }})</a>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">

  <div class="row">
    <!-- column -->
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- title -->
          <div class="d-md-flex">
            <div>
              <h4 class="card-title">Tabel Users</h4>
              <h5 class="card-subtitle">Overview of Tabel Users</h5>
            </div>
          </div>
          <!-- title -->
        </div>
        <div class="table-responsive">
          <table class="table v-middle">
            <thead>
              <tr class="bg-light">
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Dibuat</th>
                <th>Diubah</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tables as $item)
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="m-r-10">
                        <a class="btn btn-circle d-flex btn-info text-white">{{ strtoupper(Str::substr($item->name, 0, 2)) }}</a>
                      </div>
                      <div class="">
                        <h4 class="m-b-0 font-16">{{ $item->name }}</h4>
                      </div>
                    </div>
                  </td>
                  <td>{{ $item->email }}</td>
                  <td>
                    @if ($item->role->role == 'admin')
                      <label class="label label-danger">{{ $item->role->role }}</label>
                    @else
                      <label class="label label-info">{{ $item->role->role }}</label>
                    @endif
                  </td>
                  <td>{{ $item->created_at }}</td>
                  <td>{{ $item->updated_at }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Temerpatur</h4>
          <div class="d-flex align-items-center flex-row m-t-30">
            <div class="display-5 text-info"><i class="wi wi-day-showers"></i>
              <span>73<sup>°</sup></span>
            </div>
            <div class="m-l-10">
              <h3 class="m-b-0">{{ date('D, M, Y') }}</h3>
              <small>Jakarta, Indonesia</small>
            </div>
          </div>
          <table class="table no-border mini-table m-t-20">
            <tbody>
              <tr>
                <td class="text-muted">Wind</td>
                <td class="font-medium">ESE 17 mph</td>
              </tr>
              <tr>
                <td class="text-muted">Humidity</td>
                <td class="font-medium">83%</td>
              </tr>
              <tr>
                <td class="text-muted">Pressure</td>
                <td class="font-medium">28.56 in</td>
              </tr>
              <tr>
                <td class="text-muted">Cloud Cover</td>
                <td class="font-medium">78%</td>
              </tr>
            </tbody>
          </table>
          <ul class="row list-style-none text-center m-t-30">
            <li class="col-3">
              <h4 class="text-info"><i class="wi wi-day-sunny"></i></h4>
              <span class="d-block text-muted">09:30</span>
              <h3 class="m-t-5">70<sup>°</sup></h3>
            </li>
            <li class="col-3">
              <h4 class="text-info"><i class="wi wi-day-cloudy"></i></h4>
              <span class="d-block text-muted">11:30</span>
              <h3 class="m-t-5">72<sup>°</sup></h3>
            </li>
            <li class="col-3">
              <h4 class="text-info"><i class="wi wi-day-hail"></i></h4>
              <span class="d-block text-muted">13:30</span>
              <h3 class="m-t-5">75<sup>°</sup></h3>
            </li>
            <li class="col-3">
              <h4 class="text-info"><i class="wi wi-day-sprinkle"></i></h4>
              <span class="d-block text-muted">15:30</span>
              <h3 class="m-t-5">76<sup>°</sup></h3>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Feeds</h4>
          <div class="feed-widget">
            <ul class="list-style-none feed-body m-0 p-b-20">
              <li class="feed-item">
                <div class="feed-icon bg-info"><i class="far fa-bell"></i></div>
                Total Destinasi - {{ $count_destinasi }} data. <span class="ms-auto font-12 text-muted">Just Now</span>
              </li>
              <li class="feed-item">
                <div class="feed-icon bg-success"><i class="ti-server"></i></div>
                Total Tipe Paket - {{ $count_tipe }} data.<span class="ms-auto font-12 text-muted">Just Now</span>
              </li>
              <li class="feed-item">
                <div class="feed-icon bg-warning"><i class="ti-shopping-cart"></i></div>
                Total Paket - {{ $count_paket }} data.<span class="ms-auto font-12 text-muted">Just Now</span>
              </li>
              <li class="feed-item">
                <div class="feed-icon bg-danger"><i class="ti-user"></i></div>
                Total User - {{ $count_user }} data.<span class="ms-auto font-12 text-muted">Just Now</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection