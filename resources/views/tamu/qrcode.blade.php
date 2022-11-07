<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel="stylesheet" id='parallax-css' href="{{ asset ('plugins') }}/parallax/parallax.css">
        <!-- Google Font: Source Sans Pro -->
        <link rel="preconnect dns-prefetch" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset ('AdminLTE') }}/plugins/fontawesome-free/css/all.min.css">
        <!-- daterange picker -->
        <link rel="stylesheet" href="{{ asset ('AdminLTE') }}/plugins/daterangepicker/daterangepicker.css">
        <!-- iCheck for checkboxes and radio inputs -->
        {{-- <link rel="stylesheet" href="{{ asset ('AdminLTE') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> --}}
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="{{ asset ('AdminLTE') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="{{ asset ('AdminLTE') }}/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="{{ asset ('AdminLTE') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <!-- Bootstrap4 Duallistbox -->
        {{-- <link rel="stylesheet" href="{{ asset ('AdminLTE') }}/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css"> --}}
        <!-- BS Stepper -->
        {{-- <link rel="stylesheet" href="{{ asset ('AdminLTE') }}/plugins/bs-stepper/css/bs-stepper.min.css"> --}}
        <!-- dropzonejs -->
        {{-- <link rel="stylesheet" href="{{ asset ('AdminLTE') }}/plugins/dropzone/min/dropzone.min.css"> --}}
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset ('AdminLTE') }}/dist/css/adminlte.min.css">
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous">
        </script>

    </head>
    <body class="">
        @if(session('error'))
        <script src="{{ asset ('AdminLTE') }}/plugins/sweetalert2/sweetalert22.js"></script>
        <script>
            const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
            })

            Toast.fire({
                icon: 'error',
                title: '{{session('error')}}',
            })
        </script>
        @endif
        @error('login_gagal')
        <script src="{{ asset ('AdminLTE') }}/plugins/sweetalert2/sweetalert22.js"></script>
        <script>
            const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
            })

            Toast.fire({
                icon: 'info',
                title: '{{ $message }}',
            })
        </script>
        @enderror
    <div class="header">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    {{-- Error Alert --}}
                                    <div class="card card-outline card-primary">
                                        <div class="card-header text-center">
                                            {{-- <img src="{{ asset ('img') }}/logo2.svg"height="100" width="100">
                                            <br> --}}
                                            <a  class="h1" href="/" style="text-decoration: none"><b>E-GUIN</b>QR</a>
                                            <br>
                                            <small>Elektronik Guest Invitation QR code</small>
                                        </div>
                                    <div class="card-body">
                                        <div class=" text-center">
                                            <div>
                                                {{-- {!! $qrcode !!} --}}
                                                {{-- {{ dd($tamu) }} --}}
                                                {{-- <img src="data:image/png;base64, {{ base64_encode(QrCode::size(250)->format('png')->generate($tamu))}}"> --}}
                                                {{ QrCode::format('svg')->size(250)->generate($tamu)}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        {{-- <button class="btn" href="{{ QrCode::format('svg')->size(250)->generate(bcrypt($tamu))}}.svg"><i class="fa fa-download"></i> Download</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>


    <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
            </svg>
        </div>
    <!--Waves end-->

    </div>
    <!--Header ends-->

    <!--Content starts-->
    <footer class="main-footer" style="margin-left: 0;">
        <strong>PBL E-GUIN | Politeknik Batam</strong>
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.0
        </div>
    </footer>
    <!--Content ends-->
    <script src="{{ asset ('AdminLTE') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset ('AdminLTE') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset ('AdminLTE') }}/plugins/select2/js/select2.full.min.js"></script>
    <script src="{{ asset ('AdminLTE') }}/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <script src="{{ asset ('AdminLTE') }}/plugins/moment/moment.min.js"></script>
    <script src="{{ asset ('AdminLTE') }}/plugins/inputmask/jquery.inputmask.min.js"></script>
    <script src="{{ asset ('AdminLTE') }}/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ asset ('AdminLTE') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="{{ asset ('AdminLTE') }}/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script src="{{ asset ('AdminLTE') }}/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <script src="{{ asset ('AdminLTE') }}/plugins/dropzone/min/dropzone.min.js"></script>
    <script src="{{ asset ('AdminLTE') }}/dist/js/adminlte.min.js?v=3.2.0"></script>

    <script>
        $(function () {
          //Initialize Select2 Elements
          $('.select2').select2()

          //Initialize Select2 Elements
          $('.select2bs4').select2({
            theme: 'bootstrap4'
          })

          //Datemask dd/mm/yyyy
          $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
          //Datemask2 mm/dd/yyyy
          $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
          //Money Euro
          $('[data-mask]').inputmask()

          //Date picker
          $('#reservationdate').datetimepicker({
              format: 'L'
          });

          //Date and time picker
          $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });


        })

      </script>
    </body>
</html>
