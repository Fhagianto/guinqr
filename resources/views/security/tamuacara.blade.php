@extends('layout.template')
@section('head')
<title>E-GUIN QR | Scan QR CODE</title>
@endsection
@section('main')
{{-- {{ dd($data) }} --}}
<div class="content-header">
    <h1 class="m-1" style="text-transform: capitalize">Data Tamu Acara</h1>
    <div class="card card-outline card-secondary">
        <div class="card-header">
            <h5 sytle="float:left;"><strong>Tamu Acara</strong></h5>
        </div>
        <div class="table-responsive col-lg-12">
            <table class="table table-striped table-sm">
                <div class="col-sm-6">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Acara</th>
                            <th scope="col">Cek In</th>
                            <th scope="col">Cek Out</th>
                            <th scope="col">No Badge</th>
                            <th scope="col">action</th>
                        </tr>
                        @php $no = 0; @endphp
                        @foreach ($data as $key=>$value)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $value->id_tamu_acara }}</td>
                            <td>{{ $value->TamuAcara->nama }}</td>
                            <td>{{ $value->TamuAcara->acara->nama_acara }}</td>
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
</div>
@endsection
