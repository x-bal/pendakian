<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><a href="../Wisata"><i class="fas fa-arrow-circle-left"></i></a> Update Rute</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index">Beranda</a></li>
                        <li class="breadcrumb-item active">Update Rute</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card card-primary">
                        <form role="form" action="<?= base_url('rute/update'); ?>" method="POST" enctype="multipart/form-data" class="form-user">
                            <div class="card-body">
                                <div class="row">
                                    <input type="hidden" name="id_rute" id="id_rute" class="form-control" required autocomplete="off" value="<?= $rute["id_rute"]; ?>" readonly>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nama_rute">Nama Rute</label>
                                            <input type="text" name="nama_rute" id="nama_rute" class="form-control" required autocomplete="off" value="<?= $rute["nama_rute"]; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="images">Gambar Sebelumnya</label>
                                           <p> <img src="<?= base_url('asset/images/gunung/' . $rute['gambar']) ?>" width="100" alt="" class="mb-3" name="images"></p>
                                            <input type="file" name="images" id="images" required class="form-control" rows="15" value="<?= $rute['gambar'] ?>"></input>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="ket_singkat">Keterangan Singkat</label>
                                            <textarea name="ket_singkat" id="ket_singkat" required class="form-control" rows="10"><?= $rute["ket_singkat"]; ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="id_rute" id="id_rute" value="<?= $rute["id_rute"] ?>">
                                <button type="submit" class="btn btn-success"><i class="fas fa-check-circle"></i> Simpan</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>