<!-- Meta -->
<?php $this->load->view('frontend/template/meta'); ?>

<style>
    body {
        background-color: #28A645;
    }
</style>

<!-- Change Password Page -->
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900"><i class="bi bi-person-fill-lock"></i> Ubah Password Anda Untuk</h1>
                                    <h6 class="mb-4">(<?= $this->session->userdata('reset_email'); ?>)</h6>
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('auth/changePassword'); ?>">
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Masukan password baru...">
                                        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password2" class="form-control form-control-user" id="password2" placeholder="Masukan konfirmasi password...">
                                        <?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-user btn-block">
                                        Ubah Password
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php $this->load->view('frontend/template/footer'); ?>

<!-- JS -->
<?php $this->load->view('frontend/template/js'); ?>