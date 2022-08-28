<?php
include "../templates/header.php";
include "../templates/topbar.php";
include "../templates/aside.php";

$id = $_GET["id_data_objektif"];
$data_objektif = query("SELECT * FROM data_objektif
                INNER JOIN data_pasien
                ON data_objektif.pasien_id = data_pasien.id_pasien
                WHERE id_data_objektif = $id")[0];

$id_pasien = $data_objektif["id_pasien"];

if (isset($_POST["pasien_data_objektif_edit"])) {
    if (pasien_data_objektif_edit($_POST) > 0) {

        echo "<script>
            alert('Data objektif pasien berhasil di edit!');
            document.location.href = 'pasien_data_objektif.php?id_pasien=' + $id_pasien;
            </script>";
    } else {
        echo "<script>
            alert('Data objektif pasien gagal di edit!');
            document.location.href = 'pasien_data_objektif.php?id_pasien=' + $id_pasien;
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
                        <h4 class="card-title">Ubah Data Anamnesis Pasien : <?= $data_objektif["nama"]; ?></h4>
                        <p class="card-description">
                            Ubah Data Anamnesis Pasien
                        </p>
                    </div>
                    <div class="col">
                        <a class="btn btn-primary float-right" href="pasien.php">Kembali</a>
                    </div>
                </div>

                <form class="pt-3" action="" method="POST">
                    <div class="row">
                        <input type="hidden" value="<?= $id; ?>" name="id_data_objektif">
                        <input type="hidden" value="<?= $data_objektif["id_pasien"]; ?>" name="id_pasien">
                        <div class="col-12 col-lg-4 col-md-6 form-group">
                            <label for="tekanan_darah">Tekanan Darah (mmHg)</label>
                            <input type="text" class="form-control form-control-lg" id="tekanan_darah" value="<?= $data_objektif["tekanan_darah"]; ?>" name="tekanan_darah">
                        </div>
                        <div class="col-12 col-lg-4 col-md-6 form-group">
                            <label for="tinggi_badan">Tinggi Badan (Cm)</label>
                            <input type="text" class="form-control form-control-lg" id="tinggi_badan" value="<?= $data_objektif["tinggi_badan"]; ?>" name="tinggi_badan">
                        </div>
                        <div class=" col-12 col-lg-4 col-md-6 form-group">
                            <label for="berat_badan">Berat Badan (Kg)</label>
                            <input type="text" class="form-control form-control-lg" id="berat_badan" value="<?= $data_objektif["berat_badan"]; ?>" name="berat_badan">
                        </div>
                        <div class="col-12 col-lg-4 col-md-6 form-group">
                            <label for="inspeksi_vulva">Inspeksi Vulva</label>
                            <select class="form-control form-control-lg" id="inspeksi_vulva" name="inspeksi_vulva">
                                <option value="<?= $data_objektif["inspeksi_vulva"]; ?>">
                                    <?php if ($data_objektif["inspeksi_vulva"] < 1) : ?>
                                        Tidak Ada Pembengkakan
                                    <?php else : ?>
                                        Ada Pembengkakan
                                    <?php endif; ?>
                                </option>
                                <option value="1">Ada Pembengkakan</option>
                                <option value="0">Tidak Ada Pembengkakan</option>
                            </select>
                        </div>
                        <div class="col-12 col-lg-4 col-md-6 form-group">
                            <label for="inspeksi_vagina">Inspeksi Vagina</label>
                            <select class="form-control form-control-lg" id="inspeksi_vagina" name="inspeksi_vagina">
                                <option value="<?= $data_objektif["inspeksi_vagina"]; ?>">
                                    <?php if ($data_objektif["inspeksi_vagina"] < 1) : ?>
                                        Tidak
                                    <?php else : ?>
                                        Ya
                                    <?php endif; ?>
                                </option>
                                <option value="1">Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                        <div class="col-12 col-lg-4 col-md-6 form-group">
                            <label for="warna">Warna</label>
                            <input type="text" class="form-control form-control-lg" id="warna" value="<?= $data_objektif["warna"]; ?>" name="warna">
                        </div>
                        <div class="col-12 col-lg-4 col-md-6 form-group">
                            <label for="keputihan">Keputihan</label>
                            <select class="form-control form-control-lg" id="keputihan" name="keputihan">
                                <option value="<?= $data_objektif["keputihan"]; ?>">
                                    <?php if ($data_objektif["keputihan"] < 1) : ?>
                                        Tidak Ada
                                    <?php else : ?>
                                        Ada
                                    <?php endif; ?>
                                </option>
                                <option value="1">Ada</option>
                                <option value="0">Tidak Ada</option>
                            </select>
                        </div>
                        <div class="col-12 col-lg-4 col-md-6 form-group">
                            <label for="konsistensi">Konsistensi</label>
                            <input type="text" class="form-control form-control-lg" id="konsistensi" value="<?= $data_objektif["konsistensi"]; ?>" name="konsistensi">
                        </div>
                        <div class="col-12 col-lg-4 col-md-6 form-group">
                            <label for="bau">Bau</label>
                            <select class="form-control form-control-lg" id="bau" name="bau">
                                <option value="<?= $data_objektif["bau"]; ?>">
                                    <?php if ($data_objektif["bau"] < 1) : ?>
                                        Tidak Ada
                                    <?php else : ?>
                                        Ada
                                    <?php endif; ?>
                                </option>
                                <option value="1">Ada</option>
                                <option value="0">Tidak Ada</option>
                            </select>
                        </div>

                        <div class="col-12 col-lg-4 mt-3">
                            <button class="btn btn-block btn-primary font-weight-medium auth-form-btn" type="submit" name="pasien_data_objektif_edit">UBAH</button>
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