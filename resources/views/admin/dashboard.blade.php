@extends('layout.template')
@section('head')
    <title>E-GUIN QR | Dashboard</title>
@endsection
@section('main')

<h1>Login Sebagai:{{ Auth::user()->level }}</h1>



@endsection
