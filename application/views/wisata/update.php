<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><a href="../Wisata"><i class="fas fa-arrow-circle-left"></i></a> Update Wisata</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index">Beranda</a></li>
                        <li class="breadcrumb-item active">Update Wisata</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <form role="form" action="<?= base_url('wisata/update'); ?>" method="POST" enctype="multipart/form-data" class="form-user">
                            <div class="card-body">
                                <div class="row">
                                    <input type="hidden" name="id_wisata" id="id_wisata" class="form-control" required autocomplete="off" value="<?= $wisata["id_wisata"]; ?>" readonly>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nama_wisata">Nama Wisata</label>
                                            <input type="text" name="nama_wisata" id="nama_wisata" class="form-control" required autocomplete="off" value="<?= $wisata["nama_wisata"]; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nama_wisata">Kategori Wisata</label>
                                            <input type="text" name="kategori" id="kategori" class="form-control" value="Jawa Timur" autocomplete="off" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="images">Gambar Sebelumnya</label>
                                            <p>
                                                <img src="<?= base_url('asset/images/gunung/' . $wisata['gambar']) ?>" width="100" alt="" class="mb-3" name="images">
                                            </p>
                                            <input type="file" name="images" id="images" required class="form-control" rows="10" value="<?= $wisata['gambar'] ?>">

                                            </input>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea name="alamat" id="alamat" required class="form-control" rows="10"><?= $wisata["alamat"]; ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ket_singkat">Keterangan Singkat</label>
                                            <textarea name="ket_singkat" id="ket_singkat" required class="form-control" rows="10"><?= $wisata["ket_singkat"]; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ket_lengkap">Keterangan Lengkap</label>
                                            <textarea name="ket_lengkap" id="ket_lengkap" required class="form-control" rows="10"><?= $wisata["ket_lengkap"]; ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="id_wisata" id="id_wisata" value="<?= $wisata["id_wisata"] ?>">
                                <button type="submit" class="btn btn-success"><i class="fas fa-check-circle"></i> Simpan</button>
                            </div>


                    </div>

                    </form>
                </div>
            </div>
        </div>
</div>
</section>
</div>