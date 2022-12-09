@extends('layout.template')

@section('main')
<div class="content-header">
    <h1 class="m-1" style="text-transform: capitalize">Edit Acara</h1>
</div>
<div class="content">
    <div class="row">
        <div class="col col-6">
            <div class="card card-outline card-secondary">
                <div class="card-header">
                <h3 class="card-title">Acara</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('acara/'.$model->id_acara)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="form-group">
                            <label class="small mb-1" for="nama_acara">Nama Acara</label>
                            <input
                                class="form-control py-4"
                                autofocus="true"
                                id="nama_acara"
                                name="nama_acara"
                                type="text"
                                placeholder="Masukkan Nama Acara"
                                value="{{$model->nama_acara}}"/>
                            @if($errors->has('nama_acara'))
                            <span class="error">{{ $errors->first('nama_acara') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="keterangan">Keterangan</label>
                            <input
                                class="form-control py-4"
                                id="keterangan"
                                name="keterangan"
                                type="text"
                                placeholder="Masukkan Username"
                                value="{{$model->keterangan}}"/>
                            @if($errors->has('keterangan'))
                            <span class="error">{{ $errors->first('keterangan') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="email_acara">Email Acara</label>
                            <input
                                class="form-control py-4"
                                id="email_acara"
                                name="email_acara"
                                type="text"
                                placeholder="Masukkan Email Acara"
                                value="{{$model->email_acara}}"/>
                            @if($errors->has('email_acara'))
                            <span class="error">{{ $errors->first('email_acara') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="tgl_start">Tanggal Mulai Acara</label>
                            <input
                                class="form-control py-4"
                                id="tgl_start"
                                name="tgl_start"
                                type="date"
                                placeholder="Masukkan Tanggal"
                                value="{{$model->tgl_start}}"/>
                            @if($errors->has('tgl_start'))
                            <span class="error">{{ $errors->first('tgl_start') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="tgl_end">Tanggal Berakhir Acara</label>
                            <input
                                class="form-control py-4"
                                id="tgl_end"
                                name="tgl_end"
                                type="date"
                                placeholder="Masukkan Tanggal"
                                value="{{$model->tgl_end}}"/>
                            @if($errors->has('tgl_end'))
                            <span class="error">{{ $errors->first('tgl_end') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="status">Status Acara</label>
                            <select
                                class="form-control select2"
                                style="width: 100%;"
                                id="status"
                                name="status"
                                type="text"
                                required
                                placeholder="Masukkan Status">
                                <option value="1" @if ($model->status =="1") selected="selected" @endif>Aktif</option>
                                <option value="2" @if ($model->status =="2") selected="selected" @endif >Tidak Aktif</option>
                            </select>
                            @if($errors->has('status'))
                            <span class="error">{{ $errors->first('status') }}</span>
                            @endif
                        </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="col col-6">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Info</h3>
                </div>
                <div class="card-body">
                    <h4>Penjelasan</h4>
                    <h6>1. Status Acara</h6>
                    <small>A. Aktif : Tamu acara <b>dapat</b> memilih acara anda</small><br>
                    <small>B. Tidak Aktif : Tamu acara <b>tidak dapat</b>  memilih acara anda</small>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>

</div>
{{-- <form action="{{url('acara/'.$model->id_acara)}}" method="POST">
@csrf
    <input type="hidden" name="_method" value="PATCH">
     Nama Acara <input type="text" name="nama_acara" value="{{$model->nama_acara}}"><br>
     Keterangan  <input type="text" name="keterangan" value="{{$model->keterangan}}"><br>
     Email Acara <input type="text" name="email_acara" value="{{$model->email_acara}}"><br>
     Tgl Mulai Acara <input type="date" name="tgl_start" value="{{$model->tgl_start}}"><br>
     Tgl Selesai Acara <input type="date" name="tgl_end" value="{{$model->tgl_end}}"><br>
    <button type="submit">Simpan</button>

</form> --}}

@endsection
