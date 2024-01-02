<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PPID UPGRISBA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
<!-- Spinner Start -->
<div id="spinner"
     class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid bg-dark py-2 d-none d-md-flex">
    <div class="container">
        <div class="d-flex justify-content-between topbar">
            <div class="top-info">
                <small class="me-3 text-white-50"><a href="#"><i class="fas fa-map-marker-alt me-2 text-secondary"></i></a>Jl.
                    Gunung Pangilun</small>
                <small class="me-3 text-white-50"><a href="#"><i class="fas fa-envelope me-2 text-secondary"></i></a>info@upgrisba.ac.id</small>
            </div>
            <div id="note" class="text-secondary d-none d-xl-flex"><small>Website Resmi Layanan Informasi Publik
                    Universitas PGRI Sumatera Barat</small></div>
            <div class="top-link">
                <a href="https://www.facebook.com/upgrisba.ac.id/?locale=id_ID"
                   class="bg-light nav-fill btn btn-sm-square rounded-circle"><i
                        class="fab fa-facebook-f text-primary"></i></a>

                <a href="https://www.instagram.com/@upgrisba"
                   class="bg-light nav-fill btn btn-sm-square rounded-circle"><i
                        class="fab fa-instagram text-primary"></i></a>
                <a href="https://www.youtube.com/@STKIPPGRISumateraBarat"
                   class="bg-light nav-fill btn btn-sm-square rounded-circle me-0"><i
                        class="fab fa-youtube text-primary"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Navbar Start -->
<div class="container-fluid bg-primary">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-0">
            <a href="{{asset('/')}}" class="navbar-brand">
                <h1 class="text-white fw-bold d-block">PPID<span class="text-secondary">UPGRISBA</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-xl-auto p-0">
                    <span href="home" class="nav-item nav-link active text-secondary">Home</span>
                    <div class="nav-item dropdown">
                        <span class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</span>
                        <div class="dropdown-menu rounded">
                            <a href="tentang" class="dropdown-item">Tentang PPID UPGRISBA</a>
                            <a href="profil" class="dropdown-item">Profil Singkat PPID UPGRISBA</a>
                            <a href="visimisi" class="dropdown-item">Visi dan Misi PPID UPGRISBA</a>
                            <a href="tupok" class="dropdown-item">Tugas Pokok dan Fungsi PPID UPGRISBA</a>
                            <a href="struktur" class="dropdown-item">Struktur Organisasi PPID UPGRISBA</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <span class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi Publik</span>
                        <div class="dropdown-menu rounded">
                            <a href="infoberkala" class="dropdown-item">Informasi yang Disediakan Secara Berkala</a>
                            <a href="infosetiapsaat" class="dropdown-item">Informasi yang Disediakan Secara Setiap
                                Saat</a>
                            <a href="infosertamerta" class="dropdown-item">Informasi yang Disediakan Secara
                                Serta-Merta</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <span class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Standar Layanan</span>
                        <div class="dropdown-menu rounded">
                            <a href="maklumat" class="dropdown-item">Maklumat Pelayanan Informasi Publik</a>
                            <a href="regulasi" class="dropdown-item">Regulasi</a>
                            <a href="sop" class="dropdown-item">SOP Layanan Informasi</a>
                            <a href="jadwal" class="dropdown-item">Jadwal Layanan Informasi</a>
                            <a href="fasilitas" class="dropdown-item">Fasilitas / Kelengkapan Layanan Informasi
                                Publik</a>
                            <a href="biaya" class="dropdown-item">Biaya Layanan Informasi</a>
                            <a href="panduan" class="dropdown-item">Panduan Layanan Disabilitas</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <span class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan Informasi</span>
                        <div class="dropdown-menu rounded">
                            <a href="laporan" class="dropdown-item">Laporan Layanan Informasi</a>
                            <a href="alurlayanan" class="dropdown-item">Alur dan Prosedur Layanan Informasi</a>
                            <a href="alurkeberatan" class="dropdown-item">Alur dan Prosedur Keberatan Pengajuan Atas
                                Informasi</a>
                            <a href="alurpengajuan" class="dropdown-item">Alur dan Prosedur Pengajuan Sengketa Ke Komisi
                                Informasi</a>
                            <a href="tatacara" class="dropdown-item">Tata Cara Pengaduan Penyalahgunaan atau
                                Pelanggaran</a>
                            <a href="mediacetak" class="dropdown-item">Kumpulan Informasi Melalui Media Cetak</a>
                            <a href="mediaonline" class="dropdown-item">Kumpulan Informasi Melalui Media Online</a>
                            <a href="dokumen" class="dropdown-item">Dokumen - Dokumen Informasi</a>

                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="d-flex align-items-center justify-content-center ms-4 ">
                <a href="#"><i class="bi bi-search text-white fa-2x"></i> </a>
            </div>--}}
        </nav>
    </div>
</div>
<!-- Navbar End -->
