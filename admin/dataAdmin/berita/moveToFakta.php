<?php 
	require '../../../koneksi/koneksi.php';

	$idBerita = $_GET['id'];
	$query1=mysqli_query($koneksi,"SELECT * FROM laporhoax WHERE id='$idBerita'");
	$fetch=mysqli_fetch_array($query1);

	// $id=$query1['id'];
	$nama=$fetch['nama'];
	$email=$fetch['email'];
	$judul=$fetch['judul'];
	$cpytxt=$fetch['cpytxt'];
	$cpylink=$fetch['cpylink'];
	$alasan=$fetch['alasan'];
	$imglink=$fetch['imglink'];

	$query2=mysqli_query($koneksi, "INSERT INTO beritafakta (namafkt, emailfkt, judulfkt, cpytxtfkt, cpylinkfkt, alasanfkt, imglinkfkt) VALUES ('$nama', '$email', '$judul', '$cpytxt', '$cpylink', '$alasan', '$imglink')");
	if($query2) {
		echo '<script>alert("Berhasil memindahkan ke fakta")</script>';
		echo "<meta http-equiv='refresh' content='0 url=../indexAdmin.php?halaman=beritaFakta'>";
	} else {
		echo '<script>alert("Gagal Input")</script>';
	}

	$sqldel = "DELETE FROM laporhoax WHERE id = '$idBerita'";
	$execute = mysqli_query($koneksi,$sqldel);
	if (!$execute) {
		echo '<script>alert("gagal menghapus dari lapor hoax")</script>';
	}
 ?>