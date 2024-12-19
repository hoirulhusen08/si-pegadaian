<!-- Meta -->
<?php $this->load->view('frontend/template/meta'); ?>

<!-- Navbar -->
<?php $this->load->view('frontend/template/navbar'); ?>

<!-- Banner Slider -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="banner-custom" id="particles-js">
                <div class="container" style="position: absolute;">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php if ($this->session->userdata('email')) : ?>
                                <p class="greating lead">Hi, <span><?= $user['name']; ?></span></p>
                            <?php endif; ?>
                            <h2 class="display-4"><?= $setting['tagline_web_slide1']; ?></h2>
                            <p class="lead"><?= $setting['caption_web_slide1']; ?></p>
                        </div>
                        <div class="col-lg-6 img-container-banner">
                            <img src="<?= base_url('assets/image/banner/service.png'); ?>">
                        </div>
                    </div>
                </div>
            </div>
            <svg class="waves-banner" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#d2f5d9" fill-opacity="1" d="M0,256L48,234.7C96,213,192,171,288,170.7C384,171,480,213,576,229.3C672,245,768,235,864,208C960,181,1056,139,1152,133.3C1248,128,1344,160,1392,176L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
            </svg>
        </div>
        <div class="carousel-item">
            <div class="banner-custom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php if ($this->session->userdata('email')) : ?>
                                <p class="greating lead">Hi, <span><?= $user['name']; ?></span></p>
                            <?php endif; ?>
                            <h2 class="display-4"><?= $setting['tagline_web_slide2']; ?></h2>
                            <p class="lead"><?= $setting['caption_web_slide2']; ?></p>
                        </div>
                        <div class="col-lg-6 img-container-banner">
                            <img src="<?= base_url('assets/image/banner/promo.png'); ?>">
                        </div>
                    </div>
                </div>
            </div>
            <svg class="waves-banner" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#d2f5d9" fill-opacity="1" d="M0,256L48,234.7C96,213,192,171,288,170.7C384,171,480,213,576,229.3C672,245,768,235,864,208C960,181,1056,139,1152,133.3C1248,128,1344,160,1392,176L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
            </svg>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>

<!-- Section Why Us -->
<section id="whyUS" class="section-limit">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col-lg">
                <h3 class="high-title">Kenapa Memilih Kami ?</h3>
                <p class="section-subtitle">Alasan kenapa anda perlu bergabung bersama kami.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="card shadow h-100">
                    <div class="card-body text-center">
                        <img src="<?= base_url('assets/image/service/1.png'); ?>" width="100" class="img-fluid mb-3">
                        <h4 class="card-title">Pengalaman dan Keandalan</h4>
                        <p class="card-text">Sistem informasi pegadaian kami telah terbukti dalam memberikan layanan yang andal dan berkualitas kepada pelanggan selama bertahun-tahun.</p>
                    </div>
                    <div class="card-footer">
                        <i class="bi bi-check-circle-fill text-success"></i> Pengalaman yang luas dalam industri<br>
                        <i class="bi bi-check-circle-fill text-success"></i> Terus meningkatkan layanan
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card shadow h-100">
                    <div class="card-body text-center">
                        <img src="<?= base_url('assets/image/service/2.png'); ?>" width="100" class="img-fluid mb-3">
                        <h4 class="card-title">Kemudahan Penggunaan</h4>
                        <p class="card-text">Platform kami dirancang dengan tampilan yang mudah digunakan dan intuitif, memungkinkan Anda untuk mengakses layanan kami dengan cepat dan tanpa kesulitan.</p>
                    </div>
                    <div class="card-footer">
                        <i class="bi bi-check-circle-fill text-success"></i> Proses sederhana dan efisien<br>
                        <i class="bi bi-check-circle-fill text-success"></i> Akses cepat ke layanan
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card shadow h-100">
                    <div class="card-body text-center">
                        <img src="<?= base_url('assets/image/service/3.png'); ?>" width="100" class="img-fluid mb-3">
                        <h4 class="card-title">Keamanan dan Kerahasiaan</h4>
                        <p class="card-text">Keamanan informasi Anda adalah prioritas utama bagi kami. Sistem kami dilengkapi dengan teknologi keamanan canggih untuk melindungi data pribadi Anda dan memastikan kerahasiaan informasi Anda.</p>
                    </div>
                    <div class="card-footer">
                        <i class="bi bi-check-circle-fill text-success"></i> Teknologi keamanan canggih<br>
                        <i class="bi bi-check-circle-fill text-success"></i> Lindungi data pribadi Anda
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Testimoni -->
<section id="testimoni" class="section-limit">
    <div class="row text-center pt-5">
        <div class="col-lg">
            <h3 class="high-title">Apa Kata Mereka ?</h3>
            <p class="section-subtitle">Berikut adalah testimonial dari para Nasabah Pegadaian.</p>
        </div>
    </div>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php foreach ($testimonials as $testi) : ?>
                <div class="swiper-slide">
                    <div class="testimonialBox">
                        <img src="<?= base_url('assets/image/right-quote.png'); ?>" class="testimoni-quote">
                        <div class="content">
                            <p class="lead"><?= $testi['testimoni'] ?></p>
                        </div>
                        <div class="details">
                            <div class="img-box">
                                <img src="<?= base_url('assets/image/testimoni/') . $testi['image']; ?>" class="testimoni-user">
                            </div>
                            <h3><?= $testi['nama'] ?> <br> <span><?= $testi['profesi'] ?></span></h3>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <?php if (!$this->session->userdata('email')) : ?>
        <div class="cta-testimoni bg-success text-white p-5 mt-3">
            <div class="row text-center">
                <div class="col-lg">
                    <p class="lead">Tertarik untuk bergabung bersama kami, silahkan daftar sebagai Nasabah!</p>
                    <a href="<?= base_url('auth/register'); ?>" class="btn btn-danger">Gabung bersama kami ?</a>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>

<section id="faq" class="section-limit">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center mb-5">
                    <h2 class="section-title high-title">Pertanyaan yang Sering Diajukan</h2>
                    <p class="section-subtitle">Temukan jawaban untuk pertanyaan yang sering diajukan tentang layanan kami.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div id="accordion" role="tablist">
                    <!-- Pertanyaan 0 -->
                    <div class="card">
                        <div class="card-header" role="tab" id="headingZero">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseZero" role="button" aria-expanded="false" aria-controls="collapseZero">
                                    Apa itu Website SI-Pegadaian?
                                </a>
                            </h5>
                        </div>
                        <div id="collapseZero" class="collapse" role="tabpanel" aria-labelledby="headingZero" data-parent="#accordion">
                            <div class="card-body">
                                SI-Pegadaian adalah singkatan dari (Sistem Informasi Pegadaian) adalah sebuah Website Portal yang menyediakan semua Informasi terkait produk-produk yang tersedia pada PT. Pegadaian, mulai dari layanan Produk Gadai sampai pada layanan Produk Non-Gadai.
                            </div>
                        </div>
                    </div>
                    <!-- Pertanyaan 1 -->
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
                                    Apa yang dimaksud dengan layanan Produk Gadai?
                                </a>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>Layanan produk gadai di PT. Pegadaian adalah solusi keuangan yang memungkinkan Anda meminjam uang dengan jaminan barang berharga, seperti emas, kendaraan, elektronik, dan lain sebagainya.</p>
                                <p><b>Cara Kerjanya</b></p>
                                <ol>
                                    <li>Anda membawa barang berharga ke Pegadaian.</li>
                                    <li>Pegadaian akan menaksir nilai barang tersebut dan menentukan jumlah pinjaman yang bisa Anda dapatkan.</li>
                                    <li>Anda menyerahkan barang berharga tersebut kepada Pegadaian sebagai jaminan.</li>
                                    <li>Anda membayar bunga pinjaman secara berkala.</li>
                                    <li>Setelah masa pinjaman berakhir, Anda dapat melunasi pinjaman dan mengambil kembali barang berharga Anda.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Pertanyaan 2 -->
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="true" aria-controls="collapseTwo">
                                    Apa yang dimaksud dengan layanan Produk Non-Gadai?
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>Selain layanan Gadai, PT. Pegadaian juga menawarkan berbagai produk dan layanan Non-Gadai yang dirancang untuk memenuhi kebutuhan keuangan masyarakat. Berikut beberapa layanan Non-Gadai unggulan Pegadaian :</p>
                                <ol>
                                    <li>Pinjaman Serbaguna</li>
                                    <li>Tabungan Emas</li>
                                    <li>Cicil Emas</li>
                                    <li>Amanah (Cicil Kendaraan Bermotor)</li>
                                    <li>Pembiayaan Haji dan Umrah</li>
                                    <li>Layanan Jasa</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Pertanyaan 3 -->
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">
                                    Bagaimana cara mengajukan pinjaman melalui website ini?
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Website ini dirancang hanya untuk menampilkan semua Informasi terkait produk-produk yang ada pada PT. Pegadaian, tetapi tidak ada Transaksi sama sekali yang bisa dilakukan pada Website ini, solusi dari pertanyaan anda bisa Unduh dan Install Aplikasi Pegadaian Digital di PlayStore atau untuk informasi lebih lanjut hubungi CS kami.
                            </div>
                        </div>
                    </div>
                    <!-- Pertanyaan 4 -->
                    <div class="card">
                        <div class="card-header" role="tab" id="headingFour">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">
                                    Apakah ada biaya tambahan yang perlu dibayar?
                                </a>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                Dengan menggunakan Website ini tidak dikenakan tarif apapun, semua fitur yang disediakan pada Website ini gratis untuk semua golongan.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Perticle JS -->
<script src="<?= base_url('assets/plugins/particle/particles.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/particle/app.js'); ?>"></script>

<!-- Footer -->
<?php $this->load->view('frontend/template/footer'); ?>

<!-- JS -->
<?php $this->load->view('frontend/template/js'); ?>