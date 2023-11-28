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
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

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

     <!-- Spinner Start -->
     <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-dark py-2 d-none d-md-flex">
            <div class="container">
                <div class="d-flex justify-content-between topbar">
                    <div class="top-info">
                        <small class="me-3 text-white-50"><a href="#"><i class="fas fa-map-marker-alt me-2 text-secondary"></i></a>Jl. Gunung Pangilun</small>
                        <small class="me-3 text-white-50"><a href="#"><i class="fas fa-envelope me-2 text-secondary"></i></a>info@upgrisba.ac.id</small>
                    </div>
                    <div id="note" class="text-secondary d-none d-xl-flex"><small>Website Resmi Layanan Informasi Publik Universitas PGRI Sumatera Barat</small></div>
                    <div class="top-link">
                        <a href="https://www.facebook.com/upgrisba.ac.id/?locale=id_ID" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-primary"></i></a>
                        
                        <a href="https://www.instagram.com/@upgrisba" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-instagram text-primary"></i></a>
                        <a href="https://www.youtube.com/@STKIPPGRISumateraBarat" class="bg-light nav-fill btn btn-sm-square rounded-circle me-0"><i class="fab fa-youtube text-primary"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar Start -->
        <div class="container-fluid bg-primary">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-0">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="text-white fw-bold d-block">PPID<span class="text-secondary">UPGRISBA</span> </h1>
                    </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
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
                                    <a href="infosetiapsaat" class="dropdown-item">Informasi yang Disediakan Secara Setiap Saat</a>
                                    <a href="infosertamerta" class="dropdown-item">Informasi yang Disediakan Secara Serta-Merta</a>
                                   
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Standar Layanan</a>
                                <div class="dropdown-menu rounded">
                                    <a href="maklumat" class="dropdown-item">Maklumat Pelayanan Informasi Publik</a>
                                    <a href="regulasi" class="dropdown-item">Regulasi</a>
                                    <a href="sop" class="dropdown-item">SOP Layanan Informasi</a>
                                    <a href="jadwal" class="dropdown-item">Jadwal Layanan Informasi</a>
                                    <a href="fasilitas" class="dropdown-item">Fasilitas/Kelengkapan Layanan Informasi Publik</a>
                                    <a href="biaya" class="dropdown-item">Biaya Layanan Informasi</a>
                                    <a href="panduan" class="dropdown-item">Panduan Layanan Disabilitas</a>
                                   
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan Informasi</a>
                                <div class="dropdown-menu rounded">
                                    <a href="laporan" class="dropdown-item">Laporan Layanan Informasi</a>
                                    <a href="alurlayanan" class="dropdown-item">Alur dan Prosedur Layanan Informasi</a>
                                    <a href="alurkeberatan" class="dropdown-item">Alur dan Prosedur Keberatan Pengajuan Atas Informasi</a>
                                    <a href="alursengketa" class="dropdown-item">Alur dan Prosedur Pengajuan Sengketa Ke Komisi Informasi</a>
                                    <a href="tatacara" class="dropdown-item">Tata Cara Pengaduan Penyalahgunaan atau Pelanggaran</a>
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
                    </div>
                </nav>
            </div>
        </div>
        <div class="container-tentang" align="center">INFORMASI YANG DISEDIAKAN SECARA SETIAP SAAT</div>
        <p>1. ISI DISINI KONTENNYA</p>
        <p>2</p>
        <p>2</p>
</div>


        <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
            <div class="container pt-5 pb-4">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <a href="index.html">
                            <h1 class="text-white fw-bold d-block">PPID<span class="text-secondary"></span> </h1>
                        </a>
                        <p class="mt-4 text-light">Pejabat Pengelola Informasi dan Dokumentasi Universitas PGRI Sumatera Barat.</p>
                        
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="h3 text-secondary">Link Website</a>
                        <div class="mt-4 d-flex flex-column short-link">
                            <a href="https://www.upgrisba.ac.id" class="mb-2 text-white"><i class="fab fa-web text-primary"></i>Website Utama Upgrisba</a>
                            <a href="https://www.facebook.com/upgrisba.ac.id/?locale=id_ID" class="mb-2 text-white"><i class="fab fa-facebook text-primary"></i>Universitas PGRI Sumatera Barat</a>
                            <a href="https://www.instagram.com/@upgrisba" class="mb-2 text-white"><i class="fab fa-instagram text-primary"></i>Universitas PGRI Sumatera Barat</a>
                            <a href="https://www.instagram.com/upgrisba" class="mb-2 text-white"><i class="fab fa-youtube text-primary"></i>Universitas PGRI Sumatera Barat</a>
                            
                        </div>
                    </div>
                    
                  <!--  <div class="col-lg-3 col-md-6">
                        <a href="#" class="h3 text-secondary">Help Link</a>
                        <div class="mt-4 d-flex flex-column help-link">
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Terms Of use</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Privacy Policy</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Helps</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>FQAs</a>
                            <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact</a>
                        </div>
                    </div> -->
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="h3 text-secondary">Hubungi Kami</a>
                        <div class="text-white mt-4 d-flex flex-column contact-link">
                            <a href="#" class="pb-3 text-light border-bottom border-primary"><i class="fas fa-map-marker-alt text-secondary me-2"></i> Jl. Gunung Pangilun Padang. Kode Pos: 25137</a>
                            <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-phone-alt text-secondary me-2"></i> (0751) 7053731</a>
                            <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-envelope text-secondary me-2"></i> info@upgrisba.ac.id</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-secondary">Lokasi :</a>
                        <!--<div class="col-lg-6 wow fadeIn" data-wow-delay=".3s"> -->
                            <div class="p-5 h-100 rounded contact-map">
                            
                                <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.4710403339755!2d-73.82241512404069!3d40.685622471397615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1686493221834!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                </div>
               
                <hr class="text-light mt-5 mb-4">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <span class="text-light"><a href="#" class="text-secondary"><i class="fas fa-copyright text-secondary me-2" align="center"></i> 2023 Universitas PGRI Sumatera Barat</a>, All right reserved.</span>
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


          <!-- JavaScript Libraries -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('assets/js/main.js')}}"></script>