@extends('layouts.base')
@section('title', 'Madrasah tsanawiyah')
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
                            Madrasah Ibtidaiyah
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    <section class="mt-3">
        <div class="container">
            <h1 class="text-center py-2 text-black fw-normal text-pt-sans">SPH Lippo Village</h1>
            <h2 class="text-center mb-5 py-2 text-black fw-normal text-pt-sans">Tiga Dekade Pendidikan IB yang Visioner</h2>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                    <img class="img-fluid rounded"src="https://sph.edu/wp-content/uploads/2022/02/header-sph-ourSchools-sentulCity-v1.jpg"
                        alt="">
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <p>
                        Selamat datang di SPH Lippo Village,
                        <a href="https://sph.edu/id/halaman/">sekolah Kristen Internasional di Indonesia</a>
                        dengan pengalaman lebih dari tiga dekade di bidang pendidikan holistik!
                    </p>
                    <br>
                    <p>
                        Berlokasi di Lippo Village, Tangerang, SPH LV berada di area seluas 10 hektar dan dilengkapi
                        dengan fasilitas modern yang mendukung kurikulum International Baccalaureate (IB) kami.
                    </p>
                    <br>
                    <p>
                        Sebagai salah satu pionir pendidikan Kristen internasional di Indonesia, kami memiliki reputasi
                        unggul dalam bidang akademik dan telah memberikan dampak positif bagi masyarakat. Lebih dari sekedar
                        sekolah, kami telah mentransformasi kehidupan ribuan siswa melalui pendidikan holistik.
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
                            alt="">Lippo Village
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
                            Sekolah Kristen internasional dengan <strong>warisan keunggulan dan inovasi pendidikan selama
                                lebih dari 30 tahun</strong></p>
                    </div>
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <p class="mb-0"><strong>Tim </strong> <em> Learning Support</em> <strong>yang inklusif
                            </strong>
                            menawarkan dukungan akademis dan sosio-emosional yang dirancang secara personal untuk
                            menyesuaikan kebutuhan setiap siswa, dan juga program bimbingan pre-universitas yang
                            komprehensif</p>
                    </div>
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <p class="mb-0"><em><strong>Center of Excellence in Applied Science</strong></em>
                            yang didedikasikan untuk mengembangkan potensi siswa kami</p>
                    </div>
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <p class="mb-0">Tim pendidik yang merupakan pemimpin dan pionir dalam pendidikan Kristen
                            dengan <a href="https://sph.edu/id/pembelajaran/program/international-baccalaureate/">kurikulum
                                IB di Indonesia</a> yang berkomitmen untuk memberikan <strong>pendidikan IB yang
                                visioner</strong>
                        </p>
                    </div>
                    <div class="mb-4 d-flex align-items-start gap-2">
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
                    <p class="mb-2">International Baccalaureate</p>
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="16"
                            alt="">
                        <span class="text-danger">Taman Kanak-Kanak</span><span> (Pra-Taman Kanak Kanak – K3)</span>
                    </div>
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="16"
                            alt="">
                        <span class="text-danger">Sekolah Dasar</span><span>(Kelas 1 – 6)</span>
                    </div>
                    <div class="mb-4 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="16"
                            alt="">
                        <span class="text-danger">Sekolah Menengah Pertama & Atas </span><span>(Kelas 7 – 12)</span>
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
        </div>
    </section>
    {{-- Komunitas Section --}}
    <section class="mt-5">
        <div class="container">
            <div class="row py-3 mb-5">
                <div class="col-6 mx-auto">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="15" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Lippo Village
                    </h5>
                    <h1 class="fw-normal p-0 m-0 mb-3 text-black text-pt-sans">Komunitas Dimana <span
                            class="text-primary text-pt-sans">Setiap Orang
                            Berkembang</span></h1>
                    <p style="line-height: 1.9 !important;">
                        Kampus Lippo Village didirikan di atas sejarah panjang selama 30 tahun. Sebagai kampus yang
                        didirikan pertama kali, SPH Lippo Village memiliki begitu banyak tradisi yang menjadikannya begitu
                        spesial. Komunitas kami yang erat juga menjadi salah satu ciri khas dan keunikan kami serta menjadi
                        hal yang paling dirindukan oleh setiap siswa, alumni, guru dan staf.
                    </p>
                    <br>
                    <p style="line-height: 1.9 !important;">
                        Komunitas kami – murid, orangtua, guru, dan staf – yang inklusif dan suportif adalah inti yang tidak
                        akan tergantikan dari sekolah kami. Di kampus kami, budaya saling melayani tumbuh dan tercermin
                        dalam keseluruhan komunitas sekolah, mulai dari klub siswa, hingga Parent Advisory Group (PAG). Kami
                        berusaha melayani seluruh anggota komunitas kami dan memastikan setiap individu didengar dan
                        dihargai.
                        keras untuk memastikan bahwa fasilitas kami modern, nyaman, dan mendukung pembelajaran.
                    </p>
                    <br>
                    <p style="line-height: 1.9 !important;">
                        Komitmen untuk menciptakan lingkungan belajar yang inklusif, suportif, kolaboratif, dan yang terus
                        bertumbuh menjadikan SPH Lippo Village tempat terbaik bagi anak Anda untuk belajar dan berkembang.
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
    {{-- FAQ Section --}}
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
                            Apa yang membedakan SPH Lippo Village dengan sekolah internasional lainnya?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Sebagai kampus pertama dari kelima kampus SPH, kampus Lippo Village kami menjadi salah satu
                            penggerak pendidikan Kristen bertaraf internasional pertama. SPH LV adalah kampus SPH terbesar.
                            Guru kami mendedikasikan waktu dan tenaga mereka untuk membimbing setiap siswa untuk memiliki
                            motivasi dan tujuan belajar. Selama 3 dekade, SPH LV telah menawarkan kurikulum, IB lengkap
                            (PYP, MYP, dan DP) dari K1 hingga Kelas 12 dan telah menjadi salah satu sekolah IB pertama di
                            Indonesia.
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
                                <span>Pre-Kindy: Program Berbasis Bermain (Play-based)</span>
                            </div>
                            <div class="d-flex align-items-start">
                                <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="14"
                                    class="me-2 mt-1">
                                <span>K1 – Kelas 12: International Baccalaureate (IB)</span>
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
                            SPH LV bermitra dengan sejumlah vendor untuk menyediakan berbagai pilihan kuliner bagi siswa.
                            Kami memiliki berbagai pilihan makanan Indonesia, Barat, dan Asia, berbagai makanan ringan,
                            serta minuman. Kami juga memiliki kedai kopi yang baru yang berada di kantin SMA.
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
    {{-- Youtube Carousel --}}
    <section class="mt-3">
        <div class="container">
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
