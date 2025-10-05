@extends('layouts.dashboard')
@section('title', 'Dashboard - Al-Layyinah')
@section('description',
    'Al-layyinah, Dashboard, Dashboard Al-Layyinah, Auth, Admin, Dashboard Admin, Authorization,
    Dashboard Page, Dashboard Place')
@section('content')
    <div class="container py-4">
        {{-- Welcome Section --}}
        <div class="card shadow-sm border-0 mb-4 px-4">
            <div class="card-body d-flex align-items-center justify-content-between flex-wrap">
                <div>
                    <h4 class="fw-semibold mb-1">Selamat datang kembali, <span
                            class="text-primary">{{ auth()->user()->name ?? 'Pengguna' }}</span>! 👋</h4>
                    <p class="text-muted mb-0">
                        Berikut adalah statistik dari Al-Layyinah
                    </p>
                </div>
                <div>
                    <img src="{{ asset('static/img/chat-icon.png') }}" alt="Dashboard" width="80" class="img-fluid">
                </div>
            </div>
        </div>
        {{-- Stats Section --}}
        <div class="row g-3">
            <div class="col-md-3">
                <div class="card border-0 shadow-sm rounded-3 text-center py-4">
                    <i class="la la-user-graduate la-2x text-success mb-2"></i>
                    <h5 class="fw-bold mb-0" id="ppdbCount">0</h5>
                    <small class="text-muted">Pendaftar PPDB</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm rounded-3 text-center py-4">
                    <i class="la la-newspaper la-2x text-warning mb-2"></i>
                    <h5 class="fw-bold mb-0" id="newsCount">0</h5>
                    <small class="text-muted">Berita Aktif</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm rounded-3 text-center py-4">
                    <i class="la la-calendar-check la-2x text-danger mb-2"></i>
                    <h5 class="fw-bold mb-0" id="eventsCount">0</h5>
                    <small class="text-muted">Event Mendatang</small>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm rounded-3 text-center py-4">
                    <i class="la la-pen-nib la-2x text-primary mb-2"></i>
                    <h5 class="fw-bold mb-0" id="blogsCount">0</h5>
                    <small class="text-muted">Jumlah Blogs</small>
                </div>
            </div>
        </div>
        {{-- Profile Info --}}
        <div class="card border-0 shadow-sm rounded-3 mt-4">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Informasi Akun</h5>
                <i class="la la-id-card la-lg"></i>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md-4 fw-semibold">Nama</div>
                    <div class="col-md-8">{{ auth()->user()->name ?? 'Tidak diketahui' }}</div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4 fw-semibold">Email</div>
                    <div class="col-md-8">{{ auth()->user()->email ?? 'Tidak diketahui' }}</div>
                </div>
                <div class="text-end mt-3">
                    <a href="#" class="btn btn-outline-primary btn-sm">
                        <i class="la la-edit me-1"></i> Edit Profil
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', async function() {
            try {
                const response = await axios.get("/api/dashboard/statistics", {
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'Authorization': `Bearer ${getAuthToken()}`
                    }
                });
                const result = response.data;
                if (result.status) {
                    document.getElementById('ppdbCount').textContent = result.data.ppdb ?? 0;
                    document.getElementById('newsCount').textContent = result.data.news ?? 0;
                    document.getElementById('eventsCount').textContent = result.data.events ?? 0;
                    document.getElementById('blogsCount').textContent = result.data.blogs ?? 0;
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: result.message ?? 'Tidak dapat memuat data statistik.'
                    });
                }
            } catch (error) {
                if (error.response.status === 401) {
                    localStorage.removeItem('auth_token');
                    window.location.href = "/login";
                }
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: error.response?.data?.message ??
                        'An error occurred while fetching statistics data',
                })
            }
        })
    </script>
@endsection
