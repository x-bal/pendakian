<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-comments"></i> Kritik & Saran</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../index">Beranda</a></li>
                        <li class="breadcrumb-item active">Kritik & Saran</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Kritik & Saran</th>
                                    <th width="10%">Tanggal Input</th>
                                    <th width="10%">Tanggal Update</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($krisar as $ks) {
                                    $no = 1;  ?>

                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $ks['nama'] ?></td>
                                        <td><?= $ks['email'] ?></td>
                                        <td><?= $ks['ks'] ?></td>
                                        <td><?= $ks['created'] ?></td>
                                        <td><?= $ks['modified'] ?></td>
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
