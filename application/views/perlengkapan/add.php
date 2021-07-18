<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><a href="../Wisata"><i class="fas fa-arrow-circle-left"></i></a> Tambah Perlengkapan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index">Beranda</a></li>
                        <li class="breadcrumb-item active">Tambah Perlengkapan</li>
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
                        <form action="<?= base_url('perlengkapan/save'); ?>" method="POST" enctype="multipart/form-data">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nama_perlengkapan">Nama Perlengkapan</label>
                                            <input type="text" name="nama_perlengkapan" id="nama_perlengkapan" class="form-control" placeholder="Nama Perlengkapan" required autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ket_singkat">Ket Singkat</label>
                                            <input type="text" name="ket_singkat" id="ket_singkat" class="form-control" placeholder="Keterangan Singkat" autocomplete="off" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="images">Gambar Perlangkapan</label>
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