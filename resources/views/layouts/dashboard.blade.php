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
    {{-- Start Template Assets --}}
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('static/template-assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('static/template-assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('static/template-assets/plugins/fontawesome/css/all.min.css') }}">
    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ asset('static/template-assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('static/template-assets/css/material.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('static/template-assets/css/font-awesome.min.css') }}">
    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ asset('static/template-assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('static/template-assets/css/material.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('static/template-assets/css/font-awesome.min.css') }}">
    <!-- Select2 CSS -->
	<link rel="stylesheet" href="{{ asset('static/template-assets/css/select2.min.css') }}">
    <!-- Datatable CSS -->
	<link rel="stylesheet" href="{{ asset('static/template-assets/css/dataTables.bootstrap4.min.css')}}">
    <!-- Chart CSS -->
    <link rel="stylesheet" href="{{ asset('static/template-assets/plugins/morris/morris.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('static/template-assets/css/style.css') }}">
    {{-- End Template Assets --}}
    {{-- Custom Styles --}}
    <style>
        .show-hide-password {
            cursor: pointer;
            margin-right: 1px;
            position: absolute;
            top: 15px;
            right: 10px;
        }
    </style>
    {{-- End Custom Styles --}}
</head>
<body>
    <noscript>Please enable JavaScript to continue using this application.</noscript>
    <script>function getAuthToken() { const token = document.cookie.replace(/(?:(?:^|.*;\s*)auth_token\s*\=\s*([^;]*).*$)|^.*$/, '$1'); return token ? decodeURIComponent(token) : null; }</script>
    <!-- jQuery + Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    {{-- Sweetalert2 --}}
    <script src="{{ asset('static/js/sweetalert2@11.js') }}"></script>
    <!-- CKEditor 5 Classic -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    {{-- Marked JS --}}
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    {{-- Components --}}
    <x-loading-overlay></x-loading-overlay>
    {{-- Main Wrapper --}}
    <div class="main-wrapper">
        <x-topbar />
        <x-sidebar />
        <main>
            <!-- Page Wrapper -->
            <div class="page-wrapper">
                <!-- Page Content -->
                <div class="content container">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
    {{-- Axios --}}
    <script src="{{ asset('static/js/axios.min.js') }}"></script>
    {{-- Bootstrap --}}
    <script src="{{ asset('static/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- Start Template Assets --}}
    <!-- Slimscroll JS -->
    <script src="{{ asset('static/template-assets/js/jquery.slimscroll.min.js') }}"></script>
    {{-- Select 2 --}}
    <script src="{{ asset('static/template-assets/js/select2.min.js') }}"></script>
    <!-- Datatable JS -->
    <script src="{{ asset('static/template-assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('static/template-assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Theme Settings JS -->
    <script src="{{ asset('static/template-assets/js/layout.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('static/template-assets/js/app.js') }}"></script>
    {{-- End Template Assets --}}
    {{-- Custom Styles --}}
    <style>
        .pagination .page-item.active .page-link {
            color: #fff !important;
        }
    </style>
</body>
</html>
