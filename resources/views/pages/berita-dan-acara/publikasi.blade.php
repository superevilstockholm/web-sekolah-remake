@extends('layouts.base')
@section('title', 'Publikasi')
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
                            Publikasi
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Hero Section --}}
    <section class="mt-3 mb-5 faq-section">
        <div class="container">
            <h1 class="faq-title text-center mb-5 py-2 text-black fw-normal">Publikasi</h1>
            <div class="row align-items-center" id="highlight-publication">
                <!-- Konten highlight akan di-inject lewat JS -->
            </div>
        </div>
    </section>
    <script>
        async function fetchLatestPublication() {
            const res = await fetch('/api/master-data/publications?limit=1&page=1');
            const json = await res.json();
            return json.data.data[0]; // ambil publikasi terbaru
        }
        function renderHighlight(pub) {
            const container = document.getElementById("highlight-publication");
            container.innerHTML = `
                <div class="col-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                    <img class="img-fluid rounded w-100"
                        src="${pub.cover_url}"
                        alt="${pub.title}"
                        style="max-height: 400px; object-fit: cover; object-position: center;">
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
                <div class="col-12 col-md-6 col-lg-4">
                    <h4 class="faq-title fw-normal text-black mb-3">${pub.title}</h4>
                    <p class="fw-normal text-black mb-3">The Light Edisi ke-44 2020</p>
                    <a href="${pub.file_path_url}" target="_blank" class="btn btn-sm btn-warning text-white btn-custom px-4 rounded-pill">
                        Baca Sekarang
                    </a>
                </div>
                <div class="col-lg-1 d-none d-lg-block"></div>
            `;
        }
        // Render highlight publikasi terbaru
        fetchLatestPublication().then(pub => {
            if (pub) renderHighlight(pub);
        });
    </script>
    {{-- Publikasi Section --}}
    <section class="mt-3 mb-5 faq-section">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h5 class="text-primary d-flex align-items-center gap-2 mb-3" style="font-size: 0.9rem;">
                        <img height="20" src="https://sph.edu/wp-content/uploads/2021/08/SPH-Rectangle.png"
                            alt="">
                        Publikasi Al-Layyinah
                    </h5>
                    <h2 class="faq-title fw-normal text-black">The <span class="faq-title text-primary">Light</span></h2>
                </div>
            </div>
            <div class="row" id="publication-container"></div>
            <div class="d-flex justify-content-center mt-3 gap-2" id="pagination"></div>
        </div>
    </section>
    <script>
    let currentPage = 1;

    async function fetchPublications(page = 1) {
        const res = await fetch(`/api/master-data/publications?limit=6&page=${page}`);
        const json = await res.json();
        return json.data;
    }

    function renderPublicationCard(pub) {
        const col = document.createElement("div");
        col.className = "col-md-4 col-12 mb-4";
        col.innerHTML = `
            <a href="${pub.file_path_url}" target="_blank" class="text-decoration-none">
                <div class="card h-100 shadow-sm border-0 position-relative rounded overflow-hidden">
                    <div class="ratio ratio-4x3">
                        <img src="${pub.cover_url}" class="w-100 h-100 rounded"
                            style="object-fit: cover; object-position: center;" alt="${pub.title}">
                    </div>
                    <div class="card-overlay"></div>
                    <h4 class="card-title">${pub.title}</h4>
                </div>
            </a>
        `;
        return col;
    }

    async function renderPublications(page = 1) {
        const container = document.getElementById("publication-container");
        const pagination = document.getElementById("pagination");
        container.innerHTML = "";
        pagination.innerHTML = "";

        const data = await fetchPublications(page);
        data.data.forEach(pub => container.appendChild(renderPublicationCard(pub)));

        const totalPages = data.last_page;

        function createButton(label, page, disabled = false, active = false) {
            const btn = document.createElement("button");
            btn.type = "button";
            btn.innerText = label;
            btn.disabled = disabled;
            btn.className = `btn btn-sm ${active ? "btn-primary" : "btn-outline-primary"}`;
            btn.onclick = () => {
                if (!disabled && typeof page === "number") {
                    currentPage = page;
                    renderPublications(currentPage);
                }
            };
            return btn;
        }

        // Smart Pagination Builder
        const buildPagination = () => {
            const pages = [];

            if (totalPages <= 5) {
                for (let i = 1; i <= totalPages; i++) pages.push(i);
            } else if (page <= 2) {
                pages.push(1, 2, 3, '...', totalPages);
            } else if (page >= totalPages - 1) {
                pages.push(1, '...', totalPages - 2, totalPages - 1, totalPages);
            } else if (page === 3) {
                pages.push(1, 2, 3, 4, '...', totalPages);
            } else if (page === totalPages - 2) {
                pages.push(1, '...', totalPages - 3, totalPages - 2, totalPages - 1, totalPages);
            } else {
                pages.push(1, '...', page - 1, page, page + 1, '...', totalPages);
            }

            return pages;
        };

        pagination.appendChild(createButton("← Prev", page - 1, page === 1));

        buildPagination().forEach(p => {
            if (p === '...') {
                const span = document.createElement('span');
                span.className = 'mx-1';
                span.innerText = '...';
                pagination.appendChild(span);
            } else {
                pagination.appendChild(createButton(p, p, false, p === page));
            }
        });

        pagination.appendChild(createButton("Next →", page + 1, page === totalPages));
    }

    // Initial render
    renderPublications(currentPage);
</script>

    <style>
        .card-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            z-index: 1;
        }
        .card-title {
            position: absolute;
            bottom: 0.5rem;
            /* di bawah */
            left: 0.5rem;
            /* di kiri */
            z-index: 2;
            color: #fff;
            font-weight: 600;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
            /* opsional biar lebih jelas */
        }
    </style>
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
