<section class="home_gallery_area p_120">
    <div class="container">
        <h2 class="text-center">Daftar Rute</h2>
        <div class="gallery_f_inner row imageGallery1 mb-4 mt-4">
            <?php
            foreach ($rute as $rt) :
            ?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="h_gallery_item">
                        <a href="<?= base_url('home/d_rute/' . $rt['id_rute']); ?>">
                            <div class="g_img_item">
                                <img src="<?= base_url('asset/images/gunung/' . $rt['gambar']) ?>" width="230">
                            </div>
                        </a>
                        <div class="g_item_text">
                            <h4><?= $rt['nama_rute']; ?></h4>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>