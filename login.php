<?php

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN PENGADUAN MASYARAKAT</title>
</head>
<body>
	<center>

		<form action="prosesUser.php" method="POST">

		<table>
			<tr>
				<td>
					NIK
				</td>
				<td>
					:
				</td>
				<td>
					<input type="number" name="nikLoginPengguna" required>
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
					<input type="password" name="passwordLoginPengguna" required>
				</td>
			</tr>
		</table>

		<input type="submit" name="submitLoginPengguna" value="Login">

		</form>

		<p>Belum Punya Akun? Klik <a href="registrasiAccount.php">Di Sini</a></p>

	</center>
</body>
</html>