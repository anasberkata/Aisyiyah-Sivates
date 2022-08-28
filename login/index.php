<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: ../view_admin/dashboard.php");
  exit;
}

include "auth_header.php";
?>

<div class="col-lg-4 mx-auto">
  <div class="auth-form-light text-left py-5 px-4 px-sm-5">
    <div class="brand-logo d-flex justify-content-center">
      <img src="../assets/images/logoaisyiyah.png" alt="logo" class="mx-auto">
    </div>
    <h4 class="font-weight-bolder text-center mb-3">SIVATES</h4>
    <h6 class="font-weight-light text-center">MAJLIS KESEHATAN AISYIYAH CIANJUR</h6>

    <?php if (isset($_GET["pesan"])) : ?>
      <p class="alert alert-danger"><?= $_GET["pesan"]; ?></p>
    <?php elseif (isset($_GET["pesan_logout"])) : ?>
      <p class="alert alert-success"><?= $_GET["pesan_logout"]; ?></p>
    <?php endif; ?>

    <form class="pt-3" action="check_login.php" method="POST">
      <div class="form-group">
        <input type="text" class="form-control form-control-lg" id="username" placeholder="Username" name="username" required>
      </div>
      <div class="form-group">
        <input type="password" class="form-control form-control-lg" id="password" placeholder="Password" name="password" required>
      </div>
      <div class="mt-3">
        <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
      </div>

      <!-- <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div> -->
    </form>
  </div>
</div>

<?php include "auth_footer.php"; ?>