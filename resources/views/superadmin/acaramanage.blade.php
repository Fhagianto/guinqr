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
                        <button class="btn btn-sm btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModal1">Add New Acara</button>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success text-center">{{ session('message') }}</div>
                        @endif
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Penyelengara</th>
                                    <th>Acara Dimulai</th>
                                    <th>Acara Berakhir</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            @php
                                $a=1;
                            @endphp
                            <tbody>
                                @if ($acaram->count() > 0)
                                    @foreach ($acaram as $acaram1)
                                        <tr>
                                            <td>{{ $a++ }}</td>
                                            <td>{{ $acaram1->nama_acara }}</td>
                                            <td>{{ $acaram1->tgl_start }}</td>
                                            <td>{{ $acaram1->tgl_end }}</td>
                                        
                                            <td style="text-align: center;">
                                                <button type="button" class="btn btn-warning viewbtn btn-sm" value="{{$acaram1->id_acara}}" >View Detail</button>
                                                <button type="button" class="btn btn-info editbtn btn-sm" value="{{$acaram1->id_acara}}" >Edit</button>
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
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Acara</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('acaramanage-add') }}" method="POST">
                @csrf
              <div class="form-group row">
                  <label for="nama_acara" class="col-3">Nama Acara</label>
                  <div class="col-9">
                      <input type="text" id="nama_acara" class="form-control" name="nama_acara" required>
                      @error('nama_acara')
                          <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row">
                  <label for="keterangan" class="col-3">Keterangan</label>
                  <div class="col-9">
                      <input type="text" id="keterangan" class="form-control" name="keterangan" required>
                      @error('keterangan')
                          <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-3">Email Acara</label>
                <div class="col-9">
                    <input type="email" id="email" class="form-control" name="email">
                    @error('email')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="tgl_start" class="col-3">Tanggal Mulai Acara</label>
                <div class="col-9">
                    <input type="date" id="tgl_start" class="form-control" name="tgl_start">
                    @error('tgl_start')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="tgl_end" class="col-3">Tanggal Berakhir Acara</label>
                <div class="col-9">
                    <input type="date" id="tgl_end" class="form-control" name="tgl_end">
                    @error('tgl_end')
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
                  <label for="a" class="col-3"></label>
                  <div class="col-9">
                      <button type="submit" id="a" class="btn btn-sm btn-primary">Add Acara</button>
                  </div>
              </div>
          </form>
         </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Acara</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('acaramanage-update') }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="acara_id" id="acara_id"/>
              <div class="form-group row">
                  <label for="nama_acara" class="col-3">Nama Acara</label>
                  <div class="col-9">
                      <input type="text" id="nama_acara1" class="form-control" name="nama_acara" required>
                      @error('nama_acara')
                          <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row">
                  <label for="keterangan" class="col-3">Keterangan</label>
                  <div class="col-9">
                      <input type="text" id="keterangan1" class="form-control" name="keterangan" required>
                      @error('keterangan')
                          <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-3">Email Acara</label>
                <div class="col-9">
                    <input type="email" id="email1" class="form-control" name="email">
                    @error('email')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="tgl_start" class="col-3">Tanggal Mulai Acara</label>
                <div class="col-9">
                    <input type="date" id="tgl_start1" class="form-control" name="tgl_start">
                    @error('tgl_start')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                    @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="tgl_end" class="col-3">Tanggal Berakhir Acara</label>
                <div class="col-9">
                    <input type="date" id="tgl_end1" class="form-control" name="tgl_end">
                    @error('tgl_end')
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
                  <label for="a" class="col-3"></label>
                  <div class="col-9">
                      <button type="submit" id="a" class="btn btn-sm btn-primary">Add Acara</button>
                  </div>
              </div>
          </form>
         </div>
          </div>
        </div>
    </div>

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
    $(document).on('click', '.editbtn', function () {
      
      var acaram1_id = $(this).val();
     /*  alert(acaram1_id); */
      $('#exampleModal3').modal('show');
      
      $.ajax({
        type: "GET",
        url: "/acaram-catch/"+acaram1_id,
        success: function (response) {
          /* console.log(response.acaramcatch.tgl_end);  */
          $('#nama_acara1').val(response.acaramcatch.nama_acara);
          $('#keterangan1').val(response.acaramcatch.keterangan);
          $('#email1').val(response.acaramcatch.email_acara);
          $('#tgl_start1').val(response.acaramcatch.tgl_start);
          $('#tgl_end1').val(response.acaramcatch.tgl_end);
          $('#status1').val(response.acaramcatch.status);
          $('#acara_id').val(acaram1_id);
         
        }
      });
    });
  });
</script>
@endsection



    