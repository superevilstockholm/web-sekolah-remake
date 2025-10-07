@extends('layouts.dashboard')
@section('title', 'Events - Master Data - Al-Layyinah')
@section('description',
    'Al-layyinah, Dashboard, Master Data, Master Data Al-Layyinah, Auth, Admin, Master Data Admin,
    Authorization, Master Data Page, Master Data Place')
@section('content')
    <div class="container">
        <div class="row mb-3 justify-content-md-between align-items-md-center">
            <div class="col-md-6 col-12">
                <h3 class="page-title mb-2 mb-md-1 fw-semibold">Events Data</h3>
                <ul class="breadcrumb mb-2 mb-md-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Events</li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-3 col-12">
                <div class="d-grid">
                    <button class="btn btn-primary h-100" data-bs-toggle="modal" data-bs-target="#eventsCreateModal">
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
                        <tbody id="events">
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
    <div class="modal fade" id="eventsShowModal" tabindex="-1" aria-labelledby="eventsShowModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="eventsShowModalLabel">
                        <i class="la la-eye me-2"></i>Detail Events
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-0 m-0">
                    <div id="eventsDetailContent">
                        <p class="text-center text-muted mb-0">Memuat data...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="eventsCreateModal" tabindex="-1" aria-labelledby="eventsCreateModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="eventsCreateModalLabel">
                        <i class="la la-plus-circle me-2"></i>Tambah Events
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form id="eventsCreateForm" enctype="multipart/form-data">
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
                                    <option value="acara">Acara</option>
                                    <option value="acara_berita">Acara Berita</option>
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
    <div class="modal fade" id="eventsEditModal" tabindex="-1" aria-labelledby="eventsEditModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="eventsEditModalLabel">
                        <i class="la la-edit me-2"></i>Edit Events
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form id="eventsEditForm" enctype="multipart/form-data">
                    <input type="hidden" id="editId" name="id">
                    <div class="modal-body">
                        <div class="row">
                            <!-- Preview Gambar -->
                            <div class="col-12 mb-3 position-relative" style="height: 250px;"
                                id="editImagePreviewContainer">
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
                                    <option value="acara">Acara</option>
                                    <option value="acara_berita">Acara Berita</option>
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
        const baseUrl = "{{ url('/api/master-data/events') }}";
        let fetchEvents;
        document.addEventListener('DOMContentLoaded', function() {
            const eventsTable = document.getElementById('events');
            const pagination = document.getElementById('pagination');
            const searchButton = document.getElementById('searchButton');
            const searchInput = document.getElementById('searchInput');
            const filterType = document.getElementById('filterType');
            const limitSelect = document.getElementById('limit');
            fetchEvents = async function(page = 1) {
                eventsTable.innerHTML = `<tr><td colspan="7" class="text-center">Loading...</td></tr>`;
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
                    renderEvents(res.data);
                } catch (error) {
                    console.error(error);
                    eventsTable.innerHTML = `
                        <tr><td colspan="7" class="text-center text-danger">Gagal memuat data acara</td></tr>
                    `;
                }
            };
            function renderEvents(data) {
                let events = [];
                let paginationHTML = '';
                let startIndex = 0;
                if (Array.isArray(data)) {
                    events = data;
                    pagination.innerHTML = '';
                } else {
                    events = data.data;
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
                if (events.length === 0) {
                    eventsTable.innerHTML = `
                        <tr><td colspan="7" class="text-center text-muted">Tidak ada data</td></tr>
                    `;
                    return;
                }
                eventsTable.innerHTML = events.map((item, index) => `
                    <tr>
                        <td>${startIndex + index + 1}</td>
                        <td>
                            <img src="${item.image_url}" alt="${item.title}" style="width: 50px; height: 50px; object-fit: cover;">
                        </td>
                        <td>${item.title}</td>
                        <td>${item.user.name}</td>
                        <td>${item.slug}</td>
                        <td>${item.category === 'acara' ? 'Acara' : 'Acara Berita'}</td>
                        <td class="d-flex align-items-center gap-1 justify-content-end">
                            <button class="btn btn-sm btn-outline-success" onclick="showEventsDetail(${item.id})">
                                <i class="la la-eye"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-primary" onclick="showEventsEdit(${item.id})">
                                <i class="la la-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger" onclick="deleteEvents(${item.id})">
                                <i class="la la-trash"></i>
                            </button>
                        </td>
                    </tr>
                `).join('');
                document.querySelectorAll('#pagination a[data-page]').forEach(link => {
                    link.addEventListener('click', e => {
                        e.preventDefault();
                        const page = e.target.getAttribute('data-page');
                        if (page && page !== '#') fetchEvents(page);
                    });
                });
            }
            searchButton.addEventListener('click', () => fetchEvents(1));
            limitSelect.addEventListener('change', () => fetchEvents(1));
            fetchEvents();
        });
        async function showEventsDetail(id) {
            const eventsDetailContent = document.getElementById('eventsDetailContent');
            eventsDetailContent.innerHTML = `<p class="text-center text-muted mb-0">Memuat data...</p>`;
            const modal = new bootstrap.Modal(document.getElementById('eventsShowModal'));
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
                if (!status) throw new Error(message || 'Gagal memuat data acara.');
                const eventsItem = data;
                const formatDate = (dateStr) => {
                    if (!dateStr) return '-';
                    return new Date(dateStr).toLocaleString('id-ID', {
                        dateStyle: 'long',
                        timeStyle: 'short'
                    });
                };
                eventsDetailContent.innerHTML = `
                    <div class="row">
                        <div class="col-12 position-relative mb-2 mb-md-3" style="height: 250px;">
                            <img src="${eventsItem.image_url}"
                                alt="${eventsItem.title}"
                                class="w-100 h-100 object-fit-cover" style="object-position: center;">
                                <div class="position-absolute top-0 start-0 w-100 h-100 z-3">
                                <div class="container h-100 d-flex align-items-end justify-content-start">
                                    <h1 class="px-3 text-primary">${eventsItem.title}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row px-1 py-3 px-md-3">
                            <div class="col-6 mb-2">
                                <strong><i class="la la-key me-1 text-primary"></i>Category:</strong>
                                <p class="text-muted mb-0">${eventsItem.category === 'acara' ? 'Acara' : 'Acara Berita'}</p>
                            </div>
                            <div class="col-6 mb-2">
                                <strong><i class="la la-key me-1 text-primary"></i>Author:</strong>
                                <p class="text-muted mb-0">${eventsItem.user?.name || 'Tidak diketahui'}</p>
                            </div>
                            <div class="col-6 mb-2">
                                <strong><i class="la la-key me-1 text-primary"></i>ID:</strong>
                                <p class="text-muted mb-0">${eventsItem.id}</p>
                            </div>
                            <div class="col-6 mb-2">
                                <strong><i class="la la-link me-1 text-primary"></i>Slug:</strong>
                                <p class="text-muted mb-0">${eventsItem.slug}</p>
                            </div>
                            <div class="col-6 mb-2">
                                <strong><i class="la la-calendar me-1 text-primary"></i>Dibuat:</strong>
                                <p class="text-muted mb-0">${formatDate(eventsItem.created_at)}</p>
                            </div>
                            <div class="col-6 mb-2">
                                <strong><i class="la la-refresh me-1 text-primary"></i>Diperbarui:</strong>
                                <p class="text-muted mb-0">${formatDate(eventsItem.updated_at)}</p>
                            </div>
                            <div class="col-12">
                                <strong><i class="la la-file-alt me-1 text-primary"></i>Konten:</strong>
                                <hr>
                                <div class="mt-1"
                                    style="max-height: 500px; overflow-y: auto;">
                                    ${eventsItem.content ? marked.parse(eventsItem.content) : '<em>Tidak ada konten.</em>'}
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            } catch (error) {
                console.error(error);
                eventsDetailContent.innerHTML = `
                    <div class="alert alert-danger text-center mb-0">
                        <i class="la la-exclamation-circle me-1"></i> Gagal memuat detail acara.
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
                        data.append('directory', 'events'); // contoh: upload ke folder "events"
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
        document.getElementById('eventsCreateForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            if (typeof createEditor !== 'undefined') {
                const content = createEditor.getData().trim();
                if (!content) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Konten kosong',
                        text: 'Silakan isi konten acara!'
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
                if (!res.status) throw new Error(res.message || 'Gagal membuat acara');
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: res.message || 'Events berhasil dibuat'
                });
                setTimeout(() => {
                    bootstrap.Modal.getInstance(document.getElementById('eventsCreateModal')).hide();
                    form.reset();
                    createImagePreview.src = "{{ asset('static/img/no-image-placeholder.svg') }}";
                    if (typeof createEditor !== 'undefined') createEditor.setData('');
                    fetchEvents();
                }, 1200);
            } catch (error) {
                console.error(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: error.response?.data?.message || 'Terjadi kesalahan saat membuat acara.'
                });
            }
        });
        // Reset modal saat ditutup
        const eventsCreateModal = document.getElementById('eventsCreateModal');
        eventsCreateModal.addEventListener('hidden.bs.modal', function() {
            createImagePreview.src = "{{ asset('static/img/no-image-placeholder.svg') }}";
            document.getElementById('eventsCreateForm').reset();
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
        async function showEventsEdit(id) {
            try {
                const response = await axios.get(`${baseUrl}/${id}`, {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': `Bearer ${getAuthToken()}`
                    }
                });
                const res = response.data;
                if (!res.status) throw new Error(res.message || 'Gagal memuat data acara');
                const events = res.data;
                document.getElementById('editId').value = events.id;
                document.getElementById('editTitle').value = events.title;
                document.getElementById('editCategory').value = events.category;
                editImagePreview.src = events.image_url || "{{ asset('static/img/no-image-placeholder.svg') }}";
                // Tunggu editor siap sebelum setData
                const editor = await editEditorPromise;
                editor.setData(events.content || '');
                const modal = new bootstrap.Modal(document.getElementById('eventsEditModal'));
                modal.show();
            } catch (error) {
                console.error(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: error.response?.data?.message || 'Tidak dapat memuat data acara.'
                });
            }
        }
        // Submit edit form
        document.getElementById('eventsEditForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            if (typeof editEditor !== 'undefined') {
                const content = editEditor.getData().trim();
                if (!content) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Konten kosong',
                        text: 'Silakan isi konten acara!'
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
                if (!res.status) throw new Error(res.message || 'Gagal memperbarui acara');
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: res.message || 'Events berhasil diperbarui'
                });
                setTimeout(() => {
                    bootstrap.Modal.getInstance(document.getElementById('eventsEditModal')).hide();
                    form.reset();
                    editImagePreview.src = "{{ asset('static/img/no-image-placeholder.svg') }}";
                    if (typeof editEditor !== 'undefined') editEditor.setData('');
                    fetchEvents();
                }, 1200);
            } catch (error) {
                console.error(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: error.response?.data?.message || 'Terjadi kesalahan saat memperbarui acara.'
                });
            }
        });
        // Reset modal saat ditutup
        document.getElementById('eventsEditModal').addEventListener('hidden.bs.modal', function() {
            editImagePreview.src = "{{ asset('static/img/no-image-placeholder.svg') }}";
            document.getElementById('eventsEditForm').reset();
            if (typeof editEditor !== 'undefined') editEditor.setData('');
        });
        async function deleteEvents(id) {
            Swal.fire({
                title: 'Hapus Events?',
                text: 'Data acara ini akan dihapus secara permanen!',
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
                        if (!res.status) throw new Error(res.message || 'Gagal menghapus acara');
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: res.message || 'Events berhasil dihapus'
                        });
                        setTimeout(() => fetchEvents(), 1000);
                    } catch (error) {
                        console.error(error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal Menghapus',
                            text: error.response?.data?.message ||
                                'Terjadi kesalahan saat menghapus acara.'
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
