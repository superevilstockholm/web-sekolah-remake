@extends('layouts.base')
@section('title', 'Persyaratan PPDB')
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
                            <a href="/ppdb">PPDB</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Persyaratan
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    {{-- Persyaratan PPDB Section --}}
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="mb-2 text-black text-pt-sans">Persyaratan Pendaftaran</h2>
                <p class="text-black text-pt-sans">Pastikan Anda memenuhi syarat berikut sebelum mendaftar:</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Membayar uang pendaftaran Rp. 350.000.</li>
                        <li class="list-group-item">Fotokopi Akta Kelahiran yang masih berlaku.</li>
                        <li class="list-group-item">Fotokopi Kartu Keluarga (KK).</li>
                        <li class="list-group-item">Ijazah atau SKHUN terakhir bagi yang pindahan/mutasi.</li>
                        <li class="list-group-item">Pas foto terbaru ukuran 3x4 sebanyak 3 lembar.</li>
                        <li class="list-group-item">Formulir pendaftaran yang telah diisi lengkap.</li>
                        <li class="list-group-item">Dokumen pendukung lainnya sesuai ketentuan sekolah.</li>
                    </ul>
                    <p class="mt-3 small">
                        <em>Catatan: Semua dokumen harus dibawa saat verifikasi pendaftaran di sekolah.</em>
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
@endsection
