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
                        <h5 style="float: left;"><strong>All Users</strong></h5>
                        <button class="btn btn-sm btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModal1">Add New Users</button>
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
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>level</th>
                                    <th>Status</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($userm->count() > 0)
                                    @foreach ($userm as $userm1)
                                        <tr>
                                            <td>{{ $userm1->name }}</td>
                                            <td>{{ $userm1->username }}</td>
                                            <td>{{ $userm1->email }}</td>
                                            <td>{{ $userm1->level }}</td>
                                            <td>{{ $userm1->status }}</td>
                                            <td style="text-align: center;">
                                                <button type="button" class="btn btn-primary editbtn btn-sm" value="{{$userm1->id}}" >Edit</button>
                                                <button type="button" class="btn btn-danger dltbtn btn-sm" value="{{$userm1->id}}" >Delete</button>
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
            <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('usermanage-add') }}" method="POST">
              @csrf
            <div class="form-group row">
                <label for="name" class="col-3">Name</label>
                <div class="col-9">
                    <input type="text" id="name" class="form-control" name="name" required>
                    @error('name')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="username" class="col-3">Username</label>
                <div class="col-9">
                    <input type="text" id="username" class="form-control" name="username">
                    @error('username')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-3">Email</label>
                <div class="col-9">
                    <input type="email" id="email" class="form-control" name="email">
                    @error('email')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-3">Password</label>
                <div class="col-9">
                    <input type="password" id="password" class="form-control" name="password" required >
                    @error('password')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="level" class="col-3">Level</label>
                <div class="col-9">
                     <select class="form-control"  id="level" class="form-control" name="level" aria-placeholder="pilihlevel">
                        <option value="superadmin">Superadmin</option>
                        <option value="security">Security</option>
                        <option value="useracara">Useracara</option>
                    @error('level')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="level" class="col-3">Status</label>
                <div class="col-9">
                     <select class="form-control"  id="status" class="form-control" name="status" aria-placeholder="pilihlevel">
                        <option value="1">Akun Active</option>
                        <option value="2">Akun Non Active</option>
                    @error('status')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-3"></label>
                <div class="col-9">
                    <button type="submit" class="btn btn-sm btn-primary">Add User</button>
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
            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('usermanage-update') }}" method="POST">
              @csrf
              @method('PUT')
              <input type="hidden" name="userm1_id" id="userm1_id"/>
              
            <div class="form-group row">
                <label for="name" class="col-3">Name</label>
                <div class="col-9">
                    <input type="text" id="name1" class="form-control" name="name">
                    @error('name')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="username" class="col-3">Username</label>
                <div class="col-9">
                    <input type="text" id="username1" class="form-control" name="username">
                    @error('username')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-3">Email</label>
                <div class="col-9">
                    <input type="email" id="email1" class="form-control" name="email">
                    @error('email')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-3">Password</label>
                <div class="col-9">
                    <input type="password" id="password1" class="form-control" name="password" required>
                    @error('password')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="level" class="col-3">Level</label>
                <div class="col-9">
                     <select class="form-control"  id="level1" class="form-control" name="level" aria-placeholder="pilihlevel">
                        <option value="superadmin">Superadmin</option>
                        <option value="security">Security</option>
                        <option value="useracara">Useracara</option>
                    @error('level')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="level" class="col-3">Status</label>
                <div class="col-9">
                     <select class="form-control"  id="status1" class="form-control" name="status" aria-placeholder="pilihlevel">
                        <option value="1">Akun Active</option>
                        <option value="2">Akun Non Active</option>
                    @error('status')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-3"></label>
                <div class="col-9">
                    <button type="submit" class="btn btn-sm btn-primary">Add User</button>
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
            <form action="{{ route('usermanage-delete') }}" method="POST">
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
                  <input type="hidden" name="dlt_userm1_id" id="dlt_userm1_id"/>
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
      var userm1_id = $(this).val();
      $('#deleteModal').modal('show');
      $('#dlt_userm1_id').val(userm1_id);
    });

    $(document).on('click', '.editbtn', function () {
      
      var userm1_id = $(this).val();
     /*  alert(userm1_id); */
      $('#exampleModal2').modal('show');
      
      $.ajax({
        type: "GET",
        url: "/userm-edit/"+userm1_id,
        success: function (response) {
          /* console.log(response.usermcatch.name);  */
          $('#name1').val(response.usermcatch.name);
          $('#username1').val(response.usermcatch.username);
          $('#email1').val(response.usermcatch.email);
          $('#level1').val(response.usermcatch.level);
          $('#status1').val(response.usermcatch.status);
          $('#userm1_id').val(userm1_id);
        }
      });
    });
  });
</script>
    
@endsection

