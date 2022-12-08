<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    {{--<script src="{{ asset('public/js/app.js') }}" defer></script>
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">--}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="{{asset('public/assets/img/favicon.png')}}" type="image/gif" sizes="16x16">



    <!-- Slick Slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"  crossorigin="anonymous" />

    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">

    <style type="text/css">
        .st0{display:none;fill:none;stroke:#effdf6;stroke-width:8;stroke-linejoin:round;}
        .st1{fill:none;stroke:#00FF84;stroke-width:8;stroke-linejoin:round;}

        .path {
            stroke-dasharray: 0;
            stroke-dashoffset: 0;
            animation: dash 5s linear alternate infinite;

        }


    </style>

</head>
<body>

    @include('header')

         @yield('content')

    @include('footer')


</body>
</html>
