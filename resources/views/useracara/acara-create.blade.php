@extends('layout.template')

@section('main')

<form action="{{url('acara')}}" method="POST">
@csrf
     Nama Acara <input type="text" name="nama_acara"><br>
     Keterangan  <input type="text" name="keterangan"><br>
     Email Acara <input type="text" name="email_acara"><br>
     Tgl Mulai Acara <input type="date" name="tgl_start"><br>
     Tgl Selesai Acara <input type="date" name="tgl_end"><br>
    <button type="submit">Simpan</button>

</form>

@endsection