<?php

// require_once __DIR__ . '/vendor/autoload.php';
require_once '../vendor/autoload.php';
require '../functions.php';

$id = $_GET["id_pasien"];
$data_medis = query("SELECT * FROM data_medis
                INNER JOIN data_pasien
                ON data_medis.pasien_id = data_pasien.id_pasien
                WHERE id_pasien = $id")[0];

$pasien = query("SELECT * FROM data_pasien
                INNER JOIN data_objektif
                ON data_pasien.id_pasien = data_objektif.pasien_id
                WHERE id_pasien = $id")[0];

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
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Nama Pasien</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $pasien["nama"] . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Nama Suami</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $pasien["nama_suami"] . '</td>
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
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Menstruasi < 12 Tahun</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes01"] . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Riwayat keluarga kangker</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes12"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Usia pertama berhubungan seksual < 17 Tahun</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes02"] . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Jenis Kangker</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["ket_tes12"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Sering Keputihan</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes03"] .  '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Kehamilan pertama > 35 Tahun</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes13"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Merokok</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes04"] . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Pernah menyusui</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes14"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Terpapar asap rokok > 1 Jam / Hari</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes05"] . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Pernah melahirkan</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes15"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Sering konsumsi buah & sayur</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes06"] . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Meahirkan normal >= 4 Kali</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes15"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Sering konsumsi makanan berlemak</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes07"] . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Menikah > 1 Kali</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes17"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Sering konsumsi makanan berpengawet</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes08"] . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">KB Normonal, Pil > 5 Tahuna</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes18"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Kurang aktifitas fisik (30 Menit / Hari)</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes09"] . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">KB Normonal, Suntik > 5 Tahuna</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes19"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Pernah Pap Smear</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes10"] . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Riwayat tumor jinak payudara</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes20"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Sering berganti pasangan</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes11"] . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Menopause > 50 Tahun</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes21"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;" colspan="2"></td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Obesitas (IMT > 27 Kg/m2)</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes22"] . '</td>
            </tr>
        </table>

        <h6>PEMERIKSAAN PAYUDARA</h6>
        <table style="border: 0px solid #000; font-size: 10px;" cellspacing="0" width="100%">
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Kulit</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes23"] . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Areola / Papilla</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes24"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Benjolan pada payudara</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes25"] . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Ukuran</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["ket_tes25"] . '</td>
            </tr>
        </table>

        <h6>PEMERIKSAAN VAGINA</h6>
        <table style="border: 0px solid #000; font-size: 10px;" cellspacing="0" width="100%">
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Vulva</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes28"] . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Keterangan</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["ket_tes28"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Vagina</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes29"] . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Keterangan</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["ket_tes29"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Serviks</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["tes30"] . '</td>
                <td style="border: 0px solid #000; padding: 10px; font-weight: bold;">Keterangan</td>
                <td style="border: 0px solid #000; padding: 10px;"> : ' . $data_medis["ket_tes30"] . '</td>
            </tr>
        </table>

        <h6>PENATALAKSANAAN</h6>
        <table style="border: 1px solid #000; font-size: 10px;" cellspacing="0" width="100%">
            <tr style="border: 1px solid #000;">
                <td style="border: 1px solid #000; padding: 10px; font-weight: bold;" width="30%">Hasil pemeriksaan payudara</td>
                <td style="border: 1px solid #000; padding: 10px;"> : ' . $data_medis["tes26"] . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 1px solid #000; padding: 10px; font-weight: bold;" width="30%">Tindak lanjut</td>
                <td style="border: 1px solid #000; padding: 10px;"> : ' . $data_medis["tes27"]  . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 1px solid #000; padding: 10px; font-weight: bold;" width="30%">Hasil pemeriksaan vagina</td>
                <td style="border: 1px solid #000; padding: 10px;"> : ' . $data_medis["tes31"]  . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 1px solid #000; padding: 10px; font-weight: bold;" width="30%">Tindak lanjut</td>
                <td style="border: 1px solid #000; padding: 10px;"> : ' . $data_medis["tes32"]  . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 1px solid #000; padding: 10px; font-weight: bold;" width="30%">Keterangan tindak lanjut</td>
                <td style="border: 1px solid #000; padding: 10px;"> : ' . $data_medis["ket_tes32"]  . '</td>
            </tr>
            <tr style="border: 1px solid #000;">
                <td style="border: 1px solid #000; padding: 10px; font-weight: bold;" width="30%">Rujukan</td>
                <td style="border: 1px solid #000; padding: 10px;"> : ' . $data_medis["tes33"]  . '</td>
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