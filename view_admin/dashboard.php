<?php
include "../templates/header.php";
include "../templates/topbar.php";
include "../templates/aside.php";

$today = date("Y-m-d");
$toweek = date('Y-m-d', strtotime('+7 days', strtotime($today)));;

$pasien = query("SELECT * FROM data_pasien WHERE tanggal_pendaftaran BETWEEN '$today' AND '$toweek'");
$pasien_negatif = query("SELECT * FROM data_pasien INNER JOIN data_medis ON data_medis.pasien_id = data_pasien.id_pasien WHERE tes31 = 1");
$pasien_positif = query("SELECT * FROM data_pasien INNER JOIN data_medis ON data_medis.pasien_id = data_pasien.id_pasien WHERE tes31 = 2");
$users = query("SELECT * FROM users");

$total_pasien = count($pasien);
$total_pasien_negatif = count($pasien_negatif);
$total_pasien_positif = count($pasien_positif);
$total_users = count($users);

$file = file_get_contents("https://cuaca.umkt.ac.id/api/cuaca/DigitalForecast-JawaBarat.xml");
$cuaca = json_decode($file, true);

$prov = $cuaca["row"]["data"]["forecast"]["area"][4]["@domain"];
$kab = $cuaca["row"]["data"]["forecast"]["area"][4]["name"][1]["#text"];
$suhu = $cuaca["row"]["data"]["forecast"]["area"][4]["parameter"][2]["timerange"][0]["value"][0]["#text"];

// include('../weather-class.inc.php'); // This has all the code.

// $w = new Weather('-6.819340037616046', '107.1390587409695');
// echo $w->getLocation()->getWeather()->sayHuman();
// Ouput~: Portsmouth, England, PO4 8 | Partly Cloudy 4°C, Humidity: 93%, Wind: N at 8 mph
?>


<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card tale-bg">
            <div class="card-people mt-auto">
                <img src="../assets/images/dashboard/people.svg" alt="people" />
                <div class="weather-info">
                    <div class="d-flex">
                        <div>
                            <h2 class="mb-0 font-weight-normal">
                                <?= $suhu; ?><sup>o</sup> C
                            </h2>
                        </div>
                        <div class="ml-2">
                            <h4 class="location font-weight-normal"><?= $kab; ?></h4>
                            <h6 class="font-weight-normal"><?= $prov; ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin transparent">
        <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-tale">
                    <div class="card-body">
                        <p class="mb-4">Jumlah Pasien Minggu ini
                            <br> <?= date("d") . " s/d " . date("d") + 7 . " " . date("M") . " " . date("Y"); ?>
                        </p>
                        <p class="fs-30 mb-2"><?= $total_pasien; ?> Pasien</p>
                        <p>Terdaftar</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                    <div class="card-body">
                        <p class="mb-4">Pasien Negatif</p>
                        <p class="fs-30 mb-2"><?= $total_pasien_negatif; ?> Pasien</p>
                        <p>Negatif</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                <div class="card card-light-blue">
                    <div class="card-body">
                        <p class="mb-4">Pasien Positif</p>
                        <p class="fs-30 mb-2"><?= $total_pasien_positif; ?> Pasien</p>
                        <p>Positif</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 stretch-card transparent">
                <div class="card card-light-danger">
                    <div class="card-body">
                        <p class="mb-4">Jumlah Pengguna</p>
                        <p class="fs-30 mb-2"><?= $total_users; ?> Pengguna</p>
                        <p>Applikasi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include "../templates/footer.php";
?>