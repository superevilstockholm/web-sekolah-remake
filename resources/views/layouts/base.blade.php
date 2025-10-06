<!DOCTYPE html>
<html lang="id">
<head>
    {{-- SEO Tags --}}
    <meta name="description" content="@yield('description', 'Web Sekolah, Al-Layyinah')">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Al-Layyinah')</title>
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('static/bootstrap/css/bootstrap.min.css') }}">
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="{{ asset('static/bootstrap-icons/bootstrap-icons.min.css') }}">
    {{-- Custom Styles --}}
    <style>
        .container {
            max-width: 1250px;
        }
    </style>
    {{-- Owl Carrousel --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>
<body>
    <noscript>Please enable JavaScript to continue using this application.</noscript>
    <script>function getAuthToken() { const token = document.cookie.replace(/(?:(?:^|.*;\s*)auth_token\s*\=\s*([^;]*).*$)|^.*$/, '$1'); return token ? decodeURIComponent(token) : null; }</script>
    <!-- jQuery + Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    {{-- Sweetalert2 --}}
    <script src="{{ asset('static/js/sweetalert2@11.js') }}"></script>
    @if ($meta['showNavbar'] ?? true)
        <x-navbar></x-navbar>
    @endif
    <main>
        @yield('content')
    </main>
    @if ($meta['showFooter'] ?? true)
        <x-footer></x-footer>
    @endif
    {{-- Axios --}}
    <script src="{{ asset('static/js/axios.min.js') }}"></script>
    {{-- Bootstrap --}}
    <script src="{{ asset('static/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
