@extends('supadmin.template')
@section('sidebar')

<div class="sidebar-wrapper">
    <ul class="nav">
      <li class="">
        <a href="{{url('dashboard')}}">
          <i class="nc-icon nc-layout-11"></i>
          <p>Manage Admin</p>
        </a>
      </li>
      <li class="active">
        <a href="#">
          <i class="nc-icon nc-paper"></i>
          <p>Manage User</p>
        </a>
      </li>
    </ul>
</div>
      @endsection

@section('content')
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <div class="navbar-toggle">
            <button type="button" class="navbar-toggler">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </button>
          </div>
          <a class="navbar-brand" href="javascript:;">Paper Dashboard 2</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
          <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
          <form>
            <div class="input-group no-border">
              <input type="text" value="" class="form-control" placeholder="Search...">
              <div class="input-group-append">
                <div class="input-group-text">
                  <i class="nc-icon nc-zoom-split"></i>
                </div>
              </div>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link btn-magnify" href="javascript:;">
                <p>
                  <span class="d-lg-none d-md-block">Stats</span>
                </p>
              </a>
            </li>
            <li class="nav-item btn-rotate dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="nc-icon nc-settings-gear-65"></i>
                <p>
                  <span class="d-lg-none d-md-block">Some Actions</span>
                </p>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <x-responsive-nav-link :href="route('logout')"
                          onclick="event.preventDefault();
                                      this.closest('form').submit();">
                      {{ __('Log Out') }}
                  </x-responsive-nav-link>
              </form>
              </div>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link btn-rotate" href="javascript:;">
                <i class="nc-icon nc-settings-gear-65"></i>
                <p>
                  <span class="d-lg-none d-md-block">Account</span>
                </p>
              </a>
            </li> --}}
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
      <div class="container">
        <div class="card">
            <div class="card-header">
              <h4 class="card-title">Team Members</h4>
            </div>
            <div class="card-body">
              <ul class="list-unstyled team-members">
                <li>
                  <div class="row">
                    <div class="col-md-2 col-2">
                      <div class="avatar">
                        <img src="../assets/img/faces/ayo-ogunseinde-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                      </div>
                    </div>
                    <div class="col-md-7 col-7">
                      DJ Khaled
                      <br />
                      <span class="text-muted"><small>Offline</small></span>
                    </div>
                    <div class="col-md-3 col-3 text-right">
                      <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-2 col-2">
                      <div class="avatar">
                        <img src="../assets/img/faces/joe-gardner-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                      </div>
                    </div>
                    <div class="col-md-7 col-7">
                      Creative Tim
                      <br />
                      <span class="text-success"><small>Available</small></span>
                    </div>
                    <div class="col-md-3 col-3 text-right">
                      <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-2 col-2">
                      <div class="avatar">
                        <img src="../assets/img/faces/clem-onojeghuo-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                      </div>
                    </div>
                    <div class="col-ms-7 col-7">
                      Flume
                      <br />
                      <span class="text-danger"><small>Busy</small></span>
                    </div>
                    <div class="col-md-3 col-3 text-right">
                      <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
      </div>   
    </div>
    
</div>
@endsection