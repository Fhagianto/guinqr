  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    @can('isSadmin')
      <a class="brand-link" href="{{('/superadmin/dashboard1')}}">
        <img src="{{ asset ('img') }}/logo2.svg" alt="E-GUIN Logo" class="brand-image img-circle elevation-2">
        <span class="brand-text font-weight-light"><b>E-GUIN</b>QR</span>
      </a>
    @endcan
    @can('isUserunit')
      <a class="brand-link" href="{{('/userunit/dashboard2')}}">
        <img src="{{ asset ('img') }}/logo2.svg" alt="E-GUIN Logo" class="brand-image img-circle elevation-2">
        <span class="brand-text font-weight-light"><b>E-GUIN</b>QR</span>
      </a>
    @endcan
    @can('isSecurity')
      <a class="brand-link" href="#">
        <img src="{{ asset ('img') }}/logo2.svg" alt="E-GUIN Logo" class="brand-image img-circle elevation-2">
        <span class="brand-text font-weight-light"><b>E-GUIN</b>QR</span>
      </a>
    @endcan
    @can('isUseracara')
      <a class="brand-link" href="#">
        <img src="{{ asset ('img') }}/logo2.svg" alt="E-GUIN Logo" class="brand-image img-circle elevation-2">
        <span class="brand-text font-weight-light"><b>E-GUIN</b>QR</span>
      </a>
    @endcan

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- SidebarSearch Form -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               @can('isSadmin')
               <li class="nav-header ">Menu</li>
                   <li class="nav-item">
                     <a href="/superadmin/usermanage" class="nav-link {{Request::is('superadmin/usermanage') ? 'active':''}}">
                       <i class="nav-icon fas fa-circle-user"></i>
                       <p>User Management</p>
                     </a>
                   </li>
               </li>
              {{--  <li class="nav-item">
                 <a href="" class="nav-link">
                   <i class="nav-icon fas fa-copy"></i>
                   <p>
                     Data Master
                     <i class="fas fa-angle-left right"></i>
                     <span class="badge badge-info right">6</span>
                   </p>
                 </a>
                 <ul class="nav nav-treeview">
                   <li class="nav-item">
                     <a href="/userm" class="nav-link {{Request::is('userm') ? 'active':''}}">
                       <i class="far fa-circle nav-icon"></i>
                       <p>User Management</p>
                     </a>
                   </li>
                 </ul>
               </li> --}}
               <li class="nav-header ">Manage Environtment</li>
               <li class="nav-item">
                 <a href="/superadmin/acaramanage" class="nav-link {{Request::is('superadmin/acaramanage') ? 'active':''}}">
                 <i class="nav-icon fas fa-clipboard"></i>
                 <p>Acara</p>
                 </a>
              </li>
               <li class="nav-item">
                 <a href="/superadmin/unitmanage/" class="nav-link {{Request::is('superadmin/unitmanage') ? 'active':''}}">
                 <i class="nav-icon fas fa-computer"></i>
                 <p>Unit</p>
                 </a>
              </li>
               @endcan
               @can('isUserunit')
               <li class="nav-header ">Menu
               <li class="nav-item">
                 <a href="/userunit/dashboard2" class="nav-link {{Request::is('userunit/dashboard2') ? 'active':''}}">
                   <i class="nav-icon fas fa-passport"></i>
                   <p>Dashboard</p>
                 </a>
               </li>
               <li class="nav-item">
                  <a href="/userunit/tamuunit-list" class="nav-link {{Request::is('userunit/tamuunit-list') ? 'active':''}}">
                  <i class="nav-icon fas fa-computer"></i>
                  <p>Unit</p>
                  </a>
             </li>
           </li>
          {{--  <li class="nav-item">
             <a href="" class="nav-link">
               <i class="nav-icon fas fa-copy"></i>
               <p>
                 Data Master
                 <i class="fas fa-angle-left right"></i>
                 <span class="badge badge-info right">6</span>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="/userm" class="nav-link {{Request::is('userm') ? 'active':''}}">
                   <i class="far fa-circle nav-icon"></i>
                   <p>User Management</p>
                 </a>
               </li>
             </ul>
           </li> --}}
          {{--  <li class="nav-item">
             <a href="/userunit/tamuacara-list" class="nav-link {{Request::is('userunit/tamuacara-list') ? 'active':''}}">
             <i class="nav-icon fas fa-clipboard"></i>
             <p>Acara</p>
             </a>
          </li --}}>
           
               @endcan
          @can('isUseracara')
          <li class="nav-item ">
            <a href="/useracara/dashboard" class="nav-link {{ Request::is('dashboard')?'active':'' }}">
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


