<?php 

	require '../../../koneksi/koneksi.php';
	$idBerita = $_GET['id'];

	$sql = "DELETE FROM beritafakta WHERE id = '$idBerita'";
	$execute = mysqli_query($koneksi,$sql);
	if ($execute) {
		echo '<script>alert("Berhasil menghapus dari berita fakta")</script>';
		echo "<meta http-equiv='refresh' content='0 url=../indexAdmin.php?halaman=beritaFakta'>";
	}else{
		echo '<script>confirm("Gagal menghapus berita hoax")</script>';
	}

 ?>