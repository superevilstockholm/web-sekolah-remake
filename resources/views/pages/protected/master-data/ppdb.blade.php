@extends('layouts.dashboard')
@section('title', 'PPDB - Master Data - Al-Layyinah')
@section('description',
    'Al-layyinah, Dashboard, Master Data, Master Data Al-Layyinah, Auth, Admin, Master Data Admin,
    Authorization, Master Data Page, Master Data Place')
@section('content')
    <div class="container">
        <div class="row mb-3 justify-content-md-between align-items-md-center">
            <div class="col-md-6 col-12">
                <h3 class="page-title mb-2 mb-md-1 fw-semibold">PPDB Data</h3>
                <ul class="breadcrumb mb-2 mb-md-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">PPDB</li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-3 col-12">
                <div class="d-grid">
                    <button class="btn btn-success h-100" data-bs-toggle="modal" data-bs-target="#ppdbCreateModal">
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
                        <option value="nama_lengkap">Nama Lengkap</option>
                        <option value="jenis_pendaftaran">Jenis Pendaftaran</option>
                        <option value="jenjang">Jenjang</option>
                        <option value="jenis_kelamin">Jenis Kelamin</option>
                        <option value="tempat_lahir">Tempat Lahir</option>
                        <option value="no_telp">No Telp</option>
                        <option value="no_hp">No HP</option>
                        <option value="no_hp2">No HP 2</option>
                        <option value="email">Email</option>
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
                                <th>Nama Lengkap</th>
                                <th>Jenis Pendaftaran</th>
                                <th>Jenis Kelamin</th>
                                <th>Jenjang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="ppdbTableBody">
                            <tr>
                                <td colspan="6" class="text-center">Loading...</td>
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
    <div class="modal fade" id="ppdbShowModal" tabindex="-1" aria-labelledby="ppdbShowModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="ppdbShowModalLabel">
                        <i class="la la-user me-2"></i>Detail Data PPDB
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="ppdbDetailContent" class="p-2">
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
    <div class="modal fade" id="ppdbCreateModal" tabindex="-1" aria-labelledby="ppdbCreateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="ppdbCreateModalLabel">
                        <i class="la la-plus-circle me-2"></i>Tambah Data PPDB
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form id="ppdbCreateForm">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating" id="createNama" required>
                                    <label class="focus-label">Nama Lengkap</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group form-focus">
                                    <input type="email" class="form-control floating" id="createEmail" required>
                                    <label class="focus-label">Email</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group form-focus select-focus">
                                    <select id="createJenisPendaftaran" class="select floating" required>
                                        <option value="">Pilih Jenis Pendaftaran</option>
                                        <option value="Peserta Didik Baru">Peserta Didik Baru</option>
                                        <option value="Mutasi">Mutasi</option>
                                    </select>
                                    <label class="focus-label">Jenis Pendaftaran</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group form-focus select-focus">
                                    <select id="createJenjang" class="select floating" required>
                                        <option value="">Pilih Jenjang</option>
                                        <option value="TK">TK</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                    </select>
                                    <label class="focus-label">Jenjang</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group form-focus select-focus">
                                    <select id="createJenisKelamin" class="select floating" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                    <label class="focus-label">Jenis Kelamin</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating" id="createTempatLahir">
                                    <label class="focus-label">Tempat Lahir</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group form-focus">
                                    <input type="date" class="form-control floating" id="createTanggalLahir">
                                    <label class="focus-label">Tanggal Lahir</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating" id="createNoTelp">
                                    <label class="focus-label">No Telepon</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating" id="createNoHp">
                                    <label class="focus-label">No HP 1</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group form-focus">
                                    <input type="text" class="form-control floating" id="createNoHp2">
                                    <label class="focus-label">No HP 2</label>
                                </div>
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
    <div class="modal fade" id="ppdbEditModal" tabindex="-1" aria-labelledby="ppdbEditModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="ppdbEditModalLabel">
                        <i class="la la-edit me-2"></i>Edit Data PPDB
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form id="ppdbEditForm">
                    <div class="modal-body">
                        <input type="hidden" id="editPpdbId">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="editNama" class="form-label fw-semibold">Nama Lengkap</label>
                                <input type="text" class="form-control" id="editNama" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="editEmail" class="form-label fw-semibold">Email</label>
                                <input type="email" class="form-control" id="editEmail" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="editJenisPendaftaran" class="form-label fw-semibold">Jenis Pendaftaran</label>
                                <select class="form-control form-select" id="editJenisPendaftaran" required>
                                    <option value="">Pilih Jenis Pendaftaran</option>
                                    <option value="Peserta Didik Baru">Peserta Didik Baru</option>
                                    <option value="Mutasi">Mutasi</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="editJenjang" class="form-label fw-semibold">Jenjang</label>
                                <select class="form-control form-select" id="editJenjang" required>
                                    <option value="">Pilih Jenjang</option>
                                    <option value="TK">TK</option>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="editJenisKelamin" class="form-label fw-semibold">Jenis Kelamin</label>
                                <select class="form-control form-select" id="editJenisKelamin" required>
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="editTempatLahir" class="form-label fw-semibold">Tempat Lahir</label>
                                <input type="text" class="form-control" id="editTempatLahir">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="editTanggalLahir" class="form-label fw-semibold">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="editTanggalLahir">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="editNoTelp" class="form-label fw-semibold">No Telepon</label>
                                <input type="text" class="form-control" id="editNoTelp">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="editNoHp" class="form-label fw-semibold">No HP 1</label>
                                <input type="text" class="form-control" id="editNoHp">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="editNoHp2" class="form-label fw-semibold">No HP 2</label>
                                <input type="text" class="form-control" id="editNoHp2">
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
        const baseUrl = "{{ url('/api/master-data/ppdb') }}";
        let fetchPpdbData;
        document.addEventListener('DOMContentLoaded', function() {
            const ppdbTableBody = document.getElementById('ppdbTableBody');
            const pagination = document.getElementById('pagination');
            const searchButton = document.getElementById('searchButton');
            const searchInput = document.getElementById('searchInput');
            const filterType = document.getElementById('filterType');
            const limitSelect = document.getElementById('limit');
            fetchPpdbData = async function(page = 1) {
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
                    renderPpdbTable(res.data);
                } catch (error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal Memuat Data',
                        text: error.response?.data?.message ||
                            'Terjadi kesalahan saat mengambil data PPDB.',
                    });
                    ppdbTableBody.innerHTML = `
                        <tr><td colspan="6" class="text-center text-danger">Gagal memuat data PPDB</td></tr>
                    `;
                }
            };
            function renderPpdbTable(data) {
                let ppdb = [];
                let paginationHTML = '';
                if (Array.isArray(data)) {
                    ppdb = data;
                    pagination.innerHTML = '';
                } else {
                    ppdb = data.data;
                    paginationHTML = data.links.map(link => `
                        <li class="page-item ${link.active ? 'active' : ''} ${!link.url ? 'disabled' : ''}">
                            <a href="#" class="page-link" data-page="${link.page || '#'}">${link.label}</a>
                        </li>
                    `).join('');
                    pagination.innerHTML = paginationHTML;
                }
                if (ppdb.length === 0) {
                    ppdbTableBody.innerHTML = `
                        <tr><td colspan="6" class="text-center text-muted">Tidak ada data</td></tr>
                    `;
                    return;
                }
                ppdbTableBody.innerHTML = ppdb.map((item, index) => `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${item.nama_lengkap}</td>
                        <td>${item.jenis_pendaftaran}</td>
                        <td>${item.jenis_kelamin === 'P' ? 'Perempuan' : 'Laki-laki'}</td>
                        <td>${item.jenjang}</td>
                        <td class="d-flex align-items-center gap-1">
                            <button class="btn btn-sm btn-outline-success" onclick="showPpdbDetail(${item.id})">
                                <i class="la la-eye"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-primary" onclick="showPpdbEdit(${item.id})">
                                <i class="la la-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger" onclick="deletePpdb(${item.id})">
                                <i class="la la-trash"></i>
                            </button>
                        </td>
                    </tr>
                `).join('');
                document.querySelectorAll('#pagination a[data-page]').forEach(link => {
                    link.addEventListener('click', e => {
                        e.preventDefault();
                        const page = e.target.getAttribute('data-page');
                        if (page && page !== '#') fetchPpdbData(page);
                    });
                });
            }
            searchButton.addEventListener('click', () => fetchPpdbData(1));
            limitSelect.addEventListener('change', () => fetchPpdbData(1));
            fetchPpdbData();
        });
        const formatDate = (dateStr) => {
            if (!dateStr) return '-';
            return new Date(dateStr).toLocaleString('id-ID', {
                dateStyle: 'long',
                timeStyle: 'short'
            });
        };
        async function showPpdbDetail(id) {
            const ppdbDetailContent = document.getElementById('ppdbDetailContent');
            ppdbDetailContent.innerHTML = `<p class="text-center text-muted mb-0">Memuat data...</p>`;
            const modal = new bootstrap.Modal(document.getElementById('ppdbShowModal'));
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
                if (!status) throw new Error(message || 'Gagal memuat data PPDB.');
                const ppdb = data;
                ppdbDetailContent.innerHTML = `
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <strong>ID:</strong>
                            <p class="text-muted mb-0">${ppdb.id ?? '-'}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>Nama:</strong>
                            <p class="text-muted mb-0">${ppdb.nama_lengkap ?? '-'}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>Jenis Pendaftaran:</strong>
                            <p class="text-muted mb-0">${ppdb.jenis_pendaftaran ?? '-'}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>Jenjang:</strong>
                            <p class="text-muted mb-0">${ppdb.jenjang ?? '-'}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>Jenis Kelamin:</strong>
                            <p class="text-muted mb-0">${ppdb.jenis_kelamin === 'P' ? 'Perempuan' : ppdb.jenis_kelamin === 'L' ? 'Laki-laki' : '-'}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>Tempat Lahir:</strong>
                            <p class="text-muted mb-0">${ppdb.tempat_lahir ?? '-'}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>Tanggal Lahir:</strong>
                            <p class="text-muted mb-0">${formatDate(ppdb.tanggal_lahir)}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>No Telepon:</strong>
                            <p class="text-muted mb-0">${ppdb.no_telp ?? '-'}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>No HP 1:</strong>
                            <p class="text-muted mb-0">${ppdb.no_hp ?? '-'}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>No HP 2:</strong>
                            <p class="text-muted mb-0">${ppdb.no_hp2 ?? '-'}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>Email:</strong>
                            <p class="text-muted mb-0">${ppdb.email ?? '-'}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>Dibuat:</strong>
                            <p class="text-muted mb-0">${formatDate(ppdb.created_at)}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>Diperbarui:</strong>
                            <p class="text-muted mb-0">${formatDate(ppdb.updated_at)}</p>
                        </div>
                    </div>
                `;
            } catch (error) {
                console.error(error);
                ppdbDetailContent.innerHTML = `
                    <div class="alert alert-danger text-center mb-0">
                        <i class="la la-exclamation-circle me-1"></i> Gagal memuat detail data PPDB.
                    </div>
                `;
            }
        }
        document.getElementById('ppdbCreateForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const data = {
                nama_lengkap: document.getElementById('createNama').value,
                email: document.getElementById('createEmail').value,
                jenis_pendaftaran: document.getElementById('createJenisPendaftaran').value,
                jenjang: document.getElementById('createJenjang').value,
                jenis_kelamin: document.getElementById('createJenisKelamin').value,
                tempat_lahir: document.getElementById('createTempatLahir').value,
                tanggal_lahir: document.getElementById('createTanggalLahir').value,
                no_telp: document.getElementById('createNoTelp').value,
                no_hp: document.getElementById('createNoHp').value,
                no_hp2: document.getElementById('createNoHp2').value,
            };
            try {
                const response = await axios.post(`${baseUrl}`, data, {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': `Bearer ${getAuthToken()}`
                    }
                });
                const res = response.data;
                if (!res.status) throw new Error(res.message || 'Gagal membuat data PPDB');
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: res.message || 'Data PPDB berhasil dibuat'
                });
                setTimeout(() => {
                    bootstrap.Modal.getInstance(document.getElementById('ppdbCreateModal')).hide();
                    document.getElementById('ppdbCreateForm').reset();
                    fetchPpdbData();
                }, 1200);
            } catch (error) {
                console.error(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: error.response?.data?.message || 'Terjadi kesalahan saat membuat data PPDB.'
                });
            }
        });
        function formatDateForInput(dateStr) {
            if (!dateStr) return '';
            // Deteksi jika formatnya dd-mm-yyyy
            if (dateStr.includes('-')) {
                const parts = dateStr.split('-');
                if (parts[0].length === 2 && parts[2].length === 4) {
                    // format dd-mm-yyyy → yyyy-mm-dd
                    return `${parts[2]}-${parts[1]}-${parts[0]}`;
                }
            }
            // Kalau format lain (misal ISO), biarkan default
            const date = new Date(dateStr);
            if (isNaN(date)) return '';
            return date.toISOString().split('T')[0];
        }
        async function showPpdbEdit(id) {
            const modal = new bootstrap.Modal(document.getElementById('ppdbEditModal'));
            document.getElementById('ppdbEditForm').reset();
            document.getElementById('editPpdbId').value = id;
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
                if (!status) throw new Error(message || 'Gagal mengambil data PPDB');
                document.getElementById('editNama').value = data.nama_lengkap || '';
                document.getElementById('editEmail').value = data.email || '';
                document.getElementById('editJenisPendaftaran').value = data.jenis_pendaftaran || '';
                document.getElementById('editJenjang').value = data.jenjang || '';
                document.getElementById('editJenisKelamin').value = data.jenis_kelamin || '';
                document.getElementById('editTempatLahir').value = data.tempat_lahir || '';
                document.getElementById('editTanggalLahir').value = formatDateForInput(data.tanggal_lahir);;
                document.getElementById('editNoTelp').value = data.no_telp || '';
                document.getElementById('editNoHp').value = data.no_hp || '';
                document.getElementById('editNoHp2').value = data.no_hp2 || '';
            } catch (error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: error.response?.error || error.response?.data?.message ||
                        'Gagal mengambil data PPDB'
                });
            }
        }
        document.getElementById('ppdbEditForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const id = document.getElementById('editPpdbId').value;
            const data = {
                nama_lengkap: document.getElementById('editNama').value,
                email: document.getElementById('editEmail').value,
                jenis_pendaftaran: document.getElementById('editJenisPendaftaran').value,
                jenjang: document.getElementById('editJenjang').value,
                jenis_kelamin: document.getElementById('editJenisKelamin').value,
                tempat_lahir: document.getElementById('editTempatLahir').value,
                tanggal_lahir: document.getElementById('editTanggalLahir').value,
                no_telp: document.getElementById('editNoTelp').value,
                no_hp: document.getElementById('editNoHp').value,
                no_hp2: document.getElementById('editNoHp2').value,
            };
            try {
                const response = await axios.put(`${baseUrl}/${id}`, data, {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': `Bearer ${getAuthToken()}`
                    }
                });
                const res = response.data;
                if (!res.status) throw new Error(res.message || 'Gagal memperbarui data PPDB');
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: res.message || 'Data PPDB berhasil diperbarui'
                })
                setTimeout(() => {
                    bootstrap.Modal.getInstance(document.getElementById('ppdbEditModal')).hide();
                    fetchPpdbData();
                }, 1200);
            } catch (error) {
                console.error(error);
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: error.response?.error || error.response?.data?.message ||
                        'Gagal memperbarui data PPDB'
                });
            }
        });
        async function deletePpdb(id) {
            Swal.fire({
                title: 'Hapus Data PPDB?',
                text: 'Data PPDB ini akan dihapus secara permanen!',
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
                        if (!res.status) throw new Error(res.message || 'Gagal menghapus data PPDB');
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: res.message || 'Data PPDB berhasil dihapus'
                        });
                        setTimeout(() => fetchPpdbData(), 1000);
                    } catch (error) {
                        console.error(error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal Menghapus',
                            text: error.response?.data?.message ||
                                'Terjadi kesalahan saat menghapus data PPDB.'
                        });
                    }
                }
            });
        }
    </script>
@endsection
