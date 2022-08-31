<?php
include "../templates/header.php";
include "../templates/topbar.php";
include "../templates/aside.php";

$id = $_GET["id_data_medis"];
$data_medis = query("SELECT * FROM data_medis
                INNER JOIN data_pasien
                ON data_medis.pasien_id = data_pasien.id_pasien
                WHERE id_data_medis = $id")[0];

$id_pasien = $data_medis["pasien_id"];

if (isset($_POST["pasien_data_medis_edit"])) {
    // var_dump($_POST);
    // die;

    if (pasien_data_medis_edit($_POST) > 0) {
        echo "<script>
            alert('Data medis pasien berhasil di edit!');
            document.location.href = 'pasien_data_medis.php?id_pasien=' + $id_pasien;
            </script>";
    } else {
        echo "<script>
            alert('Data medis pasien gagal di edit!');
            document.location.href = 'pasien_data_medis.php?id_pasien=' + $id_pasien;
            </script>";
    }
}
?>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title">Ubah Data Medis Pasien : <?= $data_medis["nama"]; ?></h4>
                        <p class="card-description">
                            Ubah Data Medis Pasien
                        </p>
                    </div>
                    <div class="col">
                        <a class="btn btn-primary float-right" href="pasien_data_medis.php?id_pasien=<?= $id_pasien ?>">Kembali</a>
                    </div>
                </div>

                <form action="" method="POST">

                    <p class="card-title">
                        Faktor Resiko
                    </p>

                    <div class="row">
                        <input type="hidden" value="<?= $id; ?>" name="id_data_medis">
                        <input type="hidden" value="<?= $data_medis["id_pasien"]; ?>" name="id_pasien">

                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Menstruasi <code>
                                            < </code> 12 Tahun
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes01" id="tes01_1" value="1" <?php if ($data_medis["tes01"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes01" id="tes01_2" value="0" <?php if ($data_medis["tes01"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Usia pertama berhubungan seksual <code>
                                            < </code> 17 Tahun
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes02" id="tes02_1" value="1" <?php if ($data_medis["tes02"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes02" id="tes02_2" value="0" <?php if ($data_medis["tes02"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Sering keputihan
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes03" id="tes03_1" value="1" <?php if ($data_medis["tes03"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes03" id="tes03_2" value="0" <?php if ($data_medis["tes03"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Merokok
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes04" id="tes04_1" value="1" <?php if ($data_medis["tes04"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes04" id="tes04_2" value="0" <?php if ($data_medis["tes04"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Terpapar asap rokok <code> > </code> 1 Jam Sehari
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes05" id="tes05_1" value="1" <?php if ($data_medis["tes05"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes05" id="tes05_2" value="0" <?php if ($data_medis["tes05"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Sering konsumsi buah & sayur (5 Porsi / Hari)
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes06" id="tes06_1" value="1" <?php if ($data_medis["tes06"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes06" id="tes06_2" value="0" <?php if ($data_medis["tes06"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Sering konsumsi makanan berlemak
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes07" id="tes07_1" value="1" <?php if ($data_medis["tes07"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes07" id="tes07_2" value="0" <?php if ($data_medis["tes07"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Sering konsumsi makanan berpengawet
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes08" id="tes08_1" value="1" <?php if ($data_medis["tes08"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes08" id="tes08_2" value="0" <?php if ($data_medis["tes08"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Kurang aktifitas fisik (30 Menit / Hari)
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes09" id="tes09_1" value="1" <?php if ($data_medis["tes09"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes09" id="tes09_2" value="0" <?php if ($data_medis["tes09"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Pernah Pap Smear
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes10" id="tes10_1" value="1" <?php if ($data_medis["tes10"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes10" id="tes10_2" value="0" <?php if ($data_medis["tes10"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Sering berganti pasangan
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes11" id="tes11_1" value="1" <?php if ($data_medis["tes11"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes11" id="tes11_2" value="0" <?php if ($data_medis["tes11"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Riwayat keluarga kangker
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes12" id="tes12_1" value="1" <?php if ($data_medis["tes12"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes12" id="tes12_2" value="0" <?php if ($data_medis["tes12"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Jenis Kangker
                                    </div>
                                </label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" id="ket_tes12" value="<?= $data_medis["ket_tes12"]; ?>" name="ket_tes12">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Kehamilan pertama <code> > </code> 35 Tahun
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes13" id="tes13_1" value="1" <?php if ($data_medis["tes13"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes13" id="tes13_2" value="0" <?php if ($data_medis["tes13"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Pernah menyusui
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes14" id="tes14_1" value="1" <?php if ($data_medis["tes14"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes14" id="tes14_2" value="0" <?php if ($data_medis["tes14"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Pernah melahirkan
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes15" id="tes15_1" value="1" <?php if ($data_medis["tes15"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes15" id="tes15_2" value="0" <?php if ($data_medis["tes15"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Melahirkan normal <code> >= </code> 4 Kali
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes16" id="tes16_1" value="1" <?php if ($data_medis["tes16"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes16" id="tes16_2" value="0" <?php if ($data_medis["tes16"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Menikah <code> > </code> 1 Kali
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes17" id="tes17_1" value="1" <?php if ($data_medis["tes17"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes17" id="tes17_2" value="0" <?php if ($data_medis["tes17"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        KB normonal Pil <code> > </code> 5 Tahun
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes18" id="tes18_1" value="1" <?php if ($data_medis["tes18"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes18" id="tes18_2" value="0" <?php if ($data_medis["tes18"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        KB normonal suntik <code> > </code> 5 Tahun
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes19" id="tes19_1" value="1" <?php if ($data_medis["tes19"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes19" id="tes19_2" value="0" <?php if ($data_medis["tes19"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Riwayat tumor jinak payudara
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes20" id="tes20_1" value="1" <?php if ($data_medis["tes20"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes20" id="tes20_2" value="0" <?php if ($data_medis["tes20"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Menopause <code> > </code> 50 Tahun
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes21" id="tes21_1" value="1" <?php if ($data_medis["tes21"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes21" id="tes21_2" value="0" <?php if ($data_medis["tes21"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Obesitas (IMT <code> > </code> 27 kg/m2)
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes22" id="tes22_1" value="1" <?php if ($data_medis["tes22"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes22" id="tes22_2" value="0" <?php if ($data_medis["tes22"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <p class="card-title">
                        Pemeriksaan Payudara
                    </p>

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Kulit
                                    </div>
                                </label>
                                <div class="col-lg-5">
                                    <select class="form-control form-control-lg" id="tes23" name="tes23">
                                        <option value="<?= $data_medis["tes23"]; ?>">
                                            <?php if ($data_medis["tes23"] == 1) : ?>
                                                Normal
                                            <?php elseif ($data_medis["tes23"] == 2) : ?>
                                                Kulit Jeruk
                                            <?php elseif ($data_medis["tes23"] == 3) : ?>
                                                Penarikan Kulit
                                            <?php elseif ($data_medis["tes23"] == 4) : ?>
                                                Luka Basah
                                            <?php endif; ?>
                                        </option>
                                        <option value="1">Normal</option>
                                        <option value="2">Kulit Jeruk</option>
                                        <option value="3">Penarikan Kulit</option>
                                        <option value="4">Luka Basah</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Areola / Papilla
                                    </div>
                                </label>
                                <div class="col-lg-5">
                                    <select class="form-control form-control-lg" id="tes24" name="tes24">
                                        <option value="<?= $data_medis["tes23"]; ?>">
                                            <?php if ($data_medis["tes24"] == 1) : ?>
                                                Normal
                                            <?php elseif ($data_medis["tes24"] == 2) : ?>
                                                Kulit Jeruk
                                            <?php elseif ($data_medis["tes24"] == 3) : ?>
                                                Penarikan Kulit
                                            <?php elseif ($data_medis["tes24"] == 4) : ?>
                                                Luka Basah
                                            <?php endif; ?>
                                        </option>
                                        <option value="1">Normal</option>
                                        <option value="2">Retraks</option>
                                        <option value="3">Luka Basah</option>
                                        <option value="4">Cairan ABN dari Puting</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Benjolan pada payudara
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes25" id="tes25_1" value="1" <?php if ($data_medis["tes25"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes25" id="tes25_2" value="0" <?php if ($data_medis["tes25"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Ukuran benjolan (Cm)
                                    </div>
                                </label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" id="ket_tes25" value="<?= $data_medis["ket_tes25"]; ?>" name="ket_tes25">
                                </div>
                            </div>

                        </div>
                    </div>

                    <p class="card-title">
                        Pemeriksaan Vagina
                    </p>

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Vulva
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes28" id="tes28_1" value="1" <?php if ($data_medis["tes28"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes28" id="tes28_2" value="0" <?php if ($data_medis["tes28"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Kelainan pada Vulva
                                    </div>
                                </label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" id="ket_tes28" value="<?= $data_medis["ket_tes28"]; ?>" name="ket_tes28">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Vagina
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes29" id="tes29_1" value="1" <?php if ($data_medis["tes29"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes29" id="tes29_2" value="0" <?php if ($data_medis["tes29"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Kelainan pada Vagina
                                    </div>
                                </label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" id="ket_tes29" value="<?= $data_medis["ket_tes29"]; ?>" name="ket_tes29">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Serviks
                                    </div>
                                </label>
                                <div class="col-lg-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes30" id="tes30_1" value="1" <?php if ($data_medis["tes30"] == 1) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="tes30" id="tes30_2" value="0" <?php if ($data_medis["tes30"] == 0) {
                                                                                                                                    echo "checked";
                                                                                                                                } else {
                                                                                                                                }; ?> />
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-7">
                                    <div class="form-check">
                                        Kelainan pada Serviks
                                    </div>
                                </label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" id="ket_tes30" value="<?= $data_medis["ket_tes30"]; ?>" name="ket_tes30">
                                </div>
                            </div>

                        </div>
                    </div>

                    <p class="card-title">
                        Penatalaksanaan
                    </p>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-lg-6">
                                    <div class="form-check">
                                        Hasil pemeriksaan payudara
                                    </div>
                                </label>
                                <div class="col-lg-6">
                                    <select class="form-control form-control-lg" id="tes26" name="tes26">
                                        <option value="<?= $data_medis["tes26"]; ?>">
                                            <?php if ($data_medis["tes26"] == 1) : ?>
                                                Normal
                                            <?php elseif ($data_medis["tes26"] == 2) : ?>
                                                Kemungkinan kelainan payudara jinak
                                            <?php elseif ($data_medis["tes26"] == 3) : ?>
                                                Dicurigai kelainan payudara ganas
                                            <?php endif; ?>
                                        </option>
                                        <option value="1">Normal</option>
                                        <option value="2">Kemungkinan kelainan payudara jinak</option>
                                        <option value="3">Dicurigai kelainan payudara ganas</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-6">
                                    <div class="form-check">
                                        Tindak lanjut
                                    </div>
                                </label>
                                <div class="col-lg-6">
                                    <select class="form-control form-control-lg" id="tes27" name="tes27">
                                        <option value="<?= $data_medis["tes27"]; ?>">
                                            <?php if ($data_medis["tes27"] == 1) : ?>
                                                Anjurkan SADARI setiap tahun
                                            <?php elseif ($data_medis["tes27"] == 2) : ?>
                                                Pemeriksaan payudara 1 tahun sekali
                                            <?php elseif ($data_medis["tes27"] == 3) : ?>
                                                Pemeriksaan mammografi pada usia <code> > </code> 40 tahun
                                            <?php elseif ($data_medis["tes27"] == 4) : ?>
                                                Rujukan untuk pemeriksaan lanjutan
                                            <?php endif; ?>
                                        </option>
                                        <option value="1">Anjurkan SADARI setiap tahun</option>
                                        <option value="2">Pemeriksaan payudara 1 tahun sekali</option>
                                        <option value="3">Pemeriksaan mammografi pada usia <code> > </code> 40 tahun</option>
                                        <option value="4">Rujukan untuk pemeriksaan lanjutan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-6">
                                    <div class="form-check">
                                        Hasil Pemeriksaan Vagina
                                    </div>
                                </label>
                                <div class="col-lg-6">
                                    <select class="form-control form-control-lg" id="tes31" name="tes31">
                                        <option value="<?= $data_medis["tes31"]; ?>">
                                            <?php if ($data_medis["tes31"] == 1) : ?>
                                                IVA Negatif
                                            <?php elseif ($data_medis["tes31"] == 2) : ?>
                                                IVA Positif
                                            <?php elseif ($data_medis["tes31"] == 3) : ?>
                                                Diduga IMS
                                            <?php endif; ?>
                                        </option>
                                        <option value="1">IVA Negatif</option>
                                        <option value="2">IVA Positif</option>
                                        <option value="3">Diduga IMS</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-6">
                                    <div class="form-check">
                                        Tindak lanjut
                                    </div>
                                </label>
                                <div class="col-lg-6">
                                    <select class="form-control form-control-lg" id="tes32" name="tes32">
                                        <option value="<?= $data_medis["tes32"]; ?>">
                                            <?php if ($data_medis["tes32"] == 1) : ?>
                                                Anjurkan kembali setelah 5 tahun untuk melakukan tes (Bila tanpa keluhan)
                                            <?php elseif ($data_medis["tes32"] == 2) : ?>
                                                Anjurkan datang segera (Bila ada keluhan)
                                            <?php elseif ($data_medis["tes32"] == 3) : ?>
                                                Beri konseling tentang resiko kanker leher rahim dan pilihan pengobatan
                                            <?php elseif ($data_medis["tes32"] == 4) : ?>
                                                Menerima pengobatan yang dianjurkan
                                            <?php elseif ($data_medis["tes32"] == 5) : ?>
                                                Tanggal kunjungan ulang
                                            <?php elseif ($data_medis["tes32"] == 6) : ?>
                                                Krioterapi (Petunjuk diberikan)
                                            <?php elseif ($data_medis["tes32"] == 7) : ?>
                                                Lainnya (Petunjuk diberikan)
                                            <?php elseif ($data_medis["tes32"] == 8) : ?>
                                                Diobati
                                            <?php elseif ($data_medis["tes32"] == 9) : ?>
                                                Dirujuk
                                            <?php endif; ?>
                                        </option>
                                        <option value="1">Anjurkan kembali setelah 5 tahun untuk melakukan tes (Bila tanpa keluhan)</option>
                                        <option value="2">Anjurkan datang segera (Bila ada keluhan)</option>
                                        <option value="3">Beri konseling tentang resiko kanker leher rahim dan pilihan pengobatan</option>
                                        <option value="4">Menerima pengobatan yang dianjurkan</option>
                                        <option value="5">Tanggal kunjungan ulang</option>
                                        <option value="6">Krioterapi (Petunjuk diberikan)</option>
                                        <option value="7">Lainnya (Petunjuk diberikan)</option>
                                        <option value="8">Diobati</option>
                                        <option value="9">Dirujuk</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-6">
                                    <div class="form-check">
                                        Keterangan Tindak lanjut
                                    </div>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="ket_tes32" value="<?= $data_medis["ket_tes32"]; ?>" name="ket_tes32">
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group row">
                                <label class="col-lg-6">
                                    <div class="form-check">
                                        Rujukan
                                    </div>
                                </label>
                                <div class="col-lg-6">
                                    <select class="form-control form-control-lg" id="tes33" name="tes33">
                                        <option value="<?= $data_medis["tes33"]; ?>">
                                            <?php if ($data_medis["tes33"] == 1) : ?>
                                                Curiga kanker leher rahim
                                            <?php elseif ($data_medis["tes33"] == 2) : ?>
                                                Lesi <code> > </code> 75%
                                            <?php elseif ($data_medis["tes33"] == 3) : ?>
                                                Lesi <code> > </code> 2 mm melebihi ujung prob krio
                                            <?php elseif ($data_medis["tes33"] == 4) : ?>
                                                Lesi meluas sampai dinding vagina
                                            <?php elseif ($data_medis["tes33"] == 5) : ?>
                                                Dirujuk untuk tes atau pengobatan lanjutan
                                            <?php endif; ?>
                                        </option>
                                        <option value="1">Curiga kanker leher rahim</option>
                                        <option value="2">Lesi <code> > </code> 75%</option>
                                        <option value="3">Lesi <code> > </code> 2 mm melebihi ujung prob krio</option>
                                        <option value="4">Lesi meluas sampai dinding vagina</option>
                                        <option value="5">Dirujuk untuk tes atau pengobatan lanjutan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col-12 col-lg-6 mt-3">
                            <button class="btn btn-block btn-primary font-weight-medium auth-form-btn" type="submit" name="pasien_data_medis_edit">UBAH</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>




<?php
include "../templates/footer.php";
?>