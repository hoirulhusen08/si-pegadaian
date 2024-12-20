<!-- Meta -->
<?php $this->load->view('frontend/template/meta'); ?>

<!-- Navbar -->
<?php $this->load->view('frontend/template/navbar'); ?>

<style>
    #about .sosmed a, #about .location i {
        font-size: 1.3rem;
    }
</style>

<?php
    $whatsapp = $setting['whatsapp']; 
    $telp = $setting['telp']; 
    $telp_2 = $setting['telp_2']; 
    $telp_pusat = $setting['telp_pusat']; 

    $whatsapp = str_replace([' ', '-', '(', ')'], '', $whatsapp);
    $telp = str_replace([' ', '-', '(', ')'], '', $telp);
    $telp_2 = str_replace([' ', '-', '(', ')'], '', $telp_2);
    $telp_pusat = str_replace([' ', '-', '(', ')'], '', $telp_pusat);
?>

<!-- About Section -->
<section id="about" style="margin-top: 120px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h3 class="high-title text-center text-uppercase m-0">Kontak Kami</h3>
                <p class="section-subtitle text-center mb-5">Untuk bertanya terkait kendala apapun itu, dapat menghubungi pada Kontak dibawah ini ataupun pada Live Chat.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card p-4"> <!-- Padding diatur ulang -->
                    <div class="row sosmed text-center">
                        <div class="col-lg-6">
                            <label for="telp"><strong>Telpon :</strong></label>
                            <p id="telp"><a href="tel:<?= $telp; ?>"><i class="bi bi-telephone-fill"></i> <?= $telp; ?></a></p>
                            <hr>
                            <label for="telp_2"><strong>Telpon Alternatif :</strong></label>
                            <p id="telp_2"><a href="tel:<?= $telp_2; ?>"><i class="bi bi-telephone-fill"></i> <?= $telp_2; ?></a></p>
                        </div>
                        <div class="col-lg-6">
                            <label for="whatsapp"><strong>WhatsApp :</strong></label>
                            <p id="whatsapp"><a href="https://wa.me/<?= $whatsapp; ?>"><i class="bi bi-whatsapp"></i> <?= $whatsapp; ?></a></p>
                            <hr>
                            <label for="telp_pusat"><strong>Telpon Kantor Pusat :</strong></label>
                            <p id="telp_pusat"><a href="tel:<?= $telp_pusat; ?>"><i class="bi bi-telephone-fill"></i> <?= $telp_pusat; ?></a></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row text-center location">
                        <div class="col-lg">
                            <p><a href="https://www.google.com/maps/search/?api=1&query=<?= urlencode($setting['alamat_instansi']); ?>" target="_blank"><i class="bi bi-geo-alt-fill"></i> Alamat : <?= $setting['alamat_instansi']; ?></a></p>
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