<?php
session_start();

require 'functions.php';

include "templates/auth_header.php";

if (isset($_POST["pasien_tambah"])) {


    if (pasien_tambah($_POST) > 0) {

        $nama = $_POST["nama"];
        $tanggal_pendaftaran = date("Y-m-d");

        echo "<script>
            alert('Pendaftaran berhasil!');
            document.location.href = 'detail_pendaftaran.php?nama=$nama&tanggal_daftar=$tanggal_pendaftaran' ;
            </script>";
    } else {
        echo "<script>
            alert('Pendaftaran gagal!');
            document.location.href = 'detail_pendaftaran.php';
            </script>";
    }
}
?>

<div class="col-lg-7">
    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
        <h4 class="font-weight-bolder text-center mb-3">SIVATES</h4>
        <h6 class="font-weight-light text-center text-uppercase">Pendaftaran Online IVA Test</h6>
        <p class="my-3 text-center">Silahkan mendaftar untuk cek IVA Test</p>
        <form class="pt-3" action="" method="POST">
            <div class="row">
                <div class="col-6 form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control form-control-lg" id="nama" placeholder="Nama Lengkap" name="nama">
                </div>
                <div class="col-6 form-group">
                    <label for="agama">Agama</label>
                    <select class="form-control form-control-lg" id="agama" name="agama">
                        <option>Pilih Agama</option>
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
                    <input type="text" class="form-control form-control-lg" id="tempat_lahir" placeholder="Tempat Lahir" name="tempat_lahir">
                </div>
                <div class="col-6 form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control form-control-lg" id="tanggal_lahir" name="tanggal_lahir">
                </div>

                <div class="col-6 form-group">
                    <label for="pendidikan">Pendidikan Terakhir</label>
                    <select class="form-control form-control-lg" id="agama" name="pendidikan">
                        <option>Pilih Pendidikan</option>
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
                    <input type="text" class="form-control form-control-lg" id="pekerjaan" placeholder="Pekerjaan" name="pekerjaan">
                </div>

                <div class="col-6 form-group">
                    <label for="nama_suami">Nama Suami</label>
                    <input type="text" class="form-control form-control-lg" id="suami" placeholder="Nama Suami" name="nama_suami">
                </div>
                <div class="col-6 form-group">
                    <label for="agama_suami">Agama Suami</label>
                    <select class="form-control form-control-lg" id="agama_suami" name="agama_suami">
                        <option>Pilih Agama</option>
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
                    <input type="text" class="form-control form-control-lg" id="tempat_lahir" placeholder="Tempat Lahir" name="tempat_lahir_suami">
                </div>
                <div class="col-6 form-group">
                    <label for="tanggal_lahir">Tanggal Lahir Suami</label>
                    <input type="date" class="form-control form-control-lg" id="tanggal_lahir" name="tanggal_lahir_suami">
                </div>

                <div class="col-6 form-group">
                    <label for="pendidikan_suami">Pendidikan Terakhir Suami</label>
                    <select class="form-control form-control-lg" id="agama" name="pendidikan_suami">
                        <option>Pilih Pendidikan</option>
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
                    <input type="text" class="form-control form-control-lg" id="pekerjaan" placeholder="Pekerjaan" name="pekerjaan_suami">
                </div>

                <div class="col-12 form-group">
                    <label for="alamat">Alamat Lengkap</label>
                    <textarea class="form-control" id="alamat" rows="4" placeholder="Alamat" name="alamat"></textarea>
                </div>

                <div class="col-6 form-group">
                    <label for="jumlah_anak">Jumlah Anak</label>
                    <input type="number" class="form-control form-control-lg" id="jumlah_anak" placeholder="Jumlah Anak" name="jumlah_anak">
                </div>
                <div class="col-6 form-group">
                    <label for="riwayat_kb">Riwayat KB</label>
                    <input type="text" class="form-control form-control-lg" id="riwayat_kb" placeholder="Contoh: Kondom, Pil, Dll" name="riwayat_kb">
                </div>

                <div class="col-6 form-group">
                    <label for="riwayat_penyakit_menahun">Riwayat Penyakit Menahun</label>
                    <input type="text" class="form-control form-control-lg" id="riwayat_penyakit_menahun" placeholder="Contoh: Diabetes, TBC, Dll" name="riwayat_penyakit_menahun">
                </div>
                <div class="col-6 form-group">
                    <label for="keluhan">Keluhan yang dirasakan</label>
                    <input type="text" class="form-control form-control-lg" id="keluhan" placeholder="Keluhan yang dirasakan" name="keluhan">
                </div>

                <!-- <div class="col-6 form-group">
                    <label for="tanggal_daftar">Tanggal Pendaftaran</label>
                    <input type="date" class="form-control form-control-lg" id="tanggal_daftar" name="tanggal_daftar">
                </div> -->

                <div class="col-12 mt-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="pasien_tambah">DAFTAR</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="col-lg-5 d-lg-block d-none">
    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
        <div class="brand-logo d-flex justify-content-center">
            <img src="assets/images/logoaisyiyah.png" alt="logo" class="mx-auto">
        </div>
        <h4 class="font-weight-bolder text-center mb-3">MAJELIS KESEHATAN AISYIYAH CIANJUR</h4>
        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sapiente praesentium nam libero molestiae ipsam minima recusandae voluptate, ratione, eaque explicabo voluptas, inventore quisquam temporibus consequatur at labore dicta eligendi modi iste. Voluptas minima doloremque laborum, ex fuga illo non maxime. Explicabo, illum! Maxime eligendi assumenda quae ratione alias ea debitis cum corporis ipsum qui veritatis libero hic facilis minima dignissimos, consequuntur laborum rem pariatur iusto. Impedit soluta earum necessitatibus saepe aperiam quos veniam ex, exercitationem fuga, repellendus dolor ut sequi ducimus ullam. Modi velit at consectetur maxime laboriosam iure, eaque eos reprehenderit, quaerat eum non ducimus veniam aut suscipit.</p>
        <a href="login/index.php" class="btn btn-primary font-weight-medium">LOGIN</a>
    </div>
</div>

<?php include "templates/auth_footer.php"; ?>