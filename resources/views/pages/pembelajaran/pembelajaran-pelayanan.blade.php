@extends('layouts.base')
@section('title', 'Pembelajaran Pelayanan')
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
                            Pembelajaran Pelayanan
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    <section class="mt-3 mb-5">
        <div class="container">
            <h1 class="text-center mb-5 py-2 text-black fw-normal text-pt-sans">Pembelajaran Pelayanan Islami</h1>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                    <img class="img-fluid rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/header-sph-academic-serviceLearning-v1.jpg"
                        alt="">
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <p>Melayani sesama adalah inti dari pendidikan Islami.</p> <br>
                    <p>Siswa Al-Layyinah memiliki banyak kesempatan untuk berkhidmat
                        di lingkungan sekolah, masyarakat sekitar, hingga kegiatan sosial lebih luas. Misi kami adalah
                        memberikan pendidikan holistik yang menumbuhkan kepemimpinan dengan hati yang ikhlas melayani
                        umat dan bangsa.</p>
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
    {{-- Mission Service Learning (MSL) Component --}}
    <section class="mt-3 mb-5">
        <div class="container">
            <div class="row py-3 mb-4">
                <div class="col-12 mb-3">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Program Layanan Umat
                    </h5>
                </div>
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h1 class="fw-normal p-0 m-0 mb-3 text-black text-pt-sans">Belajar dengan <span
                            class="text-primary text-pt-sans">Melayani</span></h1>
                    <h5 class="fw-normal text-black">Program Layanan Umat merupakan bagian penting dalam kurikulum Islami di
                        Al-Layyinah.</h5>
                </div>
                <div class="col-md-6 col-12">
                    <p class="mb-3" style="line-height: 1.9 !important;">Program ini menanamkan sikap peduli,
                        empati, dan tanggung jawab sosial. Siswa didorong untuk berpikir dan bertindak nyata melalui
                        kegiatan amal, bakti sosial, membantu fakir miskin, serta peduli lingkungan.</p>
                    <p style="line-height: 1.9 !important;">Kegiatan meliputi kunjungan ke panti asuhan,
                        membantu anak-anak yatim, kerja bakti di masjid, program kebersihan lingkungan, hingga bakti sosial
                        ke daerah-daerah yang membutuhkan. Semua itu menjadi pengalaman berharga yang membentuk akhlak
                        mulia siswa.</p>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-academic-serviceLearning-top-v1.jpg"
                        alt="">
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <p class="mb-3" style="line-height: 1.9 !important;">Sejak dini, siswa Al-Layyinah
                        diperkenalkan pada kegiatan khidmat sosial, mulai dari anak TK yang diajarkan berbagi makanan,
                        siswa SD yang dilibatkan dalam kegiatan sosial di lingkungan sekolah, hingga siswa SMP dan SMA
                        yang ikut serta dalam program pengabdian masyarakat skala lebih besar.</p>
                    <p style="line-height: 1.9 !important;">Hal ini diintegrasikan ke dalam pembelajaran
                        sehingga anak-anak memahami bahwa ilmu yang dimiliki harus bermanfaat bagi orang lain.</p>
                </div>
                <div class="col-md-6 col-12">
                    <img class="img-fluid w-100 h-100 object-fit-cover rounded" style="max-height: 600px;"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-academic-serviceLearning-side-v1.jpg"
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
    {{-- Mitra Pelayanan --}}
    <section class="mt-3 mb-5">
        <div class="container">
            <div class="row py-3 mb-4">
                <div class="col-12 mb-3">
                    <h5 class="text-primary d-flex align-items-center gap-2" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Mitra Pelayanan
                    </h5>
                </div>
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <h1 class="fw-normal p-0 m-0 mb-3 text-black text-pt-sans">Kolaborasi <span
                            class="text-primary text-pt-sans">Kebaikan</span></h1>
                </div>
                <div class="col-md-6 col-12">
                    <p class="mb-3" style="line-height: 1.9 !important;">Selama bertahun-tahun, Al-Layyinah
                        telah menjalin kerja sama dengan berbagai pihak seperti yayasan yatim piatu, lembaga sosial,
                        komunitas pecinta lingkungan, dan majelis taklim untuk memperluas manfaat bagi masyarakat.</p>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <img class="img-fluid w-100 rounded"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-academic-servicePartner-top-v1.jpg"
                        alt="">
                </div>
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-md-6 col-12 mb-4 mb-md-0">
                    <p class="mb-3" style="line-height: 1.9 !important;">
                        Al-Layyinah bekerja sama dengan berbagai mitra untuk mendukung kegiatan sosial,
                        pendidikan, dan keagamaan. Beberapa di antaranya adalah:
                    </p>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li class="d-flex align-items-center gap-1"><img height="20"
                                src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png" alt="">
                            Panti Asuhan Yatim Piatu
                        </li>
                        <li class="d-flex align-items-center gap-1"><img height="20"
                                src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png" alt="">
                            Yayasan Pendidikan Qur’an
                        </li>
                        <li class="d-flex align-items-center gap-1"><img height="20"
                                src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png" alt="">
                            Komunitas Sosial Peduli Dhuafa
                        </li>
                        <li class="d-flex align-items-center gap-1"><img height="20"
                                src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png" alt="">
                            Program Kebersihan Masjid
                        </li>
                        <li class="d-flex align-items-center gap-1"><img height="20"
                                src="https://sph.edu/wp-content/uploads/2022/02/SPH-Rectangle-black.png" alt="">
                            Komunitas Pecinta Lingkungan
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-12">
                    <img class="img-fluid w-100 h-100 object-fit-cover rounded" style="max-height: 600px;"
                        src="https://sph.edu/wp-content/uploads/2022/02/sph-academic-servicePartner-side-v1.jpg"
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
