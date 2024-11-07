<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/6628035b1ec1082f04e6000e/1hs64q85o';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<!-- Scroll to Top -->
<script>
    window.addEventListener('scroll', function() {
        var iconToTop = document.getElementById('iconToTop');
        if (window.scrollY > window.innerHeight / 1) {
            // Jika pengguna telah melakukan scroll ke bawah setidaknya setengah tinggi jendela
            iconToTop.style.display = 'block';
        } else {
            // Jika belum, sembunyikan ikon
            iconToTop.style.display = 'none';
        }
    });
</script>

<!-- Bootstrap Bundle -->
<script src="<?= base_url('assets/plugins/jquery/jquery.slim.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/popper/popper.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>

<!-- Swiper -->
<script src="<?= base_url('assets/plugins/swiper/js/swiper-bundle.min.js'); ?>"></script>

<!-- Swiper Initialize -->
<script>
    let swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        on: {
            init: function() {
                // Menggeser swiper ke slide pertama
                this.slideTo(this.slides.length / 2, 0, false);
            },
        },
        loop: true,
    });
</script>
<!-- End Swiper Initialize -->

</body>

</html>