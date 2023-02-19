<?php

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <title>LOGIN PENGADUAN MASYARAKAT</title>
</head>

<body>
  <form action="prosesUser.php" method="POST" class="formLoginRegist">
    <h2 style="text-align: center;">FORM LOGIN</h2>
    <div class="container">
      <label for="nikLoginPengguna"><b>NIK:</b></label>
      <input type="number" placeholder="Enter NIK" name="nikLoginPengguna" required>

      <label for="passwordLoginPengguna"><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="passwordLoginPengguna" required>
      
      <center> 
        <button type="submit" name="submitLoginPengguna">Login</button>
      </center> 

    </div>
  </form>

  <center>
    <p>Belum Punya Akun? Klik <a href="registrasiAccount.php">Di Sini</a></p>
  </center>

</body>
</html>