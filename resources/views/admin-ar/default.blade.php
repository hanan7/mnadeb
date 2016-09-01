<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our First Hand</title>
    <link rel='stylesheet' href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel='stylesheet' href="{{ asset('assets/css/bootstrap-rtl.css') }}" />
    <link rel='stylesheet' href="{{ asset('assets/css/style.css') }}"/>
    <link rel='stylesheet' href="{{ asset('assets/css/media.css') }}"/>
    <link rel='stylesheet' href="{{ asset('assets/css/style-ar.css') }}"/>
    <link rel='stylesheet' href="{{ asset('assets/css/font-awesome.min.css') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    @yield('styles')
</head>
<body>
    @yield('body')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script src="{{ asset('assets/js/jquery-1.12.1.min.js') }}"></script>
     <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('assets/js/plugins.js') }}"></script>
     <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
     @yield('scripts')
</body>
</html>
