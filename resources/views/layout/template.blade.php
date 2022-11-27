{{-- @yield('head') ada di bawah--}}
@include('layout.header')
{{-- @yield('head') ada di atas--}}

@include('layout.navbar')

@include('layout.sidebar')

{{-- @yield('main') ada di bawah--}}
@include('layout.content')
{{-- @yield('main') ada di atas--}}

{{-- @yield('footer') ada di main--}}
@include('layout.footer')
{{-- @yield('footer') ada di atas--}}

@yield('scripts')
