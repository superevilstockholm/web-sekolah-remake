@extends('layouts.base')
@section('title', 'Berita')
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
                            Berita
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    <section class="mt-3 mb-5 faq-section">
        <div class="container">
            <h1 class="faq-title text-center text-black mb-5 py-2 fw-normal">Berita</h1>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                    <img class="img-fluid rounded"
                        src="https://sph.edu/wp-content/uploads/2025/04/SPH-KV-High-School-Musical-2025-800x628.png"
                        alt="">
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <p class="fw-normal mb-3">Telusuri berita terbaru untuk mendapatkan informasi terbaru tentang
                        perkembangan terkini di lima kampus kami. Anda dapat menemukan semua yang Anda butuhkan di sini,
                        mulai dari acara kampus hingga prestasi internasional.</p>
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
            </div>
        </div>
    </section>
    {{-- Berita List Section --}}
    <section class="mt-3 mb-5 faq-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                    <h5 class="text-primary d-flex align-items-center gap-2 mb-3" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">Berita Al-Layyinah
                    </h5>
                    <h3 class="faq-title text-black">Berita <span class="faq-title text-primary">Terbaru</span></h3>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="row" id="news-container"></div>
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-3 gap-2" id="pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <script>
        let currentPage = 1;
        const limit = 6;
        async function fetchNews(page = 1) {
            try {
                const res = await fetch(`/api/master-data/news?limit=${limit}&page=${page}`);
                const json = await res.json();
                if (json.status) {
                    renderNews(json.data.data);
                    renderPagination(json.data);
                }
            } catch (err) {
                console.error("Gagal fetch news:", err);
            }
        }
        function renderNews(newsData) {
            const container = document.getElementById("news-container");
            container.innerHTML = "";
            newsData.forEach(news => {
                const col = document.createElement("div");
                col.className = "col-md-4 col-12 mb-3";
                col.innerHTML = `
                <a href="/berita/${news.slug}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm border-0 position-relative rounded">
                        <div class="ratio ratio-4x3">
                            <img src="${news.image_url}"
                                class="w-100 h-100 rounded"
                                style="object-fit: cover; object-position: center;"
                                alt="${news.title}">
                        </div>
                        <div class="card-img-overlay d-flex flex-column justify-content-end p-2"
                            style="background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);">
                            <span class="mb-1 text-uppercase text-light" style="font-size:0.7rem;">${news.category}</span>
                            <h6 class="card-title text-white mb-0">${news.title}</h6>
                        </div>
                    </div>
                </a>
            `;
                container.appendChild(col);
            });
        }
        function renderPagination(paginationData) {
    const pagination = document.getElementById("pagination");
    pagination.innerHTML = "";

    const totalPages = paginationData.last_page;
    const currentPage = paginationData.current_page;

    const createBtn = (label, page, active = false, disabled = false) => {
        const btn = document.createElement("button");
        btn.className = `btn btn-sm ${active ? "btn-primary" : "btn-outline-primary"}`;
        btn.innerHTML = label;
        btn.disabled = disabled;
        btn.onclick = () => fetchNews(page);
        pagination.appendChild(btn);
    }

    // Tombol Prev
    createBtn("← Prev", currentPage - 1, false, currentPage === 1);

    let pages = [];

    if (totalPages <= 5) {
        // Tampilkan semua halaman kalau total ≤ 5
        for (let i = 1; i <= totalPages; i++) pages.push(i);
    } else {
        // Smart pagination
        if (currentPage <= 2) {
            // Awal: 1 2 3 ... last
            pages.push(1, 2, 3, '...', totalPages);
        } else if (currentPage >= totalPages - 1) {
            // Akhir: 1 ... total-2 total-1 total
            pages.push(1, '...', totalPages - 2, totalPages - 1, totalPages);
        } else if (currentPage === 3) {
            // Tengah awal: 1 ... 2 3 4 ... last
            pages.push(1, '...', 2, 3, 4, '...', totalPages);
        } else if (currentPage === totalPages - 2) {
            // Tengah akhir: 1 ... total-3 total-2 total-1 total
            pages.push(1, '...', totalPages - 3, totalPages - 2, totalPages - 1, totalPages);
        } else {
            // Tengah umum: 1 ... current-1 current current+1 ... last
            pages.push(1, '...', currentPage - 1, currentPage, currentPage + 1, '...', totalPages);
        }
    }

    // Render halaman
    pages.forEach(num => {
        if (num === '...') {
            const span = document.createElement('span');
            span.className = 'mx-1';
            span.innerText = '...';
            pagination.appendChild(span);
        } else {
            createBtn(num, num, num === currentPage);
        }
    });

    // Tombol Next
    createBtn("Next →", currentPage + 1, false, currentPage === totalPages);
}

        // Render awal
        fetchNews(currentPage);
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
