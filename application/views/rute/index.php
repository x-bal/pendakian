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
                        <li class="breadcrumb-item active">Rute</li>
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
                        <h3 class="card-title"><a href="<?= base_url('rute/add'); ?>" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah Rute</a></h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Rute</th>
                                    <th width="40%">Keterangan Singkat</th>
                                    <th>Gambar</th>
                                    <th width="10%">Created</th>
                                    <th width="10%">Modified</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $no = 1;
                                foreach ($rute as $r) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $r['nama_rute']; ?></td>
                                        <td><?= $r['ket_singkat'] ?></td>
                                        <td><img src="<?= base_url('asset/images/gunung/' . $r['gambar']) ?>" width="70"></td>
                                        <td><?= $r['created']; ?></td>
                                        <td><?= $r['modified'] ?></td>
                                        <td>
                                            <a href="<?= base_url('rute/edit/' . $r['id_rute']); ?>" class="btn btn-outline-success"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url('rute/delete/' . $r['id_rute']); ?>" class="btn btn-outline-danger" onclick="return confirm('yakin hapus?')"><i class="fas fa-trash-alt"></i></a>
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