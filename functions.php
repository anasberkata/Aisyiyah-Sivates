<?php

// KONEKSI DATABASE =====================================================
$conn = mysqli_connect("localhost", "root", "", "skripsi_sivates");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


// --------------------------------------------------------- USER -------------------------------------------------------
function user_tambah($data)
{
    global $conn;

    $nama = $data["nama"];
    $email = $data["email"];
    $username = $data["username"];
    $password = $data["password"];
    $role_id = $data["role"];
    $image = "default.jpg";
    $date_created = date("Y-m-d");
    $is_active = 1;

    $cek_email = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    $cek_username = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    if ($cek_email->num_rows > 0) {
        echo "<script>
                alert('E-Mail sudah terdaftar! Gunakan E-Mail lain');
                document.location.href= 'user_add.php';
            </script>";
    } else if ($cek_username->num_rows > 0) {
        echo "<script>
                alert('username sudah terdaftar! Gunakan username lain!');
                document.location.href= 'user_add.php';
            </script>";
    } else {

        $query = "INSERT INTO users
				VALUES
			(NULL, '$nama', '$email', '$username', '$password', '$role_id', '$image', '$date_created', '$is_active')
			";

        mysqli_query($conn, $query);
    }

    return mysqli_affected_rows($conn);
}

function user_edit($data)
{
    global $conn;

    $id = $data["id_user"];
    $nama = $data["nama"];
    $email = $data["email"];
    $username = $data["username"];
    $password = $data["password"];
    $role_id = $data["role"];

    $query = "UPDATE users SET
			nama = '$nama',
			email = '$email',
			username = '$username',
			password = '$password',
			role_id = '$role_id'

            WHERE id_user = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function user_delete($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM users WHERE id_user = $id");
    return mysqli_affected_rows($conn);
}

// --------------------------------------------------------- PROFILE-------------------------------------------------------
function profile_edit($data)
{
    global $conn;

    $id = $data["id_user"];
    $nama = $data["nama"];
    $email = $data["email"];
    $username = $data["username"];
    $password = $data["password"];

    $query = "UPDATE users SET
			nama = '$nama',
			email = '$email',
			username = '$username',
			password = '$password'

            WHERE id_user = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// --------------------------------------------------------- PENDAFTARAN -------------------------------------------------------
function pasien_tambah($data)
{
    global $conn;

    $nama = $data["nama"];
    $agama = $data["agama"];
    $suku_bangsa = $data["suku_bangsa"];
    $tempat_lahir = $data["tempat_lahir"];
    $tanggal_lahir = $data["tanggal_lahir"];
    $umur = date("Y-m-d") - $tanggal_lahir;
    $pendidikan = $data["pendidikan"];
    $pekerjaan = $data["pekerjaan"];
    $nama_suami = $data["nama_suami"];
    $agama_suami = $data["agama_suami"];
    $tempat_lahir_suami = $data["tempat_lahir_suami"];
    $tanggal_lahir_suami = $data["tanggal_lahir_suami"];
    $pendidikan_suami = $data["pendidikan_suami"];
    $pekerjaan_suami = $data["pekerjaan_suami"];
    $alamat = $data["alamat"];
    $jumlah_anak = $data["jumlah_anak"];
    $riwayat_kb = $data["riwayat_kb"];
    $riwayat_penyakit_menahun = $data["riwayat_penyakit_menahun"];
    $keluhan = $data["keluhan"];
    $tanggal_pendaftaran = date("Y-m-d");
    $date_created = date("Y-m-d");
    $is_active = 1;

    $query = "INSERT INTO data_pasien
				VALUES
			(NULL, '$nama', '$agama', '$suku_bangsa', '$tempat_lahir', '$tanggal_lahir', '$umur', '$pendidikan', '$pekerjaan', '$nama_suami', '$agama_suami', '$tempat_lahir_suami', '$tanggal_lahir_suami', '$pendidikan_suami', '$pekerjaan_suami', '$alamat', '$jumlah_anak', '$riwayat_kb', '$riwayat_penyakit_menahun', '$keluhan', '$tanggal_pendaftaran', '$date_created', '$is_active')
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function pasien_edit($data)
{
    global $conn;

    $id_pasien = $data["id_pasien"];
    $nama = $data["nama"];
    $agama = $data["agama"];
    $suku_bangsa = $data["suku_bangsa"];
    $tempat_lahir = $data["tempat_lahir"];
    $tanggal_lahir = $data["tanggal_lahir"];
    $umur = date("Y-m-d") - $tanggal_lahir;
    $pendidikan = $data["pendidikan"];
    $pekerjaan = $data["pekerjaan"];
    $nama_suami = $data["nama_suami"];
    $agama_suami = $data["agama_suami"];
    $tempat_lahir_suami = $data["tempat_lahir_suami"];
    $tanggal_lahir_suami = $data["tanggal_lahir_suami"];
    $pendidikan_suami = $data["pendidikan_suami"];
    $pekerjaan_suami = $data["pekerjaan_suami"];
    $alamat = $data["alamat"];
    $jumlah_anak = $data["jumlah_anak"];
    $riwayat_kb = $data["riwayat_kb"];
    $riwayat_penyakit_menahun = $data["riwayat_penyakit_menahun"];
    $keluhan = $data["keluhan"];
    // $tanggal_pendaftaran = date("Y-m-d");
    // $date_created = date("Y-m-d");
    // $is_active = 1;

    $query = "UPDATE data_pasien SET
			nama = '$nama',
			agama = '$agama',
			suku_bangsa = '$suku_bangsa',
			tempat_lahir = '$tempat_lahir',
			tanggal_lahir = '$tanggal_lahir',
			umur = '$umur',
			pendidikan = '$pendidikan',
			pekerjaan = '$pekerjaan',
			nama_suami = '$nama_suami',
			agama_suami = '$agama_suami',
			tempat_lahir_suami = '$tempat_lahir_suami',
			tanggal_lahir_suami = '$tanggal_lahir_suami',
			pendidikan_suami = '$pendidikan_suami',
			pekerjaan_suami = '$pekerjaan_suami',
			alamat = '$alamat',
			jumlah_anak = '$jumlah_anak',
			riwayat_kb = '$riwayat_kb',
			riwayat_penyakit_menahun = '$riwayat_penyakit_menahun',
			keluhan = '$keluhan'

            WHERE id_pasien = $id_pasien
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function pasien_delete($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM data_pasien WHERE id_pasien = $id");
    return mysqli_affected_rows($conn);
}

// DATA OBJEKTIF
function pasien_data_objektif_add($data)
{
    global $conn;

    $id_pasien = $data["id_pasien"];
    $tekanan_darah = $data["tekanan_darah"];
    $tinggi_badan = $data["tinggi_badan"];
    $berat_badan = $data["berat_badan"];
    $inspeksi_vulva = $data["inspeksi_vulva"];
    $inspeksi_vagina = $data["inspeksi_vagina"];
    $warna = $data["warna"];
    $keputihan = $data["keputihan"];
    $konsistensi = $data["konsistensi"];
    $bau = $data["bau"];

    $query = "INSERT INTO data_objektif
				VALUES
			(NULL, '$id_pasien', '$tekanan_darah', '$tinggi_badan', '$berat_badan', '$inspeksi_vulva', '$inspeksi_vagina', '$warna', '$keputihan', '$konsistensi', '$bau')
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function pasien_data_objektif_edit($data)
{
    global $conn;

    $id_data_objektif = $data["id_data_objektif"];
    $id_pasien = $data["id_pasien"];
    $tekanan_darah = $data["tekanan_darah"];
    $tinggi_badan = $data["tinggi_badan"];
    $berat_badan = $data["berat_badan"];
    $inspeksi_vulva = $data["inspeksi_vulva"];
    $inspeksi_vagina = $data["inspeksi_vagina"];
    $warna = $data["warna"];
    $keputihan = $data["keputihan"];
    $konsistensi = $data["konsistensi"];
    $bau = $data["bau"];

    $query = "UPDATE data_objektif SET
			tekanan_darah = '$tekanan_darah',
			tinggi_badan = '$tinggi_badan',
			berat_badan = '$berat_badan',
			inspeksi_vulva = '$inspeksi_vulva',
			inspeksi_vagina = '$inspeksi_vagina',
			warna = '$warna',
			keputihan = '$keputihan',
			konsistensi = '$konsistensi',
			bau = '$bau'

            WHERE id_data_objektif = $id_data_objektif
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// DATA MEDIS
function pasien_data_medis_add($data)
{
    global $conn;

    $id_pasien = $data["id_pasien"];
    $tes01 = $data["tes01"];
    $tes02 = $data["tes02"];
    $tes03 = $data["tes03"];
    $tes04 = $data["tes04"];
    $tes05 = $data["tes05"];
    $tes06 = $data["tes06"];
    $tes07 = $data["tes07"];
    $tes08 = $data["tes08"];
    $tes09 = $data["tes09"];
    $tes10 = $data["tes10"];
    $tes11 = $data["tes11"];
    $tes12 = $data["tes12"];
    $ket_tes12 = $data["ket_tes12"];
    $tes13 = $data["tes13"];
    $tes14 = $data["tes14"];
    $tes15 = $data["tes15"];
    $tes16 = $data["tes16"];
    $tes17 = $data["tes17"];
    $tes18 = $data["tes18"];
    $tes19 = $data["tes19"];
    $tes20 = $data["tes20"];
    $tes21 = $data["tes21"];
    $tes22 = $data["tes22"];
    $tes23 = $data["tes23"];
    $tes24 = $data["tes24"];
    $tes25 = $data["tes25"];
    $ket_tes25 = $data["ket_tes25"];
    $tes26 = $data["tes26"];
    $ket_tes26 = 0;
    $tes27 = $data["tes27"];
    $ket_tes27 = 0;
    $tes28 = $data["tes28"];
    $ket_tes28 = $data["ket_tes28"];
    $tes29 = $data["tes29"];
    $ket_tes29 = $data["ket_tes29"];
    $tes30 = $data["tes30"];
    $ket_tes30 = $data["ket_tes30"];
    $tes31 = $data["tes31"];
    $tes32 = $data["tes32"];
    $ket_tes32 = $data["ket_tes32"];
    $tes33 = $data["tes33"];

    $query = "INSERT INTO data_medis
				VALUES
			(NULL, '$id_pasien', '$tes01', '$tes02', '$tes03', '$tes04', '$tes05', '$tes06', '$tes07', '$tes08', '$tes09', '$tes10', '$tes11', '$tes12', '$ket_tes12', '$tes13', '$tes14', '$tes15', '$tes16', '$tes17', '$tes18', '$tes19', '$tes20', '$tes21', '$tes22', '$tes23', '$tes24', '$tes25', '$ket_tes25', '$tes26', '$ket_tes26', '$tes27', '$ket_tes27', '$tes28', '$ket_tes28', '$tes29', '$ket_tes29', '$tes30', '$ket_tes30', '$tes31', '$tes32', '$ket_tes32', '$tes33')
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function pasien_data_medis_edit($data)
{
    global $conn;

    $id_data_medis = $data["id_data_medis"];
    $id_pasien = $data["id_pasien"];
    $tes01 = $data["tes01"];
    $tes02 = $data["tes02"];
    $tes03 = $data["tes03"];
    $tes04 = $data["tes04"];
    $tes05 = $data["tes05"];
    $tes06 = $data["tes06"];
    $tes07 = $data["tes07"];
    $tes08 = $data["tes08"];
    $tes09 = $data["tes09"];
    $tes10 = $data["tes10"];
    $tes11 = $data["tes11"];
    $tes12 = $data["tes12"];
    $ket_tes12 = $data["ket_tes12"];
    $tes13 = $data["tes13"];
    $tes14 = $data["tes14"];
    $tes15 = $data["tes15"];
    $tes16 = $data["tes16"];
    $tes17 = $data["tes17"];
    $tes18 = $data["tes18"];
    $tes19 = $data["tes19"];
    $tes20 = $data["tes20"];
    $tes21 = $data["tes21"];
    $tes22 = $data["tes22"];
    $tes23 = $data["tes23"];
    $tes24 = $data["tes24"];
    $tes25 = $data["tes25"];
    $ket_tes25 = $data["ket_tes25"];
    $tes26 = $data["tes26"];
    $tes27 = $data["tes27"];
    $tes28 = $data["tes28"];
    $ket_tes28 = $data["ket_tes28"];
    $tes29 = $data["tes29"];
    $ket_tes29 = $data["ket_tes29"];
    $tes30 = $data["tes30"];
    $ket_tes30 = $data["ket_tes30"];
    $tes31 = $data["tes31"];
    $tes32 = $data["tes32"];
    $ket_tes32 = $data["ket_tes32"];
    $tes33 = $data["tes33"];

    $query = "UPDATE data_medis SET
			tes01 = '$tes01',
			tes02 = '$tes02',
			tes03 = '$tes03',
			tes04 = '$tes04',
			tes05 = '$tes05',
			tes06 = '$tes06',
			tes07 = '$tes07',
			tes08 = '$tes08',
			tes09 = '$tes09',
			tes10 = '$tes10',
			tes11 = '$tes11',
			tes12 = '$tes12',
			ket_tes12 = '$ket_tes12',
			tes13 = '$tes13',
			tes14 = '$tes14',
			tes15 = '$tes15',
			tes16 = '$tes16',
			tes17 = '$tes17',
			tes18 = '$tes18',
			tes19 = '$tes19',
			tes20 = '$tes20',
			tes21 = '$tes21',
			tes22 = '$tes22',
			tes23 = '$tes23',
			tes24 = '$tes24',
			tes25 = '$tes25',
			ket_tes25 = '$ket_tes25',
			tes26 = '$tes26',
			tes27 = '$tes27',
			tes28 = '$tes28',
			ket_tes28 = '$ket_tes28',
			tes29 = '$tes29',
			ket_tes29 = '$ket_tes29',
			tes30 = '$tes30',
			ket_tes30 = '$ket_tes30',
			tes31 = '$tes31',
			tes32 = '$tes32',
			ket_tes32 = '$ket_tes32',
			tes33 = '$tes33'

            WHERE id_data_medis = $id_data_medis
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}




























// --------------------------------------------------------- LEGAL ---------------------------------------------------------

function legal_tambah($data)
{
    global $conn;

    $kode_dokumen = $data["kode_dokumen"];
    $no_dokumen = $data["no_dokumen"];
    $no_hgb = $data["no_hgb"];
    $no_ajb = $data["no_ajb"];
    $luas_tanah = $data["luas_tanah"];
    $atas_nama = $data["atas_nama"];
    $no_kuasa = $data["no_kuasa"];
    $titik_lokasi = $data["titik_lokasi"];
    $status_dokumen = $data["status_dokumen"];
    $keterangan = $data["keterangan"];
    $date_created = date("Y-m-d");
    $is_active = 1;

    // Upload File
    $file = upload();
    if (!$file) {
        return false;
    }

    $query = "INSERT INTO data_legal
				VALUES
			(NULL, '$kode_dokumen', '$no_dokumen', '$no_hgb', '$no_ajb', '$luas_tanah', '$atas_nama', '$no_kuasa', '$titik_lokasi', '$file', '$status_dokumen', '$keterangan', '$date_created', '$is_active')
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function legal_edit($data)
{
    global $conn;

    $id = $data["id"];
    $kode_dokumen = $data["kode_dokumen"];
    $no_dokumen = $data["no_dokumen"];
    $no_hgb = $data["no_hgb"];
    $no_ajb = $data["no_ajb"];
    $luas_tanah = $data["luas_tanah"];
    $atas_nama = $data["atas_nama"];
    $no_kuasa = $data["no_kuasa"];
    $titik_lokasi = $data["titik_lokasi"];
    $status_dokumen = $data["status_dokumen"];
    $keterangan = $data["keterangan"];
    $is_active = $data["is_active"];
    $file_lama = $data["file_lama"];

    if ($_FILES["file"]["error"] === 4) {
        $file = $file_lama;
    } else {
        $file = upload();
    }

    $query = "UPDATE data_legal SET
			kode_dokumen = '$kode_dokumen',
			no_dokumen = '$no_dokumen',
			no_hgb = '$no_hgb',
			no_ajb = '$no_ajb',
			luas_tanah = '$luas_tanah',
			atas_nama = '$atas_nama',
			no_kuasa = '$no_kuasa',
			titik_lokasi = '$titik_lokasi',
			status_dokumen = '$status_dokumen',
			keterangan = '$keterangan',
			is_active = '$is_active',
			file = '$file'

            WHERE id_legal = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES["file"]["name"];
    $ukuranFile = $_FILES["file"]["size"];
    $error = $_FILES["file"]["error"];
    $tmpName = $_FILES["file"]["tmp_name"];

    if ($error === 4) {
        echo "<script>
                alert('File sertifikat wajib diupload!');
            </script>";

        return false;
    }

    $ekstensiFileValid = ["pdf"];
    $ekstensiFile = explode(".", $namaFile);
    $ekstensiFile = strtolower(end($ekstensiFile));

    if (!in_array($ekstensiFile, $ekstensiFileValid)) {
        echo "<script>
                alert('File yang diupload bukan PDF!');
            </script>";

        return false;
    }

    // max 10mb
    if ($ukuranFile > 20000000) {
        echo "<script>
                alert('Ukuran file terlalu besar, Maksimal 20mb!');
            </script>";

        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiFile;

    move_uploaded_file($tmpName, "../dokumen/" . $namaFileBaru);

    return $namaFileBaru;
}

function legal_delete($id)
{
    global $conn;

    $query = "UPDATE data_legal SET
			is_active = 0

            WHERE id_legal = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function legal_active($id)
{
    global $conn;

    $query = "UPDATE data_legal SET
			is_active = 1

            WHERE id_legal = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
