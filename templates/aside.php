<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="../view_admin/dashboard.php">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Data Pasien</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="../view_pasien/pasien.php">Pasien</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../view_pasien/hasil_iva_tes.php">Hasil IVA Test</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Data Pengguna</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="../view_user/users.php">Daftar User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../view_user/profile.php">Profile Saya</a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="../login/logout.php" onclick="return confirm('Yakin ingin keluar dari aplikasi?');">
                <i class="ti-power-off menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-8 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Selamat Datang <?= $my_profile["nama"] ?></h3>
                        <h6 class="font-weight-normal mb-0">
                            Selamat datang di aplikasi IVA Test
                        </h6>
                    </div>
                    <div class="col-4 col-xl-4">
                        <div class="justify-content-end d-flex">
                            <i class="mdi mdi-calendar"></i> <?= date("d M Y"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>