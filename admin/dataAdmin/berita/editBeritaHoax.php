<?php 
	require '../../../koneksi/koneksi.php';

 //    $id = $_GET['IDPenginput'];
	if (isset($_POST['simpan'])) {
		$id = $_POST['IDPenginput'];
        $nama = $_POST['namaPenginput'];
        $email = $_POST['emailPenginput'];
        $judul = $_POST['judul'];
        $textBerita = $_POST['textBerita'];
        $linkBerita = $_POST['linkBerita'];
        $alasan = $_POST['alasan'];
        $imglink = $_POST['imglink'];


        $sqlUpdate = "UPDATE beritahoax SET namahx='$nama', emailhx='$email', judulhx='$judul', cpytxthx='$textBerita', cpylinkhx='$linkBerita', alasanhx='$alasan', imglinkhx='$imglink' WHERE id = '$id'";
        $executeUpdate = mysqli_query($koneksi,$sqlUpdate) or die(mysqli_error());;

        if ($executeUpdate) {
            echo '<script>alert("Berhasil update berita")</script>';
            echo "<meta http-equiv='refresh' content='0 url=../indexAdmin.php?halaman=beritaHoax'>";
        }else{
            echo "gagal";
        }
    }
 ?>