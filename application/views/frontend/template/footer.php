<!-- Section Footer -->
<section id="footer" class="bg-light section-limit">
    <div class="container">
        <div class="row mt-2 justify-content-between">
            <div class="col-lg-6 mt-5 call-center">
                <p class="title-foot">Hubungi Kami Melalui</p>
                <p><i class="bi bi-geo-alt-fill"></i> <?= $setting['alamat_instansi']; ?></p>
                <p><i class="bi bi-telephone-fill"></i> <?= $setting['telp']; ?> atau <i class="bi bi-telephone-fill"></i> <?= $setting['telp_2']; ?></p>
                <p><i class="bi bi-whatsapp"></i> <?= $setting['whatsapp']; ?> <small>(WhatsApp Chat)</small></p>
                <p><i class="bi bi-telephone-fill"></i> <?= $setting['telp_pusat']; ?> <small>(Telpon Pusat)</small></p>
                <p><img src="<?= base_url('assets/image/call-center.png'); ?>" width="200"></p>
            </div>
            <div class="col-lg-4 mt-5">
                <p class="title-foot">Tautan Cepat</p>
                <p><a href="https://www.pegadaian.co.id/" target="_blank">Official Pegadaian</a></p>
                <p><a href="https://wbs.pegadaian.co.id/" target="_blank">Pelaporan Pelanggaran</a></p>
                <p><a href="#" data-toggle="modal" data-target="#termsModal">Syarat dan Ketentuan</a></p>
                <p><a href="#" data-toggle="modal" data-target="#privacyPolicyModal">Kebijakan Privasi</a></p>
            </div>
        </div>
        <hr>
        <div class="row text-center">
            <div class="col-lg">
                <p>Copyright &copy; <?= date('Y'); ?> <a href="<?= base_url('/'); ?>"><?= $setting['footer_web']; ?></a> | All Rights Reserved</p>
            </div>
        </div>
    </div>
</section>

<!-- Icon Page to Top -->
<div id="iconToTop" class="icon-to-top">
    <a href="#toTop"><i class="bi bi-arrow-up-circle-fill"></i></a>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="loginModalLabel">Login untuk masuk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('auth'); ?>">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Masukan alamat email...">
                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukan kata sandi...">
                        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-success w-100 float-right">Login <i class="bi bi-box-arrow-in-right"></i></button>
                </form>
            </div>
            <div class="container">
                <div class="login-foot text-center pt-2 pb-2 mb-3">
                    <small><a href="<?= base_url('auth/forgotPassword'); ?>">Lupa Password</a></small> |
                    <small><a href="<?= base_url('auth/register'); ?>">Sudah punya akun? Register</a></small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="exampleModalLabel">Yakin akan keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Keluar" di bawah jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-success" href="<?= base_url('homepage/logout'); ?>"><i class="bi bi-box-arrow-left"></i> Keluar</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Terms -->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">Ketentuan Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-justify">
                <p>Selamat datang di platform <strong>"Sistem Informasi Pegadaian cabang Bandar Jaya"</strong>. Harap perhatikan ketentuan penggunaan berikut sebelum menggunakan layanan kami :</p>
                <ol>
                    <li>Kewajiban Pengguna : Pengguna diharapkan untuk menggunakan layanan ini sesuai dengan ketentuan yang berlaku dan tidak melakukan tindakan yang melanggar hukum atau norma yang berlaku.</li>
                    <li>Keamanan Akun : Setiap pengguna bertanggung jawab untuk menjaga keamanan dan kerahasiaan akun mereka. Tidak diperkenankan untuk memberikan akses akun kepada pihak lain.</li>
                    <li>Penggunaan Data : Data yang dimasukkan ke dalam sistem akan dijaga kerahasiaannya sesuai dengan kebijakan privasi kami. Kami tidak akan mengungkapkan informasi pribadi tanpa izin pengguna.</li>
                    <li>Penggunaan Layanan : Layanan ini disediakan secara gratis untuk pengguna. Namun, kami berhak untuk membatasi atau menangguhkan akses jika ditemukan penyalahgunaan atau pelanggaran ketentuan.</li>
                    <li>Pembaruan Ketentuan : Kami berhak untuk memperbarui atau mengubah ketentuan penggunaan ini tanpa pemberitahuan sebelumnya. Pengguna diharapkan untuk secara berkala memeriksa halaman ini untuk mendapatkan informasi terbaru.</li>
                </ol>
                <p>Demikian ketentuan singkat yang dapat kami informasikan, untuk detail informasi lengkapnya bisa menghubungi langsung kepada tim kami yang bersangkutan.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Privacy Policy -->
<div class="modal fade" id="privacyPolicyModal" tabindex="-1" aria-labelledby="privacyPolicyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="privacyPolicyModalLabel">Kebijakan Privasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-justify">
                <p>Privasi pengguna adalah prioritas bagi kami. Berikut adalah kebijakan privasi kami untuk menjaga informasi pribadi Anda :</p>
                <ol>
                    <li>Pengumpulan Data : Kami hanya akan mengumpulkan data pribadi yang diperlukan untuk menyediakan layanan Sistem Informasi Pegadaian. Informasi yang kami kumpulkan akan digunakan sesuai dengan tujuan yang telah ditetapkan.</li>
                    <li>Penggunaan Data : Data pribadi yang Anda berikan akan digunakan untuk keperluan Administrasi dan Komunikasi terkait dengan layanan kami. Kami tidak akan menggunakan atau mengungkapkan informasi pribadi tanpa izin Anda.</li>
                    <li>Keamanan Data : Kami mengimplementasikan langkah-langkah keamanan yang sesuai untuk melindungi informasi pribadi dari akses yang tidak sah, penggunaan, atau pengungkapan yang tidak sah.</li>
                    <li>Pembaruan Kebijakan : Kami dapat memperbarui kebijakan privasi ini dari waktu ke waktu. Perubahan signifikan akan diberitahukan kepada pengguna melalui pemberitahuan di situs web atau melalui email.</li>
                    <li>Kontak Kami : Jika Anda memiliki pertanyaan atau kekhawatiran tentang kebijakan privasi kami, jangan ragu untuk menghubungi kami melalui kontak yang tertera.</li>
                </ol>
                <p>Demikian ketentuan singkat yang dapat kami informasikan, untuk detail informasi lengkapnya bisa menghubungi kontak yang tertera diatas.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>