<?php 
	require '../../koneksi/koneksi.php';
	session_start();
	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
		$login=mysqli_query($koneksi,$sql);
		$fetch=mysqli_fetch_array($login);

		if($fetch['username'] >= 0){
			if($fetch['level']==1){
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['level'] = 1;
				header('Location:../dataAdmin/indexAdmin.php');
			}else{
				echo "<script>alert('Username atau password salah!')</script>";
			}
		}
	}

	// if(isset($_POST['login'])){
	// 	$username=$_POST['username'];
	// 	$password=$_POST['password'];
	// 	$login=mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");
	// 	$fetch=mysqli_fetch_array($login);

	// 	if($fetch['username'] >= 0){
	// 		if($fetch['level']==1){
	// 			$_SESSION['username'] = $username;
	// 			$_SESSION['password'] = $password;
	// 			$_SESSION['level'] = 1;
	// 			echo "kontol";
	// 		}else{
	// 			echo "<script>alert('Username atau password salah!')</script>";
	// 		}
	// 	}
	// }
 ?>