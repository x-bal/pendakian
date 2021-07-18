<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><a href="../Wisata"><i class="fas fa-arrow-circle-left"></i></a> Tambah Wisata</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index">Beranda</a></li>
                        <li class="breadcrumb-item active">Tambah Wisata</li>
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
                        <form action="<?= base_url('wisata/save'); ?>" method="POST" enctype="multipart/form-data">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nama_wisata">Nama Wisata</label>
                                            <input type="text" name="nama_wisata" id="nama_wisata" class="form-control" placeholder="Nama Wisata" required autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama_wisata">Kategori Wisata</label>
                                            <input type="text" name="kategori" id="kategori" class="form-control" value="Jawa Timur" autocomplete="off" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="images">Gambar Wisata</label>
                                            <input type="file" name="images" id="images" class="form-control" required autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat Wisata</label>
                                            <textarea name="alamat" id="alamat" required class="form-control" placeholder="Tuliskan Alamat" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ket_singkat">Keterangan Singkat Wisata</label>
                                            <textarea name="ket_singkat" id="ket_singkat" required class="form-control" placeholder="Tuliskan Keterangan Singkat" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ket_lengkap">Keterangan Lengkap Wisata</label>
                                            <textarea name="ket_lengkap" id="ket_lengkap" required class="form-control" placeholder="Tuliskan Keterangan Lengkap" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success"><i class="fas fa-check-circle"></i> Tambah</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>