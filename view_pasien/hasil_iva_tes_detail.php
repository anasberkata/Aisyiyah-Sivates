<?php
include "../templates/header.php";
include "../templates/topbar.php";
include "../templates/aside.php";

$id = $_GET["id_pasien"];
$data_medis = query("SELECT * FROM data_medis
                INNER JOIN data_pasien
                ON data_medis.pasien_id = data_pasien.id_pasien
                WHERE id_pasien = $id")[0];

$pasien = query("SELECT * FROM data_pasien WHERE id_pasien = $id")[0];
?>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-4 col-lg-6">
                        <h4 class="card-title">Hasil IVA Tes Pasien : <?= $pasien["nama"]; ?> </h4>
                        <p class="card-description">
                            Detail Hasil IVA Tes
                        </p>
                    </div>
                    <div class="col-8 col-lg-6 mb-3 justify-content-center">
                        <a class="btn btn-primary float-right mx-2" href="hasil_iva_tes.php">Kembali</a>
                    </div>
                </div>

                <p class="card-title my-3">
                    Penatalaksanaan
                </p>
                <ul class="list-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-6 col-lg-6">
                                    <li class="list-group-item font-weight-bold">Hasil pemeriksaan payudara</li>
                                </div>
                                <div class="col-6 col-lg-6">
                                    <li class="list-group-item">:
                                        <?php if ($data_medis["tes26"] == 1) : ?>
                                            <span class="badge bg-gradient-success">Normal</span>
                                        <?php elseif ($data_medis["tes26"] == 2) : ?>
                                            <span class="badge bg-gradient-warning">Kemungkinan kelainan payudara jinak</span>
                                        <?php elseif ($data_medis["tes26"] == 3) : ?>
                                            <span class="badge bg-gradient-danger">kemungkinan kelainan payudara ganas</span>
                                        <?php endif; ?>
                                    </li>
                                </div>

                                <div class="col-6 col-lg-6">
                                    <li class="list-group-item">Tindak Lanjut</li>
                                </div>
                                <div class="col-6 col-lg-6">
                                    <li class="list-group-item">:
                                        <?php if ($data_medis["tes27"] == 1) : ?>
                                            Anjurkan SADARI setiap tahun
                                        <?php elseif ($data_medis["tes27"] == 2) : ?>
                                            Pemeriksaan payudara 1 tahun sekali
                                        <?php elseif ($data_medis["tes27"] == 3) : ?>
                                            Pemeriksaan mammografi pada usia <code> > </code> 40 tahun
                                        <?php elseif ($data_medis["tes27"] == 4) : ?>
                                            Rujukan untuk pemeriksaan lanjutan
                                        <?php endif; ?>
                                    </li>
                                </div>

                                <div class="col-6 col-lg-6">
                                    <li class="list-group-item font-weight-bold">Hasil pemeriksaan vagina</li>
                                </div>
                                <div class="col-6 col-lg-6">
                                    <li class="list-group-item">:
                                        <?php if ($data_medis["tes31"] == 1) : ?>
                                            <span class="badge bg-gradient-success">IVA Negatif</span>
                                        <?php elseif ($data_medis["tes31"] == 2) : ?>
                                            <span class="badge bg-gradient-warning">IVA Positif</span>
                                        <?php elseif ($data_medis["tes31"] == 3) : ?>
                                            <span class="badge bg-gradient-danger">Diduga IMS</span>
                                        <?php endif; ?>
                                    </li>
                                </div>

                                <div class="col-6 col-lg-6">
                                    <li class="list-group-item">Tindak Lanjut</li>
                                </div>
                                <div class="col-6 col-lg-6">
                                    <li class="list-group-item">:
                                        <?php if ($data_medis["tes32"] == 1) : ?>
                                            Anjurkan kembali setelah 5 tahun untuk melakukan tes (Bila tanpa keluhan)
                                        <?php elseif ($data_medis["tes32"] == 2) : ?>
                                            Anjurkan datang segera (Bila ada keluhan)
                                        <?php elseif ($data_medis["tes32"] == 3) : ?>
                                            Beri konseling tentang resiko kanker leher rahim dan pilihan pengobatan
                                        <?php elseif ($data_medis["tes32"] == 4) : ?>
                                            Menerima pengobatan yang dianjurkan
                                        <?php elseif ($data_medis["tes32"] == 5) : ?>
                                            Tanggal kunjungan ulang
                                        <?php elseif ($data_medis["tes32"] == 6) : ?>
                                            Krioterapi (Petunjuk diberikan)
                                        <?php elseif ($data_medis["tes32"] == 7) : ?>
                                            Lainnya (Petunjuk diberikan)
                                        <?php elseif ($data_medis["tes32"] == 8) : ?>
                                            Diobati
                                        <?php elseif ($data_medis["tes32"] == 9) : ?>
                                            Dirujuk
                                        <?php endif; ?>
                                    </li>
                                </div>

                                <div class="col-6 col-lg-6">
                                    <li class="list-group-item">Keterangan Tindak Lanjut</li>
                                </div>
                                <div class="col-6 col-lg-6">
                                    <li class="list-group-item">:
                                        <?= $data_medis["ket_tes32"] ?>
                                    </li>
                                </div>

                                <div class="col-6 col-lg-6">
                                    <li class="list-group-item">Rujukan</li>
                                </div>
                                <div class="col-6 col-lg-6">
                                    <li class="list-group-item">:
                                        <?php if ($data_medis["tes33"] == 1) : ?>
                                            Curiga kanker leher rahim
                                        <?php elseif ($data_medis["tes33"] == 2) : ?>
                                            Lesi <code> > </code> 75%
                                        <?php elseif ($data_medis["tes33"] == 3) : ?>
                                            Lesi <code> > </code> 2 mm melebihi ujung prob krio
                                        <?php elseif ($data_medis["tes33"] == 4) : ?>
                                            Lesi meluas sampai dinding vagina
                                        <?php elseif ($data_medis["tes33"] == 5) : ?>
                                            Dirujuk untuk tes atau pengobatan lanjutan
                                        <?php endif; ?>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>

            </div>
        </div>
    </div>
</div>




<?php
include "../templates/footer.php";
?>