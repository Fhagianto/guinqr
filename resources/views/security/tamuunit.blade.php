@extends('layout.template')
@section('head')
<title>E-GUIN QR | Scan QR CODE</title>
@endsection
@section('main')
{{-- {{ dd($data) }} --}}
<div class="content-header">
    <h1 class="m-1" style="text-transform: capitalize">Tamu Unit</h1>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="card card-outline card-secondary">
            <div class="card-header">
            <h3 class="card-title">Buku Tamu Acara</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
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
                </thead>
                @php $no = 1; @endphp
                <tbody>
                    @foreach ($data as $key=>$value)
                    <tr>
                        {{-- {{ dd($value) }} --}}
                        <td>{{ $no++ }}</td>
                        <div class="modal inmodal fade" id="modal-edit-@php echo $no @endphp" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-xs">
                                <form name="frm_edit" id="frm_edit" class="form-horizontal" action="{{route('edit_nobadge_tamuunit')}}" method="POST">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Nomor Badge</h4>
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label class="col-lg-5 control-label">Nomor Badge</label>
                                                <div class="col-lg-12">
                                                    <input type="text" name="no_badge" id="no_badge" placeholder="Nomor Badge" class="form-control" value='{{ $value->no_badge }}'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="hidden" name="id_buku_tamu_unit" id="id_buku_tamu_unit" value='{{ $value->id_buku_tamu_unit }}'>
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <td>{{ $value->TamuUnit->nama }}</td>
                        <td>{{ $value->TamuUnit->instansi }}</td>
                        <td>{{ $value->TamuUnit->keperluan }}</td>
                        <td>{{ $value->TamuUnit->unit->nama_unit }}</td>
                        <td>{{ $value->cek_in }}</td>
                        <td>{{ $value->cek_out }}</td>
                        <td>{{ $value->no_badge }}</td>
                        <td>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-edit-@php echo $no @endphp" data-id="{{$value->id_buku_tamu_unit}}"><i class="fa-sharp fa-solid fa-pen-to-square"></i> No Badge</button>
                        @if ($value->cek_out==null)
                            <form action="{{route('COunit')}}" method="POST" id="regForm" name="regForm">
                                @csrf
                                <input type="hidden" id="id_buku_tamu_unit" name="id_buku_tamu_unit" value='{{ $value->id_buku_tamu_unit }}'>
                                <input type="hidden" id="id_user" name="id_user" value='{{ Auth::user()->id }}'>
                                <button class="btn btn-danger" type="submit"><i class="fa-sharp fa-solid fa-right-from-bracket"></i> Cek out</button>
                            </form>
                        @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
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
                </tfoot>
            </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

</div>
<!-- moda edit data -->

@endsection
@section('footer')
@endsection
