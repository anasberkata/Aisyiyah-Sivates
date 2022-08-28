<?php
include "../templates/header.php";
include "../templates/topbar.php";
include "../templates/aside.php";

$id = $_GET["id_user"];
$user = query("SELECT * FROM users
                INNER JOIN user_role
                ON users.role_id = user_role.id_role
                WHERE id_user = $id")[0];

$role = query("SELECT * FROM user_role");



if (isset($_POST["profile_edit"])) {

    if (profile_edit($_POST) > 0) {
        echo "<script>
            alert('Data Profile Anda Berhasil Diubah!');
            document.location.href = 'profile.php';
            </script>";
    } else {
        echo "<script>
            alert('Data Profile Anda Gagal Diubah!');
            document.location.href = 'profile.php';
            </script>";
    }
}
?>

<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title">Edit Profile Anda</h4>
                        <p class="card-description">
                            Ubah data profile anda
                        </p>
                    </div>
                    <div class="col">
                        <a class="btn btn-primary float-right" href="profile.php">Kembali</a>
                    </div>
                </div>

                <form class="form-sample" action="" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <input type="hidden" class="form-control" name="id_user" value="<?= $user['id_user']; ?>" />
                                <label class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama" value="<?= $user['nama']; ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" value="<?= $user['email']; ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="username" value="<?= $user['username']; ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" value="<?= $user['password']; ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-block btn-primary font-weight-medium auth-form-btn" name="profile_edit">Ubah</button>
                                </div>
                            </div>
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