@extends('layouts.base')
@section('title', 'Kehidupan Rohani')
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
                            <a href="/kehidupan-siswa">Kehidupan Siswa</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Kehidupan Rohani
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    <section class="mt-3 mb-5 faq-section">
        <div class="container">
            <h1 class="faq-title text-center mb-5 py-2 fw-normal text-black">Kehidupan Rohani</h1>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                    <img class="img-fluid rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/header-sph-spiritualLife-v1.jpg" alt="">
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <h5 class="fw-normal" style="color: #3a3b3c;">Di Al-Layyinah, pembinaan iman Islam dimulai sejak dini.
                    </h5>
                    <p class="fw-normal mt-2">Dalam kelas, siswa dibimbing melalui pelajaran <b>Al-Qur’an dan Hadits</b>
                        yang terintegrasi dengan seluruh kurikulum.
                        Di luar kelas, mereka menumbuhkan kedekatan kepada Allah SWT melalui kegiatan seperti shalat
                        berjamaah, dzikir, dan kajian Islam.</p>
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
            </div>
        </div>
    </section>
    {{-- Kebaktian Section --}}
    <section class="mb-5 faq-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 mb-3">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Shalat Berjamaah
                    </h5>
                </div>
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h1 class="faq-title fw-normal p-0 m-0 mb-3 text-black"><span
                            class="faq-title text-primary">Pelayanan</span> kepada Allah</h1>
                </div>
                <div class="col-md-6 col-12">
                    <h5 class="fw-normal mb-3" style="color: #3a3b3c;">Setiap hari siswa melaksanakan shalat berjamaah dan
                        doa bersama.</h5>
                    <p class="mb-3" style="line-height: 1.9 !important;">Melalui shalat berjamaah, siswa dibiasakan untuk
                        disiplin, menumbuhkan rasa persaudaraan,
                        dan meningkatkan keimanan serta ketaatan kepada Allah SWT.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Retret Rohani Section --}}
    <section class="mb-5 faq-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-spiritualRetreat-top-v1.jpg"
                        alt="">
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Pesantren Kilat
                    </h5>
                    <h1 class="faq-title fw-normal p-0 m-0 mb-3 text-black"><span
                            class="faq-title text-primary">Menguatkan</span> Iman di Bulan Suci</h1>
                    <p class="mb-3" style="line-height: 1.9 !important;">Pesantren Kilat Ramadhan dilaksanakan dengan
                        kegiatan seperti kajian tafsir, tadarus Al-Qur’an,
                        shalat tarawih, dan pelatihan kepemimpinan Islami. Siswa diajak untuk mendalami ilmu agama dan
                        memperkuat akhlak mulia.</p>
                </div>
                <div class="col-md-6 col-12">
                    <img class="img-fluid w-100 h-100 object-fit-cover rounded" style="max-height: 600px;"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-spiritualRetreat-side-v1.jpg"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- Pelayanan Pastoral Section --}}
    <section class="mb-5 faq-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-spiritualRetreat-top-v1.jpg"
                        alt="">
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Bimbingan Rohani
                    </h5>
                    <h1 class="faq-title fw-normal p-0 m-0 mb-3 text-black"><span
                            class="faq-title text-primary">Pendampingan</span> Keagamaan</h1>
                    <h5 class="fw-normal mb-3" style="color: #3a3b3c;">Ustadz dan ustadzah mendampingi siswa dalam
                        menghadapi persoalan iman dan akhlak.</h5>
                    <p class="mb-3" style="line-height: 1.9 !important;">Melalui bimbingan rohani Islami, siswa dapat
                        berdiskusi, bertanya, dan mendapatkan arahan yang tepat.
                        Sekolah juga mengadakan doa bersama, kajian rutin, dan nasihat keislaman untuk memperkuat mental dan
                        spiritual siswa.</p>
                </div>
                <div class="col-md-6 col-12">
                    <img class="img-fluid w-100 h-100 object-fit-cover rounded" style="max-height: 600px;"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-pastoralCare-side-v1-1.jpg"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- Koordinator Rohani Section --}}
    <section class="mt-3 mb-5 faq-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-spiritualCoordinator-top-v1.jpg"
                        alt="">
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Koordinator Keagamaan
                    </h5>
                    <h1 class="faq-title fw-normal p-0 m-0 mb-3 text-black"><span
                            class="faq-title text-primary">Bimbingan</span> menuju Akhlak Mulia</h1>
                    <p class="mb-3" style="line-height: 1.9 !important;"><span class="fs-5 text-medium"
                            style="color: #3a3b3c;">Setiap
                            kampus memiliki Koordinator Keagamaan,</span> yang bertugas mendampingi seluruh kegiatan
                        kerohanian.
                        Dengan arahan ustadz pembimbing, siswa didorong untuk meneladani akhlak Rasulullah SAW serta
                        memperkuat iman dan takwa di setiap aspek kehidupan.</p>
                </div>
                <div class="col-md-6 col-12">
                    <img class="img-fluid w-100 h-100 object-fit-cover rounded" style="max-height: 600px;"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-spiritualCoordinator-side-v1.jpg"
                        alt="">
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
