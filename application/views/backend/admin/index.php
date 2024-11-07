<!-- Meta -->
<?php $this->load->view('backend/template/meta'); ?>

<div class="wrapper">

    <!-- Loading page before display content -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="<?= base_url('assets/image/logo.png'); ?>" alt="Icon" height="60" width="60">
    </div> -->

    <!-- Navbar -->
    <?php $this->load->view('backend/template/navbar'); ?>

    <!-- Sidebar -->
    <?php $this->load->view('backend/template/sidebar'); ?>

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Halaman <?= $title; ?></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>"><?= $title; ?></a></li>
                            <li class="breadcrumb-item active">Index</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3><?= $users_count; ?></h3>
                                <p>Total Pengguna</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="<?= base_url('admin/manageAllUser'); ?>" class="small-box-footer">Detail <i class="fas fa-users"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>4<sup style="font-size: 20px">%</sup></h3>
                                <p>Total Produk Gadai</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-cart-plus"></i>
                            </div>
                            <a href="#" class="small-box-footer">Detail <i class="fas fa-cart-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>7</h3>
                                <p>Total Produk Non-Gadai</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <a href="#" class="small-box-footer">Detail <i class="fas fa-shopping-cart"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>5</h3>
                                <p>Total Profit</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-solid fa-dollar-sign"></i>
                            </div>
                            <a href="#" class="small-box-footer">Detail <i class="fas fa-solid fa-dollar-sign"></i></a>
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
</body>

</html>