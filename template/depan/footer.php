<footer class="bg-dark text-light pt-5 pb-3 mt-5">
    <div class="container">
        <div class="row g-4">
            
            <div class="col-lg-4 col-md-6">
                <h4 class="text-uppercase fw-bold text-warning mb-4">
                    <i class="fas fa-crown me-2"></i>Grand Royal
                </h4>
                <p class="text-secondary">
                    Rasakan kemewahan menginap dengan pelayanan kelas dunia. Kami menghadirkan kenyamanan rumah dengan standar internasional.
                </p>
                <div class="d-flex mt-4">
                    <a href="#" class="btn btn-outline-warning btn-sm btn-floating me-2 rounded-circle"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-outline-warning btn-sm btn-floating me-2 rounded-circle"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="btn btn-outline-warning btn-sm btn-floating me-2 rounded-circle"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-outline-warning btn-sm btn-floating rounded-circle"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-4">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#home" class="text-secondary text-decoration-none hover-warning">Beranda</a></li>
                    <li class="mb-2"><a href="#rooms" class="text-secondary text-decoration-none hover-warning">Kamar & Suite</a></li>
                    <li class="mb-2"><a href="#facilities" class="text-secondary text-decoration-none hover-warning">Fasilitas</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none hover-warning">Booking</a></li>
                    <li class="mb-2"><a href="#" class="text-secondary text-decoration-none hover-warning">Karir</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Hubungi Kami</h5>
                <ul class="list-unstyled text-secondary">
                    <li class="mb-3">
                        <i class="fas fa-map-marker-alt text-warning me-2"></i> 
                        Jl. Jend. Sudirman No. 88, Jakarta Pusat, 10220
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-phone-alt text-warning me-2"></i> 
                        +62 21 5555 0199
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-envelope text-warning me-2"></i> 
                        info@grandroyalhotel.com
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Newsletter</h5>
                <p class="text-secondary small">Dapatkan promo eksklusif dan berita terbaru langsung ke inbox Anda.</p>
                <form action="">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control form-control-sm" placeholder="Email Anda" aria-label="Email" required>
                        <button class="btn btn-warning btn-sm text-dark fw-bold" type="button">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>

        <hr class="my-4 border-secondary opacity-50">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="text-secondary small mb-0">
                    &copy; <?= date('Y') ?> <strong>Grand Royal Hotel</strong>. All Rights Reserved.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <ul class="list-inline mb-0 small">
                    <li class="list-inline-item"><a href="#" class="text-secondary text-decoration-none">Privacy Policy</a></li>
                    <li class="list-inline-item ms-3"><a href="#" class="text-secondary text-decoration-none">Terms of Service</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<style>
    .hover-warning:hover {
        color: #ffc107 !important; /* Warna Bootstrap Warning (Emas) */
        padding-left: 5px;
        transition: all 0.3s ease;
    }
</style>