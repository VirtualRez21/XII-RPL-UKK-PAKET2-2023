<?php
  
  require 'koneksi.php';

  if($_SESSION['nik'] == ""){
    header('location: login.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <title>DASHBOARD PENGADUAN MASYARAKAT</title>
</head>
<body>
  <div class="sidebar">
    <a class="active" href="dashboard.php">DASHBOARD</a>
    <a href="formPengaduan.php">FORM PENGADUAN</a>
    <a href="riwayatPengaduan.php">RIWAYAT PENGADUAN</a>
    <a href="logout.php">LOGOUT</a>
  </div>

  <div class="content">
    <div id=rela>
      <h2>SELAMAT DATANG <?php echo $_SESSION['nama'];?>
      </h2>
    </div>
    <div id="relative"> <h4><p>website ini adalah sebuah platform </p>
      <p>untuk masyarakat memberikan keluhan dan pengaduan</p>
      <P>agar dapat segera ditanggapi</P></h4>
    </div>
  </div>
</body>
</html>