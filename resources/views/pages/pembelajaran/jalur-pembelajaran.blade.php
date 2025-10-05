@extends('layouts.base')
@section('title', 'Jalur Pembelajaran')
@section('content')
    {{-- Breadcrumb --}}
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/pembelajaran">Pembelajaran</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Jalur Pembelajaran
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    <section class="mt-3">
        <div class="container">
            <h1 class="text-center mb-5 py-2 text-black fw-normal text-pt-sans">
                Jalur Pembelajaran Yayasan Al-Layyinah
            </h1>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                    <img class="img-fluid rounded" src="https://sph.edu/wp-content/uploads/2021/08/sph-learning-banner.jpg"
                        alt="">
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <p>Yayasan Al-Layyinah menyediakan pendidikan Islami dari tingkat
                        dasar hingga menengah dengan
                        kurikulum yang mengintegrasikan <a class="text-primary" style="text-decoration: none;"
                            href="{{ route('pembelajaran.kurikulum') }}">Kurikulum Nasional</a>
                        dan <a class="text-primary" style="text-decoration: none;"
                            href="#">nilai-nilai Qur’ani</a>.
                        Setiap program dirancang untuk membentuk generasi yang berilmu, berakhlak, dan bertaqwa.</p> <br>
                    <p>Tim pendidik Al-Layyinah menyusun jalur pembelajaran sesuai tahapan usia anak,
                        agar mereka tumbuh dengan ilmu yang bermanfaat serta karakter Islami yang kuat.
                        Dengan pendekatan ini, setiap siswa mendapat pengalaman belajar terbaik
                        yang memadukan pengetahuan umum dan pemahaman agama secara seimbang.</p>
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
            </div>
        </div>
    </section>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap');
        .text-pt-sans {
            font-family: 'PT Sans', sans-serif !important;
        }
    </style>
    {{-- Image Card Section --}}
    <section class="mb-4">
        <div class="container my-5">
            <div class="owl-carousel owl-theme">
                <!-- Card 1 -->
                <div class="item">
                    <a href="#">
                        <div class="card border-0 rounded-4 overflow-hidden shadow-sm">
                            <img src="https://sph.edu/wp-content/uploads/2022/03/sph-learningpathway-carousel-early-years.jpg"
                                class="card-img w-100 h-100 object-fit-cover" alt="Pendidikan Anak Usia Dini">
                            <div class="card-img-overlay d-flex align-items-end p-3"
                                style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                                <h6 class="text-white m-0">Taman Kanak-kanak (TK)</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 2 -->
                <div class="item">
                    <a href="#">
                        <div class="card border-0 rounded-4 overflow-hidden shadow-sm">
                            <img src="https://sph.edu/wp-content/uploads/2022/03/sph-learningpathway-carousel-primary.jpg"
                                class="card-img w-100 h-100 object-fit-cover" alt="Sekolah Dasar">
                            <div class="card-img-overlay d-flex align-items-end p-3"
                                style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                                <h6 class="text-white m-0">Sekolah Dasar (SD)</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 3 -->
                <div class="item">
                    <a href="#">
                        <div class="card border-0 rounded-4 overflow-hidden shadow-sm">
                            <img src="https://sph.edu/wp-content/uploads/2022/03/sph-learningpathway-carousel-middle.jpg"
                                class="card-img w-100 h-100 object-fit-cover" alt="Sekolah Menengah">
                            <div class="card-img-overlay d-flex align-items-end p-3"
                                style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                                <h6 class="text-white m-0">Sekolah Menengah Pertama (SMP)</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 4 -->
                <div class="item">
                    <a href="#">
                        <div class="card border-0 rounded-4 overflow-hidden shadow-sm">
                            <img src="https://palpres.disway.id/upload/fd01d151c362200887d834c877335feb.jpeg"
                                class="card-img w-100 h-100 object-fit-cover" alt="Sekolah Menengah">
                            <div class="card-img-overlay d-flex align-items-end p-3"
                                style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                                <h6 class="text-white m-0">Sekolah Menengah Atas (SMA)</h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: false,
            margin: 7,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1
                }, // HP
                768: {
                    items: 2
                }, // Tablet
                992: {
                    items: 3
                } // Laptop
            }
        })
    </script>
    <style>
        .owl-carousel .item .card img {
            transition: transform 0.4s ease;
        }
        .owl-carousel .item:hover .card img {
            transform: scale(1.1);
        }
        .card-img-overlay {
            transition: background 0.4s ease;
        }
        .owl-carousel .item:hover .card-img-overlay {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.75), transparent) !important;
        }
        .owl-carousel .item .card img {
            aspect-ratio: 3/4;
            /* atau 4/3, sesuai kebutuhan */
        }
    </style>
    {{-- Parenting Quesstion Component --}}
    <x-sections.parenting-question></x-sections.parenting-question>
    {{-- Custom NavBar --}}
    <style>
        .navbar-container nav .nav-link,
        .navbar-container nav .navbar-brand {
            color: rgba(0, 0, 0, 0.75) !important;
            /* Teks hitam setelah scroll */
        }
        .navbar-container nav .nav-link:hover {
            color: rgba(0, 0, 0, 1) !important;
        }
    </style>
@endsection
