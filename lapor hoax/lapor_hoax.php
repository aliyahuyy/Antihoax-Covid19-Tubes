
<div class="container">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3>Form Input Bukti Berita Hoax</h3>
		</div>
		<div class="panel-body">
			<form method="post" action="">
		  		<div class="form-group">
		  			<label style=" color: black;">Nama</label>
		  			<input type="text" name="nama" class="form-control" placeholder="Input nama anda disini" required>
		  		</div><br>
		  		<div class="form-group">
		  			<label style=" color: black;">Email</label>
		  			<input type="text" name="email" class="form-control" placeholder="Input email anda disini" required>
		  		</div><br>
		  		<div class="form-group">
		  			<label style=" color: black;">Judul Laporan Berita</label>
		  			<input type="text" name="judul" class="form-control" placeholder="Input judul berita yang ingin anda laporkan" required>
		  		</div><br>
		  		<div class="form-group">
		  			<label style=" color: black;">Copy text dari berita hoax</label>
		  			<textarea class="form-control" name="cpytxt" rows="4" placeholder="mohon copy text dari berita hoax disini" required></textarea>
		  		</div><br>
		  		<div class="form-group">
		  			<label style=" color: black;">Copy link website dari berita hoax</label>
		  			<input type="text" class="form-control" name="cpylink" rows="4" placeholder="mohon copy link website dari berita hoax disini" required></input>
		  		</div><br>
		  		<div class="form-group">
		  			<label style=" color: black;">Copy Link gambar berita</label>
		  			<input class="form-control" name="imglink" rows="4" placeholder="mohon copy link gambar berita disini" required></input>
		  		</div><br>
		  		<div class="form-group">
		  			<label style=" color: black;">Berikan alasan mengapa ini berita hoax</label>
		  			<textarea class="form-control" name="alasan" rows="4" placeholder="mohon berikan alasan anda..." required></textarea>
		  		</div><br>
		  		
		  		<div class="form-group">
		  		<input type="submit" name="proses" class="rounded btn btn-info form-control" value="Kirim">
		  		</div>
	  		</form>
		</div>
	</div>
	  	
	    
	  </div>
	</div>
</div>
  	
  	<!-- <script>
	function terimakasih() {
  	
  	alert("Terimakasih telah mengirim lapor hoax");
	}	
	</script>
 -->

<?php 
include 'koneksi/koneksi.php';

if(isset($_POST['proses'])){
	mysqli_query($koneksi, "INSERT INTO laporhoax set

		nama    = '$_POST[nama]',
		email   = '$_POST[email]',
		judul   = '$_POST[judul]',
		cpytxt  = '$_POST[cpytxt]',
		cpylink = '$_POST[cpylink]',
		alasan  = '$_POST[alasan]',
		imglink = '$_POST[imglink]'
		");
	
echo '<script>alert("Terimakasih, Data anda telah tersimpan")</script>';
}

// $nama = $_POST['nama'];
// $email = $_POST['email'];
// $judul = $_POST['judul'];
// $cpytxt = $_POST['cpytxt'];
// $cpylink = $_POST['cpylink'];
// $alasan = $_POST['alasan'];

// $query = "INSERT INTO laporhoax VALUES('$nama', '$email', '$judul', '$cpytxt', '$alasan')";

// mysqli_query($koneksi, $query)
?>