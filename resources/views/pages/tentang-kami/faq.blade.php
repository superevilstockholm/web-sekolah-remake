@extends('layouts.base')
@section('title', 'FAQ')
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
                            FAQ
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    <section class="mt-3 mb-5 faq-section">
        <div class="container">
            <h1 class="faq-title text-center mb-5 py-2 fw-normal text-black">Frequently Asked Questions</h1>
            <div class="row justify-content-center">
                <div class="col-md-7 col-12">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Pertanyaan yang Sering Diajukan (FAQ)
                    </h5>
                    <h1 class="faq-title fw-normal p-0 m-0 mb-3 text-black">Kehidupan <span
                            class="text-primary faq-title">Siswa Al-Layyinah</span></h1>
                    <p class="mb-2" style="line-height: 1.9 !important;">Kami menyiapkan daftar pertanyaan yang
                        sering diajukan oleh para orang tua. Jika Anda memiliki pertanyaan lainnya, jangan ragu untuk
                        menghubungi kami. Konselor Pendaftaran kami akan menanggapi dan membantu Anda serta keluarga terkait
                        perjalanan Anda di SPH.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- FAQ Section --}}
    <section class="mt-3 mb-5 faq-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-12">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Apa itu Yayasan Pendidikan Islam Al-Layyinah?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="font-size: 0.9rem;">
                                    <p class="mb-2">Yayasan Pendidikan Islam Al-Layyinah adalah lembaga pendidikan Islam
                                        yang berdiri
                                        sejak tahun 1996 di Kp. Cijengir, Curug, Tangerang. Yayasan ini menaungi pendidikan
                                        formal dari RA, MI, MTs, hingga SMA Islam, serta Pondok Tahfizh Al-Qur’an.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Apa visi dan misi Yayasan Pendidikan Islam Al-Layyinah?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="font-size: 0.9rem;">
                                    <p class="mb-2">Visi: Menjadikan Al-Layyinah unggul dalam prestasi, teladan dalam
                                        bersikap, dan
                                        pelopor dalam bermashlahat umat.</p>
                                    <p class="mb-2">Misi: Membentuk generasi bertaqwa, berilmu, berakhlakul karimah,
                                        meningkatkan
                                        kualitas tamatan, serta memberikan pelayanan pendidikan yang bermutu.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Apa saja jenjang pendidikan yang tersedia di Al-Layyinah?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="font-size: 0.9rem;">
                                    <p class="mb-2">Jenjang pendidikan yang tersedia meliputi:</p>
                                    <ul class="list-unstyled d-flex flex-column gap-2">
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            Raudhatul Athfal (RA)
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            Madrasah Ibtidaiyah (MI)
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            Madrasah Tsanawiyah (MTs)
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            Sekolah Menengah Atas (SMA) Islam
                                        </li>
                                    </ul>
                                    <p class="mb-2">Selain itu juga terdapat Pondok Tahfizh Al-Qur’an.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Apakah Al-Layyinah memiliki program unggulan?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="font-size: 0.9rem;">
                                    <p class="mb-2">Ya, salah satunya adalah Pondok Tahfizh Al-Qur’an yang berfokus pada
                                        pembinaan
                                        hafalan Al-Qur’an, pemahaman makna, dan pengamalan nilai-nilai Al-Qur’an dalam
                                        kehidupan sehari-hari.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq5">
                                    Apa motto sekolah Al-Layyinah?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="font-size: 0.9rem;">
                                    <p class="mb-2">Motto sekolah adalah BIRU MUDA yang bermakna: Bersih, Indah, Ramah,
                                        Ukhuwah, Maju,
                                        Unggul, Disiplin, dan Agamis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq6">
                                    Apa saja kegiatan ekstrakurikuler yang tersedia?
                                </button>
                            </h2>
                            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="font-size: 0.9rem;">
                                    <p class="mb-2">Ekstrakurikuler berbeda di tiap jenjang, namun secara umum meliputi:
                                    </p>
                                    <ul class="list-unstyled d-flex flex-column gap-2">
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            Karate, Pramuka, Futsal, Tata Boga, Panahan
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            Fotografi, Videografi, PMR
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            Seni Teater, Seni Tari, Paskibra, Paduan Suara
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            Klub Sains & Bahasa (Matematika, Biologi, Kimia, Geografi, Ekonomi, English
                                            Club)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq7">
                                    Apa saja prestasi yang telah diraih Al-Layyinah?
                                </button>
                            </h2>
                            <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="font-size: 0.9rem;">
                                    <p class="mb-2">Beberapa prestasi di antaranya:</p>
                                    <ul class="list-unstyled d-flex flex-column gap-2">
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            Juara 1 Robotik Tingkat Nasional (MI)
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            Juara Umum Kompetisi Sains Madrasah Kabupaten Tangerang (MTs)
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            Juara 1 Film Pendek FLS2N Tingkat Provinsi (SMA)
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            Juara Pidato Bahasa Indonesia & Bahasa Inggris tingkat Kabupaten hingga Nasional
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq8">
                                    Bagaimana akreditasi sekolah di bawah Yayasan Al-Layyinah?
                                </button>
                            </h2>
                            <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="font-size: 0.9rem;">
                                    <p class="mb-2">Seluruh sekolah di bawah naungan yayasan telah terakreditasi “A” oleh
                                        BAN S/M.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq9">
                                    Apa saja fasilitas yang dimiliki Al-Layyinah?
                                </button>
                            </h2>
                            <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="font-size: 0.9rem;">
                                    <p class="mb-2">Fasilitas meliputi:</p>
                                    <ul class="list-unstyled d-flex flex-column gap-2">
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            Ruang kelas full AC
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            Perpustakaan digital
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            Area parkir mandiri
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            Sarana ibadah (sholat dhuha, zhuhur, dan ashar berjamaah)
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            Outing class & kegiatan manasik haji rutin
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq10">
                                    Bagaimana cara menghubungi pihak sekolah?
                                </button>
                            </h2>
                            <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body" style="font-size: 0.9rem;">
                                    <p class="mb-2">Kontak sekolah:</p>
                                    <ul class="list-unstyled d-flex flex-column gap-2">
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            Alamat: Jl. Madrasah Al-Layyinah Rt. 004/003, Kp. Cijengir, Curug, Tangerang
                                            15810
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            Telepon: (021) 5982531
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            WhatsApp: 0819 0833 1973
                                        </li>
                                        <li class="d-flex align-items-center gap-2">
                                            <img src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                                alt="">
                                            Email: [tersedia di sekolah]
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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
