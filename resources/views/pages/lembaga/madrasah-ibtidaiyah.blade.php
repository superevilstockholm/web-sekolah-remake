@extends('layouts.base')
@section('title', 'Madrasah Ibtidaiyah')
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
            <h1 class="text-center py-2 text-black fw-normal text-pt-sans">SPH Sentul City</h1>
            <h2 class="text-center mb-5 py-2 text-black fw-normal text-pt-sans">Rumah Kedua bagi Pembelajar yang Bertumbuh
            </h2>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                    <img class="img-fluid rounded"src="https://sph.edu/wp-content/uploads/2022/02/header-sph-ourSchools-sentulCity-v1.jpg"
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
                            alt="">Sentul City
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
                        <p class="mb-0">
                            Sekolah dengan pengalaman selama <strong>30 tahun sebagai sekolah Kristen berkurikulum
                                IB</strong></p>
                    </div>
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <p class="mb-0"><strong>Pengalaman asrama internasional yang unik </strong> di Pelita
                            Harapan House (PHH), sebuah rumah kedua bagi siswa Kelas 7-12 dari seluruh dunia</p>
                    </div>
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <p class="mb-0"><strong>Tim </strong> <i>Learning Support</i> <strong>yang
                                inklusif</strong> menawarkan dukungan akademis dan sosio-emosional yang dirancang secara
                            personal untuk menyesuaikan kebutuhan setiap siswa, dan juga program bimbingan pre-universitas
                            yang komprehensif</p>
                    </div>
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <p class="mb-0">Tim pendidik yang merupakan pemimpin dan pionir dalam pendidikan Kristen
                            dengan kurikulum IB di Indonesia yang berkomitmen untuk memberikan <strong> pendidikan IB yang
                                visioner </strong></p>
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
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <span class="text-danger">Taman Kanak-Kanak</span><span> (Pra-Taman Kanak Kanak – K3)</span>
                    </div>
                    <div class="mb-2 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
                            alt="">
                        <span class="text-danger">Sekolah Dasar</span><span>(Kelas 1 – 6)</span>
                    </div>
                    <div class="mb-4 d-flex align-items-start gap-2">
                        <img src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" height="12"
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
    {{-- Rumah Kedua Section --}}
    <section class="mt-5">
        <div class="container">
            <div class="row py-3 mb-5">
                <div class="col-6 mx-auto">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="15" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Sentul City
                    </h5>
                    <h1 class="fw-normal p-0 m-0 mb-3 text-black text-pt-sans">Rumah Kedua <span
                            class="text-primary text-pt-sans">Anak Anda</span></h1>
                    <p style="line-height: 1.9 !important;">
                        Di SPH Sentul City, kami menciptakan lingkungan yang hangat dan ramah sehingga terasa seperti rumah
                        kedua bagi setiap siswa. Kampus kami tidak hanya luas dan indah, tetapi juga merupakan tempat yang
                        sempurna bagi siswa untuk berkembang dan menjalani kehidupan yang aktif dan seimbang. Dengan
                        beragamnya siswa dan tim pengajar kami yang berasal dari seluruh dunia, komunitas kami berkembang
                        sebagai komunitas yang inklusif dan peduli, memungkinkan siswa kami untuk mengembangkan perspektif
                        global yang akan bermanfaat bagi mereka di masa depan.
                    </p>
                    <br>
                    <p style="line-height: 1.9 !important;">
                        Kami memahami bahwa setiap siswa membutuhkan tempat yang aman dan mendukung untuk tinggal, itulah
                        mengapa kami menawarkan asrama siswa yang lengkap dan aman, diawasi oleh orang tua asrama dan
                        pengawas yang peduli dan penuh perhatian. Sebagai salah satu sekolah internasional pertama di Boor,
                        kami percaya bahwa siswa kami layak mendapatkan yang terbaik, itulah mengapa kami telah berusaha
                        keras untuk memastikan bahwa fasilitas kami modern, nyaman, dan mendukung pembelajaran.
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
    {{-- Youtube Section --}}
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
                            Apa yang membedakan SPH Sentul City dengan sekolah internasional lainnya?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            SPH Sentul City merupakan sekolah internasional Kristen pertama di Indonesia yang diotorisasi
                            untuk ketiga program <span>International Baccalaureate (IB).</span> Selain itu, SPH Sentul juga
                            memiliki
                            asrama siswa yang dengan fasilitas lengkap berkualitas tinggi di lanskap hijau seluas 5 ha di
                            perbukitan Sentul, Bogor.
                        </div>
                    </div>
                </div>
                <!-- FAQ 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo">
                            Bagaimana SPH mendukung Anak saya yang kurang lancar berbahasa Inggris?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            SPH Sentul City menyediakan dua program dukungan bahasa Inggris, seperti EAL (Bahasa Inggris
                            sebagai Bahasa Kedua) yang membantu siswa dari berbagai latar belakang bahasa agar dapat
                            berpartisipasi dalam kelas mereka, Kelas Transisi, dan Program Musim Panas tahunan dengan Kelas
                            Bahasa Inggris untuk memberikan dukungan intensif kepada siswa dalam menguasai bahasa Inggris.
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
                            Kantin sekolah kami menyediakan beberapa pilihan makanan, termasuk makanan Cina, Barat,
                            Indonesia, Korea, dan Jepang.
                        </div>
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
