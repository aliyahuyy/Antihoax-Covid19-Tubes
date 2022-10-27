<?php
	require '../../koneksi/koneksi.php';
	session_start();
	if($_SESSION['level']!= 1){
		header('location:../login/login.php?andaharuslogin');
	}

	if(isset($_GET['halaman'])) {
		$halaman=$_GET['halaman'];
	}else{
		$halaman=null;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Anti Hoax Covid 19</title>
	<!-- bootstrap -->
 	<script type="text/javascript" src="../../asset/js/jquery.js"></script>
 	<script type="text/javascript" src="../../asset/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" type="text/css" href="../../asset/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="../../asset/css/style.css">
	<!-- Data Tables -->
    <script type="text/javascript" src="../../asset/DataTables/media/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" type="text/css" href="../../asset/DataTables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="../../asset/DataTables/media/css/dataTables.bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../asset/DataTables/media/css/dataTables.bootstrap.min.css">
	<script type="text/javascript" src="../../asset/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	
</head>
<body style="color: black">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="indexAdmin.php">Anti Hoax Covid 19</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="indexAdmin.php?halaman=inputanBerita">Berita Inputan Terbaru</a></li>
					<li><a href="indexAdmin.php?halaman=beritaHoax">Berita Hoax</a></li>
				    <li><a href="indexAdmin.php?halaman=beritaFakta">Berita Fakta</a></li>
				    <li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Admin <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="indexAdmin.php?halaman=logout" onclick="return confirm('Apakah anda yakin ingin keluar ?')">Logout</a></li>
						</ul>
	      			</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="col-md-12">
		<?php
			if($halaman==null){
				include 'berandaAdmin.php';
			}else{
				if($halaman=='inputanBerita'){
					include 'berandaAdmin.php';
				}
				if($halaman=='beritaHoax'){
					include 'berita/beritaHoax.php';
				}
				if($halaman=='beritaFakta'){
					include 'berita/beritaFakta.php';
				}
				// if ($halaman=='moveFakta') {
				// 	include 'berita/moveToFakta.php'
				// }
				// if ($halaman=='moveHoax') {
				// 	include 'berita/moveToHoax.php'
				// }
				if($halaman=='logout'){
					include '../logout/logout.php';
				}
			}
		?>
</body>
<script type="text/javascript">
	$(document).ready(function(){
	$('.data').DataTable();
	});
</script>
</html>