@extends('layouts.dashboard')
@section('title', 'News - Master Data - Al-Layyinah')
@section('description',
    'Al-layyinah, Dashboard, Master Data, Master Data Al-Layyinah, Auth, Admin, Master Data Admin,
    Authorization, Master Data Page, Master Data Place')
@section('content')
    <div class="container">
        <div class="row mb-3 justify-content-md-between align-items-md-center">
            <div class="col-md-6 col-12">
                <h3 class="page-title mb-2 mb-md-1 fw-semibold">News Data</h3>
                <ul class="breadcrumb mb-2 mb-md-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">News</li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-3 col-12">
                <div class="d-grid">
                    <button class="btn btn-success h-100" data-bs-toggle="modal" data-bs-target="#newsCreateModal">
                        Create</button>
                </div>
            </div>
        </div>
        <div class="row filter-row">
            <div class="col-sm-6 col-md-5">
                <div class="form-group form-focus">
                    <input class="form-control floating" type="text" id="searchInput">
                    <label class="focus-label">Search</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-5">
                <div class="form-group form-focus select-focus">
                    <select id="filterType" class="select floating">
                        <option value="title">Title</option>
                        <option value="slug">Slug</option>
                        <option value="content">Content</option>
                        <option value="author">Author</option>
                        <option value="category">Category</option>
                    </select>
                    <label class="focus-label">Filter</label>
                </div>
            </div>
            <div class="col-sm-12 col-md-2">
                <div class="d-grid">
                    <button id="searchButton" class="btn btn-success h-100">Search</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-12">
                <div class="form-group form-focus select-focus">
                    <select id="limit" class="select floating">
                        <option value="10">10 items</option>
                        <option value="25">25 items</option>
                        <option value="50">50 items</option>
                        <option value="75">75 items</option>
                        <option value="100">100 items</option>
                        <option value="all">All</option>
                    </select>
                    <label for="limit" class="focus-label">Show</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Slug</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="news">
                            <tr>
                                <td colspan="7" class="text-center">Loading...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav>
                    <ul class="pagination justify-content-center mt-3" id="pagination"></ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="modal fade" id="newsShowModal" tabindex="-1" aria-labelledby="newsShowModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="newsShowModalLabel">
                        <i class="la la-eye me-2"></i>Detail Berita
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="newsDetailContent" class="p-2">
                        <p class="text-center text-muted mb-0">Memuat data...</p>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="la la-times me-1"></i> Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="newsCreateModal" tabindex="-1" aria-labelledby="newsCreateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="newsCreateModalLabel">
                        <i class="la la-plus-circle me-2"></i>Tambah Berita
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form id="newsCreateForm" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="createTitle" class="form-label fw-semibold">Judul</label>
                                <input type="text" class="form-control" id="createTitle" name="title" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="createCategory" class="form-label fw-semibold">Kategori</label>
                                <select class="form-select" id="createCategory" name="category" required>
                                    <option value="berita">Berita</option>
                                    <option value="acara">Acara</option>
                                    <option value="berita_acara">Berita Acara</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="createImage" class="form-label fw-semibold">Gambar</label>
                                <input type="file" class="form-control" id="createImage" name="image"
                                    accept="image/*">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="createContent" class="form-label fw-semibold">Konten</label>
                                <textarea class="form-control" id="createContent" name="content" rows="5" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="la la-times me-1"></i> Batal
                        </button>
                        <button type="submit" class="btn btn-success">
                            <i class="la la-save me-1"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="newsEditModal" tabindex="-1" aria-labelledby="newsEditModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="newsEditModalLabel">
                        <i class="la la-edit me-2"></i>Edit Berita
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form id="newsEditForm" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" id="editNewsId" name="_method" value="PUT">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="editTitle" class="form-label fw-semibold">Judul</label>
                                <input type="text" class="form-control" id="editTitle" name="title" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="editCategory" class="form-label fw-semibold">Kategori</label>
                                <select class="form-select" id="editCategory" name="category" required>
                                    <option value="berita">Berita</option>
                                    <option value="acara">Acara</option>
                                    <option value="berita_acara">Berita Acara</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="editImage" class="form-label fw-semibold">Gambar (Opsional)</label>
                                <input type="file" class="form-control" id="editImage" name="image"
                                    accept="image/*">
                                <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="editContent" class="form-label fw-semibold">Konten</label>
                                <textarea class="form-control" id="editContent" name="content" rows="5" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="la la-times me-1"></i> Batal
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="la la-save me-1"></i> Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const baseUrl = "{{ url('/api/master-data/news') }}";
        let fetchNews;
        document.addEventListener('DOMContentLoaded', function() {
            const newsTable = document.getElementById('news');
            const pagination = document.getElementById('pagination');
            const searchButton = document.getElementById('searchButton');
            const searchInput = document.getElementById('searchInput');
            const filterType = document.getElementById('filterType');
            const limitSelect = document.getElementById('limit');
            fetchNews = async function(page = 1) {
                newsTable.innerHTML = `<tr><td colspan="7" class="text-center">Loading...</td></tr>`;
                try {
                    let params = {
                        page,
                        limit: limitSelect.value,
                    };
                    if (searchInput.value.trim() !== '') {
                        params.query = searchInput.value.trim();
                        params.type = filterType.value;
                    }
                    const response = await axios.get(baseUrl, {
                        params,
                        headers: {
                            'Accept': 'application/json',
                            'Authorization': `Bearer ${getAuthToken()}`
                        }
                    });
                    const res = response.data;
                    console.log(res);
                    renderNews(res.data);
                } catch (error) {
                    console.error(error);
                    newsTable.innerHTML = `
                        <tr><td colspan="7" class="text-center text-danger">Gagal memuat data berita</td></tr>
                    `;
                }
            };

            function renderNews(data) {
                let news = [];
                let paginationHTML = '';
                let startIndex = 0;
                if (Array.isArray(data)) {
                    news = data;
                    pagination.innerHTML = '';
                } else {
                    news = data.data;
                    startIndex = (data.current_page - 1) * data.per_page;
                    paginationHTML = data.links.map(link => {
                        let page = null;
                        if (link.url) {
                            const url = new URL(link.url);
                            page = url.searchParams.get('page');
                        }
                        return `
                            <li class="page-item ${link.active ? 'active' : ''} ${!link.url ? 'disabled' : ''}">
                                <a href="#" class="page-link" data-page="${page || '#'}">${link.label}</a>
                            </li>
                        `;
                    }).join('');
                    pagination.innerHTML = paginationHTML;
                }
                if (news.length === 0) {
                    newsTable.innerHTML = `
                        <tr><td colspan="7" class="text-center text-muted">Tidak ada data</td></tr>
                    `;
                    return;
                }
                newsTable.innerHTML = news.map((item, index) => `
                    <tr>
                        <td>${startIndex + index + 1}</td>
                        <td>
                            <img src="${item.image_url}" alt="${item.title}" style="width: 50px; height: 50px; object-fit: cover;">
                        </td>
                        <td>${item.title}</td>
                        <td>${item.user.name}</td>
                        <td>${item.slug}</td>
                        <td>${item.category}</td>
                        <td class="d-flex align-items-center gap-1 justify-content-end">
                            <button class="btn btn-sm btn-outline-success" onclick="showNewsDetail(${item.id})">
                                <i class="la la-eye"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-primary" onclick="showNewsEdit(${item.id})">
                                <i class="la la-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger" onclick="deleteNews(${item.id})">
                                <i class="la la-trash"></i>
                            </button>
                        </td>
                    </tr>
                `).join('');
                document.querySelectorAll('#pagination a[data-page]').forEach(link => {
                    link.addEventListener('click', e => {
                        e.preventDefault();
                        const page = e.target.getAttribute('data-page');
                        if (page && page !== '#') fetchNews(page);
                    });
                });
            }
            searchButton.addEventListener('click', () => fetchNews(1));
            limitSelect.addEventListener('change', () => fetchNews(1));
            fetchNews();
        });
        async function showNewsDetail(id) {
            const newsDetailContent = document.getElementById('newsDetailContent');
            newsDetailContent.innerHTML = `<p class="text-center text-muted mb-0">Memuat data...</p>`;
            const modal = new bootstrap.Modal(document.getElementById('newsShowModal'));
            modal.show();
            try {
                const response = await axios.get(`${baseUrl}/${id}`, {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': `Bearer ${getAuthToken()}`
                    }
                });
                const {
                    status,
                    data,
                    message
                } = response.data;
                if (!status) throw new Error(message || 'Gagal memuat data berita.');
                const newsItem = data;
                const formatDate = (dateStr) => {
                    if (!dateStr) return '-';
                    return new Date(dateStr).toLocaleString('id-ID', {
                        dateStyle: 'long',
                        timeStyle: 'short'
                    });
                };
                newsDetailContent.innerHTML = `
                    <div class="row">
                        <div class="col-12 mb-3 text-center">
                            <img src="${newsItem.image_url}"
                                alt="${newsItem.title}"
                                class="w-100 h-100 object-fit-cover" style="max-height: 300px; object-position: center;">
                        </div>
                        <div class="col-12 mb-3">
                            <h4 class="fw-bold mb-1 fs-3">${newsItem.title}</h4>
                            <span class="badge bg-primary text-white px-3 py-2 me-1">
                                Category: ${newsItem.category === 'berita' ? 'Berita' : newsItem.category === 'acara' ? 'Acara' : 'Berita Acara'}
                            </span>
                            <span class="badge bg-success text-white px-3 py-2">
                                Author: ${newsItem.user?.name || 'Tidak diketahui'}
                            </span>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong><i class="la la-key me-1 text-success"></i>ID:</strong>
                            <p class="text-muted mb-0">${newsItem.id}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong><i class="la la-link me-1 text-success"></i>Slug:</strong>
                            <p class="text-muted mb-0">${newsItem.slug}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong><i class="la la-calendar me-1 text-success"></i>Dibuat:</strong>
                            <p class="text-muted mb-0">${formatDate(newsItem.created_at)}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong><i class="la la-refresh me-1 text-success"></i>Diperbarui:</strong>
                            <p class="text-muted mb-0">${formatDate(newsItem.updated_at)}</p>
                        </div>
                        <div class="col-12 mt-3">
                            <strong><i class="la la-file-alt me-1 text-success"></i>Konten:</strong>
                            <div class="border p-3 rounded text-muted mt-1 shadow-sm"
                                style="max-height: 300px; overflow-y: auto; background-color: #f9fafb;">
                                ${newsItem.content || '<em>Tidak ada konten.</em>'}
                            </div>
                        </div>
                    </div>
                `;
            } catch (error) {
                console.error(error);
                newsDetailContent.innerHTML = `
                    <div class="alert alert-danger text-center mb-0">
                        <i class="la la-exclamation-circle me-1"></i> Gagal memuat detail berita.
                    </div>
                `;
            }
        }
        document.getElementById('newsCreateForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);
            try {
                const response = await axios.post(`${baseUrl}`, formData, {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': `Bearer ${getAuthToken()}`,
                        'Content-Type': 'multipart/form-data'
                    }
                });
                const res = response.data;
                if (!res.status) throw new Error(res.message || 'Gagal membuat berita');
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: res.message || 'Berita berhasil dibuat'
                });
                setTimeout(() => {
                    bootstrap.Modal.getInstance(document.getElementById('newsCreateModal')).hide();
                    form.reset();
                    fetchNews();
                }, 1200);
            } catch (error) {
                console.error(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: error.response?.data?.message || 'Terjadi kesalahan saat membuat berita.'
                });
            }
        });
        async function showNewsEdit(id) {
            const modal = new bootstrap.Modal(document.getElementById('newsEditModal'));
            document.getElementById('newsEditForm').reset();
            document.getElementById('editNewsId').value = id;
            modal.show();
            try {
                const response = await axios.get(`${baseUrl}/${id}`, {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': `Bearer ${getAuthToken()}`
                    }
                });
                const {
                    status,
                    data,
                    message
                } = response.data;
                if (!status) throw new Error(message || 'Gagal mengambil data berita');
                document.getElementById('editTitle').value = data.title || '';
                document.getElementById('editCategory').value = data.category || 'berita';
                document.getElementById('editContent').value = data.content || '';
            } catch (error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: error.response?.error || error.response?.data?.message ||
                        'Gagal mengambil data berita'
                });
            }
        }
        document.getElementById('newsEditForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const form = e.target;
            const id = document.getElementById('editNewsId').value;
            const formData = new FormData(form);
            if (formData.get('image').size === 0) {
                formData.delete('image');
            }
            try {
                const response = await axios.post(`${baseUrl}/${id}`, formData, {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': `Bearer ${getAuthToken()}`,
                        'Content-Type': 'multipart/form-data'
                    }
                });
                const res = response.data;
                if (!res.status) throw new Error(res.message || 'Gagal memperbarui data berita');
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: res.message || 'Data berita berhasil diperbarui'
                });
                setTimeout(() => {
                    bootstrap.Modal.getInstance(document.getElementById('newsEditModal')).hide();
                    fetchNews();
                }, 1200);
            } catch (error) {
                console.error(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: error.response?.error || error.response?.data?.message ||
                        'Gagal memperbarui data berita'
                });
            }
        });
        async function deleteNews(id) {
            Swal.fire({
                title: 'Hapus Berita?',
                text: 'Data berita ini akan dihapus secara permanen!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then(async (result) => {
                if (result.isConfirmed) {
                    try {
                        const response = await axios.delete(`${baseUrl}/${id}`, {
                            headers: {
                                'Accept': 'application/json',
                                'Authorization': `Bearer ${getAuthToken()}`
                            }
                        });
                        const res = response.data;
                        if (!res.status) throw new Error(res.message || 'Gagal menghapus berita');
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: res.message || 'Berita berhasil dihapus'
                        });
                        setTimeout(() => fetchNews(), 1000);
                    } catch (error) {
                        console.error(error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal Menghapus',
                            text: error.response?.data?.message ||
                                'Terjadi kesalahan saat menghapus berita.'
                        });
                    }
                }
            });
        }
    </script>
@endsection
