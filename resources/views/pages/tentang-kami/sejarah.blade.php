@extends('layouts.base')
@section('title', 'Sejarah')
@section('content')
    {{-- Breadcrumb --}}
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent px-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/tentang-kami">Tentang Kami</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sejarah</li>
            </ol>
        </nav>
    </div>
    {{-- Hero Section --}}
    <section class="my-5 faq-section">
        <div class="container">
            <h1 class="faq-title text-center mb-5 py-2 fw-bold text-dark">Sejarah Singkat Al-Layyinah</h1>
            <div class="timeline">
                {{-- 1992 --}}
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h4 class="year">1992</h4>
                        <div class="content-box">
                            <p>Alm. Abah H. Iyang membeli tanah seluas 2,570 M2 dengan harga 50 juta di Kp. Babakan, Desa
                                Bencongan, Curug, Tangerang untuk anak-anaknya yang masih belajar di pondok agar kelak dapat
                                mengabdikan ilmunya.</p>
                            <img src="https://placehold.co/600x400/png?text=Foto+1992" alt="Sejarah 1992">
                        </div>
                    </div>
                </div>
                {{-- 1993 --}}
                <div class="timeline-item">
                    <div class="timeline-content right">
                        <h4 class="year">1993</h4>
                        <div class="content-box">
                            <p>Abi H. Syamsuddin menikah dengan Ummi Hj. Zuhriyah dan mulai mengadakan pengajian anak-anak,
                                remaja, dan ibu-ibu di rumah hingga tahun 1994.</p>
                            <img src="https://placehold.co/600x400/png?text=Foto+1993" alt="Sejarah 1993">
                        </div>
                    </div>
                </div>
                {{-- 1994 --}}
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h4 class="year">1994</h4>
                        <div class="content-box">
                            <p>Santri semakin banyak hingga 80 anak. Karena rumah tidak muat, masyarakat menyerahkan
                                bangunan dua ruang untuk dijadikan tempat belajar. TPA Al-Mukhlisin akhirnya pindah ke Kp.
                                Cijengir akibat gusuran LIPPO KARAWACI.</p>
                            <img src="https://placehold.co/600x400/png?text=Foto+1994" alt="Sejarah 1994">
                        </div>
                    </div>
                </div>
                {{-- 1996 --}}
                <div class="timeline-item">
                    <div class="timeline-content right">
                        <h4 class="year">1996</h4>
                        <div class="content-box">
                            <p>Di lokasi Kp. Cijengir, pengajian berkembang hingga 375 anak. Pada 8 Januari 1996, berdirilah
                                <b>Yayasan Pendidikan Islam Al-Layyinah</b>. Madrasah Ibtidaiyah memiliki 66 murid dan
                                Tsanawiyah 33 murid, sementara TPA tetap berjalan.</p>
                            <img src="https://placehold.co/600x400/png?text=Foto+1996" alt="Sejarah 1996">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Parenting Question Component --}}
    <x-sections.parenting-question></x-sections.parenting-question>
    {{-- Custom Styles --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap');
        .faq-title {
            font-family: 'PT Sans', sans-serif !important;
        }
        /* Timeline base */
        .timeline {
            position: relative;
            padding: 2rem 0;
            margin: 0 auto;
            max-width: 900px;
        }
        .timeline::before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 4px;
            background: #0d6efd;
            transform: translateX(-50%);
        }
        .timeline-item {
            position: relative;
            margin: 2rem 0;
        }
        .timeline-content {
            position: relative;
            width: 50%;
            padding: 1rem 2rem;
        }
        .timeline-content.right {
            left: 50%;
        }
        .timeline-content:not(.right) {
            left: 0;
            text-align: right;
        }
        .timeline-content::before {
            content: "";
            position: absolute;
            top: 20px;
            width: 20px;
            height: 20px;
            background: #0d6efd;
            border-radius: 50%;
            border: 3px solid #fff;
            z-index: 1;
        }
        .timeline-content:not(.right)::before {
            right: -10px;
        }
        .timeline-content.right::before {
            left: -10px;
        }
        .content-box {
            background: transparent;
            border-radius: 10px;
            padding: 1rem;
        }
        .content-box img {
            width: 100%;
            border-radius: 10px;
            margin-top: 1rem;
        }
        .year {
            font-weight: bold;
            color: #0d6efd;
            margin-bottom: 0.5rem;
            padding: 0 1rem 0 1rem
        }
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .timeline::before {
                left: 10px;
            }
            .timeline-content,
            .timeline-content.right {
                width: 100%;
                left: 0;
                text-align: left !important;
                padding-left: 2.5rem;
                margin-bottom: 2rem;
            }
            .timeline-content::before {
                left: 0;
                right: auto;
            }
            .timeline-content.right::before {
                left: 0;
            }
            .content-box {
                padding-left: 0;
            }
            .year {
                padding: 0 !important;
            }
        }
        /* Navbar color adjustments */
        .navbar-container nav .nav-link,
        .navbar-container nav .navbar-brand {
            color: rgba(0, 0, 0, 0.75) !important;
        }
        .navbar-container nav .nav-link:hover {
            color: rgba(0, 0, 0, 1) !important;
        }
    </style>
@endsection
