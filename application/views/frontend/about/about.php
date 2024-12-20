<!-- Meta -->
<?php $this->load->view('frontend/template/meta'); ?>

<!-- Navbar -->
<?php $this->load->view('frontend/template/navbar'); ?>

<!-- About Section -->
<section id="about" style="margin-top: 120px;">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="container">
                <h3 class="high-title text-center text-uppercase m-0">Tentang Kami</h3>
                <p class="section-subtitle text-center mb-5">Tak Kenal Maka Tak Sayang, Perkenalkan Kami.</p>
                <?= $setting['tentang_web']; ?>
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