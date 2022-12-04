{{-- {{ dd(Auth::guard('unit')); }} --}}
<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item dropdown">

        <a
            class="nav-link dropdown-toggle"
            id="userDropdown"
            href="#"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-user fa-fw"></i>&nbsp Hi,
            @if ( Str::length(Auth::guard('user')->user()) > 0)
                {{Auth::guard('user')->user()->name}}
            @elseif ( Str::length(Auth::guard('unit')->user()) > 0)
                {{Auth::guard('unit')->user()->nama_unit}}
            @endif
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item"data-toggle="modal" data-target="#modal-ganti_pass" href="#">Ganti Password</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
        </div>
    </li>
    </ul>
  </nav>
    <div class="modal inmodal fade" id="modal-ganti_pass" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xs">
            <form name="frm_edit" id="frm_edit" class="form-horizontal" action="{{route('ganti_pass')}}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Ganti Password</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-5 control-label">Password Baru</label>
                            <div class="col-lg-12">
                                <input type="text" name="ganti_pass" id="ganti_pass" placeholder="Password Baru" class="form-control" value=''>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <input type="hidden" name="id_buku_tamu_unit" id="id_buku_tamu_unit" value='{{ $value->id_buku_tamu_unit }}'> --}}
                        <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  <!-- /.navbar -->
