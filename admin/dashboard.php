<?php
  
  require '../koneksi.php';

  if($_SESSION['nama_petugas'] == ""){
    header('location: login.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../CSS/style.css">
  <title>DASHBOARD PETUGAS PENGADUAN MASYARAKAT</title>
</head>
<body>

  <div class="sidebar">
    <a class="active" href="dashboard.php">DASHBOARD</a>
    <a href="#">DAFTAR PENGADUAN</a>
    <?php
      if($_SESSION['level'] == 'admin'){
        echo "<a href='tambahPetugas.php'>TAMBAH PETUGAS</a>
        <a href='#'>LIHAT PETUGAS</a>";
      }
    ?>
    <a href="#">LOGOUT</a>
  </div>

  <div class="content">
    <div id=rela>
      <h2>SELAMAT DATANG <?php echo $_SESSION['nama_petugas'];?></h2>
    </div>
    
    <div id="relative"> <h4><p> website ini adalah sebuah platform </p>
      <p>untuk petugas verifikasi & validasi serta menanggapi </p>
      <P>keluhan dan pengaduan masyarakat </P></h4>
    </div>
  </div>

</body>
</html>