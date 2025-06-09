<!-- Navbar -->
<link rel="stylesheet" href="{{ asset('assets\css\style.css') }}">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-lg">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('humas.daftarPelaporan') }}">
            <img src="{{ asset('assets/images/logoRSHS.png') }}" alt="Logo" height="40" />
        </a>

        <!-- Toggler button -->
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu"
            aria-controls="mobileMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Desktop Menu -->
        <div class="collapse navbar-collapse d-none d-lg-flex justify-content-between" id="navbarContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('humas.daftarPelaporan') }}">Daftar
                        Pelaporan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('humas.unitKerja') }}">Unit Kerja</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('humas.direksi') }}">Direksi</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('humas.dataReferensi') }}">Data Referensi</a>
                </li>
            </ul>
            <!-- Desktop Icon -->
            <div class="d-none d-lg-flex gap-2">
                <button class="btn btn-link" type="button">
                    <i class="bi bi-bell offcanvas-icons"></i>
                </button>
                <button class="btn btn-link" type="button">
                    <i class="bi bi-person offcanvas-icons"></i>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Offcanvas for mobile -->
<div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
        <img src="images/logoRSHS.png" alt="Logo" height="40" />
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
        </button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-between">
        <!-- Navigation Links -->
        <ul class="navbar-nav text-center">
            <li class="nav-item"><a class="nav-link" href="daftarPelaporan.html">Daftar Pelaporan</a></li>
            <li class="nav-item"><a class="nav-link" href="unitKerja.html">Unit Kerja</a></li>
            <li class="nav-item"><a class="nav-link" href="direksi.html">Direksi</a></li>
            <li class="nav-item"><a class="nav-link" href="dataReferensi.html">Data Referensi</a></li>
        </ul>

        <!-- Divider + Icons at Bottom -->
        <div class="mt-auto pt-3">
            <hr class="my-3" />
            <div class="d-flex justify-content-center gap-4 pb-3">
                <button class="btn btn-link" type="button">
                    <i class="bi bi-bell offcanvas-icons"></i>
                </button>
                <button class="btn btn-link" type="button">
                    <i class="bi bi-person offcanvas-icons"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Script untuk mendeteksi halaman aktif -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const currentPage = window.location.pathname.split("/").pop() || "index.html";

        function setActiveNavItem() {
            const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

            navLinks.forEach(link => {
                link.classList.remove("active");

                const href = link.getAttribute("href");

                if (href === currentPage ||
                    (link.textContent.trim() === "Daftar Pelaporan" &&
                        (currentPage === "index.html" || currentPage === ""))) {
                    link.classList.add("active");
                }
            });
        }

        setActiveNavItem();
    });
</script>
