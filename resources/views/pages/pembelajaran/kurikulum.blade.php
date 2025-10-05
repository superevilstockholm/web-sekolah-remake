@extends('layouts.base')
@section('title', 'Kurikulum')
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
                            Kurikulum
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    <section class="mt-3 mb-5">
        <div class="container">
            <h1 class="text-center mb-5 py-2 text-black fw-normal text-pt-sans">Kurikulum Yayasan Al-Layyinah</h1>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                    <img class="img-fluid rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/header-sph-academic-curiculum-v1.jpg"
                        alt="">
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <p class="fw-normal">Di Al-Layyinah, kami mengadopsi, menyesuaikan dan menggabungkan berbagai
                        kurikulum yang paling sesuai dengan program akademik yang kami tawarkan untuk meningkatkan
                        kompetensi dan keterampilan siswa.</p> <br>
                    <div class="row">
                        <div class="col-6">
                            <div class="d-flex flex-column gap-3">
                                <a href="#studi-alquran" class="d-flex align-items-center gap-1 text-primary fw-medium"
                                    style="text-decoration: none;">
                                    <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                                        alt="">
                                    Studi Al-Quran
                                </a>
                                <a href="#matematika" class="d-flex align-items-center gap-1 text-primary fw-medium"
                                    style="text-decoration: none;">
                                    <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                                        alt="">
                                    Matematika
                                </a>
                                <a href="#musik-dan-seni" class="d-flex align-items-center gap-1 text-primary fw-medium"
                                    style="text-decoration: none;">
                                    <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                                        alt="">
                                    Musik dan Seni
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column gap-3">
                                <a href="#bahasa" class="d-flex align-items-center gap-1 text-primary fw-medium"
                                    style="text-decoration: none;">
                                    <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                                        alt="">
                                    Bahasa
                                </a>
                                <a href="#sains" class="d-flex align-items-center gap-1 text-primary fw-medium"
                                    style="text-decoration: none;">
                                    <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                                        alt="">
                                    Sains
                                </a>
                                <a href="#olahraga" class="d-flex align-items-center gap-1 text-primary fw-medium"
                                    style="text-decoration: none;">
                                    <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                                        alt="">
                                    Olahraga
                                </a>
                            </div>
                        </div>
                    </div>
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
    {{-- Studi Alquran Section --}}
    <section class="mb-4 mb-md-5" id="studi-alquran">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6 col-12">
                    <h1 class="fw-normal text-black text-pt-sans">Pembelajaran <span
                            class="text-primary text-pt-sans">Al-Qur’an & Hadits</span></h1>
                </div>
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <div class="d-flex flex-column gap-3">
                        <p style="line-height: 1.9 !important;">
                            Di Sekolah Al-Layyinah, pembelajaran <strong>Al-Qur’an & Hadits</strong> menjadi pilar utama.
                            Siswa diajarkan membaca, menghafal, serta memahami kandungan Al-Qur’an sesuai kaidah tajwid
                            dan tafsir yang benar.
                        </p>
                        <p style="line-height: 1.9 !important;">
                            Selain itu, Hadits Nabi ﷺ dipelajari untuk membimbing akhlak, menanamkan adab Islami,
                            serta membentuk karakter mulia sejak dini. Pendekatan ini dikombinasikan dengan metode
                            belajar aktif dan pembiasaan sehari-hari, sehingga nilai Qur’ani melekat dalam kehidupan siswa.
                        </p>
                        <button class="btn btn-sm px-4 py-2 btn-warning text-white rounded-pill ms-0 me-auto">
                            Program Tahfidz
                        </button>
                    </div>
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h5 class="text-primary d-flex align-items-center gap-2 mb-4 mb-md-3" style="font-size: 0.9rem;">
                        <img height="20" src="https://img.icons8.com/ios-filled/50/228BE6/quran.png" alt="">
                        Kurikulum Al-Qur’an & Hadits TK-SD
                    </h5>
                    <p style="line-height: 1.9 !important;">
                        Al-Layyinah mengadopsi kurikulum <strong>Al-Qur’an & Hadits</strong> yang komprehensif untuk siswa
                        tingkat Taman Kanak-Kanak hingga <a class="text-primary" style="text-decoration: none;"
                            href="#">Sekolah Dasar</a>.
                        Kurikulum ini mencakup pengenalan huruf hijaiyah, tahsin, tahfidz, pemahaman tafsir sederhana,
                        serta pengamalan hadits-hadits pilihan dalam kehidupan sehari-hari.
                    </p>
                    <p style="line-height: 1.9 !important;">
                        Dengan pendekatan bertahap sesuai usia, siswa diharapkan tidak hanya mampu membaca dan menghafal,
                        tetapi juga memahami nilai-nilai yang terkandung dalam Al-Qur’an dan Hadits serta mengaplikasikannya
                        dalam perilaku sehari-hari.
                    </p>
                </div>
                <div class="col-md-6 col-12">
                    <img class="img-fluid w-100 h-100 object-fit-cover rounded shadow-sm" style="max-height: 600px;"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-academic-biblicalStudies-side-v1.jpg"
                        alt="Pembelajaran Al-Qur’an & Hadits">
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
    {{-- Bahasa Section --}}
    <section class="mb-4 mb-md-5" id="bahasa">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-academic-languages-top-v1-1024x537.jpg"
                        alt="">
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <div class="d-flex flex-column gap-3">
                        <h1 class="fw-normal p-0 m-0 text-pt-sans"><span class="text-primary text-pt-sans">Bahasa</span>
                        </h1>
                        <p style="line-height: 1.9 !important;">
                            Di Sekolah Al-Layyinah, pembelajaran bahasa menjadi bagian penting untuk membekali siswa agar
                            mampu berkomunikasi dan memahami dunia global.
                            Bahasa Arab diajarkan sebagai prioritas utama, agar siswa dapat membaca dan memahami Al-Qur’an
                            secara langsung.
                            Selain itu, kami juga menawarkan bahasa Indonesia sebagai bahasa nasional, serta bahasa Inggris
                            untuk mendukung komunikasi internasional.
                        </p>
                        <p style="line-height: 1.9 !important;">
                            Siswa dilatih untuk meningkatkan kemampuan membaca, menulis, meneliti, dan berbicara di setiap
                            tingkat pendidikan.
                            Melalui pembelajaran sastra dan budaya, siswa juga diajak mengenal karya-karya penting baik dari
                            khazanah Islam maupun literatur dunia.
                        </p>
                        <p style="line-height: 1.9 !important;">
                            Untuk siswa yang memerlukan dukungan tambahan, Sekolah Al-Layyinah menyediakan program
                            pendampingan bahasa agar semua siswa dapat berkembang sesuai potensi mereka.
                        </p>
                        <button class="btn btn-sm px-4 py-2 btn-warning text-white rounded-pill ms-0 me-auto">
                            Pelajari Lebih Lanjut
                        </button>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <img class="img-fluid w-100 h-100 object-fit-cover rounded" style="max-height: 600px;"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-academic-math-side-v1.jpg" alt="">
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
    {{-- Matematika Section --}}
    <section class="mb-4 mb-md-5" id="matematika">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-academic-math-top-v1.jpg" alt="">
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <div class="d-flex flex-column gap-3">
                        <h1 class="fw-normal p-0 m-0 text-pt-sans"><span
                                class="text-primary text-pt-sans">Matematika</span></h1>
                        <p style="line-height: 1.9 !important;">
                            Al-Layyinah menggunakan kurikulum matematika yang terintegrasi dengan pendekatan Islam dan
                            pembelajaran modern. Kurikulum ini memadukan metode pembelajaran berbasis konsep, praktik,
                            serta penguatan logika dan penalaran, sehingga siswa tidak hanya memahami rumus, tetapi juga
                            mengetahui makna dan penerapannya dalam kehidupan nyata.
                        </p>
                        <p style="line-height: 1.9 !important;">
                            Di setiap kelas, guru mendorong siswa untuk memahami "mengapa" di balik sebuah konsep,
                            lalu menghubungkannya dengan aplikasi praktis dalam kehidupan sehari-hari.
                            Diskusi pemecahan masalah dilakukan untuk menumbuhkan kemampuan berpikir kritis,
                            kerja sama, dan ketekunan.
                        </p>
                        <p style="line-height: 1.9 !important;">
                            Pembelajaran matematika juga menjadi sarana untuk memahami keagungan ciptaan Allah ﷻ
                            melalui keteraturan angka, pola, struktur, dan formula. Dengan demikian, matematika
                            tidak hanya menjadi ilmu hitung, tetapi juga jalan untuk meningkatkan iman dan rasa syukur.
                        </p>
                        <button
                            class="btn btn-sm px-4 py-2 btn-warning text-white btn-custom px-4 ms-0 me-auto rounded-pill">
                            Pelajari Lebih Lanjut
                        </button>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <img class="img-fluid w-100 h-100 object-fit-cover rounded" style="max-height: 600px;"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-academic-languages-side-v1.jpg"
                        alt="">
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
    {{-- Sains Section --}}
    <section class="mb-4 mb-md-5" id="sains">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-academic-science-top-v1-1024x537.jpg"
                        alt="">
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <div class="d-flex flex-column gap-3">
                        <h1 class="fw-normal p-0 m-0 text-pt-sans"><span class="text-primary text-pt-sans">Sains</span>
                        </h1>
                        <p style="line-height: 1.9 !important;">
                            Di Al-Layyinah, pembelajaran sains diarahkan untuk menumbuhkan rasa kagum terhadap ciptaan Allah
                            ﷻ,
                            sehingga siswa termotivasi untuk meneliti, mengeksplorasi, dan menemukan hikmah di balik
                            fenomena alam.
                            Sains tidak hanya dipandang sebagai kumpulan fakta, tetapi juga sebagai sarana memahami
                            tanda-tanda kebesaran Allah
                            yang terdapat di alam semesta.
                        </p>
                        <p style="line-height: 1.9 !important;">
                            Metode pembelajaran yang digunakan menekankan pada pengalaman langsung (experiential learning),
                            baik melalui observasi, eksperimen di laboratorium, maupun penelitian lapangan. Dengan demikian,
                            siswa dapat mengaitkan pengetahuan ilmiah dengan nilai-nilai keimanan, sehingga terbentuklah
                            generasi
                            yang berilmu dan berakhlak mulia.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <img class="img-fluid w-100 h-100 object-fit-cover rounded" style="max-height: 600px;"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-academic-science-side-v1.jpg" alt="">
                </div>
            </div>
            <div class="row py-3 mb-4">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Sains
                    </h5>
                    <h1 class="fw-normal p-0 m-0 text-black text-pt-sans">Program Sains di <span
                            class="text-primary text-pt-sans">Al-Layyinah</span></h1>
                </div>
                <div class="col-md-6 col-12">
                    <p style="line-height: 1.9 !important;">
                        Untuk membimbing siswa dalam mengeksplorasi alam, Al-Layyinah menggunakan sains sebagai tema
                        yang memayungi seluruh mata pelajaran Ilmu Pengetahuan Alam. Hal ini bertujuan agar siswa tidak
                        hanya menguasai
                        aspek pengetahuan dan keterampilan, tetapi juga memiliki kesadaran etis dalam penggunaan ilmu
                        pengetahuan dan teknologi,
                        sesuai dengan tuntunan Al-Qur’an dan Hadits.
                    </p>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-academic-appliedScienceAcademy-top-v1.jpg"
                        alt="">
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <img class="img-fluid w-100 h-100 object-fit-cover rounded" style="max-height: 600px;"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-academic-appliedScienceAcademy-side-v1.jpg"
                        alt="">
                </div>
                <div class="col-md-6 col-12">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Sains
                    </h5>
                    <h1 class="fw-normal p-0 m-0 mb-3 text-black text-pt-sans"><span
                            class="text-primary text-pt-sans">Applied</span> Science Program</h1>
                    <p class="mb-2" style="line-height: 1.9 !important;">
                        Applied Science Program di Al-Layyinah dirancang sebagai kegiatan tambahan di luar pembelajaran
                        utama,
                        yang ditujukan bagi siswa dengan minat tinggi dalam bidang sains. Program ini memberikan kesempatan
                        untuk melakukan penelitian ilmiah lebih mendalam, baik secara individu maupun kelompok.
                    </p>
                    <p class="mb-2" style="line-height: 1.9 !important;">
                        Melalui program ini, siswa belajar langsung mengenai metode penelitian, eksperimen, dan analisa,
                        sehingga terlatih dalam berpikir kritis serta memiliki rasa tanggung jawab ilmiah dengan
                        berlandaskan iman dan akhlak.
                    </p>
                    <p class="mb-2" style="line-height: 1.9 !important;">
                        Tujuan utama program ini adalah melahirkan generasi muda muslim yang tidak hanya unggul dalam sains,
                        tetapi juga menjadikan ilmu pengetahuan sebagai jalan untuk semakin mendekatkan diri kepada Allah ﷻ
                        dan memberi manfaat bagi umat manusia.
                    </p>
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
    {{-- Musik dan Seni Section --}}
    <section class="mb-4 mb-md-5" id="musik-dan-seni">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-academic-musicArt-top-v1.jpg" alt="">
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <div class="d-flex flex-column gap-3">
                        <h1 class="fw-normal p-0 m-0 text-pt-sans"><span class="text-primary text-pt-sans">Musik dan
                                Seni</span></h1>
                        <p style="line-height: 1.9 !important;">
                            Untuk menyeimbangkan pembelajaran akademik yang ketat, Al-Layyinah menghadirkan pelajaran musik
                            dan seni,
                            yang meliputi musik, seni visual, hingga seni pertunjukan Islami. Program ini menjadi ruang bagi
                            siswa untuk mengekspresikan diri
                            serta mengembangkan bakat artistik dengan pemahaman bahwa setiap kreativitas adalah karunia
                            Allah ﷻ yang harus dimanfaatkan
                            untuk kemaslahatan umat.
                        </p>
                        <p style="line-height: 1.9 !important;">
                            Seni rupa juga diajarkan mulai dari jenjang dasar hingga menengah. Proses berkarya tidak hanya
                            menuntut kreativitas dan imajinasi,
                            tetapi juga penelitian serta pemikiran kritis. Di tingkat lanjutan, siswa berkesempatan
                            menciptakan karya seni yang penuh makna,
                            mulai dari kritik sosial yang membangun hingga ekspresi personal. Setiap akhir tahun,
                            karya-karya tersebut dipamerkan dalam
                            <em>Pameran Seni Al-Layyinah</em> sebagai ajang apresiasi dan pembelajaran.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <img class="img-fluid w-100 h-100 object-fit-cover rounded" style="max-height: 600px;"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-academic-musicArt-side-v1.jpg" alt="">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-academic-musicArt-v1.jpg" alt="">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-12">
                    <h4 class="mb-4 text-black fw-bold">Program Musik & Seni</h4>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li class="d-flex align-items-center gap-1 text-muted">
                            <img height="20" src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                alt="">
                            Vokal & Paduan Suara Islami
                        </li>
                        <li class="d-flex align-items-center gap-1 text-muted">
                            <img height="20" src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                alt="">
                            Band & Ensemble (Gitar, Strings, dan Perkusi)
                        </li>
                        <li class="d-flex align-items-center gap-1 text-muted">
                            <img height="20" src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                alt="">
                            Piano Klasik & Modern
                        </li>
                        <li class="d-flex align-items-center gap-1 text-muted">
                            <img height="20" src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                alt="">
                            Musik Tradisional Indonesia (Gamelan, Angklung, Kolintang)
                        </li>
                        <li class="d-flex align-items-center gap-1 text-muted">
                            <img height="20" src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                alt="">
                            Marawis & Qasidah
                        </li>
                        <li class="d-flex align-items-center gap-1 text-muted">
                            <img height="20" src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                alt="">
                            Hadroh & Nasyid Islami
                        </li>
                        <li class="d-flex align-items-center gap-1 text-muted">
                            <img height="20" src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                alt="">
                            Drama & Seni Peran Islami
                        </li>
                        <li class="d-flex align-items-center gap-1 text-muted">
                            <img height="20" src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png"
                                alt="">
                            Seni Visual (Lukis, Digital Art, Instalasi)
                        </li>
                    </ul>
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
    {{-- Olahraga Section --}}
    <section class="mb-4 mb-md-5" id="olahraga">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-academic-sports-top-v1.jpg"
                        alt="Olahraga Al-Layyinah">
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <div class="d-flex flex-column gap-3">
                        <h1 class="fw-normal p-0 m-0 text-pt-sans"><span class="text-primary text-pt-sans">Olahraga</span>
                        </h1>
                        <p style="line-height: 1.9 !important;">
                            Untuk menjaga kesehatan jasmani sekaligus menyeimbangkan kegiatan akademik,
                            Al-Layyinah menyediakan berbagai program olahraga yang bermanfaat.
                            Kegiatan ini menjadi sarana siswa untuk melatih fisik, disiplin, kerja sama tim, serta
                            sportivitas,
                            dengan tetap menjunjung tinggi adab Islami dalam setiap pertandingan.
                        </p>
                        <p style="line-height: 1.9 !important;">
                            Program olahraga kami mencakup beragam cabang, mulai dari permainan tradisional hingga modern.
                            Melalui latihan rutin dan kompetisi persahabatan, siswa tidak hanya mengasah keterampilan,
                            tetapi juga belajar mengendalikan emosi, menghormati lawan, dan menjaga ukhuwah Islamiyah.
                            Hal ini sejalan dengan tujuan pendidikan kami untuk mencetak generasi sehat, kuat, dan berakhlak
                            mulia.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <img class="img-fluid w-100 h-100 object-fit-cover rounded" style="max-height: 600px;"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-academic-sports-side-v1.jpg"
                        alt="Olahraga Santri">
                </div>
            </div>
            <div class="row py-3 mb-4">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Program Olahraga
                    </h5>
                    <h1 class="fw-normal p-0 m-0 text-black text-pt-sans">Tim Olahraga <span
                            class="text-primary text-pt-sans">Al-Layyinah</span></h1>
                </div>
                <div class="col-md-6 col-12">
                    <h4 class="fw-normal text-black">Olahraga untuk Kesehatan, Kekuatan, dan Ukhuwah</h4>
                    <p style="line-height: 1.9 !important;">
                        Beberapa cabang olahraga yang tersedia di Al-Layyinah meliputi sepak bola, bola basket, bulu
                        tangkis,
                        futsal, atletik, pencak silat, renang, hingga panahan sunnah.
                        Semua kegiatan ini diarahkan untuk membentuk jasmani yang sehat, jiwa yang kuat, serta semangat
                        kebersamaan dalam bingkai syiar Islam.
                    </p>
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
