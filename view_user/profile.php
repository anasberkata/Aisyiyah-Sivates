<?php
include "../templates/header.php";
include "../templates/topbar.php";
include "../templates/aside.php";
?>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title">Profile Anda</h4>
                        <p class="card-description">
                            Detail data pribadi
                        </p>
                    </div>
                    <div class="col">
                        <a class="btn btn-primary float-right" href="profile_edit.php?id_user=<?= $my_profile["id_user"]; ?>">Edit</a>
                    </div>
                </div>

                <ul class="list-group">
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Nama</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $my_profile["nama"]; ?></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">E-Mail</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $my_profile["email"]; ?></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Username</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $my_profile["username"]; ?></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Password</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $my_profile["password"]; ?></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Role</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= $my_profile["role"]; ?></li>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <li class="list-group-item">Aktif Sejak</li>
                        </div>
                        <div class="col-6 col-lg-8">
                            <li class="list-group-item">: <?= date('d F Y', strtotime($my_profile["date_created"])); ?></li>
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