<?php
	require 'function.php';
	require '../fungsi.php';
	session_start();

	$login = new Signin();

	if(isset($_POST["submitLoginPetugas"])){
		$result = $login->login($_POST["usernameLoginPetugas"], $_POST["passwordLoginPetugas"]);

		if($result == 1){
			echo notifikasi('Login Berhasil!', 'dashboard.php');
		}
		elseif($result == 10){
			echo notifikasi('Username atau Password Salah', 'login.php');
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN PETUGAS PENGADUAN MASYARAKAT</title>
</head>
<body>
	<center>

		<form action="login.php" method="POST">

		<table>
			<tr>
				<td>
					Username
				</td>
				<td>
					:
				</td>
				<td>
					<input type="text" name="usernameLoginPetugas" required>
				</td>
			</tr>

			<tr>
				<td>
					Password
				</td>
				<td>
					:
				</td>
				<td>
					<input type="password" name="passwordLoginPetugas" required>
				</td>
			</tr>
		</table>

		<input type="submit" name="submitLoginPetugas" value="Login">

		</form>

	</center>
</body>
</html>