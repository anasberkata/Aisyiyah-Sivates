<?php

// require_once __DIR__ . '/vendor/autoload.php';
require_once '../vendor/autoload.php';
require '../functions.php';

$tanggal = $_GET["tanggal_daftar"];
$pasien = query("SELECT * FROM data_pasien WHERE tanggal_pendaftaran = '$tanggal'");

$total_pasien = count($pasien);

$html = '
        <div style="text-align: center; font-size: 12px;">
            <h6>SIVATES</h6>
            <h6>MAJLIS KESEHATAN AISYIYAH CIANJUR</h6>
        </div>

        <ul style="text-align: justify; font-size: 10px; list-style: none; margin-left: -40px;">
            <li>Nama Pendaftar: <b>' . $_GET["nama"] . '</b></li>
            <li>Tanggal Pendaftaran : ' . date('d F Y', strtotime($_GET["tanggal_daftar"])) . '</li>
        </ul>

        <div style="margin-top: 5px; text-align: center;">
            <p style="font-size: 10px;">Nomor Antrian Anda :</p>
            <h1>' . $total_pasien . '</h1>
        </div>

';

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A7']);

$stylesheet = file_get_contents('style_print.css');
$mpdf->WriteHTML("$html", \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->Output('Antrian MK Aisyiyah.pdf', 'I');
// $mpdf->Output();
