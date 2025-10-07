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
                    <button class="btn btn-primary h-100" data-bs-toggle="modal" data-bs-target="#newsCreateModal">
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
                    <button id="searchButton" class="btn btn-primary h-100">Search</button>
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
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="newsShowModalLabel">
                        <i class="la la-eye me-2"></i>Detail Berita
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-0 m-0">
                    <div id="newsDetailContent">
                        <p class="text-center text-muted mb-0">Memuat data...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="newsCreateModal" tabindex="-1" aria-labelledby="newsCreateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="newsCreateModalLabel">
                        <i class="la la-plus-circle me-2"></i>Tambah Berita
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form id="newsCreateForm" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <!-- Preview Gambar dengan overlay icon -->
                            <div class="col-12 mb-3 position-relative" style="height: 250px;"
                                id="createImagePreviewContainer">
                                <img id="createImagePreview" src="{{ asset('static/img/no-image-placeholder.svg') }}"
                                    alt="Preview Image" class="w-100 h-100 object-fit-cover"
                                    style="object-position: center; border-radius: 4px;">
                                <!-- Label sebagai tombol overlay -->
                                <label for="createImage"
                                    class="text-primary position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center fs-3"
                                    style="opacity: 0; cursor: pointer; border-radius: 50%;" id="createImageLabel">
                                    <i class="bi bi-pencil-square"></i>
                                </label>
                                <!-- Input file hidden -->
                                <input type="file" class="d-none" id="createImage" name="image" accept="image/*">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="createTitle" class="form-label fw-semibold">Judul</label>
                                <input type="text" class="form-control" id="createTitle" name="title" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="createCategory" class="form-label fw-semibold">Kategori</label>
                                <select class="form-select" id="createCategory" name="category" required>
                                    <option value="berita">Berita</option>
                                    <option value="acara">Acara</option>
                                    <option value="berita_acara">Berita Acara</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="createContent" class="form-label fw-semibold">Konten</label>
                                <textarea class="form-control" id="createContent" name="content" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="la la-times me-1"></i> Batal
                        </button>
                        <button type="submit" class="btn btn-primary">
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
                    <input type="hidden" id="editId" name="id">
                    <div class="modal-body">
                        <div class="row">
                            <!-- Preview Gambar -->
                            <div class="col-12 mb-3 position-relative" style="height: 250px;" id="editImagePreviewContainer">
                                <img id="editImagePreview" src="{{ asset('static/img/no-image-placeholder.svg') }}"
                                    alt="Preview Image" class="w-100 h-100 object-fit-cover"
                                    style="object-position: center; border-radius: 4px;">
                                <label for="editImage"
                                    class="text-primary position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center fs-3"
                                    style="opacity: 0; cursor: pointer; border-radius: 50%;" id="editImageLabel">
                                    <i class="bi bi-pencil-square"></i>
                                </label>
                                <input type="file" class="d-none" id="editImage" name="image" accept="image/*">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="editTitle" class="form-label fw-semibold">Judul</label>
                                <input type="text" class="form-control" id="editTitle" name="title" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="editCategory" class="form-label fw-semibold">Kategori</label>
                                <select class="form-select" id="editCategory" name="category" required>
                                    <option value="berita">Berita</option>
                                    <option value="acara">Acara</option>
                                    <option value="berita_acara">Berita Acara</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="editContent" class="form-label fw-semibold">Konten</label>
                                <textarea class="form-control" id="editContent" name="content" rows="5"></textarea>
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
                        <td>${item.category === 'berita' ? 'Berita' : item.category === 'acara' ? 'Acara' : 'Berita Acara'}</td>
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
                        <div class="col-12 position-relative" style="height: 250px;">
                            <img src="${newsItem.image_url}"
                                alt="${newsItem.title}"
                                class="w-100 h-100 object-fit-cover" style="object-position: center;">
                                <div class="position-absolute top-0 start-0 w-100 h-100 z-3">
                                <div class="container h-100 d-flex align-items-end justify-content-start">
                                    <h1 class="px-3 text-primary">${newsItem.title}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row px-1 py-3 px-md-3">
                            <div class="col-6 mb-2">
                                <strong><i class="la la-key me-1 text-primary"></i>Category:</strong>
                                <p class="text-muted mb-0">${newsItem.category === 'berita' ? 'Berita' : newsItem.category === 'acara' ? 'Acara' : 'Berita Acara'}</p>
                            </div>
                            <div class="col-6 mb-2">
                                <strong><i class="la la-key me-1 text-primary"></i>Author:</strong>
                                <p class="text-muted mb-0">${newsItem.user?.name || 'Tidak diketahui'}</p>
                            </div>
                            <div class="col-6 mb-2">
                                <strong><i class="la la-key me-1 text-primary"></i>ID:</strong>
                                <p class="text-muted mb-0">${newsItem.id}</p>
                            </div>
                            <div class="col-6 mb-2">
                                <strong><i class="la la-link me-1 text-primary"></i>Slug:</strong>
                                <p class="text-muted mb-0">${newsItem.slug}</p>
                            </div>
                            <div class="col-6 mb-2">
                                <strong><i class="la la-calendar me-1 text-primary"></i>Dibuat:</strong>
                                <p class="text-muted mb-0">${formatDate(newsItem.created_at)}</p>
                            </div>
                            <div class="col-6 mb-2">
                                <strong><i class="la la-refresh me-1 text-primary"></i>Diperbarui:</strong>
                                <p class="text-muted mb-0">${formatDate(newsItem.updated_at)}</p>
                            </div>
                            <div class="col-12">
                                <strong><i class="la la-file-alt me-1 text-primary"></i>Konten:</strong>
                                <hr>
                                <div class="mt-1"
                                    style="max-height: 300px; overflow-y: auto;">
                                    ${newsItem.content ? marked.parse(newsItem.content) : '<em>Tidak ada konten.</em>'}
                                </div>
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
        class MyUploadAdapter {
            constructor(loader) {
                this.loader = loader;
            }
            upload() {
                return this.loader.file
                    .then(file => new Promise((resolve, reject) => {
                        const data = new FormData();
                        data.append('upload', file);
                        data.append('directory', 'news'); // contoh: upload ke folder "news"
                        fetch('/api/upload-image', {
                                method: 'POST',
                                headers: {
                                    'Authorization': `Bearer ${getAuthToken()}`
                                },
                                body: data
                            })
                            .then(response => response.json())
                            .then(res => {
                                if (res.status) {
                                    resolve({
                                        default: res.url // URL gambar untuk editor
                                    });
                                } else {
                                    reject(res.message || 'Upload failed');
                                }
                            })
                            .catch(err => {
                                reject(err.message || 'Upload failed');
                            });
                    }));
            }
            abort() {
                // implementasi jika perlu cancel upload
            }
        }
        // ----------- Create -----------
        let createEditor;
        ClassicEditor
            .create(document.querySelector('#createContent'), {
                simpleUpload: {
                    // URL endpoint Laravel
                    uploadUrl: '/api/upload-image',
                    // Tambahkan header Authorization jika perlu
                    headers: {
                        'Authorization': `Bearer ${getAuthToken()}`,
                        'Accept': 'application/json'
                    }
                }
            })
            .then(editor => {
                createEditor = editor;
                // Override default upload request to include "directory" field
                editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                    return new MyUploadAdapter(loader);
                };
            })
            .catch(error => {
                console.error(error);
            });
        const createImageInput = document.getElementById('createImage');
        const createImagePreview = document.getElementById('createImagePreview');
        createImageInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    createImagePreview.src = e.target.result;
                }
                reader.readAsDataURL(file);
            } else {
                // Reset ke placeholder jika tidak ada file
                createImagePreview.src = "{{ asset('static/img/no-image-placeholder.svg') }}";
            }
        });
        document.getElementById('newsCreateForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            if (typeof createEditor !== 'undefined') {
                const content = createEditor.getData().trim();
                if (!content) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Konten kosong',
                        text: 'Silakan isi konten berita!'
                    });
                    return;
                }
                document.getElementById('createContent').value = content;
            }
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
                    createImagePreview.src = "{{ asset('static/img/no-image-placeholder.svg') }}";
                    if (typeof createEditor !== 'undefined') createEditor.setData('');
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
        // Reset modal saat ditutup
        const newsCreateModal = document.getElementById('newsCreateModal');
        newsCreateModal.addEventListener('hidden.bs.modal', function() {
            createImagePreview.src = "{{ asset('static/img/no-image-placeholder.svg') }}";
            document.getElementById('newsCreateForm').reset();
            if (typeof createEditor !== 'undefined') createEditor.setData('');
        });
        // ----------- Edit -----------
        let editEditor;
        // Init CKEditor untuk edit
        let editEditorPromise = ClassicEditor
            .create(document.querySelector('#editContent'), {
                simpleUpload: {
                    uploadUrl: '/api/upload-image',
                    headers: {
                        'Authorization': `Bearer ${getAuthToken()}`,
                        'Accept': 'application/json'
                    }
                }
            })
            .then(editor => {
                editEditor = editor;
                editor.plugins.get('FileRepository').createUploadAdapter = (loader) => new MyUploadAdapter(loader);
                return editor;
            })
            .catch(error => console.error(error));
        // Preview gambar
        const editImageInput = document.getElementById('editImage');
        const editImagePreview = document.getElementById('editImagePreview');
        editImageInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    editImagePreview.src = e.target.result;
                }
                reader.readAsDataURL(file);
            } else {
                editImagePreview.src = "{{ asset('static/img/no-image-placeholder.svg') }}";
            }
        });
        // Show edit modal & fetch data
        async function showNewsEdit(id) {
            try {
                const response = await axios.get(`${baseUrl}/${id}`, {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': `Bearer ${getAuthToken()}`
                    }
                });
                const res = response.data;
                if (!res.status) throw new Error(res.message || 'Gagal memuat data berita');
                const news = res.data;
                document.getElementById('editId').value = news.id;
                document.getElementById('editTitle').value = news.title;
                document.getElementById('editCategory').value = news.category;
                editImagePreview.src = news.image_url || "{{ asset('static/img/no-image-placeholder.svg') }}";
                // Tunggu editor siap sebelum setData
                const editor = await editEditorPromise;
                editor.setData(news.content || '');
                const modal = new bootstrap.Modal(document.getElementById('newsEditModal'));
                modal.show();
            } catch (error) {
                console.error(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: error.response?.data?.message || 'Tidak dapat memuat data berita.'
                });
            }
        }
        // Submit edit form
        document.getElementById('newsEditForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            if (typeof editEditor !== 'undefined') {
                const content = editEditor.getData().trim();
                if (!content) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Konten kosong',
                        text: 'Silakan isi konten berita!'
                    });
                    return;
                }
                document.getElementById('editContent').value = content;
            }
            const form = e.target;
            const formData = new FormData(form);
            formData.append('_method', 'PUT');
            const id = document.getElementById('editId').value;
            try {
                const response = await axios.post(`${baseUrl}/${id}`, formData, {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': `Bearer ${getAuthToken()}`,
                        'Content-Type': 'multipart/form-data'
                    }
                });
                const res = response.data;
                if (!res.status) throw new Error(res.message || 'Gagal memperbarui berita');
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: res.message || 'Berita berhasil diperbarui'
                });
                setTimeout(() => {
                    bootstrap.Modal.getInstance(document.getElementById('newsEditModal')).hide();
                    form.reset();
                    editImagePreview.src = "{{ asset('static/img/no-image-placeholder.svg') }}";
                    if (typeof editEditor !== 'undefined') editEditor.setData('');
                    fetchNews();
                }, 1200);
            } catch (error) {
                console.error(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: error.response?.data?.message || 'Terjadi kesalahan saat memperbarui berita.'
                });
            }
        });
        // Reset modal saat ditutup
        document.getElementById('newsEditModal').addEventListener('hidden.bs.modal', function() {
            editImagePreview.src = "{{ asset('static/img/no-image-placeholder.svg') }}";
            document.getElementById('newsEditForm').reset();
            if (typeof editEditor !== 'undefined') editEditor.setData('');
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
    <style>
        /* Custom list style for markdown JS */
        ul {
            list-style: disc;
            padding-left: 1.2em;
        }
        #createImageLabel {
            transition: opacity 0.3s ease;
        }
        #createImagePreviewContainer:hover #createImageLabel {
            opacity: 1 !important;
        }
        #createImagePreview {
            transition: filter 0.3s ease;
        }
        #createImagePreviewContainer:hover #createImagePreview {
            filter: brightness(0.8);
        }
    </style>
@endsection
