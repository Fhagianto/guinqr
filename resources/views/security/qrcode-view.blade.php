@extends('layout.template')
@section('head')
    <title>E-GUIN QR | Scan QR CODE</title>

@endsection

@section('main')
{{-- {{ $id = ; }} --}}
{{-- {{ dd($id) }} --}}
{{-- {{ $tamuunit = TamuUnit::where("id_tamu_unit", $id)->get(); }} --}}
{{-- {!! $tamuunit = DB::table('tamu_units')->where('id_tamu_unit', $_GET['idT'])->get(); !!} --}}
{{-- {{ $tamuunit = DB::table('tamu_units')->where('id_tamu_unit', $_GET['idT'])->get(); }} --}}
{{-- {{ dd($tamuunit) }} --}}
{{-- {{ dd($tamuacara) }} --}}
{{-- {{ dd($tamuunit,$tamuacara) }} --}}
{{-- {{ dd(Auth::user()->id) }} --}}

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="text-transform: capitalize">Cek-in Tamu</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card card-outline card-secondary">
            <div class="card-header">
                <h3 class="card-title">Data Tamu</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    @if ($tamuunit == "null" &&$tamuacara == "null")
                    <div class="alert alert-warning">
                        <center>
                        <strong>Maaf, Data tamu sudah Cek-in</strong>
                        </center>
                    </div>
                    @else
                    @if ($tamuunit == "null")
                        <tr>
                            <th>nama</th>
                            <th>no_telpon</th>
                            <th>email</th>
                            <th>acara</th>
                        </tr>
                        <tr>
                            <td>{{ $tamuacara->nama }}</td>
                            <td>{{ $tamuacara->no_telpon }}</td>
                            <td>{{ $tamuacara->email }}</td>
                            <td>{{ $tamuacara->acara->nama_acara }}</td>
                        </tr>
                    @endif
                    @if ($tamuacara == "null")
                        <tr>
                            <th>nama</th>
                            <th>no_telpon</th>
                            <th>email</th>
                            <th>keperluan</th>
                            <th>instansi</th>
                            <th>unit tujuan</th>
                            <th>tanggal</th>
                        </tr>
                        <tr>
                            <td>{{ $tamuunit->nama }}</td>
                            <td>{{ $tamuunit->no_telpon }}</td>
                            <td>{{ $tamuunit->email }}</td>
                            <td>{{ $tamuunit->keperluan }}</td>
                            <td>{{ $tamuunit->instansi }}</td>
                            <td>{{ $tamuunit->unit->nama_unit }}</td>
                            <td>{{ $tamuunit->tgl }}</td>
                        </tr>
                    @endif
                    @endif


                </table>
            </div>
            <div class="card-footer text-center">
                @if ($tamuunit == "null" &&$tamuacara == "null")
                <a class="btn btn-danger" href="/security/scan" role="button">Kembali</a>
                @else
                    @if ($tamuunit == "null")
                    <form action="{{url('security/registrasi/tamu-acara')}}" method="POST" id="regForm">
                        @csrf
                        <input type="hidden" id="id_tamu_acara" name="id_tamu_acara" value='{{ $tamuacara->id_tamu_acara }}'>
                        <input type="hidden" id="id_user" name="id_user" value='{{ Auth::user()->id }}'>
                        <button class="btn btn-primary" type="submit">Cek-In</button>
                        <a class="btn btn-danger" href="/security/scan" role="button">Kembali</a>
                    </form>
                    @endif
                    @if ($tamuacara == "null")
                    <form action="{{url('security/registrasi/tamu-unit')}}" method="POST" id="regForm">
                        @csrf
                        <input type="hidden" id="id_tamu_unit" name="id_tamu_unit" value='{{ $tamuunit->id_tamu_unit }}'>
                        <input type="hidden" id="id_user" name="id_user" value='{{ Auth::user()->id }}'>
                        <button class="btn btn-primary" type="submit">Cek-In</button>
                        <a class="btn btn-danger" href="/security/scan" role="button">Kembali</a>
                    </form>
                    @endif
                @endif

            </div>
        </div>
        {{-- <div class="card card-outline card-secondary">
            <div class="card-header">
                <h3 class="card-title">Data Tamu</h3>
            </div>
            <div class="card-body">
                <div class="">
                    <table>
                        <tbody>
                            <tr>
                                <td>nama</td>
                                <td> : </td>
                                <td>{{ $tamuunit[0]->nama }}</td>
                            </tr>
                            <tr>
                                <td>no_telpon</td>
                                <td> : </td>
                                <td>{{ $tamuunit[0]->no_telpon }}</td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td> : </td>
                                <td>{{ $tamuunit[0]->email }}</td>
                            </tr>
                            <tr>
                                <td>keperluan</td>
                                <td> : </td>
                                <td>{{ $tamuunit[0]->keperluan }}</td>
                            </tr>
                            <tr>
                                <td>instansi</td>
                                <td> : </td>
                                <td>{{ $tamuunit[0]->instansi }}</td>
                            </tr>
                            <tr>
                                <td>nama_unit</td>
                                <td> : </td>
                                <td>{{ $tamuunit[0]->unit->nama_unit }}</td>
                            </tr>
                            <tr>
                                <td>tgl</td>
                                <td> : </td>
                                <td>{{ $tamuunit[0]->tgl }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-center">
                <button type="button" class="btn btn-primary" href="#">Chek-in</button>
                <a class="btn btn-danger" href="/security/scan" role="button">Kembali</a>
            </div>
        </div> --}}
        <!-- /.row -->
        <!-- Main row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

