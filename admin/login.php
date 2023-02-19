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
  <link rel="stylesheet" type="text/css" href="../CSS/style.css">
  <title>LOGIN PETUGAS PENGADUAN MASYARAKAT</title>
</head>

<body>
  <form action="login.php" method="POST" class="formLoginRegist">
    <h2 style="text-align: center;">FORM LOGIN PETUGAS</h2>
    <div class="container">
      <label for="usernameLoginPetugas"><b>Username:</b></label>
      <input type="text" placeholder="Enter Username" name="usernameLoginPetugas" required>

      <label for="passwordLoginPetugas"><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="passwordLoginPetugas" required>
      
      <center>
        <button type="submit" name="submitLoginPetugas">Login</button>
      </center> 

    </div>
  </form>

</body>
</html>