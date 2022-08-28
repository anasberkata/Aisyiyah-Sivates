<?php
include "../templates/header.php";
include "../templates/topbar.php";
include "../templates/aside.php";

$pasien = query("SELECT * FROM data_pasien ORDER BY tanggal_pendaftaran DESC, id_pasien DESC");
?>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title">Daftar Pasien Terdaftar</h4>
                        <p class="card-description">
                            Daftar Pasien
                        </p>
                    </div>
                    <div class="col">
                        <a class="btn btn-primary float-right" href="pasien_add.php">Tambah Pasien</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Nama</th>
                                <th>Nama Suami</th>
                                <th>Tanggal Pendaftaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pasien as $p) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $p["nama"]; ?></td>
                                    <td><?= $p["nama_suami"]; ?></td>
                                    <td><?= date('d / m / Y', strtotime($p["tanggal_pendaftaran"])); ?></td>
                                    <td>
                                        <a class="badge badge-warning" href="pasien_detail.php?id_pasien=<?= $p['id_pasien'] ?>">Detail</a>
                                        <a class="badge badge-dark" href="pasien_data_objektif.php?id_pasien=<?= $p['id_pasien'] ?>">Data Anamnesis</a>
                                        <a class="badge badge-success" href="pasien_data_medis.php?id_pasien=<?= $p['id_pasien'] ?>">Data Medis</a>
                                        <a class="badge badge-info" href="pasien_edit.php?id_pasien=<?= $p['id_pasien'] ?>"><i class="ti-pencil-alt text-white"></i></a>
                                        <a class="badge badge-danger" href="pasien_delete.php?id_pasien=<?= $p['id_pasien'] ?>" onclick="return confirm('Yakin ingin menghapus pasien : <?= $p['nama'] ?>?');"><i class="ti-trash text-white"></i></a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




<?php
include "../templates/footer.php";
?>