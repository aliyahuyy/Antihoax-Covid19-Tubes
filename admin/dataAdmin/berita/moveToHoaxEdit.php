<?php 
	require '../../../koneksi/koneksi.php';

	$idBerita = $_GET['id'];
	$query1=mysqli_query($koneksi,"SELECT * FROM beritafakta WHERE id='$idBerita'");
	$fetch=mysqli_fetch_array($query1);

	// $id=$query1['id'];
	$nama=$fetch['namafkt'];
	$email=$fetch['emailfkt'];
	$judul=$fetch['judulfkt'];
	$cpytxt=$fetch['cpytxtfkt'];
	$cpylink=$fetch['cpylinkfkt'];
	$alasan=$fetch['alasanfkt'];
	$imglink=$fetch['imglinkfkt'];

	$query2=mysqli_query($koneksi, "INSERT INTO beritahoax (namahx, emailhx, judulhx, cpytxthx, cpylinkhx, alasanhx, imglinkhx) VALUES ('$nama', '$email', '$judul', '$cpytxt', '$cpylink', '$alasan', '$imglink')");
	if($query2) {
		echo '<script>alert("Berhasil memindahkan ke hoax")</script>';
		echo "<meta http-equiv='refresh' content='0 url=../indexAdmin.php?halaman=beritaHoax'>";
	} else {
		echo '<script>alert("Gagal Input")</script>';
	}

	$sqldel = "DELETE FROM beritafakta WHERE id = '$idBerita'";
	$execute = mysqli_query($koneksi,$sqldel);
	if (!$execute) {
		echo '<script>alert("gagal menghapus dari lapor hoax")</script>';
	}
 ?>