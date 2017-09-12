<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title','Satrap Crm')
    </title>

    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    @if( Auth::check() )
        <link href="/css/themes/{{Auth::user()->theme}}.css" rel="stylesheet">
        @if( Auth::user()->rtl == 1)
            <link href="{{ asset('css/bootstrap-rtl.min.css')}}" rel="stylesheet">
        @endif
    @else
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-rtl.min.css')}}" rel="stylesheet">
    @endif
    
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-switch.min.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @stack('stylesheets')
</head>
<body>

@include("layouts.navbar")

<div class="container">
    @yield('content')
</div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
@stack('scripts')
</body>
</html>
