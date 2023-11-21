<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/coustom.css') }}">
    {{-- ------Coustom css-------- --}}
</head>

<body>

    @include('frontend.body.header')
    @yield('content')



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    {{-- ------Iconfy---------- --}}
    <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
    {{-- ------Jquery---------- --}}
    <script src="{{ asset('asset/js/custom.js') }}"></script>
    {{-- ------Coustom-js---------- --}}

</body>

</html>
