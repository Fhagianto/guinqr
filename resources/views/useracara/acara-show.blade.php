@extends('layout.template')
@section('head')
    <title>E-GUIN QR | Acara</title>

@endsection
@section('main')
{{-- {{ dd($acara,$tamu,$btamu) }} --}}
<div class="container-fluid">
    <div class="content header" >
        <h1 class="m-1" style="text-transform: capitalize">Acara {{ $acara->nama_acara }}</h1>
    </div>
    <div class="content">
        <div class="row">
            <div class="col">
                <div class="card card-outline card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Acara Detail</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Nama Acara</td>
                                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                        <td>{{ $acara->nama_acara }}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                        <td>{{ $acara->keterangan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Acara Mulai</td>
                                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                        <td>{{ $acara->tgl_start }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Acara Berakhir</td>
                                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                        <td>{{ $acara->tgl_end }}</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                        <td>@if ($acara->status =="1")  Acara Tampilkan dari Tamu @elseif ($acara->status =="2") Acara Tidak Tampil dari Tamu @endif</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-outline card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Tamu</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="col-12 col-sm-4">
                                    <div class="info-box bg-light">
                                        <div class="info-box-content">
                                            <span class="info-box-text text-center text-muted">Total Tamu</span>
                                            <span class="info-box-number text-center text-muted mb-0">{{ $tamu }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card card-outline card-secondary">
            <div class="card-header justify-content-between">
                <div class="row">
                    <div class="col col-10 align-content-start">
                        <h3 class="card-title">Tamu Acara {{ $acara->nama_acara }} List</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No telpon</th>
                        <th scope="col">Email</th>
                        <th scope="col">Cek In</th>
                        <th scope="col">Cek Out</th>
                        <th scope="col">No Badge</th>
                    </tr>
                </thead>
                @php $no = 1; @endphp
                <tbody>
                    @foreach ($btamu as $key=>$value)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $value->TamuAcara->nama }}</td>
                            <td>{{ $value->TamuAcara->no_telpon }}</td>
                            <td>{{ $value->TamuAcara->email }}</td>
                            <td>{{ $value->cek_in }}</td>
                            <td>{{ $value->cek_out }}</td>
                            <td>{{ $value->no_badge }}</td>
                        </tr>

                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No telpon</th>
                        <th scope="col">Email</th>
                        <th scope="col">Cek In</th>
                        <th scope="col">Cek Out</th>
                        <th scope="col">No Badge</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>



@endsection
