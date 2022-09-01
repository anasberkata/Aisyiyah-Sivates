<?php
include "../templates/header.php";
include "../templates/topbar.php";
include "../templates/aside.php";

$users = query("SELECT * FROM users
                INNER JOIN user_role
                ON users.role_id = user_role.id_role");
?>

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4 class="card-title">Daftar Pengguna</h4>
                        <p class="card-description">
                            Daftar pengguna yang bisa login
                        </p>
                    </div>

                    <?php if ($my_profile["role_id"] == 1) : ?>
                        <div class="col">
                            <a class="btn btn-primary float-right" href="user_add.php">Tambah</a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <?php if ($my_profile["role_id"] == 1) : ?>
                                    <th>Aksi</th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($users as $u) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $u["nama"]; ?></td>
                                    <td><?= $u["username"]; ?></td>
                                    <td><?= $u["email"]; ?></td>
                                    <td><?= $u["role"]; ?></td>

                                    <?php if ($my_profile["role_id"] == 1) : ?>
                                        <td>
                                            <a class="badge badge-info" href="user_edit.php?id_user=<?= $u['id_user'] ?>">edit</a>
                                            <a class="badge badge-danger" href="user_delete.php?id_user=<?= $u['id_user'] ?>" onclick="return confirm('Yakin ingin menghapus pengguna : <?= $u['nama'] ?>?');">hapus</a>
                                        </td>
                                    <?php endif; ?>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




<?php
include "../templates/footer.php";
?>