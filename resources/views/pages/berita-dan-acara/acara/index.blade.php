@extends('layouts.base')
@section('title', 'Acara')
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
                            <a href="/berita-dan-acara">Berita dan Acara</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Acara
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    <section class="mt-3 mb-5 faq-section">
        <div class="container">
            <h1 class="faq-title text-center mb-5 py-2 text-black fw-normal">Acara</h1>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                    <img class="img-fluid rounded"
                        src="https://sph.edu/wp-content/uploads/2022/12/News-Header-Image_SPH-KV-Family-Fun-Run.png"
                        alt="">
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <p class="fw-normal mb-3">Telusuri acara mendatang kami di 5 kampus. Dari Kelas Percobaan hingga Open
                        House, temukan semua informasi terbaru yang Anda butuhkan tentang acara di Al-Layyinah.</p>
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
            </div>
        </div>
    </section>
    {{-- Acara List Section --}}
    <section class="mt-3 mb-5 faq-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                    <h5 class="text-primary d-flex align-items-center gap-2 mb-3" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Acara Al-Layyinah
                    </h5>
                    <h3 class="faq-title text-black"><span class="faq-title text-primary">Acara</span> Masa Lalu</h3>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="row" id="acara-container"></div>
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-3 gap-2" id="pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <script>
        let currentPage = 1;
        const perPage = 6; // jumlah item per page
        async function fetchAcara(page = 1) {
            try {
                const res = await fetch(`/api/master-data/events?limit=${perPage}&page=${page}`);
                const json = await res.json();
                if (!json.status) throw new Error(json.message || 'Error fetching events');
                return json.data; // sesuai response API
            } catch (err) {
                console.error(err);
                return null;
            }
        }
        async function renderAcara(page = 1) {
            const container = document.getElementById("acara-container");
            const pagination = document.getElementById("pagination");
            container.innerHTML = "Loading...";
            pagination.innerHTML = "";
            const data = await fetchAcara(page);
            if (!data) {
                container.innerHTML = "<p class='text-danger'>Gagal memuat acara</p>";
                return;
            }
            container.innerHTML = "";
            data.data.forEach(acara => {
                const col = document.createElement("div");
                col.className = "col-md-4 col-12 mb-3";
                col.innerHTML = `
                    <a href="/berita-dan-acara/acara/${acara.slug}" class="text-decoration-none">
                        <div class="card h-100 shadow-sm border-0 position-relative rounded">
                            <div class="ratio ratio-4x3">
                                <img src="${acara.image_url}"
                                    class="w-100 h-100 rounded"
                                    style="object-fit: cover; object-position: center;"
                                    alt="${acara.title}">
                            </div>
                            <div class="card-img-overlay d-flex flex-column justify-content-end p-2"
                                style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                                <span class="mb-1 text-uppercase text-light" style="font-size:0.7rem;">${acara.category}</span>
                                <h6 class="card-title text-white mb-0">${acara.title}</h6>
                            </div>
                        </div>
                    </a>
                `;
                container.appendChild(col);
            });
            renderPagination(data);
        }
        function renderPagination(paginationData) {
            const pagination = document.getElementById("pagination");
            pagination.innerHTML = "";
            const totalPages = paginationData.last_page;
            let current = paginationData.current_page; // gunakan let, biar bisa update
            const createBtn = (label, page, active = false, disabled = false) => {
                const btn = document.createElement("button");
                btn.className = `btn btn-sm ${active ? "btn-primary" : "btn-outline-primary"}`;
                btn.innerHTML = label;
                btn.disabled = disabled;
                btn.onclick = () => {
                    if (!disabled) {
                        currentPage = page; // update currentPage global
                        renderAcara(page); // panggil renderAcara, bukan fetchNews
                    }
                };
                pagination.appendChild(btn);
            }
            // Tombol Prev
            createBtn("← Prev", current - 1, false, current === 1);
            let pages = [];
            if (totalPages <= 5) {
                for (let i = 1; i <= totalPages; i++) pages.push(i);
            } else {
                if (current <= 2) {
                    pages.push(1, 2, 3, '...', totalPages);
                } else if (current >= totalPages - 1) {
                    pages.push(1, '...', totalPages - 2, totalPages - 1, totalPages);
                } else if (current === 3) {
                    pages.push(1, '...', 2, 3, 4, '...', totalPages);
                } else if (current === totalPages - 2) {
                    pages.push(1, '...', totalPages - 3, totalPages - 2, totalPages - 1, totalPages);
                } else {
                    pages.push(1, '...', current - 1, current, current + 1, '...', totalPages);
                }
            }
            pages.forEach(num => {
                if (num === '...') {
                    const span = document.createElement('span');
                    span.className = 'mx-1';
                    span.innerText = '...';
                    pagination.appendChild(span);
                } else {
                    createBtn(num, num, num === current);
                }
            });
            // Tombol Next
            createBtn("Next →", current + 1, false, current === totalPages);
        }
        // Render awal
        renderAcara(currentPage);
    </script>
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
