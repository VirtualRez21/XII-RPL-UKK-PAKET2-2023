<?php

	require 'koneksi.php';
	require 'fungsi.php';

	if(isset($_POST['submitRegistrasiPengguna'])){
		$varNik = $_POST['nikRegistrasiPengguna'];
		$varNama = $_POST['namaRegistrasiPengguna'];
		$varUsername = $_POST['usernameRegistrasiPengguna'];
		$varPassword = $_POST['passwordRegistrasiPengguna'];
		$varTelp = $_POST['teleponRegistrasiPengguna'];

		$sql = "SELECT * FROM masyarakat WHERE nik='$varNik';";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) == 1){
			$row = mysqli_fetch_assoc($result);
			if($row['nik'] == $varNik){
				echo notifikasi('NIK Sudah Terdaftar, Silahkan Gunakan NIK Yang Lain', 'registrasiAccount.php');
			}
		}

		elseif(mysqli_num_rows($result) != 1){
			$varPassword = md5($varPassword);

			$sql = "INSERT INTO masyarakat VALUES('$varNik', '$varNama', '$varUsername', '$varPassword', '$varTelp');";
			$result = mysqli_query($conn, $sql);

			echo notifikasi('Registrasi Berhasil!', 'login.php');
		}

		else{
			echo notifikasi('Registrasi Tidak Berhasil!', 'registrasiAccount.php');
		}
	}

	elseif(isset($_POST['submitLoginPengguna'])){
		$varNik = $_POST['nikLoginPengguna'];
		$varPassword = $_POST['passwordLoginPengguna'];
		$varPassword = md5($varPassword);

		$sql = "SELECT * FROM masyarakat WHERE nik='$varNik' AND password='$varPassword';";

		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) == 1) {
			$login = mysqli_fetch_assoc($result);

			if($login['nik'] == $varNik && $login['password'] == $varPassword){
				$_SESSION['nik'] = $login['nik'];
				$_SESSION['username'] = $login['username'];
				$_SESSION['password'] = $login['password'];
				$_SESSION['nama'] = $login['nama'];
				$_SESSION['telpon'] = $login['telp'];

				echo notifikasi('Login Berhasil!', 'dashboard.php');
			}
			else{
				echo notifikasi('NIK atau Password salah!', 'login.php');
			}
		}
		else{
			echo notifikasi('NIK atau Password salah!', 'login.php');
		}
	}

?>