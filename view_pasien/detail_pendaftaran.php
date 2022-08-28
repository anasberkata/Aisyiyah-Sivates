<?php

include "../templates/header.php";
include "../templates/topbar.php";
include "../templates/aside.php";

$tanggal = $_GET["tanggal_daftar"];
$pasien = query("SELECT * FROM data_pasien WHERE tanggal_pendaftaran = '$tanggal'");

$total_pasien = count($pasien);
?>


<div class="row">
    <div class="col-lg-5 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title">Antrian Pasien</h4>
                        <p class="card-description">
                            No. Antrian Pasien
                        </p>
                    </div>
                    <div class="col">
                        <a class="btn btn-primary float-right" href="pasien.php">Kembali</a>
                    </div>

                    <div class="col mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <ul class="list-group my-3">
                                <li class="list-group-item">Nama : <?= $_GET["nama"]; ?></li>
                                <li class="list-group-item">Tanggal Pendaftaran : <?= date('d F Y', strtotime($_GET["tanggal_daftar"])); ?></li>
                            </ul>

                            <div class="text-center mb-3">
                                Nomor Antrian Anda :
                                <br>
                                <h2 class="bg-info text-white rounded w-50 p-4 mx-auto mt-3"><?= $total_pasien; ?></h2>
                            </div>

                            <div class="text-center mt-2">
                                <p>Screenshot layar atau download nomor antrian dengan menekan tombol berikut :</p>
                                <a href="detail_pendaftaran_download.php?nama=<?= $_GET["nama"]; ?>&tanggal_daftar=<?= $_GET["tanggal_daftar"]; ?>" class="btn btn-success mx-auto" target="blank">Download Nomor Antrian</a>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>

<?php include "../templates/footer.php"; ?>