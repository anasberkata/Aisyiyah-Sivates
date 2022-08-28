<?php
require 'functions.php';

include "templates/auth_header.php";

$tanggal = $_GET["tanggal_daftar"];
$pasien = query("SELECT * FROM data_pasien WHERE tanggal_pendaftaran = '$tanggal'");

$total_pasien = count($pasien);
?>

<div class="col-lg-5 mx-auto">
    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
        <div class="brand-logo d-flex justify-content-center">
            <img src="assets/images/logoaisyiyah.png" alt="logo" class="mx-auto">
        </div>
        <div class="text-center">
            <h4 class="font-weight-bolder mb-3">SIVATES</h4>
            <h6 class="font-weight-light">MAJLIS KESEHATAN AISYIYAH CIANJUR</h6>
            <span class="badge badge-success my-3 p-4">PENDAFTARAN BERHASIL</span> <a href="index.php" class="badge badge-info my-3 p-4">KEMBALI</a>
        </div>

        <ul class="list-group my-3">
            <li class="list-group-item">Nama : <?= $_GET["nama"]; ?></li>
            <li class="list-group-item">Tanggal Pendaftaran : <?= date('d F Y', strtotime($_GET["tanggal_daftar"])); ?></li>
        </ul>

        <div class="text-center mb-3">
            Nomor Antrian Anda :
            <br>
            <h2 class="bg-info text-white rounded w-25 p-4 mx-auto mt-3"><?= $total_pasien; ?></h2>
        </div>

        <div class="text-center mt-2">
            <p>Screenshot layar atau download nomor antrian dengan menekan tombol berikut :</p>
            <a href="detail_pendaftaran_download.php?nama=<?= $_GET["nama"]; ?>&tanggal_daftar=<?= $_GET["tanggal_daftar"]; ?>" class="btn btn-success mx-auto" target="blank">Download Nomor Antrian</a>
        </div>
    </div>
</div>

<?php include "templates/auth_footer.php"; ?>