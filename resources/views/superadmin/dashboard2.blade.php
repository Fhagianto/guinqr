@extends('layout.template')

@section('main')

<h1>Login Sebagai:
    {{ Auth::user()->level }}</h1>
    
@endsection