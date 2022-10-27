<?php
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
 	<script type="text/javascript" src="asset/js/jquery.js"></script>
 	<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<!-- Data Tables -->
    <script type="text/javascript" src="asset/DataTables/media/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" type="text/css" href="asset/DataTables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="asset/DataTables/media/css/dataTables.bootstrap.css">
	<link rel="stylesheet" type="text/css" href="asset/DataTables/media/css/dataTables.bootstrap.min.css">
	<script type="text/javascript" src="asset/DataTables/media/js/dataTables.bootstrap.min.js"></script>
</head>
<body>
	<nav id="anticovid" class="navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" id="toogle-button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Anti Hoax Covid 19</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-left">

					<li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Berita <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="index.php?halaman=beritafakta">Berita Fakta</a></li>

			            <li role="separator" class="divider"></li>
			             <li><a href="index.php?halaman=beritahoax">Berita Hoax</a></li>
			           
			          </ul>
			        </li>

				    <li><a href="index.php?halaman=lapor_hoax">Lapor Hoax</a></li>
					<li><a href="index.php?halaman=about">Tentang Kami</a></li>
				    <li><a href="#footer">Kontak</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="col-md-12-fluid">
		<?php
			if($halaman==null){
				include 'beranda/beranda.php';
			}else{
				if($halaman=='about'){
					include 'about/about.php';
				}
				if($halaman=='lapor_hoax'){
					include 'lapor hoax/lapor_hoax.php';
				}
				if($halaman=='forum'){
					include 'forum/forum.php';
				}
                
                if($halaman=='beritafakta'){
                    include 'berita/beritafakta.php';
                }
                 if($halaman=='beritahoax'){
                    include 'berita/beritahoax.php';
                }
                if($halaman=='halamanberitafkt'){
                    include 'berita/halamanberitafkt.php';
                }
                 if($halaman=='halamanberitahx'){
                    include 'berita/halamanberitahx.php';
                }
			}
		?>
		<footer>  

            <div class="container" id="footer">  
                <div class="footer-cta">  
                    <div class="row">  
                         <div class="col-xl-4 col-md-4 mb-30">  
                            <div class="single-cta">  
                                <div class="footer-text">  
                                    <h4> Kategori </h4>  
                                        <ul>
                                            <li style="list-style: none">
                                                <a href="index.php" style="text-decoration: none;"> Beranda </a>
                                            </li>
                                            <li style="list-style: none">
                                                <a href="index.php?halaman=lapor_hoax" style="text-decoration: none;"> Lapor Hoax </a>
                                            </li>
                                            <li style="list-style: none">
                                                <a href="index.php?halaman=about" style="text-decoration: none;"> Tentang Kami </a>
                                            </li>
                                        </ul>
                                </div>  
                            </div>  
                        </div>  
                        <div class="col-xl-4 col-md-4 mb-30">  
                            <div class="single-cta">  
                                <div class="footer-text">  
                                    <h4> Kontak Kami </h4> 
                                    <ul>
                                        <li style="list-style: none"><span> Telepon : +62 821 999 999 </span></li>  
                                        <li style="list-style: none"><span> Email : Antihoaxcovid19@gmail.com </span> </li> 
                                        <li style="list-style: none"><span> Facebook : Anti Hoax Covid19</span> </li>
                                        <li style="list-style: none"><span> Instagram : @AntihoaxCovid19</span> </li>
                                    </ul> 
                                    
                                </div>  
                            </div>  
                        </div>  
                        <div class="col-xl-4 col-md-4 mb-30">  
                            <div class="single-cta">  
                                <div class="footer-text">  
                                    <h4> Alamat </h4>  
                                    <span> Bandung, Bojongsoang <span>  
                                </div>  
                            </div>  
                        </div>  
                    </div>  
                </div>  
            </div>  
        </footer>  
	</div>





 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>
</html>
	