<header class="topbar" data-navbarbg="skin5">
  <nav class="navbar top-navbar navbar-expand-md navbar-dark">
    <div class="navbar-header" data-logobg="skin5">
      <a class="navbar-brand" href="index.html">
        <!-- Logo icon -->
        <b class="logo-icon">
          <!-- Dark Logo icon -->
          <img src="{{ asset('assets/images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
          <!-- Light Logo icon -->
          <img src="{{ asset('assets/images/logo-light-icon.png') }}" alt="homepage" class="light-logo" />
        </b>
        <!--End Logo icon -->
        <!-- Logo text -->
        <span class="logo-text">
          <!-- dark Logo text -->
          <img src="{{ asset('assets/images/logo-text.png') }}" alt="homepage" class="dark-logo" />
          <!-- Light Logo text -->
          <img src="{{ asset('assets/images/logo-light-text.png') }}" class="light-logo" alt="homepage" />
        </span>
      </a>
      <!-- This is for the sidebar toggle which is visible on mobile only -->
      <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
        class="ti-menu ti-close"></i></a>
    </div>
    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
      <ul class="navbar-nav float-start me-auto">
        <li class="nav-item search-box">
          
        </li>
      </ul>
      <ul class="navbar-nav float-end">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            @if (Auth::user()->foto == null)
              <img src="{{ asset('assets/images/users/1.jpg') }}" alt="users" class="rounded-circle me-1" width="31" />
            @else
              <img src="{{ asset('storage/'.Auth::user()->foto) }}" alt="users" class="rounded-circle me-1" width="31" />
            @endif
            {{ Auth::user()->role->role }}
          </a>
          <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/admin/ubah_profile"><i class="ti-settings m-r-5 m-l-5"></i>
            Pengaturan</a>
            <a class="dropdown-item" href="/admin/ubah_password"><i class="ti-lock m-r-5 m-l-5"></i>
            Ubah Password</a>
            <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Yakin akan keluar aplikasi?')">
              @csrf
              <button class="dropdown-item text-danger"> <i
                class="fa fa-power-off m-r-5 m-l-5"></i> Keluar</button>
            </form>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>