<aside class="left-sidebar" data-sidebarbg="skin6">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
      <ul id="sidebarnav">
        <!-- User Profile-->
        <li>
          <!-- User Profile-->
          <div class="user-profile d-flex no-block dropdown m-t-20">
            <div class="user-pic">
              @if (Auth::user()->foto == null)
                <img src="{{ asset('assets/images/users/1.jpg') }}" alt="users" class="rounded-circle" width="40" />
              @else
                <img src="{{ asset('storage/'.Auth::user()->foto) }}" alt="users" class="rounded-circle" width="40" />
              @endif
            </div>
            <div class="user-content hide-menu m-l-10">
              <a href="#" class="" id="Userdd" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <h5 class="m-b-0 user-name font-medium">{{ Auth::user()->name }} <i
                  class="fa fa-angle-down"></i></h5>
                <span class="op-5 user-email">{{ Auth::user()->email }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="Userdd">
                <a class="dropdown-item" href="/admin/ubah_profile"><i
                  class="ti-settings m-r-5 m-l-5"></i> Pengaturan</a>
                <a class="dropdown-item" href="/admin/ubah_password"><i
                  class="ti-lock m-r-5 m-l-5"></i> Ubah Password</a>
                <div class="dropdown-divider"></div>
                <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Yakin akan keluar aplikasi?')">
                  @csrf
                  <button class="dropdown-item text-danger"> <i
                    class="fa fa-power-off m-r-5 m-l-5"></i> Keluar</button>
                </form>
              </div>
            </div>
          </div>
          <!-- End User Profile-->
        </li>
        <li class="p-15 m-t-10"><a href="/admin/user/create"
          class="btn d-block w-100 btn-primary text-white no-block d-flex align-items-center"><i
          class="fa fa-plus-square"></i> <span class="hide-menu m-l-5">Buat User Baru</span> </a>
        </li>
        <!-- User Profile-->
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
          href="/admin/home" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
          class="hide-menu">Dashboard</span></a></li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
          href="/admin/user" aria-expanded="false"><i
          class="mdi mdi-account-network"></i><span class="hide-menu">User</span></a></li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
          href="/admin/destinasi" aria-expanded="false"><i class="mdi mdi-border-all"></i><span
          class="hide-menu">Destinasi</span></a></li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
          href="/admin/tipe" aria-expanded="false"><i class="mdi mdi-face"></i><span
          class="hide-menu">Tipe Paket</span></a></li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
          href="/admin/paket" aria-expanded="false"><i class="mdi mdi-file"></i><span
          class="hide-menu">Paket</span></a></li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
          href="/admin/role" aria-expanded="false"><i class="mdi mdi-alert-outline"></i><span
          class="hide-menu">Role</span></a></li>
        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
          href="/admin/transaksi" aria-expanded="false"><i class="mdi mdi-book"></i><span
          class="hide-menu">Transaksi</span></a></li>
        <li class="text-center px-4 mt-3 upgrade-btn">
          <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Yakin akan keluar aplikasi?')">
            @csrf
            <button class="btn w-100 btn-secondary text-white"> <i
              class="fa fa-power-off m-r-5 m-l-5"></i> Keluar</button>
          </form>
        </li>
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>