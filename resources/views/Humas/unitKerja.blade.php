<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Unit Kerja Humas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">
</head>

<body>
    {{-- Navbar --}}
    <div class="sticky-top" id="navbar-humas"></div>

    <div class="container container-tabel rounded my-5 pt-2">
        <!-- Header Box -->
        <div class="p-4 rounded-top" style="background-color: #00B9AD; color: white;">
            <h5 class="mb-1">Manajemen Unit Kerja RSHS Bandung</h5>
            <p class="mb-0">Kelola data unit kerja, struktur organisasi, dan admin unit kerja</p>
        </div>

        <!-- Filter & Action -->
        <div class="bg-white p-3 rounded-bottom shadow-sm">
            <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center mb-3 tombol-cari">
                <div class="d-flex flex-wrap gap-2 grup-tombol">
                    <button class="btn btn-tambah-pengaduan text-white btn-teal" data-bs-toggle="modal"
                        data-bs-target="#modalTambahUnitKerja">
                        <i class="bi bi-plus-circle"></i> Tambah Unit Kerja
                    </button>

                </div>
                <div class="input-group" style="width: 250px;">
                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control border-start-0" placeholder="Cari Unit Kerja...">
                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>ID Bagian</th>
                            <th>Nama Bagian</th>
                            <th>Nama Singular</th>
                            <th>Nama Alternatif</th>
                            <th>Status</th>
                            <th>Tanggal Input</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Induk A -->
                        <tr class="parent-row" data-child="group-A">
                            <td><span class="toggle-icon">▸</span> <strong>A</strong></td>
                            <td>DIREKTUR UTAMA</td>
                            <td>DIREKTUR UTAMA</td>
                            <td>DIRUT</td>
                            <td><span class="badge bg-success">Aktif</span></td>
                            <td>21 Januari 2016</td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditUnitKerja"
                                    onclick="event.stopPropagation()">
                                    <i class="bi bi-pencil-square me-2"></i>
                                </a>
                                <i class="bi bi-trash" onclick="event.stopPropagation()"></i>

                            </td>
                        </tr>
                        <!-- Anak dari A -->
                        <tr class="child-row group-A" style="display: none;">
                            <td class="text-end pe-4"><strong>A01</strong></td>
                            <td>KOMITE MEDIK</td>
                            <td>KOMITE MEDIK</td>
                            <td>-</td>
                            <td><span class="badge bg-success">Aktif</span></td>
                            <td>21 Januari 2016</td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditUnitKerja"
                                    onclick="event.stopPropagation()">
                                    <i class="bi bi-pencil-square me-2"></i>
                                </a>
                                <i class="bi bi-trash" onclick="event.stopPropagation()"></i>
                            </td>
                        </tr>
                        <tr class="child-row group-A" style="display: none;">
                            <td class="text-end pe-4"><strong>A02</strong></td>
                            <td>KOMITE ETIK DAN HUKUM</td>
                            <td>KOMITE ETIK DAN HUKUM</td>
                            <td>-</td>
                            <td><span class="badge bg-success">Aktif</span></td>
                            <td>21 Januari 2016</td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditUnitKerja"
                                    onclick="event.stopPropagation()">
                                    <i class="bi bi-pencil-square me-2"></i>
                                </a>
                                <i class="bi bi-trash" onclick="event.stopPropagation()"></i>
                            </td>
                        </tr>
                        <!-- Induk B -->
                        <tr class="parent-row" data-child="group-B">
                            <td><span class="toggle-icon">▸</span> <strong>B</strong></td>
                            <td>DIREKTORAT SDM DAN PENDIDIKAN</td>
                            <td>DIREKTORAT SDM DAN PENDIDIKAN</td>
                            <td>DIRSDM</td>
                            <td><span class="badge bg-success">Aktif</span></td>
                            <td>21 Januari 2016</td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditUnitKerja"
                                    onclick="event.stopPropagation()">
                                    <i class="bi bi-pencil-square me-2"></i>
                                </a>
                                <i class="bi bi-trash" onclick="event.stopPropagation()"></i>
                            </td>
                        </tr>

                        <!-- Anak dari B -->
                        <tr class="child-row group-B" style="display: none;">
                            <td class="text-end pe-4"><strong>B01</strong></td>
                            <td>KOMITE SDM</td>
                            <td>KOMITE SDM</td>
                            <td>-</td>
                            <td><span class="badge bg-success">Aktif</span></td>
                            <td>21 Januari 2016</td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditUnitKerja"
                                    onclick="event.stopPropagation()">
                                    <i class="bi bi-pencil-square me-2"></i>
                                </a>
                                <i class="bi bi-trash" onclick="event.stopPropagation()"></i>
                            </td>
                        </tr>
                        <tr class="child-row group-B" style="display: none;">
                            <td class="text-end pe-4"><strong>B02</strong></td>
                            <td>KOMITE PENDIDIKAN</td>
                            <td>KOMITE PENDIDIKAN</td>
                            <td>-</td>
                            <td><span class="badge bg-success">Aktif</span></td>
                            <td>21 Januari 2016</td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditUnitKerja"
                                    onclick="event.stopPropagation()">
                                    <i class="bi bi-pencil-square me-2"></i>
                                </a>
                                <i class="bi bi-trash" onclick="event.stopPropagation()"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-end mt-3 page-tabel">
                <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Data Direksi -->
    <div class="modal fade" id="modalTambahUnitKerja" tabindex="-1" aria-labelledby="modalTambahUnitKerjaLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-column align-items-start">
                    <h6 class="modal-title" id="modalTambahUnitKerjaLabel">Tambah Unit Kerja</h6>
                    <small class="mt-1">Isi formulir berikut untuk menambahkan unit kerja baru</small>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Unit Kerja (Direksi)</label>
                            <select class="form-select">
                                <option>Unit Kerja A</option>
                                <option>Unit Kerja B</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Bagian</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama bagian">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Singular</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama singular">
                            <small class="text-muted">Jika kosong, akan menggunakan nama bagian</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Alternatif</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama alternatif (opsional)">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Status</label>
                            <select class="form-select">
                                <option selected>Aktif</option>
                                <option>Tidak Aktif</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                    <button class="btn text-white btn-simpan">Tambah</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Data Direksi -->
    <div class="modal fade" id="modalEditUnitKerja" tabindex="-1" aria-labelledby="modalEditUnitKerjaLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header flex-column align-items-start">
                    <h6 class="modal-title" id="modalEditUnitKerjaLabel">Edit Unit Kerja</h6>
                    <small class="mt-1">ID: A</small>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Bagian</label>
                            <input type="text" class="form-control" value="DIREKTUR UTAMA">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Singular</label>
                            <input type="text" class="form-control" value="DIREKTUR UTAMA">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Alternatif</label>
                            <input type="text" class="form-control" value="DIRUT">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Status</label>
                            <select class="form-select">
                                <option selected>Aktif</option>
                                <option>Tidak Aktif</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                    <button class="btn text-white btn-simpan">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container container-tabel rounded my-5 pt-2">
        <!-- Header Box -->
        <div class="p-4 rounded-top" style="background-color: #00B9AD; color: white;">
            <h5 class="mb-1">Manajemen Admin Unit Kerja RSHS Bandung</h5>
            <p class="mb-0">Kelola data unit kerja, struktur organisasi, dan admin unit kerja</p>
        </div>

        <!-- Filter & Action -->
        <div class="bg-white p-3 rounded-bottom shadow-sm">
            <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center mb-3 tombol-cari">
                <div class="d-flex flex-wrap gap-2 grup-tombol">
                    <button class="btn btn-tambah-pengaduan text-white btn-teal" data-bs-toggle="modal"
                        data-bs-target="#modalTambahAdmin">
                        <i class="bi bi-plus-circle"></i> Tambah Admin Unit Kerja
                    </button>
                    <select class="selectpicker" data-style="btn-reset">
                        <option>Semua Unit</option>
                        <option>Unit A</option>
                        <option>Unit B</option>
                        <option>Unit C</option>
                    </select>
                    <select class="selectpicker" data-style="btn-reset">
                        <option>Semua Status</option>
                        <option>Tervalidasi</option>
                        <option>Belum Tervalidasi</option>
                    </select>
                </div>
                <div class="input-group" style="width: 250px;">
                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control border-start-0" placeholder="Cari Unit Kerja...">
                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead class="border-bottom">
                        <tr class="text-nowrap">
                            <th>No Register</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Unit Kerja</th>
                            <th>NIP</th>
                            <th>Status</th>
                            <th>Tanggal Input</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>2104_00000200</strong></td>
                            <td>telkom</td>
                            <td>Mhs Telkom</td>
                            <td>Admin</td>
                            <td>123456</td>
                            <td><span class="badge bg-success">Tervalidasi</span></td>
                            <td>21 April 2021</td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalDetailAdmin">
                                    <i class="bi bi-eye me-2"></i>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditAdmin">
                                    <i class="bi bi-pencil-square me-2"></i>
                                </a>
                                <i class="bi bi-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>2104_00000201</strong></td>
                            <td>admin_farmasi</td>
                            <td>Admin Farmasi</td>
                            <td>Admin</td>
                            <td>234567</td>
                            <td><span class="badge bg-success">Tervalidasi</span></td>
                            <td>10 Mei 2022</td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalDetailAdmin">
                                    <i class="bi bi-eye me-2"></i>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditAdmin">
                                    <i class="bi bi-pencil-square me-2"></i>
                                </a>
                                <i class="bi bi-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>2104_00000202</strong></td>
                            <td>admin_igd</td>
                            <td>Admin IGD</td>
                            <td>Admin</td>
                            <td>345678</td>
                            <td><span class="badge bg-warning">Belum Tervalidasi</span></td>
                            <td>05 Jan 2023</td>
                            <td>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalDetailAdmin">
                                    <i class="bi bi-eye me-2"></i>
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalEditAdmin">
                                    <i class="bi bi-pencil-square me-2"></i>
                                </a>
                                <i class="bi bi-trash"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-end mt-3 page-tabel">
                <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Admin Unit Kerja -->
    <div class="modal fade" id="modalTambahAdmin" tabindex="-1" aria-labelledby="modalTambahAdminLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header flex-column align-items-start">
                    <h6 class="modal-title" id="modalTambahAdminLabel">Tambah Admin Unit Kerja</h6>
                    <small class="mt-1">Isi formulir berikut untuk menambahkan unit kerja baru</small>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Username</label>
                            <input type="text" class="form-control" placeholder="Masukkan username">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Password Sementara</label>
                            <input type="password" class="form-control" placeholder="Masukkan password sementara">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama lengkap">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Unit Kerja</label>
                            <select class="form-select">
                                <option selected disabled>Pilih unit kerja</option>
                                <option>Farmasi</option>
                                <option>IGD</option>
                                <option>Radiologi</option>
                            </select>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">NIP</label>
                                <input type="text" class="form-control" placeholder="Masukkan NIP">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">No. Telepon</label>
                                <input type="text" class="form-control" placeholder="Masukkan nomor telepon">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Kode Spesial</label>
                            <input type="text" class="form-control" placeholder="Masukkan kode spesial">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                    <button class="btn text-white btn-simpan">Tambah Pengaduan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail Admin Unit Kerja -->
    <div class="modal fade" id="modalDetailAdmin" tabindex="-1" aria-labelledby="modalDetailAdminLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-body p-4">
                    <h6 class="mb-1 fw-bold">Detail Admin Unit Kerja</h6>
                    <small class="text-muted d-block mb-3">No. Register: 2104_00000200</small>

                    <div class="row mb-2">
                        <div class="col-md-6"><strong>Username</strong><br>telkom</div>
                        <div class="col-md-6"><strong>Nama</strong><br>Mhs Telkom</div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-6"><strong>Unit Kerja</strong><br>admin</div>
                        <div class="col-md-6"><strong>No. Telepon</strong><br>088888888</div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-6"><strong>NIP</strong><br>123456</div>
                        <div class="col-md-6"><strong>Kode Spesial</strong><br>-</div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-6"><strong>Unit Kerja</strong><br>-</div>
                        <div class="col-md-6"><strong>Tanggal Update</strong><br>15 Nov 2021</div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6"><strong>Status Validasi</strong><br>
                            <span class="badge bg-success">Tervalidasi</span>
                        </div>
                        <div class="col-md-6"><strong>Tanggal Input</strong><br>21 Apr 2021</div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <button class="btn btn-outline-danger" data-bs-dismiss="modal">Tutup</button>
                        <button class="btn btn-simpan">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Edit Admin Unit Kerja -->
    <div class="modal fade" id="modalEditAdmin" tabindex="-1" aria-labelledby="modalEditAdminLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-body p-4">
                    <h6 class="mb-1 fw-bold">Edit Admin Unit Kerja</h6>
                    <small class="text-muted mb-3 d-block">No. Register: 2104_00000200</small>

                    <form>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Username</label>
                            <input type="text" class="form-control" value="telkom">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Lengkap</label>
                            <input type="text" class="form-control" value="Mhs Telkom">
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">NIP</label>
                                <input type="text" class="form-control" value="123456">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">No. Telepon</label>
                                <input type="text" class="form-control" value="088888888">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Unit Kerja</label>
                            <select class="form-select">
                                <option selected disabled>Pilih unit kerja</option>
                                <option>Farmasi</option>
                                <option>IGD</option>
                                <option>Radiologi</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Status Validasi</label>
                            <select class="form-select">
                                <option>Tervalidasi</option>
                                <option>Belum Tervalidasi</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-simpan">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.parent-row').forEach(row => {
            row.addEventListener('click', function () {
                const group = this.dataset.child;
                const icon = this.querySelector('.toggle-icon');
                const children = document.querySelectorAll(`.child-row.${group}`);
                children.forEach(child => {
                    const visible = child.style.display !== 'none';
                    child.style.display = visible ? 'none' : '';
                });
                icon.textContent = icon.textContent === '▸' ? '▾' : '▸';
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navbarFetchUrl = "{{ route('internal.humasNavbar') }}";

            fetch(navbarFetchUrl)
                .then((response) => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.text();
                })
                .then((data) => {
                    const navbarPlaceholder = document.getElementById("navbar-humas");
                    if (navbarPlaceholder) {
                        navbarPlaceholder.innerHTML = data;
                    } else {
                        console.error("Navbar placeholder element not found.");
                        return;
                    }

                    const currentPath = window.location.pathname;
                    const navLinks = navbarPlaceholder.querySelectorAll(".nav-link");

                    navLinks.forEach((link) => {
                        const linkPath = link.getAttribute("href");
                        try {
                            const linkUrl = new URL(link.href);
                            if (linkUrl.pathname === currentPath) {
                                link.classList.add("active");
                            }
                        } catch (e) {
                            if (linkPath === currentPath) {
                                link.classList.add("active");
                            }
                        }
                    });
                })
                .catch((error) => console.error("Error loading the navbar:", error));
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>
</body>

</html>
