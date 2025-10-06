@extends('layouts.dashboard')
@section('title', 'Logs - Settings - Al-Layyinah')
@section('description',
    'Al-layyinah, Dashboard, Settings, Settings Al-Layyinah, Auth, Admin, Settings Admin,
    Authorization, Settings Page, Settings Place')
@section('content')
    <div class="container">
        <div class="row mb-3 justify-content-md-between align-items-md-center">
            <div class="col-md-6 col-12">
                <h3 class="page-title mb-2 mb-md-1 fw-semibold">Logs Data</h3>
                <ul class="breadcrumb mb-2 mb-md-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Logs</li>
                </ul>
            </div>
        </div>

        {{-- Filter Section --}}
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
                        <option value="user_id">User Id</option>
                        <option value="name">Name</option>
                        <option value="method">Method</option>
                        <option value="path">Path</option>
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

        {{-- Limit --}}
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

        {{-- Table --}}
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Method</th>
                                <th>Path</th>
                                <th>User</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="logs">
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

    <!-- Modal Show Log -->
    <div class="modal fade" id="logShowModal" tabindex="-1" aria-labelledby="logShowModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="logShowModalLabel">
                        <i class="la la-file-alt me-2"></i>Detail Log
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="logDetailContent" class="p-2">
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

    <script>
        const baseUrl = "{{ url('/api/settings/logs') }}";
        let fetchLogs;

        document.addEventListener('DOMContentLoaded', function() {
            const logsTable = document.getElementById('logs');
            const pagination = document.getElementById('pagination');
            const searchButton = document.getElementById('searchButton');
            const searchInput = document.getElementById('searchInput');
            const filterType = document.getElementById('filterType');
            const limitSelect = document.getElementById('limit');

            fetchLogs = async function(page = 1) {
                try {
                    let params = {
                        page,
                        limit: limitSelect.value
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
                    if (!res.status) throw new Error(res.message || 'Gagal mengambil data log');
                    renderLogs(res.data);
                } catch (error) {
                    logsTable.innerHTML = `
                        <tr><td colspan="5" class="text-center text-danger">Gagal memuat data log</td></tr>
                    `;
                }
            };

            function renderLogs(data) {
                let logs = [];
                let paginationHTML = '';

                if (Array.isArray(data)) {
                    logs = data;
                    pagination.innerHTML = '';
                } else {
                    logs = data.data;
                    paginationHTML = data.links?.map(link => `
                        <li class="page-item ${link.active ? 'active' : ''} ${!link.url ? 'disabled' : ''}">
                            <a href="#" class="page-link" data-page="${link.page || '#'}">${link.label}</a>
                        </li>
                    `).join('') || '';
                    pagination.innerHTML = paginationHTML;
                }

                if (logs.length === 0) {
                    logsTable.innerHTML = `
                        <tr><td colspan="5" class="text-center text-muted">Tidak ada data log</td></tr>
                    `;
                    return;
                }

                logsTable.innerHTML = logs.map((log, index) => `
                    <tr>
                        <td>${index + 1}</td>
                        <td><span class="badge bg-${log.method === 'GET' ? 'info' : log.method === 'POST' ? 'success' : 'secondary'}">${log.method}</span></td>
                        <td>${log.path}</td>
                        <td>${log.user ? log.user.name : '<em class="text-muted">Anonymous</em>'}</td>
                        <td>
                            <button class="btn btn-sm btn-outline-success" onclick="showLogDetail(${log.id})">
                                <i class="la la-eye"></i>
                            </button>
                        </td>
                    </tr>
                `).join('');

                document.querySelectorAll('#pagination a[data-page]').forEach(link => {
                    link.addEventListener('click', e => {
                        e.preventDefault();
                        const page = e.target.getAttribute('data-page');
                        if (page && page !== '#') fetchLogs(page);
                    });
                });
            }

            searchButton.addEventListener('click', () => fetchLogs(1));
            limitSelect.addEventListener('change', () => fetchLogs(1));
            fetchLogs();
        });

        async function showLogDetail(id) {
            const logDetailContent = document.getElementById('logDetailContent');
            logDetailContent.innerHTML = `<p class="text-center text-muted mb-0">Memuat data...</p>`;
            const modal = new bootstrap.Modal(document.getElementById('logShowModal'));
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
                if (!status) throw new Error(message || 'Gagal memuat detail log.');

                const log = data;
                const formatDate = (dateStr) => new Date(dateStr).toLocaleString('id-ID', {
                    dateStyle: 'long',
                    timeStyle: 'short'
                });

                logDetailContent.innerHTML = `
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <strong>ID:</strong>
                            <p class="text-muted mb-0">${log.id}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>User:</strong>
                            <p class="text-muted mb-0">${log.user ? `${log.user.name} (#${log.user.id})` : 'Anonymous'}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>Method:</strong>
                            <p class="text-muted mb-0">${log.method}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>IP Address:</strong>
                            <p class="text-muted mb-0">${log.ip}</p>
                        </div>
                        <div class="col-md-12 mb-2">
                            <strong>Path:</strong>
                            <p class="text-muted mb-0">${log.path}</p>
                        </div>
                        <div class="col-md-12 mb-2">
                            <strong>User Agent:</strong>
                            <p class="text-muted small mb-0">${log.user_agent}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>Dibuat:</strong>
                            <p class="text-muted mb-0">${formatDate(log.created_at)}</p>
                        </div>
                        <div class="col-md-6 mb-2">
                            <strong>Diperbarui:</strong>
                            <p class="text-muted mb-0">${formatDate(log.updated_at)}</p>
                        </div>
                    </div>
                `;
            } catch (error) {
                logDetailContent.innerHTML = `
                    <div class="alert alert-danger text-center mb-0">
                        <i class="la la-exclamation-circle me-1"></i> Gagal memuat detail log.
                    </div>
                `;
            }
        }
    </script>
@endsection
