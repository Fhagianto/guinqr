  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
        <img src="{{ asset ('img') }}/logo2.svg" alt="E-GUIN Logo" class="brand-image img-circle elevation-2">
        <span class="brand-text font-weight-light"><b>E-GUIN</b>QR</span>
      </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- SidebarSearch Form -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @can('isSadmin')
          <li class="nav-item ">
            <a href="/superadmin" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt-fast"></i>
            <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/unit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Unit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Acara</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>User Management</p>
            </a>
          </li>
          @endcan
          @can('isAdmin')
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Belanja Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Pembayaran</p>
                </a>
              </li>
            </ul>
          </li>
          @endcan
          @can('isUseracara')
          <li class="nav-item ">
            <a href="/security/dashboard" class="nav-link {{ Request::is('dashboard')?'active':'' }}">
            <i class="nav-icon fas fa-tachometer-alt-fast"></i>
            <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('acara')}}" class="nav-link {{ Request::is('acara')?'active':'' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Acara</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ Request::is('acara1')?'active':'' }}">
              <i class="far fa-circle nav-icon"></i>
              <p>List Tamu Acara</p>
            </a>
          </li>

          @endcan
          @can('isSecurity')
            <li class="nav-header ">Menu</li>
            <li class="nav-item ">
                <a href="/security/dashboard" class="nav-link {{ Request::is('dashboard')?'active':'' }}">
                <i class="nav-icon fas fa-tachometer-alt-fast"></i>
                <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/security/datatamuunit" class="nav-link {{ Request::is('security/datatamuunit')?'active':'' }}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Data tamu Unit</p>
                </a>
            </li>
                <li class="nav-item">
                <a href="/security/datatamuacara" class="nav-link {{ Request::is('security/datatamuacara')?'active':'' }}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Data tamu acara</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/security/scan" class="nav-link {{ Request::is('security/scan')?'active':'' }}">
                <i class="nav-icon fas fa-qrcode"></i>
                <p>Scan Qr Code</p>
                </a>
            </li>
          @endcan

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


