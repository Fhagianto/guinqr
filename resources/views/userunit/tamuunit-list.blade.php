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
                <div class="row">
                    <div class="col">
                        <div class="card card-outline card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Unit Detail</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Nama Unit</td>
                                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                <td>{{ $unitshow->nama_unit }}</td>
                                            </tr>
                                            <tr>
                                                <td>Username</td>
                                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                <td>{{ $unitshow->username }}</td>
                                            </tr>
                                            <tr>
                                                <td>Keterangan</td>
                                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                <td>{{ $unitshow->keterangan }}</td>
                                            </tr>
                                            <tr>
                                                <td>Email Unit</td>
                                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                <td>{{ $unitshow->email_unit }}</td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                <td>@if ($unitshow->status =="1")  Unit di Tampilkan @elseif ($unitshow->status =="2") Unit Tidak Tampilkan @endif</td>
                                            </tr>
                                            <tr> 
                                            @if (session()->has('message'))
                                                <div class="alert alert-success text-center">{{ session('message') }}</div>
                                            @endif
                                                <div class="modal inmodal fade" id="modal-edit-ini" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-xs">
                                                    <form name="frm_edit" id="frm_edit" class="form-horizontal" action="{{route('tamuunit-list-update')}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Status Unit</h4>
                                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="form-group row">
                                                            <label for="level" class="col-3">Status</label>
                                                            <div class="col-9">
                                                                @if($unitshow->status == 1)
                                                                <select class="form-control" id="status1" class="form-control" name="status" aria-placeholder="pilihlevel" required>
                                                                <option value="1">Tampilkan Unit Dari Tamu</option>
                                                                <option value="2">Sembuyikan Unit Dari Tamu</option>
                                                                @error('status')
                                                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                                                @enderror
                                                                </select>
                                                                @endif
                                                                @if($unitshow->status == 2)
                                                                <select class="form-control" id="status1" class="form-control" name="status" aria-placeholder="pilihlevel" required>
                                                                <option value="2">Sembuyikan Unit Dari Tamu</option>
                                                                <option value="1">Tampilkan Unit Dari Tamu</option>
                                                                @error('status')
                                                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                                                @enderror
                                                                </select>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="a" class="col-3"></label>
                                                            <div class="col-9">
                                                                <button type="submit" id="a" class="btn btn-sm btn-primary">Update Status</button>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        </div>
                                                    </form>
                                                    </div>
                                                  </div>
                                                <td><br>
                                                    <button 
                                                     type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                     data-target="#modal-edit-ini">
                                                     Edit Status
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-outline card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Tamu</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="col-12 col-sm-8">
                                            <div class="info-box bg-light">
                                                <div class="info-box-content">
                                                    <span class="info-box-text text-center text-muted">Total Tamu</span>
                                                    <span class="info-box-number text-center text-muted mb-0">{{ $count }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Keperluan</th>
                              <th>Instansi</th>
                              <th>Check In</th>
                              <th>Check Out</th>
                              <th style="text-align: center;">Action</th>
                          </tr>
                      </thead>
                      @php $no = 1; @endphp
                      <tbody>
                          @foreach ($tamuunitl as $value)
                          <tr>
                              <td>{{ $no++ }}</td>
                              <div class="modal inmodal fade" id="modal-view-@php echo $no @endphp" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-xs">
                                <form name="frm_edit" id="frm_edit" class="form-horizontal" action="" method="POST">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Details Tamu Unit</h4>
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label class="col-lg-5 control-label">Nama</label>
                                                <div class="col-lg-12">
                                                    <input type="text" name="nama" id="nama" class="form-control" disabled value='{{ $value->TamuUnit->nama }}'>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-5 control-label">Keperluan</label>
                                                <div class="col-lg-12">
                                                    <input type="text" name="keperluan" id="keperluan" class="form-control" disabled value='{{ $value->TamuUnit->keperluan }}'>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-5 control-label">Instansi</label>
                                                <div class="col-lg-12">
                                                    <input type="text" name="instansi" id="instansi" class="form-control" disabled value='{{ $value->TamuUnit->instansi }}'>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-5 control-label">Unit Yang Di Tuju</label>
                                                <div class="col-lg-12">
                                                    <input type="text" name="" id="no_badge" class="form-control" disabled value='{{ $value->TamuUnit->unit->nama_unit }}'>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-5 control-label">Check In</label>
                                                <div class="col-lg-12">
                                                    <input type="text" name="no_badge" id="no_badge" class="form-control" disabled value='{{ $value->cek_in }}'>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-5 control-label">Check Out</label>
                                                <div class="col-lg-12">
                                                    <input type="text" name="no_badge" id="no_badge" class="form-control" disabled value='{{ $value->cek_out }}'>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-5 control-label">Nomor Badge</label>
                                                <div class="col-lg-12">
                                                    <input type="text" name="no_badge" id="no_badge" class="form-control" disabled value='{{ $value->no_badge }}'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </div>
                              </div>
                              <td>{{ $value->TamuUnit->nama }}</td>
                              <td>{{ $value->TamuUnit->keperluan }}</td>
                              <td>{{ $value->TamuUnit->instansi }}</td>
                              <td>{{ $value->cek_in }}</td>
                              <td>{{ $value->cek_out }}</td>
                              <td style="text-align: center;">
                              <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-view-@php echo $no @endphp" data-id="{{$value->id_buku_tamu_acara}}">View Details</button>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
       {{--  </div> --}}
    {{-- </div> --}}
    
    {{-- modal --}}

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
{{-- <script>
  $(document).ready(function () {

   /*  $(document).on('click', '.dltbtn', function () {
      var acaram1_id = $(this).val();
      $('#deleteModal').modal('show');
      $('#dlt_acaram1_id').val(acaram1_id);
    }); */

    $(document).on('click', '.viewbtn', function () {
      
      var tamuunitl1_id = $(this).val();
   /*    alert(tamuunitl1_id); */
      $('#exampleModal2').modal('show');
      
      $.ajax({
        type: "GET",
        url: "/tamuunitl-catch/"+tamuunitl1_id,
        success: function (response) {
           console.log(response.tamuunitListcatch.TamuUnit.nama);  
      /*     $('#1').val(response.tamuunitListcatch.TamuUnit.nama); */
      
         
        }
      });
    });
  });
</script> --}}
@endsection



    