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
                        <h4 class="card-title">Data Medis Pasien : <?= $pasien["nama"]; ?> </h4>
                        <p class="card-description">
                            Detail Data Medis Pasien
                        </p>
                    </div>
                    <div class="col-8 col-lg-6 mb-3 justify-content-center">
                        <?php if (!$data_medis) : ?>
                        <?php else : ?>
                            <a class="btn btn-info float-right" href="pasien_data_medis_edit.php?id_data_medis=<?= $data_medis["id_data_medis"]; ?>">Edit</a>
                        <?php endif ?>

                        <a class="btn btn-primary float-right mx-2" href="pasien.php">Kembali</a>
                    </div>
                </div>

                <?php if (!$data_medis) : ?>
                    <div class="text-center">
                        <p class="badge badge-warning mx-auto">
                            <a class="btn btn-info float-right" href="pasien_data_medis_add.php?id_pasien=<?= $id; ?>">Input Data Medis</a>
                        </p>
                    </div>
                <?php else : ?>
                    <p class="card-title">
                        Faktor Resiko
                    </p>
                    <ul class="list-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Nama Lengkap</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">: <?= $data_medis["nama"]; ?></li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Menstruasi < 12 Tahun</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes01"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Usia pertama berhubungan seksual < 17 Tahun</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes02"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Sering Keputihan</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes03"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Merokok</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes04"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Terpapar asap rokok > 1 jam sehari</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes05"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Sering konsumsi buah & sayur (5 Porsi / Hari)</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes06"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Sering konsumsi makanan berlemak</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes07"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Sering konsumsi makanan berpengawet</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes08"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Kurang aktifitas fisik (30 Menit/Hari)</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes09"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Pernah Pap Smear</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes10"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Sering berganti pasangan</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes11"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Riwayat keluarga kangker</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes12"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>

                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Sebutkan jenis kangker</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">: <?= $data_medis["ket_tes12"]; ?></li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Kehamilan pertama > 35 Tahun</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes13"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Pernah menyusui</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes14"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Pernah melahirkan</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes15"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Melahirkan normal >= 4 Kali</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes16"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Menikah > 1 Kali</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes17"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">KB Normonal Pil > 5 Tahun</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes18"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">KB Normonal Suntik > 5 Tahun</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes19"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Riwayat tumor jinak payudara</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes20"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Menopause > 50 Tahun</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes21"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>

                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Obesitas (IMT > 27 kg/m2)</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes13"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>

                    <p class="card-title my-3">
                        Pemeriksaan Payudara
                    </p>
                    <ul class="list-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Kulit</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes23"] == 1) : ?>
                                                Normal
                                            <?php elseif ($data_medis["tes23"] == 2) : ?>
                                                Kulit Jeruk
                                            <?php elseif ($data_medis["tes23"] == 3) : ?>
                                                Penarikan Kulit
                                            <?php elseif ($data_medis["tes23"] == 4) : ?>
                                                Luka Basah
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Areola / Papilia</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes24"] == 1) : ?>
                                                Normal
                                            <?php elseif ($data_medis["tes24"] == 2) : ?>
                                                Retraks
                                            <?php elseif ($data_medis["tes24"] == 3) : ?>
                                                Luka Basah
                                            <?php elseif ($data_medis["tes24"] == 4) : ?>
                                                Cairan ABN Dari Puting
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Benjolan pada payudara</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes25"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Ukuran</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?= $data_medis["ket_tes25"]; ?> Cm
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>

                    <p class="card-title my-3">
                        Pemeriksaan Vagina
                    </p>
                    <ul class="list-group">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Vulva</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes28"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Vagina</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes29"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Serviks</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?php if ($data_medis["tes30"] < 1) : ?>
                                                Tidak
                                            <?php else : ?>
                                                Ya
                                            <?php endif; ?>
                                        </li>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Keterangan</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?= $data_medis["ket_tes28"] ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Keterangan</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?= $data_medis["ket_tes29"] ?>
                                        </li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">Keterangan</li>
                                    </div>
                                    <div class="col-6 col-lg-6">
                                        <li class="list-group-item">:
                                            <?= $data_medis["ket_tes30"] ?>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>

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
                <?php endif ?>
            </div>
        </div>
    </div>
</div>




<?php
include "../templates/footer.php";
?>