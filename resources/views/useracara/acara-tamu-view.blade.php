@extends('layout.template')
@section('head')
    <title>E-GUIN QR | Acara</title>

@endsection
@section('main')
{{ dd($data,session('data')) }}
<div class="container-fluid">
    <div class="content header" >
        <h1 class="m-1" style="text-transform: capitalize">Acara</h1>
    </div>
    <div class="content">
        <div class="card card-outline card-secondary">
            <div class="card-header justify-content-between">
                <div class="row">
                    <div class="col col-10 align-content-start">
                        <h3 class="card-title">tamu acara list</h3>
                    </div>
                    <div class="col align-content-end">
                        <a class="btn btn-warning right" href="{{ url ('acara/create')}}" role="button">Tambah Data</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Acara</th>
                        <th scope="col">no telpon</th>
                        <th scope="col">Email Acara</th>
                        <th scope="col">Cek-in</th>
                    </tr>
                </thead>
                @php $no = 1; @endphp
                <tbody>
                    @foreach ($datas as $key=>$value)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $value->nama_acara }}</td>
                            <td>{{ $value->keterangan }}</td>
                            <td>{{ $value->email_acara }}</td>
                            <td>{{ $value->tgl_start }}</td>
                        </tr>

                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Acara</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Email Acara</th>
                        <th scope="col">Tgl Mulai Acara</th>
                        <th scope="col">Tgl Selesai Acara</th>
                        <th scope="col">Lihat Tamu</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delate</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>



@endsection
