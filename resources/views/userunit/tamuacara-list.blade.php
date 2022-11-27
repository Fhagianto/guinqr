@extends('layout.template')
@section('head')
    <title>E-GUIN QR | Dashboard</title>
@endsection
@section('main')
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 style="float: left;"><strong>All Tamu Acara Data</strong></h5>
                      {{--   <button class="btn btn-sm btn-primary" style="float: right;" data-toggle="modal" data-target="#addStudentModal">Add New Users</button> --}}
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success text-center">{{ session('message') }}</div>
                        @endif
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Acara Yang di Hadiri</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($tamuacaral->count() > 0)
                                    @foreach ($tamuacaral as $tamuacaral)
                                        <tr>
                                            <td>{{ $tamuacaral->nama }}</td>
                                            <td>{{ $tamuacaral->acara->nama_acara }}</td>
                                        
                                            <td style="text-align: center;">
                                                <button type="button" class="btn btn-warning viewbtn btn-sm" value="{{$tamuacaral->id_acara}}" >View Detail</button>
                                              {{--   <button type="button" class="btn btn-danger dltbtn btn-sm" value="{{$unitl1->id}}" >Delete</button> --}}
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
            </div>
        </div>
    </div>
    
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
                                <th>Nama</th>
                                <td><html><input type="text" class="form-control" id="1" disabled></html></td>
                            </tr>
                          
                            <tr>
                                <th>No telpon</th>
                                <td><html><input type="text" class="form-control" id="2" disabled></html></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><html><input type="text" class="form-control" id="3" disabled></html></td>
                            </tr>
                            <tr>
                                <th>Acara Yang di Hadiri</th>
                                <td><html><input type="text" class="form-control" id="4" disabled></html></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

   {{--  <div class="modal fade" id="deleteModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
    </div>  --}}
@endsection
@section('scripts')
<script>
  $(document).ready(function () {

   /*  $(document).on('click', '.dltbtn', function () {
      var acaram1_id = $(this).val();
      $('#deleteModal').modal('show');
      $('#dlt_acaram1_id').val(acaram1_id);
    }); */

    $(document).on('click', '.viewbtn', function () {
      
      var tamuacaral_id = $(this).val();
     /*  alert(acaram1_id); */
      $('#exampleModal2').modal('show');
      
      $.ajax({
        type: "GET",
        url: "/tamuacara-catch/"+tamuacaral_id,
        success: function (response) {
           /* console.log(response.tamuunitListcatch.keperluan);   */
          $('#1').val(response.tamuacaraListcatch.nama);
          $('#2').val(response.tamuacaraListcatch.no_telpon);
          $('#3').val(response.tamuacaraListcatch.email);
          $('#4').val(response.tamuacaraListcatch.acara.nama_acara);
        
         
        }
      });
    });
  });
</script>
@endsection



    