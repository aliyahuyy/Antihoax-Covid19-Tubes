<?php 

	require '../../../koneksi/koneksi.php';
	$idBerita = $_GET['id'];

	$sql = "DELETE FROM beritahoax WHERE id = '$idBerita'";
	$execute = mysqli_query($koneksi,$sql);
	if ($execute) {
		echo '<script>alert("Berhasil menghapus dari berita hoax")</script>';
		echo "<meta http-equiv='refresh' content='0 url=../indexAdmin.php?halaman=beritaHoax'>";
	}else{
		echo '<script>confirm("Gagal menghapus berita hoax")</script>';
	}

 ?>