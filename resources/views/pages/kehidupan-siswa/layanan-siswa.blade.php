@extends('layouts.base')
@section('title', 'Layanan Siswa')
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
                            Layanan Siswa
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    <section class="mt-3 mb-5 faq-section">
        <div class="container">
            <h1 class="faq-title text-center mb-5 py-2 fw-normal text-black">Layanan Siswa</h1>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                    <img class="img-fluid rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/header-sph-studentServices-v1.jpg" alt="">
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <p class="fw-normal">Di Al-Layyinah, kami menjadikan penyediaan dukungan sebagai salah satu cara kami
                        melampaui
                        pendidikan. Kami menyediakan layanan pendukung bagi siswa yang mencakup area yang lebih luas. Area
                        dukungan kami meliputi layanan konseling, penyediaan fasilitas pendukung pembelajaran, serta
                        kesehatan dan kebugaran.</p>
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
            </div>
        </div>
    </section>
    {{-- Konseling Karier Section --}}
    <section class="mb-5 faq-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 mb-3">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Konseling Karier
                    </h5>
                </div>
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h1 class="faq-title fw-normal p-0 m-0 mb-3 text-black"><span
                            class="faq-title text-primary">Bimbingan</span> menuju Pendidikan Tinggi
                    </h1>
                </div>
                <div class="col-md-6 col-12">
                    <p class="mb-3" style="line-height: 1.9 !important;">Program Konseling Karier Al-Layyinah
                        mempersiapkan dan membimbing siswa dari Kelas 9 untuk kehidupan universitas dengan:</p>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li class="d-flex align-items-start gap-2">
                            <img height="20px" class="mt-1"
                                src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png" alt="">
                            memilih dan menentukan jurusan universitas yang paling sesuai dengan kemampuan serta profil
                            akademik siswa; dan
                        </li>
                        <li class="d-flex align-items-start gap-2">
                            <img height="20px" class="mt-1"
                                src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png" alt="">
                            memilih dan mendaftar di universitas tertentu, terutama berkaitan dengan navigasi proses
                            pendaftaran yang menantang.
                        </li>
                    </ul>
                    <p class="mb-3" style="line-height: 1.9 !important;">University Fair tahunan merupakan salah
                        satu acara yang paling dinanti dari Program Konseling Karier. Pameran ini membantu siswa dan orang
                        tua mendapatkan informasi yang rinci mengenai universitas dan kehidupan kampus, proses pendaftaran,
                        program studi, dan peluang beasiswa. Meskipun banyak siswa yang sebelumnya telah memilih dan mencari
                        tahu universitas pilihan mereka, acara ini memberikan kesempatan yang sangat baik untuk secara
                        langsung bertemu dengan para representatif universitas.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Konseling Pribadi Section --}}
    <section class="mt-3 mb-5 faq-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-universityDestination-top-v1.jpg"
                        alt="">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-l2">
                    <div class="d-flex align-items-center gap-2 text-primary mb-4">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">
                        Konseling Pribadi
                    </div>
                    <h2 class="faq-title fw-normal p-0 m-0 mb-4 text-black"><span
                            class="faq-title text-primary">Bimbingan</span> bagi Mereka yang
                        Membutuhkan
                    </h2>
                    <p class="mb-3">Konseling pribadi di Al-Layyinah ditujukan untuk memenuhi kebutuhan emosional, sosial
                        dan
                        perilaku siswa.</p>
                    <p>Konselor pribadi menyediakan sesi konseling yang didasarkan pada prinsip-prinsip
                        Islam bagi semua siswa.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Perpustakaan Section --}}
    <section class="mt-3 mb-5 faq-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-library-top-v1-1024x537.jpg"
                        alt="">
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Perpustakaan
                    </h5>
                    <h1 class="faq-title fw-normal p-0 m-0 mb-3 text-black">Memupuk <span
                            class="faq-title text-primary">Pengetahuan</span></h1>
                    <p class="mb-2" style="line-height: 1.9 !important;">Setiap perpustakaan merupakan hub untuk
                        sumber daya belajar mengajar.</p>
                    <p class="mb-2" style="line-height: 1.9 !important;">Setiap perpustakaan merupakan hub untuk
                        sumber daya belajar mengajar.</p>
                    <p class="mb-2" style="line-height: 1.9 !important;">Perpustakaan sekolah yang desain dengan
                        baik memainkan peran penting dalam mendukung keseluruhan proses belajar mengajar. Perpustakaan
                        Al-Layyinah,
                        yang dibangun sebagai pusat pembelajaran yang kondusif, mendukung siswa dan pengajar untuk
                        memperoleh pengetahuan, berkolaborasi dan menginspirasi pembelajaran.</p>
                    <button class="btn btn-sm btn-warning text-white btn-custom px-4 py-2 mt-2 rounded-pill">Kunjungi
                        Perpustakaan Daring Kami</button>
                </div>
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <img class="img-fluid w-100 h-100 object-fit-cover rounded" style="max-height: 600px;"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-library-side-v1.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- Pusat Kesehatan Section --}}
    <section class="mt-3 mb-5 faq-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-healthCenter-top-v1-1024x537.jpg"
                        alt="">
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Pusat Kesehatan
                    </h5>
                    <h1 class="faq-title fw-normal p-0 m-0 mb-3 text-black">Pertolongan Medis dari <span
                            class="faq-title text-primary">Profesional</span>
                    </h1>
                    <p class="mb-2" style="line-height: 1.9 !important;">Setiap kampus Al-Layyinah dilengkapi dengan
                        pusat kesehatan berkualitas dan berdedikasi. Pusat kesehatan kami dilengkapi dengan tenaga medis
                        profesional yang siap melayani siswa setiap hari.</p>
                </div>
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <img class="img-fluid w-100 h-100 object-fit-cover rounded" style="max-height: 600px;"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-healthCenter-side-v1.jpg"
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
