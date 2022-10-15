@extends('layout.template')

@section('main')


<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <a class="btn btn-warning" href="{{ url ('acara/create')}}" role="button">Tambah Data</a> <br><br>
        <thead>
        <tr>
          <th>Nama Acara</th>
          <th>Keterangan</th>
          <th>Email Acara</th>
          <th>Tgl Mulai Acara</th>
          <th>Tgl Selesai Acara</th>
          <th></th>
        </tr>
        </thead>
       <tbody>
        @foreach ($datas as $key=>$value)

            <tr>
                <td>{{ $value->nama_acara }}</td>
                <td>{{ $value->keterangan }}</td>
                <td>{{ $value->email_acara }}</td>
                <td>{{ $value->tgl_start }}</td>
                <td>{{ $value->tgl_end }}</td>
                <td><a class="btn btn-info" href="{{url('acara/'.$value->id_acara.'/edit')}}">Update</a></td>
                <td>
                    <form action="{{url('acara/'.$value->id_acara)}}" method="POST">
                        @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        
        @endforeach
       </tbody>
        {{-- <tfoot>
        <tr>
          <th>Rendering engine</th>
          <th>Browser</th>
          <th>Platform(s)</th>
          <th>Engine version</th>
          <th>CSS grade</th>
        </tr>
        </tfoot> --}}
      </table>
    </div>
    <!-- /.card-body -->
  </div>
    
@endsection