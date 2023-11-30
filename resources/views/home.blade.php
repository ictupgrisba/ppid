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
            <a href="index.html" class="navbar-brand">
                <h1 class="text-white fw-bold d-block">PPID<span class="text-secondary">UPGRISBA</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-xl-auto p-0">
                    <a href="home" class="nav-item nav-link active text-secondary">Home</a>
                    <div class="nav-item dropdown">
                        <a href="profil" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu rounded">
                            <a href="tentang" class="dropdown-item">Tentang PPID UPGRISBA</a>
                            <a href="profil" class="dropdown-item">Profil Singkat PPID UPGRISBA</a>
                            <a href="visimisi" class="dropdown-item">Visi dan Misi PPID UPGRISBA</a>
                            <a href="tupok" class="dropdown-item">Tugas Pokok dan Fungsi PPID UPGRISBA</a>
                            <a href="struktur" class="dropdown-item">Struktur Organisasi PPID UPGRISBA</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi Publik</a>
                        <div class="dropdown-menu rounded">
                            <a href="infoberkala" class="dropdown-item">Informasi yang Disediakan Secara Berkala</a>
                            <a href="infosetiapsaat" class="dropdown-item">Informasi yang Disediakan Secara Setiap
                                Saat</a>
                            <a href="infosertamerta" class="dropdown-item">Informasi yang Disediakan Secara
                                Serta-Merta</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Standar Layanan</a>
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
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan Informasi</a>
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


            <div class="d-flex align-items-center justify-content-center ms-4 ">
                <a href="#"><i class="bi bi-search text-white fa-2x"></i> </a>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
<!-- Carousel Start -->
<div class="container-fluid px-0">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="assets/img/10.jpg" class="img-fluid" alt="First slide">
                <div class="carousel-caption">
                    <div class="container carousel-content">
                        <h6 class="text-secondary h4 animated fadeInUp">Selamat Datang di Website</h6>
                        <h1 class="text-white display-1 mb-4 animated fadeInRight">Pejabat Pengelola Informasi dan
                            Dokumentasi (PPID) </h1>
                        <p class="mb-4 text-white fs-5 animated fadeInDown">Universitas PGRI Sumatera Barat</p>
                        <a href="" class="me-2">
                            <button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">
                                Permohonan Informasi Publik
                            </button>
                        </a>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/rektor.jpg" class="img-fluid" alt="Second slide">
                <div class="carousel-caption">
                    <div class="container carousel-content">
                        <h6 class="text-secondary h4 animated fadeInUp">Selamat Datang di Website</h6>
                        <h1 class="text-white display-1 mb-4 animated fadeInLeft">Pejabat Pengelola Informasi dan
                            Dokumentasi (PPID)</h1>
                        <p class="mb-4 text-white fs-5 animated fadeInDown">Universitas PGRI Sumatera Barat</p>
                        <a href="" class="me-2">
                            <button type="button"
                                    class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">
                                Permohonan Informasi Publik
                            </button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<!-- Fact Start -->
<div class="container-fluid bg-secondary py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-primary counter-value">24000</h1>
                    <h5 class="text-white mt-1">Alumni</h5>
                </div>
            </div>
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-primary counter-value">8000</h1>
                    <h5 class="text-white mt-1">Mahasiswa Aktif</h5>
                </div>
            </div>
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-primary counter-value">1850</h1>
                    <h5 class="text-white mt-1">Mahasiswa Baru </h5>
                </div>
            </div>
            <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                <div class="d-flex counter">
                    <h1 class="me-3 text-primary counter-value">267</h1>
                    <h5 class="text-white mt-1">Dosen</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->

<!-- About Start -->
<div class="container-fluid py-5 my-5">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                <div class="h-100 position-relative">
                    <img src="assets/img/campus.jpeg" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                    <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                        <img src="assets/img/pimpinan.jpg" class="img-fluid w-100 rounded" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                <h5 class="text-primary">Selamat Datang di</h5>
                <h1 class="mb-4">PPID Universitas PGRI Sumatera Barat</h1>
                <p>Sesuai amanat Undang-Undang (UU) Nomor: 14 Tahun 2008 tentang Keterbukaan Informasi Publik (KIP),
                    Universitas PGRI Sumatera Barat (UPGRISBA) sebagai badan publik berupaya memenuhi kebutuhan publik
                    akan informasi dengan membuat laman ppid.upgrisba.ac.id</p>
                <p class="mb-4">Layanan Informasi Publik UPGRISBA disediakan untuk memudahkan publik mendapatkan
                    informasi tentang UPGRISBA. Publik berhak mengajukan informasi publik yang dikelola oleh UPGRISBA
                    sesuai ketentuan-ketentuan yang berlaku. UPGRISBA melayani seluruh permohonan informasi melalui
                    Layanan Informasi Publik secara daring maupun luring.
                    UPGRISBA juga menyediakan berbagai informasi publik, yang dapat diakses dari laman website
                    ppid.upgrisba.ac.id maupun website upgrisba.ac.id.</p>

            </div>
        </div>
    </div>
</div>
<!-- About End -->
<?php
$blogs = [
    [
        "headline" => "services",
        "title" => "waktu pelayanan",
        "body" => "Pukul 08:00 sd 17:00 WIB",
        "img_url" => "assets/img/blog-1.jpg",
        "time" => "Senin - Jumat:" // nullable
    ],
    [
        "headline" => "informations",
        "title" => "informasi Publik",
        "body" => "Informasi publik bersifat <b>Terbuka</b> dan dapat diakses oleh setiap Pangguna Informasi Publik",
        "img_url" => "assets/img/blog-2.jpg",
        "time" => null
    ],
    [
        "headline" => "payments",
        "title" => "biaya layanan",
        "body" => "biaya layanan informasi publik adalah <b>GRATIS</b> kecuali biaya pengiriman, penggandaan dokumen atau media penyimpanan dibebankan kepada pemohon",
        "img_url" => "assets/img/blog-3.jpg",
        "time" => null
    ],
];
?>
    <!-- Blog Start -->
<div class="container-fluid blog py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Penyedia</h5>
            <h1>Layanan & Informasi</h1>
        </div>
        <div class="row g-5 justify-content-center">
            @foreach($blogs as $i => $blog)
                <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".{{$i +2}}s">
                    <div class="blog-item position-relative bg-light rounded">
                        <img src="{{$blog['img_url']}}" class="img-fluid w-100 rounded-top" alt="{{$blog['title']}}">
                        <span class="position-absolute px-4 py-3 bg-primary text-white rounded"
                              style="top: -28px; right: 20px;">{{ucfirst($blog['headline'])}}</span>
                        <div class="blog-content text-center position-relative px-3 py-3 pt-4">
                            <h5>{{ucfirst($blog['title'])}}</h5>
                            @if(!is_null($blog['time']))
                                <span class="text-secondary">{{$blog['time']}}</span>
                            @endif
                            <p class="py-2">{!! ucfirst($blog['body']) !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog End -->
<?php
$services = [
    [
        "icon" => "fa-user",
        "title" => "profil ppid",
        "detail_url" => "https://upgrisba.ac.id",
        "body" => "Pejabat Pengelola Informasi dan Dokumentasi" // nullable
    ],
    [
        "icon" => "fa-envelope",
        "title" => "dip",
        "detail_url" => "https://upgrisba.ac.id",
        "body" => "Daftar informasi Publik yang sudah dimutahirkan"
    ],
    [
        "icon" => "fa-book",
        "title" => "standar pelayanan",
        "detail_url" => "https://upgrisba.ac.id",
        "body" => "Pelayanan yang sudah distandarisasi"
    ],
    [
        "icon" => "fa-edit",
        "title" => "formulir online",
        "detail_url" => "https://upgrisba.ac.id",
        "body" => null
    ],
    [
        "icon" => "fa-bullhorn",
        "title" => "pelayanan informasi publik",
        "detail_url" => "https://upgrisba.ac.id",
        "body" => null
    ],
    [
        "icon" => "fa-lock",
        "title" => "informasi yang dikecualikan",
        "detail_url" => "https://upgrisba.ac.id",
        "body" => null
    ],
    [
        "icon" => "fa-wheelchair",
        "title" => "layanan disabilitas",
        "detail_url" => "https://upgrisba.ac.id",
        "body" => null
    ],
];
?>
    <!-- Services Start -->
<div class="container-fluid services py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Ketegori</h5>
            <h1>Layanan & Informasi</h1>
        </div>
        <div class="row g-5 justify-content-center services-inner">
            @foreach($services as $i => $service)
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".{{$i +2}}s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa {{$service['icon']}} fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">{{strtoupper($service['title'])}}</h4>
                                <p class="mb-4">{{ucwords($service['body'])}}</p>
                                <a href="{{$service['detail_url']}}"
                                   class="btn btn-secondary text-white px-5 py-3 rounded-pill">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Services End -->

<?php
$projects = [
    [
        "title" => "Informasi Yang Wajib",
        "body" => "Disediakan dan Dimumkan Secara Berkala",
        "img_url" => "assets/img/project-1.jpg",
        "detail_url" => "https://upgrisba.ac.id"
    ],
    [
        "title" => "Informasi Yang Wajib",
        "body" => "Tersedia Setiap Saat",
        "img_url" => "assets/img/project-2.jpg",
        "detail_url" => "https://upgrisba.ac.id"
    ],
    [
        "title" => "Informasi Yang Wajib",
        "body" => "Disediakan dan Diumumkan secara Serta Merta",
        "img_url" => "assets/img/project-3.jpg",
        "detail_url" => "https://upgrisba.ac.id"
    ],
    [
        "title" => "Informasi Publik",
        "body" => "Regulasi Pengelolaan Informasi Publik",
        "img_url" => "assets/img/project-4.jpg",
        "detail_url" => "https://upgrisba.ac.id"
    ],
];
?>
    <!-- Project Start -->
<div class="container-fluid project py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Informasi Publik</h5>
            <h1>Jenis-jenis Informasi Publik</h1>
        </div>
        <div class="row g-5 justify-content-center">
            @foreach($projects as $i => $project)
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".{{$i +2}}s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{$project['img_url']}}" class="img-fluid w-100 rounded"
                                 alt="{{$project['title']}}">
                            <div class="project-content">
                                <a href="{{$project['detail_url']}}" class="text-center">
                                    <h4 class="text-secondary">{{$project['title']}}</h4>
                                    <p class="m-0 text-white">{{$project['body']}}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Project End -->

<?php
$informations = [
    "maklumat_url" => "https://via.placeholder.com/150",
    "data" => [
        [
            "detail_url" => "https://upgrisba.ac.id",
            "body" => "Surat Edaran Komisi Informasi Pusat tentang Pelayanan Informasi dalam Masa Darurat Kesehatan Akibat COVID-19",
        ],
        [
            "detail_url" => "https://upgrisba.ac.id",
            "body" => "Struktur Organisasi",
        ],
        [
            "detail_url" => "https://upgrisba.ac.id",
            "body" => "Tugas dan Fungsi PPID",
        ],
        [
            "detail_url" => "https://upgrisba.ac.id",
            "body" => "Laporan Layanan Informasi Publik",
        ],
        [
            "detail_url" => "https://upgrisba.ac.id",
            "body" => "Kalender Akademik UPGRISBA",
        ],
        [
            "detail_url" => "https://upgrisba.ac.id",
            "body" => "Peraturan mengenai Keterbukaan Informasi Publik",
        ],
        [
            "detail_url" => "https://upgrisba.ac.id",
            "body" => "Penanganan Sengket Informasi Publik",
        ],
    ]
];
?>
    <!-- Information Start -->
<div class="container-fluid project py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Informasi</h5>
            <h1>Jenis-jenis Informasi</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-8">
                <div class="row g-2">
                    @for($i = 0; $i < count($informations['data']); $i++)
                        <div class="col-md-6 wow fadeIn" data-wow-delay=".{{$i +2}}s">
                            <div class="mx-2 py-1 border-primary border-bottom border-3">
                                <a href="{{$informations['data'][$i]['detail_url']}}">
                                    {{ucfirst($informations['data'][$i]['body'])}}
                                </a>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{$informations['maklumat_url']}}" class="img-fluid w-100 rounded" alt="Maklumat">
            </div>
        </div>
    </div>
</div>
<!-- Information End -->

<?php
$policies = [
    [
        "body" => "Peraturan Menteri Pendidikan Dan Kebudayaan Republik Indonesia <a>Nomor 2 Tahun 2020</a> Tentang Tata Cara Pelaksanaan Uji Kompetensi Mahasiswa Bidang Kesehatan (Jenis : Informasi Setiap Saat)",
        "file_url" => "assets/img/project-1.pdf", // nullable
        "detail_url" => "https://upgrisba.ac.id", // nullable
        "children" => null // nullable
    ],
    [
        "body" => "Peraturan Menteri Pendidikan Dan Kebudayaan Republik Indonesia <a>Nomor 3 Tahun 2020</a> Tentang Standar Nasional Pendidikan Tinggi (Jenis : Informasi Setiap Saat)",
        "file_url" => "assets/img/project-1.pdf", // nullable
        "detail_url" => "https://upgrisba.ac.id", // nullable
        "children" => null
    ],
    [
        "body" => "Peraturan Menteri Pendidikan Dan Kebudayaan Republik Indonesia Nomor 5 Tahun 2020 Tentang Akreditasi Program Studi Dan Perguruan Tinggi (Jenis : Informasi Setiap Saat)",
        "file_url" => "assets/img/project-1.pdf", // nullable
        "detail_url" => "https://upgrisba.ac.id", // nullable
        "children" => null
    ],
    [
        "body" => "Peraturan Menteri Pendidikan Dan Kebudayaan Republik Indonesia Nomor 6 Tahun 2020 Tentang Penerimaan Mahasiswa Baru Program Sarjana Pada Perguruan Tinggi Negeri (Jenis : Informasi Setiap Saat)",
        "file_url" => "assets/img/project-1.pdf", // nullable
        "detail_url" => "https://upgrisba.ac.id", // nullable
        "children" => null
    ],
    [
        "body" => "Peraturan Menteri Pendidikan Dan Kebudayaan Republik Indonesia Nomor 7 Tahun 2020 Tentang Pendirian, Perubahan, Pembubaran Perguruan Tinggi Negeri, Dan Pendirian, Perubahan, Pencabutan Izin Perguruan Tinggi Swasta (Jenis : Informasi Setiap Saat)",
        "file_url" => "assets/img/project-1.pdf", // nullable
        "detail_url" => "https://upgrisba.ac.id", // nullable
        "children" => null
    ],
    [
        "body" => "Pedoman Pengelolaan Kepegawaian",
        "file_url" => null,
        "detail_url" => null,
        "children" => [
            [
                "body" => "Permenristekdikti Nomor 98 Tahun 2016, Tentang Pemberian Kuasa dan Delegasi Wewenang Pelaksanaan Kegiatan Administrasi Kepegawaian Kepada Pejabat Tertentu di Lingkungan Kemenristekdikti",
                "file_url" => "assets/img/project-1.pdf",
                "detail_url" => "https://upgrisba.ac.id",
                "children" => null
            ],
            [
                "body" => "Permenristekdikti Nomor 8 Tahun 2018, Tata Cara Pengangkatan Pegawai Negeri Sipil dalam Jabatan Fungsional Dosen melalui Penyesuaian atau Impasing",
                "file_url" => "assets/img/project-1.pdf",
                "detail_url" => "https://upgrisba.ac.id",
                "children" => null
            ],
            [
                "body" => "Permenristekdikti Nomor 38 Tahun 2016, Tentang Tata Cara Pengangkatan dan Pemberhentian Dosen dan Tenaga Kependidikan sebagai Pegawai Pemerintah dengan Perjanjian Kerja",
                "file_url" => "assets/img/project-1.pdf",
                "detail_url" => "https://upgrisba.ac.id",
                "children" => null
            ],
            [
                "body" => "Permenristekdikti Nomor 14 Tahun 2019, Tentang Pelaksanaan Pemberian Tunjangan Kinerja Pegawai di Lingkungan Kemenristekdikti",
                "file_url" => "assets/img/project-1.pdf",
                "detail_url" => "https://upgrisba.ac.id",
                "children" => null
            ],
            [
                "body" => "Permenristekdikti Nomor 19 Tahun 2017, Tentang Pengangkatan Pemberhentian Pemimpin PTN",
                "file_url" => "assets/img/project-1.pdf",
                "detail_url" => "https://upgrisba.ac.id",
                "children" => null
            ],
            [
                "body" => "Permenristekdikti Nomor 91 Tahun 2017, Tentang Perpindahan Dosen dan Alih Tugas PNS Non Dosen menjadi Dosen",
                "file_url" => "assets/img/project-1.pdf",
                "detail_url" => "https://upgrisba.ac.id",
                "children" => null
            ]
        ]
    ]
];
$policy_cover_url = "https://ppid.unp.ac.id/wp-content/uploads/2020/02/hukum.jpg";
?>
    <!-- Policy Start -->
<div class="container-fluid project py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Peraturan</h5>
            <h1>Peraturan-peraturan Terbaru</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="row g-4">
                    @for($i = 0; $i < 3; $i++)
                        <div class="col-md-12 wow fadeIn" data-wow-delay=".{{$i +2}}s">
                            <ul style="list-style-position: outside;">
                                <li>{!! ucfirst($policies[$i]['body']) !!}</li>
                                <li style="list-style-type: none;">
                                    <a class="btn btn-outline-dark float-end" href="{{$policies[$i]['detail_url']}}">Unduh</a>
                                </li>
                            </ul>
                        </div>
                    @endfor
                    <a href="{{$policies[$i]['detail_url']}}"><i class="fa fa-plus mb-4 text-primary"></i> Selengkapnya</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{$policy_cover_url}}" class="img-fluid w-100 rounded wow fadeIn" alt="Maklumat"
                     data-wow-delay=".7s">
            </div>
        </div>
    </div>
</div>
<!-- Policy End -->

<!-- Schedule Start -->
<div class="container-fluid blog py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".1s" style="max-width: 600px;">
            <h5 class="text-primary">Jadwal</h5>
            <h1>Agenda Kegiatan</h1>
        </div>
        <div class="row g-4">
            @for($i = 0; $i < 4; $i++)
                <div class="col-md-3 wow fadeIn" data-wow-delay=".{{$i +2}}s">
                    <div class="blog-item position-relative bg-light rounded">
                        <div class="blog-content text-center position-relative px-3 py-3 pt-4">
                            <h5>Title</h5>
                            <span class="text-secondary">Time</span>
                            <p class="py-2">Body</p>
                        </div>
                    </div>
                </div>
            @endfor
            <a href="#"><i class="fa fa-plus mb-4 text-primary"></i> Selengkapnya</a>
        </div>
    </div>
</div>
<!-- Schedule End -->
    <!-- News Start -->
<div class="container-fluid testimonial py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Berita</h5>
            <h1>Kilas Berita UPGRISBA</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
            @for($i = 0; $i < 4; $i++)
                <div class="testimonial-item border">
                    <img class="img-fluid" src="https://via.placeholder.com/150" alt="">
                    <div class="border-top p-4 mx-4 align-items-center">
                        <h4 class="text-secondary">Tujuan pengguna informasi Publik dan keterbukaan informasi publik</h4>
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
<!-- News End -->

<!-- Videos Start -->
<div class="container-fluid testimonial py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Video</h5>
            <h1>Video UPGRISBA</h1>
        </div>
        <div class="row wow fadeIn" data-wow-delay=".5s">
            @for($i = 0; $i < 2; $i++)
                <div class="col-md-6">
                    <iframe
                        width="100%"
                        height="200"
                        src="https://www.youtube.com/embed/u747MN9_1-Q?si=hRlrXIjZPh9zoECU"
                        title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            @endfor
        </div>
    </div>
</div>
<!-- Videos End -->

<?php
$aspirations = [
    [
        "title" => "Lapor!",
        "body" => "Sampaikan aspirasi dan pengaduan secara online",
        "img_url" => "assets/img/project-1.jpg",
        "detail_url" => "https://upgrisba.ac.id"
    ],
    [
        "title" => "Formulir Informasi dan Keberatan",
        "body" => "Dapatkan formulir online Tentang Pengajuan Informasi dan Keberatan",
        "img_url" => "assets/img/project-2.jpg",
        "detail_url" => "https://upgrisba.ac.id"
    ],
    [
        "title" => "Informasi Mahasiswa Baru",
        "body" => "Dapatkan Informasi Penerimaan Mahasiswa Baru Universitas PGRI Sumatera Barat",
        "img_url" => "assets/img/project-3.jpg",
        "detail_url" => "https://pmb.upgrisba.ac.id"
    ]
];
?>
    <!-- Aspiration Start -->
<div class="container-fluid project py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-danger">Aspirasi Publik</h5>
            <h1>Jenis-jenis Aspirasi Publik</h1>
        </div>
        <div class="row g-5">
            @foreach($aspirations as $i => $aspiration)
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".{{$i +2}}s">
                    <div class="aspiration-item">
                        <div class="aspiration-img">
                            <img src="{{$aspiration['img_url']}}" class="img-fluid w-100 rounded"
                                 alt="{{$aspiration['title']}}">
                            <div class="aspiration-content">
                                <a href="{{$aspiration['detail_url']}}" class="text-center">
                                    <h4 class="text-secondary">{{$aspiration['title']}}</h4>
                                    <p class="m-0 text-white">{{$aspiration['body']}}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Aspiration End -->

<!-- Gallery Start -->
<div class="container-fluid project py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-danger">Gallery</h5>
            <h1>Gallery Foto UPGRISBA</h1>
        </div>
        <div class="row g-2 align-content-center align-items-center justify-content-center">
            @for($i = 0; $i < 10; $i++)
                <div class="col-md-3 mx-1 img-thumbnail">
                    <img class="img-fluid img-fit-cover" src="https://via.placeholder.com/150" alt="">
                </div>
            @endfor
        </div>
    </div>
</div>
<!-- Gallery End -->

<!-- Footer Start -->
<div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
    <div class="container pt-5 pb-4">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <a href="index.html">
                    <h1 class="text-white fw-bold d-block">PPID<span class="text-secondary"></span></h1>
                </a>
                <p class="mt-4 text-light">Pejabat Pengelola Informasi dan Dokumentasi Universitas PGRI Sumatera
                    Barat.</p>

            </div>
            <div class="col-lg-3 col-md-6">
                <a href="#" class="h3 text-secondary">Link Website</a>
                <div class="mt-4 d-flex flex-column short-link">
                    <a href="https://www.upgrisba.ac.id" class="mb-2 text-white"><i class="fab fa-web text-primary"></i>Website Utama Upgrisba</a>
                    <a href="https://www.facebook.com/upgrisba.ac.id/?locale=id_ID" class="mb-2 text-white"><i
                            class="fab fa-facebook text-secondary"></i> Universitas PGRI Sumatera Barat</a>
                    <a href="https://www.instagram.com/@upgrisba" class="mb-2 text-white"><i
                            class="fab fa-instagram text-secondary"></i> Universitas PGRI Sumatera Barat</a>
                    <a href="https://www.youtube.com/upgrisba" class="mb-2 text-white"><i
                            class="fab fa-youtube text-secondary"></i> Universitas PGRI Sumatera Barat</a>

                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="#" class="h3 text-secondary">Hubungi Kami</a>
                <div class="text-white mt-4 d-flex flex-column contact-link">
                    <a href="#" class="pb-3 text-light border-bottom border-primary"><i
                            class="fas fa-map-marker-alt text-secondary me-2"></i> Jl. Gunung Pangilun Padang. Kode Pos:
                        25137</a>
                    <a href="#" class="py-3 text-light border-bottom border-primary"><i
                            class="fas fa-phone-alt text-secondary me-2"></i> (0751) 7053731</a>
                    <a href="#" class="py-3 text-light border-bottom border-primary"><i
                            class="fas fa-envelope text-secondary me-2"></i> info@upgrisba.ac.id</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="#" class="h3 text-secondary">Lokasi :</a>
                <!--<div class="col-lg-6 wow fadeIn" data-wow-delay=".3s"> -->
                <div class="p-5 h-100 rounded contact-map">

                    <iframe class="rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.4710403339755!2d-73.82241512404069!3d40.685622471397615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1686493221834!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <hr class="text-light mt-5 mb-4">
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <span class="text-light"><a href="#" class="text-secondary"><i
                            class="fas fa-copyright text-secondary me-2" align="center"></i> 2023 Universitas PGRI Sumatera Barat</a>, All right reserved.</span>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                <span class="text-light">
                        <a href="https://htmlcodex.com" class="text-secondary"></a></span>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i
        class="fa fa-arrow-up text-white"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
@yield('content')
