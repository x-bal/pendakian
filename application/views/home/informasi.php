<section class="home_gallery_area p_120">
    <div class="container">
        <h2 class="text-center">Sistem Informasi Pendakian Gunung Jawa Timur</h2>
        <div class="gallery_f_inner row imageGallery1 mt-4 mb-4">

            <?php
            foreach ($wisata as $wis) :
            ?>
                <a href="<?= base_url('home/d_wisata/' . $wis['id_wisata']); ?>">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="h_gallery_item">
                            <div class="g_img_item">
                                <img src="<?= base_url('asset/images/gunung/' . $wis['gambar']) ?>" width="230">
                            </div>
                            <div class="g_item_text">
                                <h4><?= $wis['nama_wisata']; ?></h4>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

</section>