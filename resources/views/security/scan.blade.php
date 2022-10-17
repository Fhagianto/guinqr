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
        <div class="card card-outline card-secondary">
            <div class="card-header">
                <h3 class="card-title">SCAN QR CODE</h3>
            </div>
            <div class="card-body">
                <div id="reader" width="600px"></div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->



@endsection

