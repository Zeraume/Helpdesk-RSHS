<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Data Referensi Humas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">
    <style>

    </style>
</head>

<body>
    {{-- Navbar --}}
    <div class="sticky-top" id="navbar-humas"></div>

    <!-- Tabs -->
    <div class="container mt-5">
        <div class="custom-tab p-1">
            <ul class="nav nav-tabs w-100 border-0" role="tablist">
                <li class="nav-item" role="presentation" style="flex: 1;">
                    <a class="nav-link active fw-semibold text-center" id="tab-klasifikasi-tab" data-bs-toggle="tab"
                        href="#tab-klasifikasi" role="tab" aria-controls="tab-klasifikasi" aria-selected="true">
                        Klasifikasi Pengaduan & Jenis Media
                    </a>
                </li>
                <li class="nav-item" role="presentation" style="flex: 1;">
                    <a class="nav-link fw-semibold text-center" id="tab-penyelesaian-tab"
                        data-bs-toggle="tab" href="#tab-penyelesaian" role="tab" aria-controls="tab-penyelesaian"
                        aria-selected="false">
                        Penyelesaian Pengaduan & Jenis Laporan
                    </a>
                </li>
            </ul>
        </div>

        <div class="tab-content mt-4">

            <div class="tab-pane fade show active" id="tab-klasifikasi" role="tabpanel"
                aria-labelledby="tab-klasifikasi-tab">

                <div class="container-tabel rounded mt-5">
                    <div class="p-4 rounded-top" style="background-color: #00B9AD; color: white;">
                        <h5 class="mb-1">Klasifikasi Pengaduan</h5>
                        <p class="mb-0">Kelola daftar klasifikasi pengaduan yang digunakan dalam sistem</p>
                    </div>
                    <div class="bg-white p-3 rounded-bottom">
                        <div class="d-flex flex-column flex-md-row gap-2 align-items-start mb-3" style="max-width: 100%;">
                            <input type="text" class="form-control" placeholder="Masukkan Klasifikasi Pengaduan Baru" style="max-width: 400px;">
                            <button class="btn btn-tambah-pengaduan text-white">
                                <i class="bi bi-plus-circle me-1"></i> Tambah
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th>ID Klasifikasi</th>
                                        <th>Klasifikasi Pengaduan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>20250415000001</strong></td>
                                        <td class="text-uppercase"><span class="editable-text">ETIK</span><input type="text" class="form-control form-control-sm editable-input d-none" value="ETIK"></td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td><div class="view-mode-actions"><a href="#" class="btn-inline-edit me-2" title="Edit"><i class="bi bi-pencil-square"></i></a><a href="#" class="btn-inline-delete text-danger" title="Hapus"><i class="bi bi-trash"></i></a></div><div class="edit-mode-actions d-none"><a href="#" class="btn-inline-save text-success me-2" title="Simpan"><i class="bi bi-check-lg fs-5"></i></a><a href="#" class="btn-inline-cancel text-danger" title="Batal"><i class="bi bi-x-lg fs-5"></i></a></div></td>
                                    </tr>
                                    <tr>
                                        <td><strong>20250415000002</strong></td>
                                        <td class="text-uppercase"><span class="editable-text">SPONSORSHIP</span><input type="text" class="form-control form-control-sm editable-input d-none" value="GRATIFIKASI"></td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td><div class="view-mode-actions"><a href="#" class="btn-inline-edit me-2"><i class="bi bi-pencil-square"></i></a><a href="#" class="btn-inline-delete text-danger"><i class="bi bi-trash"></i></a></div><div class="edit-mode-actions d-none"><a href="#" class="btn-inline-save text-success me-2"><i class="bi bi-check-lg fs-5"></i></a><a href="#" class="btn-inline-cancel text-danger"><i class="bi bi-x-lg fs-5"></i></a></div></td>
                                    </tr>
                                    <tr>
                                        <td><strong>20250415000003</strong></td>
                                        <td class="klasifikasi-cell text-uppercase"><span class="editable-text">GRATIFIKASI</span><input type="text" class="form-control form-control-sm editable-input d-none" value="GRATIFIKASI"></td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td><div class="view-mode-actions"><a href="#" class="btn-inline-edit me-2"><i class="bi bi-pencil-square"></i></a><a href="#" class="btn-inline-delete text-danger"><i class="bi bi-trash"></i></a></div><div class="edit-mode-actions d-none"><a href="#" class="btn-inline-save text-success me-2"><i class="bi bi-check-lg fs-5"></i></a><a href="#" class="btn-inline-cancel text-danger"><i class="bi bi-x-lg fs-5"></i></a></div></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end mt-3 page-tabel">
                            <nav aria-label="Page navigation example"><ul class="pagination mb-0"><li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li><li class="page-item active"><a class="page-link" href="#">1</a></li><li class="page-item"><a class="page-link" href="#">2</a></li><li class="page-item"><a class="page-link" href="#">3</a></li><li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li></ul></nav>
                        </div>
                    </div>
                </div>

                <div class="container-tabel rounded mt-5 mb-5">
                    <div class="p-4 rounded-top" style="background-color: #00B9AD; color: white;">
                        <h5 class="mb-1">Jenis Media</h5>
                        <p class="mb-0">Kelola daftar jenis media yang digunakan untuk pengaduan</p>
                    </div>
                    <div class="bg-white p-3 rounded-bottom">
                        <div class="d-flex flex-column flex-md-row gap-2 align-items-start mb-3" style="max-width: 100%;">
                            <input type="text" class="form-control" placeholder="Masukkan Jenis Pengaduan Baru" style="max-width: 400px;">
                            <button class="btn btn-tambah-pengaduan text-white">
                                <i class="bi bi-plus-circle me-1"></i> Tambah
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead class="border-bottom">
                                    <tr class="text-nowrap">
                                        <th>Jenis Media</th>
                                        <th class="text-end ps-5">Status</th>
                                        <th class="text-end pe-4">Aksi</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-uppercase"><span class="editable-text">SMS HOTLINE</span><input type="text" class="form-control form-control-sm editable-input d-none" value="SMS HOTLINE"></td>
                                        <td class="text-end"><span class="badge bg-success">Aktif</span></td>
                                        <td class="text-end pe-2"><div class="view-mode-actions d-inline-block"><a href="#" class="btn-inline-edit me-2"><i class="bi bi-pencil-square"></i></a><a href="#" class="btn-inline-delete text-danger"><i class="bi bi-trash"></i></a></div><div class="edit-mode-actions d-inline-block d-none"><a href="#" class="btn-inline-save text-success me-2"><i class="bi bi-check-lg fs-5"></i></a><a href="#" class="btn-inline-cancel text-danger"><i class="bi bi-x-lg fs-5"></i></a></div></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-uppercase"><span class="editable-text">KOTAK SARAN</span><input type="text" class="form-control form-control-sm editable-input d-none" value="KOTAK SARAN"></td>
                                        <td class="text-end"><span class="badge bg-success">Aktif</span></td>
                                        <td class="text-end pe-2"><div class="view-mode-actions d-inline-block"><a href="#" class="btn-inline-edit me-2"><i class="bi bi-pencil-square"></i></a><a href="#" class="btn-inline-delete text-danger"><i class="bi bi-trash"></i></a></div><div class="edit-mode-actions d-inline-block d-none"><a href="#" class="btn-inline-save text-success me-2"><i class="bi bi-check-lg fs-5"></i></a><a href="#" class="btn-inline-cancel text-danger"><i class="bi bi-x-lg fs-5"></i></a></div></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-uppercase"><span class="editable-text">EMAIL</span><input type="text" class="form-control form-control-sm editable-input d-none" value="EMAIL"></td>
                                        <td class="text-end"><span class="badge bg-success">Aktif</span></td>
                                        <td class="text-end pe-2"><div class="view-mode-actions d-inline-block"><a href="#" class="btn-inline-edit me-2"><i class="bi bi-pencil-square"></i></a><a href="#" class="btn-inline-delete text-danger"><i class="bi bi-trash"></i></a></div><div class="edit-mode-actions d-inline-block d-none"><a href="#" class="btn-inline-save text-success me-2"><i class="bi bi-check-lg fs-5"></i></a><a href="#" class="btn-inline-cancel text-danger"><i class="bi bi-x-lg fs-5"></i></a></div></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-uppercase"><span class="editable-text">INSTAGRAM</span><input type="text" class="form-control form-control-sm editable-input d-none" value="INSTAGRAM"></td>
                                        <td class="text-end"><span class="badge bg-success">Aktif</span></td>
                                        <td class="text-end pe-2"><div class="view-mode-actions d-inline-block"><a href="#" class="btn-inline-edit me-2"><i class="bi bi-pencil-square"></i></a><a href="#" class="btn-inline-delete text-danger"><i class="bi bi-trash"></i></a></div><div class="edit-mode-actions d-inline-block d-none"><a href="#" class="btn-inline-save text-success me-2"><i class="bi bi-check-lg fs-5"></i></a><a href="#" class="btn-inline-cancel text-danger"><i class="bi bi-x-lg fs-5"></i></a></div></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-uppercase"><span class="editable-text">HUMAS</span><input type="text" class="form-control form-control-sm editable-input d-none" value="HUMAS"></td>
                                        <td class="text-end"><span class="badge bg-success">Aktif</span></td>
                                        <td class="text-end pe-2"><div class="view-mode-actions d-inline-block"><a href="#" class="btn-inline-edit me-2"><i class="bi bi-pencil-square"></i></a><a href="#" class="btn-inline-delete text-danger"><i class="bi bi-trash"></i></a></div><div class="edit-mode-actions d-inline-block d-none"><a href="#" class="btn-inline-save text-success me-2"><i class="bi bi-check-lg fs-5"></i></a><a href="#" class="btn-inline-cancel text-danger"><i class="bi bi-x-lg fs-5"></i></a></div></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end mt-3 page-tabel">
                            <nav aria-label="Page navigation example"><ul class="pagination mb-0"><li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li><li class="page-item active"><a class="page-link" href="#">1</a></li><li class="page-item"><a class="page-link" href="#">2</a></li><li class="page-item"><a class="page-link" href="#">3</a></li><li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li></ul></nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="tab-penyelesaian" role="tabpanel" aria-labelledby="tab-penyelesaian-tab">

                <div class="container-tabel rounded mt-5">
                    <div class="p-4 rounded-top" style="background-color: #00B9AD; color: white;">
                        <h5 class="mb-1">Penyelesaian Pengaduan</h5>
                        <p class="mb-0">Kelola daftar jenis penyelesaian pengaduan yang digunakan dalam sistem</p>
                    </div>
                    <div class="bg-white p-3 rounded-bottom">
                        <div class="d-flex flex-column flex-md-row gap-2 align-items-start mb-3" style="max-width: 100%;">
                            <input type="text" class="form-control" placeholder="Masukkan Jenis Penyelesaian Pengaduan Baru" style="max-width: 400px;">
                            <button class="btn btn-tambah-pengaduan text-white">
                                <i class="bi bi-plus-circle me-1"></i> Tambah
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th>ID Penyelesaian</th>
                                        <th>Penyelesaian Pengaduan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>20250415000001</strong></td>
                                        <td class="text-uppercase"><span class="editable-text">SUDAH DIBERIKAN SANKSI</span><input type="text" class="form-control form-control-sm editable-input d-none" value="SUDAH DIBERIKAN SANKSI"></td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td><div class="view-mode-actions d-inline-block"><a href="#" class="btn-inline-edit me-2"><i class="bi bi-pencil-square"></i></a><a href="#" class="btn-inline-delete text-danger"><i class="bi bi-trash"></i></a></div><div class="edit-mode-actions d-inline-block d-none"><a href="#" class="btn-inline-save text-success me-2"><i class="bi bi-check-lg fs-5"></i></a><a href="#" class="btn-inline-cancel text-danger"><i class="bi bi-x-lg fs-5"></i></a></div></td>
                                    </tr>
                                    <tr>
                                        <td><strong>20250415000002</strong></td>
                                        <td class="text-uppercase"><span class="editable-text">DIBINA</span><input type="text" class="form-control form-control-sm editable-input d-none" value="DIBINA"></td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td><div class="view-mode-actions d-inline-block"><a href="#" class="btn-inline-edit me-2"><i class="bi bi-pencil-square"></i></a><a href="#" class="btn-inline-delete text-danger"><i class="bi bi-trash"></i></a></div><div class="edit-mode-actions d-inline-block d-none"><a href="#" class="btn-inline-save text-success me-2"><i class="bi bi-check-lg fs-5"></i></a><a href="#" class="btn-inline-cancel text-danger"><i class="bi bi-x-lg fs-5"></i></a></div></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end mt-3 page-tabel">
                            <nav aria-label="Page navigation example"><ul class="pagination mb-0"><li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li><li class="page-item active"><a class="page-link" href="#">1</a></li><li class="page-item"><a class="page-link" href="#">2</a></li><li class="page-item"><a class="page-link" href="#">3</a></li><li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li></ul></nav>
                        </div>
                    </div>
                </div>

                <div class="container-tabel rounded mt-5 mb-5">
                    <div class="p-4 rounded-top" style="background-color: #00B9AD; color: white;">
                        <h5 class="mb-1">Jenis Laporan</h5>
                        <p class="mb-0">Kelola daftar jenis laporan yang digunakan dalam sistem</p>
                    </div>
                    <div class="bg-white p-3 rounded-bottom">
                        <div class="d-flex flex-column flex-md-row gap-2 align-items-start mb-3" style="max-width: 100%;">
                            <input type="text" class="form-control" placeholder="Masukkan Jenis Laporan Baru" style="max-width: 400px;">
                            <button class="btn btn-tambah-pengaduan text-white">
                                <i class="bi bi-plus-circle me-1"></i> Tambah
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th>ID Jenis Laporan</th>
                                        <th>Jenis Laporan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>20250415000001</strong></td>
                                        <td class="text-uppercase"><span class="editable-text">APRESIASI</span><input type="text" class="form-control form-control-sm editable-input d-none" value="APRESIASI"></td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td><div class="view-mode-actions d-inline-block"><a href="#" class="btn-inline-edit me-2"><i class="bi bi-pencil-square"></i></a><a href="#" class="btn-inline-delete text-danger"><i class="bi bi-trash"></i></a></div><div class="edit-mode-actions d-inline-block d-none"><a href="#" class="btn-inline-save text-success me-2"><i class="bi bi-check-lg fs-5"></i></a><a href="#" class="btn-inline-cancel text-danger"><i class="bi bi-x-lg fs-5"></i></a></div></td>
                                    </tr>
                                    <tr>
                                        <td><strong>20250415000002</strong></td>
                                        <td class="text-uppercase"><span class="editable-text">KELUHAN</span><input type="text" class="form-control form-control-sm editable-input d-none" value="KELUHAN"></td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td><div class="view-mode-actions d-inline-block"><a href="#" class="btn-inline-edit me-2"><i class="bi bi-pencil-square"></i></a><a href="#" class="btn-inline-delete text-danger"><i class="bi bi-trash"></i></a></div><div class="edit-mode-actions d-inline-block d-none"><a href="#" class="btn-inline-save text-success me-2"><i class="bi bi-check-lg fs-5"></i></a><a href="#" class="btn-inline-cancel text-danger"><i class="bi bi-x-lg fs-5"></i></a></div></td>
                                    </tr>
                                    <tr>
                                        <td><strong>20250415000003</strong></td>
                                        <td class="text-uppercase"><span class="editable-text">INFORMASI</span><input type="text" class="form-control form-control-sm editable-input d-none" value="APRESIASI"></td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td><div class="view-mode-actions d-inline-block"><a href="#" class="btn-inline-edit me-2"><i class="bi bi-pencil-square"></i></a><a href="#" class="btn-inline-delete text-danger"><i class="bi bi-trash"></i></a></div><div class="edit-mode-actions d-inline-block d-none"><a href="#" class="btn-inline-save text-success me-2"><i class="bi bi-check-lg fs-5"></i></a><a href="#" class="btn-inline-cancel text-danger"><i class="bi bi-x-lg fs-5"></i></a></div></td>
                                    </tr>
                                    <tr>
                                        <td><strong>20250415000004</strong></td>
                                        <td class="text-uppercase"><span class="editable-text">PERTANYAAN</span><input type="text" class="form-control form-control-sm editable-input d-none" value="KELUHAN"></td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td><div class="view-mode-actions d-inline-block"><a href="#" class="btn-inline-edit me-2"><i class="bi bi-pencil-square"></i></a><a href="#" class="btn-inline-delete text-danger"><i class="bi bi-trash"></i></a></div><div class="edit-mode-actions d-inline-block d-none"><a href="#" class="btn-inline-save text-success me-2"><i class="bi bi-check-lg fs-5"></i></a><a href="#" class="btn-inline-cancel text-danger"><i class="bi bi-x-lg fs-5"></i></a></div></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end mt-3 page-tabel">
                            <nav aria-label="Page navigation example"><ul class="pagination mb-0"><li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li><li class="page-item active"><a class="page-link" href="#">1</a></li><li class="page-item"><a class="page-link" href="#">2</a></li><li class="page-item"><a class="page-link" href="#">3</a></li><li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li></ul></nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tables = document.querySelectorAll('.table');

            function switchToEditMode(row) {
                const text = row.querySelector('.editable-text');
                const input = row.querySelector('.editable-input');
                const viewActions = row.querySelector('.view-mode-actions');
                const editActions = row.querySelector('.edit-mode-actions');

                if (text && input && viewActions && editActions) {
                    input.value = text.textContent.trim();
                    input.dataset.originalValue = text.textContent.trim();

                    text.classList.add('d-none');
                    input.classList.remove('d-none');
                    input.focus();
                    input.select();

                    viewActions.classList.add('d-none');
                    editActions.classList.remove('d-none');
                    row.classList.add('editing-row');
                }
            }

            function switchToViewMode(row, newTextValue) {
                const text = row.querySelector('.editable-text');
                const input = row.querySelector('.editable-input');
                const viewActions = row.querySelector('.view-mode-actions');
                const editActions = row.querySelector('.edit-mode-actions');

                if (text && input && viewActions && editActions) {
                    if (typeof newTextValue === 'string') {
                        text.textContent = newTextValue.toUpperCase();
                    }

                    text.classList.remove('d-none');
                    input.classList.add('d-none');

                    viewActions.classList.remove('d-none');
                    editActions.classList.add('d-none');
                    row.classList.remove('editing-row');
                }
            }

            tables.forEach((table) => {
                table.addEventListener('click', function (event) {
                    const clicked = event.target.closest('a');
                    if (!clicked) return;

                    const row = clicked.closest('tr');
                    if (!row) return;

                    if (clicked.classList.contains('btn-inline-edit')) {
                        event.preventDefault();
                        const editingRow = table.querySelector('tr.editing-row');
                        if (editingRow && editingRow !== row) {
                            const currentInput = editingRow.querySelector('.editable-input');
                            switchToViewMode(editingRow, currentInput.dataset.originalValue);
                        }
                        switchToEditMode(row);
                    }

                    else if (clicked.classList.contains('btn-inline-save')) {
                        event.preventDefault();
                        const input = row.querySelector('.editable-input');
                        const newValue = input.value.trim();

                        if (newValue === "") {
                            alert("Kolom tidak boleh kosong.");
                            input.focus();
                            return;
                        }

                        const id = row.cells[0]?.textContent.trim();
                        console.log(`✅ Simpan perubahan: ID ${id}, Nilai baru: ${newValue}`);
                        switchToViewMode(row, newValue);
                    }

                    else if (clicked.classList.contains('btn-inline-cancel')) {
                        event.preventDefault();
                        const input = row.querySelector('.editable-input');
                        switchToViewMode(row, input.dataset.originalValue);
                    }

                    else if (clicked.classList.contains('btn-inline-delete')) {
                        event.preventDefault();
                        const text = row.querySelector('.editable-text');
                        const id = row.cells[0]?.textContent.trim();

                        if (confirm(`Akan menghapus: "${text.textContent.trim()}"?`)) {
                            console.log(`Hapus data: ID ${id}, Nilai: ${text.textContent.trim()}`);
                            alert('Simulasi: Data berhasil dihapus. Implementasikan backend sesuai kebutuhan.');
                        }
                    }
                });
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
