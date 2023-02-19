<?php

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <title>REGISTRASI AKUN PENGADUAN MASYARAKAT</title>
</head>

<body>
  <form action="prosesUser.php" method="POST" class="formLoginRegist">
    <h2 style="text-align: center;">FORM REGISTRASI</h2>
    <div class="container">
      <label for="nikRegistrasiPengguna"><b>NIK:</b></label>
      <input type="number" placeholder="Enter NIK" name="nikRegistrasiPengguna" required>

      <label for="namaRegistrasiPengguna"><b>Nama:</b></label>
      <input type="text" placeholder="Enter Nama" name="namaRegistrasiPengguna" required>

      <label for="usernameRegistrasiPengguna"><b>Username:</b></label>
      <input type="text" placeholder="Enter Username" name="usernameRegistrasiPengguna" required>

      <label for="passwordRegistrasiPengguna"><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="passwordRegistrasiPengguna" required>

      <label for="teleponRegistrasiPengguna"><b>Telepon/HP:</b></label>
      <input type="text" placeholder="Enter Telepon/HP" name="teleponRegistrasiPengguna" required>
      
      <center> 
        <button type="submit" name="submitRegistrasiPengguna">Registrasi</button>
      </center> 

    </div>
  </form>

  <center>
    <p>Sudah Punya Akun? Klik <a href="login.php">Di Sini</a></p>
  </center>
  
</body>
</html>