<?php 
	require '../../koneksi/koneksi.php';
	session_start();
	session_destroy();
	header('location:../login/login.php');
?>