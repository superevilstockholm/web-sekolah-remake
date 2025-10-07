@extends('layouts.dashboard')
@section('title', 'Publications - Master Data - Al-Layyinah')
@section('description',
    'Al-layyinah, Dashboard, Master Data, Master Data Al-Layyinah, Auth, Admin, Master Data Admin,
    Authorization, Master Data Page, Master Data Place')
@section('content')
    <div class="container">
        <div class="row mb-3 justify-content-md-between align-items-md-center">
            <div class="col-md-6 col-12">
                <h3 class="page-title mb-2 mb-md-1 fw-semibold">Publications Data</h3>
                <ul class="breadcrumb mb-2 mb-md-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Publications</li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-3 col-12">
                <div class="d-grid">
                    <button class="btn btn-primary h-100" data-bs-toggle="modal" data-bs-target="#publicationsCreateModal">
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
                                <th>Title</th>
                                <th>Cover</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="publications">
                            <tr>
                                <td colspan="5" class="text-center">Loading...</td>
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
    <!-- Modal Show Publication -->
    <div class="modal fade" id="publicationShowModal" tabindex="-1" aria-labelledby="publicationShowModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="publicationShowModalLabel">
                        <i class="la la-publication me-2"></i>Detail Publikasi
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-0 m-0">
                    <div id="publicationDetailContent">
                        <p class="text-center text-muted mb-0">Memuat data...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Create Publication -->
    <div class="modal fade" id="publicationsCreateModal" tabindex="-1" aria-labelledby="publicationsCreateModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="publicationsCreateModalLabel">
                        <i class="la la-plus-circle me-2"></i>Tambah Publikasi
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form id="publicationCreateForm" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <!-- Preview Gambar dengan overlay icon -->
                            <div class="col-12 mb-3 position-relative" style="height: 250px;"
                                id="createImagePreviewContainer">
                                <img id="createImagePreview" src="{{ asset('static/img/no-image-placeholder.svg') }}"
                                    alt="Preview Image" class="w-100 h-100 object-fit-cover"
                                    style="object-position: center; border-radius: 4px;">
                                <label for="createCover"
                                    class="text-primary position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center fs-3"
                                    style="opacity: 0; cursor: pointer; border-radius: 50%;" id="createImageLabel">
                                    <i class="bi bi-pencil-square"></i>
                                </label>
                                <input type="file" class="d-none" id="createCover" name="cover" accept="image/*">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="createTitle" class="form-label fw-semibold">Title</label>
                                <input type="text" class="form-control" id="createTitle" name="title" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="createFile" class="form-label fw-semibold">File (PDF / DOCX / lainnya)</label>
                                <input type="file" class="form-control" id="createFile" name="file"
                                    accept=".pdf,.doc,.docx,.ppt,.pptx,.txt,.jpg,.jpeg,.png" required>
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
    <!-- Modal Edit Publication -->
    <div class="modal fade" id="publicationsEditModal" tabindex="-1" aria-labelledby="publicationsEditModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="publicationsEditModalLabel">
                        <i class="la la-edit me-2"></i>Edit Publikasi
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <form id="formEditPublications" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" id="editId" name="id">

                        <div class="row">
                            <!-- ✅ Preview Gambar sama seperti modal create -->
                            <div class="col-12 mb-3 position-relative" style="height: 250px;"
                                id="editImagePreviewContainer">
                                <img id="editCoverPreview" src="{{ asset('static/img/no-image-placeholder.svg') }}"
                                    alt="Preview Image" class="w-100 h-100 object-fit-cover"
                                    style="object-position: center;">
                                <label for="editCover"
                                    class="text-primary position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center fs-3"
                                    style="opacity: 0; cursor: pointer; border-radius: 50%;" id="editImageLabel">
                                    <i class="bi bi-pencil-square"></i>
                                </label>
                                <input type="file" class="d-none" id="editCover" name="cover" accept="image/*">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="editTitle" class="form-label fw-semibold">Judul Publikasi</label>
                                <input type="text" id="editTitle" name="title" class="form-control"
                                    placeholder="Masukkan judul publikasi" required>
                            </div>

                            <div class="col-md-12">
                                <label for="editFile" class="form-label fw-semibold">Ganti File Publikasi</label>
                                <input type="file" id="editFile" name="file" class="form-control"
                                    accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx">
                                <small class="text-muted">Kosongkan jika tidak ingin mengganti file publikasi.</small>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="la la-times me-1"></i>Batal
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="la la-save me-1"></i>Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // ✅ Letakkan di global scope
        const baseUrl = "{{ url('/api/master-data/publications') }}";
        let fetchPublications;
        document.addEventListener('DOMContentLoaded', function() {
            const publicationsTable = document.getElementById('publications');
            const pagination = document.getElementById('pagination');
            const searchButton = document.getElementById('searchButton');
            const searchInput = document.getElementById('searchInput');
            const filterType = document.getElementById('filterType');
            const limitSelect = document.getElementById('limit');
            // ✅ Definisikan function di dalam tapi simpan ke global variable
            fetchPublications = async function(page = 1) {
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
                    if (!res.status) throw new Error(res.message || 'Gagal mengambil data');
                    renderPublications(res.data);
                } catch (error) {
                    publicationsTable.innerHTML = `
                        <tr><td colspan="5" class="text-center text-danger">Gagal memuat data publikasi</td></tr>
                    `;
                }
            };
            // Render tabel publication
            function renderPublications(data) {
                let publications = [];
                let paginationHTML = '';
                if (Array.isArray(data)) {
                    publications = data;
                    pagination.innerHTML = '';
                } else {
                    publications = data.data;
                    startIndex = (data.current_page - 1) * data.per_page;
                    paginationHTML = data.links.map(link => `
                        <li class="page-item ${link.active ? 'active' : ''} ${!link.url ? 'disabled' : ''}">
                            <a href="#" class="page-link" data-page="${link.page || '#'}">${link.label}</a>
                        </li>
                    `).join('');
                    pagination.innerHTML = paginationHTML;
                }
                if (publications.length === 0) {
                    publicationsTable.innerHTML = `
                        <tr><td colspan="5" class="text-center text-muted">Tidak ada data</td></tr>
                    `;
                    return;
                }
                publicationsTable.innerHTML = publications.map((publication, index) => `
                    <tr>
                        <td>${startIndex + index + 1}</td>
                        <td>${publication.title}</td>
                        <td>
                            <img src="${publication.cover_url || '/static/img/no-image-placeholder.svg'}" alt="${publication.title}" style="width: 50px; height: 50px; object-fit: cover;" onerror="this.onerror=null; this.src='/static/img/no-image-placeholder.svg';">
                        </td>
                        <td><a class="text-primary" href="${publication.file_path_url}" target="_blank">Buka File</a></td>
                        <td class="d-flex align-items-center gap-1">
                            <button class="btn btn-sm btn-outline-success" onclick="showPublicationDetail(${publication.id})">
                                <i class="la la-eye"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-primary" onclick="showPublicationEdit(${publication.id})">
                                <i class="la la-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger" onclick="deletePublication(${publication.id})">
                                <i class="la la-trash"></i>
                            </button>
                        </td>
                    </tr>
                `).join('');
                document.querySelectorAll('#pagination a[data-page]').forEach(link => {
                    link.addEventListener('click', e => {
                        e.preventDefault();
                        const page = e.target.getAttribute('data-page');
                        if (page && page !== '#') fetchPublications(page);
                    });
                });
            }
            // Event handler
            searchButton.addEventListener('click', () => fetchPublications(1));
            limitSelect.addEventListener('change', () => fetchPublications(1));
            // Load awal
            fetchPublications();
        });
        // ✅ Fungsi global agar bisa dipanggil dari tombol onclick
        async function showPublicationDetail(id) {
            const publicationDetailContent = document.getElementById('publicationDetailContent');
            publicationDetailContent.innerHTML = `<p class="text-center text-muted mb-0">Memuat data...</p>`;
            const modal = new bootstrap.Modal(document.getElementById('publicationShowModal'));
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
                if (!status) throw new Error(message || 'Gagal memuat data publikasi.');
                const publication = data;
                const formatDate = (dateStr) => {
                    if (!dateStr) return '-';
                    return new Date(dateStr).toLocaleString('id-ID', {
                        dateStyle: 'long',
                        timeStyle: 'short'
                    });
                };
                // ✅ Tentukan ikon & warna berdasarkan ekstensi file
                const fileExt = publication.file_path_url ? publication.file_path_url.split('.').pop().toLowerCase() :
                    null;
                let fileIcon = 'la-file';
                let fileColor = 'text-secondary';
                if (fileExt === 'pdf') {
                    fileIcon = 'la-file-pdf';
                } else if (['xls', 'xlsx', 'csv'].includes(fileExt)) {
                    fileIcon = 'la-file-excel';
                } else if (['doc', 'docx'].includes(fileExt)) {
                    fileIcon = 'la-file-word';
                } else if (['ppt', 'pptx'].includes(fileExt)) {
                    fileIcon = 'la-file-powerpoint';
                }
                publicationDetailContent.innerHTML = `
                    <div class="row">
                        <div class="col-md-12 mb-2 mb-md-3" style="height: 250px;">
                            <img src="${publication.cover_url || '/static/img/no-image-placeholder.svg'}"
                                alt="${publication.title}"
                                class="w-100 h-100 object-fit-cover"
                                style="object-position: center;"
                                onerror="this.onerror=null; this.src='/static/img/no-image-placeholder.svg';">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row px-1 py-3 px-md-3">
                            <div class="col-md-6 mb-2">
                                <strong>ID:</strong>
                                <p class="text-muted mb-0">${publication.id}</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Title:</strong>
                                <p class="text-muted mb-0">${publication.title}</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>File:</strong>
                                <p class="mb-0">
                                    ${publication.file_path_url
                                        ? `<a href="${publication.file_path_url}" class="text-primary" target="_blank">
                                                    <i class="la ${fileIcon} me-1"></i> Buka File
                                                </a>`
                                        : `<span class="text-muted">Tidak ada file</span>`
                                    }
                                </p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Dibuat:</strong>
                                <p class="text-muted mb-0">${formatDate(publication.created_at)}</p>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Diperbarui:</strong>
                                <p class="text-muted mb-0">${formatDate(publication.updated_at)}</p>
                            </div>
                        </div>
                    </div>
                `;
            } catch (error) {
                console.error(error);
                publicationDetailContent.innerHTML = `
                    <div class="alert alert-danger text-center mb-0">
                        <i class="la la-exclamation-circle me-1"></i> Gagal memuat detail publikasi.
                    </div>
                `;
            }
        }
        // ✅ Form Create Publication
        document.getElementById('publicationCreateForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);
            formData.append('title', document.getElementById('createTitle').value);
            formData.append('cover', document.getElementById('createCover').files[0]);
            formData.append('file', document.getElementById('createFile').files[0]);
            try {
                const response = await axios.post(`${baseUrl}`, formData, {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': `Bearer ${getAuthToken()}`,
                        'Content-Type': 'multipart/form-data'
                    }
                });
                const res = response.data;
                if (!res.status) throw new Error(res.message || 'Gagal membuat publikasi');
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: res.message || 'Publikasi berhasil dibuat'
                });
                // ✅ Tutup modal dan refresh tabel
                setTimeout(() => {
                    bootstrap.Modal.getInstance(document.getElementById('publicationsCreateModal'))
                        .hide();
                    form.reset();
                    document.getElementById('createImagePreview').src =
                        "{{ asset('static/img/no-image-placeholder.svg') }}";
                    fetchPublications();
                }, 1200);
            } catch (error) {
                console.error(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: error.response?.data?.message || 'Terjadi kesalahan saat membuat publikasi.'
                });
            }
        });
        // ✅ Fungsi Delete Publication dengan konfirmasi SweetAlert
        async function deletePublication(id) {
            Swal.fire({
                title: 'Hapus Publikasi?',
                text: 'Data publikasi ini akan dihapus secara permanen!',
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
                        if (!res.status) throw new Error(res.message || 'Gagal menghapus publikasi');
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: res.message || 'Publikasi berhasil dihapus'
                        });
                        // ✅ Refresh data tabel setelah 1 detik
                        setTimeout(() => fetchPublications(), 1000);
                    } catch (error) {
                        console.error(error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal Menghapus',
                            text: error.response?.data?.message ||
                                'Terjadi kesalahan saat menghapus publikasi.'
                        });
                    }
                }
            });
        }
        // ✅ Preview cover image saat memilih file
        document.getElementById('createCover').addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('createImagePreview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
        // ✅ Tampilkan modal edit + isi data
        async function showPublicationEdit(id) {
            const modal = new bootstrap.Modal(document.getElementById('publicationsEditModal'));
            const editCoverPreview = document.getElementById('editCoverPreview');

            try {
                const response = await axios.get(`${baseUrl}/${id}`, {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': `Bearer ${getAuthToken()}`
                    }
                });

                const res = response.data;
                if (!res.status) throw new Error(res.message || 'Gagal memuat data publikasi.');

                const pub = res.data;
                document.getElementById('editId').value = pub.id;
                document.getElementById('editTitle').value = pub.title;
                editCoverPreview.src = pub.cover_url || '/static/img/no-image-placeholder.svg';

                modal.show();
            } catch (error) {
                console.error(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: error.response?.data?.message || 'Tidak dapat memuat data publikasi.'
                });
            }
        }

        // ✅ Submit form edit publikasi
        document.getElementById('formEditPublications').addEventListener('submit', async function(e) {
            e.preventDefault();
            const form = e.target;
            const id = document.getElementById('editId').value;
            const formData = new FormData(form);

            try {
                const response = await axios.post(`${baseUrl}/${id}?_method=PUT`, formData, {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': `Bearer ${getAuthToken()}`,
                        'Content-Type': 'multipart/form-data'
                    }
                });

                const res = response.data;
                if (!res.status) throw new Error(res.message || 'Gagal memperbarui publikasi.');

                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: 'Data publikasi telah diperbarui.',
                    timer: 1500,
                    showConfirmButton: false
                });

                const modal = bootstrap.Modal.getInstance(document.getElementById('publicationsEditModal'));
                modal.hide();
                form.reset();
                document.getElementById('editCoverPreview').src = '/static/img/no-image-placeholder.svg';

                // Refresh tabel publikasi
                if (typeof fetchPublications === 'function') fetchPublications();
            } catch (error) {
                console.error(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: error.response?.data?.message || 'Terjadi kesalahan saat memperbarui data.'
                });
            }
        });
        // ✅ Preview cover image saat memilih file
        document.getElementById('editCover').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (ev) => {
                    document.getElementById('editCoverPreview').src = ev.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
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

        #editImageLabel {
            transition: opacity 0.3s ease;
        }

        #editImagePreviewContainer:hover #editImageLabel {
            opacity: 1 !important;
        }

        #editImagePreview {
            transition: filter 0.3s ease;
        }

        #editImagePreviewContainer:hover #editImagePreview {
            filter: brightness(0.8);
        }
    </style>
@endsection
