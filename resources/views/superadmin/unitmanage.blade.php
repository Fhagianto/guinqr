@extends('layout.template')
@section('head')
    <title>E-GUIN QR | Dashboard</title>
@endsection
@section('main')
<div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 style="float: left;"><strong>All Unit Data</strong></h5>
                        <button class="btn btn-sm btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModal1">Add New Unit</button>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success text-center">{{ session('message') }}</div>
                        @endif
                        {{-- 
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input type="search" class="form-control w-25" placeholder="Search" wire:model="searchTerm" style="float: right;" />
                            </div>
                        </div>
 --}}
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Unit </th>
                                    <th>Username </th>
                                    <th>Email Unit</th>
                                    <th>Keterangan </th>
                                    <th>Status </th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($unitm->count() > 0)
                                    @foreach ($unitm as $unitm1)
                                        <tr>
                                            <td>{{ $unitm1->nama_unit }}</td>
                                            <td>{{ $unitm1->username }}</td>
                                            <td>{{ $unitm1->email_unit }}</td>
                                            <td>{{ $unitm1->keterangan }}</td>
                                            <td>@if($unitm1->status == 1) Tampil @elseif ($unitm1->status == 2) Tidak Tampil  @endif</td>
                                            <td style="text-align: center;">
                                                <button type="button" class="btn btn-warning editbtn btn-sm" value="{{$unitm1->id_unit}}" >Edit</button>
                                                <button type="button" class="btn btn-danger dltbtn btn-sm" value="{{$unitm1->id_unit}}" >Delete</button>
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
    
  
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Unit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('unitmanage-add') }}" method="POST">
              @csrf
            <div class="form-group row">
                <label for="namaunit" class="col-3">Nama Unit</label>
                <div class="col-9">
                    <input type="text" id="namaunit" class="form-control" name="namaunit"required>
                    @error('namaunit')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-3">Username</label>
                <div class="col-9">
                    <input type="text" id="username" class="form-control" name="username" required>
                    @error('username')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-3">Password</label>
                <div class="col-9">
                    <input type="password" id="password" class="form-control" name="password" required>
                    @error('password')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="level" class="col-3">Status</label>
                <div class="col-9">
                     <select class="form-control"  id="status" class="form-control" name="status" aria-placeholder="pilihlevel" required>
                        <option value="1">Tampilkan Unit Dari Tamu</option>
                        <option value="2">Sembuyikan Unit Dari Tamu</option>
                    @error('status')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="ket" class="col-3">Keterangan</label>
                <div class="col-9">
                    <input type="text" id="ket" class="form-control" name="ket" required>
                    @error('ket')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-3">Email Unit</label>
                <div class="col-9">
                    <input type="email" id="email" class="form-control" name="email">
                    @error('email')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-9">
                    <input type="hidden" id="level" class="form-control" name="level" value="userunit" required>
                    @error('level')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="a" class="col-3"></label>
                <div class="col-9">
                    <button type="submit" id="a" class="btn btn-sm btn-primary">Add Unit</button>
                </div>
            </div>
        </form>
       </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Unit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('unitmanage-update') }}" method="POST">
              @csrf
              @method('PUT')
              <input type="hidden" name="unitm1_id" id="unitm1_id"/>
              
            <div class="form-group row">
                <label for="namaunit" class="col-3">Nama Unit</label>
                <div class="col-9">
                    <input type="text" id="namaunit1" class="form-control" name="namaunit" required>
                    @error('namaunit')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-3">Username</label>
                <div class="col-9">
                    <input type="text" id="username1" class="form-control" name="username" required>
                    @error('username')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-3">Password</label>
                <div class="col-9">
                    <input type="password" id="password1" class="form-control" name="password" >
                    @error('password')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="level" class="col-3">Status</label>
                <div class="col-9">
                     <select class="form-control"  id="status1" class="form-control" name="status" aria-placeholder="pilihlevel" required>
                        <option value="1">Tampilkan Unit Dari Tamu</option>
                        <option value="2">Sembuyikan Unit Dari Tamu</option>
                    @error('status')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="ket" class="col-3">Keterangan</label>
                <div class="col-9">
                    <input type="text" id="ket1" class="form-control" name="ket" required>
                    @error('ket')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-3">Email Unit</label>
                <div class="col-9">
                    <input type="email" id="email1" class="form-control" name="email" required>
                    @error('email')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-9">
                    <input type="hidden" id="level1" class="form-control" name="level">
                    @error('level')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
           
            <div class="form-group row">
                <label for="" class="col-3"></label>
                <div class="col-9">
                    <button type="submit" class="btn btn-sm btn-primary">Update Unit</button>
                </div>
            </div>
        </form>
       </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="{{ route('unitmanage-delete') }}" method="POST">
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
                  <input type="hidden" name="dlt_unitm1_id" id="dlt_unitm1_id"/>
              </div>
              <div class="modal-footer">
                  <button class="btn btn-sm btn-primary" type="button" data-dismiss="modal" aria-label="Close">Cancel</button>
                  <button class="btn btn-sm btn-danger" type="submit" >Yes! Delete</button>
              </div>
            </form>
          </div>
      </div>
  </div> 
   
</div>
@endsection
@section('scripts')
<script>
  $(document).ready(function () {

    $(document).on('click', '.dltbtn', function () {
      var unitm1_id = $(this).val();
      $('#deleteModal').modal('show');
      $('#dlt_unitm1_id').val(unitm1_id);
    });

    $(document).on('click', '.editbtn', function () {
      
      var unitm1_id = $(this).val();
      /* alert(unitm1_id); */
      $('#exampleModal2').modal('show');
      
      $.ajax({
        type: "GET",
        url: "/unitm-catch/"+unitm1_id,
        success: function (response) {
         /*  console.log(response.unitmcatch.nama_unit);  */
          $('#namaunit1').val(response.unitmcatch.nama_unit);
          $('#ket1').val(response.unitmcatch.keterangan);
          $('#email1').val(response.unitmcatch.email_unit);
          $('#username1').val(response.unitmcatch.username);
          $('#status1').val(response.unitmcatch.status);
          $('#level1').val(response.unitmcatch.level);
          $('#unitm1_id').val(unitm1_id);
        }
      });
    });
  });
</script>
    
@endsection

