@extends('layouts.base')
@section('title', 'Rauhatul Athfal')
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
                            <a href="/lembaga">Lembaga</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Rauhatul Atfhal
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    <section class="mt-3">
        <div class="container">
            <h1 class="text-center py-2 text-black fw-normal text-pt-sans">SPH Kemang Village Jakarta</h1>
            <h2 class="text-center mb-5 py-2 text-black fw-normal text-pt-sans">Sekolah Urban yang Berfokus pada Komunitas
            </h2>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                    <img class="img-fluid rounded"src=" https://sph.edu/wp-content/uploads/2022/02/header-sph-ourSchools-kemangVillage-v1.jpg"
                        alt="">
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <p>
                        SPH Kemang Village merupakan <a href="https://sph.edu/id/halaman/">sekolah internasional</a> yang
                        terletak di Jakarta Selatan. Sekolah ini
                        telah menjadi komunitas urban yang berkembang pesat sejak tahun 2010. Kampus kami menawarkan metode
                        pembelajaran yang menyenangkan bagi para siswa abad ke-21. Siswa kami dapat menikmati beragam
                        fasilitas dalam ruangan, mulai dari pusat kebugaran yang lengkap, teater, taman bermain dalam
                        ruangan, laboratorium teknologi pangan, hingga ruang kreatif untuk memperkaya pengalaman belajar
                        mereka.
                    </p>
                    <br>
                    <p>
                        Melalui program Cambridge dan <a
                            href="https://sph.edu/id/pembelajaran/jalur-pembelajaran/ib-diploma/">International
                            Baccalaureate Diploma Program</a>(DP), kami mempersiapkan
                        siswa secara komprehensif untuk menghadapi tantangan di perguruan tinggi dan kehidupan mereka
                        selanjutnya. Kombinasi antara praktik akademik yang ketat dengan pendekatan holistik terhadap
                        pembelajaran yang kami terapkan, menciptakan pengalaman pendidikan yang inklusif bagi siswa.
                    </p>
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
    {{-- Keunggulan Section --}}
    <section class="mt-5">
        <div class="container">
            <div class="row py-3 mb-4">
                <div class="col-12 mb-3">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="15" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Kemang Village
                    </h5>
                </div>
                <!-- Judul dan sub-judul -->
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h1 class="fw-normal p-0 m-0 mb-3 text-black text-pt-sans">Keunggulan <span
                            class="text-primary text-pt-sans">Kami</span></h1>
                </div>
                <!-- Konten -->
                <div class="col-md-6 col-12">
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <p class="mb-0">
                            <strong>Pengalaman belajar yang disesuaikan dengan kebutuhan tiap siswa</strong>
                            , bukan sebaliknya, dan ruang kelas yang didesain secara khusus untuk mendukung perkembangan
                            siswa.
                        </p>
                    </div>
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <p class="mb-0"><strong>Tim dan program </strong> <em> Student Support </em> <strong>yang
                                inklusif
                            </strong>
                            yang mengapresiasi dan membina setiap siswa berdasarkan talenta dan keterampilan mereka</p>
                    </div>
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <p class="mb-0"><strong>Visi global yang mempersiapkan siswa di luar kelas; </strong>
                            bentuk dari komitmen kami untuk membekali siswa dalam menjalani kehidupan.</p>
                    </div>
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <p class="mb-0"> <strong>Ruang belajar inovatif dan imajinatifx
                            </strong>
                            yang mendorong kecerdasan dan ide baru, serta memupuk kreativitas.
                        </p>
                    </div>
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <p class="mb-0"><strong>Komunitas berbasis iman Kristen</strong>
                            yang berdedikasi untuk membentuk individu yang penuh kasih</p>
                    </div>
                    <div class="mb-4 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <p class="mb-0"><strong>Komunitas siswa, orang tua, dan guru yang terhubung erat</strong>
                            dan saling mendukung.</p>
                    </div>
                    <h6 class="fw-semibold">Program & Jalur Pembelajaran</h6>
                    <p class="mb-2"><a href="https://sph.edu/id/pembelajaran/program/cambridge-international/">Cambridge
                            International</a> (untuk TK – kelas 10) & <a
                            href="https://sph.edu/id/pembelajaran/program/international-baccalaureate/">International
                            Baccalaureate</a> (Untuk kelas 11 – 12)</p>
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="16"
                            alt="">
                        <span class="text-danger"><a
                                href="https://sph.edu/id/pembelajaran/jalur-pembelajaran/pendidikan-anak-usia-dini/">Taman
                                Kanak-Kanak</a></span><span> (K1 – K3)</span>
                    </div>
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="16"
                            alt="">
                        <span class="text-danger"><a
                                href="https://sph.edu/id/pembelajaran/jalur-pembelajaran/sekolah-dasar/">Sekolah
                                Dasar</a></span><span>(Kelas 1 – 5)</span>
                    </div>
                    <div class="mb-4 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="16"
                            alt="">
                        <span class="text-danger"><a
                                href="https://sph.edu/id/pembelajaran/jalur-pembelajaran/sekolah-menengah/">Sekolah Menengah
                                Pertama &amp; Atas</a> </span><span>(Kelas 6 – 12)</span>
                    </div>
                    <a href="#" class="text-danger fw-semibold text-decoration-none">
                        → Pelajari Lebih Lanjut
                    </a>
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
    {{-- Komunitas Section --}}
    <section class="mt-5">
        <div class="container">
            <div class="row py-3 mb-5">
                <div class="col-6 mx-auto">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="15" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Kemang Village
                    </h5>
                    <h1 class="fw-normal p-0 m-0 mb-3 text-black text-pt-sans">Komunitas Sebagai <span
                            class="text-primary text-pt-sans">Jantung Sekolah
                            Kami</span></h1>
                    <p style="line-height: 1.9 !important;">
                        Kehidupan di SPH Kemang Village ditandai oleh kebersamaan yang erat antara siswa dan guru; sebuah
                        lingkungan belajar yang ideal bagi tumbuh kembang siswa. Komunitas yang suportif di SPH Kemang
                        Village tidak hanya terbatas pada ruang kelas, tetapi juga dapat dirasakan dalam berbagai aktivitas
                        dan ekstrakurikuler yang memungkinkan siswa untuk mengembangkan minat dan bakat mereka secara
                        optimal.
                        <br>
                    <p style="line-height: 1.9 !important;">
                        Sekolah kami percaya bahwa hubungan yang baik antara sekolah dengan orangtua akan meningkatkan
                        pembelajaran siswa. Karena itu, kami menjadikan Parents Advisory Group (PAG) sebagai bagian penting
                        dari budaya sekolah kami. Bersama dengan siswa dan keluarga mereka, komunitas kami menjadi rumah
                        kedua yang hangat dan dinamis yang selalu Anda rindukan.
                    </p>
                    <br>
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
    {{-- Carousel Section --}}
    <section class="mt-3">
        <div class="container" style="max-width: 1300px;">
            <div id="carouselExampleIndicators" class="carousel slide my-5" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://picsum.photos/1000/400?random=1" class="d-block w-100 rounded" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/1000/400?random=2" class="d-block w-100 rounded" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/1000/400?random=3" class="d-block w-100 rounded" alt="Slide 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
            <div id="carouselYoutube" class="carousel slide my-5" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/jfKfPfyJRdk" title="YouTube video"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/aqz-KE-bpKQ" title="YouTube video"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/oHg5SJYRHA0" title="YouTube video"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/l482T0yNkeo" title="YouTube video"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselYoutube"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselYoutube"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>
    {{-- FAQ Section --}}
    <section id="faq" class="py-5">
        <div class="container">
            <h2 class="text-center text-black mb-2 text-pt-sans">FAQ</h2>
            <h5 class="text-center mb-5">
                <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" alt="icon"
                    style="height:20px; margin-right:8px;">
                <span class="text-primary">Pertanyaan yang Sering Diajukan</span>
            </h5>
            <div class="accordion" id="faqAccordion">
                <!-- FAQ 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne">
                            Apa yang membedakan SPH Kemang Village dengan sekolah internasional lainnya?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            SPH Kemang Village merupakan sekolah Kristen yang berlokasi di Jakarta Selatan, Indonesia.
                            Sekolah kami cukup besar untuk menawarkan program dan aktivitas yang beragam sekaligus cukup
                            kecil bagi setiap anak untuk dikenal secara individu dan didukung oleh staf pengajar
                            internasional kami yang beragam. SPH Kemang Village menggunakan dua program akademik yang diakui
                            secara internasional, International Baccalaureate Diploma Programme (IB DP) dan program
                            Cambridge International yang terintegrasi dengan nilai-nilai Kristiani dan landasan Alkitab yang
                            kuat.
                        </div>
                    </div>
                </div>
                <!-- FAQ 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo">
                            Kurikulum apa yang digunakan SPH Lippo Village?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <div class="d-flex align-items-start mb-2">
                                <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="14"
                                    class="me-2 mt-1">
                                <span>TK – Kelas 10 : <a
                                        href="https://sph.edu/id/pembelajaran/program/cambridge-international/">Cambridge
                                        International Pathway</a></span>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="14"
                                    class="me-2 mt-1">
                                <span>Kelas 11 – Kelas 12 : <a
                                        href="https://sph.edu/id/pembelajaran/program/international-baccalaureate/">International
                                        Baccalaureate Diploma Programme (DP)</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FAQ 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree">
                            Makanan apa yang tersedia di kantin sekolah?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Kami menawarkan masakan Barat dan Asia sebagai hidangan utama, dengan pilihan menu vegan dan
                            beragam pilihan kue, buah, dan minuman.
                            Sebagai tindakan untuk membangun budaya sekolah di mana siswa secara aktif memilih makanan
                            bergizi dan gaya hidup sehat, SPH bermitra dengan Sodexo Indonesia, bagian dari Sodexo Group,
                            perusahaan layanan manajemen fasilitas dan makanan global, untuk membuat gaya hidup sehat
                            menjadi pilihan yang mudah bagi siswa.
                        </div>
                    </div>
                    <!-- FAQ 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Kegiatan ekstrakurikuler apa saja yang tersedia di SPH Sentul City?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <!-- Nested Accordion -->
                                <div class="accordion" id="extracurricularAccordion">
                                    <!-- Sub: Olahraga -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOlahraga">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOlahraga"
                                                aria-expanded="false" aria-controls="collapseOlahraga">
                                                Olahraga
                                            </button>
                                        </h2>
                                        <div id="collapseOlahraga" class="accordion-collapse collapse"
                                            data-bs-parent="#extracurricularAccordion">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>Renang</li>
                                                    <li>berkuda</li>
                                                    <li>Basket</li>
                                                    <li>Tennis</li>
                                                    <li>Taekwondo</li>
                                                    <li>Panahan</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Sub: Klub Siswa -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingKlub">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseKlub"
                                                aria-expanded="false" aria-controls="collapseKlub">
                                                Klub Siswa
                                            </button>
                                        </h2>
                                        <div id="collapseKlub" class="accordion-collapse collapse"
                                            data-bs-parent="#extracurricularAccordion">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>Koding</li>
                                                    <li>Robotik</li>
                                                    <li>Inggris</li>
                                                    <li>Mandarin</li>
                                                    <li>Korean</li>
                                                    <li>Klub lainnya</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Nested Accordion -->
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
