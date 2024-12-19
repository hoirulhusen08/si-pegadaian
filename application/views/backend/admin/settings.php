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
                <?php if ($this->session->flashdata('error')): ?>
                    <div class="alert my-alert-danger alert-dismissible fade show text-center" role="alert">
                        <?= $this->session->flashdata('error'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

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

        <div class="card card-outline my-nav-tabs container">
            <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-info-tab" data-toggle="pill" href="#custom-tabs-one-info" role="tab" aria-controls="custom-tabs-one-info" aria-selected="true">Informasi Web</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-testimoni-tab" data-toggle="pill" href="#custom-tabs-one-testimoni" role="tab" aria-controls="custom-tabs-one-testimoni" aria-selected="false">Testimonials</a>
                  </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-info" role="tabpanel" aria-labelledby="custom-tabs-one-info-tab">
                        <section class="content">
                            <form method="post" action="<?= base_url('admin/settings'); ?>" enctype="multipart/form-data">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- PENGATURAN WEB -->
                                        <div class="card">
                                            <div class="card-header my-card-header">
                                                <h5 class="card-title">Pengaturan Umum Web</h5>

                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="card-body bg-light">
                                                <label for="judul_web">Judul Website</label>
                                                <?= form_error('judul_web', '<small class="text-danger pl-1">', '</small>'); ?>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="judul_web" class="form-control" id="judul_web" placeholder="Masukan judul website..." value="<?= $setting['judul_web']; ?>">
                                                </div>

                                                <div class="card bg-light p-3">
                                                    <label for="tagline_web_slide1">Tagline Web <small>(Slide 1)</small></label>
                                                    <?= form_error('tagline_web_slide1', '<small class="text-danger pl-1">', '</small>'); ?>
                                                    <div class="input-group mb-3">
                                                        <input type="text" name="tagline_web_slide1" class="form-control" id="tagline_web_slide1" placeholder="Masukan tagline slide 1..." value="<?= $setting['tagline_web_slide1']; ?>">
                                                    </div>
                                                    <label for="caption_web_slide1">Caption Web <small>(Slide 1)</small></label>
                                                    <?= form_error('caption_web_slide1', '<small class="text-danger pl-1">', '</small>'); ?>
                                                    <div class="input-group mb-3">
                                                        <textarea class="form-control" name="caption_web_slide1" id="caption_web_slide1" placeholder="Masukan caption slide 1..."><?= $setting['caption_web_slide1']; ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="card bg-light p-3">
                                                    <label for="tagline_web_slide2">Tagline Web <small>(Slide 2)</small></label>
                                                    <?= form_error('tagline_web_slide2', '<small class="text-danger pl-1">', '</small>'); ?>
                                                    <div class="input-group mb-3">
                                                        <input type="text" name="tagline_web_slide2" class="form-control" id="tagline_web_slide2" placeholder="Masukan tagline slide 1..." value="<?= $setting['tagline_web_slide2']; ?>">
                                                    </div>
                                                    <label for="caption_web_slide2">Caption Web <small>(Slide 2)</small></label>
                                                    <?= form_error('caption_web_slide2', '<small class="text-danger pl-1">', '</small>'); ?>
                                                    <div class="input-group mb-3">
                                                        <textarea class="form-control" name="caption_web_slide2" id="caption_web_slide2" placeholder="Masukan caption slide 2..."><?= $setting['caption_web_slide2']; ?></textarea>
                                                    </div>
                                                </div>

                                                <label for="footer_web">Footer Website</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="footer_web" class="form-control" id="footer_web" placeholder="Masukan footer website..." value="<?= $setting['footer_web']; ?>">
                                                </div>

                                                <div class="d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i> Perbarui Data Umum</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!-- PENGATURAN INSTANSI -->
                                        <div class="card">
                                            <div class="card-header my-card-header">
                                                <h3 class="card-title">Pengaturan Instansi Web</h3>

                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body bg-light">
                                                <label for="alamat_instansi">Alamat Instansi</label>
                                                <div class="input-group mb-3">
                                                    <textarea class="form-control" name="alamat_instansi" id="alamat_instansi" placeholder="Masukan alamat instansi..."><?= $setting['alamat_instansi']; ?></textarea>
                                                </div>
                                                <label for="telp">Telpon Instansi</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="telp" class="form-control" id="telp" placeholder="Masukan telpon instansi..." value="<?= $setting['telp']; ?>">
                                                </div>
                                                <label for="telp_2">Telpon Alternatif</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="telp_2" class="form-control" id="telp_2" placeholder="Masukan telpon Alternatif instansi..." value="<?= $setting['telp_2']; ?>">
                                                </div>
                                                <label for="whatsapp">WhatsApp Instansi</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="whatsapp" class="form-control" id="whatsapp" placeholder="Masukan whatsapp instansi..." value="<?= $setting['whatsapp']; ?>">
                                                </div>
                                                <label for="telp_pusat">Telpon Kantor Pusat</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="telp_pusat" class="form-control" id="telp_pusat" placeholder="Masukan telpon kantor pusat..." value="<?= $setting['telp_pusat']; ?>">
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <img src="<?= base_url('assets/image/') . $setting['logo']; ?>" width="183" class="img-thumbnail mb-2" id="image-preview">
                                                            </div>
                                                            <div class="col-sm-7">
                                                                <div class="custom-file">
                                                                    <input type="file" name="logo" class="custom-file-input" id="logo">
                                                                    <label class="custom-file-label" for="logo">Ubah Logo Instansi</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i> Perbarui Data Instansi</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <!-- ABOUT -->
                                        <div class="card">
                                            <div class="card-header my-card-header">
                                                <h3 class="card-title">Pengaturan Tentang Instansi</h3>

                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body bg-light">
                                                <label for="summernote">Tentang Instansi</label>
                                                <div class="input-group mb-3">
                                                    <textarea class="form-control" name="tentang_web" id="summernote" placeholder="Masukan tentang instansi..."><?= $setting['tentang_web']; ?></textarea>
                                                </div>

                                                <div class="d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i> Perbarui Tentang Instansi</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </section>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-testimoni" role="tabpanel" aria-labelledby="custom-tabs-one-testimoni-tab">

                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addNewTesti"><i class="fas fa-solid fa-plus"></i> Tambah Testimonial</a>
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
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Gambar</th>
                                                        <th>Kode</th>
                                                        <th>Nama</th>
                                                        <th>Profesi</th>
                                                        <th>Testimoni</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($testimonials as $testi) : ?>
                                                        <tr>
                                                            <td><?= $i++ . "."; ?></td>
                                                            <td><img src="<?= base_url('assets/image/testimoni/') . $testi['image']; ?>" width="80"></td>
                                                            <td><?= $testi['kode_testimoni']; ?></td>
                                                            <td><?= $testi['nama']; ?></td>
                                                            <td><?= $testi['profesi']; ?></td>
                                                            <td><?= $testi['testimoni']; ?></td>
                                                            <td>
                                                                <a href="#" class="btn btn-sm btn-primary mb-1" data-toggle="modal" data-target="#editTestimoni<?= $testi['id']; ?>"><i class="bi bi-pencil-square"></i> Ubah</a>

                                                                <a href="<?= base_url('admin/deleteTestimoni/' . $testi['id']); ?>" class="btn btn-sm btn-danger btn-deleted mb-1"><i class="bi bi-trash3-fill"></i> Hapus</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                  </div>
                </div>
            </div>
        </div>

    </div>

    
    <!-- MODAL ADD TESTIMONIAL -->
    <div class="modal fade" id="addNewTesti" tabindex="-1" aria-labelledby="addNewTestiLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="addNewTestiLabel">Tambah Testimoni Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url('admin/addTestimoni'); ?>" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="<?= base_url('assets/image/testimoni/default.jpg'); ?>" id="image-preview2" class="img-thumbnail mb-2">
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="image">
                                            <label class="custom-file-label" for="image">Pilih gambar...</label>
                                            <small><i class="bi bi-info-circle"></i> Ukuran gambar maks. 2MB</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control <?= (form_error('nama') ? 'is-invalid' : '') ?>" id="nama" placeholder="Masukan nama..." value="<?= set_value('nama'); ?>">
                            <?= form_error('nama', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" name="profesi" class="form-control <?= (form_error('profesi') ? 'is-invalid' : '') ?>" id="profesi" placeholder="Masukan profesi..." value="<?= set_value('profesi'); ?>">
                            <?= form_error('profesi', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <textarea name="testimoni" class="form-control <?= (form_error('testimoni') ? 'is-invalid' : '') ?>" id="testimoni" rows="5" placeholder="Masukan testimoni disini..."><?= set_value('testimoni'); ?></textarea>
                            <?= form_error('testimoni', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success"><i class="bi bi-send"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- MODAL EDIT TESTIMONIAL -->
    <?php $no = 0; ?>
    <?php foreach ($testimonials as $testi) : $no++; ?>
        <div class="modal fade" id="editTestimoni<?= $testi['id']; ?>" tabindex="-1" aria-labelledby="editTestimoniLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="editTestimoniLabel">Perbarui Testimonial</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="text-white">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="<?= base_url('admin/editTestimoni'); ?>" enctype="multipart/form-data">
                        <div class="modal-body">
                            <!-- Field id hidden -->
                            <input type="hidden" name="id" value="<?= $testi['id']; ?>">

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('assets/image/testimoni/') . $testi['image']; ?>" id="image-preview-edit<?= $testi['id']; ?>" class="img-thumbnail mb-2">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" id="image">
                                                <label class="custom-file-label" for="image">Pilih gambar...</label>
                                                <small><i class="bi bi-info-circle"></i> Ukuran gambar maks. 2MB</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama" class="m-0">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama..." value="<?= $testi['nama']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="profesi" class="m-0">Profesi</label>
                                <input type="text" name="profesi" class="form-control" id="profesi" placeholder="Profesi..." value="<?= $testi['profesi']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="testimoni" class="m-0">Testimoni</label>
                                <textarea name="testimoni" id="testimoni" class="form-control" placeholder="Testimoni..." rows="5"><?= $testi['testimoni']; ?></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success"><i class="bi bi-send"></i> Perbarui</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

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
            text: "Data testimoni akan dihapus",
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

<!-- Kode redirect ke tab Testimoni ketika tambah data testi -->
<script>
    $(document).ready(function () {
    // Cek apakah ada hash di URL
    var hash = window.location.hash;
    if (hash) {
        // Aktifkan tab berdasarkan hash
        $('a[href="' + hash + '"]').tab('show');
    }

    // Update hash di URL ketika tab diklik
    $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
        var target = $(e.target).attr("href");
        window.location.hash = target;
    });
});

</script>

</body>

</html>