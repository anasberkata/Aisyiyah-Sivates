<?php

// require_once __DIR__ . '/vendor/autoload.php';
require_once '../vendor/autoload.php';
require '../functions.php';

$id = $_GET["id_pasien"];
$pasien = query("SELECT * FROM data_pasien
                INNER JOIN data_objektif
                ON data_pasien.id_pasien = data_objektif.pasien_id
                WHERE id_pasien = $id")[0];

$data_medis = query("SELECT * FROM data_medis
                INNER JOIN data_pasien
                ON data_medis.pasien_id = data_pasien.id_pasien
                WHERE id_pasien = $id")[0];

if ($data_medis["tes01"] < 1) {
    $tes01 = "Tidak";
} else {
    $tes01 = "Ya";
}
if ($data_medis["tes02"] < 1) {
    $tes02 = "Tidak";
} else {
    $tes02 = "Ya";
}
if ($data_medis["tes03"] < 1) {
    $tes03 = "Tidak";
} else {
    $tes03 = "Ya";
}
if ($data_medis["tes04"] < 1) {
    $tes04 = "Tidak";
} else {
    $tes04 = "Ya";
}
if ($data_medis["tes05"] < 1) {
    $tes05 = "Tidak";
} else {
    $tes05 = "Ya";
}
if ($data_medis["tes06"] < 1) {
    $tes06 = "Tidak";
} else {
    $tes06 = "Ya";
}
if ($data_medis["tes07"] < 1) {
    $tes07 = "Tidak";
} else {
    $tes07 = "Ya";
}
if ($data_medis["tes08"] < 1) {
    $tes08 = "Tidak";
} else {
    $tes08 = "Ya";
}
if ($data_medis["tes09"] < 1) {
    $tes09 = "Tidak";
} else {
    $tes09 = "Ya";
}
if ($data_medis["tes10"] < 1) {
    $tes10 = "Tidak";
} else {
    $tes10 = "Ya";
}

if ($data_medis["tes11"] < 1) {
    $tes11 = "Tidak";
} else {
    $tes11 = "Ya";
}
if ($data_medis["tes12"] < 1) {
    $tes12 = "Tidak";
} else {
    $tes12 = "Ya";
}
if ($data_medis["tes13"] < 1) {
    $tes13 = "Tidak";
} else {
    $tes13 = "Ya";
}
if ($data_medis["tes14"] < 1) {
    $tes14 = "Tidak";
} else {
    $tes14 = "Ya";
}
if ($data_medis["tes15"] < 1) {
    $tes15 = "Tidak";
} else {
    $tes15 = "Ya";
}
if ($data_medis["tes16"] < 1) {
    $tes16 = "Tidak";
} else {
    $tes16 = "Ya";
}
if ($data_medis["tes17"] < 1) {
    $tes17 = "Tidak";
} else {
    $tes17 = "Ya";
}
if ($data_medis["tes18"] < 1) {
    $tes18 = "Tidak";
} else {
    $tes18 = "Ya";
}
if ($data_medis["tes19"] < 1) {
    $tes19 = "Tidak";
} else {
    $tes19 = "Ya";
}
if ($data_medis["tes20"] < 1) {
    $tes20 = "Tidak";
} else {
    $tes20 = "Ya";
}
if ($data_medis["tes21"] < 1) {
    $tes21 = "Tidak";
} else {
    $tes21 = "Ya";
}
if ($data_medis["tes22"] < 1) {
    $tes22 = "Tidak";
} else {
    $tes22 = "Ya";
}

if ($data_medis["tes23"] == 1) {
    $tes23 = "Normal";
} else if ($data_medis["tes23"] == 2) {
    $tes23 = "Kulit Jeruk";
} else if ($data_medis["tes23"] == 3) {
    $tes23 = "Penarikan Kulit";
} else if ($data_medis["tes23"] == 4) {
    $tes23 = "Luka Basah";
}

if ($data_medis["tes24"] == 1) {
    $tes24 = "Normal";
} else if ($data_medis["tes24"] == 2) {
    $tes24 = "Retraks";
} else if ($data_medis["tes24"] == 3) {
    $tes24 = "Luka Basah";
} else if ($data_medis["tes24"] == 4) {
    $tes24 = "Cairan ABN dari puting";
}

if ($data_medis["tes25"] < 1) {
    $tes25 = "Tidak";
} else {
    $tes25 = "Ya";
}

if ($data_medis["tes26"] == 1) {
    $tes26 = "Normal";
} else if ($data_medis["tes26"] == 2) {
    $tes26 = "Kemungkinan kelainan payudara jinak";
} else if ($data_medis["tes26"] == 3) {
    $tes26 = "Kemungkinan kelainan payudara ganas";
}

if ($data_medis["tes27"] == 1) {
    $tes27 = "Anjurkan SADARI setiap bulan";
} else if ($data_medis["tes27"] == 2) {
    $tes27 = "Pemeriksaan payudara 1 tahun sekali";
} else if ($data_medis["tes27"] == 3) {
    $tes27 = "Pemeriksaan mammografi pada usia > 40 Tahun";
} else if ($data_medis["tes27"] == 4) {
    $tes27 = "Rujuk untuk pemeriksaan lanjutan";
}

if ($data_medis["tes28"] < 1) {
    $tes28 = "Tidak";
} else {
    $tes28 = "Ya";
}

if ($data_medis["tes29"] < 1) {
    $tes29 = "Tidak";
} else {
    $tes29 = "Ya";
}

if ($data_medis["tes30"] < 1) {
    $tes30 = "Tidak";
} else {
    $tes30 = "Ya";
}

if ($data_medis["tes31"] == 1) {
    $tes31 = "IVA Negatif";
} else if ($data_medis["tes31"] == 2) {
    $tes31 = "IVA Positif";
} else if ($data_medis["tes31"] == 3) {
    $tes31 = "Diduga IMS";
}

if ($data_medis["tes32"] == 1) {
    $tes32 = "Anjurkan kembali setelah 5 tahun untuk melakukan tes (Apabila tanpa keluhan)";
} else if ($data_medis["tes32"] == 2) {
    $tes32 = "Anjurkan datang segera (Bila ada keluhan)";
} else if ($data_medis["tes32"] == 3) {
    $tes32 = "Beri konseling tentang resiko kanker leher rahim dan pilihan pengobatan";
} else if ($data_medis["tes32"] == 4) {
    $tes32 = "Menerima pengobatan yang dianjurkan";
} else if ($data_medis["tes32"] == 5) {
    $tes32 = "Tanggal kunjungan ulang";
} else if ($data_medis["tes32"] == 6) {
    $tes32 = "Krioterapi (Petunjuk diberikan)";
} else if ($data_medis["tes32"] == 7) {
    $tes32 = "Lainnya (Petunjuk diberikan)";
}

if ($data_medis["tes33"] == 1) {
    $tes33 = "Curiga kanker leher rahim";
} else if ($data_medis["tes33"] == 2) {
    $tes33 = "Lesi > 75%";
} else if ($data_medis["tes33"] == 3) {
    $tes33 = "Lesi > 2mm melebihi ujung prob krio";
} else if ($data_medis["tes33"] == 4) {
    $tes33 = "Lesi meluas sampai dinding vagina";
} else if ($data_medis["tes33"] == 5) {
    $tes33 = "Dirujuk untuk tes atau pengobatan lanjutan";
}



$html = '
    <body style="font-size: 10pt; font-family: Arial, Helvetica, sans-serif; color: #000000;">
        <h4 style="text-transform: uppercase; margin-top:100px; text-align: center; margin-bottom: 20px;">
        HASIL IVA TES
        <br>
        MAJELIS KESEHATAN AISYIYAH CIANJUR
        <br>
        </h4>

        <h6>DATA OBJEKTIF PASIEN</h6>
        <table style="border: 0px solid #000; font-size: 10px;" cellspacing="0" width="100%">
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;" width="30%">Nama Pasien</td>
                <td style="border: 0px solid #000; padding: 10px;" width="20%"> : ' . $pasien["nama"] . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;" width="30%">Nama Suami</td>
                <td style="border: 0px solid #000; padding: 10px;" width="20%"> : ' . $pasien["nama_suami"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Umur</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $pasien["umur"] . ' Tahun</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Pekerjaan Pasien</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $pasien["pekerjaan"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Agama</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $pasien["agama"] . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Pekerjaan Suami</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $pasien["pekerjaan_suami"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Berat Badan</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $pasien["berat_badan"] . ' Kg</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Pendidikan Terakhir</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $pasien["pendidikan"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Tinggi Badan</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $pasien["tinggi_badan"] . ' Kg</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Alamat</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $pasien["alamat"] . '</td>
            </tr>
        </table>

        <h6>FAKTOR RESIKO</h6>
        <table style="border: 0px solid #000; font-size: 10px;" cellspacing="0" width="100%">
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;" width="30%">Menstruasi < 12 Tahun</td>
                <td style="border: 0px solid #000; padding: 10px;" width="20%"> : ' . $tes01 . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;" width="30%">Riwayat keluarga kangker</td>
                <td style="border: 0px solid #000; padding: 10px;" width="20%"> : ' . $tes12 . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Usia pertama berhubungan seksual < 17 Tahun</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes02 . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Jenis Kangker</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["ket_tes12"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Sering Keputihan</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes03 .  '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Kehamilan pertama > 35 Tahun</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes13 . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Merokok</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes04 . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Pernah menyusui</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes14 . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Terpapar asap rokok > 1 Jam / Hari</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes05 . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Pernah melahirkan</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes15 . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Sering konsumsi buah & sayur</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes06 . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Meahirkan normal >= 4 Kali</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes15 . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Sering konsumsi makanan berlemak</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes07 . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Menikah > 1 Kali</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes17 . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Sering konsumsi makanan berpengawet</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes08 . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">KB Normonal, Pil > 5 Tahuna</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes18 . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Kurang aktifitas fisik (30 Menit / Hari)</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes09 . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">KB Normonal, Suntik > 5 Tahuna</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes19 . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Pernah Pap Smear</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes10 . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Riwayat tumor jinak payudara</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes20 . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Sering berganti pasangan</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes11 . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Menopause > 50 Tahun</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes21 . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;" colspan="2"></td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Obesitas (IMT > 27 Kg/m2)</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes22 . '</td>
            </tr>
        </table>

        <h6>PEMERIKSAAN PAYUDARA</h6>
        <table style="border: 0px solid #000; font-size: 10px;" cellspacing="0" width="100%">
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;" width="30%">Kulit</td>
                <td style="border: 0px solid #000; padding: 10px;" width="20%"> : ' . $tes23 . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;" width="30%">Benjolan pada payudara</td>
                <td style="border: 0px solid #000; padding: 10px;" width="20%"> : ' . $tes25 . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Areola / Papilla</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes24 . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Ukuran</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["ket_tes25"] . ' Cm</td>
            </tr>
        </table>

        <h6>PEMERIKSAAN VAGINA</h6>
        <table style="border: 0px solid #000; font-size: 10px;" cellspacing="0" width="100%">
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;" width="30%">Vulva</td>
                <td style="border: 0px solid #000; padding: 10px;" width="20%"> : ' . $tes28 . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;" width="30%">Keterangan</td>
                <td style="border: 0px solid #000; padding: 10px;" width="20%"> : ' . $data_medis["ket_tes28"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Vagina</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes29 . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Keterangan</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["ket_tes29"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Serviks</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $tes30 . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Keterangan</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["ket_tes30"] . '</td>
            </tr>
        </table>

        <h6>PENATALAKSANAAN</h6>
        <table style="border: 1px solid #000; font-size: 10px;" cellspacing="0" width="100%">
            <tr style="border: 1px solid #000;">
                <td style="border: 1px solid #000; padding: 10px; font-weight: bold;" width="30%">Hasil pemeriksaan payudara</td>
                <td style="border: 1px solid #000; padding: 10px;"> : ' . $tes26 . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 1px solid #000; padding: 10px; font-weight: bold;" width="30%">Tindak lanjut</td>
                <td style="border: 1px solid #000; padding: 10px;"> : ' . $tes27  . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 1px solid #000; padding: 10px; font-weight: bold;" width="30%">Hasil pemeriksaan vagina</td>
                <td style="border: 1px solid #000; padding: 10px;"> : ' . $tes31  . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 1px solid #000; padding: 10px; font-weight: bold;" width="30%">Tindak lanjut</td>
                <td style="border: 1px solid #000; padding: 10px;"> : ' . $tes32  . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 1px solid #000; padding: 10px; font-weight: bold;" width="30%">Keterangan tindak lanjut</td>
                <td style="border: 1px solid #000; padding: 10px;"> : ' . $data_medis["ket_tes32"]  . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 1px solid #000; padding: 10px; font-weight: bold;" width="30%">Rujukan</td>
                <td style="border: 1px solid #000; padding: 10px;"> : ' . $tes33  . '</td>
            </tr>
        </table>

        <br>

        <table style="font-size: 10px; width: 100%;">
            <tr>
                <td width="35%"></td>
                <td width="35%"></td>
                <td width="30%" style="text-align: center;">
                    <p>
                        Cianjur, ' . date("d F Y") . '
                        <br>
                        Pemeriksa
                    </p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p>...................................................</p>
                </td>
            </tr>
        </table>

        <table style="font-size: 10px; width: 100%; margin-top: 50px; border: 3px solid #000">
            <tr>
                <td colspan="3" style="padding: 10px;"><b>Persetujuan Tindakan Medik</b></td>
            </tr>
            <tr>
                <td colspan="3" style="padding: 10px;">Bersama ini saya mengetahui bahwa saya didiagnosa : .........................................................................................................................................</td>
            </tr>
            <tr>
                <td colspan="3" style="padding: 10px;">dan bersedia mendapatkan tindakan pengobatan berupa : ...................................................................................................................................</td>
            </tr>
            <tr>
                <td colspan="3" style="padding: 10px;">setelah saya mendapatkan penjelasan dan mengerti akan penyakit dan tujuan tindakan yang akan saya alami.</td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 10px;"></td>
                <td colspan="" style="padding: 10px; text-align: center;">............................., ...................................</td>
            </tr>
            <tr>
                <td style="padding: 10px; width: 33%; text-align: center;">
                    Petugas Pelaksana
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    (............................................................)
                </td>
                <td style="padding: 10px; width: 33%; text-align: center;">
                    Suami / Wali / Saksi
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    (............................................................)
                </td>
                <td style="padding: 10px; width: 33%; text-align: center;">
                    Yang Memberi Persetujuan
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    (............................................................)
                </td>
            </tr>
        </table>
    </body>
';

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);

$stylesheet = file_get_contents('style_print.css');
$mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML("$html", \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->Output('Hasil IVA Tes ' . $data_medis["nama"] . '.pdf', 'I');
// $mpdf->Output();