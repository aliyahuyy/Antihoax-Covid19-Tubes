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


        $sqlUpdate = "UPDATE beritafakta SET namafkt='$nama', emailfkt='$email', judulfkt='$judul', cpytxtfkt='$textBerita', cpylinkfkt='$linkBerita', alasanfkt='$alasan', imglinkfkt='$imglink' WHERE id = '$id'";
        $executeUpdate = mysqli_query($koneksi,$sqlUpdate) or die(mysqli_error());;

        if ($executeUpdate) {
            echo '<script>alert("Berhasil update berita")</script>';
            echo "<meta http-equiv='refresh' content='0 url=../indexAdmin.php?halaman=beritaFakta'>";
        }else{
            echo "gagal";
        }
    }
 ?>