@extends('layouts.base')
@section('title', 'Ekstrakurikuler')
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
                            Ekstrakurikuler
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    <section class="mt-3 mb-5 faq-section">
        <div class="container">
            <h1 class="faq-title text-center mb-5 py-2 fw-normal" style="color: black;">Ekstrakurikuler Di Sekolah
                Internasional Pelita Harapan</h1>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                    <img class="img-fluid rounded"
                        src="https://sph.edu/wp-content/uploads/2022/04/header-sph-extracurricular-v2.jpg" alt="">
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <p class="mb-4">Kegiatan ekstrakurikuler SPH mencakup pilihan program yang beragam dan pengalaman
                        pembelajaran yang melengkapi pembelajaran sehari-hari di sekolah.</p>
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
            </div>
        </div>
    </section>
    {{-- Kegiatan Ekstrakurikuler Section --}}
    <section class="mb-5 faq-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/04/sph-studentlife-extracurricular-top-v2.jpg"
                        alt="">
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Kegiatan Ekstrakurikuler
                    </h5>
                    <h1 class="faq-title fw-normal p-0 m-0 mb-3" style="color: black;">Discovery <span
                            class="text-primary faq-title">Academy</span></h1>
                    <p class="mb-2" style="line-height: 1.9 !important;">Pilihan kegiatan ekstrakurikuler
                        Discovery Academy beragam di setiap kampus. Di SPH, siswa dapat mengikuti kegiatan ekstrakurikuler
                        di sekolah internasional yang memperkaya pengalaman dan kemampuan mereka dengan lebih mendalam,
                        tidak terbatas pada akademik saja.</p>
                    <button class="btn btn-sm btn-warning text-white btn-custom px-4 py-2 mt-2 rounded-pill">Pelajari Lebih
                        Lanjut</button>
                </div>
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <img class="img-fluid w-100 h-100 object-fit-cover rounded" style="max-height: 600px;"
                        src="https://sph.edu/wp-content/uploads/2022/04/sph-studentlife-extracurricular-side-v2.jpg"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- Kepemimpinan Siswa Section --}}
    <section class="mb-5 faq-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 mb-3">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Kepemimpinan Siswa
                    </h5>
                </div>
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h1 class="faq-title fw-normal p-0 m-0 mb-3" style="color: black">Organisasi Kepemimpinan <span
                            class="text-primary">Siswa</span></h1>
                </div>
                <div class="col-md-6 col-12">
                    <p class="mb-3" style="line-height: 1.9 !important;">Siswa SPH senantiasa maju secara
                        akademik, sejalan dengan tumbuhnya rasa tanggung jawab dan kesadaran akan kemampuan mereka untuk
                        mempengaruhi dan menuntun orang lain menuju tujuan yang sama.</p>
                    <p class="mb-3" style="line-height: 1.9 !important;">Salah satu organisasi kepemimpinan siswa
                        yang telah ada sejak awal adalah organisasi siswa (OSIS), yang dijalankan oleh siswa dan untuk
                        siswa.</p>
                    <p style="line-height: 1.9 !important;">Dengan memberikan siswa kesempatan untuk
                        merencanakan dan mengorganisir program yang berdampak dan acara yang berorientasi pada pelayanan,
                        organisasi kepemimpinan siswa meningkatkan keterlibatan dan kesatuan siswa. Sebagai salah satu
                        kegiatan ekstrakurikuler di sekolah internasional, organisasi ini juga menghubungkan para guru
                        dengan siswa, siswa dengan siswa, serta siswa dan guru dengan komunitas yang lebih luas. Sepanjang
                        tahun, anggota OSIS secara rutin mengadakan pertemuan, merencanakan acara, serta menyelesaikan tugas
                        dan memecahkan masalah bersama-sama.</p>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-studentLeadership-top-v1.jpg"
                        alt="">
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <p class="mb-2" style="line-height: 1.9 !important;">OSIS mengikuti struktur organisasi yang
                        terdiri dari seorang ketua dan wakil ketua yang memimpin, memantau dan mengevaluasi beberapa
                        subkomite. OSIS memilih komite berdasarkan minat dan kemampuan kepemimpinan mereka masing-masing.
                    </p>
                    <p style="line-height: 1.9 !important;">Melalui OSIS, siswa mengembangkan
                        keterampilan hidup yang vital seperti kepemimpinan, komunikasi, kolaborasi, pemecahan masalah dan
                        negosiasi. Pengalaman mereka di organisasi ini menjadi dasar yang kuat untuk tujuan karier jangka
                        panjang mereka.</p>
                </div>
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <img class="img-fluid w-100 h-100 object-fit-cover rounded" style="max-height: 600px;"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-studentLeadership-side-v1.jpg"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- Klub dan Komunitas Section --}}
    <section class="mb-5 faq-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-clubsSocieties-top-v1.jpg"
                        alt="">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 mb-3">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Klub & Komunitas
                    </h5>
                </div>
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h1 class="faq-title fw-normal p-0 m-0 mb-3" style="color: black"><span
                            class="faq-title text-primary">Klub </span>Siswa</h1>
                </div>
                <div class="col-md-6 col-12">
                    <p class="mb-3" style="line-height: 1.9 !important;">Kami memastikan siswa kami menggunakan
                        masa muda mereka sebaik-baiknya dengan mengeksplorasi minat mereka di luar kelas dan memaksimalkan
                        potensi mereka melalui klub yang mereka buat dan pimpin sendiri. Klub siswa sebagai salah satu
                        ekskul sekolah internasional di SPH mencakup beragam bidang, termasuk sains, seni, olahraga, debat,
                        pelayanan penjangkauan, dan banyak lagi.</p>
                    <p class="mb-3" style="line-height: 1.9 !important;">Melalui komunitas ini, dengan supervisi
                        guru pembimbing, siswa belajar untuk mengorganisir acara atau kegiatan, berkolaborasi dengan
                        organisasi lainnya, serta mengasah keterampilan dan melatih kemampuan mereka dalam memimpin.</p>
                    <p style="line-height: 1.9 !important;">Selain mendapatkan pengakuan dalam komunitas
                        SPH, beberapa klub memperoleh pengakuan publik melalui pencapaian di kompetisi bergengsi seperti
                        Harvard Model United Nations (HMUN), dan acara publik seperti TEDx Youth @SPH.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Summer Program Section --}}
    <section class="mb-5 faq-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-pelitaHarapanClub-top-v1.jpg"
                        alt="">
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Kamp & Aktivitas Liburan
                    </h5>
                    <h1 class="faq-title fw-normal p-0 m-0 mb-3" style="color: black"><span
                            class="faq-title text-primary">SPH</span> Summer Program</h1>
                    <p class="mb-3" style="line-height: 1.9 !important;">Setiap liburan sekolah, SPH mengadakan
                        Summer Program untuk meningkatkan keterlibatan antara siswa dan keluarga.</p>
                    <p class="mb-3" style="line-height: 1.9 !important;">SPH merancang program musim panas untuk
                        membuat liburan sekolah siswa menyenangkan, tak terlupakan, dan bermakna dengan memfasilitasi siswa
                        untuk mengembangkan keterampilan baru.</p>
                    <p class="mb-3" style="line-height: 1.9 !important;">Program musim panas SPH menawarkan
                        pilihan
                        kegiatan yang ekstensif, termasuk program memasak atau membuat roti atau kue, seni dan kerajinan,
                        sains, olahraga, public speaking, nature tracking, dan kepemimpinan untuk siswa di segala usia.</p>
                    <button class="btn btn-sm py-2 btn-warning text-white btn-custom rounded-pill px-4 mb-3">Pelajari Lebih
                        Lanjut</button>
                    <p class="mb-3" style="line-height: 1.9 !important;">Jika Anda merupakan mahasiswa expat yang
                        tengah berada di tahun ke-tiga atau empat di universitas Kristen pada musim panas tahun 2023, Anda
                        dapat bergabung dalam program magang musim panas di SPH tahun depan!</p>
                    <p class="mb-3" style="line-height: 1.9 !important;">Unduh form pendaftaran dan semua detail
                        yang Anda butuhkan di sini:</p>
                    <button class="btn btn-sm py-2 btn-warning text-white btn-custom rounded-pill px-4">Unduh
                        Sekarang</button>
                </div>
                <div class="col-md-6 col-12">
                    <img class="img-fluid w-100 h-100 object-fit-cover rounded" style="max-height: 700px;"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-summerPrograms-side-v1.jpg"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- Applied Science Academy Section --}}
    <section class="mb-5 faq-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-appliedScienceAcademy-top-v1.jpg"
                        alt="">
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Applied Science Academy (ASA)
                    </h5>
                    <h1 class="faq-title fw-normal p-0 m-0 mb-3" style="color: black"><span
                            class="text-primary faq-title">Pengalaman Penelitian</span> bersama Ahli
                    </h1>
                    <p style="line-height: 1.9 !important;">Applied Science Academy (ASA) adalah
                        bagian dari SPH Center of Excellence, sebuah program pengayaan yang memberikan siswa pembelajaran
                        yang lebih mendalam di bidang yang terspesialisasi. SPH memulai Center of Excellence agar siswa
                        dapat melakukan penelitian termutakhir dengan praktik terbaik, dengan bimbingan mentor ahli di
                        bidang terkait.</p>
                </div>
                <div class="col-md-6 col-12">
                    <img class="img-fluid w-100 h-100 object-fit-cover rounded" style="max-height: 600px;"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-appliedScienceAcademy-side-v1.jpg"
                        alt="">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-studentLife-appliedScienceAcademy-v1.jpg"
                        alt="">
                </div>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-md-6 col-12">
                    <p class="mb-3" style="line-height: 1.9 !important;">Pada tahun 2018, SPH mendirikan Center
                        of Excellence pertama dalam bidang Sains Terapan yang dikenal dengan Applied Science Academy (ASA)
                        yang saat ini dipimpin oleh alumni SPH Dr. Eden Steven, salah satu ilmuwan terkemuka Indonesia.
                        Selain Dr. Eden Steven, para siswa yang bergabung dengan ASA juga memiliki kesempatan untuk
                        dibimbing oleh ilmuwan, dosen dan profesor terkemuka lainnya dari Universitas Pelita Harapan (UPH).
                    </p>
                    <p style="line-height: 1.9 !important;">ASA beranggotakan siswa Kelas 10-12 yang
                        memiliki minat dalam sains. Program ini memberdayakan siswa yang memiliki semangat peneliti dengan
                        memberi mereka kesempatan untuk meneliti dan mendalami berbagai bidang sains. Hingga saat ini, 56
                        siswa ASA telah melakukan penelitian dan proyek berdasarkan minat mereka, dan beberapa di antaranya
                        bahkan melakukan terobosan dengan hasil penelitian mereka yang diterbitkan di jurnal internasional.
                    </p>
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
