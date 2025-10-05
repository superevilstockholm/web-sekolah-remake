@extends('layouts.base')
@section('title', 'Program')
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
                            Program
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
                Program Belajar Yayasan Al-Layyinah
            </h1>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                    <img class="img-fluid rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/header-sph-academic-programs-v1.jpg" alt="">
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <p>Yayasan Al-Layyinah menghadirkan pendidikan Islami yang
                        terintegrasi dengan
                        <a class="text-primary" style="text-decoration: none;" href="{{ route('pembelajaran.kurikulum') }}">Kurikulum
                            Nasional</a>
                        dan <a class="text-primary" style="text-decoration: none;"
                            href="#">nilai-nilai Qur’ani</a>.
                        Program pembelajaran kami menekankan keseimbangan antara ilmu pengetahuan umum dan pendidikan agama.
                    </p> <br>
                    <p>Setiap jenjang pendidikan di Al-Layyinah disusun dengan memperhatikan
                        perkembangan usia anak,
                        agar mereka tumbuh menjadi generasi berilmu, berakhlak mulia, dan berlandaskan ketakwaan kepada
                        Allah SWT.</p>
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
                    <a href="{{ route('pembelajaran.kurikulum') }}">
                        <div class="card border-0 rounded-4 overflow-hidden shadow-sm">
                            <img src="https://sph.edu/wp-content/uploads/2022/02/3H3A8368.jpg" class="card-img"
                                alt="Pendidikan Anak Usia Dini">
                            <div class="card-img-overlay d-flex align-items-end p-3"
                                style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                                <h4 class="text-white m-0">Kurikulum Nasional</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card 2 -->
                <div class="item">
                    <a href="#">
                        <div class="card border-0 rounded-4 overflow-hidden shadow-sm">
                            <img src="https://sph.edu/wp-content/uploads/2022/02/carousel-sph-academic-programs-cambridge-v1.jpg"
                                class="card-img" alt="Sekolah Dasar">
                            <div class="card-img-overlay d-flex align-items-end p-3"
                                style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                                <h4 class="text-white m-0">Nilai-Nilai Qur’ani</h4>
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
            margin: 15,
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
                    items: 2
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
        .owl-carousel .item .card {
            aspect-ratio: 4 / 5;
            overflow: hidden;
        }
        .owl-carousel .item .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
    </style>
    {{-- FAQ Section --}}
    <section>
        <div class="container">
            <div class="row my-5">
                <div class="col-12">
                    <div class="d-flex flex-column align-items-center mb-4">
                        <h2 class="text-center mb-4 text-black text-pt-sans">Frequently Asked Question<br>Yayasan
                            Al-Layyinah</h2>
                        <h3 class="text-primary text-center d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                            <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                                alt=""> Pertanyaan Yang Sering Diajukan
                        </h3>
                    </div>
                </div>
                <div class="col">
                    <div class="accordion" id="faqAccordion">
                        {{-- FAQ 1 --}}
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Apa yang Membuat Program Belajar Yayasan Al-Layyinah Berbeda dari Sekolah Lain?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="font-size: 0.9rem;">
                                    <p>Program belajar di Yayasan Al-Layyinah memadukan kurikulum nasional dengan
                                        nilai-nilai Qur’ani.
                                        Siswa dibimbing agar unggul dalam akademik sekaligus memiliki akhlak Islami yang
                                        mulia.</p>
                                    <p>Fokus kami adalah membentuk generasi Qur’ani yang berilmu, beramal, dan berakhlak
                                        karimah.</p>
                                </div>
                            </div>
                        </div>
                        {{-- FAQ 2 --}}
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Bagaimana Program Pembelajaran Al-Layyinah Membantu Siswa yang Baru Bergabung?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="font-size: 0.9rem;">
                                    <p>Kami memberikan pendampingan khusus bagi siswa baru, baik akademik maupun sosial.
                                        Guru dan wali kelas siap membantu siswa beradaptasi dengan lingkungan Islami
                                        Al-Layyinah.</p>
                                    <p>Pendampingan meliputi bimbingan belajar, konseling Islami,
                                        serta kegiatan keagamaan untuk memperkuat iman dan akhlak.</p>
                                </div>
                            </div>
                        </div>
                        {{-- FAQ 3 --}}
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Bagaimana Nilai-Nilai Islam Diintegrasikan dalam Program Pembelajaran?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="font-size: 0.9rem;">
                                    <p>Setiap mata pelajaran diintegrasikan dengan nilai Islami.
                                        Al-Qur’an dan Hadits menjadi dasar dalam membentuk pola pikir siswa agar ilmu yang
                                        diperoleh bermanfaat.</p>
                                    <p>Siswa juga mengikuti kegiatan tahfidz, kajian Islam, dan pembinaan karakter Islami.
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{-- FAQ 4 --}}
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Bagaimana Sekolah Mempersiapkan Siswa untuk Masa Depan?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="font-size: 0.9rem;">
                                    <p>Al-Layyinah memberikan bimbingan karier dan motivasi Islami sejak dini,
                                        agar siswa mampu melanjutkan ke jenjang pendidikan tinggi dan terjun ke masyarakat
                                        sebagai insan Qur’ani.</p>
                                    <p>Kami membimbing siswa untuk memilih jalan pendidikan dan karier
                                        yang sesuai dengan potensi diri dan bermanfaat bagi umat.</p>
                                </div>
                            </div>
                        </div>
                        {{-- FAQ 5 --}}
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq5">
                                    Bagaimana Pendekatan untuk Pendidikan Anak Usia Dini di Al-Layyinah?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="font-size: 0.9rem;">
                                    <p>Program pendidikan anak usia dini di Al-Layyinah menekankan pembentukan akhlak,
                                        kemandirian, serta cinta terhadap Al-Qur’an melalui metode pembelajaran yang
                                        menyenangkan.</p>
                                    <p>Anak-anak diarahkan untuk mengenal huruf hijaiyah, doa-doa harian,
                                        dan kisah teladan Islami sejak dini, sehingga siap memasuki jenjang selanjutnya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap');
        .text-pt-sans {
            font-family: 'PT Sans', sans-serif !important;
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
