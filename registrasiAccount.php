<?php

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REGISTRASI AKUN</title>
</head>
<body>
	<center>
	<form action="prosesUser.php" method="POST">
		<table>
			<tr>
				<td>
					<label>NIK</label>
				</td>

				<td>
					:
				</td>

				<td>
					<input type="number" name="nikRegistrasiPengguna" required>
				</td>
			</tr>

			<tr>
				<td>
					<label>NAMA</label>
				</td>

				<td>
					:
				</td>

				<td>
					<input type="text" name="namaRegistrasiPengguna" required>
				</td>
			</tr>

			<tr>
				<td>
					<label>USERNAME</label>
				</td>

				<td>
					:
				</td>

				<td>
					<input type="text" name="usernameRegistrasiPengguna" required>
				</td>
			</tr>

			<tr>
				<td>
					<label>PASSWORD</label>
				</td>

				<td>
					:
				</td>

				<td>
					<input type="password" name="passwordRegistrasiPengguna" required>
				</td>
			</tr>

			<tr>
				<td>
					<label>TELEPON/HP</label>
				</td>

				<td>
					:
				</td>

				<td>
					<input type="text" name="teleponRegistrasiPengguna" required>
				</td>
			</tr>
		</table>

		<input type="submit" name="submitRegistrasiPengguna" value="Registrasi">

	</form>

	<p>Sudah Punya Akun? Klik <a href="login.php">Di Sini</a></p>

	</center>

</body>
</html>