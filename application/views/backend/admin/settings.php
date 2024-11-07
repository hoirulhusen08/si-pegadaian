<!-- Meta -->
<?php $this->load->view('backend/template/meta'); ?>

<div class="wrapper">

    <!-- Navbar -->
    <?php $this->load->view('backend/template/navbar'); ?>

    <!-- Sidebar -->
    <?php $this->load->view('backend/template/sidebar'); ?>

    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Halaman <?= $title; ?></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('admin/settings'); ?>"><?= $title; ?></a></li>
                            <li class="breadcrumb-item active">Index</li>
                        </ol>
                    </div>
                </div>

                <!-- Form Error / FlashData -->
                <?= form_error(
                    'role',
                    '<div class="alert my-alert-danger alert-dismissible fade show text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>',
                    '</div>'
                ); ?>

                <?php if ($this->session->flashdata('swal_icon')) : ?>
                    <script>
                        Swal.fire({
                            icon: '<?= $this->session->flashdata('swal_icon'); ?>',
                            title: '<?= $this->session->flashdata('swal_title'); ?>',
                            text: '<?= $this->session->flashdata('swal_text'); ?>',
                            confirmButtonColor: "#28A745",
                        })
                    </script>
                <?php endif; ?>
                <!-- End Form Error / FlashData -->

            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Pengaturan Umum Web</h5>
                            </div>

                            <div class="card-body">
                                <label for="judul_web">Judul Website</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="judul_web" class="form-control" id="judul_web" placeholder="Masukan judul website...">
                                </div>

                                <div class="card bg-light p-3">
                                    <label for="tagline_web_slide1">Tagline Web <small>(Slide 1)</small></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="tagline_web_slide1" class="form-control" id="tagline_web_slide1" placeholder="Masukan tagline slide 1...">
                                    </div>
                                    <label for="caption_web_slide1">Caption Web <small>(Slide 1)</small></label>
                                    <div class="input-group mb-3">
                                        <textarea class="form-control" name="caption_web_slide1" id="caption_web_slide1" placeholder="Masukan caption slide 1"></textarea>
                                    </div>
                                </div>

                                <div class="card bg-light p-3">
                                    <label for="tagline_web_slide2">Tagline Web <small>(Slide 2)</small></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="tagline_web_slide2" class="form-control" id="tagline_web_slide2" placeholder="Masukan tagline slide 1...">
                                    </div>
                                    <label for="caption_web_slide2">Caption Web <small>(Slide 2)</small></label>
                                    <div class="input-group mb-3">
                                        <textarea class="form-control" name="caption_web_slide2" id="caption_web_slide2" placeholder="Masukan caption slide 2"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- DIRECT CHAT -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Direct Chat</h3>

                                <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Isi disini -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- Footer -->
    <?php $this->load->view('backend/template/footer'); ?>

</div>


<!-- JS -->
<?php $this->load->view('backend/template/js'); ?>

<!-- Script Deleted Data -->
<script>
    $('.btn-deleted').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
            icon: "warning",
            title: "Apakah anda yakin?",
            text: "Data peran akan dihapus",
            showCancelButton: true,
            confirmButtonColor: "#28A745",
            cancelButtonColor: "#d33",
            confirmButtonText: "Hapus Data",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        });
    });
</script>

</body>

</html>