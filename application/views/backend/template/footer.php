<footer class="main-footer">
    <strong>Copyright &copy; <?= date('Y'); ?> <a href="<?= base_url('/admin'); ?>"><?= $setting['footer_web']; ?></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> <?= $_ENV['APP_VERSION']; ?>
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <div class="p-3 control-sidebar-content">
    <h5 class="text-center text-uppercase">Customize Website</h5>
    <hr class="mb-4" style="border:1px solid white;">

    <!-- General Options -->
    <div class="mb-4">
        <h6>General Options</h6>
        <div class="mb-1">
            <input type="checkbox" id="dark-mode-toggle" class="mr-1">
            <span>Dark Mode</span>
        </div>
    </div>

    <!-- Header Options -->
    <div class="mb-4">
        <h6>Header Options</h6>
        <div class="mb-1">
            <input type="checkbox" id="fixed-header-toggle" class="mr-1">
            <span>Fixed Header</span>
        </div>
    </div>

    <!-- Sidebar Options -->
    <div class="mb-4">
        <h6>Sidebar Options</h6>
        <div class="mb-1">
            <input type="checkbox" id="fixed-sidebar-toggle" class="mr-1">
            <span>Fixed Sidebar</span>
        </div>
        <div class="mb-1">
            <input type="checkbox" id="collapsed-sidebar-toggle" class="mr-1">
            <span>Collapsed Sidebar</span>
        </div>
    </div>

    <!-- Footer Options -->
    <div class="mb-4">
        <h6>Footer Options</h6>
        <div class="mb-1">
            <input type="checkbox" id="fixed-footer-toggle" class="mr-1">
            <span>Fixed Footer</span>
        </div>
    </div>

  </div>
</aside>

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
                <a class="btn btn-success" href="<?= base_url('auth/logout'); ?>"><i class="bi bi-box-arrow-left"></i> Keluar</a>
            </div>
        </div>
    </div>
</div>