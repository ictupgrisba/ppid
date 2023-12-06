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
                    <a href="https://www.instagram.com/upgrisba" class="mb-2 text-white"><i
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
