@extends('layout.template')
@section('head')
    <title>E-GUIN QR | Dashboard</title>
@endsection
@section('main')
{{--     <div class="container"> --}}
        <div class="row mb-5">
            <div class="col-md-12 text-center">
            </div>
        </div>
       {{--  <div class="row"> --}}
            {{-- <div class="col-md-12"> --}}
                <div class="card">
                    <div class="card-header">
                        <h5 style="float: left;"><strong>All Acara Data</strong></h5>
                      {{--   <button class="btn btn-sm btn-primary" style="float: right;" data-toggle="modal" data-target="#addStudentModal">Add New Users</button> --}}
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success text-center">{{ session('message') }}</div>
                        @endif
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Penyelengara</th>
                                    <th>Acara Dimulai</th>
                                    <th>Acara Berakhir</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($acaram->count() > 0)
                                    @foreach ($acaram as $acaram1)
                                        <tr>
                                            <td>{{ $acaram1->nama_acara }}</td>
                                            <td>{{ $acaram1->tgl_start }}</td>
                                            <td>{{ $acaram1->tgl_end }}</td>
                                        
                                            <td style="text-align: center;">
                                                <button type="button" class="btn btn-warning viewbtn btn-sm" value="{{$acaram1->id_acara}}" >View Detail</button>
                                                <button type="button" class="btn btn-danger dltbtn btn-sm" value="{{$acaram1->id_acara}}" >Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" style="text-align: center;"><small>No Data Found</small></td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            {{-- </div> --}}
       {{--  </div> --}}
    {{-- </div> --}}
    
    {{-- modal --}}
    <div class="modal fade" id="exampleModal2" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Acara Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Penyelengara </th>
                                <td><html><input type="text" class="form-control" id="nama1" disabled></html></td>
                            </tr>
                            <tr>
                                <th>Email Penyelengara </th>
                                <td><html><input type="text" class="form-control" id="2" disabled></html></td>
                            </tr>
                            <tr>
                                <th>Keterangan </th>
                                <td><html><input type="text" class="form-control" id="3" disabled></html></td>
                            </tr>
                            <tr>
                                <th>Acara Dimulai </th>
                                <td><html><input type="text" class="form-control" id="4" disabled></html></td>
                            </tr>
                            <tr>
                                <th>Acara Berakhir </th>
                                <td><html><input type="text" class="form-control" id="5" disabled></html></td>
                            </tr>
                            <tr>
                                <th>User Yang Bertanggung Jawab </th>
                                <td><html><input type="text" class="form-control" id="6" disabled></html></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form action="{{ route('acaram-delete') }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-4 pb-4">
                    <h6>Are you sure? You want to delete this data!</h6>
                    <input type="hidden" name="dlt_acaram1_id" id="dlt_acaram1_id"/>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button class="btn btn-sm btn-danger" type="submit" >Yes! Delete</button>
                </div>
              </form>
            </div>
        </div>
    </div> 
@endsection
@section('scripts')
<script>
  $(document).ready(function () {

    $(document).on('click', '.dltbtn', function () {
      var acaram1_id = $(this).val();
      $('#deleteModal').modal('show');
      /*   alert(acaram1); */
      $('#dlt_acaram1_id').val(acaram1_id);
    });

    $(document).on('click', '.viewbtn', function () {
      
      var acaram1_id = $(this).val();
     /*  alert(acaram1_id); */
      $('#exampleModal2').modal('show');
      
      $.ajax({
        type: "GET",
        url: "/acaram-catch/"+acaram1_id,
        success: function (response) {
          /* console.log(response.acaramcatch.tgl_end);  */
          $('#nama1').val(response.acaramcatch.nama_acara);
          $('#2').val(response.acaramcatch.email_acara);
          $('#3').val(response.acaramcatch.keterangan);
          $('#4').val(response.acaramcatch.tgl_start);
          $('#5').val(response.acaramcatch.tgl_end);
          $('#6').val(response.acaramcatch.usermanage.name);
         
        }
      });
    });
  });
</script>
@endsection



    