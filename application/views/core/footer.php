<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Tentang Kami</h6>
                    <p>Kami adalah situs sistem informasi pendakian gunung.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Menu</h6>
                    <div class="row">
                        <div class="col-3">
                            <ul class="list">
                                <li><a href="index">Beranda</a></li>
                                <li><a href="tentang">Tentang</a></li>
                                <li><a href="kontak">Kontak</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border_line"></div>
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-8 col-md-8 footer-text m-0">
                Sistem Informasi Pendakian Gunung</i></a>
            </p>
        </div>
    </div>
</footer>

<script src="<?= base_url('asset') ?>/dist-2/js/jquery-3.2.1.min.js"></script>
<script src="<?= base_url('asset') ?>/dist-2/js/popper.js"></script>
<script src="<?= base_url('asset') ?>/dist-2/js/bootstrap.min.js"></script>
<script src="<?= base_url('asset') ?>/dist-2/js/stellar.js"></script>
<script src="<?= base_url('asset') ?>/dist-2/vendors/lightbox/simpleLightbox.min.js"></script>
<script src="<?= base_url('asset') ?>/dist-2/vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="<?= base_url('asset') ?>/dist-2/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url('asset') ?>/dist-2/vendors/isotope/isotope-min.js"></script>
<script src="<?= base_url('asset') ?>/dist-2/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?= base_url('asset') ?>/dist-2/js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url('asset') ?>/dist-2/vendors/counter-up/jquery.waypoints.min.js"></script>
<script src="<?= base_url('asset') ?>/dist-2/vendors/counter-up/jquery.counterup.js"></script>
<script src="<?= base_url('asset') ?>/dist-2/js/mail-script.js"></script>
<script src="<?= base_url('asset') ?>/dist-2/js/theme.js"></script>

<?php if ($this->session->flashdata('success')) : ?>
    <script>
        Swal.fire({
            title: 'Selamat',
            text: "<?= $this->session->flashdata('success'); ?>",
            icon: 'success',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Oke'
        })
    </script>
<?php endif ?>
<script>
    // Krisar
    $('.krisar-form').on('click', function(e) {
        e.preventDefault();
        var form = this;
        Swal.fire({
            title: 'Selamat',
            text: "",
            icon: 'success',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Oke'
        }).then((result) => {
            if (result.isConfirmed) {
                return form.submit()
            }
        })
    });
    // // delete
    // $('.delete-form').on('click', function(e) {
    //     e.preventDefault();
    //     var href = $(this).attr('href');
    //     Swal.fire({
    //         title: 'Hapus data ?',
    //         text: "Klik hapus untuk menghapus data",
    //         icon: 'warning',
    //         showCancelButton: true,
    //         confirmButtonColor: '#3085d6',
    //         cancelButtonColor: '#d33',
    //         confirmButtonText: 'Hapus'
    //     }).then((result) => {
    //         if (result.isConfirmed) {
    //             window.location.href = href;
    //         }
    //     })
    // });
</script>


</body>

</html>