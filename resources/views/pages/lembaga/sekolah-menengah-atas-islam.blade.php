@extends('layouts.base')
@section('title', 'SMA Islam ')
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
                            SMA Islam
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    <section class="mt-3">
        <div class="container">
            <h1 class="text-center py-2 text-black fw-normal text-pt-sans">SPH Lippo Cikarang</h1>
            <h2 class="text-center mb-5 py-2 text-black fw-normal text-pt-sans">Rumah Kedua Keluarga Anda</h2>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                    <img class="img-fluid rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/header-sph-ourSchools-lippoCikarang-v1.jpg"
                        alt="">
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <p class="mb-2">Sebagai sekolah internasional di Pluit Village, kami menerapkan
                        Pembelajaran Berbasis Bermain (Play-Based Learning) di Taman Kanak-Kanak, dari mulai K1 (3 tahun)
                        hingga K3 (5 tahun). Kelas yang penuh semangat dan antusiasme menghadirkan proses belajar yang
                        menyenangkan dan praktis bagi anak-anak. Melalui pendekatan ini, siswa mampu mengembangkan kemampuan
                        berpikir kritis, pemecahan masalah, kreativitas, dan kolaborasi yang akan bermanfaat sepanjang hidup
                        mereka.
                    </p>
                    <br>
                    <p>
                        Selain itu, untuk kelas 1 SD ke atas, pendekatan Pembelajaran Berbasis Proyek (Project-Based
                        Learning) kami menumbuhkan keterampilan pemecahan masalah dan berpikir kritis siswa dalam
                        menyelesaikan tantangan dunia nyata yang berkaitan dengan kehidupan nyata. Setiap proyek yang
                        dilakukan bertujuan untuk mengembangkan keterampilan praktis seperti kerjasama, menetapkan tujuan,
                        dan mengelola waktu secara efektif – keterampilan yang penting untuk mencapai kesuksesan.</p>
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
                            alt="">Lippo Cikarang
                    </h5>
                </div>
                <!-- Judul dan sub-judul -->
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h1 class="fw-normal p-0 m-0 mb-3 text-black text-pt-sans">Keunggulan <span
                            class="text-primary text-pt-sans">Kami</span></h1>
                    <h5 class="fw-normal">Sekolah kami menghadirkan lingkungan belajar yang mendukung
                        perkembangan
                        siswa secara akademis, sosial, dan spiritual.</h5>
                </div>
                <!-- Konten -->
                <div class="col-md-6 col-12">
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <p class="mb-0"><strong>Komunitas multikultural</strong> yang terdiri dari 11
                            kewarganegaraan yang memberikan pengalaman dan pengetahuan kebudayaan yang kaya akan keragaman
                            bagi siswa/i kami.</p>
                    </div>
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <p class="mb-0"><strong>Pendekatan pembelajaran aktif</strong> yang mendorong
                            keterlibatan aktif siswa dalam pengalaman di dunia nyata untuk mengembangkan pemahaman akan
                            konsep-konsep kompleks.</p>
                    </div>
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <p class="mb-0"><strong>Pengalaman belajar yang disesuaikan</strong> dengan perkembangan
                            setiap siswa, untuk memenuhi kebutuhan mereka yang unik, sekaligus memastikan terjadinya
                            pengalaman belajar yang komprehensif.</p>
                    </div>
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <p class="mb-0"><strong>Komunitas berbasis iman Kristen</strong> yang berdedikasi untuk
                            membentuk individu yang penuh kasih.</p>
                    </div>
                    <div class="mb-4 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <p class="mb-0"><strong>Komunitas siswa, orang tua, dan guru yang terhubung erat</strong>
                            dan saling mendukung.</p>
                    </div>
                    <h6 class="fw-semibold">Program & Jalur Pembelajaran</h6>
                    <p class="mb-2">Cambridge International (untuk TK – kelas 10) & International Baccalaureate
                        (untuk
                        kelas 11 – 12)</p>
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <span class="text-danger">Taman Kanak-Kanak (K1 – K3)</span>
                    </div>
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <span class="text-danger">Sekolah Dasar (Kelas 1 – 6)</span>
                    </div>
                    <div class="mb-4 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <span class="text-danger">Sekolah Menengah Pertama & Atas (Kelas 7 – 12)</span>
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
    {{-- Kampus yang Penuh Energi Section --}}
    <section class="mt-5">
        <div class="container">
            <div class="row py-3 mb-5">
                <div class="col-6 mx-auto">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="15" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Lippo Cikarang
                    </h5>
                    <h1 class="fw-normal p-0 m-0 mb-3 text-black text-pt-sans">Kampus yang <span
                            class="text-primary text-pt-sans">Penuh Energi</span></h1>
                    <p style="line-height: 1.9 !important;">
                        Di SPH Lippo Cikarang, Bekasi tidak ada hari yang tidak menyenangkan! Di kampus kami, kegiatan
                        belajar mengajar dilakukan di lingkungan yang dinamis dan menarik. Kampus kami yang luas dan asri
                        menjadi tempat yang ideal bagi siswa untuk melakukan berbagai aktivitas, baik di dalam maupun di
                        luar ruang kelas. Di kampus kami, siswa didorong untuk belajar hal baru dan terus bertumbuh melalui
                        berbagai aktivitas kelas dan program yang melibatkan kreativitas, ilmu multidisipliner, dan
                        keterampilan berpikir kritis.
                    </p>
                    <p style="line-height: 1.9 !important;">
                        Program kami dirancang untuk menumbuhkan rasa kebersamaan, koneksi dan komunitas yang erat, serta
                        relasi yang suportif antara siswa, guru, dan staf. Mulai dari acara <em>Spirit Week</em> hingga
                        <em>Loving and Caring Week</em>, selalu ada kegiatan yang mewarnai kampus kami!
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
    {{-- Carousel Section --}}
    <section class="mt-3">
        <div class="container">
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
    {{-- Faq Section --}}
    <section id="faq" class="py-5">
        <div class="container">
            <h2 class="text-center mb-2 text-black text-pt-sans">FAQ</h2>
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
                            Apa yang membedakan SPH Lippo Cikarang, Bekasi dengan sekolah internasional lainnya?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            SPH Lippo Cikarang menekankan pendidikan holistik dengan kurikulum internasional, pengajaran
                            berbasis iman,
                            serta komunitas multikultural yang mendukung perkembangan anak secara menyeluruh.
                        </div>
                    </div>
                </div>
                <!-- FAQ 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo">
                            Kurikulum apa yang digunakan SPH Lippo Cikarang?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Kami menggunakan kurikulum International Baccalaureate (IB) yang berfokus pada inquiry-based
                            learning
                            dan mendorong siswa untuk menjadi pembelajar seumur hidup.
                        </div>
                    </div>
                </div>
                <!-- FAQ 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree">
                            Seperti apa alur pembelajaran di SPH Lippo Cikarang?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Proses pembelajaran berfokus pada pemahaman konsep, keterampilan berpikir kritis,
                            dan kolaborasi antar siswa dalam suasana belajar yang aktif dan menyenangkan.
                        </div>
                    </div>
                </div>
                <!-- FAQ 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Kegiatan ekstrakurikuler apa saja yang tersedia di SPH Lippo Cikarang?
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
                                                <li>Sepak bola</li>
                                                <li>Basket</li>
                                                <li>Kerajinan tangan</li>
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
                                                <li>Psikologi</li>
                                                <li>Kedokteran</li>
                                                <li>Komputer</li>
                                                <li>Sepak bola</li>
                                                <li>Panitia buku tahunan</li>
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
