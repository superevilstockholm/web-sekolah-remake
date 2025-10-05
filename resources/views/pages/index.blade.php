@extends('layouts.base')
@section('title', 'Al-Layyinah')
@section('content')
    <!-- Hero Section dengan Carousel -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active position-relative">
                    <img src="{{ asset('images/sph-3.png') }}" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption text-start animate-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-10">
                                    <h2 class="text-white">Melebihi Pendidikan</h2>
                                    <p class="mb-4 text-white" style="font-weight:300;">Melebihi kurikulum melalui model
                                        holistik berbasis iman yang
                                        membimbing pertumbuhan
                                        dan perkembangan setiap anak.</p>
                                    <a href="#" class="btn btn-lg btn-warning rounded-pill text-white">Pelajari Lebih
                                        Lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item position-relative">
                    <img src="{{ asset('images/sph-4.png') }}" class="d-block w-100" alt="Slide 2">
                    <div class="carousel-caption text-start animate-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-10">
                                    <h2 class="text-white">Memberdayakan Siswa</h2>
                                    <p class="mb-4 text-white" style="font-weight:300;">Membantu siswa mencapai potensi
                                        penuh mereka secara akademik, sosial,
                                        dan spiritual.</p>
                                    <a href="#" class="btn btn-lg btn-warning rounded-pill text-white">Pelajari Lebih
                                        Lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item position-relative">
                    <img src="{{ asset('images/sph-5.png') }}" class="d-block w-100" alt="Slide 3">
                    <div class="carousel-caption text-start animate-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-10">
                                    <h2 class="text-white">Pandangan Global</h2>
                                    <p class="mb-4 text-white" style="font-weight:300;">Mempersiapkan siswa menjadi pemimpin
                                        masa depan dengan fondasi moral
                                        yang kuat dan wawasan global.</p>
                                    <a href="#" class="btn btn-lg btn-warning rounded-pill text-white">Pelajari Lebih
                                        Lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tombol Scroll untuk Menjelajahi -->
            <a href="#core-identity" class="scroll-btn ">
                <span class="text-white">Gulir untuk Menjelajahi</span>
                <i class="bi bi-arrow-down text-white"></i>
            </a>
        </div>
    </section>
    <!-- Section 2: Identitas Inti -->
    <section id="core-identity" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt=""> Identitas Inti Kami
                    </h5>
                    <h2 class="title-pt-sans mb-0">
                        <span class="text-primary title-pt-sans">Sekolah Kristen Terdepan</span>
                        <span class="text-black">Internasional <br> di Indonesia</span>
                    </h2>
                </div>
                <div class="col-lg-6">
                    <p class="mb-0">
                        Kami hadir untuk memberkati setiap keluarga yang memilih SPH sebagai rumah kedua mereka dengan
                        pendidikan internasional Kristen yang terpercaya. Lulusan kami dibekali dan diilhami untuk memimpin
                        dan melayani di mana pun Tuhan menempatkan mereka.
                        Pada inti siapa kami, kami dipanggil untuk melayani, dan dengan itu, kami berdedikasi pada
                        pertumbuhan perjalanan iman setiap siswa.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section 3: Angka SPH -->
    <section id="sph-numbers" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="title-pt-sans">
                    <span class="text-primary title-pt-sans">Fakta Singkat</span>
                    <span class="text-black">Tentang SPH</span>
                </h2>
            </div>
            <!-- Baris 1 -->
            <div class="row text-center g-4 gy-5">
                <div class="col-12 col-md-6 col-lg-3">
                    <div>
                        <i class="bi bi-people fs-1 text-primary"></i>
                        <h4 class="mt-3 title-auto-sans text-black">2,400+</h4>
                        <p class="small mb-0" style="color:#3C3E41;">Siswa</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div>
                        <i class="bi bi-mortarboard fs-1 text-primary"></i>
                        <h4 class="mt-3 title-auto-sans text-black">3,000+</h4>
                        <p class="small mb-0" style="color:#3C3E41;">Alumni</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div>
                        <i class="bi bi-star fs-1 text-primary"></i>
                        <h4 class="mt-3 title-auto-sans text-black">30+</h4>
                        <p class="small mb-0" style="color:#3C3E41;">Tahun Keunggulan</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div>
                        <i class="bi bi-globe fs-1 text-primary"></i>
                        <h4 class="mt-3 title-auto-sans text-black">35</h4>
                        <p class="small mb-0" style="color:#3C3E41;">Kebangsaan</p>
                    </div>
                </div>
            </div>
            <!-- Baris 2 -->
            <div class="row text-center g-4 gy-5 justify-content-center mt-5">
                <div class="col-12 col-md-6 col-lg-3">
                    <div>
                        <i class="bi bi-trophy fs-1 text-primary"></i>
                        <h4 class="mt-3 title-auto-sans text-black">1<sup>st</sup></h4>
                        <p class="small mb-0" style="color:#3C3E41;">Sekolah Kristen IB Continuum Pertama di Indonesia</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div>
                        <i class="bi bi-person-badge fs-1 text-primary"></i>
                        <h4 class="mt-3 title-auto-sans text-black">52%</h4>
                        <p class="small mb-0" style="color:#3C3E41;">Guru Ekspatriat</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="our-legacy" class="py-5">
        <div class="container position-relative">
            <div class="row">
                <!-- Kiri: gabungan blok teks -->
                <div class="col-lg-6">
                    <!-- Blok pertama -->
                    <h5 class="text-primary d-flex align-items-center gap-2 rounded-4" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt=""> Warisan Kami
                    </h5>
                    <h2 class="mb-4">
                        <span>Mentransformasi Kehidupan melalui Pendidikan Kristen untuk</span> <br>
                        <span class="text-primary">Lebih dari 30 Tahun</span>
                    </h2>
                    <p>
                        Di Sekolah Pelita Harapan (SPH), kami berkomitmen memberkati setiap keluarga yang memilih SPH
                        sebagai
                        rumah kedua mereka. Misi kami adalah menyediakan pendidikan internasional Kristen yang luar biasa,
                        yang
                        membekali dan menginspirasi siswa untuk memimpin dan melayani dalam setiap aspek kehidupan mereka,
                        di mana pun Tuhan memanggil mereka. Inti dari siapa kami adalah panggilan untuk melayani, dan kami
                        berdedikasi untuk mendukung pertumbuhan iman setiap siswa dalam perjalanan iman mereka.
                    </p>
                    <!-- Spacer biar ada jarak -->
                    <div class="my-4"></div>
                    <!-- Blok kedua -->
                    <h2 class="mb-4">
                        <span>Warisan Keunggulan dalam <br> Pendidikan Internasional</span>
                    </h2>
                    <p>
                        Dengan pengalaman lebih dari 30 tahun, SPH telah memperoleh reputasi sebagai salah satu sekolah
                        internasional terkemuka di Indonesia. Sebagai pelopor pendidikan, SPH menjadi sekolah Kristen
                        internasional
                        pertama di Indonesia yang menawarkan ketiga program International Baccalaureate (IB).
                    </p>
                    <br>
                    <p>
                        Jaringan sekolah kami tersebar di lima lokasi utama di Jakarta dan sekitarnya, memberikan keluarga
                        akses ke pendidikan kelas dunia dalam lingkungan Kristen yang mendukung. Komitmen kami terhadap
                        pengembangan holistik memastikan bahwa siswa diberdayakan secara akademik, spiritual, dan sosial,
                        mempersiapkan mereka untuk sukses di dunia global yang selalu berubah.
                    </p>
                </div>
                <!-- Kanan: gambar sepanjang tinggi dua judul -->
                <div class="col-lg-6 position-relative">
                    <img src="{{ asset('images/sph-1.jpg') }}" alt="Gambar Warisan"
                        class="img-fluid position-absolute top-0 start-0 w-100"
                        style="object-fit: cover; border-radius: 8px;">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container position-relative">
            <div class="row">
                <h2 class="mb-4">
                    <span>Mengadopsi Inovasi Teknologi dan Perspektif Global</span>
                </h2>
                <p>
                    Seiring pendidikan berkembang di abad ke-21, SPH tetap berada di garis depan dengan mengintegrasikan
                    teknologi dan perspektif global ke dalam kelas. Kami telah mengadopsi berbagai alat pembelajaran
                    inovatif,
                    termasuk platform digital mutakhir dan metode pengajaran interaktif, memastikan siswa dibekali
                    keterampilan
                    yang dibutuhkan untuk berkembang di dunia yang didorong oleh teknologi. Siswa kami mendapatkan manfaat
                    dari
                    kurikulum seimbang yang menggabungkan ketelitian akademik tradisional dan kemajuan teknologi terbaru.
                </p>
                <p>
                    Selain itu, SPH menyediakan banyak kesempatan bagi siswa untuk berpartisipasi dalam acara dan kompetisi
                    internasional, memungkinkan mereka memperluas wawasan dan mendapatkan pengalaman global. Pengalaman ini
                    membantu membentuk individu yang sadar budaya, adaptif, dan siap memberikan kontribusi di kancah dunia.
                </p>
            </div>
            <div class="my-4"></div>
            <div class="row">
                <h2 class="mb-4">
                    <span>Komunitas yang Berkomitmen pada Pembelajaran Sepanjang Hayat</span>
                </h2>
                <p>
                    Di SPH, kami percaya bahwa pendidikan lebih dari sekadar pencapaian akademik; pendidikan adalah tentang
                    membentuk hati dan pikiran generasi berikutnya. Kami membangun komunitas pembelajar yang dinamis, di
                    mana
                    siswa, guru, dan orang tua bekerja sama untuk membangun fondasi yang kuat bagi masa depan. Komitmen kami
                    terhadap peningkatan berkelanjutan tercermin dalam kurikulum, kegiatan ekstrakurikuler, dan kemitraan
                    yang
                    kami kembangkan baik secara lokal maupun internasional.
                </p>
                <p>
                    Selama lebih dari tiga dekade, kami tetap setia pada misi kami: memproklamasikan keunggulan Kristus dan
                    terlibat dalam pemulihan segala sesuatu melalui pendidikan holistik. Misi ini membekali kami untuk
                    membina pemimpin berkarakter yang siap membuat perbedaan di dunia. Kami mengundang Anda untuk menjadi
                    bagian
                    dari perjalanan ini di SPH, di mana iman dan pendidikan bersatu untuk menciptakan dampak yang langgeng
                    bagi
                    kehidupan siswa kami dan masyarakat luas.
                </p>
            </div>
        </div>
    </section>
    <!-- Section terakhir: Full Image -->
    <section class="p-0 my-4">
        <div class="container">
            <img src="{{ asset('images/sph-2.png') }}" alt="Full Width Image" class="img-fluid rounded-4 w-100">
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row mb-2">
                <div class="col-auto mx-auto">
                    <ul class="nav nav-tabs flex-nowrap overflow-x-auto overflow-y-hidden border-0" id="campusTabs"
                        role="tablist" style="white-space: nowrap; -webkit-overflow-scrolling: touch;">
                    </ul>
                </div>
            </div>
            <div class="row mb-1">
                <div class="tab-content mt-4" id="campusTabsContent"></div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded-4 shadow px-0"
                        src="https://sph.edu/wp-content/uploads/2023/06/home-long-img02.jpg" alt="">
                </div>
            </div>
            <div class="row align-items-center g-3 g-md-4 mb-4">
                <div class="col-md-6">
                    <img src="https://sph.edu/wp-content/uploads/2021/08/sph-home-img-04.jpg"
                        class="img-fluid w-100 rounded-4"
                        style="max-height: 600px; object-fit: cover; object-position: top;" alt="">
                </div>
                <div class="col-md-6">
                    <div
                        class="d-flex flex-column align-items-md-start align-items-center text-md-start text-center gap-4 px-md-2 px-lg-4">
                        <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                            <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                                alt=""> Kurikulum Kami
                        </h5>
                        <h3 class="d-flex flex-column flex-md-row align-items-center gap-2 fs-3 peta-jalan">
                            <span class="text-primary peta-jalan">Peta Jalan</span>
                            <span class="text-black peta-jalan">Menuju Masa Depan</span>
                        </h3>
                        <p class="pb-0 mb-0" style="font-size: 0.9rem;">
                            Kurikulum kami merupakan peta jalan yang berguna untuk memandu dan membentuk siswa menjadi
                            seorang
                            pembelajar seumur hidup.
                        </p>
                        <p class="pb-0 mb-0" style="font-size: 0.9rem;">
                            Program kami yang terdiri dari jenjang Pendidikan Anak Usia Dini (PAUD) atau Taman Kanak-Kanak,
                            Sekolah Dasar (SD), Sekolah Menengah Pertama (SMP), hingga Sekolah Menengah Atas (SMA) yang
                            disusun
                            dengan strategis dan saksama agar dapat mengembangkan potensi setiap siswa, mendukung, dan
                            memotivasi
                            mereka untuk mencapai keunggulan.
                        </p>
                        <div class="d-flex flex-column flex-md-row align-items-center gap-3">
                            <button class="btn btn-sm btn-warning text-white btn-custom px-4 mt-2">Pelajari Lebih
                                Lanjut</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="parent position-relative w-100 rounded-4 overflow-hidden"
                        style="aspect-ratio:1/1; background:url('https://sph.edu/wp-content/uploads/2023/06/overlay-banner01.jpg') center/cover;">
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="title-box">
                                <h3 class="title">International Baccalaureate</h3>
                                <div class="desc">
                                    <p class="text-white">Sebagian besar sekolah SPH terakreditasi sebagai International
                                        Baccalaureate (IB)
                                        World Schools sejak tahun 1998. Sebagai sekolah Kristen, program IB kami diterapkan
                                        dengan dasar-dasar Alkitabiah dan terus mengalami perkembangan dan penyempurnaan
                                        sebagai upaya untuk melayani siswa secara efektif dan berkelanjutan dalam
                                        pembelajaran mereka.</p>
                                    <button class="btn btn-sm btn-warning text-white btn-custom px-4 mt-2">Pelajari Lebih
                                        Lanjut</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Kanan -->
                <div class="col-md-6">
                    <div class="parent position-relative w-100 rounded-4 overflow-hidden"
                        style="aspect-ratio:1/1; background:url('https://sph.edu/wp-content/uploads/2023/06/overlay-banner02.jpg') center/cover;">
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="title-box">
                                <h3 class="title">Cambridge International</h3>
                                <div class="desc">
                                    <p class="text-white">Tiga dari lima kampus kami menerapkan kurikulum Cambridge
                                        International hingga kelas
                                        10. Kurikulum ini juga diimplementasikan berdasarkan dasar-dasar Alkitabiah, dan
                                        disesuaikan dengan konteks lokal dalam implementasinya. Hal ini menjadikan kurikulum
                                        Cambridge kami fleksibel, menantang, menginspirasi, dan sensitif secara budaya untuk
                                        mengembangkan pemikiran generasi muda.</p>
                                    <button class="btn btn-sm btn-warning text-white btn-custom px-4 mt-1">Pelajari Lebih
                                        Lanjut</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12">
                    <div class="d-flex flex-column align-items-center">
                        <h2 class="text-center pt-sans text-black">Frequently Asked Question<br>Sekolah Pelita Harapan</h2>
                        <h3 class="text-primary text-center d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                            <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                                alt=""> Pertanyaan Yang Sering Diajukan
                        </h3>
                    </div>
                </div>
                <div class="col">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Apa Identitas Utama dari Sekolah Pelita Harapan?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted" style="font-size: 0.9rem;">
                                    <p>Sebagai salah satu grup sekolah Kristen internasional yang terkemuka di Indonesia,
                                        Sekolah Pelita Harapan memiliki misi yang berpusat pada Kristus untuk membekali
                                        anak-anak melalui pendidikan holistik agar dapat berkontribusi dalam karya penebusan
                                        di dunia.</p>
                                    <p>Jadi dengan kata lain, kami menyediakan pendidikan internasional
                                        yang mempersiapkan dan menginspirasi setiap lulusan untuk memimpin dan melayani
                                        dimanapun Tuhan menempatkan mereka. Kami ada untuk memberkati setiap keluarga yang
                                        memilih SPH sebagai “rumah kedua” anak-anak mereka dengan mendukung setiap
                                        perjalanan iman siswa dan siswi secara aktif.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Apa yang Membuat Sekolah Pelita Harapan Berbeda dari Sekolah Lain?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted" style="font-size: 0.9rem;">
                                    <ul>
                                        <li>SPH adalah sekolah Kristen internasional Jakarta yang berfokus pada pendidikan
                                            holistik yang transformasional. Misi kami adalah untuk membawa penebusan yang
                                            memulihkan ke dalam kehidupan setiap siswa dan mendidik mereka untuk menjadi
                                            agen perubahan.</li>
                                        <li>SPH memiliki komunitas yang peduli, suportif, dan hangat. Sekolah kami bermitra
                                            dengan orang tua untuk mendukung setiap program dan individu di dalam sekolah.
                                        </li>
                                        <li>Melalui 275 guru dan lima kampus di sekitar Jabodetabek, kami memiliki tim yang
                                            besar, kuat, dan penuh kreativitas.</li>
                                        <li>Selama 30 tahun lebih, SPH telah menjadi salah satu sekolah internasional
                                            terkemuka dengan pendidikan Kristen yang kuat.</li>
                                        <li>Lingkungan belajar di SPH sangat mendukung pembelajaran siswa dengan berbagai
                                            fasilitas yang lengkap dan modern.</li>
                                        <li>Guru-guru di SPH memprioritaskan baik hubungan relasional maupun akademik.
                                            Mereka peduli pada setiap siswa sebagai individu dan membimbing mereka untuk
                                            menjalani kehidupan dengan lebih baik.</li>
                                        <li>Akreditasi dan otorisasi yang dimiliki oleh SPH sesuai dengan standar
                                            internasional. Kami diakreditasi oleh ACSI (Association of Christian Schools
                                            International) dan WASC (Western Association of Schools and Colleges).</li>
                                        <li>SPH menggunakan kurikulum Cambridge atau kurikulum International Baccalaureate
                                            (IB) mulai dari pendidikan dini saat Taman Kanak-kanak (Kindergarten) hingga
                                            kelas 10. Kurikulum IB juga diterapkan bagi semua siswa SPH di kelas 11 dan 12.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Bagaimana Mendefinisikan Kesuksesan SPH Sebagai Sekolah dengan Pengalaman Tiga Puluh
                                    Tahun?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted" style="font-size: 0.9rem;">
                                    <p>Kami percaya bahwa kesuksesan yang didapatkan telah didemonstrasikan secara efektif
                                        melalui kehidupan ribuan alumni yang tidak hanya melanjutkan studi mereka di
                                        beberapa sekolah terbaik di dunia, tetapi juga telah mendirikan bisnis, meluncurkan
                                        organisasi, dan melayani berbagai tingkat masyarakat di seluruh dunia. Kesuksesan
                                        bagi kami adalah melihat bagaimana alumni kami mencapai keberhasilan sembari tetap
                                        setia sebagai pelayan Kristus yang taat dan menjawab panggilan mereka dimanapun
                                        Tuhan membawa mereka.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Apa Hubungan Anda dengan Sekolah Yayasan Pendidikan Pelita Harapan (YPPH)?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted" style="font-size: 0.9rem;">
                                    <p>Sekolah Pelita Harapan (SPH) adalah salah satu sistem sekolah yang beroperasi di
                                        bawah naungan Yayasan Pendidikan Pelita Harapan (YPPH), sebuah lembaga pendidikan
                                        Kristen yang didirikan pada tahun 1993. YPPH sendiri merupakan organisasi non-profit
                                        yang membangun sekolah dan universitas di seluruh Indonesia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed shadow-none" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq5">
                                    Bagaimana Anda Merekrut Guru di Sekolah Pelita Harapan?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted" style="font-size: 0.9rem;">
                                    <p>Kami merekrut pendidik yang memiliki nilai-nilai dan iman yang sejalan, mencintai
                                        anak-anak, terampil, serta bersemangat untuk menjadi bagian dari perjalanan
                                        pertumbuhan siswa. Guru-guru kami dipastikan bersertifikasi, terlatih, dan fasih
                                        dalam berbahasa Inggris.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-primary overflow-hidden">
            <div class="container py-4">
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row flex-md-row-reverse align-items-center text-white rounded-4 p-4">
                                <div class="col-md-6 text-center mb-3 mb-md-0">
                                    <img src="https://sph.edu/wp-content/uploads/2021/08/sph-Testimonial-6.jpg"
                                        alt="Testimonial" class="img-fluid rounded-4 shadow">
                                </div>
                                <div class="col-md-6">
                                    <h5 class="d-flex align-items-center gap-2 text-white" style="font-size: 0.9rem;">
                                        <img height="20"
                                            src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                                            alt=""> Testimoni
                                    </h5>
                                    <h5 class="fw-bold mb-1 pt-sans text-white">Rachel Ho</h5>
                                    <p class="mb-3 text-white">— SPH LV Angkatan 2009</p>
                                    <p class="text-white">
                                        SPH sangat membantu saya untuk mengajukan pertanyaan-pertanyaan penting yang di masa
                                        lalu guru-guru lain tidak mau menjawab atau terlalu takut saya bertanya.
                                    </p>
                                    <p class="small text-white">
                                        Itu benar-benar membantu saya menjadi orang yang berpikiran terbuka dan berani
                                        menjelajahi banyak hal berbeda dalam hidup saya. Setelah 10 tahun, saya masih sangat
                                        ingat semua guru saya dan saya ingat pelajaran-pelajaran hidup yang mereka ajarkan
                                        kepada saya. Saya ingat semua didikan dan kasih sayang mereka yang mereka berikan
                                        kepada saya dan karena mereka tidak hanya mengajari konten pelajaran, mereka
                                        membantu saya menjadi orang yang lebih holistik. Saya sangat berterima kasih kepada
                                        mereka sampai hari ini.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row flex-md-row-reverse align-items-center text-white rounded-4 p-4">
                                <div class="col-md-6 text-center mb-3 mb-md-0">
                                    <img src="https://sph.edu/wp-content/uploads/2021/08/sph-Testimonial-4.jpg"
                                        alt="Testimonial" class="img-fluid rounded-4 shadow">
                                </div>
                                <div class="col-md-6">
                                    <h5 class="d-flex align-items-center gap-2 text-white" style="font-size: 0.9rem;">
                                        <img height="20"
                                            src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                                            alt=""> Testimoni
                                    </h5>
                                    <h5 class="fw-bold mb-1 pt-sans text-white">Jonathan Lee</h5>
                                    <p class="mb-3 text-white">— SPH LV Angkatan 2012</p>
                                    <p class="text-white">
                                        SPH menjadi bagian tak terpisahkan dari hidup saya.
                                    </p>
                                    <p class="small text-white">
                                        SPH memiliki peran penting dalam membentuk saya sebagai pribadi, filosofi saya,
                                        nilai-nilai saya, dan impian saya. Saya sangat menikmati pengalaman belajar di SPH
                                        karena guru dan staf yang berkualitas, fasilitas sekolah terbaik, dan komunitas yang
                                        dinamis di sekitar tempat belajar saya. Kurikulum IB secara khusus mempersiapkan
                                        saya dengan sangat baik dalam memasuki jenjang universitas. Saya dapat menyelesaikan
                                        gelar sarjana saya di Universitas Indonesia dalam waktu 3,5 tahun, lulus dengan
                                        predikat Cum Laude dan Penghargaan IPK Tertinggi.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row flex-md-row-reverse align-items-center text-white rounded-4 p-4">
                                <div class="col-md-6 text-center mb-3 mb-md-0">
                                    <img src="https://sph.edu/wp-content/uploads/2021/08/sph-Testimonial-3.jpg"
                                        alt="Testimonial" class="img-fluid rounded-4 shadow">
                                </div>
                                <div class="col-md-6">
                                    <h5 class="d-flex align-items-center gap-2 text-white" style="font-size: 0.9rem;">
                                        <img height="20"
                                            src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                                            alt=""> Testimoni
                                    </h5>
                                    <h5 class="fw-bold mb-1 pt-sans text-white">Giovani Prayitno</h5>
                                    <p class="mb-3 text-white">— Angkatan 2009</p>
                                    <p class="text-white">
                                        Saya harus mengatakan bahwa lingkungan pembelajaran di SPH adalah salah satu yang
                                        terbaik.
                                    </p>
                                    <p class="small text-white">
                                        Jika Anda datang dan berkunjung sendiri, Anda tentunya dapat menyaksikan dan
                                        merasakan keasriannya, desain bangunannya dan segala sesuatu yang dibangun untuk
                                        mendukung dan membantu Anda fokus dalam pembelajaran. Hal kedua yang paling yang
                                        berkesan bagi saya adalah guru-guru. Saya menghabiskan hampir setengah kehidupan
                                        saya di sekolah ini dan guru-guru saya memiliki peran yang besar dalam membentuk
                                        siapa saya hari ini, cara berpikir, karakter dan kehidupan spiritual saya.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row flex-md-row-reverse align-items-center text-white rounded-4 p-4">
                                <div class="col-md-6 text-center mb-3 mb-md-0">
                                    <img src="https://sph.edu/wp-content/uploads/2021/08/sph-Testimonial-5.jpg"
                                        alt="Testimonial" class="img-fluid rounded-4 shadow">
                                </div>
                                <div class="col-md-6">
                                    <h5 class="d-flex align-items-center gap-2 text-white" style="font-size: 0.9rem;">
                                        <img height="20"
                                            src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                                            alt=""> Testimoni
                                    </h5>
                                    <h5 class="fw-bold mb-1 pt-sans text-white">Raindy Blessidio Lee</h5>
                                    <p class="mb-3 text-white">— Angkatan 2018</p>
                                    <p class="text-white">
                                        Di SPH, saya mempelajari segala hal secara holistik. Pembelajaran tidak berfokus
                                        hanya pada satu hasil, seperti hanya akademis atau spiritual, tapi kumpulan dari
                                        berbagai hal.
                                    </p>
                                    <p class="small text-white">
                                        Berada di SPH menjadi satu langkah untuk mencapai tujuan hidup saya, yang dalam hal
                                        ini merupakan kumpulan dari berbagai hal seperti pengalaman dengan teman-teman dan
                                        guru-guru saya. Pengalaman ini membantu saya memahami makna kehidupan dan memberi
                                        saya pengalaman yang berguna untuk masa depan di pekerjaan dan keluarga, dan
                                        lainnya.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center justify-content-md-start gap-4 fs-2">
                        <div class="text-light bg-transparent border-0" type="button"
                            data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                            <i class="bi bi-chevron-left text-white"></i>
                        </div>
                        <div class="text-center mt-3 text-light" id="carouselIndicator">
                        </div>
                        <div class="text-light bg-transparent border-0" type="button"
                            data-bs-target="#testimonialCarousel" data-bs-slide="next">
                            <i class="bi bi-chevron-right text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const campuses = [{
                id: "lippo",
                location: "Tangerang",
                name: "Lippo Village",
                description: "Didirikan pada tahun 1993, SPH Lippo Village adalah kampus pertama kami yang menerapkan kurikulum International Baccalaureate (IB) secara lengkap dari Taman Kanak-Kanak hingga Kelas 12. Kampus kami terletak di dalam kompleks Lippo Village di sebelah barat Jakarta, sebuah kampus yang asri dan modern yang berdiri di atas lebih dari 10 hektar lahan, lengkap dengan fasilitas berstandar internasional yang melengkapi kurikulum akademik kami. SPH Lippo Village merupakan salah satu sekolah internasional di Jakarta dengan pendidikan Kristen terbaik.",
                image: "https://sph.edu/wp-content/uploads/2023/06/tabs-img.jpg"
            },
            {
                id: "sentul",
                location: "Sentul",
                name: "Sentul City",
                description: "Dengan adanya asrama siswa Pelita Harapan House (PHH), SPH Sentul City adalah rumah kedua bagi setiap siswa. Dengan kampus yang terbentang di lahan seluas 10 hektar, kampus kami menawarkan fasilitas lengkap dan gaya hidup seimbang bagi siswa, terlebih dengan program International Baccalaureate (IB) kami yang tersedia bagi Taman Kanak-Kanak hingga Kelas 12.",
                image: "https://sph.edu/wp-content/uploads/2023/06/tabs-img-sentul-city.jpg"
            },
            {
                id: "ciarang",
                location: "Cikarang",
                name: "Lippo Cikarang",
                description: "Didirikan pada tahun 1995, SPH Lippo Cikarang adalah rumah kedua bagi keluarga multinasional yang hidup dan bekerja di sekitar kawasan industri Cikarang. Selama lebih dari 20 tahun, kami telah membimbing siswa berbagai usia dengan kombinasi program Cambridge dan International Baccalaureate (IB) yang unik dan model pembelajaran holistik berbasis iman Kristen yang kami terapkan.",
                image: "https://sph.edu/wp-content/uploads/2023/06/tabs-img-lippo-cikarang.jpg"
            },
            {
                id: "kemang",
                location: "Jakarta Selatan",
                name: "Kemang Village",
                description: "SPH Kemang Village adalah komunitas internasional yang beragam dengan relasi yang erat; yang disatukan oleh nilai-nilai Kristiani yang sama. Kampus kami terletak di kawasan perkotaan Jakarta Selatan, dan dilengkapi dengan fasilitas yang lengkap dan modern. Kampus kami menyediakan ruang belajar terbuka yang mendukung pembelajaran siswa. Kami menggunakan kombinasi kurikulum Cambridge dan International Baccalaureate (IB) sebagai sebagai dasar pembelajaran siswa kami.",
                image: "https://sph.edu/wp-content/uploads/2023/06/tabs-img-kemang-village.jpg"
            },
            {
                id: "pluit",
                location: "Jakarta Utara",
                name: "Pluit Village",
                description: "Sebagai tambahan terbaru dalam jaringan kampus SPH, kampus Pluit Village dikenal dengan pendekatan pembelajaran berbasis bermain (Play-based Learning) dan pembelajaran berbasis proyek (Project-based Learning) yang diterapkan melalui kurikulum Cambridge. Pendekatan kami yang dinamis dan autentik dengan model pembelajaran holistik berbasis iman menjadi dasar yang kuat bagi pertumbuhan dan perkembangan siswa.",
                image: "https://sph.edu/wp-content/uploads/2023/06/tabs-img-pluit-village.jpg"
            }
        ];
        const tabList = document.getElementById("campusTabs");
        const tabContent = document.getElementById("campusTabsContent");
        campuses.forEach((campus, index) => {
            tabList.innerHTML += `
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-medium btn-name ${index === 0 ? "active" : ""}"
                            id="${campus.id}-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#${campus.id}"
                            type="button" role="tab">
                        ${campus.name}
                    </button>
                </li>
            `;
            tabContent.innerHTML += `
            <div class="tab-pane fade ${index === 0 ? "show active" : ""}" id="${campus.id}" role="tabpanel">
                <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="d-flex flex-column align-items-md-end align-items-center text-md-end text-center gap-4 px-md-2 px-lg-4">
                        <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png" alt=""> ${campus.location}
                        </h5>
                        <h3 class="d-flex align-items-center gap-2 fs-3 campus-name">
                        <span class="text-primary">${campus.name.split(" ")[0]}</span> ${campus.name.split(" ").slice(1).join(" ")}
                        </h3>
                        <p style="font-size: 0.9rem;">${campus.description}</p>
                        <div class="d-flex flex-column flex-md-row align-items-center gap-3">
                        <button class="btn btn-sm btn-secondary btn-custom d-flex align-items-center gap-1 px-4">
                            <i class="bi bi-headset-vr"></i> Tur Virtual
                        </button>
                        <button class="btn btn-sm btn-warning text-white btn-custom px-4">Pelajari Lebih Lanjut</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="${campus.image}" class="img-fluid rounded-4 px-md-2 px-lg-4" alt="${campus.name}">
                </div>
                </div>
            </div>
            `;
        });
        const campusTabs = document.querySelectorAll('button[data-bs-toggle="tab"]');
        campusTabs.forEach(tab => {
            tab.addEventListener('shown.bs.tab', e => {
                const targetPane = document.querySelector(e.target.getAttribute('data-bs-target'));
                const img = targetPane.querySelector('.tab-image');
                if (img) {
                    img.style.animation = 'none';
                    img.offsetHeight;
                    img.style.animation = null;
                }
            });
        });
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
        .campus-name,
        .campus-name * {
            font-family: 'PT Sans', sans-serif !important;
            color: #000
        }
        .btn-name {
            font-family: 'Roboto', sans-serif !important;
        }
        .peta-jalan {
            font-family: 'PT Sans', sans-serif !important;
        }
        .pt-sans {
            font-family: 'PT Sans', sans-serif !important;
        }
        .tab-pane {
            padding: 20px 0;
        }
        .btn-custom {
            border-radius: 50px;
            padding: 8px 20px;
        }
        .nav-tabs .nav-link {
            border: none !important;
            color: #555;
        }
        .nav-tabs .nav-link.active {
            border: none !important;
            border-bottom: 4px solid var(--bs-primary) !important;
            margin-bottom: -2px;
            background-color: transparent;
            font-weight: 600;
            color: #000;
        }
        .nav-tabs {
            gap: 1rem;
        }
        @media (min-width: 768px) {
            .flex-md-row {
                flex-direction: row !important;
            }
        }
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .tab-pane .tab-image {
            opacity: 0;
        }
        .tab-pane.show.active .tab-image {
            animation: slideUp 0.6s ease forwards;
        }
        .overlay {
            position: absolute;
            left: 0;
            bottom: 0;
            height: auto;
            background: rgba(13, 59, 142, 0.85);
            transition: all 0.6s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        .title-box {
            width: fit-content;
            max-width: 90%;
            padding: 8px 12px;
            color: #fff;
            text-align: center;
            transition: all 0.6s ease;
        }
        .title {
            font-size: 1.6rem;
            margin: 0;
        }
        .desc {
            font-size: 0.9rem;
            opacity: 0;
            max-height: 0;
            overflow: hidden;
            transition: opacity 0.4s ease 0.2s, max-height 0.4s ease 0.2s;
        }
        .parent:hover .overlay {
            width: 100% !important;
            height: 100% !important;
        }
        .parent:hover .title-box {
            text-align: center;
        }
        .parent:hover .desc {
            opacity: 1;
            max-height: 200px;
        }
        .rounded-rt-4 {
            border-top-right-radius: 0.375rem !important;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const parents = document.querySelectorAll(".parent");
            parents.forEach(parent => {
                const overlay = parent.querySelector(".overlay");
                overlay.classList.add("rounded-rt-4");
                const titleBox = parent.querySelector(".title-box");
                function syncSize() {
                    const rect = titleBox.getBoundingClientRect();
                    overlay.style.width = rect.width + "px";
                    overlay.style.height = rect.height + "px";
                }
                syncSize();
                window.addEventListener("resize", syncSize);
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('#testimonialCarousel');
            const indicatorsContainer = document.querySelector('#carouselIndicator');
            const items = carousel.querySelectorAll('.carousel-item');
            items.forEach((item, index) => {
                const span = document.createElement('span');
                span.textContent = ' _ ';
                span.dataset.index = index;
                span.style.cursor = 'pointer';
                span.classList.add('fs-2');
                span.classList.add('text-light');
                span.style.opacity = '0.5';
                indicatorsContainer.appendChild(span);
            });
            function updateIndicator(activeIndex) {
                indicatorsContainer.querySelectorAll('span').forEach((span, i) => {
                    if (i === activeIndex) {
                        span.classList.add('fw-bold');
                        span.style.opacity = '1';
                    } else {
                        span.classList.remove('fw-bold');
                        span.style.opacity = '0.5';
                    }
                });
            }
            updateIndicator(0);
            carousel.addEventListener('slide.bs.carousel', function(e) {
                updateIndicator(e.to);
            });
            indicatorsContainer.querySelectorAll('span').forEach(span => {
                span.addEventListener('click', function() {
                    const index = parseInt(this.dataset.index);
                    const bootstrapCarousel = bootstrap.Carousel.getInstance(carousel);
                    bootstrapCarousel.to(index);
                });
            });
        });
    </script>
    {{-- Parenting Quesstion Component --}}
    <x-sections.parenting-question></x-sections.parenting-question>
    <style>
        /* Default (HP) */
        #sph-numbers i {
            font-size: 3rem;
        }
        #sph-numbers h4 {
            font-size: 1.75rem;
        }
        /* Tablet */
        @media (min-width: 768px) {
            #sph-numbers i {
                font-size: 4rem;
            }
            #sph-numbers h4 {
                font-size: 2rem;
            }
        }
        /* Desktop */
        @media (min-width: 992px) {
            #sph-numbers i {
                font-size: 5rem;
            }
            #sph-numbers h4 {
                font-size: 2.5rem;
            }
        }
        /* Jarak vertikal antar kolom HP */
        @media (max-width: 767px) {
            #sph-numbers .row.gy-5>[class*="col-"] {
                margin-bottom: 1rem;
            }
        }
        #hero {
            position: relative;
            width: 100%;
            overflow: hidden;
            margin-top: 0;
            object-fit: cover;
            background-size: cover;
            /* bikin selalu nutup layar */
        }
        #hero .carousel-caption {
            bottom: 25%;
            /* lebih rendah, beri jarak aman */
            left: 50%;
            transform: translateX(-50%);
            /* center horizontal */
            width: 90%;
            /* agar tidak terlalu melebar */
            text-align: center;
            padding: 0 15px;
        }
        #hero .carousel-caption .btn {
            border-radius: 30px;
            /* tombol bulat */
            font-size: 0.9rem;
            /* teks lebih kecil */
            padding: 0.6rem 1.5rem;
            /* jarak dalam tombol */
        }
        /* Mobile */
        @media (max-width: 767px) {
            #hero .carousel-caption {
                bottom: 25%;
                /* beri jarak lebih ke atas dari tombol scroll */
                padding: 0 10px;
            }
            #hero .carousel-caption h2 {
                font-size: 1.8rem;
            }
            #hero .carousel-caption p {
                font-size: 1rem;
            }
        }
        #hero .carousel-caption h2,
        #hero .carousel-caption p {
            white-space: normal;
            /* wrap teks */
            word-break: break-word;
            /* pecah kata panjang */
        }
        .carousel-inner {
            overflow: visible;
        }
        /* Carousel */
        #hero .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.7);
        }
        #hero .carousel-item {
            height: 650px;
            min-height: 400px;
            /* biar di HP tidak terlalu tipis */
            position: relative;
        }
        @media (max-width: 767px) {
            #hero .carousel-item {
                height: 600px;
                /* lebih pas di HP */
            }
        }
        /* Caption responsif */
        #hero .carousel-caption h2 {
            font-size: 2rem;
            /* default kecil untuk HP */
        }
        #hero .carousel-caption p {
            font-size: 1rem;
        }
        @media (max-width: 767px) {
            #hero .carousel-caption h2 {
                font-size: 1.8rem;
            }
            #hero .carousel-caption p {
                font-size: 1rem;
            }
        }
        @media (min-width: 768px) and (max-width: 991px) {
            #hero .carousel-caption h2 {
                font-size: 2.5rem;
            }
            #hero .carousel-caption p {
                font-size: 1.2rem;
            }
        }
        @media (min-width: 992px) {
            #hero .carousel-caption h2 {
                font-size: 3rem;
            }
            #hero .carousel-caption p {
                font-size: 1.25rem;
            }
        }
        /* Section Legacy: gambar kanan jadi responsif */
        #our-legacy .col-lg-6.position-relative img {
            position: relative !important;
            /* hilangkan absolute di HP */
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 1.5rem;
            /* tambahin gap di HP */
        }
        @media (min-width: 992px) {
            #our-legacy .col-lg-6.position-relative img {
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                object-fit: cover;
                border-radius: 8px;
                margin-top: 0;
                /* hilangin gap di desktop */
            }
        }
        /* Animasi muncul dari bawah */
        .animate-caption {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s ease-in-out;
        }
        .carousel-item.active .animate-caption {
            opacity: 1;
            transform: translateY(0);
        }
        /* Tombol Scroll */
        .scroll-btn {
            position: absolute;
            right: 30px;
            bottom: 30px;
            background: rgba(255, 255, 255, 0.15);
            padding: 12px 18px;
            border-radius: 50px;
            color: #fff;
            font-weight: 600;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }
        .scroll-btn:hover {
            background: rgba(255, 255, 255, 0.35);
            color: #fff;
        }
        .scroll-btn i {
            font-size: 1.2rem;
        }
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap');
        .title-pt-sans {
            font-family: 'PT Sans', sans-serif !important;
        }
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap');
        .title-auto-sans {
            font-family: 'Open Sans', sans-serif !important;
            font-weight: 500 !important;
        }
    </style>
    <script>
        const heroCarousel = document.querySelector('#heroCarousel');
        const carousel = new bootstrap.Carousel(heroCarousel, {
            interval: 1000,
            ride: 'carousel',
            pause: false,
            touch: false,
            wrap: true
        });
        heroCarousel.addEventListener('slide.bs.carousel', function(e) {
            let captions = e.target.querySelectorAll('.animate-caption');
            captions.forEach(caption => {
                caption.style.opacity = "0";
                caption.style.transform = "translateY(40px)";
            });
        });
        heroCarousel.addEventListener('slid.bs.carousel', function(e) {
            let activeCaption = e.target.querySelector('.carousel-item.active .animate-caption');
            if (activeCaption) {
                activeCaption.style.opacity = "1";
                activeCaption.style.transform = "translateY(0)";
            }
        });
    </script>
    <style>
        /* Custom navbar style */
        .navbar-container .nav-link:hover,
        .navbar-container .nav-link:focus {
            color: rgba(255, 255, 255, 1) !important;
        }
        .navbar-container.scrolled .nav-link:hover,
        .navbar-container.scrolled .nav-link:focus {
            color: rgba(0, 0, 0, 1) !important;
        }
    </style>
@endsection
