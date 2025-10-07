@extends('layouts.dashboard')
@section('title', 'Users - Master Data - Al-Layyinah')
@section('description',
    'Al-layyinah, Dashboard, Master Data, Master Data Al-Layyinah, Auth, Admin, Master Data Admin,
    Authorization, Master Data Page, Master Data Place')
@section('content')
    <div class="container">
        <div class="row mb-3 justify-content-md-between align-items-md-center">
            <div class="col-md-6 col-12">
                <h3 class="page-title mb-2 mb-md-1 fw-semibold">Users Data</h3>
                <ul class="breadcrumb mb-2 mb-md-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-3 col-12">
                <div class="d-grid">
                    <button class="btn btn-primary h-100" data-bs-toggle="modal" data-bs-target="#userCreateModal">
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
                        <option value="id">Id</option>
                        <option value="name">Name</option>
                        <option value="email">Email</option>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="users">
                            <tr>
                                <td colspan="4" class="text-center">Loading...</td>
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
    <!-- Modal Show User -->
    <div class="modal fade" id="userShowModal" tabindex="-1" aria-labelledby="userShowModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="userShowModalLabel">
                        <i class="la la-user me-2"></i>Detail Pengguna
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="userDetailContent" class="p-2">
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
    <!-- Modal Create User -->
    <div class="modal fade" id="userCreateModal" tabindex="-1" aria-labelledby="userCreateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="userCreateModalLabel">
                        <i class="la la-plus-circle me-2"></i>Tambah Pengguna
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form id="userCreateForm">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="createName" class="form-label fw-semibold">Nama</label>
                                <input type="text" class="form-control" id="createName" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="createEmail" class="form-label fw-semibold">Email</label>
                                <input type="email" class="form-control" id="createEmail" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="createPassword" class="form-label fw-semibold">Password</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="createPassword" required>
                                    <span class="fa fa-eye-slash show-hide-password" id="toggle-password-create"></span>
                                </div>
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
    <!-- Modal Edit User -->
    <div class="modal fade" id="userEditModal" tabindex="-1" aria-labelledby="userEditModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="userEditModalLabel">
                        <i class="la la-edit me-2"></i>Edit Pengguna
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form id="userEditForm">
                    <div class="modal-body">
                        <input type="hidden" id="editUserId">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="editName" class="form-label fw-semibold">Nama</label>
                                <input type="text" class="form-control" id="editName" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="editEmail" class="form-label fw-semibold">Email</label>
                                <input type="email" class="form-control" id="editEmail" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="editPassword" class="form-label fw-semibold">Password (Opsional)</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="editPassword"
                                        placeholder="Kosongkan jika tidak diubah">
                                        <span class="fa fa-eye-slash show-hide-password" id="toggle-password-edit"></span>
                                </div>
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
        // ✅ Letakkan di global scope
        const baseUrl = "{{ url('/api/master-data/users') }}";
        let fetchUsers;
        document.addEventListener('DOMContentLoaded', function() {
            const usersTable = document.getElementById('users');
            const pagination = document.getElementById('pagination');
            const searchButton = document.getElementById('searchButton');
            const searchInput = document.getElementById('searchInput');
            const filterType = document.getElementById('filterType');
            const limitSelect = document.getElementById('limit');
            // ✅ Definisikan function di dalam tapi simpan ke global variable
            fetchUsers = async function(page = 1) {
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
                    renderUsers(res.data);
                } catch (error) {
                    usersTable.innerHTML = `
                        <tr><td colspan="4" class="text-center text-danger">Gagal memuat data pengguna</td></tr>
                    `;
                }
            };
            // Render tabel user
            function renderUsers(data) {
                let users = [];
                let paginationHTML = '';
                if (Array.isArray(data)) {
                    users = data;
                    pagination.innerHTML = '';
                } else {
                    users = data.data;
                    startIndex = (data.current_page - 1) * data.per_page;
                    paginationHTML = data.links.map(link => `
                        <li class="page-item ${link.active ? 'active' : ''} ${!link.url ? 'disabled' : ''}">
                            <a href="#" class="page-link" data-page="${link.page || '#'}">${link.label}</a>
                        </li>
                    `).join('');
                    pagination.innerHTML = paginationHTML;
                }
                if (users.length === 0) {
                    usersTable.innerHTML = `
                        <tr><td colspan="4" class="text-center text-muted">Tidak ada data</td></tr>
                    `;
                    return;
                }
                usersTable.innerHTML = users.map((user, index) => `
                    <tr>
                        <td>${startIndex + index + 1}</td>
                        <td>${user.name}</td>
                        <td>${user.email}</td>
                        <td class="d-flex align-items-center gap-1">
                            <button class="btn btn-sm btn-outline-success" onclick="showUserDetail(${user.id})">
                                <i class="la la-eye"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-primary" onclick="showUserEdit(${user.id})">
                                <i class="la la-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger" onclick="deleteUser(${user.id})">
                                <i class="la la-trash"></i>
                            </button>
                        </td>
                    </tr>
                `).join('');
                document.querySelectorAll('#pagination a[data-page]').forEach(link => {
                    link.addEventListener('click', e => {
                        e.preventDefault();
                        const page = e.target.getAttribute('data-page');
                        if (page && page !== '#') fetchUsers(page);
                    });
                });
            }
            // Event handler
            searchButton.addEventListener('click', () => fetchUsers(1));
            limitSelect.addEventListener('change', () => fetchUsers(1));
            // Load awal
            fetchUsers();
        });
        // ✅ Fungsi global agar bisa dipanggil dari tombol onclick
        async function showUserDetail(id) {
            const userDetailContent = document.getElementById('userDetailContent');
            userDetailContent.innerHTML = `<p class="text-center text-muted mb-0">Memuat data...</p>`;
            const modal = new bootstrap.Modal(document.getElementById('userShowModal'));
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
                if (!status) throw new Error(message || 'Gagal memuat data pengguna.');
                const user = data;
                const formatDate = (dateStr) => {
                    if (!dateStr) return '-';
                    return new Date(dateStr).toLocaleString('id-ID', {
                        dateStyle: 'long',
                        timeStyle: 'short'
                    });
                };
                userDetailContent.innerHTML = `
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <strong>ID:</strong>
                            <p class="text-muted mb-0">${user.id}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>Nama:</strong>
                            <p class="text-muted mb-0">${user.name}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>Email:</strong>
                            <p class="text-muted mb-0">${user.email}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>Email Verifikasi:</strong>
                            <p class="text-muted mb-0">${user.email_verified_at ? formatDate(user.email_verified_at) : 'Belum diverifikasi'}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>Dibuat:</strong>
                            <p class="text-muted mb-0">${formatDate(user.created_at)}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>Diperbarui:</strong>
                            <p class="text-muted mb-0">${formatDate(user.updated_at)}</p>
                        </div>
                    </div>
                `;
            } catch (error) {
                console.error(error);
                userDetailContent.innerHTML = `
                    <div class="alert alert-danger text-center mb-0">
                        <i class="la la-exclamation-circle me-1"></i> Gagal memuat detail pengguna.
                    </div>
                `;
            }
        }
        // ✅ Form Create User
        document.getElementById('userCreateForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const data = {
                name: document.getElementById('createName').value,
                email: document.getElementById('createEmail').value,
                password: document.getElementById('createPassword').value,
            };
            try {
                const response = await axios.post(`${baseUrl}`, data, {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': `Bearer ${getAuthToken()}`
                    }
                });
                const res = response.data;
                if (!res.status) throw new Error(res.message || 'Gagal membuat pengguna');
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: res.message || 'Pengguna berhasil dibuat'
                });
                // ✅ Tutup modal dan refresh tabel
                setTimeout(() => {
                    bootstrap.Modal.getInstance(document.getElementById('userCreateModal')).hide();
                    document.getElementById('userCreateForm').reset();
                    fetchUsers();
                }, 1200);
            } catch (error) {
                console.error(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: error.response?.data?.message || 'Terjadi kesalahan saat membuat pengguna.'
                });
            }
        });
        // ✅ Fungsi untuk menampilkan modal edit dan isi data
        async function showUserEdit(id) {
            const modal = new bootstrap.Modal(document.getElementById('userEditModal'));
            document.getElementById('userEditForm').reset();
            document.getElementById('editUserId').value = id;
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
                if (!status) throw new Error(message || 'Gagal mengambil data pengguna');
                // Isi form dengan data user
                document.getElementById('editName').value = data.name || '';
                document.getElementById('editEmail').value = data.email || '';
            } catch (error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: error.response?.error || error.response?.data?.message ||
                        'Gagal mengambil data pengguna'
                });
            }
        }
        // ✅ Submit edit form
        document.getElementById('userEditForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const id = document.getElementById('editUserId').value;
            const data = {
                name: document.getElementById('editName').value,
                email: document.getElementById('editEmail').value,
            };
            const password = document.getElementById('editPassword').value;
            if (password.trim() !== '') data.password = password;
            try {
                const response = await axios.put(`${baseUrl}/${id}`, data, {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': `Bearer ${getAuthToken()}`
                    }
                });
                const res = response.data;
                if (!res.status) throw new Error(res.message || 'Gagal memperbarui data pengguna');
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: res.message || 'Data pengguna berhasil diperbarui'
                })
                setTimeout(() => {
                    bootstrap.Modal.getInstance(document.getElementById('userEditModal')).hide();
                    fetchUsers();
                }, 1200);
            } catch (error) {
                console.error(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: error.response?.error || error.response?.data?.message ||
                        'Gagal memperbarui data pengguna'
                });
            }
        });
        // ✅ Fungsi Delete User dengan konfirmasi SweetAlert
        async function deleteUser(id) {
            Swal.fire({
                title: 'Hapus Pengguna?',
                text: 'Data pengguna ini akan dihapus secara permanen!',
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
                        if (!res.status) throw new Error(res.message || 'Gagal menghapus pengguna');
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: res.message || 'Pengguna berhasil dihapus'
                        });
                        // ✅ Refresh data tabel setelah 1 detik
                        setTimeout(() => fetchUsers(), 1000);
                    } catch (error) {
                        console.error(error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal Menghapus',
                            text: error.response?.data?.message ||
                                'Terjadi kesalahan saat menghapus pengguna.'
                        });
                    }
                }
            });
        }
        $("#toggle-password-create").click(function () {
            $( this ).toggleClass("fa-eye fa-eye-slash");
            if ($("#createPassword").attr("type") == "password")
            {
                $("#createPassword").attr("type", "text");
            } else
            {
                $("#createPassword").attr("type", "password");
            }
        });
        $("#toggle-password-edit").click(function () {
            $( this ).toggleClass("fa-eye fa-eye-slash");
            if ($("#editPassword").attr("type") == "password")
            {
                $("#editPassword").attr("type", "text");
            } else
            {
                $("#editPassword").attr("type", "password");
            }
        });
    </script>
@endsection
