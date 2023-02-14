<?php

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>

<div class="sidebar">
  <a href="dashboard.php">DASHBOARD</a>
  <a class="active" href="formPengaduan.php">FORM PENGADUAN</a>
  <a href="riwayatPengaduan.php">RIWAYAT PENGADUAN</a>
  <a href="#">LOGOUT</a>
</div>

<div class="content">
  <h2>FORM PENGADUAN</h2>

  <div class="container">

  <form action="prosesUser.php" method="POST" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="subject">Subject:</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="isiLaporanPengaduan" placeholder="ISI LAPORAN ..." style="height:200px"></textarea>
    </div>
  </div>

   <div class="row">
    <div class="col-25">
      <label for="subject">Foto:</label>
    </div>

    <div class="col-75">
  <label for="images">
    <input type="file" name="isiFotoLaporanPengaduan" id="images" accept="image/*" required>
  </label>
    </div>

  </div>

  <br>
  <div class="row">
    <input type="submit" name="submitIsiLaporanPengaduan" value="Submit">
  </div>

  </form>

</div>
</div>

</body>

</html>