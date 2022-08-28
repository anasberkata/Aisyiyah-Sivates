<?php
include "../templates/header.php";
include "../templates/topbar.php";
include "../templates/aside.php";

$id = $_GET["id_pasien"];
$pasien = query("SELECT * FROM data_pasien WHERE id_pasien = $id")[0];

if (isset($_POST["pasien_edit"])) {


    if (pasien_edit($_POST) > 0) {

        // $nama = $_POST["nama"];
        // $tanggal_pendaftaran = date("Y-m-d");

        echo "<script>
            alert('Data pasien berhasil di edit!');
            document.location.href = 'pasien.php' ;
            </script>";
    } else {
        echo "<script>
            alert('Data pasien gagal di edit!');
            document.location.href = 'pasien.php';
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
                        <h4 class="card-title">Ubah Data Pasien</h4>
                        <p class="card-description">
                            Ubah Data Pasien
                        </p>
                    </div>
                    <div class="col">
                        <a class="btn btn-primary float-right" href="pasien.php">Kembali</a>
                    </div>
                </div>

                <form class="pt-3" action="" method="POST">
                    <div class="row">
                        <input type="hidden" value="<?= $pasien["id_pasien"]; ?>" name="id_pasien">
                        <div class="col-6 form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control form-control-lg" id="nama" value="<?= $pasien["nama"]; ?>" name="nama">
                        </div>
                        <div class="col-6 form-group">
                            <label for="agama">Agama</label>
                            <select class="form-control form-control-lg" id="agama" name="agama">
                                <option value="<?= $pasien["agama"]; ?>"><?= $pasien["agama"]; ?></option>
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Khatolik">Khatolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghuchu">Konghuchu</option>
                            </select>
                        </div>

                        <div class="col-6 form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control form-control-lg" id="tempat_lahir" value="<?= $pasien["tempat_lahir"]; ?>" name="tempat_lahir">
                        </div>
                        <div class="col-6 form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control form-control-lg" id="tanggal_lahir" value="<?= $pasien["tanggal_lahir"]; ?>" name="tanggal_lahir">
                        </div>

                        <div class="col-6 form-group">
                            <label for="pendidikan">Pendidikan Terakhir</label>
                            <select class="form-control form-control-lg" id="agama" name="pendidikan">
                                <option value="<?= $pasien["pendidikan"]; ?>"><?= $pasien["pendidikan"]; ?></option>
                                <option value="SD / MI / Sederajat">SD / MI / Sederajat</option>
                                <option value="SMP / Mts / Sederajat">SMP / Mts / Sederajat</option>
                                <option value="SMA / SMK / MA / Sederajat">SMA / SMK / MA / Sederajat</option>
                                <option value="Diploma-3 (D3)">Diploma-3 (D3)</option>
                                <option value="Diploma-4 (D4)">Diploma-4 (D4)</option>
                                <option value="Sarjana (S1)">Sarjana (S1)</option>
                                <option value="Magister (S2)">Magister (S2)</option>
                                <option value="Doktor (S3)">Doktor (S3)</option>
                            </select>
                        </div>
                        <div class="col-6 form-group">
                            <label for="pekerjaan">Pekerjaan</label>
                            <input type="text" class="form-control form-control-lg" id="pekerjaan" value="<?= $pasien["pekerjaan"]; ?>" name="pekerjaan">
                        </div>

                        <div class="col-6 form-group">
                            <label for="nama_suami">Nama Suami</label>
                            <input type="text" class="form-control form-control-lg" id="suami" value="<?= $pasien["nama_suami"]; ?>" name="nama_suami">
                        </div>
                        <div class="col-6 form-group">
                            <label for="agama_suami">Agama Suami</label>
                            <select class="form-control form-control-lg" id="agama_suami" name="agama_suami">
                                <option value="<?= $pasien["agama_suami"]; ?>"><?= $pasien["agama_suami"]; ?></option>
                                <option value="Islam">Islam</option>
                                <option value="Protesta">Protestan</option>
                                <option value="Khatolik">Khatolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghuchu">Konghuchu</option>
                            </select>
                        </div>

                        <div class="col-6 form-group">
                            <label for="tempat_lahir">Tempat Lahir Suami</label>
                            <input type="text" class="form-control form-control-lg" id="tempat_lahir" value="<?= $pasien["tempat_lahir_suami"]; ?>" name="tempat_lahir_suami">
                        </div>
                        <div class="col-6 form-group">
                            <label for="tanggal_lahir">Tanggal Lahir Suami</label>
                            <input type="date" class="form-control form-control-lg" id="tanggal_lahir" value="<?= $pasien["tanggal_lahir_suami"]; ?>" name="tanggal_lahir_suami">
                        </div>

                        <div class="col-6 form-group">
                            <label for="pendidikan_suami">Pendidikan Terakhir Suami</label>
                            <select class="form-control form-control-lg" id="agama" name="pendidikan_suami">
                                <option value="<?= $pasien["pendidikan_suami"]; ?>"><?= $pasien["pendidikan_suami"]; ?></option>
                                <option value="SD / MI / Sederajat">SD / MI / Sederajat</option>
                                <option value="SMP / Mts / Sederajat">SMP / Mts / Sederajat</option>
                                <option value="SMA / SMK / MA / Sederajat">SMA / SMK / MA / Sederajat</option>
                                <option value="Diploma-3 (D3)">Diploma-3 (D3)</option>
                                <option value="Diploma-4 (D4)">Diploma-4 (D4)</option>
                                <option value="Sarjana (S1)">Sarjana (S1)</option>
                                <option value="Magister (S2)">Magister (S2)</option>
                                <option value="Doktor (S3)">Doktor (S3)</option>
                            </select>
                        </div>
                        <div class="col-6 form-group">
                            <label for="pekerjaan">Pekerjaan Suami</label>
                            <input type="text" class="form-control form-control-lg" id="pekerjaan" value="<?= $pasien["pekerjaan_suami"]; ?>" name="pekerjaan_suami">
                        </div>

                        <div class="col-12 form-group">
                            <label for="alamat">Alamat Lengkap</label>
                            <textarea class="form-control" id="alamat" rows="4" name="alamat"><?= $pasien["alamat"]; ?></textarea>
                        </div>

                        <div class="col-6 form-group">
                            <label for="jumlah_anak">Jumlah Anak</label>
                            <input type="number" class="form-control form-control-lg" id="jumlah_anak" value="<?= $pasien["jumlah_anak"]; ?>" name="jumlah_anak">
                        </div>
                        <div class="col-6 form-group">
                            <label for="riwayat_kb">Riwayat KB</label>
                            <input type="text" class="form-control form-control-lg" id="riwayat_kb" value="<?= $pasien["riwayat_kb"]; ?>" name="riwayat_kb">
                        </div>

                        <div class="col-6 form-group">
                            <label for="riwayat_penyakit_menahun">Riwayat Penyakit Menahun</label>
                            <input type="text" class="form-control form-control-lg" id="riwayat_penyakit_menahun" value="<?= $pasien["riwayat_penyakit_menahun"]; ?>" name="riwayat_penyakit_menahun">
                        </div>
                        <div class="col-6 form-group">
                            <label for="keluhan">Keluhan yang dirasakan</label>
                            <input type="text" class="form-control form-control-lg" id="keluhan" value="<?= $pasien["keluhan"]; ?>" name="keluhan">
                        </div>

                        <!-- <div class="col-6 form-group">
                    <label for="tanggal_daftar">Tanggal Pendaftaran</label>
                    <input type="date" class="form-control form-control-lg" id="tanggal_daftar" name="tanggal_daftar">
                </div> -->

                        <div class="col-12 col-lg-6 mt-3">
                            <button class="btn btn-block btn-primary font-weight-medium auth-form-btn" type="submit" name="pasien_edit">UBAH</button>
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