<?php
include "../templates/header.php";
include "../templates/topbar.php";
include "../templates/aside.php";

$id = $_GET["id_pasien"];
$pasien = query("SELECT * FROM data_pasien WHERE id_pasien = $id")[0];
?>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-4 col-lg-6">
                        <h4 class="card-title">Data Pasien</h4>
                        <p class="card-description">
                            Detail data pasien
                        </p>
                    </div>
                    <div class="col-8 col-lg-6 mb-3">
                        <div class="btn-group float-right" role="group">
                            <a class="btn btn-primary float-right" href="pasien.php">Kembali</a>
                            <?php if ($my_profile["role_id"] == 1) : ?>
                                <a class="btn btn-info float-right" href="pasien_edit.php?id_pasien=<?= $pasien["id_pasien"]; ?>">Edit</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <ul class="list-group">
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Nama</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $pasien["nama"]; ?></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Agama</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $pasien["agama"]; ?></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Suku Bangsa</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $pasien["suku_bangsa"]; ?></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">TTL</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $pasien["tempat_lahir"] . ", " . date('d F Y', strtotime($pasien["tanggal_lahir"])); ?></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Umur</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $pasien["umur"]; ?> Tahun</li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Pendidikan</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $pasien["pendidikan"]; ?></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Pekerjaan</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $pasien["pekerjaan"]; ?></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Nama Suami</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $pasien["nama_suami"]; ?></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Agama Suami</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $pasien["agama_suami"]; ?></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">TTL Suami</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $pasien["tempat_lahir_suami"] . ", " . $pasien["tanggal_lahir_suami"]; ?></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Pendidikan Suami</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $pasien["pendidikan_suami"]; ?></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Pekerjaan Suami</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $pasien["pekerjaan_suami"]; ?></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Alamat</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $pasien["alamat"]; ?></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Jumlah Anak</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $pasien["jumlah_anak"]; ?> Anak</li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Riwayat KB</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $pasien["riwayat_kb"]; ?></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Riwayat Penyakit Menahun</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $pasien["riwayat_penyakit_menahun"]; ?></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Keluhan</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $pasien["keluhan"]; ?></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Tanggal Pendaftaran</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $pasien["tanggal_pendaftaran"]; ?></li>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>




<?php
include "../templates/footer.php";
?>