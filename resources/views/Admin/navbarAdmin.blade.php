<!-- Navbar -->
<link rel="stylesheet" href="{{ asset('assets\css\style.css') }}">

<style>
    .nav-admin-link:hover,
    .nav-admin-link:hover i {
        color: #267B84 !important;
    }
</style>

<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
    <div class="container-lg d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <a class="navbar-brand" href="dashboardAdmin.html">
            <img src="{{ asset('assets/images/logoRSHS.png') }}" alt="Logo" height="40" />
        </a>
        <!-- Tombol -->
        <a href="{{ route('humas.daftarPelaporan') }}" class="nav-link text-dark fw-semibold d-flex align-items-center nav-admin-link">
            Halaman Admin
            <i class="bi bi-arrow-right ms-2"></i> </a>
    </div>
</nav>
