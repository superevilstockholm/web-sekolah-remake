@extends('layouts.base')
@section('title', 'Visi & Misi')
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
                            <a href="/tentang-kami">Tentang Kami</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Visi & Misi
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    <section class="mt-3 mb-5 faq-section">
        <div class="container">
            <h1 class="faq-title text-center mb-5 py-2 text-black fw-normal">Visi & Misi</h1>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                    <img class="img-fluid rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/header-sph-visionMission-v1-1.jpg" alt="">
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <h5 class="text-black">Visi</h5>
                    <p class="mb-4"> Menjadikan Al-Layyinah Unggul dalam prestasi teladan dalam bersikap dan
                        bertindak, pelopor dalam bermashlahat umat.</p>
                    <h5 class="text-black">Misi</h5>
                    <ul class="list-unstyled d-flex flex-column gap-3">
                        <li class="d-flex align-items-center gap-2">
                            <img height="20px" src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                alt="">
                            Membentuk generasi yang bertaqwa, berilmu serta berakhlakul karimah
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <img height="20px" src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                alt="">
                            Meningkatkan kualitas tamatan.
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <img height="20px" src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                alt="">
                            Memberikan pelayanan pendidikan yang bermutu kepada masyarakat.
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <img height="20px" src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                alt="">
                            Menciptakan suasana kerja yang harmonis sehingga memiliki rasa kebersamaan, disiplin, tanggung
                            jawab, dan berjiwa sosial.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
            </div>
        </div>
    </section>
    {{-- Tujuan Section --}}
    <section class="mb-5 faq-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 mb-3">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem; color: #3a3b3c;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Visi & Misi
                    </h5>
                </div>
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h1 class="faq-title fw-normal p-0 m-0 mb-3"><span class="text-primary faq-title">Tujuan</span>
                    </h1>
                </div>
                <div class="col-md-6 col-12">
                    <p class="mb-3" style="line-height: 1.9 !important;">
                        Tujuan kami adalah membentuk generasi yang bertakwa kepada Allah SWT, berilmu, mampu
                        mengamalkan ilmunya, serta memiliki akhlakul karimah. Dengan itu diharapkan lahir insan yang
                        cerdas, beriman, berkarakter, dan bermanfaat bagi masyarakat.
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- Parenting Quesstion Component --}}
    <x-sections.parenting-question></x-sections.parenting-question>
    {{-- Custom NavBar --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap');

        .navbar-container nav .nav-link,
        .navbar-container nav .navbar-brand {
            color: rgba(0, 0, 0, 0.75) !important;
            /* Teks hitam setelah scroll */
        }

        .navbar-container nav .nav-link:hover {
            color: rgba(0, 0, 0, 1) !important;
        }

        .faq-section .faq-title {
            font-family: 'PT Sans', sans-serif !important;
        }
    </style>
@endsection
