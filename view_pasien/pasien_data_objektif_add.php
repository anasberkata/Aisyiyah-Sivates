<?php
include "../templates/header.php";
include "../templates/topbar.php";
include "../templates/aside.php";

$id = $_GET["id_pasien"];
// $data_objektif = query("SELECT * FROM data_objektif
//                 INNER JOIN data_pasien
//                 ON data_objektif.pasien_id = data_pasien.id_pasien
//                 WHERE id_data_objektif = $id")[0];

$pasien = query("SELECT * FROM data_pasien WHERE id_pasien = $id")[0];

if (isset($_POST["pasien_data_objektif_add"])) {
	if (pasien_data_objektif_add($_POST) > 0) {

		echo "<script>
            alert('Data objektif pasien berhasil di input!');
            document.location.href = 'pasien_data_objektif.php?id_pasien=' + $id;
            </script>";
	} else {
		echo "<script>
            alert('Data objektif pasien gagal di input!');
            document.location.href = 'pasien_data_objektif.php?id_pasien=' + $id;
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
						<h4 class="card-title">Input Data Anamnesis Pasien : <?= $pasien["nama"]; ?></h4>
						<p class="card-description">
							Input Data Anamnesis Pasien
						</p>
					</div>
					<div class="col">
						<a class="btn btn-primary float-right" href="pasien.php">Kembali</a>
					</div>
				</div>

				<form class="pt-3" action="" method="POST">
					<div class="row">
						<input type="hidden" value="<?= $id; ?>" name="id_pasien">
						<div class="col-12 col-lg-4 col-md-6 form-group">
							<label for="tekanan_darah">Tekanan Darah (mmHg)</label>
							<input type="text" class="form-control form-control-lg" id="tekanan_darah" name="tekanan_darah">
						</div>
						<div class="col-12 col-lg-4 col-md-6 form-group">
							<label for="tinggi_badan">Tinggi Badan (Cm)</label>
							<input type="text" class="form-control form-control-lg" id="tinggi_badan" name="tinggi_badan">
						</div>
						<div class=" col-12 col-lg-4 col-md-6 form-group">
							<label for="berat_badan">Berat Badan (Kg)</label>
							<input type="text" class="form-control form-control-lg" id="berat_badan" name="berat_badan">
						</div>
						<div class="col-12 col-lg-4 col-md-6 form-group">
							<label for="inspeksi_vulva">Inspeksi Vulva</label>
							<select class="form-control form-control-lg" id="inspeksi_vulva" name="inspeksi_vulva">
								<option selected>Pilih Opsi</option>
								<option value="1">Ada Pembengkakan</option>
								<option value="0">Tidak Ada Pembengkakan</option>
							</select>
						</div>
						<div class="col-12 col-lg-4 col-md-6 form-group">
							<label for="inspeksi_vagina">Inspeksi Vagina</label>
							<select class="form-control form-control-lg" id="inspeksi_vagina" name="inspeksi_vagina">
								<option selected>Pilih Opsi</option>
								<option value="1">Ya</option>
								<option value="0">Tidak</option>
							</select>
						</div>
						<div class="col-12 col-lg-4 col-md-6 form-group">
							<label for="warna">Warna</label>
							<input type="text" class="form-control form-control-lg" id="warna" name="warna">
						</div>
						<div class="col-12 col-lg-4 col-md-6 form-group">
							<label for="keputihan">Keputihan</label>
							<select class="form-control form-control-lg" id="keputihan" name="keputihan">
								<option selected>Pilih Opsi</option>
								<option value="1">Ada</option>
								<option value="0">Tidak Ada</option>
							</select>
						</div>
						<div class="col-12 col-lg-4 col-md-6 form-group">
							<label for="konsistensi">Konsistensi</label>
							<input type="text" class="form-control form-control-lg" id="konsistensi" name="konsistensi">
						</div>
						<div class="col-12 col-lg-4 col-md-6 form-group">
							<label for="bau">Bau</label>
							<select class="form-control form-control-lg" id="bau" name="bau">
								<option selected>Pilih Opsi</option>
								<option value="1">Ada</option>
								<option value="0">Tidak Ada</option>
							</select>
						</div>

						<div class="col-12 col-lg-4 mt-3">
							<button class="btn btn-block btn-primary font-weight-medium auth-form-btn" type="submit" name="pasien_data_objektif_add">INPUT</button>
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