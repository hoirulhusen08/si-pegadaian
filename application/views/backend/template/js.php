<!-- Has in Dashboard1 page -->
<script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>

<script src="<?= base_url('assets/'); ?>plugins/jquery-ui/jquery-ui.min.js"></script>

<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url('assets/'); ?>plugins/chart.js/Chart.min.js"></script>

<script src="<?= base_url('assets/'); ?>plugins/sparklines/sparkline.js"></script>

<script src="<?= base_url('assets/'); ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<script src="<?= base_url('assets/'); ?>plugins/jquery-knob/jquery.knob.min.js"></script>

<script src="<?= base_url('assets/'); ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/daterangepicker/daterangepicker.js"></script>

<script src="<?= base_url('assets/'); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="<?= base_url('assets/'); ?>plugins/summernote/summernote-bs4.min.js"></script>

<script src="<?= base_url('assets/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script src="<?= base_url('assets/template/backend/'); ?>dist/js/adminlte.js?v=3.2.0"></script>

<!-- <script src="<?= base_url('assets/template/backend/'); ?>dist/js/demo.js"></script> -->

<script src="<?= base_url('assets/template/backend/'); ?>dist/js/pages/dashboard.js"></script>

<!-- SweetAlert2 -->
<script src="<?= base_url('assets/'); ?>plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- Summernote -->
<script src="<?= base_url('assets/'); ?>plugins/summernote/summernote-bs4.min.js"></script>

<!-- Has in Tables Page -->
<script src="<?= base_url('assets/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Ini membuat Toogle Sidebar menjadi error tidak mau diklik -->
<!-- <script src="<?= base_url('assets/template/backend/'); ?>dist/js/adminlte.min.js?v=3.2.0"></script> -->

<!-- Script Sidebar Right Custom -->
<script>
  $(function () {
    // Fungsi untuk menyimpan status ke local storage
    function saveStateToLocalStorage(key, value) {
      localStorage.setItem(key, value);
    }

    // Fungsi untuk membaca status dari local storage
    function getStateFromLocalStorage(key) {
      return localStorage.getItem(key) === 'true';
    }

    // Memuat status awal dari local storage
    function loadInitialState() {
      // Dark Mode
      const darkMode = getStateFromLocalStorage('dark-mode');
      $('#dark-mode-toggle').prop('checked', darkMode);
      if (darkMode) {
        $('body').addClass('dark-mode');
      }

      // Fixed Header
      const fixedHeader = getStateFromLocalStorage('fixed-header');
      $('#fixed-header-toggle').prop('checked', fixedHeader);
      if (fixedHeader) {
        $('body').addClass('layout-navbar-fixed');
      }

      // Fixed Sidebar
      const fixedSidebar = getStateFromLocalStorage('fixed-sidebar');
      $('#fixed-sidebar-toggle').prop('checked', fixedSidebar);
      if (fixedSidebar) {
        $('body').addClass('layout-fixed');
      }

      // Collapsed Sidebar
      const collapsedSidebar = getStateFromLocalStorage('collapsed-sidebar');
      $('#collapsed-sidebar-toggle').prop('checked', collapsedSidebar);
      if (collapsedSidebar) {
        $('body').addClass('sidebar-collapse');
      }

      // Fixed Footer
      const fixedFooter = getStateFromLocalStorage('fixed-footer');
      $('#fixed-footer-toggle').prop('checked', fixedFooter);
      if (fixedFooter) {
        $('body').addClass('layout-footer-fixed');
      }
    }

    // Memuat status awal
    loadInitialState();

    // Event Listener untuk Dark Mode
    $('#dark-mode-toggle').on('change', function () {
      const isChecked = $(this).is(':checked');
      saveStateToLocalStorage('dark-mode', isChecked);
      if (isChecked) {
        $('body').addClass('dark-mode');
      } else {
        $('body').removeClass('dark-mode');
      }
    });

    // Event Listener untuk Fixed Header
    $('#fixed-header-toggle').on('change', function () {
      const isChecked = $(this).is(':checked');
      saveStateToLocalStorage('fixed-header', isChecked);
      if (isChecked) {
        $('body').addClass('layout-navbar-fixed');
      } else {
        $('body').removeClass('layout-navbar-fixed');
      }
    });

    // Event Listener untuk Fixed Sidebar
    $('#fixed-sidebar-toggle').on('change', function () {
      const isChecked = $(this).is(':checked');
      saveStateToLocalStorage('fixed-sidebar', isChecked);
      if (isChecked) {
        $('body').addClass('layout-fixed');
      } else {
        $('body').removeClass('layout-fixed');
      }
    });

    // Event Listener untuk Collapsed Sidebar
    $('#collapsed-sidebar-toggle').on('change', function () {
      const isChecked = $(this).is(':checked');
      saveStateToLocalStorage('collapsed-sidebar', isChecked);
      if (isChecked) {
        $('body').addClass('sidebar-collapse');
      } else {
        $('body').removeClass('sidebar-collapse');
      }
    });

    // Event Listener untuk Fixed Footer
    $('#fixed-footer-toggle').on('change', function () {
      const isChecked = $(this).is(':checked');
      saveStateToLocalStorage('fixed-footer', isChecked);
      if (isChecked) {
        $('body').addClass('layout-footer-fixed');
      } else {
        $('body').removeClass('layout-footer-fixed');
      }
    });
  });
</script>


<!-- Config Datatables -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            "language": {
                "searchPlaceholder": 'Cari sesuatu disini...',
                "search": 'Pencarian',
                "buttons": {
                    "copy": 'Salin',
                    "excel": 'Excel',
                    "print": 'Cetak',
                    "colvis": 'Kolom',
                    "copySuccess": {
                        "1": "satu baris disalin ke papan klip",
                        "_": "%d baris disalin ke papan klip",
                    },
                    "copyTitle": "Salin ke Papan klip",
                },
                "info": 'Menampilkan _START_ sampai _END_ dari _TOTAL_ entri',
                "zeroRecords": 'Tidak ditemukan data yang sesuai',
                "infoEmpty": 'Menampilkan 0 entri',
                "infoFiltered": '(disaring dari _MAX_ entri keseluruhan)',
                "paginate": {
                    "first": 'Pertama',
                    "last": 'Terakhir',
                    "next": 'Selanjutnya',
                    "previous": 'Sebelumnya',
                },
            }
            // "language": {
            //     "url": '//cdn.datatables.net/plug-ins/2.0.7/i18n/id.json',
            // },
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        $('#example2').DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv"],
            "language": {
                "searchPlaceholder": 'Cari sesuatu disini...',
                "search": 'Pencarian',
                "buttons": {
                    "copy": 'Salin',
                    "excel": 'Excel',
                    "print": 'Cetak',
                    "colvis": 'Kolom',
                    "copySuccess": {
                        "1": "satu baris disalin ke papan klip",
                        "_": "%d baris disalin ke papan klip",
                    },
                    "copyTitle": "Salin ke Papan klip",
                },
                "info": 'Menampilkan _START_ sampai _END_ dari _TOTAL_ entri',
                "zeroRecords": 'Tidak ditemukan data yang sesuai',
                "infoEmpty": 'Menampilkan 0 entri',
                "infoFiltered": '(disaring dari _MAX_ entri keseluruhan)',
                "paginate": {
                    "first": 'Pertama',
                    "last": 'Terakhir',
                    "next": 'Selanjutnya',
                    "previous": 'Sebelumnya',
                },
            }
        }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
</script>

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>

<!-- Preview File Upload Gambar -->
<script>
    // Preview gambar dan nama file saat browse
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);

        // Menampilkan pratinjau gambar
        if (this.files && this.files[0]) {
            let reader = new FileReader();

            reader.onload = function(e) {
                $('#image-preview').attr('src', e.target.result);
                $('#image-preview2').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);
        }
    });
</script>
