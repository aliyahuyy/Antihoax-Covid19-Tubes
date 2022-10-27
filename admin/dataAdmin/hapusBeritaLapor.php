<?php 
	require '../../koneksi/koneksi.php';
	$idBerita = $_GET['id'];

	$sqldel = "DELETE FROM laporhoax WHERE id = '$idBerita'";
	$execute = mysqli_query($koneksi,$sqldel);
	if ($execute) {
		echo '<script>alert("Berhasil menghapus dari lapor hoax")</script>';
		echo "<meta http-equiv='refresh' content='0 url=indexAdmin.php'>";
	}

 ?>