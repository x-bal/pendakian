<section class="home_gallery_area p_120">
    <div class="container">
        <h2 class="text-center ">Daftar Perlengkapan</h2>
        <div class="gallery_f_inner row imageGallery1 mt-4 mb-4">

            <?php
            foreach ($perlengkapan as $pr) :
            ?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="h_gallery_item">
                        <a href="<?= base_url('home/d_perlengkapan/' . $pr['id_perlengkapan']); ?>">
                            <div class="g_img_item">
                                <img src="<?= base_url('asset/images/gunung/' . $pr['gambar']) ?>" width="230">
                            </div>
                        </a>
                        <div class="g_item_text">
                            <a href="<?= base_url('home/d_perlengkapan/' . $pr['id_perlengkapan']); ?>">
                                <h4><?= $pr['nama_perlengkapan']; ?></h4>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>