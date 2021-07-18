<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-route"></i> <?= $judul; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Beranda</a></li>
                        <li class="breadcrumb-item active">Perlengkapan</li>
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
                        <h3 class="card-title"><a href="<?= base_url('perlengkapan/add'); ?>" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah Perlengkapan</a></h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Perlengkapan</th>
                                    <th width="30%">Keterangan Singkat</th>
                                    <th>Gambar Perlengkapan</th>
                                    <th width="10%">Created</th>
                                    <th width="10%">Modified</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $no = 1;
                                foreach ($perlengkapan as $p) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p['nama_perlengkapan']; ?></td>
                                        <td><?= $p['ket_singkat']; ?></td>
                                        <td><img src="<?= base_url('asset/images/gunung/' . $p['gambar']) ?>" width="70"></td>
                                        <td><?= $p['created']; ?></td>
                                        <td><?= $p['modified'] ?></td>
                                        <td>
                                            <a href="<?= base_url('perlengkapan/edit/' . $p['id_perlengkapan']); ?>" class="btn btn-outline-success"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url('perlengkapan/delete/' . $p['id_perlengkapan']); ?>" class="btn btn-outline-danger" onclick="return confirm('yakin hapus?')"><i class="fas fa-trash-alt"></i></a>
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