<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><a href="../Wisata"><i class="fas fa-arrow-circle-left"></i></a> Tambah Rute</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index">Beranda</a></li>
                        <li class="breadcrumb-item active">Tambah Rute</li>
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
                        <form action="<?= base_url('rute/save'); ?>" method="POST" enctype="multipart/form-data">
                            <div class="card-body">

                                <input type="hidden" name="id_rute" id="nama_rute" class="form-control" placeholder="Nama Rute" required autocomplete="off">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nama_rute">Nama Rute</label>
                                            <input type="text" name="nama_rute" id="nama_rute" class="form-control" placeholder="Nama Rute" required autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ket_singkat">Ket Singkat</label>
                                            <input type="text" name="ket_singkat" id="kategori" class="form-control" value="Jawa Timur" autocomplete="off" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="images">Gambar</label>
                                            <input type="file" name="images" id="images" class="form-control" required autocomplete="off">
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