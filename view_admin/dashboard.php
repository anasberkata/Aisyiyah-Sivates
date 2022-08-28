<?php
include "../templates/header.php";
include "../templates/topbar.php";
include "../templates/aside.php";

// $karyawan = query("SELECT * FROM karyawan");
// $gaji = query("SELECT * FROM gaji");

// $total_karyawan = count($karyawan);
// $total_gaji = count($gaji);




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
                                <i class="icon-sun mr-2"></i>28<sup>C</sup>
                            </h2>
                        </div>
                        <div class="ml-2">
                            <h4 class="location font-weight-normal">Cianjur</h4>
                            <h6 class="font-weight-normal">Jawa Barat</h6>
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
                            <br> <?= date("d") . " s/d " . date("d") + 7 . " " . date("Y"); ?>
                        </p>
                        <p class="fs-30 mb-2">20</p>
                        <p>Terdaftar</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                    <div class="card-body">
                        <p class="mb-4">Pasien Negatif</p>
                        <p class="fs-30 mb-2">15</p>
                        <p>Pasien</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                <div class="card card-light-blue">
                    <div class="card-body">
                        <p class="mb-4">Pasien Positif</p>
                        <p class="fs-30 mb-2">5</p>
                        <p>Pasien</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 stretch-card transparent">
                <div class="card card-light-danger">
                    <div class="card-body">
                        <p class="mb-4">Jumlah Pengguna</p>
                        <p class="fs-30 mb-2">3</p>
                        <p>Pengguna</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include "../templates/footer.php";
?>