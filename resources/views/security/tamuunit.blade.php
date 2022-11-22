@extends('layout.template')
@section('head')
<title>E-GUIN QR | Scan QR CODE</title>
@endsection
@section('main')
{{-- {{ dd($data) }} --}}
<div class="content-header">
    <h1 class="m-1" style="text-transform: capitalize">Data Tamu Unit</h1>
    <div class="card card-outline card-secondary">
        <div class="card-header">
            <h5 sytle="float:left;"><strong>Tamu Unit</strong></h5>
        </div>
        <div class="table-responsive col-lg-12">
            <table class="table table-striped table-sm">
                <div class="col-sm-6">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Instansi</th>
                            <th scope="col">Keperluan</th>
                            <th scope="col">Unit Tujuan</th>
                            <th scope="col">Cek In</th>
                            <th scope="col">Cek Out</th>
                            <th scope="col">No Badge</th>
                            <th scope="col">action</th>
                        </tr>
                        @php $no = 0; @endphp
                        @foreach ($data as $key=>$value)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $value->TamuUnit->nama }}</td>
                            <td>{{ $value->TamuUnit->instansi }}</td>
                            <td>{{ $value->TamuUnit->keperluan }}</td>
                            <td>{{ $value->TamuUnit->unit->nama_unit }}</td>
                            <td>{{ $value->cek_in }}</td>
                            <td>{{ $value->cek_out }}</td>
                            <td>{{ $value->no_badge }}</td>
                            <td>
                            <a class="btn btn-info" href="#">Edit No Badge</a>
                            <a class="btn btn-info" href="#">Cek out</a>
                            </td>
                        </tr>

                    @endforeach
                    </thead>
                    <tbody>
                    </tbody>
            </table>
        </div>
        <div class="card-body">
        </div>
    </div>
</div>

@endsection
