<section class="home_gallery_area p_120">
    <div class="container" align="center">
        <div class="row  ">
            <div class="col-md-12">
                <div class="card card-primary ">
                    <h2 class="text-center mt-4"><?= $detail['nama_wisata']; ?></h2>
                    <form role="form" action="<?= base_url('home/save_krisar'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="card-body mb-4">
                            <div class="row">
                                <div class="container" align="center">
                                    <div class="gallery_f_inner row imageGallery1">

                                        <div class="col-lg-12 col-md-12">
                                            <div class="h_gallery_item">
                                                <img src="<?= base_url('asset/images/gunung/' . $detail['gambar']) ?>" width="250">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 " align="left">
                                            <h3>Alamat</h3>
                                            <p style="font-weight: bold;font-size: 15px;text-align: left;"><?= $detail['alamat']; ?></p>
                                        </div>

                                        <hr>

                                        <div class="col-lg-12 col-md-12 " align="left">
                                            <h3>Keterangan</h3>
                                            <p style="font-weight: bold;font-size: 15px;text-align: left"><?= $detail['ket_lengkap']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 
<div class="container">
    <div class="main_title">
        <h2><?= $detail['nama_wisata']; ?></h2>
    </div>
</div>
<div class="container" align="center">
    <div class="gallery_f_inner row imageGallery1">

        <div class="col-lg-12 col-md-12">
            <div class="h_gallery_item">
                <img src="<?= base_url('asset/images/gunung/' . $detail['gambar']) ?>" width="250">
            </div>
        </div>

        <div class="col-lg-12 col-md-12" align="left">
            <h2>Alamat</h2>
            <p style="font-weight: bold;font-size: 15px;text-align: left;"><?= $detail['alamat']; ?></p>
        </div>

        <hr>

        <div class="col-lg-12 col-md-12" align="left">
            <h2>Penjelasan</h2>
            <p style="font-weight: bold;font-size: 15px;text-align: left"><?= $detail['ket_lengkap']; ?></p>
        </div>

    </div>
</div> -->