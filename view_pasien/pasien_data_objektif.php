<?php
include "../templates/header.php";
include "../templates/topbar.php";
include "../templates/aside.php";

$id = $_GET["id_pasien"];
$data_objektif = query("SELECT * FROM data_objektif
                INNER JOIN data_pasien
                ON data_objektif.pasien_id = data_pasien.id_pasien
                WHERE id_pasien = $id")[0];

$pasien = query("SELECT * FROM data_pasien WHERE id_pasien = $id")[0];
?>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-4 col-lg-6">
                        <h4 class="card-title">Data Anamnesis Pasien : <?= $pasien["nama"]; ?> </h4>
                        <p class="card-description">
                            Detail Data Anamnesis Pasien
                        </p>
                    </div>
                    <div class="col-8 col-lg-6 mb-3 justify-content-center">
                        <?php if (!$data_objektif) : ?>
                        <?php else : ?>
                            <a class="btn btn-info float-right" href="pasien_data_objektif_edit.php?id_data_objektif=<?= $data_objektif["id_data_objektif"]; ?>">Edit</a>
                        <?php endif ?>

                        <a class="btn btn-primary float-right mx-2" href="pasien.php">Kembali</a>
                    </div>
                </div>

                <?php if (!$data_objektif) : ?>
                    <div class="text-center">
                        <p class="badge badge-warning mx-auto">
                            <a class="btn btn-info float-right" href="pasien_data_objektif_add.php?id_pasien=<?= $id; ?>">Buat Data Objektif</a>
                        </p>

                    </div>
                <?php else : ?>
                    <ul class="list-group">
                        <div class="row">
                            <div class="col-6 col-lg-4">
                                <li class="list-group-item">Nama</li>
                            </div>
                            <div class="col-6 col-lg-8">
                                <li class="list-group-item">: <?= $data_objektif["nama"]; ?></li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-4">
                                <li class="list-group-item">Tekanan Darah</li>
                            </div>
                            <div class="col-6 col-lg-8">
                                <li class="list-group-item">: <?= $data_objektif["tekanan_darah"]; ?> mmHg</li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-4">
                                <li class="list-group-item">tinggi_badan</li>
                            </div>
                            <div class="col-6 col-lg-8">
                                <li class="list-group-item">: <?= $data_objektif["tinggi_badan"]; ?> Cm</li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-4">
                                <li class="list-group-item">Berat Badan</li>
                            </div>
                            <div class="col-6 col-lg-8">
                                <li class="list-group-item">: <?= $data_objektif["berat_badan"]; ?> Kg</li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-4">
                                <li class="list-group-item">Inspeksi Vulva</li>
                            </div>
                            <div class="col-6 col-lg-8">
                                <li class="list-group-item">:
                                    <?php if ($data_objektif["inspeksi_vulva"] < 1) : ?>
                                        Tidak Ada Pembengkakan
                                    <?php else : ?>
                                        Ada Pembengkakan
                                    <?php endif; ?>
                                </li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-4">
                                <li class="list-group-item">Inspeksi Vagina</li>
                            </div>
                            <div class="col-6 col-lg-8">
                                <li class="list-group-item">:
                                    <?php if ($data_objektif["inspeksi_vagina"] < 1) : ?>
                                        Tidak
                                    <?php else : ?>
                                        Ya
                                    <?php endif; ?>
                                </li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-4">
                                <li class="list-group-item">Warna</li>
                            </div>
                            <div class="col-6 col-lg-8">
                                <li class="list-group-item">: <?= $data_objektif["warna"]; ?></li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-4">
                                <li class="list-group-item">Keputihan</li>
                            </div>
                            <div class="col-6 col-lg-8">
                                <li class="list-group-item">:
                                    <?php if ($data_objektif["keputihan"] < 1) : ?>
                                        Tidak Ada
                                    <?php else : ?>
                                        Ada
                                    <?php endif; ?>
                                </li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-4">
                                <li class="list-group-item">Konsistensi</li>
                            </div>
                            <div class="col-6 col-lg-8">
                                <li class="list-group-item">: <?= $data_objektif["konsistensi"]; ?></li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-4">
                                <li class="list-group-item">Bau</li>
                            </div>
                            <div class="col-6 col-lg-8">
                                <li class="list-group-item">:
                                    <?php if ($data_objektif["bau"] < 1) : ?>
                                        Tidak Ada
                                    <?php else : ?>
                                        Ada
                                    <?php endif; ?>
                                </li>
                            </div>
                        </div>
                    </ul>
                <?php endif ?>


            </div>
        </div>
    </div>
</div>




<?php
include "../templates/footer.php";
?>