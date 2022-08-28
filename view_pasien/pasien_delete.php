<?php
session_start();

if (!isset($_SESSION['login'])) {
	header("Location: ../login/index.php");
	exit;
}

require "../functions.php";

$id = $_GET["id_pasien"];

if (pasien_delete($id) > 0) {
	echo "
		<script>
			alert('Pasien berhasil dihapus!');
			document.location.href = 'pasien.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('Pasien gagal dihapus!');
			document.location.href = 'pasien.php';
		</script>

	";
}
