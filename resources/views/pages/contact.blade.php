@extends('layouts.base')
@section('title', 'Hubungi Kami')
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
                        <li class="breadcrumb-item active" aria-current="page">
                            Hubungi Kami
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    <section class="mt-3">
        <div class="container">
            <h1 class="text-center mb-5 py-2 text-black fw-normal text-pt-sans">
                Contact Us
            </h1>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                    <img class="img-fluid rounded" src="https://sph.edu/wp-content/uploads/2021/08/sph-contact-banner.jpg"
                        alt="">
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <h5>Let’s connect!</h5>
                    <p>Do you have anyquestions, or would you like more information about SPH? If you’d like to speak to any
                        of our Admissions Counselors, simply reach us through the available platforms. We’re here to help!
                    </p>
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-auto mx-auto">
                    <ul class="nav nav-tabs flex-nowrap overflow-x-auto overflow-y-hidden border-0" id="campusTabs"
                        role="tablist" style="white-space: nowrap; -webkit-overflow-scrolling: touch;">
                    </ul>
                </div>
            </div>
            <div class="row mb-1">
                <div class="tab-content mt-4" id="shoolsTabsContent"></div>
            </div>
        </div>
    </section>
    <script>
        const schools = [{
                id: "lippo",
                name: "Lippo Village",
                image: "https://sph.edu/wp-content/uploads/2023/06/tabs-img.jpg",
                address: '2500 Bulevar Palem Raya Lippo Village, Tangerang 15810',
                phone1: '+62 21 546 0234',
                phone2: '+62 8821 546 0234',
                email: 'admission-lv@sph.ac.id',
                mapLink: 'https://goo.gl/maps/rpCFhm1yVkxKDP5o8'
            },
            {
                id: "sentul",
                name: "Sentul City",
                image: "https://sph.edu/wp-content/uploads/2023/06/tabs-img-sentul-city.jpg",
                address: 'Jl. Babakan Madang, Sentul City, Bogor 16810',
                phone1: '+62 21 8796 0234',
                phone2: '+62 877 7857 7711',
                email: 'sph-sc@sph.ac.id',
                mapLink: 'https://goo.gl/maps/bKzxQFdWWbdxNwDW7'
            },
            {
                id: "ciarang",
                name: "Lippo Cikarang",
                image: "https://sph.edu/wp-content/uploads/2023/06/tabs-img-lippo-cikarang.jpg",
                address: 'Jl. Dago Permai No.1 Komp. Dago Villas Lippo Cikarang, Bekasi 17550',
                phone1: '+62 21 897 2786 / +62 21 897 2787',
                phone2: '+62 813 1122 4656',
                email: 'admission-lc@sph.ac.id',
                mapLink: 'https://goo.gl/maps/EUdJWZd9fggut2LZ9'
            },
            {
                id: "kemang",
                name: "Kemang Village",
                image: "https://sph.edu/wp-content/uploads/2023/06/tabs-img-kemang-village.jpg",
                address: 'Jl. Pangeran Antasari 36 Jakarta Selatan 12150',
                phone1: '+62 21 290 56 789',
                phone2: '+62 812 8368 2158',
                email: 'admission-kv@sph.ac.id',
                mapLink: 'https://goo.gl/maps/wZfLcczf3Hn4eayD9'
            },
            {
                id: "pluit",
                name: "Pluit Village",
                image: "https://sph.edu/wp-content/uploads/2023/06/tabs-img-pluit-village.jpg",
                address: 'Pluit Village, Jl. Pluit Indah Raya, Jakarta Utara 14450',
                phone1: '+62 21 6667 0315',
                phone2: '+62 817 1779 2557',
                email: 'sph-pv@sph.ac.id',
                mapLink: 'https://goo.gl/maps/8rjjfjVbhoSWc64n9'
            }
        ];
        const tabList = document.getElementById("campusTabs");
        const tabContent = document.getElementById("shoolsTabsContent");
        schools.forEach((campus, index) => {
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
                <div class="tab-pane fade ${index === 0 ? "show active" : ""}" id="${campus.id}" role="tabpanel"
                    style="min-height:500px;">
                    <div class="d-flex flex-column flex-md-row mb-3 mb-md-5"
                        style="height:100%; min-height:350px; gap:0;">
                        <!-- MAP -->
                        <div class="flex-fill ratio-box rounded-start-4" style="position:relative; overflow:hidden;">
                            <iframe class="w-100 h-100 position-absolute top-0 start-0"
                                src="https://www.google.com/maps?q=${encodeURIComponent(campus.address)}&output=embed"
                                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <!-- IMAGE -->
                        <div class="flex-fill ratio-box overflow-hidden rounded-end-4" style="position:relative;">
                            <img src="${campus.image}"
                                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
                                style="transform: scale(1.2);"
                                alt="${campus.name}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <h2>${campus.name}</h2>
                        </div>
                        <div class="col-12 col-md-3 d-flex flex-column">
                            <h4 class="fw-normal mb-4">${campus.address}</h4>
                            <a class="text-decoration-none d-flex align-items-center gap-2" href="mailto:${campus.email}" target="_blank">
                                <i class="bi bi-envelope-fill"></i>
                                ${campus.email}
                            </a>
                        </div>
                        <div class="col-12 col-md-3 d-flex flex-column">
                            <a class="text-decoration-none text-dark d-flex align-items-center gap-2 mb-4" href="tel:${campus.phone1}" target="_blank">
                                <i class="bi bi-telephone-fill"></i>
                                ${campus.phone1}
                            </a>
                            <button class="btn btn-primary rounded-pill d-flex align-items-center justify-content-center gap-2">
                                <i class="bi bi-headset-vr"></i>
                                Tur Virtual
                            </button>
                        </div>
                        <div class="col-12 col-md-3 d-flex flex-column">
                            <a class="text-decoration-none text-dark d-flex align-items-center gap-2 mb-4" href="tel:${campus.phone2}" target="_blank">
                                <i class="bi bi-whatsapp"></i>
                                ${campus.phone2}
                            </a>
                            <a href="{{ route('tentang-kami.visi-dan-misi') }}" class="btn btn-primary rounded-pill">
                                Tentang Sekolah
                            </a>
                        </div>
                    </div>
                </div>
            `;
        });
    </script>
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
        @import url('https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap');

        .text-pt-sans {
            font-family: 'PT Sans', sans-serif !important;
        }

        .navbar-container nav .nav-link,
        .navbar-container nav .navbar-brand {
            color: rgba(0, 0, 0, 0.75) !important;
            /* Teks hitam setelah scroll */
        }

        .navbar-container nav .nav-link:hover {
            color: rgba(0, 0, 0, 1) !important;
        }
    </style>
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
@endsection
