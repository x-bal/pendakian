<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-mountain"></i> Daftar Wisata</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Beranda</a></li>
                        <li class="breadcrumb-item active">Wisata</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><a href="<?= base_url('wisata/add'); ?>" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah Wisata</a></h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Wisata</th>
                                    <th>Alamat</th>
                                    <th>Keterangan Singkat</th>
                                    <th>Gambar Wisata</th>
                                    <th>Tanggal Input</th>
                                    <th>Tanggal Update</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $no = 1;
                                foreach ($wisata as $w) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $w['nama_wisata']; ?></td>
                                        <td><?= $w['alamat']; ?></td>
                                        <td><?= $w['ket_singkat'] ?></td>
                                        <td><img src="<?= base_url('asset/images/gunung/' . $w['gambar']) ?>" alt="" width="70"></td>
                                        <td><?= $w['created']; ?></td>
                                        <td><?= $w['modified'] ?></td>
                                        <td>
                                            <a href="<?= base_url('wisata/edit/' . $w['id_wisata']); ?>" class="btn btn-sm btn-outline-success"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url('wisata/delete/' . $w['id_wisata']); ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('yakin hapus?')"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>

                                <?php } ?>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>