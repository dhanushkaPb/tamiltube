{{-- @include('layouts.header');
@include('layouts.footer') --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <script src="{{ URL::asset('public/js/jquery.js') }}"></script>
    --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"
        integrity="sha512-U6K1YLIFUWcvuw5ucmMtT9HH4t0uz3M366qrF5y4vnyH6dgDzndlcGvH/Lz5k8NFh80SN95aJ5rqGZEdaQZ7ZQ=="
        crossorigin="anonymous"></script>
    <script src="{{ URL::asset('public/js/bootstrap.min.js') }}"></script>


    <script src="{{ URL::asset('public/add.js') }}"></script>


    <title>@yield('title')</title>
    {{-- <title>Tamil Tube</title> --}}

    <link rel="stylesheet" href="public/css/bootstrap.min.css" />
    {{--
    <link rel="stylesheet" href="{{ URL::asset('public/css/font-awesome.min.css') }}"> --}}
    {{-- <script src="{{ url('public/js/jquery.js') }}"></script>
    --}}

    @extends('layouts.header')
    {{-- @extend('layouts.header') --}}

<body>

    @yield('body')

</body>

@extends('layouts.footer')

</html>
