{{-- @include('layouts.header');
@include('layouts.footer'); --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    {{-- <title>Tamil Tube</title> --}}

    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <script src="{{  url('js/bootstrap.min.js')  }}"></script>
    <script src="{{  url('js/jquery-3.1.1.min.js')  }}"></script>

    @include('layouts.header')
<body>

@yield('body')

</body>

@include('layouts.footer')
</html>