<?php

	require '../koneksi.php';
	require '../fungsi.php';

	// Ntah akan dipakai atau tidak

	// if(isset($_POST['submitLoginPetugas'])){
	// 	$varUsername = $_POST['usernameLoginPetugas'];
	// 	$varPassword = $_POST['passwordLoginPetugas'];
	// 	$varPassword = md5($varPassword);

	// 	$sql = "SELECT * FROM petugas WHERE username='$varUsername' AND password='$varPassword';";

	// 	$result = mysqli_query($conn, $sql);

	// 	if(mysqli_num_rows($result) == 1) {
	// 		$login = mysqli_fetch_assoc($result);

	// 		if($login['username'] == $varUsername && $login['password'] == $varPassword){
	// 			$_SESSION['nama_petugas'] = $login['nama_petugas'];
	// 			$_SESSION['username'] = $login['username'];
	// 			$_SESSION['password'] = $login['password'];
	// 			$_SESSION['telpon'] = $login['telp'];
	// 			$_SESSION['level'] = $login['level'];

	// 			echo notifikasi('Login Berhasil!', 'dashboard.php');
	// 		}
	// 		else{
	// 			echo notifikasi('Username atau Password salah!', 'login.php');
	// 		}
	// 	}
	// 	else{
	// 		echo notifikasi('Username atau Password salah!', 'login.php');
	// 	}
	// }

?>