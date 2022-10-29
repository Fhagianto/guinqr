<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>E-GUIN QR | Login</title>
        <link rel="stylesheet" href="{{ asset ('AdminLTE') }}/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="{{ asset ('AdminLTE') }}/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{ asset ('AdminLTE') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous"></script>
        <style>
            .header {
            position:relative;
            text-align:center;
            /* background: linear-gradient(60deg, rgb(183, 58, 58) 0%, rgb(193, 0, 0) 100%); */
            background: linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);
            }

            .flex { /*Flexbox for containers*/
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            }

            .waves {
            position:relative;
            width: 100%;
            height:15vh;
            margin-bottom:-7px; /*Fix for safari gap*/
            min-height:100px;
            max-height:150px;
            }

            .content {
            position:relative;
            height:20vh;
            text-align:center;
            background-color: white;
            }

            /* Animation */

            .parallax > use {
            animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
            }
            .parallax > use:nth-child(1) {
            animation-delay: -2s;
            animation-duration: 7s;
            }
            .parallax > use:nth-child(2) {
            animation-delay: -3s;
            animation-duration: 10s;
            }
            .parallax > use:nth-child(3) {
            animation-delay: -4s;
            animation-duration: 13s;
            }
            .parallax > use:nth-child(4) {
            animation-delay: -5s;
            animation-duration: 20s;
            }
            @keyframes move-forever {
            0% {
            transform: translate3d(-90px,0,0);
            }
            100% {
                transform: translate3d(85px,0,0);
            }
            }
            /*Shrinking for mobile*/
            @media (max-width: 768px) {
            .waves {
                height:40px;
                min-height:40px;
            }
            .content {
                height:30vh;
            }
            h1 {
                font-size:24px;
            }
            }
        </style>
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
                                        <form action="{{url('proses_login')}}" method="POST" id="logForm"
                                        style="background-image: url('{{ asset ('img') }}/logo2.svg');
                                        background-repeat: no-repeat;">
                                            @csrf
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Username</label>
                                                <input
                                                    class="form-control py-4"
                                                    autofocus="true"
                                                    id="inputEmailAddress"
                                                    name="username"
                                                    type="text"
                                                    placeholder="Masukkan Username"/>
                                                @if($errors->has('username'))
                                                <span class="error">{{ $errors->first('username') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input
                                                    class="form-control py-4"
                                                    id="inputPassword"
                                                    type="password"
                                                    name="password"
                                                    placeholder="Masukkan Password"/>
                                                @if($errors->has('password'))
                                                <span class="error">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox"/>
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <div
                                                class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                {{-- <a class="small" href="#">Forgot Password?</a> --}}
                                                <button class="btn btn-primary btn-block" type="submit">Login</button>
                                            </div>
                                        </form>
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

    </body>
</html>
