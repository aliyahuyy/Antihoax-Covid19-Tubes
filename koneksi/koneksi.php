<?php 
	define('HOST','localhost');
	define('USER', 'root');
	define('PASS', '');
	define('DB', 'antihoax');

	$koneksi=mysqli_connect(HOST,USER,PASS,DB);
	if (!$koneksi) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
 ?>