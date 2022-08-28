<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

header("Location: index.php?pesan_logout=Anda Berhasil Logout!");
exit;
