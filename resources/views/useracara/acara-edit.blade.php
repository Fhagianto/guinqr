@extends('layout.template')

@section('main')

<form action="{{url('acara/'.$model->id_acara)}}" method="POST">
@csrf
    <input type="hidden" name="_method" value="PATCH">
     Nama Acara <input type="text" name="nama_acara" value="{{$model->nama_acara}}"><br>
     Keterangan  <input type="text" name="keterangan" value="{{$model->keterangan}}"><br>
     Email Acara <input type="text" name="email_acara" value="{{$model->email_acara}}"><br>
     Tgl Mulai Acara <input type="date" name="tgl_start" value="{{$model->tgl_start}}"><br>
     Tgl Selesai Acara <input type="date" name="tgl_end" value="{{$model->tgl_end}}"><br>
    <button type="submit">Simpan</button>

</form>

@endsection