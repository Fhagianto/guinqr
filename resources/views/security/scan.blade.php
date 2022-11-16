@extends('layout.template')
@section('head')
    <title>E-GUIN QR | Scan QR CODE</title>
@endsection
@section('main')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="text-transform: capitalize">Dashboard {{ Auth::user()->level }}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-6">
                <div class="card card-outline card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">SCAN QR CODE</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div id="reader" width="600px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-outline card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Hasil SCAN QR CODE</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div id="reader" width="600px"></div>
                            </div>
                            <div class="col-4">
                                <input type="text" id="result">
                                <button onclick="document.getElementById('result').value = ''">Clear input field</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.row -->
        <!-- Main row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
@section('footer')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset ('plugins') }}/scanner/html5-qrcode.min.js"></script>
<script>
    function onScanSuccess(decodedText, decodedResult) {
        $("#result").val(decodedText);
        let id = decodedText;
        csrf_token = "{{ csrf_token() }}";
        Swal.fire({
            title:'Succes',
            text: 'Berhasil Scan Qr code',
            confirmButtonColor : '#3085d6',
            confirmButtonText :'Ok'
        }).then((result) => {
            if(result.value){
                $.ajax({
                    url : "{{ route('validasiQrcode') }}",
                    type : 'post',
                    data : {
                        '_method' : 'post',
                        '_token' : csrf_token,
                        'qr_code' : id
                    },
                    success: function(response){
                        if(response.status_error) {
                            Swal.fire({
                                type :'error',
                                title : 'Oops....',
                                text : 'qrcode tidak terdaftar'
                            })
                        }
                        if(response.berhasil){
                            Swal.fire({
                                icon : 'success',
                                type :'success',
                                title : 'Success',
                                text : 'data ada'
                            });
                            // window.location.href = data.redirect;
                            window.location = '/security/qrcode_view';
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            type :'error',
                            title : 'Oops....',
                            text : 'Something went wrong'
                        })
                    }
                })
            }
        })
    }

    function onScanFailure(error) {
        console.warn(`Code scan error = ${error}`);
    }
    let html5QrcodeScanner = new Html5QrcodeScanner(
    "reader",
    { fps: 10, qrbox: {width: 250, height: 250} },
    /* verbose= */ false);
    html5QrcodeScanner.render(onScanSuccess, onScanFailure);
</script>
@endsection
